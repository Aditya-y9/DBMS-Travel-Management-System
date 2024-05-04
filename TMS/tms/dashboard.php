<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('includes/config.php');

// Fetch data for the bar chart (Itinerary - Title, Budget)
$barChartLabels = array();
$barChartData1 = array();

$sqlBarChart = "SELECT Title, Budget FROM Itinerary";
$queryBarChart = $dbh->prepare($sqlBarChart);
$queryBarChart->execute();
$barChartResults = $queryBarChart->fetchAll(PDO::FETCH_ASSOC);

foreach ($barChartResults as $row) {
    $barChartLabels[] = $row['Title'];
    $barChartData1[] = $row['Budget'];
}

// Fetch data for the pie chart (UserPreference - Country)
$pieChartLabels = array();
$pieChartData = array();

$sqlPieChart = "SELECT Country, COUNT(*) AS Count FROM User_Preference GROUP BY Country";
$queryPieChart = $dbh->prepare($sqlPieChart);
$queryPieChart->execute();
$pieChartResults = $queryPieChart->fetchAll(PDO::FETCH_ASSOC);

foreach ($pieChartResults as $row) {
    $pieChartLabels[] = $row['Country'];
    $pieChartData[] = $row['Count'];
}

// Fetch data for User Count by Country
$userCountByCountryLabels = array();
$userCountByCountryData = array();

$sqlUserCountByCountry = "SELECT Country, COUNT(*) AS Count FROM User_Preference GROUP BY Country";
$queryUserCountByCountry = $dbh->prepare($sqlUserCountByCountry);
$queryUserCountByCountry->execute();
$userCountByCountryResults = $queryUserCountByCountry->fetchAll(PDO::FETCH_ASSOC);

foreach ($userCountByCountryResults as $row) {
    $userCountByCountryLabels[] = $row['Country'];
    $userCountByCountryData[] = $row['Count'];
}

// Fetch data for Total Wallet Balance
$totalWalletBalance = 0;

$sqlTotalWalletBalance = "SELECT SUM(Wallet) AS Total FROM User_Account";
$queryTotalWalletBalance = $dbh->prepare($sqlTotalWalletBalance);
$queryTotalWalletBalance->execute();
$totalWalletBalanceResult = $queryTotalWalletBalance->fetch(PDO::FETCH_ASSOC);

if ($totalWalletBalanceResult) {
    $totalWalletBalance = $totalWalletBalanceResult['Total'];
}
?>
<!DOCTYPE HTML>
<html>
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
    <!-- Your HTML code for the header and banner -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Additional Analytics -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>User Count by Country</h3>
                <canvas id="userCountByCountryChart"></canvas>
            </div>
            <div class="col-md-6">
                <h3>Total Wallet Balance</h3>
                <p><?php echo $totalWalletBalance; ?></p>
            </div>
        </div>
    </div>


    <!-- JavaScript -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        new WOW().init();

        // Data for the bar chart (Itinerary)
        var barChartData = {
            labels: <?php echo json_encode($barChartLabels); ?>,
            datasets: [{
                label: 'Budget',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255,99,132,1)',
                borderWidth: 1,
                data: <?php echo json_encode($barChartData1); ?>
            }]
        };

        // Data for the pie chart (UserPreference)
        var pieChartData = {
            labels: <?php echo json_encode($pieChartLabels); ?>,
            datasets: [{
                data: <?php echo json_encode($pieChartData); ?>,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        };

        // Data for User Count by Country
        var userCountByCountryData = {
            labels: <?php echo json_encode($userCountByCountryLabels); ?>,
            datasets: [{
                label: 'User Count',
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1,
                data: <?php echo json_encode($userCountByCountryData); ?>
            }]
        };

        // Bar Chart
        window.onload = function() {
            var ctx1 = document.getElementById('barChart').getContext('2d');
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true
                }
            });

            var ctx2 = document.getElementById('pieChart').getContext('2d');
            window.myPie = new Chart(ctx2, {
                type: 'pie',
                data: pieChartData,
                options: {
                    responsive: true
                }
            });

            // User Count by Country Chart
            var ctx3 = document.getElementById('userCountByCountryChart').getContext('2d');
            window.myBar = new Chart(ctx3, {
                type: 'bar',
                data: userCountByCountryData,
                options: {
                    responsive: true
                }
            });
        };
    </script>
</body>
</html>
