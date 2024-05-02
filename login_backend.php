<?php include './db_connection.php';

session_start();

$_SESSION['authentication'] = False;
$_SESSION['showAlert'] = False; //Show Alert flag
$_SESSION['alert_message'] = "";
$_SESSION['err_pass_message'] = "";
$_SESSION['err_user_nf_message'] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require './db_connection.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']); // Prevent SQL injection
    $password = $_POST['password'];

    // Existing user validation
    $sql = "SELECT user_id,`password` FROM `user` where user_id= '$username'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Password validation
        if ($password == $row['password']) {
            $_SESSION['authentication'] = True;
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['showAlert'] = True; //Show alert for password error
            $_SESSION['alert_message'] = "passError";
            $_SESSION['err_pass_message'] = "<strong>Invalid Password!</strong> Try again.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['showAlert'] = True; //Show alert for password error
        $_SESSION['alert_message'] = "userNotFoundError";
        $_SESSION['err_user_nf_message'] = "<strong>User not found!</strong> Try again or Sign up.";
        header("Location: login.php");
        exit();
    }
}
