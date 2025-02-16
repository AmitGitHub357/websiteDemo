<?php
include 'dbconfig.php';
$conn = mysqli_connect("localhost", "root", "", "demowebsite");
if ($conn->connect_errno) {
    echo "connection failed";
    exit();
}
mysqli_select_db($conn, 'demowebsite');

$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['num'];
// $tmp_photo = $_FILES["photo"]["tmp_photo"];
// $photo = $_POST['photo'];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["tmp_photo"]['name']);
$uploadOk = 1;
if (move_uploaded_file($_FILES["tmp_photo"]["tmp_name"], $target_file)) {
    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $sql = "insert into register (name,email,mobile,photo) values('$name','$email',$num,'$target_file')";
    echo $sql;
    // print_r($_FILES);
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Inserted data successfully";
        header("location:index.php");
    } else
        echo "Error Data Not Inserted";
}

?>