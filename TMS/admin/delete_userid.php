<?php
// Include your database configuration file
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
    $uid = $_GET['id'];

    // Retrieve name from database based on user id
    $sql_name = "SELECT name FROM dbms.user WHERE User_Id=?";
    $stmt_name = $conn->prepare($sql_name);
    $stmt_name->bind_param("s", $uid);
    $stmt_name->execute();
    $result_name = $stmt_name->get_result();
    $row_name = $result_name->fetch_assoc();
    $name = $row_name['name'];

    // Check if delete button is clicked
    if(isset($_POST['delete'])) {
        // Delete user from users table
        $sql_delete = "DELETE FROM dbms.user WHERE User_Id=?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("s", $uid);
        $stmt_delete->execute();

        // Check if deletion was successful
        if($stmt_delete->affected_rows > 0) {
            // Additional logic to delete related records from connected tables
            // Example: You might need to delete user-related records from other tables like User_Account, Bill, etc.
            // Implement similar DELETE queries for those tables here

            // Delete related records from User_Account table
            $sql_account = "DELETE FROM user_account WHERE User_Id = ?";
            $stmt_account = $conn->prepare($sql_account);
            $stmt_account->bind_param("s", $uid);
            $stmt_account->execute();

            // Delete related records from Bill table
            $sql_bill = "DELETE FROM Bill WHERE User_Id = ?";
            $stmt_bill = $conn->prepare($sql_bill);
            $stmt_bill->bind_param("s", $uid);
            $stmt_bill->execute();

            $sql_preference = "DELETE FROM User_preference WHERE User_Id = ?";
            $stmt_preference = $conn->prepare($sql_preference);
            $stmt_preference->bind_param("s", $uid);
            $stmt_preference->execute();

            // Display browser popup message
            echo "<script>alert('localhost says: User ".$uid." deleted successfully');</script>";
            // Redirect to manage-users.php after successful deletion
            echo "<script>window.location.href='manage-users.php';</script>";
        } else {
            // Display browser popup message
            echo "<script>alert('localhost says: Error - Failed to delete user. Please try again.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
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
        function confirmDelete(name, userId) {
            var confirmMsg = "Are you sure you want to delete user '" + name + "' with ID " + userId + "?";
            if(confirm(confirmMsg)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>Delete User</h1>
    <?php
    // Check if id is provided in the URL
    if(isset($_GET['id'])) {
        // Display the User ID and name
        echo "<p>User ID: ".$_GET['id']."</p>";
        echo "<p>name: ".$name."</p>";
    } else {
        // If id is not provided, display an error message
        echo "<p>Error: User ID not provided.</p>";
    }
    ?>
    <form method="post" action="">
        <?php
        // Add a hidden input field to pass id to the form
        if(isset($_GET['id'])) {
            echo "<input type='hidden' name='id' value='".$_GET['id']."'>";
        }
        ?>
        <input type="submit" name="delete" value="Delete" onclick="return confirmDelete('<?php echo $name; ?>', <?php echo $uid; ?>);">
        <a href="manage-users.php">Cancel</a>
    </form>
</body>
</html>
