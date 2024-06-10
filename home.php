<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="resources/logo1.svg" type="image/x-icon" />

</head>

<body>

    <div class="container-fluid vh-100">
        <div class="row">

            <!-- Header -->
            <?php include "header.php"; ?>
            <!-- Header -->

            <hr />

            <!-- Contents -->
            <div class="col-12">
                <div class="row justify-content-center align-items-center">

                    <!-- Head -->
                    <div class="col-12">
                        <div class="row">
                            <!-- Search -->
                            <?php include "search.php"; ?>
                            <!-- Search -->

                            <!-- Navbar -->
                            <?php include "navbar.php"; ?>
                            <!-- Navbar -->
                        </div>
                    </div>
                    <!-- Head -->

                    <hr />

                    <div class="col-12" id="result-body-1">
                        <div class="row">

                            <!-- Carousel -->
                            <div class="col-12 d-none d-lg-block mb-3">
                                <div class="row">

                                    <div id="carouselExampleDark" class="offset-1 col-10 carousel carousel-dark slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="resources/slider_img/slide8.jpg" class="d-block slider-img w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="fw-bold">Welcome to NEW TECH</h5>
                                                    <p>The Best Electronics STORE by NEW TECH</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="3000">
                                                <img src="resources/slider_img/slide7.jpg" class="d-block slider-img w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="fw-bold">24 Hours Open</h5>
                                                    <p>Ability to browse your products anytime at anywhere</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="resources/slider_img/slide4.jpg" class="d-block slider-img w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="fw-bold"></h5>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="resources/slider_img/slide3.jpg" class="d-block slider-img w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 class="fw-bold"></h5>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- Carousel -->

                            <hr />

                            <!-- Categories & Products -->
                            <div class="col-12">
                                <div class="row g-2">

                                    <!-- Category -->
                                    <div class="col-12">
                                        <a href="#" class="fw-bold link-dark text-decoration-none fs-3 my-auto" onclick="window.location.reload();">Phone & Accessories</a> &nbsp;&nbsp;
                                        <a href="#" class="link-primary text-decoration-none fs-5" onclick="alert('See All');">See All &rArr;</a>
                                    </div>
                                    <!-- Category -->

                                    <!-- Products -->
                                    <div class="col-12 mb-3 border-primary">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="row justify-content-center gap-1">

                                                    <!-- Card -->
                                                    <div class="card" style="width: 16rem;">
                                                        <img src="resources/item_img/iphone14pro.jpg" onclick="viewProduct(0);" class="card-img-top my-3 mx-auto" alt="..." style="height: 200px; width: 170px;" />
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title fw-bold">iPhone 14 Pro</h5>
                                                            <span class="card-text fw-bold text-success">Price: USD 899</span><br />
                                                            <span class="card-text fw-bold text-warning">Stock: 12 Items Available</span>
                                                            <div class="d-grid gap-1">
                                                                <a href="#" class="btn btn-primary" onclick="buyNow(0);">Buy Now</a>
                                                                <a href="#" class="btn btn-secondary" onclick="addToCart(0);">Add to Cart</a>
                                                                <a href="#" class="btn btn-danger" onclick="addTowatchList(0);">Add to Watch List</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card -->
                                                    <!-- Card -->
                                                    <div class="card" style="width: 16rem;">
                                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top my-3 mx-auto" alt="..." style="height: 200px; width: 170px;" />
                                                        <div class="card-body">
                                                            <h5 class="card-title text-center fw-bold">iPhone 14</h5>
                                                            <span class="card-text fw-bold text-success">Price: USD 699</span><br />
                                                            <span class="card-text fw-bold text-warning">Stock: 10 Items Available</span>
                                                            <div class="d-grid gap-1">
                                                                <a href="#" class="btn btn-primary" onclick="buyNow(0);">Buy Now</a>
                                                                <a href="#" class="btn btn-secondary" onclick="addToCart(0);">Add to Cart</a>
                                                                <a href="#" class="btn btn-danger" onclick="addTowatchList(0);">Add to Watch List</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Card -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Products -->

                                </div>
                            </div>
                            <!-- Categories & Products -->

                        </div>
                    </div>

                    <div class="col-12 d-none" id="result-body-2">
                        <div class="row g-4 gap-3 justify-content-center">

                            <!-- Cards -->
                            <div class="card" style="width: 16rem;">
                                <img src="resources/item_img/iphone14pro.jpg" onclick="viewProduct(0);" class="card-img-top my-3 mx-auto" alt="..." style="height: 200px; width: 170px;" />
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">iPhone 14 Pro</h5>
                                    <span class="card-text fw-bold text-success">Price: USD 899</span><br />
                                    <span class="card-text fw-bold text-warning">Stock: 12 Items Available</span>
                                    <div class="d-grid gap-1">
                                        <a href="#" class="btn btn-primary" onclick="buyNow(0);">Buy Now</a>
                                        <a href="#" class="btn btn-secondary" onclick="addToCart(0);">Add to Cart</a>
                                        <a href="#" class="btn btn-danger" onclick="addTowatchList(0);">Add to Watch List</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 16rem;">
                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top my-3 mx-auto" alt="..." style="height: 200px; width: 170px;" />
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">iPhone 14</h5>
                                    <span class="card-text fw-bold text-success">Price: USD 699</span><br />
                                    <span class="card-text fw-bold text-warning">Stock: 10 Items Available</span>
                                    <div class="d-grid gap-1">
                                        <a href="#" class="btn btn-primary" onclick="buyNow(0);">Buy Now</a>
                                        <a href="#" class="btn btn-secondary" onclick="addToCart(0);">Add to Cart</a>
                                        <a href="#" class="btn btn-danger" onclick="addTowatchList(0);">Add to Watch List</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cards -->

                            <!-- Pagination -->
                            <div class="mt-2">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- Contents -->

            <hr />

            <!-- Footer -->
            <?php include "footer.php"; ?>
            <!-- Footer -->

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>