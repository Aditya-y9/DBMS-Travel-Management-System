<?php
// Include your database configuration file
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if form is submitted for user deletion
if(isset($_POST['delete'])) {
    // Get hotel name to be deleted
    $name = $_POST['name'];

    // Retrieve Hotel_id of the hotel to be deleted
    $sql_hid = "SELECT Hotel_id FROM hotel WHERE Name=?";
    $stmt_hid = $conn->prepare($sql_hid);
    $stmt_hid->bind_param("s", $name);
    $stmt_hid->execute();
    $result_hid = $stmt_hid->get_result();
    $row_hid = $result_hid->fetch_assoc();
    $hid = $row_hid['Hotel_id'];

    // Delete hotel from hotel table
    $sql = "DELETE FROM hotel WHERE Name=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        // Display success message with JavaScript alert
        echo '<script>alert("Hotel deleted successfully!");</script>';
        // Redirect to manage-hotels.php after user clicks OK
        echo '<script>window.location.href = "manage-hotels.php";</script>';
    } else {
        // Display error message with JavaScript alert
        echo '<script>alert("Error deleting hotel!");</script>';
    }   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Hotel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="margin-left: 150px;">
    <div class="container">
        <h1 class="my-4">Delete Hotel</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Hotel Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" name="delete" class="btn btn-danger">Delete Hotel</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Include your sidebar -->
    <?php include('includes/sidebarmenu.php');?>
</body>
</html>
