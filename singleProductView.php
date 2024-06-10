<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product View | New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="resources/logo1.svg" type="image/x-icon" />
</head>

<body>

    <div class="container-fluid vh-100 w-100">
        <div class="row justify-content-center align-items-center">

            <!-- header -->
            <?php include "header.php"; ?>
            <!-- header -->

            <div class="col-12">
                <hr />
            </div>

            <!-- nav -->
            <!-- <?php //include "navbar.php"; 
                    ?> -->
            <!-- nav -->

            <!-- content -->
            <div class="col-12">
                <div class="row g-1 justify-content-center">

                    <!-- Cover -->
                    <!-- <div class="col-12 px-3 col-lg-6"> -->
                    <div class="col-12 px-3 col-lg-6 border-end border-bottom rounded rounded-4 mb-3">
                        <div class="row">
                            <!-- Carousel -->
                            <!-- <div class="col-12 mb-3 me-2 mt-3 py-2 px-2 w-100 border rounded rounded-4"> -->
                            <div class="col-12 mb-3 me-2 mt-3 py-2 px-2 w-100">
                                <div class="row mt-3 mb-3">

                                    <div class="col-2">
                                        <img src="resources/item_img/iphone14.jpg" class="d-block slider-img w-100 h-25 mx-auto" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" />
                                        <img src="resources/item_img/iphone14pro.jpg" class="d-block slider-img w-100 h-25 mx-auto" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" />
                                        <img src="resources/slider_img/slide6.jpg" class="d-block slider-img w-100 h-25 mx-auto" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" />
                                        <img src="resources/logo1.svg" class="d-block slider-img w-100 h-25 mx-auto" />
                                    </div>

                                    <div id="carouselExampleDark" class="col-10 carousel carousel-dark slide table-responsive" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="7000">
                                                <img src="resources/item_img/iphone14.jpg" class="d-block slider-img w-75 mx-auto" alt="..." />
                                            </div>
                                            <div class="carousel-item" data-bs-interval="3000">
                                                <img src="resources/item_img/iphone14pro.jpg" class="d-block slider-img w-75 mx-auto" alt="..." />
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="resources/slider_img/slide6.jpg" class="d-block slider-img w-100 mx-auto" alt="..." />
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
                        </div>
                    </div>
                    <!-- Cover -->

                    <!-- Product Info -->
                    <div class="col-12 col-lg-6 px-3 mb-3">
                        <div class="row justify-content-center text-start">
                            <div class="col-12">

                                <!-- BreadCrumb -->
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="row border-bottom">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Home</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Single Product View : iPhone 14 Pro</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- BreadCrumb -->

                                <!-- Details -->
                                <div class="row">

                                    <div class="col-12 mt-3">
                                        <span class="fw-bold fs-3 pt-1 text-success">iPhone 14 Pro</span>
                                    </div>

                                    <div class="col-12 mb-2 text-danger">
                                        <span class="fw-bold"><i class="bi bi-star-fill fs-5"></i></span>
                                        <span class="fw-bold"><i class="bi bi-star-fill fs-5"></i></span>
                                        <span class="fw-bold"><i class="bi bi-star-fill fs-5"></i></span>
                                        <span class="fw-bold"><i class="bi bi-star-fill fs-5"></i></span>
                                        <span class="fw-bold"><i class="bi bi-star-half fs-5"></i></span>&nbsp;&nbsp;
                                        <span class="fs-5">4.5 Stars</span>
                                        <span class="fs-5 text-dark"> | 62 Reviews | </span>
                                        <span class="fs-5 text-dark">128 Orders</span>
                                    </div>

                                    <div class="col-12">
                                        <hr class="mb-3" />
                                    </div>

                                    <div class="col-12 col-lg-7 border-end">
                                        <div class="row">
                                            <div class="col-4 text-end">
                                                <span class="fw-bold">Condition : </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="text-black-50">Brand New</span>
                                            </div>
                                            <div class="col-4 text-end">
                                                <span class="fw-bold">Colour : </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="text-black-50">Phanthom Blue</span>
                                            </div>
                                            <div class="col-4 text-end">
                                                <span class="fw-bold">Stock : </span>
                                            </div>
                                            <div class="col-6">
                                                <span class="text-black-50">10 Items Available</span>
                                            </div>
                                            <div class="col-4 text-end">
                                                <label for="qty" class="form-label fw-bold">Quantity : </label>
                                            </div>
                                            <div class="col-7">
                                                <input type="number" id="qty" min="0" value="1" class="form-control text-black-50" />
                                            </div>
                                            <div class="col-12">
                                                <hr />
                                            </div>
                                            <div class="col-4 text-end">
                                                <span class="fs-5 fw-bold">Price : </span>
                                            </div>
                                            <div class="col-8">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <span class="text-black-50 fw-bolder fs-4">899 USD</span>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button class="btn rounded rounded-4 btn-primary" onclick="buyNow(0);">Buy Now</button>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button class="btn rounded rounded-4 btn-danger" onclick="addToCart(0);">Add to Cart</button>
                                                    </div>
                                                    <div class="col-12 d-grid">
                                                        <button class="btn rounded rounded-4 btn-outline-primary" onclick="addTowatchList(0);">Add to watchList</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr />
                                            </div>
                                            <div class="col-6 text-center mb-3 border-end">
                                                <span class="fw-bold text-success fs-4">128</span><br />
                                                <span class="fw-semibold fs-6 text-black-50">Sold</span>
                                            </div>
                                            <div class="col-6 text-center mb-3">
                                                <span class="fw-bold text-primary fs-4">196</span><br />
                                                <span class="fw-semibold fs-6 text-black-50">Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Details -->

                                    <!-- Ads -->
                                    <div class="col-lg-5 d-none d-lg-block text-center">
                                        <span class="fs-3">Display Ads</span>
                                    </div>
                                    <!-- Ads -->

                                    <!-- Seller Info -->
                                    <div class="col-12 border-bottom border-top rounded rounded-4">
                                        <div class="row pt-3">
                                            <div class="col-6 text-center border-end mb-3">
                                                <span class="fw-bold text-success fs-4">Seller</span><br />
                                            </div>
                                            <div class="col-6 text-center mb-3">
                                                <span class="fw-bold text-primary fs-4">New Tech</span><br />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Seller Info -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Info -->

                    <div class="col-12">
                        <hr />
                    </div>

                    <!-- Related Items -->
                    <div class="col-12 py-2">
                        <div class="row justify-content-center">

                            <div class="col-12 py-2 px-lg-4 px-3 text-lg-start text-center">
                                <span class="fs-3 fw-bold">Related Items</span>
                            </div>

                            <div class="col-12 px-4">
                                <hr class="mt-1 mb-3" />
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row px-3">

                                    <!-- Card -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                            <div class="row justify-content-center">
                                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top px-2 py-2" style="height: 200px; width: 200px;" />
                                            </div>
                                            <div class="card-body text-center">
                                                <span class="card-title fw-bold fs-4">Apple iPhone 14</span><br />
                                                <span class="card-text text-success fw-bold fs-6">699 USD</span><br />
                                                <span class="card-text text-warning fw-bold fs-6">10 Items Available</span><br />
                                                <div class="d-grid px-4 gap-2">
                                                    <button class="btn btn-primary" onclick="buyNow(0);">Buy Now</button>
                                                    <button class="btn btn-danger" onclick="addToCart(0);">Add to Cart</button>
                                                    <button class="btn btn-outline-primary" onclick="addTowatchList(0);">Add to watchList</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                            <div class="row justify-content-center">
                                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top px-2 py-2" style="height: 200px; width: 200px;" />
                                            </div>
                                            <div class="card-body text-center">
                                                <span class="card-title fw-bold fs-4">Apple iPhone 14</span><br />
                                                <span class="card-text text-success fw-bold fs-6">699 USD</span><br />
                                                <span class="card-text text-warning fw-bold fs-6">10 Items Available</span><br />
                                                <div class="d-grid px-4 gap-2">
                                                    <button class="btn btn-primary" onclick="buyNow(0);">Buy Now</button>
                                                    <button class="btn btn-danger" onclick="addToCart(0);">Add to Cart</button>
                                                    <button class="btn btn-outline-primary" onclick="addTowatchList(0);">Add to watchList</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                            <div class="row justify-content-center">
                                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top px-2 py-2" style="height: 200px; width: 200px;" />
                                            </div>
                                            <div class="card-body text-center">
                                                <span class="card-title fw-bold fs-4">Apple iPhone 14</span><br />
                                                <span class="card-text text-success fw-bold fs-6">699 USD</span><br />
                                                <span class="card-text text-warning fw-bold fs-6">10 Items Available</span><br />
                                                <div class="d-grid px-4 gap-2">
                                                    <button class="btn btn-primary" onclick="buyNow(0);">Buy Now</button>
                                                    <button class="btn btn-danger" onclick="addToCart(0);">Add to Cart</button>
                                                    <button class="btn btn-outline-primary" onclick="addTowatchList(0);">Add to watchList</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
                                    <div class="col-12 col-sm-6 col-lg-3">
                                        <div class="card">
                                            <div class="row justify-content-center">
                                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="card-img-top px-2 py-2" style="height: 200px; width: 200px;" />
                                            </div>
                                            <div class="card-body text-center">
                                                <span class="card-title fw-bold fs-4">Apple iPhone 14</span><br />
                                                <span class="card-text text-success fw-bold fs-6">699 USD</span><br />
                                                <span class="card-text text-warning fw-bold fs-6">10 Items Available</span><br />
                                                <div class="d-grid px-4 gap-2">
                                                    <button class="btn btn-primary" onclick="buyNow(0);">Buy Now</button>
                                                    <button class="btn btn-danger" onclick="addToCart(0);">Add to Cart</button>
                                                    <button class="btn btn-outline-primary" onclick="addTowatchList(0);">Add to watchList</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Related Items -->

                    <div class="col-12">
                        <hr />
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 py-2 px-lg-4 px-3 text-lg-start text-center">
                                <span class="fs-3 fw-bold">Product Details</span>
                            </div>

                            <div class="col-12 px-4">
                                <hr class="mt-1 mb-3" />
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row px-3 justify-content-center">

                                    <div class="col-4 col-lg-2 text-end">
                                        <span class="fw-bold fs-5">Brand : </span>
                                    </div>
                                    <div class="col-6 col-lg-4">
                                        <span class="fw-bold text-black-50 fs-5">Apple</span>
                                    </div>

                                    <div class="col-4 col-lg-2 text-end">
                                        <span class="fw-bold fs-5">Model : </span>
                                    </div>
                                    <div class="col-6 col-lg-4">
                                        <span class="fw-bold text-black-50 fs-5">iPhone 14 Pro</span>
                                    </div>

                                    <div class="col-12 px-5">
                                        <hr />
                                    </div>

                                    <div class="col-12">
                                        <span class="fw-bold fs-5">Description : </span>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="10" class="form-control text-black-50 disabled" disabled></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Description -->

                </div>
            </div>
            <!-- content -->

            <!-- footer -->
            <?php include "footer.php"; ?>
            <!-- footer -->

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>