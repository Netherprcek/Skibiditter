<?php

namespace App\Controllers;

use App\View;
use App\Models\PostsModel;
use App\Models\NotificationsModel;

class ExploreController
{
    public function index()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) {
            $page = 1;
        }
        $limit = 5;
        $offset = ($page - 1) * $limit;

        $postsData = (new PostsModel())->fetchExploreData($limit, $offset);
        $posts = $postsData['posts'] ?? [];
        $notifData = (new NotificationsModel())->getNotifications();
        $notifications = $notifData['notifications'] ?? [];


        $user = null;
        if (isset($_SESSION['user_id'])) {
            $user = [
                'user_id' => $_SESSION['user_id'],
                'username' => $_SESSION['username'],
                'avatar' => $_SESSION['avatar']
            ];
        }

        // Check if there are more pages
        $hasMorePages = count($posts) === $limit;


        return View::make('explorePage', [
            'pageTitle' => 'Explore',
            'post' => $posts,
            'session_user' => $user,
            'post_error' => $_SESSION['post_error'] ?? null,
            'currentPage' => $page,
            'hasMorePages' => $hasMorePages,
            'previousPage' => $page > 1 ? $page - 1 : null,
            'nextPage' => $hasMorePages ? $page + 1 : null,
            'notifications' => $notifications
        ]);
    }
}
