<?php
session_start();
// DB credentials.
define('DB_HOST', 'MSHOME:3304');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'dbms');





if(strlen($_SESSION['alogin']) == 0) {  
    header('location:index.php');
} else {
    // Establish database connection.
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    // Fetch total admins count
    $sqlTotalAdmins = "SELECT COUNT(*) AS totalAdmins FROM Admin";
    $queryTotalAdmins = $dbh->prepare($sqlTotalAdmins);
    $queryTotalAdmins->execute();
    $rowTotalAdmins = $queryTotalAdmins->fetch(PDO::FETCH_ASSOC);
    $totalAdmins = $rowTotalAdmins['totalAdmins'];

    // Fetch total regular users count
    $sqlTotalRegularUsers = "SELECT COUNT(*) AS totalRegularUsers FROM User";
    $queryTotalRegularUsers = $dbh->prepare($sqlTotalRegularUsers);
    $queryTotalRegularUsers->execute();
    $rowTotalRegularUsers = $queryTotalRegularUsers->fetch(PDO::FETCH_ASSOC);
    $totalRegularUsers = $rowTotalRegularUsers['totalRegularUsers'];

    // Fetch total bookings count
    $sqlTotalBookings = "SELECT COUNT(*) AS totalBookings FROM dbms.itinerary";
    $queryTotalBookings = $dbh->prepare($sqlTotalBookings);
    $queryTotalBookings->execute();
    $rowTotalBookings = $queryTotalBookings->fetch(PDO::FETCH_ASSOC);
    $totalBookings = $rowTotalBookings['totalBookings'];

    // Fetch total hotels count
    $sqlTotalHotels = "SELECT COUNT(*) AS totalHotels FROM dbms.Hotel";
    $queryTotalHotels = $dbh->prepare($sqlTotalHotels);
    $queryTotalHotels->execute();
    $rowTotalHotels = $queryTotalHotels->fetch(PDO::FETCH_ASSOC);
    $totalHotels = $rowTotalHotels['totalHotels'];

    // Fetch total tourist places count
    $sqlTotalTouristPlaces = "SELECT COUNT(*) AS totalTouristPlaces FROM dbms.Tourist_Places";
    $queryTotalTouristPlaces = $dbh->prepare($sqlTotalTouristPlaces);
    $queryTotalTouristPlaces->execute();
    $rowTotalTouristPlaces = $queryTotalTouristPlaces->fetch(PDO::FETCH_ASSOC);
    $totalTouristPlaces = $rowTotalTouristPlaces['totalTouristPlaces'];
?>
<!DOCTYPE HTML>
<html>
<head>

    <title>TMS | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <style>
        /* Custom styles */
        .page-container {
            padding: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-title {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .card-body {
            padding: 20px;
        }
        .widget p {
            margin-bottom: 5px;
            font-size: 16px;
            color: #666;
        }
    </style>
</head> 
<body>

    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <!-- Header -->
                <?php include('includes/header.php');?>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
                </ol>
                <!-- Widgets -->
            
                <div class="row">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#executeScript").click(function(){
            $.ajax({
                url: "execute_script.php",
            });
        });
    });
    </script>
</head>
<body>
<iframe title="dbms powerbi report final[1]" width="965" height="541.25" style="margin-left: 17px" src="https://app.powerbi.com/reportEmbed?reportId=36dc69f1-9d8f-46f5-a370-7779c729eb3e&autoAuth=true&ctid=c8ff15f2-8577-4ae1-a5d4-866e8d537759" frameborder="0" allowFullScreen="true"></iframe>

<button id="executeScript" style="margin: 20px; padding: 10px; font-size: 16px; cursor: pointer; background-color: #4CAF50; color: white; border: none;"> Generate Power BI Report </button>
                    <div class="col-md-4">
                        <div class="card widget">
                            <div class="card-body">
                                <h5 class="card-title">User Statistics</h5>
                                <p>Total Admins: <?php echo $totalAdmins; ?></p>
                                <p>Total Regular Users: <?php echo $totalRegularUsers; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Widget 2: Total Bookings -->
                    <div class="col-md-4">
                        <div class="card widget">
                            <div class="card-body">
                                <h5 class="card-title">Total Bookings</h5>
                                <p>Total Bookings: <?php echo $totalBookings; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Widget 3: Total Hotels -->
                    <div class="col-md-4">
                        <div class="card widget">
                            <div class="card-body">
                                <h5 class="card-title">Total Hotels</h5>
                                <p>Total Hotels: <?php echo $totalHotels; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Widget 4: Total Tourist Places -->
                    <div class="col-md-4">
                        <div class="card widget">
                            <div class="card-body">
                                <h5 class="card-title">Total Tourist Places</h5>
                                <p>Total Tourist Places: <?php echo $totalTouristPlaces; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more widgets as per your requirement -->
                </div>
             
                <!-- Add charts using Charts.js library -->
                <canvas id="myChart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Admins', 'Regular Users', 'Bookings', 'Hotels', 'Tourist Places'],
                            datasets: [{
                                label: 'Counts',
                                data: [<?php echo $totalAdmins; ?>, <?php echo $totalRegularUsers; ?>, <?php echo $totalBookings; ?>, <?php echo $totalHotels; ?>, <?php echo $totalTouristPlaces; ?>],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</body>
</html>

<?php } ?>
			<!--/sidebar-menu-->
			<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>

// more charts
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Admins', 'Regular Users', 'Bookings', 'Hotels', 'Tourist Places'],
                datasets: [{
                    label: 'Counts',
                    data: [<?php echo $totalAdmins; ?>, <?php echo $totalRegularUsers; ?>, <?php echo $totalBookings; ?>, <?php echo $totalHotels; ?>, <?php echo $totalTouristPlaces; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>

