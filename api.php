<?php
header('Content-Type: application/json');

// Sample data (in-memory for demo)
$users = [
    ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
    ["id" => 2, "name" => "Bob", "email" => "bob@example.com"],
    ["id" => 3, "name" => "Charlie", "email" => "charlie@example.com"]
];

// Helper to get JSON input
function getJsonInput() {
    return json_decode(file_get_contents('php://input'), true);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo json_encode(["status" => "success", "data" => $users]);
        break;

    case 'POST':
        $input = getJsonInput();
        $newUser = [
            "id" => count($users) + 1,
            "name" => $input['name'] ?? 'Unknown',
            "email" => $input['email'] ?? ''
        ];
        // In real app, you'd save to DB. Here, just return.
        echo json_encode(["status" => "success", "data" => $newUser]);
        break;

    case 'PUT':
        $input = getJsonInput();
        $updatedUser = [
            "id" => $input['id'] ?? null,
            "name" => $input['name'] ?? 'Unknown',
            "email" => $input['email'] ?? ''
        ];
        echo json_encode(["status" => "success", "data" => $updatedUser]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["status" => "error", "message" => "Method not allowed"]);
        break;
}
