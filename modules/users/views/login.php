<?php
require_once __DIR__ . '../../../../core/Database.php';
require_once __DIR__ . '../../User.php';
require_once __DIR__ . '/../UserController.php';

use Core\Database\Database;
use Modules\Users\UserController;

$error = "";

$database = new Database("127.0.0.1", "garment_erp", "root", "");
$controller = new UserController($database);

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $result = $controller->login($username, $password);

    if ($result !== null) {
        $error = $result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if($error) echo "<p style='color:red'>$error</p>"; ?>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>

        <label>Password:</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
