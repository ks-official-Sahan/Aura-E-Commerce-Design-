<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Product | New Tech</title>

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

            <!-- nav -->
            <?php include "navbar.php"; ?>
            <!-- nav -->

            <hr />

            <!-- content -->
            <div class="col-12 bg-primary">
                <div class="row g-1">

                    <div class="col-12 bg-body rounded my-lg-3 my-1">
                        <div class="row g-2 justify-content-center align-items-center">

                            <div class="col-12 my-3">
                                <div class="row g-2 justify-content-center align-items-center text-center text-lg-start">

                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Category</label>
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select disabled" disabled>
                                                    <option>Selected Category</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Brand</label>
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select disabled" disabled>
                                                    <option>Selected Brand</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Model</label>
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select disabled" disabled>
                                                    <option>Selected Model</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 text-center">
                                        <div class="row justify-content-center text-lg-start">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Title</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Condition</label>
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select disabled" disabled>
                                                    <option>Selected Condition</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Colour</label>
                                            </div>
                                            <div class="col-10">
                                                <select class="form-select disabled" disabled>
                                                    <option>Selected Colour</option>
                                                </select>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="Colour Selected.." disabled/>
                                                    <button class="btn btn-outline-primary">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Quantity</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="number" value="0" min="0" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 col-lg-6 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Unit Price</label>
                                            </div>
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <div>
                                                        <select class="form-select disabled" disabled>
                                                            <option>LKR</option>
                                                            <option>USD</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" class="form-control disabled" value="0" disabled/>
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Payment Methods</label>
                                            </div>
                                            <div class="col-10">
                                                <div class="row align-items-center justify-content-center text-primary">
                                                    <div class="col-2"><i class="bi bi-paypal" style="font-size: 25px;"></i></div>
                                                    <div class="col-2"><i class="bi bi-credit-card-2-front" style="font-size: 25px;"></i></div>
                                                    <div class="col-2"><i class="bi bi-credit-card" style="font-size: 25px;"></i></div>
                                                    <div class="col-2"><i class="bi bi-cash" style="font-size: 25px;"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Delivery Methods</label>
                                            </div>
                                            <div class="col-11">
                                                <span>Delivery Fees are managed by the system according to delivery methods automatically. Approve the delivery methods you can use. So, the buyer will be able to choose the best delivery method he could afford.</span>
                                            </div>
                                            <div class="col-10">
                                                <div class="row justify-content-center">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <label class="form-check-label">New Tech Delivery Service</label>
                                                    <input type="checkbox" class="form-check-input" />
                                                    <label class="form-check-label">International Delivery Services</label>
                                                    <input type="checkbox" class="form-check-input" />
                                                    <label class="form-check-label">Private Service</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 ">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label class="form-label fw-bold fs-3">Description</label>
                                            </div>
                                            <div class="col-10">
                                                <textarea class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 ">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-3 col-lg-2 border rounded border-primary">
                                                <img src="resources/addproduct.svg" />
                                            </div>
                                            <div class="col-3 col-lg-2 border rounded border-primary">
                                                <img src="resources/addproduct.svg" />
                                            </div>
                                            <div class="col-3 col-lg-2 border rounded border-primary">
                                                <img src="resources/addproduct.svg" />
                                            </div>
                                        </div>
                                        <div class="row justify-content-center my-1 align-items-center">
                                            <div class="col-9 col-lg-6 d-grid">
                                                <input type="file" accept="image/*" class="d-none" id="imageUploader" multiple>
                                                <label class="btn btn-success" for="imageUploader" onclick="changeProductImages();">Upload Images</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mb-0" />

                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-warning" onclick="productUpdate();">Update Product</button>
                                    </div>

                                </div>
                            </div>

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