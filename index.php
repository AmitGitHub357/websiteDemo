<?php include "header.php"; ?>

<body class="">
    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">/
                <div class="carousel-item active">
                    <img src="images/flower.jpg" class="w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/makar.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/winter.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container-fluid">
        <div class="text-center m-5">
            <h3>About Us</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 ">
                <img src="images/about.jpg" class="img-fluid">
                </img>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ">
                <p class="h-20">
                    There is rarely a need to outright say, “Our vision/mission is ____,” but you ought to convey
                    the purpose of your business in your About Us copy.

                    Talk about why your brand exists, what makes you different, and the challenges you solve –
                    beyond the obvious solution you sell.

                    This is key for attracting talent, as well as prospective buyers who align with your objectives
                    and value goals.
                </p>
            </div>
        </div>

    </section>
    <section class="container-fluid mt-5">
        <h3 class="text-center">Services</h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-6 mt-3">
                <div class="card">
                    <img class="card-img-top" src="images/winter.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Nature is beautifull.</p>
                        <a href="#" class="btn btn-success">See More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-3">
                <div class="card">
                    <img class="card-img-top" src="images/winter.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Nature is beautifull.</p>
                        <a href="#" class="btn btn-success">See More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-3">
                <div class="card">
                    <img class="card-img-top" src="images/winter.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Nature</h4>
                        <p class="card-text">Nature is beautifull.</p>
                        <a href="#" class="btn btn-success">See More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-5">
        <div>
            <h3 class="text-center">
                Contact Us
            </h3>
        </div>
        <div class="">
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
                    <input type="number" class="form-control" id="num" required placeholder="Enter your number"
                        name="num">
                </div>
                <div class="form-group m-auto w-50">
                    <label for="pwd" class="form-label ">Profile</label>
                    <input type="file" class="form-control" id="photo" required placeholder="select your photo"
                        name="tmp_photo">
                </div>
                <div class="form-check form-group m-auto w-50">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <div class="m-auto w-50">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="m-auto w-50">
                    <a href="view.php">View Records</a>
                </div>
            </form>
        </div>
    </section>
    <?php include "footer.php"; ?>