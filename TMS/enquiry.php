<?php
// Include your database connection file here
include('includes/config.php');

if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];    
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];    
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
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
    <title>Enquiry Form</title>
</head>
<body>
    <style>
        .contact {
    padding: 4em 0;
}
.contact-form {
    background: #f5f5f5;
    padding: 2em;
}
.contact-form input[type="text"], .contact-form input[type="email"], .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    color: #999;
    font-size: 14px;
}

.contact-form input[type="submit"] {
    background: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
}

.contact-form input[type="submit"]:hover {
    background: #f00;
}

.contact-form textarea {
    height: 100px;
}

    </style>
<div class="contact" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-form">
                <h3>Enquiry</h3>
                <form method="post">
                    <input type="text" name="fname" placeholder="Your Name" required="">
                    <input type="email" name="email" placeholder="Your Email" required="">
                    <input type="text" name="mobileno" placeholder="Your Mobile Number" required="">
                    <input type="text" name="subject" placeholder="Subject" required="">
                    <textarea name="description" placeholder="Message..." required=""></textarea>
                    <input type="submit" value="Submit" name="submit1">
                </form>
            </div>

<div class="copy-right">
<div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/1642/1642263.png" style="width: 500px; height: 500px; margin: 0 auto; display: block;">

    <div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
        <ul>
            <li><a class="github" href="https://github.com/Aditya-y9"><span>GitHub</span></a></li>
        </ul>
    </div>
    <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2024 DBMS 221080076 & 221081009</p>
</div>
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
