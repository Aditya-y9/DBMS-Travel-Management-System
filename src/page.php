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

$privacyPolicyContent = "At TMS, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines the types of personal information we collect, how we use and protect this information, and your rights regarding your personal data.
Our Data Collection Practices
We collect personal information from you when you use our website, create an account, make a booking, or contact us for assistance. This information may include your name, email address, phone number, and other details relevant to your travel needs.
How We Use Your Information
We use your personal information to provide you with the services you request, process your bookings, communicate with you about your travel plans, and improve our website and services. We may also use your information to send you promotional offers, updates, and other marketing communications.
Data Security and Protection
We take the security of your personal information seriously and have implemented measures to protect your data from unauthorized access, disclosure, alteration, and destruction. We use industry-standard encryption technology to safeguard your information and maintain the confidentiality of your data.
Your Rights and Choices
You have the right to access, update, and correct your personal information at any time. You may also choose to opt out of receiving marketing communications from us. If you have any questions or concerns about our Privacy Policy or data practices, please contact us for assistance.
Changes to Our Privacy Policy
We may update our Privacy Policy from time to time to reflect changes in our data collection practices or legal requirements. We encourage you to review this policy periodically for any updates or revisions.
Contact Us
If you have any questions or concerns about our Privacy Policy, please contact us at
amyedurkar_b22@it.vjti.ac.in
We are committed to protecting your privacy and ensuring the security of your personal information. Thank you for choosing TMS for your travel needs.";


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
                    <h3>About Us</h3>
                    <p>Welcome to TMS, your ultimate solution for all your travel needs. We are passionate about making travel easy, enjoyable, and memorable for everyone. Whether you're planning a relaxing beach getaway, an adventurous trek through the mountains, or an immersive cultural experience, we've got you covered.</p>
                    <p>At TMS, we believe that every journey should be personalized to suit your preferences and interests. That's why we offer a wide range of services and resources to help you plan and book your dream vacation with ease.</p>
                    <p>Our platform provides access to a vast selection of destinations, accommodations, transportation options, and activities, allowing you to create a tailored itinerary that reflects your unique travel style. Whether you're a solo traveler seeking new adventures, a family looking for fun and relaxation, or a group of friends planning an epic road trip, TMS has everything you need to turn your travel dreams into reality.</p>
                    <p>With TMS, you can:</p>
                    <ul>
                        <li>Explore a diverse range of destinations, from popular tourist spots to hidden gems off the beaten path.</li>
                        <li>Find the perfect accommodations to suit your budget and preferences, whether you prefer luxury resorts, cozy guesthouses, or unique boutique hotels.</li>
                        <li>Book transportation options that fit your itinerary, including flights, trains, buses, rental cars, and more.</li>
                        <li>Discover exciting activities and experiences at your destination, from sightseeing tours and outdoor adventures to cultural performances and culinary delights.</li>
                        <li>Connect with fellow travelers, share tips and recommendations, and join group tours and excursions for a fun and social travel experience.</li>
                        <li>Receive personalized assistance and support from our team of travel experts, who are available 24/7 to help you before, during, and after your trip.</li>
                    </ul>
					<p>Whether you're planning a weekend getaway, a family vacation, a romantic honeymoon, or a solo adventure, TMS is here to help you make the most of your travel experience. Let us be your guide to the world of travel, and start planning your next journey today!</p>
                    <img src="./images/3.png" alt="About Us Image" class="about-image" >
                </div>

                <!-- Widgets -->
                <div class="widget">
                    <h3>Why Choose Us?</h3>
                    <p>1. Extensive Destination Coverage: We offer travel options to destinations around the world, catering to every type of traveler.</p>
                    <p>2. Personalized Service: Our platform allows you to customize your travel experience to match your preferences and interests.</p>
                    <p>3. Competitive Prices: We strive to offer affordable deals on flights, accommodations, and activities to help you save on your travels.</p>
                    <p>4. Reliable Support: Our dedicated team is committed to providing you with exceptional customer service and assistance at every step of your journey.</p>
                </div>

                <div class="widget">
                    <h3>Our Mission</h3>
                    <p>At TMS, our mission is to inspire and empower travelers to explore the world, connect with new cultures, and create unforgettable memories. We are dedicated to making travel accessible, enjoyable, and enriching for everyone, and we're committed to helping you discover the joy of travel.</p>
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