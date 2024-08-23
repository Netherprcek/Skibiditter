<?php

namespace App\Controllers;

use App\View;
use App\Models\PostsModel;
use App\Models\ProfileModel;
use App\Models\NotificationsModel;

class ProfileController
{
    /**
     * Shows the my profile page
     * @return View $result -> The my profile page
     * @param array $posts -> The posts
     * @param array $profile -> The profile card elements
     * @param array $notifications -> The notifications for right bar
     */
    public function showMyProfile()
    {
        $postsData = (new PostsModel())->getUserPosts($_SESSION['username']);
        $posts = $postsData['posts'];
        $profile = (new ProfileModel())->getProfileCard($_SESSION['username']);
        $notifData = (new NotificationsModel())->getNotifications();
        
        $notifications = $notifData['notifications'] ?? [];
        $is_session = isset($_SESSION['user_id']);

        return View::make('profile', [
            'session_user' => $_SESSION,
            'is_session' => $is_session,
            'post' => $posts,
            'postCount' => count($posts),
            'pageTitle' => 'Your Posts',
            'profile' => $profile,
            'notifications' => $notifications
        ]);
    }

    /**
     * Shows the user profile
     * @param string $usernameUri -> The username
     * @return View $result -> The user profile
     */
    public function showUserProfile($usernameUri)
    {
        $postsData = (new PostsModel())->getUserPosts($usernameUri);
        $posts = $postsData['posts'];
        $is_session = isset($_SESSION['user_id']);

        $profile = (new ProfileModel())->getProfileCard($usernameUri);
        if (isset($profile['user_id'])) {
            $profile['is_following'] = (new ProfileModel())->isFollowing($profile['user_id']);
        }

        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];
        if (!$profile) {
            return View::make('errors/404', [
                'session_user' => $_SESSION,
                'pageTitle' => 'User not found'
            ]);
        }

        return View::make('otherUserProfile', [
            'username' => $usernameUri,
            'post' => $posts,
            'postCount' => count($posts),
            'is_session' => $is_session,
            'session_user' => $_SESSION,
            'pageTitle' => "{$usernameUri}'s posts",
            'profile' => $profile,
            'notifications' => $notifications
        ]);
    }

    /**
     * Shows the edit profile form
     * @param array $profile -> The profile card elements
     * @param array $notifications -> The notifications for right bar
     * @return View $result -> The edit profile form
     */
    public function showEditProfileForm()
    {
        $profile = (new ProfileModel())->getProfileCard($_SESSION['username']);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];
        $is_session = isset($_SESSION['user_id']);

        return View::make('editProfile', [
            'username' => $_SESSION['username'],
            'session_user' => $_SESSION,
            'is_session' => $is_session,
            'pageTitle' => "Edit your profile",
            'profile' => $profile,
            'notifications' => $notifications
        ]);
    }

    /**
     * Edits the profile
     * @param string $username -> The username
     * @param string $avatar -> The avatar
     * @param string $background -> The background
     * @param string $bio -> The bio
     */
    public function editProfile()
    {
        $username = $_SESSION['username'] ?? null;
        $avatar = null;
        $background = null;
        $bio = $_POST['bio'] ?? null; // Get bio from POST data

        if ($username) {
            // Handle file upload for avatar_file
            if (isset($_FILES['avatar_file']) && $_FILES['avatar_file']['error'] == UPLOAD_ERR_OK) {
                $maxSize = 2 * 1024 * 1024; // 2MB in bytes
                if ($_FILES['avatar_file']['size'] > $maxSize) {
                    $_SESSION['profile_error'] = 'Avatar file size exceeds 2MB';
                    header('Location: /' . $username . '/edit-profile');
                    exit;
                }

                $uploadDir = 'storage/uploads/avatars/';
                // Ensure the directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                $uploadFile = $uploadDir . basename($_FILES['avatar_file']['name']);
                if (move_uploaded_file($_FILES['avatar_file']['tmp_name'], $uploadFile)) {
                    $avatar = '/' . $uploadFile; // Update the avatar path
                } else {
                    $_SESSION['profile_error'] = 'Failed to upload avatar file';
                    header('Location: /' . $username . '/edit-profile');
                    exit;
                }
            }

            // Handle file upload for background_file
            if (isset($_FILES['background_file']) && $_FILES['background_file']['error'] == UPLOAD_ERR_OK) {
                $maxSize = 2 * 1024 * 1024; // 2MB in bytes
                if ($_FILES['background_file']['size'] > $maxSize) {
                    $_SESSION['profile_error'] = 'Background file size exceeds 2MB';
                    header('Location: /' . $username . '/edit-profile');
                    exit;
                }

                $uploadDir = 'storage/uploads/backgrounds/';

                $uploadFile = $uploadDir . basename($_FILES['background_file']['name']);
                if (move_uploaded_file($_FILES['background_file']['tmp_name'], $uploadFile)) {
                    $background = '/' . $uploadFile; // Update the background path
                } else {
                    $_SESSION['profile_error'] = 'Failed to upload background file';
                    header('Location: /' . $username . '/edit-profile');
                    exit;
                }
            }

            $profileModel = new ProfileModel();
            $profileModel->updateProfile($username, $avatar, $background, $bio);

            // Update session variables if they were updated
            if ($avatar) {
                $_SESSION['avatar'] = $avatar;
            }
            if ($background) {
                $_SESSION['background'] = $background;
            }
            if ($bio) {
                $_SESSION['bio'] = $bio;
            }
        }

        header('Location: /profile');
        exit;
    }

    /**
     * Follows a user
     * @param int $followed_id -> The followed user id
     */
    public function followUser($followed_id)
    {
        error_log("FollowUser: " . $followed_id . " " . $_SESSION['user_id']);
        // Prevent user from following themselves
        if ($_SESSION['user_id'] == $followed_id) {
            $result = ['success' => false, 'message' => 'You cannot follow yourself'];
        } else {
            $result = (new ProfileModel())->followHandler($followed_id, true);
        }

        if ($this->isAjaxRequest()) {
            header('Content-Type: application/json');
            echo json_encode($result);
        } else {
            // Redirect back to the profile page
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    /**
     * Unfollows a user
     * @param int $followed_id -> The followed user id
     */
    public function unfollowUser($followed_id)
    {
        error_log("UnfollowUser: " . $followed_id . " " . $_SESSION['user_id']);
        // Prevent user from unfollowing themselves
        if ($_SESSION['user_id'] == $followed_id) {
            $result = ['success' => false, 'message' => 'You cannot unfollow yourself'];
        } else {
            $result = (new ProfileModel())->followHandler($followed_id, false);
        }

        if ($this->isAjaxRequest()) {
            header('Content-Type: application/json');
            echo json_encode($result);
        } else {
            // Redirect back to the profile page
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    /**
     * Checks if the request is an AJAX request
     * @return bool $result -> The result
     */
    private function isAjaxRequest()
    {
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    /**
     * Shows the followers page
     * @param string $username -> The username
     * @param array $followers -> The followers
     * @param array $profileCard -> The profile card elements
     * @param array $notifications -> The notifications for right bar
     * @return View $result -> The followers page
     */
    public function showFollowers($username)
    {
        $user_id = (new ProfileModel())->getUserId($username);

        $followers = (new ProfileModel())->getFollowers($user_id);
        $profileCard = (new ProfileModel())->getProfileCard($username);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];
        $profileCard['is_following'] = (new ProfileModel())->isFollowing($user_id);
        $is_session = isset($_SESSION['user_id']);

        foreach ($followers as &$user) { // Use reference to modify the original array
            $user['is_following'] = (new ProfileModel())->isFollowing($user['user_id']);
            $user['is_current_user'] = ($user['username'] === $_SESSION['username']);
        }

        return View::make("followers", [
            'followers' => $followers,
            'pageTitle' => "Followers",
            'is_session' => $is_session,
            'session_user' => $_SESSION,
            'profile' => $profileCard,
            'notifications' => $notifications
        ]);
    }

    /**
     * Shows the following page 
     * @param string $username -> The username
     * @param array $following -> The following users
     * @param array $profileCard -> The profile card elements
     * @param array $notifications -> The notifications for right bar
     * @return View $result -> The following page
     */
    public function showFollowing($username)
    {
        $user_id = (new ProfileModel())->getUserId($username);
        $following = (new ProfileModel())->getFollowing($user_id);
        $profileCard = (new ProfileModel())->getProfileCard($username);
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];
        // Check if the user is following the user
        $profileCard['is_following'] = (new ProfileModel())->isFollowing($user_id);
        $is_session = isset($_SESSION['user_id']);

        foreach ($following as &$user) {
            $user['is_following'] = (new ProfileModel())->isFollowing($user['user_id']);
            $user['is_current_user'] = ($user['username'] === $_SESSION['username']);
        }

        return View::make("following", [
            'following' => $following,
            'pageTitle' => "Following",
            'is_session' => $is_session,
            'session_user' => $_SESSION,
            'profile' => $profileCard,
            'notifications' => $notifications
        ]);
    }

    /**
     * Fetches the user ID
     * @param string $username -> The username
     * @return int $result -> The user ID
     */
    public function getUserId($username)
    {
        return (new ProfileModel())->getUserId($username);
    }
}
