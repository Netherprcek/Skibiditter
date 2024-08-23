<?php

namespace App\Controllers;

use App\View;
use App\Models\SearchModel;
use App\Models\ProfileModel;
use App\Models\NotificationsModel;

class SearchController
{
    public function showSearch()
    {
        $recommendedUsers = (new SearchModel)->showRecommendations();

        foreach ($recommendedUsers as &$user) { // Use reference to modify the original array
            $user['is_following'] = (new ProfileModel())->isFollowing($user['user_id']);
        }
        $is_session = isset($_SESSION['user_id']);

        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];

        return View::make('searchPage', [
            'profile' => $recommendedUsers,
            'is_session' => $is_session,
            'session_user' => $_SESSION,
            'pageTitle' => "Make new friends",
            'result' => "Recommended Users",
            'notifications' => $notifications
        ]);
    }

    public function searchUsers()
    {
        error_log("searchUsers method called");
        $searchTerm = $_POST['searchTerm'] ?? null;
        $searchResults = (new SearchModel())->searchUsers($searchTerm);
        $is_session = isset($_SESSION['user_id']);

        foreach ($searchResults as &$user) { // Use reference to modify the original array
            $user['is_following'] = (new ProfileModel())->isFollowing($user['user_id']);
        }

        return View::make('searchPage', [
            'profile' => $searchResults,   
            'is_session' => $is_session,
            'session_user' => $_SESSION,
            'pageTitle' => "Search Results",
            'result' => "Search Results",
        ]);
    }
}
