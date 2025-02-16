<?php
include "header.php";
// session_start();
if ($_SESSION("admin") != "") {
    // print_r(_SESSION);
    header("location:adminAccess.php");
}
?>
<div class="container-fluid">
    <form action="addForm.php" method="POST" enctype="multipart/form-data">
        <div class="form-group m-auto w-50">
            <label for="email" class="text-center form-label">Email:</label>
            <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group m-auto w-50">
            <label for="pwd" class="form-label ">Password</label>
            <input type="Password" class="form-control" id="num" required placeholder="Enter your number"
                name="password">
        </div>
        <div class="form-check form-group m-auto w-50">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <div class="m-auto w-50">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>
<?php
include "footer.php";
?>