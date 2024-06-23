<?php
// Include your database connection file here
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection for hotels
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    print("Connection successful");
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if(isset($_POST['submit'])) {
    // Retrieve form data
    $hotelId = $_POST['hotel_id'];
    $name = $_POST['name'];
    $noOfRooms = $_POST['no_of_rooms'];
    $cost = $_POST['cost'];
    $address = $_POST['address'];
    $rating = $_POST['rating'];

    // Insert data into the hotel table
    $sql = "INSERT INTO hotel (Hotel_id, Name, No_Of_Rooms, Cost, Address, Rating) 
            VALUES (:hotelId, :name, :noOfRooms, :cost, :address, :rating)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':hotelId', $hotelId, PDO::PARAM_STR);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':noOfRooms', $noOfRooms, PDO::PARAM_INT);
    $query->bindParam(':cost', $cost, PDO::PARAM_INT);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':rating', $rating, PDO::PARAM_STR);
    
    if($query->execute()) {
        echo '<script>alert("Data inserted successfully!");</script>';
    } else {
        echo '<script>alert("Error inserting data!");</script>';
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>TMS | Admin Hotel Creation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Add your CSS links here -->
</head>
<body>
    <div class="page-container">
        <!-- Header and other elements -->
        
        <h2>Add Hotel</h2>
        <form method="post">
            <label>Hotel ID:</label><br>
            <input type="text" name="hotel_id" required><br>
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Number of Rooms:</label><br>
            <input type="number" name="no_of_rooms" required><br>
            <label>Cost:</label><br>
            <input type="number" name="cost" required><br>
            <label>Address:</label><br>
            <textarea name="address" rows="4" cols="50" required></textarea><br>
            <label>Rating:</label><br>
            <input type="text" name="rating" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <!-- Include other elements like sidebar, footer, etc. -->
    </div>
    <!-- Include your JavaScript files here -->
</body>
</html>
