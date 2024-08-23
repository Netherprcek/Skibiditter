<?php

namespace App\Models;

use App\Model;

class LoginModel extends Model
{
    /**
     * @param array $user - Fetched user from the database
     * @return array|false - Returns the user info if the password is correct, otherwise returns false
     */
    public function authenticate($username, $password)
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, login successful
            return $user;
        } else {
            error_log("User not found: $username");
            // Login failed
            return false;
        }
    }
}
