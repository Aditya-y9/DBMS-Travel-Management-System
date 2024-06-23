<?php
// Include your database configuration file if necessary
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Initialize $message variable to hold alert message
$message = "";

// Check if Hotel_id is provided in the URL
if(isset($_GET['id'])) {
    // Get Hotel_id from the URL
    $hotel_id = $_GET['id'];

    // Fetch hotel details from hotel table
    $sql = "SELECT * FROM hotel WHERE Hotel_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $hotel_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $hotel = $result->fetch_assoc();

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get form data
        $name = $_POST['name'];
        $no_of_rooms = $_POST['no_of_rooms'];
        $cost = $_POST['cost'];
        // Update hotel details in hotel table
        $sql_update = "UPDATE hotel SET Name=?, No_Of_Rooms=?, Cost=? WHERE Hotel_id=?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("siss", $name, $no_of_rooms, $cost, $hotel_id);
        $stmt_update->execute();

        // Check if update was successful
        if($stmt_update->affected_rows > 0) {
            $message = "Hotel updated successfully!";
        } else {
            $message = "Failed to update hotel.";
        }

        header("Location: manage-hotels.php");
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Hotel</title>
</head>
<body>
    <h2>Edit Hotel</h2>
    <!-- Display alert message if set -->
    <?php if(!empty($message)): ?>
        <script>alert("<?php echo $message; ?>");</script>
    <?php endif; ?>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $hotel['Name']; ?>"><br><br>
        <label>No. of Rooms:</label><br>
        <input type="number" name="no_of_rooms" value="<?php echo $hotel['No_Of_Rooms']; ?>"><br><br>
        <label>Cost:</label><br>
        <input type="number" name="cost" value="<?php echo $hotel['Cost']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
