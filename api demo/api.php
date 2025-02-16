<?php
include 'db.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $conn->query("SELECT * FROM register WHERE id=$id");
            $data = $result->fetch_assoc();
            echo json_encode($data);
        } else {
            $result = $conn->query("SELECT * FROM register");
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            echo json_encode($users);
        }
        break;

    case 'POST':
        $name = $input['name'];
        $email = $input['email'];
        $mobile = $input['mobile'];
        $conn->query("INSERT INTO register (name, email, mobile) VALUES ('$name', '$email', $mobile)");
        echo json_encode(["message" => "User added successfully"]);
        break;

    case 'PUT':
        $id = $_GET['id'];
        $name = $input['name'];
        $email = $input['email'];
        $mobile = $input['mobile'];
        $conn->query("UPDATE register SET name='$name',
                     email='$email', mobile=$mobile WHERE id=$id");
        echo json_encode(["message" => "User updated successfully"]);
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $conn->query("DELETE FROM register WHERE id=$id");
        echo json_encode(["message" => "User deleted successfully"]);
        break;

    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$conn->close();
?>