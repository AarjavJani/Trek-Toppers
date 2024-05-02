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

  <title>Log In | TrekToppers</title>
</head>

<body>
  <?php
  session_start();
  if ($_SESSION['showAlert'] == True) {
    echo '<div class="alert alert-danger alert-dismissible fade show position-absolute" style="width:100%;" role="alert">';
    if ($_SESSION['alert_message'] == "passError") {
        echo $_SESSION['err_pass_message'];
    } elseif ($_SESSION['alert_message'] == "userNotFoundError") {
        echo $_SESSION['err_user_nf_message'];
    }
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';

    //Flag reset
    $_SESSION['showAlert'] = False;
}
  ?>
  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0 d-flex justify-content-center">
          <h1 class="fw-bold mb-0 fs-1">Log In</h1>
        </div>

        <div class="modal-body p-5 pt-0">
          <form action="./login_backend.php" method="post" class="">
            <!-- E-mail -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="username" name="username" placeholder="name@example.com" required>
              <label for="username">Username</label>
            </div>
            <!-- /E-mail -->

            <!-- Password -->
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <!-- /Password -->

            <!-- Login button -->
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Log In</button>
            <!-- /Login button -->

            <!-- terms of service text -->
            <small class="text-body-secondary">Don't have an account? <a href="signup.php">Signup</a> instead.</small>
            <!-- /terms of service text -->

            <!-- divider -->
            <hr class="my-4">
            <!-- /divider -->

            <!-- Third-party heading -->
            <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
            <!-- /Third-party heading -->

            <!-- twitter button -->
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
              <i class="bi bi-twitter"></i>
              Log In with Twitter
            </button>
            <!-- /twitter button -->

            <!-- Google button -->
            <button class="w-100 py-2 mb-2 btn btn-outline-danger rounded-3" type="submit">
              <i class="bi bi-google"></i>
              Log In with Google
            </button>
            <!-- /Google button -->

            <!-- Facebook button -->
            <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
              <i class="bi bi-facebook"></i>
              Log In with Facebook
            </button>
            <!-- /Facebook button -->

            <!-- GitHub Button -->
            <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
              <i class="bi bi-github"></i>
              Log In with GitHub
            </button>
            <!-- /GitHub Button -->

          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>