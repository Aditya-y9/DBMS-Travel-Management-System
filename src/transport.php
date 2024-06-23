<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Transport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!--- banner ---->
<div class="banner-3">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS- Transport List</h1>
    </div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
    <div class="container">
        
        <div class="room-bottom">
            <h3>Transport List</h3>

<?php 
$sql = "SELECT * FROM Transport_Type";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if($query->rowCount() > 0) {
    foreach($results as $result) { ?>
        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <!-- You need to provide a way to display the image here -->
                <img src="images/transport/<?php echo htmlentities($result->Transport_Image) . '.jpg';?>" style="width: 250px; height: 200px;">
                            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4><?php echo htmlentities($result->NameOfProvider);?></h4>
                <p><b>Fare per person:</b> <?php echo htmlentities($result->Fare);?></p>
                <p><b>Vehicle Type:</b> <?php echo htmlentities($result->TypeOfVehicle);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <a href="transport-details.php?id=<?php echo htmlentities($result->Transport_id);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
        </div>
<?php 
    }
}
?>

        </div>
    </div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
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
