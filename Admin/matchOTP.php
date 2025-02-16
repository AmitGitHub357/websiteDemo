<?php
    include "dbConfig.php";
if ($_POST['otp']) {
    $password = $_POST['password'];
    echo $password;
    $otp = $_POST['otp'];
    echo $otp;
    if ($otp > 0) {
        $select = "select * from admin where otp=$otp";
        $row = mysqli_query($conn, $select);
        $result = mysqli_fetch_assoc($row);
        if ($result==1) {
            $query = "update admin set password='$password' where otp='$otp'";
            $res = mysqli_query($conn, $query);
            if ($res) {
                ?>
                <script>
                    document.alert("Password Updated successfull redirecting to login page");
                </script>
                <?php
                header("location:login.php");
            }
        }
    } else
        echo "Otp Not Correct.";
    header("location:login.php");
}
?>