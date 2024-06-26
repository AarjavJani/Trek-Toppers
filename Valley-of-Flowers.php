<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- /Icon CDN -->

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap CSS -->

    <!-- Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap JS -->

    <link rel="stylesheet" href="./style/navbar-link.css">
    <link rel="stylesheet" href="./style/navbar-toggler.css">
    <link rel="stylesheet" href="./style/footer-media-handles.css">
    <?php
    include "./db_connection.php";
    // session_start();
    ?>

    <title>Trek Page</title>

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
    <div class="container p-0 px-3 mb-4">
        <?php
        $query = "SELECT t.TrekName, t.Batch_capacity, t.Price, h.Duration FROM trek t INNER JOIN highlights h ON t.Trek_ID = h.Trek_ID WHERE t.Trek_ID=4";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $TrekName = $row['TrekName'];
        $Price = $row['Price'];
        ?>
        <!-- Content Heading -->
        <h2 class="border-bottom border-3 border-secondary text-center text-middle mb-0 mt-2 pb-1">
            <?php echo $TrekName; ?>
        </h2>
        <!-- /Content Heading -->

        <!-- Content Sub-Header -->
        <div class="container text-center mb-2 mt-2">
            <div class="row">
                <div class="col">
                    <h5><i class="bi bi-clock"></i> Duration</h5>
                </div>
                <div class="col border-start border-end">
                    <h5><i class="bi bi-people-fill"></i> Batch Size</h5>
                </div>
                <div class="col">
                    <h5>Cost</h5>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6><?php echo $row['Duration']; ?></h6>
                </div>
                <div class="col border-start border-end">
                    <h6><?php echo $row['Batch_capacity']; ?></h6>
                </div>
                <div class="col">
                    <h6><i class="bi bi-currency-rupee"></i><?php echo $row['Price']; ?></h6>
                </div>
            </div>
        </div>
        <!-- /Content Sub-Header -->

        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">

            <!-- carousel indicators -->
            <div class="carousel-indicators">
                <?php
                $counter = 0;
                while (True) {
                    // Determine file extension based on availability of image files
                    $image_extensions = ['.png', '.jpg', '.jpeg'];
                    $image_path = '';
                    foreach ($image_extensions as $ext) {
                        $file_path = 'Images/' . $TrekName . '/' . ($counter + 1) . $ext;
                        if (file_exists(($file_path))) {
                            $image_path = $file_path;
                            break;
                        }
                    }
                    if (!file_exists(($file_path))) {
                        break;
                    }
                ?>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?php echo $counter; ?>" <?php if ($counter == 0) echo 'class="active"'; ?> aria-label="Slide <?php echo ($counter + 1); ?>"></button>
                <?php
                    $counter++;
                }
                ?>
            </div>
            <!-- /carousel indicators -->

            <div class="carousel-inner">
                <?php
                $counter = 0;
                while (True) {
                    // Determine file extension based on availability of image files
                    $image_extensions = ['.png', '.jpg', '.jpeg'];
                    $image_path = '';
                    foreach ($image_extensions as $ext) {
                        $file_path = 'Images/' . $TrekName . '/' . ($counter + 1) . $ext;
                        if (file_exists(($file_path))) {
                            $image_path = $file_path;
                            break;
                        }
                    }
                    if (!file_exists(($file_path))) {
                        break;
                    }
                ?>
                    <div class="carousel-item <?php if ($counter == 0) echo 'active'; ?>">
                        <img src="<?php echo $image_path; ?>" class="d-block w-100" alt="..." data-bs-interval="8000">
                    </div>
                <?php
                    $counter++;
                }
                ?>
            </div>

            <!-- previous and next button -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- /previous and next button -->
        </div>
        <!-- /Carousel -->


        <!-- Overview -->
        <h1 class="display-6">Overview</h1>
        <?php
        $sql = "SELECT Overview from Trek where Trek_ID=4";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // Fetch the result as an associative array
            $row = mysqli_fetch_assoc($result);
        }
        ?>
        <p><?php echo $row['Overview'] ?>
        </p>
        <!-- /Overview -->

        <!-- Highlights -->
        <h1 class="display-6">Highlights</h1>
        <?php
        $sql = "SELECT Trip_Nature, Duration, Interests, Best_time, start_point, end_point, meeting_point from highlights where Trek_ID=4";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // Fetch the result as an associative array
            $row = mysqli_fetch_assoc($result);
        }
        ?>

        <ul>
            <li>NATURE OF TRIP : <?php echo $row['Trip_Nature'] ?></li>
            <li>DURATION : <?php echo $row['Duration'] ?></li>
            <li>
                INTRESTS: <?php echo $row['Interests'] ?>
            </li>
            <li>BEST TIME : <?php echo $row['Best_time'] ?></li>
            <li>START POINT : <?php echo $row['start_point'] ?></li>
            <li>END POINT : <?php echo $row['end_point'] ?></li>
            <li>MEETING POINT : <?php echo $row['meeting_point'] ?></li>
        </ul>
        <!-- /Highlights -->

        <!-- Itinerary -->
        <h1 class="display-6">Itinerary</h1>
        <div class="accordion" id="accordionExample">
            <?php
            $sql = "SELECT * FROM itinerary where Trek_ID=4";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Counter for unique IDs
                $counter = 1;

                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    // Generate unique IDs for each accordion item
                    $collapseId = 'collapse_' . $counter;
                    $ariaControls = 'accordion_' . $counter;

                    echo '<div class="accordion-item">';
                    echo '<h2 class="accordion-header">';
                    echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $ariaControls . '">';
                    echo 'Day ' . $row["Day"];
                    echo '</button>';
                    echo '</h2>';
                    echo '<div id="' . $collapseId . '" class="accordion-collapse collapse';
                    if ($counter === 1) {
                        echo ' show'; // Show the first accordion item by default
                    }
                    echo '" data-bs-parent="#accordionExample">';
                    echo '<div class="accordion-body">';

                    // Determine file extension based on availability of image files
                    $image_extensions = ['.png', '.jpg', '.jpeg'];
                    $image_path1 = '';
                    $image_path2 = '';
                    foreach ($image_extensions as $ext) {
                        $file_path1 = 'Images/' . $TrekName . '/Itinerary' . $counter . $ext;
                        $file_path2 = 'Images/' . $TrekName . '/Itinerary' . $counter . '(1)' . $ext;
                        if (file_exists(($file_path1)) || file_exists(($file_path2))) {
                            $image_path1 = $file_path1;
                            $image_path2 = $file_path2;
                            break;
                        }
                    }
                    echo '<img src="' . $image_path1 . '" alt="" class="w-50" />';
                    echo '<img src="' . $image_path2 . '" alt="" class="w-50" />';

                    echo '<ul class="">';
                    echo '<li>' . $row["Description"] . '</li>';
                    echo '</ul>';
                    echo '</div></div></div>';

                    // Increment counter
                    $counter++;
                }
            }
            ?>
        </div>
        <!-- /Itinerary -->

        <!-- Booking button -->
        <div class="d-grid gap-2 col-6 mx-auto mb-5 mt-3">
            <button class="btn btn-primary fs-4" type="button" data-bs-toggle="modal" data-bs-target="#DateModal">Book
                tickets</button>
        </div>
        <!-- /Booking button -->

        <!-- Booking Date modal -->
        <div class="modal" tabindex="-1" id="DateModal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select Batch</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        // Fetching batches data from the database
                        $query = "SELECT * FROM `batches` WHERE Trek_ID=4";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            echo '<div class="list-group list-group-flush">';
                            $counter = 1;

                            // Loop through each batch and display buttons
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="list-group list-group-flush">';
                                echo '<div class="form-check list-group-item list-group-item-action">';
                                if ($row['people'] == 20) {
                                    echo '<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault' . $counter . '" disabled>';
                                    echo '<label class="form-check-label d-flex justify-content-between align-items-center" for="flexRadioDefault' . $counter . '">';
                                    echo 'From: ' . $row['from_date'] . ' To: ' . $row['to_date'];
                                    echo '<span class="badge text-bg-primary rounded-pill">Batch Full</span>';
                                } else {
                                    echo '<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault' . $counter . '">';
                                    echo '<label class="form-check-label d-flex justify-content-between align-items-center" for="flexRadioDefault' . $counter . '">';
                                    echo 'From: ' . $row['from_date'] . ' To: ' . $row['to_date'];
                                    echo '<span class="badge text-bg-primary rounded-pill">' . $row['people'] . '</span>';
                                }
                                echo '</label></div></div>';
                                $counter++;
                            }
                            echo '</div>';
                        } else {
                            echo "No batches found.";
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><?php echo 'Pay Rs ' . $Price; ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Booking Date modal -->

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

</html>