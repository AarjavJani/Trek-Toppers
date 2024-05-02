<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap CSS -->

    <!-- Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap JS -->

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- /Icon CDN -->
    <link rel="stylesheet" href="./style/navbar-link.css">
    <link rel="stylesheet" href="./style/navbar-toggler.css">
    <link rel="stylesheet" href="./style/footer-media-handles.css">
    <?php
    include './db_connection.php';
    // session_start();
    ?>

    <title>TrekToppers</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md sticky-top bg-body-secondary bg-light navbar-light" data-bs-theme="dark">
        <div class="container-fluid">

            <button class="navbar-toggler" onclick="this.classList.toggle('change')" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link fs-5 active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="./about.php">About</a>
                    </li>
                    <?php
                    if ($_SESSION['authentication'] == True) {
                        echo '<li class="nav-item position position-fixed end-0 me-2">';
                        echo '<a class="nav-link fs-5 link-light" href="./userpage.php">User</a>';
                        echo '</li>';
                    } else {
                        echo '<li class="nav-item position position-fixed end-0 me-2">';
                        echo '<a class="nav-link fs-5 link-light" href="./login.php">Login</a>';
                        echo '</li>';
                    }
                    ?>

                </ul>
            </div>

        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Content -->
    <div class="container text-center">
        <div class="row mt-5 mx-auto">
            <div class="col-6">
                <form action="" class="mx-auto mt-3">
                    <img src="./Images/User/photo.jpg" alt="Profile Image" class="rounded-3 w-25">
                    <input type="file" accept="image/*">
                </form>
            </div>
            <div class="col-6 text-start">
                <?php
                $user = $_SESSION['user'];
                $sql = "SELECT * FROM `user` WHERE user_id = '$user'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <p>Name: <?php echo $row['firstname'] . ' ' . $row['lastname']; ?></p>

                <p>E-mail: <?php echo $row['email']; ?></p>

                <p>Phone No: <?php echo $row['phoneno']; ?></p>

                <p>Gender: <?php echo $row['gender']; ?></p>

                <!-- Edit button -->
                <div class="gap-2 mx-auto mb-5 mt-3">
                    <button class="btn border-1 border-black fs-6" type="button" data-bs-toggle="modal" data-bs-target="#EditModal">Edit</button>
                </div>
                <!-- /Edit button -->

                <!-- Logout form -->
                <form id="logoutForm" action="logout_backend.php" method="post">
                    <div class="gap-2 mx-auto mb-5 mt-3">
                        <button class="btn border-1 border-black fs-6" type="submit">Logout</button>
                    </div>
                </form>
                <!-- /Logout form -->


                <!-- Edit modal -->
                <div class="modal" tabindex="-1" id="EditModal">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Change User Credentials</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="list-group list-group-flush">
                                    <form action="">
                                        <!-- FirstName -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-3" id="floatingFname" placeholder="First Name">
                                            <label for="floatingFname">First Name</label>
                                        </div>
                                        <!-- /FirstName -->

                                        <!-- LastName -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-3" id="floatingLname" placeholder="Last Name">
                                            <label for="floatingLname">Last Name</label>
                                        </div>
                                        <!-- /LastName -->

                                        <!-- PhoneNo -->
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control rounded-3" id="floatingPhone" placeholder="Phone No" pattern="[0-9]{10}">
                                            <label for="floatingPhone">Phone No</label>
                                        </div>
                                        <!-- /PhoneNo -->

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Date modal -->
            </div>
        </div>
    </div>
    <!-- /Content -->

    <!-- Footer -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <!-- Section Breadcrumb -->
                <div class="col-md-6 mb-3">
                    <h5>Section</h5>
                    <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="./index.php" class="text-body-secondary link-underline link-underline-opacity-0">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="./contact.php" class="text-body-secondary link-underline link-underline-opacity-0">Contact</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="./about.php" class="text-body-secondary link-underline link-underline-opacity-0">About</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-body-secondary link-underline link-underline-opacity-0">FAQs</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- /Section Breadcrumb -->

                <!-- Newsletter -->
                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- /Newsletter -->
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <!-- Copyright -->
                <div class="col-md-6">
                    Copyright © 2023 by TrekToppers <br>
                    Developed by Aarjav Jani, Haider Ali, Devendra Solanki
                </div>
                <!-- /Copyright -->

                <!-- Media Handles -->
                <div class="col-md-6 position-relative">
                    <ul class="list-unstyled d-flex position-absolute end-0 left-on-small">
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#"> <!-- Link to our twitter handle-->
                                <i class="bi bi-twitter text-primary fs-4 inc-fs-on-small"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#"> <!-- Link to our instagram page-->
                                <i class="bi bi-instagram fs-4 inc-fs-on-small"></i>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#"> <!-- Link to our facebook page-->
                                <i class="bi bi-facebook text-primary fs-4 inc-fs-on-small"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /Media Handles -->
            </div>
        </footer>
    </div>
    <!-- /Footer -->

</body>