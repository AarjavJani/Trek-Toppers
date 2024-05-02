<?php
include './db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $user = $_SESSION['user'];

    // Check if phone number is empty or null
    if ($phone === '' || $phone === NULL) {
        $phoneValue = "NULL"; // Set phone number to NULL in SQL query
    } else {
        $phoneValue = "'$phone'"; // Wrap phone number in quotes for SQL query
    }

    // Check if DOB is empty or null
    if ($dob === '' || $dob === NULL) {
        $dobValue = "NULL"; // Set DOB to NULL in SQL query
    } else {
        $dobValue = "'$dob'"; // Wrap DOB in quotes for SQL query
    }

    // Check if gender is empty or null
    if ($gender === '' || $gender === NULL) {
        $genderValue = "NULL"; // Set gender to NULL in SQL query
    } else {
        $genderValue = "'$gender'"; // Wrap gender in quotes for SQL query
    }

    // Convert DOB to a timestamp for comparison
    $dobTimestamp = strtotime($dob);

    // Validate phone number format
    if ($dob == NULL || $dobTimestamp < time()) {
        $sql = "UPDATE `user` SET phoneno = $phoneValue, dob = $dobValue, gender = $genderValue WHERE user_id = '$user'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['alert_message'] = "SuccessfullyInserted";
            $_SESSION['success_inserted_message'] = "<strong>Inserted successfully!</strong>";
            header("Location: Userpage.php");
            exit();
        }
    } else {
        // DOB is in the future
        $_SESSION['showAlert'] = True;
        $_SESSION['alert_message'] = "InvalidDOB";
        $_SESSION['dob_err_message'] = "<strong>Invalid Date of Birth!</strong>Please enter a date in the past.";
    }
}
?>
