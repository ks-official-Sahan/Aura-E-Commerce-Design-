<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Watch List | New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" /> <!-- <link rel="stylesheet" href="bootstrap-icons.css" /> -->

    <link rel="icon" href="resources/logo1.svg" type="image/svg" />
</head>

<body>

    <div class="container-fluid vh-100 w-100">
        <div class="row">

            <!-- header -->
            <?php include "header.php"; ?>
            <!-- header -->

            <!-- nav -->
            <?php include "navbar.php"; ?>
            <!-- nav -->

            <!-- content -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 border border-1 border-primary rounded mb-2">
                        <div class="row">

                            <div class="col-12">
                                <label class="form-label fs-1 fw-bolder">Watchlist &hearts;</label>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="offset-lg-2 col-12 col-lg-6 mb-3">
                                        <input type="text" placeholder="Search in watchlist..." class="form-control" />
                                    </div>
                                    <div class="col-12 col-lg-2 mb-3 d-grid">
                                        <button class="btn btn-primary" onclick="watchListSearch(0)">Search</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="col-11 col-lg-2 border-0 border-end border-1 border-primary">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav aria-label="breadcrumb">
                                                    <div class="breadcrumb">
                                                        <a href="home.php" class="breadcrumb-item fw-bold">Home</a>
                                                        <a href="#" aria-current="page" class="breadcrumb-item fw-bold active">Watchlist</a>
                                                    </div>
                                                </nav>
                                            </div>
                                            <div class="col-12">
                                                <nav class="nav flex-column nav-tabs">
                                                    <a class="nav-link active" href="#">My Watchlist</a>
                                                    <a class="nav-link" href="cart.php">Cart</a>
                                                    <a class="nav-link" href="recents&saved.php">Recents | Saved</a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- empty view -->
                            <div class="col-12 col-lg-9" id="emptyView">
                                <div class="row">
                                    <div class="col-12 emptyView"></div>
                                    <div class="col-12 text-center">
                                        <label class="fw-bolder fs-1 text-black-50">You have not searched yet...</label>
                                    </div>
                                    <div class="col-12 col-lg-4 d-grid mb-4 offset-lg-4 text-center">
                                        <a href="#" class="fs-4 btn btn-primary fw-bolder">Go Shopping</a>
                                    </div>
                                </div>
                            </div>
                            <!-- empty view -->

                            <!-- have product -->
                            <div class="col-12 col-lg-9 d-none" id="haveProduct">
                                <div class="row">

                                <div class="card mb-3 mx-0 mx-lg-2 col-12">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start" />
                                            </div>
                                            <div class="col-md-5">
                                                <div class="card-body">
                                                    <h5 class="card-title fs-2 fw-bold text-primary">Apple iPhone 14</h5>
                                                    <span class="fs-5 fw-bold text-black-50">Colour : Phanthom Blue</span>
                                                    &nbsp;&nbsp; | &nbsp;&nbsp;
                                                    <span class="fs-5 fw-bold text-black-50">Condition : Brand New</span><br />
                                                    <span class="fs-5 fw-bold text-black-50">Price :</span>&nbsp;&nbsp;
                                                    <span class="fs-5 fw-bold text-black">Rs. 420000 .00</span><br />
                                                    <span class="fs-5 fw-bold text-black-50">Quantity :</span>&nbsp;&nbsp;
                                                    <span class="fs-5 fw-bold text-black">10 Items Available</span><br />
                                                    <span class="fs-5 fw-bold text-black-50">Seller :</span>&nbsp;&nbsp;
                                                    <span class="fs-5 fw-bold text-black-50">New Tech</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mt-5">
                                                <div class="card-body d-lg-grid">
                                                    <a href="#" class="btn btn-outline-success mb-2" onclick="buyNow(0);">Buy Now</a>
                                                    <a href="#" class="btn btn-outline-warning mb-2" onclick="addToCart(0);">Add To Cart</a>
                                                    <a href="#" class="btn btn-outline-danger mb-2" onclick="removeFromWatchList(0);">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- have product -->

                        </div>
                    </div>
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