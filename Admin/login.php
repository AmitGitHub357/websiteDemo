<?php include "header.php"; ?>
<form action="admlogin.php" method="POST" enctype="multipart/form-data">
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label h3">Admin Login</label>
    </div>
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label">Email:</label>
        <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group m-auto w-50">
        <label for="password" class="text-center form-label">Password</label>
        <input type="password" class="form-control" required id="password" placeholder="Enter your password"
            name="password">
    </div>

    <div class="m-auto mt-4 w-50">
        <button type="submit" class="btn btn-success">Login</button>
        <a href="resetPasswordAdmin.php" class="link link-primary h6">reset password</a>

    </div>
    <div class="m-auto w-50">
    </div>

</form>

<?php include "footer.php"; ?>