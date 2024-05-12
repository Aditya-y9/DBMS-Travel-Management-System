<?php
session_start();
// DB credentials.
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection for itineraries.
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

// Fetch itinerary details from the database based on title
$id = $_GET['id'];
$sql = "SELECT * FROM Itinerary WHERE Itinerary_id = :id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$itinerary = $query->fetch(PDO::FETCH_ASSOC);

// Set default values for form fields if itinerary not found
if(!$itinerary) {
    $itinerary = [
        'Title' => '',
        'Budget' => '',
        'Country' => '',
        'State' => '',
        'City' => '',
        'Rating' => '',
        'No_Of_Travellers' => '',
        'FoodPreference' => '',
        'Transport_id' => '',
        'Hotel_id' => '',
        'Date_Of_Travel' => ''
    ];
}

// Handle form submission for editing itinerary
if(isset($_POST['submit'])) {
    // Process form submission...
    $title = $_POST['title'];
    $budget = $_POST['budget'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $rating = $_POST['rating'];
    $no_of_travellers = $_POST['no_of_travellers'];
    $food_preference = $_POST['food_preference'];
    $transport_id = $_POST['transport_id'];
    $hotel_id = $_POST['hotel_id'];
    $date_of_travel = $_POST['date_of_travel'];

    // Update the itinerary details in the database
    $sql = "UPDATE Itinerary SET Title = :title, Budget = :budget, Country = :country, State = :state, City = :city, Rating = :rating, No_Of_Travellers = :no_of_travellers, FoodPreference = :food_preference, Transport_id = :transport_id, Hotel_id = :hotel_id , Date_Of_Travel = :date_of_travel WHERE Itinerary_id = :id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':budget', $budget, PDO::PARAM_INT);
    $query->bindParam(':country', $country, PDO::PARAM_STR);
    $query->bindParam(':state', $state, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':rating', $rating, PDO::PARAM_STR);
    $query->bindParam(':no_of_travellers', $no_of_travellers, PDO::PARAM_INT);
    $query->bindParam(':food_preference', $food_preference, PDO::PARAM_STR);
    $query->bindParam(':transport_id', $transport_id, PDO::PARAM_INT);
    $query->bindParam(':hotel_id', $hotel_id, PDO::PARAM_INT);
    $query->bindParam(':date_of_travel', $date_of_travel, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $query = $dbh->prepare($sql);

    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':budget', $budget, PDO::PARAM_STR); // Bind as string
    $query->bindParam(':country', $country, PDO::PARAM_STR);
    $query->bindParam(':state', $state, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':rating', $rating, PDO::PARAM_STR); // Bind as string
    $query->bindParam(':no_of_travellers', $no_of_travellers, PDO::PARAM_STR); // Bind as string
    $query->bindParam(':food_preference', $food_preference, PDO::PARAM_STR);
    $query->bindParam(':transport_id', $transport_id, PDO::PARAM_STR); // Bind as string
    $query->bindParam(':hotel_id', $hotel_id, PDO::PARAM_STR); // Bind as string
    $query->bindParam(':date_of_travel', $date_of_travel, PDO::PARAM_STR);
    
    $query->execute();

    // Redirect to the same page after editing
    header('location:manage-bookings.php');
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Itinerary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Itinerary</h2>
        <form method="post" action="">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo isset($itinerary['Title']) ? $itinerary['Title'] : ''; ?>">

            <label for="budget">Budget:</label>
            <input type="number" id="budget" name="budget" value="<?php echo isset($itinerary['Budget']) ? $itinerary['Budget'] : ''; ?>">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="<?php echo isset($itinerary['Country']) ? $itinerary['Country'] : ''; ?>">

            <label for="state">State:</label>
            <input type="text" id="state" name="state" value="<?php echo isset($itinerary['State']) ? $itinerary['State'] : ''; ?>">

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo isset($itinerary['City']) ? $itinerary['City'] : ''; ?>">

            <label for="rating">Rating:</label>
            <input type="text" id="rating" name="rating" value="<?php echo isset($itinerary['Rating']) ? $itinerary['Rating'] : ''; ?>">

            <label for="no_of_travellers">Number of Travellers:</label>
            <input type="number" id="no_of_travellers" name="no_of_travellers" value="<?php echo isset($itinerary['No_Of_Travellers']) ? $itinerary['No_Of_Travellers'] : ''; ?>">

            <label for="food_preference">Food Preference:</label>
            <input type="text" id="food_preference" name="food_preference" value="<?php echo isset($itinerary['FoodPreference']) ? $itinerary['FoodPreference'] : ''; ?>">

            <label for="transport_id">Transport ID:</label>
            <input type="text" id="transport_id" name="transport_id" value="<?php echo isset($itinerary['Transport_id']) ? $itinerary['Transport_id'] : ''; ?>">

            <label for="hotel_id">Hotel ID:</label>
            <input type="text" id="hotel_id" name="hotel_id" value="<?php echo isset($itinerary['Hotel_id']) ? $itinerary['Hotel_id'] : ''; ?>">

            <label for="date_of_travel">Date of Travel:</label>
            <input type="date" id="date_of_travel" name="date_of_travel" value="<?php echo isset($itinerary['Date_Of_Travel']) ? $itinerary['Date_Of_Travel'] : ''; ?>">

            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>
