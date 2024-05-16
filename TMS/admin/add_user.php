<?php
// Include your database connection file here
include('includes/config.php');

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Fetch the maximum User_Id from the user table
    $sqlMaxId = "SELECT MAX(User_Id) AS maxId FROM user";
    $queryMaxId = $dbh->prepare($sqlMaxId);
    $queryMaxId->execute();
    $row = $queryMaxId->fetch(PDO::FETCH_ASSOC);
    $maxId = $row['maxId'];
    // Increment the maxId to generate the new User_Id
    $userId = 'U' . sprintf("%04d", substr($maxId, 1) + 1);

    // Insert data into the user table
    $sql = "INSERT INTO user (User_Id, Name, Password, Dob, Email_Id, Address) 
            VALUES (:userId, :name, :password, :dob, :email, :address)";
    $query = $dbh->prepare($sql);
    
    // Binding parameters
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
    <title>TMS | Register Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            background-image: url('../images/hotel/5.jpg');
        }

        .page-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
            color: #555555;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="date"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #007bff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: #28a745;
        }

        .error {
            text-align: center;
            margin-top: 10px;
            color: #dc3545;
        }

        .success {
            text-align: center;
            margin-top: 10px;
            color: #28a745;
        }

        .error,

        .success {
            display: none;
        }

        .error.show,

        .success.show {
            display: block;
        }

        .error.hide,

        .success.hide {
            display: none;
        }

        .error.show {
            color: #dc3545;
        }

        .success.show {
            color: #28a745;
        }

        .error.hide {
            color: #dc3545;
        }

        .success.hide {
            color: #28a745;
                }


        textarea {
            resize: none;
        }

        @media (max-width: 600px) {
            .page-container {
                width: 100%;
                margin: 0;
                border-radius: 0;
            }
        }

        @media (max-width: 400px) {
            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="email"],
            textarea {
                padding: 5px;
                margin-top: 5px;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                padding: 5px;
                margin-top: 10px;
            }

            label {
                font-size: 14px;
            }
        }

        @media (max-width: 300px) {
            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="email"],
            textarea {
                padding: 5px;
                margin-top: 5px;
                margin-bottom: 10px;
            }

            input[type="submit"] {
                padding: 5px;
                margin-top: 10px;
            }

            label {
                font-size: 12px;
            }
        }

        .h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333333;
        }



    </style>
</head>
<body>
    <div class="page-container">
        <button style="background-color: #039dfc;
            color: #007bff;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
            width: 100%;
            height: 40px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;">
            <a href="index.php"
            style="text-decoration: none;
            color: white;"
            >Home</a>
        </button>
        <h2>Register Account</h2>
        <form method="post">
            <!-- Remove the user_id input field from the form -->
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Date of Birth</label>
            <input type="date" name="dob" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Address</label>
            <textarea name="address" rows="4" required></textarea>

            <input type="submit" name="submit" value="Submit">
        </form>
        
        <!-- Include other elements like sidebar, footer, etc. -->
    </div>
    <!-- Include your JavaScript files here -->
</body>
</html>
