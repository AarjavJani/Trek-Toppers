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
?>