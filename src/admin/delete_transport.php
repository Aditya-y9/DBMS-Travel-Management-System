<?php
// Include your database configuration file
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if form is submitted for transport deletion
if(isset($_POST['delete'])) {
    // Get transport ID to be deleted
    $transport_id = $_POST['transport_id'];

    // Delete transport from transport table
    $sql = "DELETE FROM transport_type WHERE Transport_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $transport_id);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        // Display success message with JavaScript alert
        echo '<script>alert("Transport deleted successfully!");</script>';
        // Redirect to manage-transports.php after user clicks OK
        echo '<script>window.location.href = "manage-transports.php";</script>';
    } else {
        // Display error message with JavaScript alert
        echo '<script>alert("Error deleting transport!");</script>';
    }   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Transport</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="margin-left: 150px;">
    <div class="container">
        <h1 class="my-4">Delete Transport</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="transport_id">Transport ID</label>
                <input type="text" class="form-control" id="transport_id" name="transport_id" required>
            </div>
            <button type="submit" name="delete" class="btn btn-danger">Delete Transport</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Include your sidebar -->
    <?php include('includes/sidebarmenu.php');?>
</body>
</html>
