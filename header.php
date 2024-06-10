<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- Header -->
    <div class="col-12 bg-body">
        <div class="row align-items-center">

            <div class="col-12 col-lg-4 my-3">
                <span><b>Welcome</b> User</span> |
                <span class="fw-bold cursor-pointer" onclick="signOut();">Sign Out</span> |
                <span class="fw-bold">Help & Support</span>
            </div>

            <div class="col-lg-4 d-none d-lg-block my-1">
                <div class="col-12 logo" style="height: 40px;"></div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="row align-items-center">

                    <div class="col-3">
                        <span class="fw-bold text-uppercase text-center cursor-pointer" onclick="window.location = 'myProducts.php'">Sell</span>
                    </div>

                    <div class="col-4 d-grid">
                        <button class="btn btn-light" onclick="window.location = 'cart.php'">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="blue" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </button>
                    </div>

                    <div class="col-5">
                        <div class="dropdown d-grid">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <img src="resources/avatar.svg" height="40px">
                            </button>
                            <ul class="dropdown-menu w-100 dropdown-menu-lg-end dropdown-menu-start">
                                <li><a class="dropdown-item" href="#" onclick="viewProfile();">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Sellings</a></li>
                                <li><a class="dropdown-item" href="myProducts.php">My Products</a></li>
                                <li><a class="dropdown-item" href="watchList.php">Watch List</a></li>
                                <li><a class="dropdown-item" href="purchaseHistory.php">Purchase History</a></li>
                                <li><a class="dropdown-item" href="#">Messages</a></li>
                                <li><a class="dropdown-item" href="#">Saved</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Header -->

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>