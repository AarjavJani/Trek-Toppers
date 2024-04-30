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

    // Insert values into database
    

    ?>

<?php
// Assuming you have already established a connection to your MySQL database
// and stored it in $conn variable.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pay'])) {
    // Retrieving the selected batch ID from the form
    $batch_id = $_POST['batch_id'];
    
    // Retrieving the amount from the form
    $amount = $_POST['amount'];

    // Retrieving the TrekID from the form
    $Trek_ID = $_POST['Trek_ID'];

    
    // Your SQL query to insert the values into the database
    $sql = "INSERT INTO payments (payment_amount, batch_id ,Trek_ID,payment_status) VALUES ('$amount', '$batchId', '$Trek_ID','')";
    
    // Executing the query
    if (mysqli_query($conn, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>


</body>

</html>