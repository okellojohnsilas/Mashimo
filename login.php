<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>MASHIMO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    .select {
        border: 1px solid #fff;
        background: #212529;
        color: white;
    }

    .select option {
        background: #212529;
        border: 1px solid #e4e4e4;
        color: white;
        -webkit-appearance: none;
        -moz-appearance: none;
    }
    </style>
</head>

<body class="bg-dark">
    <!-- Navigation Bar -->
    <!-- Grid container -->
    <div class="container-fluid text-center border-bottom">
        <!-- Section: Social media -->
        <section class="p-2">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                    class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-twitter"></i></a>
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-google"></i></a>
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-instagram"></i></a>
            <!-- Whatsapp -->
            <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i class="fab fa-whatsapp"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
    <nav class="navbar navbar-expand-md navbar-dark border-bottom">
        <div class="container font-weight-bold">
            <a class="navbar-brand abs" href="index.html">MASHIMO</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">PRODUCTS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="login.html">LOGIN</a>
                    </li>
                        <a class="nav-link" href="terms.html">TERMS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation Bar -->
    <!-- Registration Section -->
    <section class="pt-5">
        <!-- Breadcrumb -->
        <div class="container border-bottom">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="index.html" class="link-white font-weight-bold">HOME</a></li>
                    <li class="breadcrumb-item active"><a class="link-danger font-weight-bold">LOGIN</a></li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb -->
        <div class="container p-5">
            <div class="row pt-3 border">
                <h3 class="h3-responsive text-white text-center border-bottom">JOIN US TODAY</h3>
                <div class="alerts px-5">
                    <!-- Information Toasts -->
                    <?php if (isset($_SESSION["failureMessage"])): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php
								echo $_SESSION["failureMessage"];
								unset($_SESSION["failureMessage"]);
								?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif ?>

                    <?php if (isset($_SESSION["successMessage"])): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php
								echo $_SESSION["successMessage"];
								unset($_SESSION["successMessage"]);
								?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif ?>
                    <!-- Information Toasts -->
                </div>
                <div class="col-md border-end">
                    <h4 class="text-center text-white p-2">REGISTER</h3>
                        <form method="POST" action="processes/userProcesses.html">
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input required type="text" id="firstNameRegister" name="firstName"
                                            class="form-control text-white" />
                                        <label class="form-label text-white" for="firstNameRegister">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input required type="text" id="lastNameRegister" name="lastName"
                                            class="form-control text-white" />
                                        <label class="form-label text-white" for="lastNameRegister">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input required type="text" id="userNameRegister" name="userName"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="userNameRegister">Username</label>
                            </div>
                            <!--Gender select-->
                            <div class="form-group py-4">
                                <label class="text-center text-white">GENDER</label>
                                <select name="userGender" class="custom-select form-control select">
                                    <option value="male" selected>Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <!--/Gender select-->
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input required type="email" id="emailAddressRegister" name="emailAddress"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="emailAddressRegister">Email address</label>
                            </div>
                            <!-- Date Of Birth -->
                            <div class="form-outline mb-4">
                                <input required type="date" id="dateOfBirthRegister" name="dateOfBirth"
                                    class="form-control text-white" />
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input required type="password" id="passwordRegister" name="password"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="passwordRegister">Password</label>
                            </div>
                            <!-- Confirm Password input -->
                            <div class="form-outline mb-4">
                                <input required type="password" id="confirmPasswordRegister" name="confirmPassword"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="confirmPasswordRegister">Confirm
                                    Password</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light btn-block mb-4"
                                name="signUp">REGISTER</button>
                        </form>
                </div>
                <div class="col-md">
                    <h4 class="text-center text-white p-2">LOGIN</h3>
                        <form method="POST" action="processes/login&logout.html">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input required type="email" id="emailAddressLogin" name="emailAddress"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="">Email address</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input required type="password" id="passwordLogin" name="password"
                                    class="form-control text-white" />
                                <label class="form-label text-white" for="">Password</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light btn-block mb-4"
                                name="login">LOGIN</button>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration Section -->
    <!-- Footer Section -->
    <section class="border-top">
        <!-- Footer -->
        <footer class="text-white text-center text-md-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 border-start">
                        <h5 class="text-uppercase">MASHIMO</h5>
                        <hr class="hr-light">
                        <p>We are Mashimo, your one stop shop for the best household electronic items.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 border-start">
                        <h5 class="text-uppercase">Quick Links</h5>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="index.html" class="text-white">HOME</a>
                            </li>
                            <li>
                                <a href="products.html" class="text-white">PRODUCTS</a>
                            </li>
                            <li>
                                <a href="" class="text-white">SERVICES</a>
                            </li>
                            <li>
                                <a href="" class="text-white">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Grid container -->
            <div class="container text-center p-2 pb-0 border-top">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-facebook-f"></i></a>
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-google"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <!-- Whatsapp -->
                    <a class="btn btn-outline-light btn-floating m-1" href="" role="button"><i
                            class="fab fa-whatsapp"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3 border-top" style="background-color: rgba(0, 0, 0, 0.2);">
                ©
                <script>
                document.write(new Date().getFullYear())
                </script> Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Mashimo.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <!-- Footer Section -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- JAVASCRIPT MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>