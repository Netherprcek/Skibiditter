<?php

namespace App\Controllers;

use App\View;
use App\Models\LoginModel;

class LoginController
{ 
    /**
     * Shows the login form
     * @return View -> The login form
     */
    public function showLoginForm()
    {
        $sessionError = $_SESSION['error'] ?? '';
        unset($_SESSION['error']); // Clear the error after retrieving it
        return View::make('login', ['error' => $sessionError]);
    }

    /**
     * Logs in a user
     * @param string $username -> The username
     * @param string $password -> The password
     */
    public function login()
    {
        $username = $_POST['username'] ?? 'No username provided';
        $password = $_POST['password'] ?? 'No password provided';

        $loginModel = new LoginModel();
        $user = $loginModel->authenticate($username, $password);
        
        if ($user) {
            $_SESSION['user_id'] = $user['user_id'] ?? 'No user id provided';
            $_SESSION['username'] = $user['username'] ?? 'No username provided';
            $_SESSION['avatar'] = $user['avatar'] ?? 'No avatar provided';
            $_SESSION['background'] = $user['background'] ?? 'No background provided';
            unset($_SESSION['error']);
            header('Location: /');
            exit;
        } else {
            $_SESSION['error'] = "Incorrect username or password";
            header('Location: /login');
            exit;
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
