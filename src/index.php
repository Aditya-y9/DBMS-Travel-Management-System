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
    $stmt = $dbh->prepare("SELECT * FROM user WHERE name = :username AND password = :password");
    $stmt->bindParam(':username', $uname);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $errorMessage = "Invalid username or password.";
    }

    
    

    if ($user) {
        $_SESSION['alogin'] = $uname;
        $user_id = $user['User_Id']; // Get the user ID from the fetched data
        echo "<script type='text/javascript'> document.location = 'home.php?id=$user_id'; </script>";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>DBMS | Welcome!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<style>
    /* Additional styles */
    body {
        background-image: url('./images/16.jpg'); /* Add a background image */
        font-family: 'Roboto', sans-serif;
        background-color: #f8f9fa;
        width: 100vw;
        height:  100vh;
    }

    .main-wthree {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 100px;
    }

    .sin-w3-agile h2 {
        color: #333;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-control {
        border: 2px solid #ddd;
        border-radius: 25px;
        padding: 15px 25px;
        font-size: 16px;
        color: #333;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: none;
    }

    .login-w3 input[type="submit"] {
        background: #007bff;
        border: none;
        color: #fff;
        font-size: 18px;
        padding: 15px 0;
        cursor: pointer;
        width: 100%;
        border-radius: 25px;
        outline: none;
        margin-top: 30px;
    }

    .login-w3 input[type="submit"]:hover {
        background: #0056b3;
    }

    .back {
        text-align: center;
        margin-top: 30px;
    }

    .back a {
        color: #333;
        text-decoration: none;
        font-size: 16px;
    }

    .back a:hover {
        color: #007bff;
    }

    .ad h1 {
        color: #333;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .ad h1 span {
        color: #007bff;
    }


    /* Responsive */


</style>
</head> 
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="main-wthree">
                    <div class="sin-w3-agile">
                        <div class="ad">
                            <h1><span>DBMS</span>
                        </div>
                        <h2>Sign In</h2>
                        <form method="post">
                            <div class="username">
                                <input type="text" name="username" class="form-control" placeholder="Username" required="">
                            </div>
                            <div class="password-agileits">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="login-w3">
                                <input type="submit" class="login" name="login" value="Sign In">
                            </div>
                        </form>
                        <div class="back">
                            <a href="./admin/index.php">Admin Login</a>
                        </div>
                        <div class = "back">
                            <a href="add_user.php">Register New User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
