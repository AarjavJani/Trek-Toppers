<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, "trektoppers");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
// Initialize session variables to avoid "undefined array key" warnings
if (!isset($_SESSION['authentication'])) {
  $_SESSION['authentication'] = False;
}
if (!isset($_SESSION['showAlert'])) {
  $_SESSION['showAlert'] = False;
}
if (!isset($_SESSION['alert_message'])) {
  $_SESSION['alert_message'] = "";
}
if (!isset($_SESSION['err_pass_message'])) {
  $_SESSION['err_pass_message'] = "";
}
if (!isset($_SESSION['err_user_nf_message'])) {
  $_SESSION['err_user_nf_message'] = "";
}
if (!isset($_SESSION['user'])) {
  $_SESSION['user'] = "";
}
if (!isset($_SESSION['phone_err_message'])) {
  $_SESSION['phone_err_message'] = "";
}
if (!isset($_SESSION['success_inserted_message'])) {
  $_SESSION['success_inserted_message'] = "";
}

?>