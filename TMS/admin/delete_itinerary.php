<?php
// Include your database configuration file
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if Itinerary_id is provided in the URL
if(isset($_GET['id'])) {
    // Get Itinerary_id from the URL
    $iid = $_GET['id'];

    // Delete itinerary from itinerary table
    $sql = "DELETE FROM itinerary WHERE Itinerary_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $iid);
    $stmt->execute();

    // Check if deletion was successful
        // Additional logic to delete related records from connected tables
        // Example: You might need to delete itinerary-related records from other tables
        // Implement similar DELETE queries for those tables here

        // Delete related records from Transport table
    $sql_transport = "DELETE FROM Transport_type WHERE Transport_id = (SELECT Transport_id FROM Itinerary WHERE Itinerary_id = ?)";
    $stmt_transport = $conn->prepare($sql_transport);
    $stmt_transport->bind_param("s", $iid);
    $stmt_transport->execute();

        // Delete related records from Hotel table
    $sql_hotel = "DELETE FROM Hotel WHERE Hotel_id = (SELECT Hotel_id FROM Itinerary WHERE Itinerary_id = ?)";
    $stmt_hotel = $conn->prepare($sql_hotel);
    $stmt_hotel->bind_param("s", $iid);
    $stmt_hotel->execute();

        // Delete related records from other tables
        // ... similar DELETE query for other tables
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Itinerary</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin: 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Delete Itinerary</h2>
        <p>Itinerary has been deleted successfully.</p>
        <a href="manage-bookings.php" class="btn">Back to Itinerary List</a>
    </div>
</body>
</html>