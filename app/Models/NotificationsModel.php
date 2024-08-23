<?php

namespace App\Models;

use App\Model;
use Carbon\Carbon;

class NotificationsModel extends Model
{
    public function getNotifications()
    {
        $userId = $_SESSION['user_id'] ?? null;
        if (!$userId) {
            error_log("User ID not found in session.");
            return ['notifications' => []];
        }

        $query =
            "SELECT posts.*, users.avatar
            FROM posts 
            LEFT JOIN users ON posts.user_id = users.user_id
            INNER JOIN follows ON follows.followed_id = users.user_id
            WHERE follows.follower_id = ?
            ORDER BY posts.created_at DESC
            LIMIT ?
        ";

        try {
            $stmt = $this->db->prepare($query);
            if (!$stmt) {
                throw new \Exception("Failed to prepare statement: " . implode(" ", $this->db->errorInfo()));
            }
            // Execute with parameters
            $stmt->execute([$userId, 10]);

            $posts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            // Format the created_at date
            foreach ($posts as &$post) {
                $createdAt = Carbon::createFromFormat('Y-m-d H:i:s', $post['created_at'], 'Europe/Prague')
                    ->setTimezone('UTC');
                $post['created_at'] = $createdAt->diffForHumans();
            }

            return ['notifications' => $posts];
        } catch (\Exception $e) {
            error_log("Error in fetchHomeData: " . $e->getMessage());
            return ['notifications' => []];
        }
    }
}
