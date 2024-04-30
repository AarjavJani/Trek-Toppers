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
  <link rel="stylesheet" href="./style/season-cards.css">
  <link rel="stylesheet" href="./style/navbar-link.css">
  <link rel="stylesheet" href="./style/navbar-toggler.css">
  <link rel="stylesheet" href="./style/footer-media-handles.css">
  <?php include "./db_connection.php" ?>
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
          <li class="nav-item position position-fixed end-0 me-2">
            <a class="nav-link fs-5 link-light" href="./login.php">Login</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- /Navbar -->

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
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>
    <!-- /carousel indicators -->

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images\Carousel\p1.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p2.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p3.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p4.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p5.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p6.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p7.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

      <div class="carousel-item">
        <img src="Images\Carousel\p8.jpeg" class="d-block w-100" alt="..." data-bs-interval="8000">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- /Carousel -->

  <h1 class="display-6 mt-3 ms-5">Trending Treks:</h1>
  <!-- Cards -->
  <div class="row row-cols-1 row-cols-md-4 g-3 mx-5">
    <?php
    // Assuming $conn is your MySQLi connection
    $sql = "SELECT TrekName, Location, Price FROM Trek";
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
                <li class="list-group-item border-0 position-absolute bottom-0 start-0">9 Nights, 10 Days</li>
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

  <h1 class="display-6 mt-3 ms-5">Pick Season:</h1>
  <!-- Season Cards -->
  <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mb-4">
    <div class="col">
      <div class="card p-0">
        <img src="Images\Cards\Summer_season.png" class="card-img-top rounded-1" alt="Summer Trek Thumbnail">
        <div class="card-img-overlay">
          <div class="position-absolute top-50 start-50 translate-middle">
            <!-- <button type="button" class="btn btn-outline-dark btn-lg" onclick="window.open('./Season.php',_self)"><p class="card-text">Summer</p></button> -->
            <p class="card-text">
              <button type="button" class="btn btn-outline-dark btn-lg" onclick="window.open('./Season.php','_self')">
                Summer</button>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card p-0">
        <img src="Images\Cards\rainy_season.jpeg" class="card-img-top rounded-1" alt="Monsoon Trek Thumbnail">
        <div class="card-img-overlay">
          <div class="position-absolute top-50 start-50 translate-middle">
            <p class="card-text"><button type="button" class="btn btn-outline-dark btn-lg" onclick="window.open('./Season.php','_self')">Monsoon</button></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card p-0">
        <img src="Images\Cards\winter_season.png" class="card-img-top rounded-1" alt="Winter Trek Thumbnail">
        <div class="card-img-overlay">
          <div class="position-absolute top-50 start-50 translate-middle">
            <p class="card-text"><button type="button" class="btn btn-outline-dark btn-lg" onclick="window.open('./Season.php','_self')">Winter</button></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /Season Cards -->

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

</html>