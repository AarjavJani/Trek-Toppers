<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap CSS -->

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- /Icon CDN -->

    <?php include "./db_connection.php" ?>

    <title>Trek Page</title>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md bg-body-tertiary bg-light navbar-light" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html">
                <img src="Images\logo\logo.svg" alt="TrekToppers Logo" width="100px">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fs-5" aria-current="page" href="home.html"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="about.html"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="contact.html"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="login.html"><b>LogIn</b></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Content -->
    <div class="container p-0 px-3 mb-4">

        <!-- Content Heading -->
        <h2 class="border-bottom border-3 border-secondary text-center text-middle mb-0 pb-1">Kedarkantha Trek</h2>
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
                    <h6>8 Nights, 9Days</h6>
                </div>
                <div class="col border-start border-end">
                    <h6>25 people</h6>
                </div>
                <div class="col">
                    <h6><i class="bi bi-currency-rupee"></i>14,000</h6>
                </div>
            </div>
        </div>
        <!-- /Content Sub-Header -->

        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">

            <!-- carousel indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <!-- /carousel indicators -->

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images\KedarkanthaTrek\1.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
                <div class="carousel-item">
                    <img src="Images\KedarkanthaTrek\2.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
                <div class="carousel-item">
                    <img src="Images\KedarkanthaTrek\3.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
                <div class="carousel-item">
                    <img src="Images\KedarkanthaTrek\4.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
                <div class="carousel-item">
                    <img src="Images\KedarkanthaTrek\5.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
                <div class="carousel-item">
                    <img src="Images\KedarkanthaTrek\6.png" class="d-block w-100" alt="..." data-bs-interval="10000">
                </div>
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
        $sql = "SELECT Overview from Trek where Trek_ID=2";
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
        $sql = "SELECT Trip_Nature, Duration, Interests, Best_time, start_point, end_point, meeting_point from highlights where Trek_ID=2";
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
            $sql = "SELECT * FROM itinerary where Trek_ID=2";
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
                    echo '<img src="Images\GirnarTrek\itinerary1.jpeg" alt="" class="w-50" />';
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
            <button class="btn btn-primary fs-4" type="button">Book tickets</button>
        </div>
        <!-- /Booking button -->

    </div>
    <!-- /Content -->

    <!-- Footer -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-6 mb-3">
                    <h5>Section</h5>
                    <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home.html" class="text-body-secondary link-underline link-underline-opacity-0">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="contact.html" class="text-body-secondary link-underline link-underline-opacity-0">Contact</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="about.html" class="text-body-secondary link-underline link-underline-opacity-0">About</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-body-secondary link-underline link-underline-opacity-0">FAQs</a>
                            </li>
                        </ol>
                    </nav>
                </div>

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
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>Copyright © 2023 by TrekToppers | Developed by Aarjav Jani</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"> <!-- Link to our twitter handle-->
                            <i class="bi bi-twitter text-primary fs-4"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"> <!-- Link to our instagram page-->
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"> <!-- Link to our facebook page-->
                            <i class="bi bi-facebook text-primary fs-4"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <!-- /Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap JS -->

</body>

</html>