<?php

namespace App\Models;

use App\Model;
use PDO;
use DateTime;

class ProfileModel extends Model
{   
    /**
     * Fetches the profile card
     * @param string $username -> The username
     * @return array $result -> The profile card elements
     */
    public function getProfileCard($username)
    {
        $stmt = $this->db->prepare('SELECT users.user_id, users.username, users.avatar, users.background, users.bio, users.followers, users.following FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $result['is_owner'] = $result['username'] == $_SESSION['username'];
        }

        return $result;
    }

    /**
     * Updates the profile
     * @param string $username -> The username
     * @param string $avatar -> The avatar
     * @param string $background -> The background
     * @param string $bio -> The bio
     */
    public function updateProfile($username, $avatar = null, $background = null, $bio = null)
    {
        $fields = [];
        $params = [];

        if ($avatar) {
            $fields[] = 'avatar = ?';
            $params[] = $avatar;
        }
        if ($background) {
            $fields[] = 'background = ?';
            $params[] = $background;
        }
        if ($bio !== null) { // Check for null explicitly
            $fields[] = 'bio = ?';
            $params[] = $bio === '' ? null : $bio; // Set to null if bio is empty
        }

        if (!empty($fields)) {
            $params[] = $username;
            $stmt = $this->db->prepare('UPDATE users SET ' . implode(', ', $fields) . ' WHERE username = ?');
            $stmt->execute($params);
        }
    }

    /**
     * Follow/Unfollow handling method
     * @param int $followed_id -> The followed user id
     * @param bool $isFollow -> The follow state
     * @param bool $isFollowing -> The following state
     * @return array $result -> The follow result
     */
    public function followHandler($followed_id, $isFollow)
    {
        error_log("FollowHandler: " . $followed_id . " " . $isFollow);
        $follower_id = $_SESSION['user_id'];

        // Prevent user from following themselves
        if ($follower_id == $followed_id) {
            return ['success' => false, 'message' => 'You cannot follow yourself'];
        }

        try {
            $this->db->beginTransaction();

            // Check current follow state using isFollowing method
            $exists = $this->isFollowing($followed_id);
            
            $success = false;

            // Follow a user
            if ($isFollow && !$exists) {
                $insertFollowStmt = $this->db->prepare('INSERT INTO follows (follower_id, followed_id, created_at) VALUES (?, ?, NOW())');
                $success = $insertFollowStmt->execute([$follower_id, $followed_id]);

                $updateFollowedStmt = $this->db->prepare('UPDATE users SET followers = followers + 1 WHERE user_id = ?');
                $updateFollowedStmt->execute([$followed_id]);

                $updateFollowerStmt = $this->db->prepare('UPDATE users SET following = following + 1 WHERE user_id = ?');
                $updateFollowerStmt->execute([$follower_id]);
                // Unfollow a user
            } elseif (!$isFollow && $exists) {
                $deleteFollowStmt = $this->db->prepare('DELETE FROM follows WHERE follower_id = ? AND followed_id = ?');
                $success = $deleteFollowStmt->execute([$follower_id, $followed_id]);

                $updateFollowedStmt = $this->db->prepare('UPDATE users SET followers = followers - 1 WHERE user_id = ?');
                $updateFollowedStmt->execute([$followed_id]);

                $updateFollowerStmt = $this->db->prepare('UPDATE users SET following = following - 1 WHERE user_id = ?');
                $updateFollowerStmt->execute([$follower_id]);
            }

            $this->db->commit();

            // Update is_following based on the action and its success
            $is_following = $isFollow ? $success : !$success;

            $followerCountStmt = $this->db->prepare('SELECT followers FROM users WHERE user_id = ?');
            $followerCountStmt->execute([$followed_id]);
            $followerCount = $followerCountStmt->fetchColumn();

            return ['success' => $success, 'is_following' => $is_following, 'follower_count' => $followerCount];
        } catch (\PDOException $e) {
            $this->db->rollBack();
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    /**
     * Checks if the user is following the user
     * @param int $followed_id -> The followed user id
     * @return bool $result -> The follow result
     */
    public function isFollowing($followed_id)
    {
        $follower_id = $_SESSION['user_id'];
        $stmt = $this->db->prepare('SELECT COUNT(*) FROM follows WHERE follower_id = ? AND followed_id = ?');
        $stmt->execute([$follower_id, $followed_id]);
        return (bool)$stmt->fetchColumn();
    }

    /**
     * Fetches the followers
     * @param int $user_id -> The user id
     * @return array $result -> List of users following you
     */
    public function getFollowers($user_id)
    {
        $stmt = $this->db->prepare(
            'SELECT users.username, users.user_id, users.avatar, follows.created_at 
            FROM users 
            LEFT JOIN follows ON users.user_id = follows.follower_id
            WHERE follows.followed_id = ?'
        );

        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Format the created_at date
        foreach ($result as &$row) {
            $date = new DateTime($row['created_at']);
            $row['created_at'] = $date->format('F j, Y');
        }

        return $result;
    }

    /**
     * Fetches the following
     * @param int $user_id -> The user id
     * @return array $result -> List of users you follow
     */
    public function getFollowing($user_id)
    {
        $stmt = $this->db->prepare(
            'SELECT users.username, users.user_id, users.avatar, follows.created_at 
            FROM users 
            LEFT JOIN follows ON users.user_id = follows.followed_id
            WHERE follows.follower_id = ?'
        );

        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Format the created_at date
        foreach ($result as &$row) {
            $date = new DateTime($row['created_at']);
            $row['created_at'] = $date->format('F j, Y');
        }

        return $result;
    }

    /**
     * Fetches the user id (cuz im dumb)
     * @param string $username -> The username
     * @return int $result -> The user id
     */
    public function getUserId($username)
    {
        $stmt = $this->db->prepare('SELECT user_id FROM users WHERE username = ?');
        $stmt->execute([$username]);
        return $stmt->fetchColumn();
    }
}