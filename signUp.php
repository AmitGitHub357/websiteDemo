<?php include "header.php"; ?>
<form action="addForm.php" method="POST" enctype="multipart/form-data">
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label">Name:</label>
        <input type="text" class="form-control" required id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group m-auto w-50">
        <label for="email" class="text-center form-label">Email:</label>
        <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group m-auto w-50">
        <label for="pwd" class="form-label ">Mobile</label>
        <input type="number" class="form-control" id="num" required placeholder="Enter your number" name="num">
    </div>
    <div class="form-group m-auto w-50">
        <label for="pwd" class="form-label ">Profile</label>
        <input type="file" class="form-control" id="photo" required placeholder="select your photo" name="tmp_photo">
    </div>
    
    <div class="m-auto w-50">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php include "footer.php"; ?>