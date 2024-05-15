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
<title>TMS | Admin Sign in</title>
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
<style>
    .error-message {
        color: #dc3545;
        font-size: 24px;
        text-align: center;
        margin-top: 20px;
    }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
</head> 
<body>

    <div class="main-wthree">
    <div class="container">
    <div class="sin-w3-agile">
        <h2>Sign In</h2>
        <form method="post">
            <div class="username">
                <span class="username">Username:</span>
                <input type="text" name="username" class="name" placeholder="" required="">
                <div class="clearfix"></div>
            </div>
            <div class="password-agileits">
                <span class="username">Password:</span>
                <input type="password" name="password" class="password" placeholder="" required="">
                <div class="clearfix"></div>
            </div>
            
            <div class="login-w3">
                    <input type="submit" class="login" name="login" value="Sign In">
            </div>
            <div class="clearfix"></div>
        </form>
                <div class="back">
                    <button class="btn btn-primary" type="button" style="background-color: white;
                    border: none;
                    margin-top: -50px;
                    color: purple;
                    text-align: center;
                    font-size: 16px;
                    opacity: 0.6;
                    transition: 0.3s;
                    cursor: pointer;
                    border-radius: 15px;
                    text-decoration: none;
                    display:flex;
                    text-transform: uppercase;">
                        <a href="../index.php" style="margin-top: 0px;">Back to Home</a>
                    </button>
                </div>
                
    </div>
    </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p class="error-message">Invalid username or password.</p>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Display the modal if PHP variable errorMessage is set
        <?php if(isset($errorMessage)): ?>
            modal.style.display = "block";
        <?php endif; ?>
    </script>

</body>
</html>
