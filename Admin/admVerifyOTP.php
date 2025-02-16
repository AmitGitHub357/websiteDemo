<?php
include "header.php";
?>
<form action="matchOTP.php" method="POST" enctype="multipart/form-data">
    <div class="form-group m-auto w-50">
        <label for="otp" class="text-center form-label h3">Admin OTP Verify</label>
    </div>
    <div class="form-group m-auto w-50">
        <label for="OTP" class="text-center form-label">Type OTP you recieved on registered Email:</label>
        <input type="text" class="form-control" required id="OTP" placeholder="Enter OTP" name="otp">
    </div>
    <div class="form-group m-auto w-50">
        <label for="password" class="text-center form-label">New Password</label>
        <input type="password" class="form-control" required id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group m-auto w-50">
        <label for="password" class="text-center form-label">Retype Password</label>
        <input type="password" class="form-control" required id="rpassword" placeholder="Retype password"
            name="rpassword">
    </div>

    <div class="m-auto mt-4 w-50">
        <button type="submit" name="verifyOTP" class="btn btn-primary">Verify OTP</button>
        <a href="login.php" class="link link-primary h6">Back to login</a>
    </div>
</form>