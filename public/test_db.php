<?php

declare(strict_types=1);
require_once __DIR__ . '/../core/Database.php';
use Core\Database\Database;


$database = new Database("127.0.0.1", "garment_erp", "root", "");

$pdo = $database->getConnection();

$stmt = $pdo->prepare("select * from users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($users);