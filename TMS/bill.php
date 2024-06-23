
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    // INSERT URL values to bookings tables
    $servername = "MSHOME:3304";
    $username = "username";
    $password = "password";
    $database = "dbms";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "Connected successfully!";
    }

        $pkgid = $_GET['pkgid'];
        $user_id = $_GET['user_id'];
        $fromdate = $_GET['fromdate'];
        $todate = $_GET['todate'];
        $comment = $_GET['comment'];
        $total = $_GET['total'];

        echo "From Date: " . $fromdate . "<br>";
        echo "To Date: " . $todate . "<br>";

    



        echo "Package ID: " . $pkgid . "<br>";
        echo "User ID: " . $user_id . "<br>";


        // get user details from user_id
        $sql = "SELECT * FROM user WHERE User_Id = '$user_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row["Name"];
        $email = $row["Email_Id"];
        $dob = $row["Dob"];
        $address = $row["Address"];


        // get package details from pkgid
        $sql = "SELECT * FROM tbltourpackages WHERE PackageId = '$pkgid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $packageName = $row["PackageName"];
        $packageType = $row["PackageType"];
        $packagePrice = $row["PackagePrice"];

        echo "Package Name: " . $packageName . "<br>";
        echo "Package Type: " . $packageType . "<br>";
        echo "Package Price: " . $packagePrice . "<br>";

        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "DOB: " . $dob . "<br>";

        // insert everything into bookings table
        $sql = "INSERT INTO bookings (PackageId,User_id,FromDate,ToDate,Comment,Total,UserName,Email,DOB,Address,PackageName,PackageType,PackagePrice) VALUES ('$pkgid','$user_id','$fromdate','$todate','$comment','$total','$name','$email','$dob','$address','$packageName','$packageType','$packagePrice')";
        $conn->query($sql);
        $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generating Bill</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Styles for loading spinner */
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 2s linear infinite;
            margin: auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div id="loader" class="loader" style="display: none;"></div> <!-- Loading spinner -->
    <div id="result"></div> <!-- Popup for success or failure -->

    <script>
        $(document).ready(function() {
            // Show loading spinner
            $('#loader').show();

            // Extract values from the URL
            var pkgid = "<?php echo $_GET['pkgid']; ?>";
            var user_id = "<?php echo $_GET['user_id']; ?>";
            var fromdate = "<?php echo $_GET['fromdate']; ?>";
            var todate = "<?php echo $_GET['todate']; ?>";
            var comment = "<?php echo $_GET['comment']; ?>";
            var total = "<?php echo $_GET['total']; ?>";

            // Construct the command to execute the Python script
            var command = "python \"C:\\xampp\\htdocs\\onlinetourism\\TMS\\bill.py\" \"" + pkgid + "\" \"" + user_id + "\" \"" + fromdate + "\" \"" + todate + "\" \"" + comment + "\" \"" + total + "\"";

            // Execute the command
            $.ajax({
                type: "POST",
                url: "execute_command.php", // PHP file to execute the command
                data: { command: command },
                success: function(response) {
                    $('#loader').hide(); // Hide loading spinner
                    $('#result').html(response); // Show result (success or failure)
                    if (response.includes('successfully')) {
                        // Redirect to home.php after the user clicks "OK"
                        $('#result').on('click', function() {
                            window.location.href = 'home.php';
                        });
                    }
                }
            });
        });
    </script>
</body>
</html>
