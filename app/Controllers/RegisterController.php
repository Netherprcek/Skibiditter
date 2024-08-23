<?php

namespace App\Controllers;

use App\View;
use App\Models\RegisterModel;

class RegisterController
{
    public function showRegisterForm()
    {
        return View::make('register');
    }

    public function register()
    {
        // Validate input
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password) || strlen($username) < 3 || strlen($password) < 7) {
            return View::make('register', [
                'error' => 'Username must be at least 3 characters long and password must be at least 7 characters long'
            ]);
        }

        // Instantiate the RegisterModel
        $registerModel = new RegisterModel();

        // Attempt to register the user
        $result = json_decode($registerModel->registerUser($username, $password), true);

        if ($result['success']) {
            // Redirect to login page
            header('Location: /login');
            exit;
        } else {
            // Registration failed, pass error to template
            return View::make('register', [
                'error' => $result['message'],
                'showNotification' => true
            ]);
        }
    }
}