<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TrekToppers | Contact</title>

  <!-- Bootstrap CSS -->
  <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- /Bootstrap CSS -->

  <!-- Bootstrap JS -->
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- /Bootstrap JS -->

  <!-- Icon CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- /Icon CDN -->
  <link rel="stylesheet" type="text/css" href="style\contact.css">
  <link rel="stylesheet" href="./style/navbar-link.css">
  <link rel="stylesheet" href="./style/navbar-toggler.css">
  <link rel="stylesheet" href="./style/footer-media-handles.css">

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
            <a class="nav-link fs-5" aria-current="page" href="./index.php">Home</a>
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

  <section class="contact border">
    <div class="content">
      <h2>Contact Us</h2>
      <p>Email us with any questions or inquiries or call. We would be
        happy to to answer your questions and set up a meeting with you. Black
        Sheep Web Design can help set you apart from the flock!</p>
    </div>

    <div class="container">
      <div class="contectInfo">
        <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="text">
            <h3>Address</h3>
            <p>gsfc university p.o.Fertilizarnagar,<br>Varodara - 391750,Gujarat,India</p>
          </div>
        </div>

        <div class="box">
          <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <div class="text">
            <h3>phone</h3>
            <p>1234567890</p>
          </div>
        </div>

        <div class="box">
          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
          <div class="text">
            <h3>email</h3>
            <p>trektoppers.support@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="contactForm">
        <form>
          <h2> Send Message</h2>
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span>Full Name</span>
          </div>
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span>Email</span>
          </div>
          <div class="inputBox">
            <textarea required="required"></textarea>
            <span>Type your Message...</span>
          </div>
          <div class="inputBox">
            <input type="submit" name="" value="Submit">

          </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>

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