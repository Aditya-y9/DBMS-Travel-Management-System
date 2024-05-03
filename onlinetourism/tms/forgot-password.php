<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit50'])) {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $newpassword = md5($_POST['newpassword']);

    // Check if the user exists based on email and mobile
    $sql = "SELECT Email_Id FROM User WHERE Email_Id=:email AND PhoneNo=:mobile";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0) {
        // Update the user's password
        $sqlUpdate = "UPDATE User SET Password=:newpassword WHERE Email_Id=:email AND PhoneNo=:mobile";
        $queryUpdate = $dbh->prepare($sqlUpdate);
        $queryUpdate->bindParam(':email', $email, PDO::PARAM_STR);
        $queryUpdate->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $queryUpdate->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        $queryUpdate->execute();
        $msg = "Your password has been successfully changed.";
    } else {
        $error = "Email id or Mobile no is invalid";
    }
}
?>
