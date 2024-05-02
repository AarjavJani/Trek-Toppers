<?php
// Start the session
session_start();

//Unset all session variables
unset($_SESSION['authentication']);
unset($_SESSION['showAlert']);
unset($_SESSION['alert_message']);
unset($_SESSION['err_pass_message']);
unset($_SESSION['err_user_nf_message']);
unset($_SESSION['user']);
unset($_SESSION['phone_err_message']);
unset($_SESSION['success_inserted_message']);

// Destroy all session data
session_destroy();

// New Session to reset all variables
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
// Redirect the user to the login page
header("Location: index.php");
exit;
