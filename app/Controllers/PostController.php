<?php

namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\NotificationsModel;
use App\View;

class PostController
{
    /**
     * Creates a post
     * @param string $post_text -> The post text
     * @param string $username -> The current username
     * @param int $user_id -> The current user id
     * @param string $img -> The image path
     */
    public function createPost()
    {
        unset($_SESSION['post_error']);
        $post_text = $_POST['post_text'] ?? null;
        $username = $_SESSION['username'] ?? null;
        $user_id = $_SESSION['user_id'] ?? null;
        $img = null;

        if ($post_text === null || $post_text === '' || !$username) {
            // Redirect back to the home page with an error message
            $_SESSION['post_error'] = 'Please enter a valid post text';
            header('Location: /');
            exit;
        }

        // Handle file upload for image_file
        if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] == UPLOAD_ERR_OK) {
            $maxSize = 2 * 1024 * 1024; // 2MB max size
            if ($_FILES['image_file']['size'] > $maxSize) {
                $_SESSION['post_error'] = 'File size exceeds 2MB';
                header('Location: /');
                exit;
            }

            $uploadDir = 'storage/uploads/posts/';

            $uploadFile = $uploadDir . basename($_FILES['image_file']['name']);
            if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) {
                $img = '/' . $uploadFile; // Update the image path
            } else {
                $_SESSION['post_error'] = 'Failed to upload image file';
                header('Location: /');
                exit;
            }
        }

        $postModel = new PostsModel();
        // Corrected parameter order
        $postModel->sendPostData($post_text, $username, $user_id, $img);
        error_log("Post created successfully");
        // Redirect only on success
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    /**
     * Edits a post
     * @param string $username -> The username
     * @param int $post_id -> The post id
     * @param string $post_text -> The post text
     * @param string $img -> The image path
     */
    public function editPost()
    {
        $username = $_POST['username'] ?? null;
        $post_id = $_POST['post_id'] ?? null;
        $post_text = $_POST['post_text'] ?? null;
        $img = null;

        if ($post_id && $post_text && $username === $_SESSION['username']) {
            // Handle file upload for image_file
            if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] == UPLOAD_ERR_OK) {
                $maxSize = 2 * 1024 * 1024; // 2MB in bytes
                if ($_FILES['image_file']['size'] > $maxSize) {
                    $_SESSION['post_error'] = 'File size exceeds 2MB';
                    header('Location: /' . $post_id . '/comments');
                    exit;
                }

                $uploadDir = 'storage/uploads/posts/';
                // Ensure the directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                $uploadFile = $uploadDir . basename($_FILES['image_file']['name']);
                if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) {
                    $img = '/' . $uploadFile; // Update the image path
                } else {
                    $_SESSION['post_error'] = 'Failed to upload image file';
                    header('Location: /' . $post_id . '/comments');
                    exit;
                }
            }

            $postModel = new PostsModel();
            $postModel->editPost($post_id, $post_text, $img);
        }

        header('Location: /' . $post_id . '/comments');
        exit;
    }

    /**
     * Deletes a post
     * @param string $username -> The username
     * @param int $post_id -> The post id
     */
    public function deletePost()
    {
        // Read the JSON input and decode it into an associative array
        $input = json_decode(file_get_contents('php://input'), true);

        $username = $input['username'] ?? null;
        $post_id = $input['post_id'] ?? null;

        $_SESSION['deletedata'] = $post_id;

        if ($post_id && $username === $_SESSION['username']) {
            $postModel = new PostsModel();
            $postModel->deletePost($post_id);
            $response = ['success' => true];
        } else {
            error_log("Invalid request: post_id or username mismatch");
            $response = ['success' => false, 'error' => 'Invalid request'];
        }

        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    /**
     * Creates a comment to a post
     * @param int $id_post -> The post id
     * @param string $comment_text -> The comment text
     * @param string $username -> The username
     */
    public function createComment()
    {
        $id_post = $_POST['post_id'] ?? null;
        $comment_text = $_POST['comment_text'] ?? null;
        $username = $_SESSION['username'] ?? null;


        if ($id_post && $comment_text && $username === $_SESSION['username']) {
            $postModel = new PostsModel();
            $postModel->sendCommentToDb($id_post, $comment_text, $username);
        } else {
            exit;
        }

        header('Location: /' . $id_post . '/comments');
        exit;
    }

    /**
     * Shows the comments for a post
     * @param int $id_post -> The post id
     * @return View $result -> The comments for a post
     */
    public function viewComments($id_post)
    {
        $postModel = new PostsModel();
        $post = $postModel->getPostById($id_post);
        $comments = $postModel->getCommentsByIdPost($id_post);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];

        return View::make('viewPost', [
            'comments' => $comments,
            'session_user' => $_SESSION,
            'post' => $post,
            'notifications' => $notifications
        ]);
    }

    /**
     * Shows the replies for a comment
     * @param int $id_comment -> The comment id
     * @return View $result -> The replies for a comment
     */
    public function viewReplies($id_comment)
    {
        $postModel = new PostsModel();
        $parent_comment = $postModel->getParentComment($id_comment);
        $replies = $postModel->getReplies($id_comment);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];


        return View::make('viewComment', [
            'parent_comment' => $parent_comment,
            'replies' => $replies,
            'session_user' => $_SESSION,
            'notifications' => $notifications
        ]);
    }

    /**
     * Creates a reply to a comment
     * @param int $id_parentComment -> The parent comment id
     * @param int $id_post -> The post id
     * @param string $comment_text -> The comment text
     * @param string $username -> The username
     */
    public function createReply()
    {
        $id_parentComment = $_POST['id_parentComment'] ?? null;
        $id_post = $_POST['id_post'] ?? null;
        $comment_text = $_POST['comment_text'] ?? null;
        $username = $_SESSION['username'] ?? null;

        if ($id_parentComment && $comment_text && $username === $_SESSION['username']) {
            $postModel = new PostsModel();
            $postModel->sendReplyToDb($id_post, $id_parentComment, $comment_text, $username);
            header('Location: /' . $id_parentComment . '/replies');
            exit;
        } else {
            exit;
        }
    }

    /**
     * Shows the edit post form
     * @param int $id_post -> The post id
     * @return View $result -> The edit post form
     */
    public function showEditPostForm($id_post)
    {
        $postModel = new PostsModel();
        $post = $postModel->getPostById($id_post);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];

        // HTTP_REFERER is the previous page
        $previousPage = $_SERVER['HTTP_REFERER'] ?? '/';

        return View::make('editPost', [
            'posts' => $post,
            'session_user' => $_SESSION,
            'previous_page' => htmlspecialchars($previousPage),
            'notifications' => $notifications
        ]);
    }

    /**
     * Handles the likes for posts
     */
    public function handleLike()
    {
        $user_id = $_SESSION['user_id'];
        $id_post = $_POST['id_post'];
        $postModel = new PostsModel();
        $postModel->likeHandler($id_post, $user_id);
    }

    /**
     * Handles the likes for comments
     */
    public function handleCommentLike()
    {
        $user_id = $_SESSION['user_id'];
        $comment_id = $_POST['id_comment'];
        $postModel = new PostsModel();
        $postModel->commentsLikeHandler($comment_id, $user_id);
    }
}
