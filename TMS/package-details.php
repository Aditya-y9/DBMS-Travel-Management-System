<?php
session_start();
error_reporting(0);
include('includes/config.php');


if(isset($_POST['submit2'])) {
    // Assuming you have processed the form data and obtained the dates and comments
	$pkgid = $_GET['pkgid'];
	$user_id = $_GET['user_id'];
    $fromDate = $_POST['fromdate'];
    $toDate = $_POST['todate'];
    $comment = $_POST['comment'];
	// get the package price
	$sql = "SELECT * from tbltourpackages where PackageId=:pkgid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':pkgid', $pkgid, PDO::PARAM_STR);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
	if($query->rowCount() > 0)
	{
		foreach($results as $result)
		{
			$price = $result->PackagePrice;
		}
	}
	// calculate the total bill
	$fromDate1 = strtotime($fromDate);
	$toDate1 = strtotime($toDate);
	$days = ($toDate1 - $fromDate1) / (60 * 60 * 24);
	$totalBill = $days * $price;

	print_r($pkgid);
	print_r($user_id);
	print_r($fromDate);
	print_r($toDate);
	print_r($comment);
	print_r($totalBill);


    // Redirect to bill.php with pkgid, user_id, dates, comments, and total
	header("Location: bill.php?pkgid=$pkgid&user_id=$user_id&fromdate=$fromDate&todate=$toDate&comment=$comment&total=$totalBill");


    exit();
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Package Details</title>
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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
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
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS -Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
						<script>
							$(document).ready(function(){
								$(".dropdown").hover(            
									function() {
										$('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("400");
										$(this).toggleClass('open');        
									},
									function() {
										$('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("400");
										$(this).toggleClass('open');       
									}
								);
							});

							function validateDate() {
								var fromDate = document.getElementById("datepicker").value;
								var toDate = document.getElementById("datepicker1").value;
								if(fromDate > toDate) {
									alert("To date should be greater than From date");
									document.getElementById("datepicker1").value = "";
								}
							}
							
						</script>

						<style>
							.bnr-right {
								width: 50%;
								float: left;
							}
							.date {
								width: 100%;
								padding: 10px;
								margin: 10px 0;
								border: 1px solid #ccc;
								border-radius: 5px;
							}

							#datepicker, #datepicker1 {
								width: 100%;
								padding: 10px;
								margin: 10px 0;
								border: 1px solid #ccc;
								border-radius: 5px;
							}

							.grand {
								background: #f5f5f5;
								padding: 10px;
								margin: 10px 0;
								border: 1px solid #ccc;
								border-radius: 5px;
							}

							.grand h3 {
								color: #000;
								font-size: 24px;
								font-weight: 600;
							}

							.grand p {
								color: #000;
								font-size: 18px;
								font-weight: 400;
							}

							.inputLabel {
								font-size: 18px;
								font-weight: 400;
								color: #000;
							}

							.special {
								width: 100%;
								padding: 10px;
								margin: 10px 0;
								border: 1px solid #ccc;
								border-radius: 5px;
							}

							.sigi {
								width: 100%;
								padding: 10px;
								margin: 10px 0;
								border: 1px solid #ccc;
								border-radius: 5px;
							}

							.btn-primary {
								background: #337ab7;
								color: #fff;
								padding: 10px 20px;
								border: none;
								border-radius: 5px;
								font-size: 18px;
								font-weight: 600;
							}

							.btn-primary:hover {
								background: #286090;
							}

							.view {
								background: #337ab7;
								color: #fff;
								padding: 10px 20px;
								border: none;
								border-radius: 5px;
								font-size: 18px;
								font-weight: 600;
								text-decoration: none;
							}

							.view:hover {
								background: #286090;
							}
						</style>
				<div class="bnr-right">
					<label class="inputLabel">From</label>
					<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy" name="fromdate" required="">
				</div>
				<div class="bnr-right">
					<label class="inputLabel">To</label>
					<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="" onchange="validateDate()">
				</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Price</p>
					<h3>₹<?php echo htmlentities($result->PackagePrice);?></h3>
					<h5>Per Day</h5>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php 
					?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php }} ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>



	</div>
</div>
<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->		
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>