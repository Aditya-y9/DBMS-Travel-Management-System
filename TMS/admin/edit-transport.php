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

// Check if Transport_id is provided in the URL
if(isset($_GET['id'])) {
    // Get Transport_id from the URL
    $transport_id = $_GET['id'];

    // Fetch transport details from transport_type table
    $sql = "SELECT * FROM transport_type WHERE Transport_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $transport_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $transport = $result->fetch_assoc();

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get form data
        $nameOfProvider = $_POST['nameOfProvider'];
        $fare = $_POST['fare'];
        $typeOfVehicle = $_POST['typeOfVehicle'];
        $transportImage = $_POST['transportImage']; // Assuming you also have a form field for this

        // Update transport details in transport_type table
        $sql_update = "UPDATE transport_type SET NameOfProvider=?, Fare=?, TypeOfVehicle=?, Transport_Image=? WHERE Transport_id=?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("sdsbs", $nameOfProvider, $fare, $typeOfVehicle, $transportImage, $transport_id);
        $stmt_update->execute();

        // Check if update was successful
        if($stmt_update->affected_rows > 0) {
            $message = "Transport details updated successfully!";
        } else {
            $message = "Failed to update transport details.";
        }

        header("Location: manage-transport.php"); // Redirect to the manage transport page after update
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Transport</title>
</head>
<body>
    <h2>Edit Transport</h2>
    <!-- Display alert message if set -->
    <?php if(!empty($message)): ?>
        <script>alert("<?php echo $message; ?>");</script>
    <?php endif; ?>
    <form method="post">
        <label>Name of Provider:</label><br>
        <input type="text" name="nameOfProvider" value="<?php echo $transport['NameOfProvider']; ?>"><br><br>
        <label>Fare:</label><br>
        <input type="number" step="0.01" name="fare" value="<?php echo $transport['Fare']; ?>"><br><br>
        <label>Type of Vehicle:</label><br>
        <input type="text" name="typeOfVehicle" value="<?php echo $transport['TypeOfVehicle']; ?>"><br><br>
        <label>Transport Image:</label><br>
        <input type="text" name="transportImage" value="<?php echo $transport['Transport_Image']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
