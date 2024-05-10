<?php
// Include your database configuration file
// include("./includes/config.php");

define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if form is submitted for user deletion
if(isset($_POST['delete'])) {
    // Get username to be deleted
    $username = $_POST['username'];

    // Retrieve User_Id of the user to be deleted
    $sql_uid = "SELECT User_Id FROM dbms.user WHERE name=?";
    $stmt_uid = $conn->prepare($sql_uid);
    $stmt_uid->bind_param("s", $username);
    $stmt_uid->execute();
    $result_uid = $stmt_uid->get_result();
    $row_uid = $result_uid->fetch_assoc();
    $uid = $row_uid['User_Id'];

    // Delete user from users table
    $sql = "DELETE FROM dbms.user WHERE name=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Check if deletion was successful
    // if($stmt->affected_rows > 0) {
        // Additional logic to delete related records from connected tables
        // Example: You might need to delete user-related records from other tables like UserProfile, UserAccount, Bill, etc.
        // Implement similar DELETE queries for those tables here

        // // Delete related records from UserProfile table
        // $sql_profile = "DELETE FROM UserProfile WHERE User_Id = ?";
        // $stmt_profile = $conn->prepare($sql_profile);
        // $stmt_profile->bind_param("s", $uid);
        // $stmt_profile->execute();

        // Delete related records from UserAccount table
        $sql_account = "DELETE FROM User_Account WHERE User_Id = ?";
        $stmt_account = $conn->prepare($sql_account);
        $stmt_account->bind_param("s", $uid);
        $stmt_account->execute();

        // Delete related records from Bill table
        $sql_bill = "DELETE FROM Bill WHERE User_Id = ?";
        $stmt_bill = $conn->prepare($sql_bill);
        $stmt_bill->bind_param("s", $uid);
        $stmt_bill->execute();

        // Delete related records from User_preference table
        $sql_preference = "DELETE FROM User_preference WHERE User_Id = ?";
        $stmt_preference = $conn->prepare($sql_preference);
        $stmt_preference->bind_param("s", $uid);
        $stmt_preference->execute();

        // Redirect to homepage after successful deletion
        // header("Location: index.php");
    // } else {
    //     // Handle deletion failure
    //     echo "Error: Unable to delete user.";
    // }
}

// Display form for entering username to be deleted
?>
<html>
<head>  
    <title>Delete User</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <form name="delete_user" method="post" action="">
        <table border="0">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td><input type="submit" name="delete" value="Delete"></td>
            </tr>
        </table>
    </form>
</body>
</html>