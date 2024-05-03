\<?php
// Include your database connection file here
include('includes/config.php');

if(isset($_POST['submit'])) {
    // Retrieve form data
    $userId = $_POST['user_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $phoneNo = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert data into the User table
    $sql = "INSERT INTO User (User_Id, Name, Password, Dob,Email_Id, Address) 
            VALUES (:userId, :name, :password, :dob,:email, :address)";
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
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>
	</div>
</div>
<html>
    <title>Add User</title>
</head>
<body>
    <h2>Add User</h2>
    <form method="post" style="margin-left: 30vw; align-content: center; justify-content: center; display: flex; flex-direction: column; width: 40vw;">
        <label>User ID:</label><br>
        <input type="text" name="user_id" required><br>
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
</body>
</html>
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>
