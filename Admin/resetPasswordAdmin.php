<?php
include "header.php";
// session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "phpmailer/src/PHPMailer.php";
include "phpmailer/src/Exception.php";
include "phpmailer/src/SMTP.php";
// lxkekfxonuwtjbxj
// Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['sendOTP'])) {
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = '98amitkarma@gmail.com';                     //SMTP username
        $mail->Password = "foyrggduljawijox";                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('98amitkarma@gmail.com', 'From Test Website');
        $mail->addAddress('amit979786@gmail.com', 'for OTP demo');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('98amitkarma@gmail.com', 'Information');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $otp = rand(0, 9999);
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset password for Admin';
        $mail->Body = 'That is your OTP for reset password <b>' . $otp . '</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $email = "98amitkarma@gmail.com";
        $query = "update admin set otp='$otp' where email='$email'";
        mysqli_query($conn, $query);
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<form action="admVerifyOTP.php" method="POST" enctype="multipart/form-data">
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label h3">Admin Reset Password</label>
    </div>
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label">Email:</label>
        <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
    </div>

    <div class="m-auto mt-4 w-50">
        <button type="submit" name="sendOTP" class="btn btn-primary">Send OTP</button>
    </div>
</form>