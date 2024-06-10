<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Products | New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="resources/logo1.svg" type="image/x-icon" />
</head>

<body class="overflow-scroll">

    <div class="container-fluid vh-100 w-100">
        <div class="row">

            <!-- header -->
            <div class="col-12 bg-secondary">
                <div class="row align-items-center">

                    <div class="col-12 col-lg-4 text-center text-lg-start">
                        <div class="row">

                            <div class="col-12 col-lg-4 my-1" onclick="viewProfile();">
                                <img src="resources/avatar.svg" height="100px" />
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="row g-2">
                                    <div class="col-12 mt-lg-4">
                                        <span class="fw-bold">Fname Lname</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fw-bold">TestUseremail@gmail.com</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fw-bold cursor-pointer text-white" onclick="signOut();">Sign Out</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 offset-lg-1 col-lg-4">
                        <h1 class="fw-bold text-center my-2 text-info">My Products</h1>
                    </div>

                    <div class="col-12 col-lg-2 offset-lg-1">
                        <div class="row">
                            <div class="col-12 d-grid">
                                <button class="btn btn-primary" onclick="addProduct();">Add Product</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- header -->

            <!-- Nav -->
            <?php include "navbar.php"; ?>
            <!-- Nav -->

            <!-- contents -->

            <?php include "sort.php"; ?>

            <!-- Products -->
            <div class="col-12 col-lg-9 mx-lg-auto mx-0 my-3 border border-secondary rounded">
                <div class="row">

                    <div class="offset-1 col-10 text-center">
                        <div class="row justify-content-center">

                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <!-- Card -->
                            <div class="card my-1 col-12 col-lg-6 border-success" style="max-width: 500px; max-height: 140px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="resources/item_img/iphone14.jpg" onclick="viewProduct(0);" class="img-fluid rounded-start my-2" alt="..." style="height: 120px;"/>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body my-auto">
                                            <h5 class="card-title">iPhone 14</h5>
                                            <span class="card-text fw-bold text-success">USD 699</span><span class="card-text fw-bold"> : </span>
                                            <span class="card-text fw-bold text-primary">10 Items Available</span>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="fd" checked>
                                                <label class="form-check-label" for="fd">Make Product Deactive</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row g-1">
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-success" onclick="updateProduct();">Update</button>
                                                        </div>
                                                        <div class="col-12 col-lg-6 d-grid">
                                                            <button class="btn btn-danger" onclick="deleteProduct();">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->

                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="offset-2 offset-lg-4 col-8 col-lg-4 my-2">
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
            <!-- Products -->

            <!-- contents -->

        </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>