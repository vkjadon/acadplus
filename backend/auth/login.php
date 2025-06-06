<?php
session_start();
header("Content-Type: application/json");
require_once '../config/Database.php';
require_once '../classes/User.php';

$data = json_decode(file_get_contents("php://input"), true);
if (!$data) {
    echo json_encode(["message" => "Invalid input"]);
    exit;
}

$db = (new Database())->connect();
$user = new User($db, $data);

$result = $user->login();

if ($result) {
    $_SESSION['user'] = $result;
    echo json_encode(["message" => "Login successfully"]);
} else {
    echo json_encode(["message" => "Invalid credentials"]);
}
?>
