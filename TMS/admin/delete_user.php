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
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="margin-left: 150px;">
    <div class="container">
        <h1 class="my-4">Delete User</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <button type="submit" name="delete" class="btn btn-danger">Delete User</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <div>
    

    </div>
    <div class="clearfix"></div>
    <script>
    var toggle = true;
    $(".sidebar-icon").click(function() {                
      if (toggle) {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      } else {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }
      toggle = !toggle;
    });
    </script>
    <!-- Nice Scroll and Scripts -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
