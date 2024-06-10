<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>New Tech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="resources/logo1.svg" type="image/x-icon" />

</head>

<body class="mainBody bg-light" onload="intro();">

    <div class="container-fluid vh-100 d-flex justify-content-center containBox" id="containBox">
        <div class="row g-2 align-content-center">

            <!-- Header -->
            <div class="col-12">
                <div class="row">

                    <div class="col-12">
                        <div class="logo"></div>
                        <p class="fw-bold title0 text-center text-black">Welcome to New Tech</p>
                    </div>

                </div>
            </div>
            <!-- Header -->

            <!-- Navigator -->
            <div class="col-12 p-3" id="navigator">
                <div class="row justify-content-center">
                    <div class="col-11 text-center mb-4 intro">
                        Access to the best online electronics store is on your palm
                    </div>
                </div>
                <div class="row g-2 justify-content-center">
                    <div class="col-lg-5 col-11 d-grid">
                        <span class="btn btn-primary" onclick="showSignUp();">Sign Up</span>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-11 d-grid">
                        <span class="btn btn-primary" onclick="showSignIn();">Sign In</span>
                    </div>
                    <div class="col-lg-7 col-11 d-grid mt-3">
                        <span class="btn btn-danger" onclick="showAdminSignIn();">Admin Sign In</span>
                    </div>
                    <div class="col-lg-7 col-11 d-grid mt-3">
                        <span class="btn btn-secondary" onclick="visitAsGuest();">Visit as a Guest</span>
                    </div>
                </div>
            </div>
            <!-- Navigator -->

            <!-- Content -->
            <div class="col-12 p-2">
                <div class="row g2">

                    <!-- cover -->
                    <div class="col-lg-6 d-none d-lg-block cover"></div>
                    <!-- cover -->

                    <!-- Sign Up -->
                    <div class="col-lg-6 col-12 d-none" id="signUp">
                        <div class="row g-2">

                            <div class="col-12 mb-2">
                                <h1 class="fw-bold text-danger text-lg-start text-center"><button class="btn btn-danger" onclick="signUp2Welcome();">&larr;</button>&nbsp; Sign Up Portal</h1>
                            </div>

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
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" />
                                    <button class="btn btn-primary" type="button" onclick="showPasswordUp();" id="show"><i class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Mobile</label>
                                <div class="input-group">
                                    <div>
                                        <select class="form-select">
                                            <option>+94</option>
                                            <option>+1</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-select">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Rather not to Say</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-success" onclick="signUp();">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-dark" onclick="changeView();">Have an Account? Sign In</button>
                            </div>

                        </div>
                    </div>
                    <!-- Sign Up -->

                    <!-- Sign In -->
                    <div class="col-lg-6 col-12 d-none" id="signIn">
                        <div class="row g-2">

                            <div class="col-12 mb-2">
                                <h1 class="fw-bold text-danger text-lg-start text-center"><button class="btn btn-danger" onclick="signIn2Welcome();">&larr;</button>&nbsp; Sign In Portal</h1>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email or Mobile</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="passwordIn" />
                                    <button class="btn btn-primary" type="button" onclick="showPasswordIn();" id="showIn"><i class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" />
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="#" class="link-danger text-decoration-none text-end fw-bold" onclick="forgotUserPassword();">Forgot Password?</a>
                            </div>

                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-success" onclick="signIn();">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-dark" onclick="changeView();">New User? Join Now</button>
                            </div>

                        </div>
                    </div>
                    <!-- Sign In -->

                    <!-- Admin Sign In -->
                    <div class="col-lg-6 col-12 d-none" id="adminSignIn">
                        <div class="row g-2">

                            <div class="col-12 mb-2">
                                <h1 class="fw-bold text-danger text-lg-start text-center">Admin Sign In Portal</h1>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"/>
                                    <button class="btn btn-primary" type="button" onclick="sendVerificationAdmin();"><i class="bi bi-send-fill"></i> Send</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="passwordAdmin" />
                                    <button class="btn btn-primary" type="button" onclick="showAdminPassword();" id="showAdmin"><i class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-12">
                                <a href="#" class="link-primary text-decoration-none text-end fw-bold" onclick="forgotAdminPassword();">Forgot Password?</a>
                            </div>

                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-success" onclick="adminSignIn();">Sign In As Admin</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-2">
                                <button class="btn btn-dark" onclick="back2WelcomeAdmin();">Back to Welcome Page</button>
                            </div>

                        </div>
                    </div>
                    <!-- Admin Sign In -->

                </div>
            </div>
            <!-- Content -->

            <!-- Forgot Password Modal -->
            <div class="modal" tabindex="-1" id="forgotPasswordUserModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset User Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New User Passwod</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="unpi" />
                                        <button class="btn btn-outline-secondary" type="button" id="unpb" onclick="showPasswordUN();"><i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type User Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="urnpi" />
                                        <button class="btn btn-outline-secondary" type="button" id="urnpb" onclick="showPasswordUR();"><i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">User Verification Code</label>
                                    <input type="text" class="form-control" id="verificationCodeUser" />
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetUserPassword();">Reset User Password</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Forgot Password Modal -->

            <!-- Admin Forgot Password Modal -->
            <div class="modal" tabindex="-1" id="forgotPasswordAdminModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reset Admin Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row g-3">

                                <div class="col-6">
                                    <label class="form-label">New Admin Passwod</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="anpi" />
                                        <button class="btn btn-outline-secondary" type="button" id="anpb" onclick="showPasswordAN();"><i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label class="form-label">Re-type Admin Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="arnpi" />
                                        <button class="btn btn-outline-secondary" type="button" id="arnpb" onclick="showPasswordAR();"><i class="bi bi-eye-slash-fill"></i></button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Admin Verification Code</label>
                                    <input type="text" class="form-control" id="verificationCodeAdmin" />
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="resetAdminPassword();">Reset Admin Password</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Admin Forgot Password Modal -->

            <!-- Footer -->
            <div class="col-12 fixed-bottom d-none d-lg-block text-center">
                <p> &copy; 2022 NEW TECH || All Rights Reserved</p>
            </div>
            <!-- Footer -->

        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>