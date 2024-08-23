<?php

namespace App\Models;

use App\Model;
use PDO;

class SearchModel extends Model
{
    /**
     * Fetches all users to display as recommendations
     * @return array $result -> The recommendations
     */
    public function showRecommendations()
    {
        $query =
            "SELECT username, avatar, user_id
            FROM users
            WHERE username != :session_user
            AND user_id NOT IN (
                SELECT followed_id
                FROM follows
                WHERE follower_id = :session_user_id
            )
        ";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            ':session_user' => $_SESSION['username'],
            ':session_user_id' => $_SESSION['user_id']
        ]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Searches for users
     * @param string $searchTerm -> The search term
     * @return array $result -> The users you seearched for
     */
    public function searchUsers($searchTerm)
    {
        
        $query = "SELECT * FROM users WHERE username LIKE :searchTerm";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':searchTerm' => '%' . $searchTerm . '%']);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        error_log("result: " . json_encode($result));
        // Check if the result is empty and return "No Users Found" if true
        if (empty($result)) {
            return "No Users Found";
        }

        return $result;
    }
}