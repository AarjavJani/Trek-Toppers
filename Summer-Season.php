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
    <?php include './db_connection.php' ?>
    <link rel="stylesheet" href="./style/navbar-link.css">
    <link rel="stylesheet" href="./style/navbar-toggler.css">
    <link rel="stylesheet" href="./style/footer-media-handles.css">

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
                        <a class="nav-link fs-5" aria-current="page" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="./about.php">About</a>
                    </li>
                    <li class="nav-item position position-fixed end-0 me-2">
                        <a class="nav-link fs-5 link-light" href="./login.php">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- /Navbar -->

<!-- Cards -->
<h1 class="display-6 mt-3 ms-5">Summer Season Treks:</h1>
<div class="row row-cols-1 row-cols-md-4 g-3 mx-5">
  <?php
  // Assuming $conn is your MySQLi connection
  $sql = "SELECT t.TrekName, t.Location, t.Price, t.Season, h.Duration FROM Trek t JOIN highlights h ON t.Trek_ID = h.Trek_ID WHERE t.Season = 'Summer' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // Determine file extension based on availability of image files
      $image_extensions = ['png', 'jpg', 'jpeg'];
      $image_path = '';
      foreach ($image_extensions as $ext) {
        $file_path = 'Images\Cards\\' . strtolower(str_replace(' ', '-', $row['TrekName'])) . '.' . $ext;
        if (file_exists($file_path)) {
          $image_path = $file_path;
          break;
        }
      }
  ?>
      <div class="col">
        <div class="card h-100">
          <!-- Assuming your image paths are correct -->
          <a href="<?php echo str_replace(' ', '-', $row['TrekName']); ?>.php">
            <img src="<?php echo $image_path; ?>" class="card-img-top" alt="Trek Thumbnail">
          </a>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["TrekName"]; ?></h5>
            <p><i class="bi bi-geo-alt"></i><?php echo $row["Location"]; ?></p><br>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item border-0 position-absolute bottom-0 start-0"><?php echo $row["Duration"]; ?></li>
              <li class="list-group-item border-0 position-absolute bottom-0 end-0">
                <i class="bi bi-currency-rupee"></i><?php echo $row["Price"]; ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
  <?php
    }
  } else {
    echo "No treks found!";
  }

  ?>
</div>
<!-- /Cards -->

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
                                <a href="#" class="text-body-secondary link-underline link-underline-opacity-0">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="contact.php" class="text-body-secondary link-underline link-underline-opacity-0">Contact</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="about.php" class="text-body-secondary link-underline link-underline-opacity-0">About</a>
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
                    Developed by Aarjav Jani
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

    <!-- Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap JS -->

</body>