<?php
session_start();
error_reporting(0);
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
<meta name="keywords" content="Tourism Management System In PHP" />
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
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">TMS-Tourism Management System</h1>
    </div>
</div>
<!-- Contact Section -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-form">
            </div>
        </div>
    </div>
<div class="contact" style="margin-top: 10px;
    margin-bottom: 50px;
    padding: 50px;
    background: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 50px;
    background: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <div class="col-md-6 contact-info" style="margin-top: 50px;">
                <style>
                    .address h4 {
                        color: #ff4e00;
                        font-size: 1.5em;
                        margin-bottom: 1em;
                    }
                    .address p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                    .phone h4 {
                        color: #ff4e00;
                        font-size: 1.5em;
                        margin-bottom: 1em;
                    }
                    .phone p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                    .email h4 {
                        color: #ff4e00;
                        font-size: 1.5em;
                        margin-bottom: 1em;
                    }
                    .email p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                    .contact-info h3 {
                        color: #ff4e00;
                        font-size: 2em;
                        margin-bottom: 1em;
                    }
                    .contact-info p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                    .contact-info {
                        margin-top: 50px;
                    }
                    .address {
                        margin-bottom: 50px;
                    }
                    .address p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                    .phone
                    {
                        margin-bottom: 50px;
                    }
                    .phone p {
                        font-size: 1em;
                        color: #000;
                        line-height: 1.8em;
                    }
                </style>
                <h3 style="color:lawngreen;">
                    Contact Information</h3>
                <div class="address">
                    <h4>Name</h4>
                    <p>Aditya Yedurkar</p>
                    <p>Aditi Chhajed</p>
                <div class="address">
                    <h4>Address</h4>
                    <p>DBMS Lab @VJTI, Matunga</p>
                </div>
                <div class="phone">
                    <h4>Phone</h4>
                    <p>+91 123456789</p>
                </div>
                <div class="email">
                    <h4>Email</h4>
                    <p>amyedurkar_b22@it.vjti.ac.in</p>
                    <p>abchhajed_b22@it.vjti.ac.in</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- /Contact ---->


<!--- footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signin.php');?>            
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
