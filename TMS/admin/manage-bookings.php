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
$sql = "SELECT * FROM dbms.Itinerary";
$query = $dbh->prepare($sql);
$query->execute();
$itineraries = $query->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission for editing itinerary
if(isset($_POST['submit'])) {
	$itinerary_id = $_POST['itinerary_id'];
	$title = $_POST['title'];
	$budget = $_POST['budget'];
	// Add more fields as needed

	// Update the itinerary details in the database
	$sql = "UPDATE Itinerary SET Title = :title, Budget = CAST(:budget AS int) WHERE Itinerary_id = :itinerary_id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':title', $title, PDO::PARAM_STR);
	$query->bindParam(':budget', $budget, PDO::PARAM_STR); // Bind as string
	$query->bindParam(':itinerary_id', $itinerary_id, PDO::PARAM_INT);
	$query->execute();

	// Redirect to the same page after editing
	header('Location: '.$_SERVER['PHP_SELF']);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List and Edit Itinerary</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin-left: 240px;
            padding: 0;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
            font-size: 21px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .edit-link {
            color: #007bff;
            text-decoration: none;
        }

        .edit-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<div class="header-main">
					<div class="logo-w3-agile" style="margin-top : 5px; margin-left:80px;">
								<h1><a href="dashboard.php" style="text-decoration: none;">
                                Tourism Management System</a></h1>
							</div>
<body>

    <div class="container">
    
        <h2>
            List and Edit Itinerary</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Budget</th>
                    <!-- Add more table headers for other fields -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($itineraries as $itinerary) {?>
                    <tr>
                        <td><?php echo $itinerary['Title']; ?></td>
                        <td><?php echo $itinerary['Budget']; ?></td>
                        <!-- Add more table cells for other fields -->
                        <td>
                            <a href="edit_itinerary.php?id=<?php echo $itinerary['Itinerary_id']; ?>" class="edit-link">Edit</a>
                            <a href="delete_itinerary.php?id=<?php echo $itinerary['Itinerary_id']; ?>" class="edit-link">Delete</a>
                            <!-- Add more actions like delete if needed -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include('includes/sidebarmenu.php'); ?>
</body>
</html>