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

  <title>SignUp | TrekToppers</title>
</head>

<body>
  <?php
  $showAlert = False; //Show Alert flag
  $alert_message = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './db_connection.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $err_user_exists_message = "";
    $err_pass_message = "";

    // Existing user validation
    $check = "SELECT * FROM `user` where user_id= '$username'";
    $exists = mysqli_query($conn, $check);
    if (mysqli_num_rows($exists) == 0) {
      // Password validation
      if ($password == $cpassword) {
        $sql = "INSERT INTO `user`(user_id,email,`password`,firstname,lastname) values('$username','$email','$password','$firstname','$lastname')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          echo '<div class="alert alert-success alert-dismissible fade show position-absolute" style="width:100%;" role="alert">';
          echo "<strong>Signed up successfully!</strong> You should now log in.";
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          echo '</div>';
        }
      } else {
        $showAlert = True; //Show alert for password error
        $alert_message = "passError";
        $err_pass_message = "<strong>Password doesn't match!</strong> Try again.";
      }
    } else {
      $showAlert = True; //Show alert for existing user
      $alert_message = "userExists";
      $err_user_exists_message = "<strong>User already exists!</strong> Try another username.";
    }
  }

  if ($showAlert == True) {
    echo '<div class="alert alert-danger alert-dismissible fade show position-absolute" style="width:100%;" role="alert">';
    if ($alert_message == "passError") {
      echo $err_pass_message;
    } elseif ($alert_message == "userExists") {
      echo $err_user_exists_message;
    }
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
  }
  ?>

  <!-- Signup Modal -->
  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0 d-flex justify-content-center">
          <h1 class="fw-bold mb-0 fs-1">Sign Up</h1>
        </div>

        <div class="modal-body p-5 pt-0">
          <form action="./signup.php" method="post" class="">
            <!-- FirstName -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="firstname" name="firstname" placeholder="Name" required>
              <label for="firstname">Firstname</label>
            </div>
            <!-- /FirstName -->

            <!-- LastName -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="lastname" name="lastname" placeholder="Name" required>
              <label for="lastname">Lastname</label>
            </div>
            <!-- /LastName -->

            <!-- Username -->
            <div class="form-floating mb-3">
              <input type="text" class="form-control rounded-3" id="username" name="username" placeholder="name@example.com" required>
              <label for="username">Username</label>
            </div>
            <!-- /Username -->

            <!-- E-mail -->
            <div class="form-floating mb-3">
              <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="name@example.com" required>
              <label for="email">Email address</label>
            </div>
            <!-- /E-mail -->

            <!-- Password -->
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <!-- /Password -->

            <!-- Confirm Password -->
            <div class="form-floating mb-3">
              <input type="password" class="form-control rounded-3" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
              <label for="cpassword">Confirm Password</label>
            </div>
            <!-- /Confirm Password -->

            <!-- Signup button -->
            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign Up</button>
            <!-- /Signup button -->

            <!-- terms of service text -->
            <small class="text-body-secondary">Already have an account? Try <a href="login.php">Logging in</a>
              instead.</small>
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