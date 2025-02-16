<?php 
    $conn = mysqli_connect("localhost","root","","demowebsite");
    if($conn -> connect_errno)
    {
        echo "connection failed";
        exit();
    }
    mysqli_select_db($conn,'demowebsite');
?>