<?php

namespace App\Models;

use App\Model;
use App\View;
use PDO;
use DateTime;

class postsModel extends Model
{
    /**
     * Fetches all posts from the database
     * @param $result -> Fetches all posts from the database
     * @return $data -> Returns the posts and the number of posts
     */
    public function fetchExploreData($limit, $offset)
    {
        $user_id = $_SESSION['user_id'] ?? null;
        if ($user_id) {
            $query = 'SELECT posts.*, users.avatar, 
        (SELECT COUNT(*) FROM comments WHERE comments.id_post = posts.id_post) AS comment_count,
        CASE WHEN likes.user_id IS NOT NULL THEN 1 ELSE 0 END AS liked
        FROM posts  
        LEFT JOIN users ON posts.username = users.username
        LEFT JOIN likes ON posts.id_post = likes.id_post AND likes.user_id = ?
        WHERE posts.user_id != ? AND NOT EXISTS (
        SELECT 1 
        FROM follows 
        WHERE follows.followed_id = users.user_id 
        AND follows.follower_id = ?
        )
        ORDER BY posts.created_at DESC
        LIMIT ? OFFSET ?';
        } else {
            $query = 'SELECT posts.*, users.avatar, 
            (SELECT COUNT(*) FROM comments WHERE comments.id_post = posts.id_post) AS comment_count
            FROM posts  
            LEFT JOIN users ON posts.username = users.username
            ORDER BY posts.created_at DESC
            LIMIT ? OFFSET ?';
        }

        try {
            $stmt = $this->db->prepare($query);
            if (!$stmt) {
                throw new \Exception("Failed to prepare statement: " . implode(" ", $this->db->errorInfo()));
            }
            if ($user_id) {
                $stmt->execute([$user_id, $user_id, $user_id, $limit, $offset]);
            } else {
                $stmt->execute([$limit, $offset]);
            }
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Add is_owner flag to each post, format the date, and make links clickable
            foreach ($result as &$post) {
                $post['is_owner'] = $post['username'] == $_SESSION['username'];

                $date = new DateTime($post['created_at']);
                $post['created_at'] = $date->format('F j, Y, g:i A');

                // Make links clickable with default and hover colors
                $post['post_text'] = preg_replace(
                    '/(https?:\/\/[^\s]+)/',
                    '<a href="$1" target="_blank" class="text-blue-500">$1</a>',
                    $post['post_text']
                );
            }

            // Prepare data for Mustache template
            $data = [
                'posts' => $result,
                'postCount' => count($result),
            ];

            error_log("User ID: " . $user_id);
            error_log("Data: " . json_encode($data));
            error_log("Query: " . $query);

            return $data;
        } catch (\Exception $e) {
            error_log("Error in fetchExploreData: " . $e->getMessage());
            return ['posts' => []];
        }
    }

    /**
     * Fetches all posts from the database
     * @param $result -> Fetches all posts from the database
     * @return $data -> Returns the posts and the number of posts
     */
    public function fetchHomeData($limit, $offset)
    {
        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            error_log("User ID not found in session.");
            return ['posts' => []];
        } else {
            error_log("User ID found in session: " . $userId);
        }

        $sql = "SELECT DISTINCT posts.*, users.avatar, 
        (SELECT COUNT(*) FROM comments WHERE comments.id_post = posts.id_post) AS comment_count,
        CASE WHEN likes.user_id IS NOT NULL THEN 1 ELSE 0 END AS liked
        FROM posts  
        LEFT JOIN users ON posts.username = users.username
        LEFT JOIN likes ON posts.id_post = likes.id_post AND likes.user_id = ?
        LEFT JOIN follows ON follows.followed_id = users.user_id
        WHERE follows.follower_id = ? OR posts.user_id = ?
        ORDER BY posts.created_at DESC
        LIMIT ? OFFSET ?";

        try {
            $stmt = $this->db->prepare($sql);
            if (!$stmt) {
                throw new \Exception("Failed to prepare statement: " . implode(" ", $this->db->errorInfo()));
            }

            $stmt->execute([$userId, $userId, $userId, $limit, $offset]);
            $posts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            // Add is_owner flag to each post, format the date, and make links clickable
            foreach ($posts as &$post) {
                $post['is_owner'] = $post['username'] == $_SESSION['username'];

                $date = new DateTime($post['created_at']);
                $post['created_at'] = $date->format('F j, Y, g:i A');

                // Nice color for links, mmm nice
                $post['post_text'] = preg_replace(
                    '/(https?:\/\/[^\s]+)/',
                    '<a href="$1" target="_blank" class="text-blue-500">$1</a>',
                    $post['post_text']
                );
            }
            return ['posts' => $posts];
        } catch (\Exception $e) {
            error_log("Error in fetchHomeData: " . $e->getMessage());
            return ['posts' => []];
        }
    }

    public function sendPostData($post_text, $username, $user_id, $img)
    {
        $this->db->beginTransaction();
        $stmt = $this->db->prepare('INSERT INTO posts (post_text, username, user_id, likes, created_at, img) VALUES (?, ?, ?, 0, NOW(), ?)');
        $stmt->execute([$post_text, $username, $user_id, $img]);
        $this->db->commit();
    }

    public function deletePost($post_id)
    {
        // Debugging statement to check if the method is called
        error_log("deletePost method called with post_id: " . $post_id);

        try {
            $this->db->beginTransaction();

            // Delete related likes first
            $stmt1 = $this->db->prepare("DELETE FROM likes WHERE id_post = :post_id");
            $stmt1->bindParam(':post_id', $post_id, PDO::PARAM_INT);
            $stmt1->execute();

            // Now delete the post
            $stmt2 = $this->db->prepare("DELETE FROM posts WHERE id_post = :post_id");
            $stmt2->bindParam(':post_id', $post_id, PDO::PARAM_INT);
            $stmt2->execute();

            $stmt3 = $this->db->prepare("DELETE FROM comments WHERE id_post = :post_id");
            $stmt3->bindParam(':post_id', $post_id, PDO::PARAM_INT);
            $stmt3->execute();

            $this->db->commit();

            // Debugging statement to confirm deletion
            error_log("Post with ID " . $post_id . " and its related likes deleted successfully.");
        } catch (\PDOException $e) {
            $this->db->rollBack();
            // Debugging statement to log any errors
            error_log("Failed to delete post with ID " . $post_id . ". Error: " . $e->getMessage());
        }
    }

    public function editPost($post_id, $post_text, $img = null)
    {
        if ($img) {
            $stmt = $this->db->prepare('UPDATE posts SET post_text = ?, img = ? WHERE id_post = ?');
            $stmt->execute([$post_text, $img, $post_id]);
        } else {
            $stmt = $this->db->prepare('UPDATE posts SET post_text = ? WHERE id_post = ?');
            $stmt->execute([$post_text, $post_id]);
        }
    }


    public function getUserposts($username)
    {
        $user_id = $_SESSION['user_id'] ?? null;

        $stmt = $this->db->prepare(
            'SELECT posts.*, users.avatar, 
        (SELECT COUNT(*) FROM comments WHERE comments.id_post = posts.id_post) AS comment_count,
        CASE WHEN likes.user_id IS NOT NULL THEN 1 ELSE 0 END AS liked
        FROM posts  
        LEFT JOIN users ON posts.username = users.username
        LEFT JOIN likes ON posts.id_post = likes.id_post AND likes.user_id = :user_id
        WHERE posts.username = :username
     ORDER BY posts.created_at DESC'
        );
        $stmt->execute([':user_id' => $user_id, ':username' => $username]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Add is_owner flag to each post
        foreach ($result as &$post) {
            $post['is_owner'] = $post['username'] == $_SESSION['username'];
            // Format the created_at date
            $date = new DateTime($post['created_at']);
            $post['created_at'] = $date->format('F j, Y, g:i A');

            $post['post_text'] = preg_replace(
                '/(https?:\/\/[^\s]+)/',
                '<a href="$1" target="_blank" class="text-blue-500">$1</a>',
                $post['post_text']
            );
        }

        // Prepare data for Mustache template
        $data = [
            'posts' => $result,
            'postCount' => count($result),
            'avatar' => $result[0]['avatar'] ?? null // Handle case where there are no posts
        ];

        return $data;
    }

    public function getPostById($id_post)
    {
        $stmt = $this->db->prepare(
            'SELECT posts.*, users.avatar 
            FROM posts 
            LEFT JOIN users ON posts.username = users.username
            WHERE id_post = ?'
        );
        $stmt->execute([$id_post]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Make links clickable with default and hover colors
        $result['post_text'] = preg_replace(
            '/(https?:\/\/[^\s]+)/',
            '<a href="$1" target="_blank" class="text-blue-500">$1</a>',
            $result['post_text']
        );
        // Format the created_at date
        $date = new DateTime($result['created_at']);
        $result['created_at'] = $date->format('F j, Y, g:i A');

        return $result;
    }

    public function getCommentsByIdPost($id_post)
    {
        try {
            $query = 'SELECT comments.*, users.avatar, 
                      (SELECT COUNT(*) FROM comments AS replies WHERE replies.id_parentComment = comments.id_comment) AS reply_count 
                      FROM comments 
                      LEFT JOIN users ON comments.username = users.username
                      WHERE comments.id_post = ? AND comments.id_parentComment IS NULL
                      ORDER BY comments.created_at DESC';

            $stmt = $this->db->prepare($query);

            // Check if the statement was prepared successfully
            if (!$stmt) {
                throw new \Exception("Failed to prepare statement: " . implode(" ", $this->db->errorInfo()));
            }

            $stmt->execute([$id_post]);

            // Check if the statement executed successfully
            if ($stmt->errorCode() != '00000') {
                throw new \Exception("Failed to execute statement: " . implode(" ", $stmt->errorInfo()));
            }

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Add is_owner flag to each post
            foreach ($result as &$post) {
                $post['is_owner'] = $post['username'] == $_SESSION['username'];

                // Format the created_at date
                $date = new DateTime($post['created_at']);
                $post['created_at'] = $date->format('F j, Y, g:i A');
            }

            // Check if results are fetched successfully
            if ($result === false) {
                throw new \Exception("Failed to fetch results: " . implode(" ", $stmt->errorInfo()));
            }


            return $result;
        } catch (\Exception $e) {
            // Log the error message
            error_log($e->getMessage());
            // Output the error message directly for debugging
            echo "An error occurred while fetching comments: " . $e->getMessage();
            return [];
        }
    }

    public function getParentComment($id_comment)
    {
        $stmt = $this->db->prepare(
            'SELECT comments.*, users.avatar FROM comments 
            LEFT JOIN users ON comments.username = users.username
            WHERE id_comment = ?'
        );
        $stmt->execute([$id_comment]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getReplies($id_comment)
    {
        $stmt = $this->db->prepare('SELECT comments.*, users.avatar, 
        (SELECT COUNT(*) FROM comments AS replies WHERE replies.id_parentComment = comments.id_comment) AS reply_count 
        FROM comments
        LEFT JOIN users ON comments.username = users.username
        WHERE id_parentComment = ?');
        $stmt->execute([$id_comment]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        error_log("Replies fetched: " . json_encode($result));
        return $result;
    }

    public function sendCommentToDb($post_id, $comment_text, $username)
    {
        try {
            $this->db->beginTransaction();
            $stmt = $this->db->prepare('INSERT INTO comments (id_post, comment_text, username, created_at) VALUES (?, ?, ?, NOW())');
            $stmt->execute([$post_id, $comment_text, $username]);
            $this->db->commit();
            error_log("Comment successfully inserted into database");
        } catch (\PDOException $e) {
            $this->db->rollBack();
            error_log("Database error: " . $e->getMessage());
            echo "Database error: " . $e->getMessage();
            exit;
        }
    }

    public function sendReplyToDb($id_post, $id_parentComment, $comment_text, $username)
    {
        if ($id_parentComment && $comment_text && $username === $_SESSION['username']) {
            try {
                $this->db->beginTransaction();
                $stmt = $this->db->prepare('INSERT INTO comments (id_post, id_parentComment, comment_text, username, created_at) VALUES (?, ?, ?, ?, NOW())');
                $stmt->execute([$id_post, $id_parentComment, $comment_text, $username]);
                $this->db->commit();
                error_log("Reply successfully inserted into database");
            } catch (\PDOException $e) {
                $this->db->rollBack();
                error_log("Database error: " . $e->getMessage());
                echo "Database error: " . $e->getMessage();
                exit;
            }
        }
    }

    public function likeHandler($post_id, $user_id)
    {
        if ($_SESSION['user_id'] == $user_id) {
            try {
                $this->db->beginTransaction();

                // Check if the user has already liked the post
                $stmt = $this->db->prepare("SELECT COUNT(*) FROM likes WHERE user_id = :user_id AND id_post = :post_id");
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':post_id', $post_id);
                $stmt->execute();
                $userHasLiked = $stmt->fetchColumn() > 0;

                if ($userHasLiked) {
                    // Perform unlike
                    $stmt = $this->db->prepare("DELETE FROM likes WHERE user_id = :user_id AND id_post = :post_id");
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->bindParam(':post_id', $post_id);
                    $stmt->execute();

                    // Decrement the likes count
                    $stmt = $this->db->prepare("UPDATE posts SET likes = likes - 1 WHERE id_post = :post_id");
                    $stmt->bindParam(':post_id', $post_id);
                    $stmt->execute();

                    $liked = false;
                } else {
                    // Perform like
                    $stmt = $this->db->prepare("INSERT INTO likes (user_id, id_post) VALUES (:user_id, :post_id)");
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->bindParam(':post_id', $post_id);
                    $stmt->execute();

                    // Increment the likes count
                    $stmt = $this->db->prepare("UPDATE posts SET likes = likes + 1 WHERE id_post = :post_id");
                    $stmt->bindParam(':post_id', $post_id);
                    $stmt->execute();

                    $liked = true;
                }

                // Get the updated like count
                $stmt = $this->db->prepare("SELECT likes FROM posts WHERE id_post = :post_id");
                $stmt->bindParam(':post_id', $post_id);
                $stmt->execute();
                $likes = $stmt->fetchColumn();

                $this->db->commit();

                // Return the updated like count and liked status as JSON
                header('Content-Type: application/json');
                echo json_encode(['success' => true, 'likes' => $likes, 'liked' => $liked]);
            } catch (\PDOException $e) {
                $this->db->rollBack();
                // Return the error as JSON
                header('Content-Type: application/json');
                echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            }
        }
    }

    public function commentsLikeHandler($comment_id, $user_id)
    {
        error_log("Comments like handler called with comment_id: " . $comment_id . " and user_id: " . $user_id);
        if ($_SESSION['user_id'] == $user_id) {
            try {
                $this->db->beginTransaction();

                // Check if the user has already liked the post
                $stmt = $this->db->prepare("SELECT COUNT(*) FROM likes WHERE user_id = :user_id AND id_comment = :comment_id");
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':comment_id', $comment_id);
                $stmt->execute();
                $userHasLiked = $stmt->fetchColumn() > 0;

                if ($userHasLiked) {
                    // Perform unlike
                    $stmt = $this->db->prepare("DELETE FROM likes WHERE user_id = :user_id AND id_comment = :comment_id");
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->bindParam(':comment_id', $comment_id);
                    $stmt->execute();

                    // Decrement the likes count
                    $stmt = $this->db->prepare("UPDATE comments SET likes = likes - 1 WHERE id_comment = :comment_id");
                    $stmt->bindParam(':comment_id', $comment_id);
                    $stmt->execute();

                    $liked = false;
                } else {
                    // Perform like
                    $stmt = $this->db->prepare("INSERT INTO likes (user_id, id_comment) VALUES (:user_id, :comment_id)");
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->bindParam(':comment_id', $comment_id);
                    $stmt->execute();

                    // Increment the likes count
                    $stmt = $this->db->prepare("UPDATE comments SET likes = likes + 1 WHERE id_comment = :comment_id");
                    $stmt->bindParam(':comment_id', $comment_id);
                    $stmt->execute();

                    $liked = true;
                }

                // Get the updated like count
                $stmt = $this->db->prepare("SELECT likes FROM comments WHERE id_comment = :comment_id");
                $stmt->bindParam(':comment_id', $comment_id);
                $stmt->execute();
                $likes = $stmt->fetchColumn();

                $this->db->commit();

                // Return the updated like count and liked status as JSON
                header('Content-Type: application/json');
                echo json_encode(['success' => true, 'likes' => $likes, 'liked' => $liked]);
            } catch (\PDOException $e) {
                $this->db->rollBack();
                // Return the error as JSON
                header('Content-Type: application/json');
                echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            }
        }
    }
}
