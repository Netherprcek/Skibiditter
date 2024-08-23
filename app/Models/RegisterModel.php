<?php

namespace App\Models;

use App\Model;

class RegisterModel extends Model
{
    public function registerUser($username, $password)
    {
        try {
            $this->db->beginTransaction();

            // Check if the username already exists
            $checkStmt = $this->db->prepare('SELECT COUNT(*) FROM users WHERE username = ?');
            $checkStmt->execute([$username]);
            if ($checkStmt->fetchColumn() > 0) {
                return json_encode([
                    'success' => false,
                    'error' => 'username_exists',
                    'message' => 'Username already exists'
                ]);
            }

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert the username and hashed password into the database
            $stmt = $this->db->prepare('INSERT INTO users (username, password, created_at) VALUES (?, ?, NOW())');
            $stmt->execute([$username, $hashedPassword]);

            // Check if the insertion was successful
            $rowCount = $stmt->rowCount();

            if ($rowCount > 0) {
                $this->db->commit();
                return json_encode([
                    'success' => true,
                    'message' => 'User registered successfully'
                ]);
            } else {
                throw new \Exception("Failed to register user: No rows affected");
            }
        } catch (\Exception $e) {
            $this->db->rollBack();
            error_log("Registration error: " . $e->getMessage());
            return json_encode([
                'success' => false,
                'error' => 'registration_failed',
                'message' => $e->getMessage()
            ]);
        }
    }
}
