<?php
include "dbConfig.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$query = "select * from `admin` where email = '$email' AND password = '$password'";

$res = mysqli_query($conn, $query);
$row = mysqli_num_rows($res);
$result = mysqli_fetch_assoc($res);

if ($row == 1) {
    echo "login successful";
    $_SESSION['admin'] = $result['name'];
    $_SESSION['adminInfo'] = $result;
    echo $_SESSION['admin'];
    // $_SESSION['adminInfo'] = $row;
    header('location:adminAccess.php',$_SESSION['admin']);
} else {
    echo "login failed";
    header('location:admLogin.php');
}


?>