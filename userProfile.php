<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile | New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="resources/logo1.svg" type="image/x-icon" />
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
            <div class="col-12 bg-primary">
                <div class="row">

                    <div class="col-12 my-3 bg-body rounded">
                        <div class="row">

                            <div class="col-12 col-md-3 border-end">
                                <div class="row g-3 d-flex flex-column text-center fw-bold align-content-center py-5 my-auto">

                                    <div class="col-12">
                                        <img src="resources/avatar.svg" class="w-75" />
                                    </div>

                                    <div class="col-12">
                                        <span class="text-black">Fname Lname</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="text-black">TestUseremail@gmail.com</span>
                                    </div>

                                    <div class="col-12">
                                        <input type="file" id="profileImg" class="d-none" accept="image/*" />
                                        <label for="profileImg" class="btn btn-primary mt-5" onclick="changeProfileImage();">Select New Profile Image</label>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-md-6 my-2 border-end">
                                <div class="row g-2">

                                    <div class="col-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" />
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control disabled" disabled />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control disabled" disabled />
                                            <button class="btn btn-primary disabled" type="button"><i class="bi bi-eye-slash-fill"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Mobile</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Registered Date & Time</label>
                                        <input type="text" class="form-control disabled" disabled />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select disabled" disabled>
                                            <option>Male</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Address Line 01</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address Line 02</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">District</label>
                                        <select class="form-select">
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Province</label>
                                        <select class="form-select">
                                            <option>Select Province</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Country</label>
                                        <select class="form-select">
                                            <option>Select Country</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" />
                                    </div>

                                    <div class="offset-1 col-10 d-grid">
                                        <button class="btn btn-success" onclick="updateProfile();">Update Profile</button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-md-3 d-none text-center d-md-block overflow-hidden">
                                <div class="row">
                                    <div class="col-12">
                                        <img class="rounded w-100 my-5 py-5" src="resources/logo2.svg" />
                                    </div>
                                    <div class="col-12">
                                        <span class="fs-4">Fname Lname</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <span class="fs-5">TestUseremail@gmail.com</span>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="row g-3 gap-1 justify-content-center">
                                        <div class="col-10 col-lg-5 d-grid">
                                                <button class="btn btn-secondary">My Oders</button>
                                            </div>
                                            <div class="col-10 col-lg-5 d-grid">
                                                <button class="btn btn-secondary">My Sellings</button>
                                            </div>
                                            <div class="col-10 col-lg-5 d-grid">
                                                <button class="btn btn-secondary" onclick="window.location = 'cart.php'">Cart</button>
                                            </div>
                                            <div class="col-10 col-lg-5 d-grid">
                                                <button class="btn btn-secondary" onclick="window.location = 'watchList.php'";>Watch List</button>
                                            </div>
                                            <div class="col-10 col-lg-10 d-grid">
                                                <button class="btn btn-danger">Payment Methods</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- content -->

            <hr />

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