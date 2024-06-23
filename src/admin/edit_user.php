<?php
// Include your database configuration file
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Initialize $message variable to hold alert message
$message = "";

// Check if User_Id is provided in the URL
if(isset($_GET['id'])) {
    // Get User_Id from the URL
    $uid = $_GET['id'];

    // Fetch user details from user table
    $sql = "SELECT * FROM user WHERE User_Id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // Update user details in user table
        $sql_update = "UPDATE user SET Name=?, Password=?, Dob=?, Email_Id=?, Address=? WHERE User_Id=?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ssssss", $username, $password, $dob, $email, $address, $uid);
        $stmt_update->execute();

        // Check if update was successful
        if($stmt_update->affected_rows > 0) {
            $message = "User updated successfully!";
        } else {
            $message = "Failed to update user.";
        }

        header("Location: manage-users.php");
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <!-- Display alert message if set -->
    <?php if(!empty($message)): ?>
        <script>alert("<?php echo $message; ?>");</script>
    <?php endif; ?>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?php echo $user['Name']; ?>"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" value="<?php echo $user['Password']; ?>"><br><br>
        <label>Date of Birth:</label><br>
        <input type="date" name="dob" value="<?php echo $user['Dob']; ?>"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $user['Email_Id']; ?>"><br><br>
        <label>Address:</label><br>
        <input type="text" name="address" value="<?php echo $user['Address']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
