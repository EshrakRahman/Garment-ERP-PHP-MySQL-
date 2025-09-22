<?php

namespace Modules\Users;

use Core\Database\Database;
use PDO;

class UserController
{
    private $userModel;

    public function __construct($database)
    {
        $this->userModel = new User($database);
    }

    public function login(string $username, string $password)
    {
        $user = $this->userModel->findByUsername($username);

        if ($user && $this->userModel->verifyPassword($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role'] = $user['role'];

            // Role-based redirect
            switch ($user['role']) {
                case 'admin':
                    header("Location: ../../public/dashboard.php");
                    exit;
                case 'merchandiser':
                    header("Location: ../orders/index.php");
                    exit;
                case 'storekeeper':
                    header("Location: ../stock/index.php");
                    exit;
                case 'production':
                    header("Location: ../production/index.php");
                    exit;
                case 'finance':
                    header("Location: ../finance/index.php");
                    exit;
            }
        } else {
            return "Invalid username or password";
        }
    }
}
