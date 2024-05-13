<?php
// Include your database configuration file if necessary
// include("./includes/config.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if id is provided in the URL
if(isset($_GET['id'])) {
    // Get id from the URL
    $transport_id = $_GET['id'];

    // Retrieve name from database based on transport_id
    $sql_name = "SELECT NameOfProvider FROM transport_type WHERE Transport_id=?";
    $stmt_name = $conn->prepare($sql_name);
    $stmt_name->bind_param("s", $transport_id);
    $stmt_name->execute();
    $result_name = $stmt_name->get_result();
    $row_name = $result_name->fetch_assoc();
    $name = $row_name['NameOfProvider'];

    // Check if delete button is clicked
    if(isset($_POST['delete'])) {
        // Delete transport from transport_type table
        $sql_delete = "DELETE FROM transport_type WHERE Transport_id=?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("s", $transport_id);
        $stmt_delete->execute();

        // Check if deletion was successful
        if($stmt_delete->affected_rows > 0) {
            // Display browser popup message
            echo "<script>alert('Transport ".$transport_id." deleted successfully');</script>";
            // Redirect to manage-transport.php after successful deletion
            echo "<script>window.location.href='manage-transport.php';</script>";
        } else {
            // Display browser popup message
            echo "<script>alert('Error - Failed to delete transport. Please try again.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Transport</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        p {
            color: #666;
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"],
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover,
        a:hover {
            background-color: #555;
        }
    </style>
    <script>
        // JavaScript function to show confirmation dialog
        function confirmDelete(name, transportId) {
            var confirmMsg = "Are you sure you want to delete transport '" + name + "' with ID " + transportId + "?";
            if(confirm(confirmMsg)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <h1>Delete Transport</h1>
    <p>Are you sure you want to delete transport '<?php echo $name; ?>' with ID <?php echo $transport_id; ?>?</p>
    <form method="post">
        <input type="submit" name="delete" value="Delete" onclick="return confirmDelete('<?php echo $name; ?>', '<?php echo $transport_id; ?>')">
        <a href="manage-transport.php">Cancel</a>
    </form>
</body>