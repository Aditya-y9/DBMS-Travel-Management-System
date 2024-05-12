<?php
// Database connection
$servername = "MSHOME:3304";
$username = "username";
$password = "password";
$database = "dbms";

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to authenticate admin role
function authenticateAdminRole($conn, $adminId) {
    // Query to check if the admin has the role "Owner"
    $sql = "SELECT Role FROM admin WHERE Admin_id = '$adminId'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $role = $row['Role'];

    // Check if the role is "Owner"
    if ($role === "Owner") {
        return true;
    } else {
        return false;
    }
}

// Function to get admin details by name
function getAdminDetails($conn, $name) {
    // Query to get admin details by name
    $sql = "SELECT * FROM admin WHERE Name = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}

// Function to add admin
function addAdmin($conn, $adminId, $name, $password, $role) {
    // Check if the current admin has the role "Owner"
    if (!authenticateAdminRole($conn, $adminId)) {
        echo "You don't have permission to add admins.";
        return;
    }

    // Insert query to add admin
    $sql = "INSERT INTO admin (Admin_id, Name, Password, Role) VALUES ('$adminId', '$name', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        print "Admin added successfully.";
    } else {
        print "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to edit admin
function editAdmin($conn, $adminId, $name, $password, $role) {
    // Check if the current admin has the role "Owner"
    if (!authenticateAdminRole($conn, $adminId)) {
        echo "You don't have permission to edit admins.";
        return;
    }

    // Update query to edit admin
    $sql = "UPDATE admin SET Name = '$name', Password = '$password', Role = '$role' WHERE Admin_id = '$adminId'";

    if ($conn->query($sql) === TRUE) {
        echo "Admin edited successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Example usage:
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["admin_id"])) {
    $adminId = $_SESSION["admin_id"];
    $option = $_POST["option"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    if ($option == "add") {
        addAdmin($conn, $adminId, $name, $password, $role);
        print "<br>";
    } elseif ($option == "edit") {
        // Get admin details by name
        $adminDetails = getAdminDetails($conn, $name);
        if ($adminDetails) {
            // Prefill admin details
            $name = $adminDetails["Name"];
            $password = $adminDetails["Password"];
            $role = $adminDetails["Role"];
        } else {
            echo "Admin not found.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management</title>
</head>
<body>
    <h2>Select Action</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="radio" id="add" name="option" value="add" checked>
        <label for="add">Add Admin</label><br>
        <input type="radio" id="edit" name="option" value="edit">
        <label for="edit">Edit Admin</label><br><br>
        Name: <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>
        Password: <input type="password" name="password" value="<?php echo isset($password) ? $password : ''; ?>"><br><br>
        Role: <input type="text" name="role" value="<?php echo isset($role) ? $role : ''; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>