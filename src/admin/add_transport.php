<?php
// Include your database connection file here
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection for transport
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    print("Connection successful");
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if(isset($_POST['submit'])) {
    // Retrieve form data
    $transportId = $_POST['transport_id'];
    $providerName = $_POST['provider_name'];
    $fare = $_POST['fare'];
    $vehicleType = $_POST['vehicle_type'];

    // Insert data into the transport table
    $sql = "INSERT INTO transport_type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) 
            VALUES (:transportId, :providerName, :fare, :vehicleType)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':transportId', $transportId, PDO::PARAM_STR);
    $query->bindParam(':providerName', $providerName, PDO::PARAM_STR);
    $query->bindParam(':fare', $fare, PDO::PARAM_INT);
    $query->bindParam(':vehicleType', $vehicleType, PDO::PARAM_STR);
    
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
    <title>TMS | Admin Transport Creation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Add your CSS links here -->
</head>
<body>
    <div class="page-container">
        <!-- Header and other elements -->
        
        <h2>Add Transport</h2>
        <form method="post">
            <label>Transport ID:</label><br>
            <input type="text" name="transport_id" required><br>
            <label>Provider Name:</label><br>
            <input type="text" name="provider_name" required><br>
            <label>Fare:</label><br>
            <input type="number" name="fare" required><br>
            <label>Vehicle Type:</label><br>
            <input type="text" name="vehicle_type" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <!-- Include other elements like sidebar, footer, etc. -->
    </div>
    <!-- Include your JavaScript files here -->
</body>
</html>
