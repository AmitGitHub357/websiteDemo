<?php
include "dbconfig.php";
// echo $_GET['id'];
$id = $_GET['id'];
$query = "delete from register where id='$id'";
$res = mysqli_query($conn, $query);
header("location:view.php");

?>