<?php

require_once __DIR__ . '/../core/Auth.php';
use Core\Auth\Auth;

// Must be logged in
Auth::check();

// Only admin can access dashboard
Auth::checkRole('admin');