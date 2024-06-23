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
<!-- About Section -->
<div class="privacy">
            <div class="container">
                <div class="about-section">
                    <h3>Privacy Policy</h3>
                    <p>Your privacy is important to us. This Privacy Policy explains how we collect, use, and protect your personal information when you use our services. Please read this policy carefully to understand our practices regarding your personal data and how we will treat it.</p>
                    <!-- Add your privacy policy content here -->
                    <p>
                    We are committed to protecting your privacy and ensuring the security of your personal information. Thank you for choosing TMS for your travel needs.
                    </p>
                    <h3>
                    What information do we collect?
                    </h3>
                    <p>
                    We collect information from you when you register on our site, place an order, subscribe to our newsletter, respond to a survey, fill out a form, or use Live Chat. When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number, or credit card information. You may, however, visit our site anonymously.
                    </p>
                    <h3>
                    What do we use your information for?
                    </h3>
                    <p>
                    Any of the information we collect from you may be used in one of the following ways:
                    </p>
                    <ul>
                    <li>To personalize your experience (your information helps us to better respond to your individual needs)</li>
                    <li>To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you)</li>
                    <li>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)</li>
                    <li>To process transactions</li>
                    <li>To administer a contest, promotion, survey, or other site feature</li>
                    <li>To send periodic emails</li>
                    </ul>
                    <h3>
                    How do we protect your information?
                    </h3>
                    <p>
                    We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information. We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential. After a transaction, your private information (credit cards, social security numbers, financials, etc.) will not be stored on our servers.
                    </p>
                    <h3>
                    Do we use cookies?
                    </h3>
                    <p>
                    Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information. We use cookies to help us remember and process the items in your shopping cart, understand and save your preferences for future visits, keep track of advertisements, and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.
                    </p>
                    <h3>
                    Do we disclose any information to outside parties?
                    </h3>
                    <p>
                    We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
                    </p>
                    <h3>
                    Online Privacy Policy Only
                    </h3>
                    <p>
                    This online privacy policy applies only to information collected through our website and not to information collected offline.
                    </p>
                    <h3>
                    Your Consent
                    </h3>
                    <p>
                    By using our site, you consent to our websites privacy policy.
                    </p>
                    <h3>
                    Changes to our Privacy Policy
                    </h3>
                    <p>
                    If we decide to change our privacy policy, we will post those changes on this page.
                    </p>
                    <h3>
                    Contacting Us
                    </h3>
                    <p>
                    If there are any questions regarding this privacy policy, you may contact us using the information below:
                    </p>
                    <p>
                    <b>www.tms.com</b><br>
                    <b>VJTI</b><br>
                    <b>Mumbai, Maharashtra 400012</b><br>
                    <b>India</b><br>
                    <b>
                 </div>
                 </div>
</div>
<!--- /privacy ---->


<!--- footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signin.php');?>            
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
