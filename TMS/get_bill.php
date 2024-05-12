<?php
// Establish database connection
$servername = "MSHOME:3304";
$username = "username";
$password = "password";
$database = "dbms";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the itinerary ID from the form
    $itinerary_id = $_POST['itinerary_id'];

    // Prepare SQL statement to fetch details from other tables based on itinerary ID
    $sql = "SELECT i.Title, p.PackageName, t.Transport_id, h.Hotel_id
            FROM itinerary i,
                    tbltourpackages p,
                    transport_type t,
                    hotel h
            WHERE i.Itinerary_id = '$itinerary_id'";
    $result = $conn->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Insert fetched details into the booking table
        $row = $result->fetch_assoc();
        $title = $row["Title"];
        $packageName = $row["PackageName"];
        $transportId = $row["Transport_id"];
        $hotelId = $row["Hotel_id"];
        $billNo = "YourGeneratedBillNo"; // You can generate the bill number dynamically

        // Insert into booking table
        $insertSql = "INSERT INTO booking (Itinerary_Id, Package_Id, Transport_Id, Hotel_Id, Bill_No)
                      VALUES ('$itinerary_id', '$packageName', '$transportId', '$hotelId', '$billNo')";
        if ($conn->query($insertSql) === TRUE) {
            echo "Booking created successfully!";
        } else {
            echo "Error creating booking: " . $conn->error;
        }
    } else {
        echo "No itinerary found for the provided ID";
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Booking</title>
</head>
<body>
    <h2>Enter Itinerary ID to Create Booking</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="itinerary_id">Itinerary ID:</label>
        <input type="text" id="itinerary_id" name="itinerary_id">
        <input type="submit" value="Create Booking">
    </form>
</body>
</html>
