<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .carousel-inner img {
            /* padding: 50%; */
            width: 100%;
            height: 600px;
        }
    </style>
</head>
<section>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="javascript:void(0)">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Services</a>
                </li>
                <li class="nav-item">
                    <?php if (!isset($_SESSION['admin'])) { ?>
                        <a class="nav-link" href="javascript:void(0)">Login</a>
                        <?php
                    } else { ?>
                        <a class="nav-link" href="logOut.php">Logout</a>
                    <?php }
                    ?>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="button">Search</button>
            </form>
        </div>
        </div>
    </nav>
</section>