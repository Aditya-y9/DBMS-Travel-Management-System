<?php
// Include your database configuration file



define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Get the user id from the form
    $id = $_POST['id'];

    // Get the new user details from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    // Update the user in the database
    $sql = "UPDATE User SET Name = :name, Email_Id = :email, Dob = :dob, Address = :address WHERE user_id = :id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':dob', $dob, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    // Redirect to the manage users page
    header('Location: manage-users.php');
}

// Get the user id from the URL
$id = $_GET['id'];

// Get the current user details from the database
$sql = "SELECT * FROM User WHERE user_id = :id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <!-- Include your CSS file here -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo htmlentities($result->id);?>">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo htmlentities($result->Name);?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo htmlentities($result->Email_Id);?>">
        <label>Date of Birth</label>
        <input type="date" name="dob" value="<?php echo htmlentities($result->Dob);?>">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo htmlentities($result->Address);?>">
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>