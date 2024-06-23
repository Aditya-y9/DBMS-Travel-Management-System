<?php
// Include config file
define('DB_SERVER', 'MSHOME:3304');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'dbms');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Define variables and initialize with empty values
$itinerary_id = $itinerary_title = $itinerary_budget = $country = $state = $city = $rating = $no_of_travellers = $food_preference  = $date_of_travel = $itinerary_image = "";
$itinerary_title_err = $itinerary_budget_err = $country_err = $state_err = $city_err = $rating_err = $no_of_travellers_err = $food_preference_err  = $date_of_travel_err = $itinerary_image_err = "";

// Function to increment the itinerary_id
function incrementItineraryID($lastID) {
    $prefix = substr($lastID, 0, 2); // IT
    $number = intval(substr($lastID, 2)) + 1; // Increment the numeric part
    return $prefix . str_pad($number, 4, '0', STR_PAD_LEFT); // Combine and pad with zeros
}

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate itinerary title
    $input_itinerary_title = trim($_POST["itinerary_title"]);
    if(empty($input_itinerary_title)){
        $itinerary_title_err = "Please enter a title.";
    } else{
        $itinerary_title = $input_itinerary_title;
    }

    // Validate itinerary budget
    $input_itinerary_budget = trim($_POST["itinerary_budget"]);
    if(empty($input_itinerary_budget)){
        $itinerary_budget_err = "Please enter a budget.";
    } else{
        $itinerary_budget = $input_itinerary_budget;
    }

    // Validate country
    $input_country = trim($_POST["country"]);
    if(empty($input_country)){
        $country_err = "Please enter the country.";
    } else{
        $country = $input_country;
    }

    // Validate state
    $input_state = trim($_POST["state"]);
    if(empty($input_state)){
        $state_err = "Please enter the state.";
    } else{
        $state = $input_state;
    }

    // Validate city
    $input_city = trim($_POST["city"]);
    if(empty($input_city)){
        $city_err = "Please enter the city.";
    } else{
        $city = $input_city;
    }

    // Validate rating
    $input_rating = trim($_POST["rating"]);
    if(empty($input_rating)){
        $rating_err = "Please enter the rating.";     
    } else{
        $rating = $input_rating;
    }

    // Validate number of travellers
    $input_no_of_travellers = trim($_POST["no_of_travellers"]);
    if(empty($input_no_of_travellers)){
        $no_of_travellers_err = "Please enter the number of travellers.";     
    } else{
        $no_of_travellers = $input_no_of_travellers;
    }

    // Validate food preference
    $input_food_preference = trim($_POST["food_preference"]);
    if(empty($input_food_preference)){
        $food_preference_err = "Please enter the food preference.";     
    } else{
        $food_preference = $input_food_preference;
    }

    // Validate date of travel
    $input_date_of_travel = trim($_POST["date_of_travel"]);
    if(empty($input_date_of_travel)){
        $date_of_travel_err = "Please enter the date of travel.";     
    } else{
        $date_of_travel = $input_date_of_travel;
    }

    // Validate itinerary image
    $input_itinerary_image = trim($_POST["itinerary_image"]);
    if(empty($input_itinerary_image)){
        $itinerary_image_err = "Please enter the itinerary image.";     
    } else{
        $itinerary_image = $input_itinerary_image;
    }

    // Check input errors before inserting in database
    if(empty($itinerary_title_err) && empty($itinerary_budget_err) && empty($country_err) && empty($state_err) && empty($city_err) && empty($rating_err) && empty($no_of_travellers_err) && empty($food_preference_err) && empty($date_of_travel_err) && empty($itinerary_image_err)){
        // Retrieve the latest itinerary_id from the database
        $sql = "SELECT itinerary_id FROM itinerary ORDER BY itinerary_id DESC LIMIT 1";
        $result = mysqli_query($link, $sql);
        if($row = mysqli_fetch_assoc($result)){
            $lastID = $row['itinerary_id'];
            $itinerary_id = incrementItineraryID($lastID);
        } else {
            // If no records found, start with IT0001
            $itinerary_id = 'IT0001';
        }

        // Prepare an insert statement
        $sql = "INSERT INTO itinerary (itinerary_id, Title, Budget, Country, State, City, Rating, No_Of_Travellers, FoodPreference, Date_Of_Travel, ItineraryImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssissssisss", $itinerary_id, $itinerary_title, $itinerary_budget, $country, $state, $city, $rating, $no_of_travellers, $food_preference, $date_of_travel, $itinerary_image);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: dashboard.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Itinerary</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Itinerary</h2>
                    </div>
                    <p>Please fill this form and submit to add itinerary record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($itinerary_title_err)) ? 'has-error' : ''; ?>">
                            <label>Itinerary Title</label>
                            <input type="text" name="itinerary_title" class="form-control" value="<?php echo $itinerary_title; ?>">
                            <span class="help-block"><?php echo $itinerary_title_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($itinerary_budget_err)) ? 'has-error' : ''; ?>">
                            <label>Itinerary Budget</label>
                            <input type="text" name="itinerary_budget" class="form-control" value="<?php echo $itinerary_budget; ?>">
                            <span class="help-block"><?php echo $itinerary_budget_err; ?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($country_err)) ? 'has-error' : ''; ?>">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" value="<?php echo $country; ?>">
                            <span class="help-block"><?php echo $country_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($state_err)) ? 'has-error' : ''; ?>">
                            <label>State</label>
                            <input type="text" name="state" class="form-control" value="<?php echo $state; ?>">
                            <span class="help-block"><?php echo $state_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
                            <span class="help-block"><?php echo $city_err; ?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($rating_err)) ? 'has-error' : ''; ?>">
                            <label>Rating</label>
                            <input type="text" name="rating" class="form-control" value="<?php echo $rating; ?>">
                            <span class="help-block"><?php echo $rating_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($no_of_travellers_err)) ? 'has-error' : ''; ?>">
                            <label>Number of Travellers</label>
                            <input type="text" name="no_of_travellers" class="form-control" value="<?php echo $no_of_travellers; ?>">
                            <span class="help-block"><?php echo $no_of_travellers_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($food_preference_err)) ? 'has-error' : ''; ?>">
                            <label>Food Preference</label>
                            <input type="text" name="food_preference" class="form-control" value="<?php echo $food_preference; ?>">
                            <span class="help-block"><?php echo $food_preference_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Date of Travel</label>
                            <input type="date" name="date_of_travel" class="form-control" value="<?php echo $date_of_travel; ?>">
                            <span class="help-block"><?php echo $date_of_travel_err; ?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($itinerary_image_err)) ? 'has-error' : ''; ?>">
                            <label>Itinerary Image</label>
                            <input type="file" name="itinerary_image" class="form-control" value="<?php echo $itinerary_image; ?>">
                            <span class="help-block"><?php echo $itinerary_image_err; ?></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>