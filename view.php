<?php
include "dbConfig.php";
$select = "select * from register";
$query = mysqli_query($conn, $select);
// print_r($query);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                    <!-- <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><img src="<?php echo $row['photo']; ?>" height="100px" width="150px"></td>
                        <td><a href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a></td>
                        <td><a href='edit.php?id=<?php echo $row['id'] ?>'>Update</a></td>
                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <td><a href="index.php">Add</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
                
</html>