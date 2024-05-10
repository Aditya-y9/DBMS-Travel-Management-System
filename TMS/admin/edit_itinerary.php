<?php
session_start();
// DB credentials.
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    print("Connection successful");
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

// Check if admin is logged in
if(empty($_SESSION['alogin'])) {
    header('location:index.php');
    exit();
}

// Fetch itinerary details from the database
// <a href="edit_itinerary.php?id=<?php echo $itinerary['Itinerary_id'];
// get itinerary id from the URL
$itinerary_id = $_GET['id'];
$sql = "SELECT * FROM dbms_project.Itinerary WHERE Itinerary_id = :itinerary_id";
$query = $dbh->prepare($sql);
$query->bindParam(':itinerary_id', $itinerary_id, PDO::PARAM_INT);
$query->execute();
$itinerary = $query->fetch(PDO::FETCH_ASSOC);

// Handle form submission for editing itinerary
if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $budget = (int)$_POST['budget']; // Cast budget to integer

    // Add more fields as needed

    // Update the itinerary details in the database
    $sql = "UPDATE Itinerary SET Title = :title, Budget = :budget WHERE Itinerary_id = :itinerary_id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':budget', $budget, PDO::PARAM_INT); // Bind budget as integer
    $query->bindParam(':itinerary_id', $itinerary_id, PDO::PARAM_INT);
    $query->execute();

    // Redirect to the same page after editing
    header('location:edit-itinerary.php?itinerary_id=' . $itinerary_id);
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Itinerary</title>
</head>
<body>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $itinerary['Title']; ?>">
        <label for="budget">Budget:</label>
        <input type="number" id="budget" name="budget" value="<?php echo $itinerary['Budget']; ?>">
        <!-- Add more fields as needed -->
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>