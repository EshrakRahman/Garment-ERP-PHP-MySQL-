<?php
namespace Core\Auth;

class Auth
{
    public static function initSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Check if user is logged in
    public static function check()
    {
        self::initSession();
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../modules/users/views/login.php");
            exit;
        }
    }

    // Check user role
    public static function checkRole($roles)
    {
        self::initSession();
        if (is_string($roles)) $roles = [$roles];

        if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $roles)) {
            // Redirect to dashboard if role not allowed
            header("Location: ../public/dashboard.php");
            exit;
        }
    }

    // Logout user
    public static function logout()
    {
        self::initSession();
        session_unset();
        session_destroy();
        header("Location: ../../modules/users/views/login.php");
        exit;
    }
}

// Optional: handle logout via GET parameter
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    Auth::logout();
}
