<?php
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

// $user->fullName = $data->fullname;
// $user->gender = $data->gender;
// $user->email = $data->email;
// $user->password = $data->password;
// $user->usertype = $data->usertype;
// $user->rollnoempid = $data->rollnoempid;
// $user->department = $data->department;

if ($user->register()) {
    echo json_encode(["message" => "Signup successfully"]);
} else {
    echo json_encode(["message" => "Signup failed. Email or ID might already exist."]);
}
?>
