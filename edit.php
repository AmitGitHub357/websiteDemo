<?php
include "dbconfig.php";
// echo $_GET['id'];
$id = $_GET['id'];
$query = "select * from register where id='$id'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
// header("location:update.php", );

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div>
        <!-- <a href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a> -->
        <form action="update.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group m-auto w-50">
                <label for="email" class="text-center form-label">Name:</label>
                <input type="text" class="form-control" required id="name" placeholder="Enter name"
                    value="<?php echo $row['name']; ?>" name="name">
            </div>
            <div class="form-group m-auto w-50">
                <label for="email" class="text-center form-label">Email:</label>
                <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email"
                    value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group m-auto w-50">
                <label for="pwd" class="form-label ">Mobile</label>
                <input type="number" class="form-control" id="num" required placeholder="Enter your number" name="num"
                    value="<?php echo $row['mobile']; ?>">
            </div>
            <div class="form-group m-auto w-50">
                <label for="pwd" class="form-label ">Your Photo</label>
                <img id = "oldPhoto" src="<?php echo $row['photo']; ?>" height="100px" width="100px">
                <input type="hidden" name="oldPhoto" value="<?php echo $row['photo'] ;?>">
                <input type="file" name="newPhoto" id = "photo" class="form-control">
            </div>
            <!-- <td></td> -->
            <!-- <div class="form-group m-auto w-50">
                    <label for="pwd" class="form-label ">Profile</label>
                    <input type="file" class="form-control" id="photo" required placeholder="select your photo" name="photo">
                </div> -->
            <!-- <div class="form-check form-group m-auto w-50">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div> -->
            <div class="m-auto w-50">
                <!-- <td><a href='update.php?id=<?php echo $row['id'] ?>'>Update</a></td> -->
                <button name="update" class="btn btn-primary" value="<?php echo $row['id'] ?>">
                    update
                </button>
            </div>
            <div class="m-auto w-50">
                <a href="view.php">View Records</a>
            </div>
        </form>
    </div>
</body>

</html>