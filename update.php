<?php
include "dbconfig.php";
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['num'];
$oldPhoto = $_POST['oldPhoto'];
$id = $_GET['id'];
$newPhoto = $_FILES['newPhoto']['name'];
// echo $newPhoto or die;
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["newPhoto"]['name']);
// $uploadOk = 1;
if (move_uploaded_file($_FILES["newPhoto"]["tmp_name"], $target_file)) {
    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // print_r($_FILES);
    echo $target_file;
    if ($_FILES["newPhoto"]['name'] !== "") {
        unlink($oldPhoto);
        echo $target_file;
        $query = "update register set name='$name',email='$email',mobile='$mobile',photo='$target_file' where id='$id'";
        echo $query;
        mysqli_query($conn, $query);
    } else {
        // unlink($oldPhoto);
        $query = "update register set name='$name',email='$email',mobile='$mobile',photo='$oldPhoto' where id='$id'";
        mysqli_query($conn, $query);
    }
    print_r($query);
    if ($query) {
        header("location:view.php");
    } else
        die("error");
}
?>