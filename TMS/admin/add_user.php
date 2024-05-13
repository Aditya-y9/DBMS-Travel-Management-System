<?php
// Include your database connection file here
include('includes/config.php');

if(isset($_POST['submit'])) {
    // Retrieve form data
    $userId = $_POST['user_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert data into the user table
    $sql = "INSERT INTO user (User_Id, Name, Password, Dob, Email_Id, Address) 
            VALUES (:userId, :name, :password, :dob, :email, :address)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':userId', $userId, PDO::PARAM_STR);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':dob', $dob, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    
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
    <title>TMS | Admin Package Creation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Add your CSS links here -->
</head>
<body>
    <div class="page-container">
        <!-- Header and other elements -->
        
        <h2>Add User</h2>
        <form method="post">
            <label>User ID:</label><br>
            <input type="text" name="User_Id" required><br>
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Password:</label><br>
            <input type="password" name="password" required><br>
            <label>Date of Birth:</label><br>
            <input type="date" name="dob" required><br>
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Address:</label><br>
            <textarea name="address" rows="4" cols="50" required></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <!-- Include other elements like sidebar, footer, etc. -->
    </div>
    <!-- Include your JavaScript files here -->
</body>
</html>
