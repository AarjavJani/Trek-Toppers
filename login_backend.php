<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- /Bootstrap CSS -->

    <!-- Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- /Icon CDN -->

    <!-- Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap JS -->

    <?php include './db_connection.php' ?>
</head>

<body>
    <?php
    $authentication_successful = False;
    $showAlert = False; //Show Alert flag
    $alert_message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require './db_connection.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $err_pass_message = "";
        $err_user_nf_message = "";

        // Existing user validation
        $sql = "SELECT user_id,`password` FROM `user` where user_id= '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) == 1) {

            // Password validation
            if ($password == $row['password']) {
                $authentication_successful = True;
                echo '<div class="alert alert-success alert-dismissible fade show position-absolute" style="width:100%;" role="alert">';
                echo "<strong>Logged In successfully!</strong>";
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo '</div>';
            } else {
                $showAlert = True; //Show alert for password error
                $alert_message = "passError";
                $err_pass_message = "<strong>Invalid Password!</strong> Try again.";
            }
        } else {
            $showAlert = True; //Show alert for password error
            $alert_message = "userNotFoundError";
            $err_user_nf_message = "<strong>User not found!</strong> Try again or Sign up.";
        }
    }

    if ($showAlert == True) {
        echo '<div class="alert alert-danger alert-dismissible fade show position-absolute" style="width:100%;" role="alert">';
        if ($alert_message == "passError") {
            echo $err_pass_message;
        } elseif ($alert_message == "userNotFoundError") {
            echo $err_user_nf_message;
        }
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
    }

    // If authentication is successful, redirect to index.php
    if ($authentication_successful) {
        header("Location: index.php");
        exit; // Make sure to exit to prevent further execution
    } else {
        // If authentication fails, you can display an error message or redirect to a different page
        header("Location: login.php");
        exit;
    }
    ?>



</body>

</html>