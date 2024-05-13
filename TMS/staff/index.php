<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB credentials.
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    // print("Connection successful"); // You can uncomment this line for testing purposes
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if (isset($_POST['login'])) {
    $uname = $_POST['username']; // Get the username from the form
    $password = $_POST['password']; // Get the password from the form
    
    // Query the database to check if the provided credentials match
    $stmt = $dbh->prepare("SELECT * FROM staff WHERE name = :username AND password = :password");
    $stmt->bindParam(':username', $uname);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['alogin'] = $uname;
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Staff Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
<style>


/* table styles */
table {
    border-collapse: collapse;
    width: 500px;
}
th, td {
    text-align: left;
    padding: 8px;
}
th {
    background-color: #4CAF50;
    color: white;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* table responsive styles */
</style>
<div class="login">
    <h1><a href="index.php">Tourism Management System</a></h1>
    <div class="login-bottom">
        <h2>Login</h2>
        <form method="post">
            <div class="col-md-6">
                <div class="login-mail">
                    <input type="text" placeholder="Username" required="" name="username">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Password" required="" name="password">
                    <i class="fa fa-lock
                    "></i>
                </div>
            </div>
            <div class="col-md-6 login-do">
                <label class="hvr-shutter-in-horizontal login-sub">
                    <input type="submit" value="login" name="login">
                </label>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
<!--footer section start-->
<div class="footer">
    <div class="error-btn">
        <a class="read fourth" href="index.php">Return to Home</a>
    </div>
</div>
<!--footer section end-->
<!--/404-->
<!--footer section start-->
<div class="footer">
    <p>&copy 2021 TMS. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
</div>
<!--footer section end-->
<!--/404-->
<!-- js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>