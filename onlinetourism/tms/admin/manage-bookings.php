<?php
session_start();
include('includes/config.php');

// Check if admin is logged in
if(empty($_SESSION['alogin'])) {
	header('location:index.php');
	exit();
}

// Fetch itinerary details from the database
$sql = "SELECT * FROM dbms_project.Itinerary";
$query = $dbh->prepare($sql);
$query->execute();
$itineraries = $query->fetchAll(PDO::FETCH_ASSOC);

// Handle form submission for editing itinerary
if(isset($_POST['submit'])) {
	$itinerary_id = $_POST['itinerary_id'];
	$title = $_POST['title'];
	$budget = $_POST['budget'];
	// Add more fields as needed

	// Update the itinerary details in the database
	$sql = "UPDATE Itinerary SET Title = :title, Budget = :budget WHERE Itinerary_id = :itinerary_id";
	$query = $dbh->prepare($sql);
	$query->bindParam(':title', $title, PDO::PARAM_STR);
	$query->bindParam(':budget', $budget, PDO::PARAM_INT);
	$query->bindParam(':itinerary_id', $itinerary_id, PDO::PARAM_INT);
	$query->execute();

	// Redirect to the same page after editing
	header('Location: '.$_SERVER['PHP_SELF']);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List and Edit Itinerary</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .edit-link {
            color: #007bff;
            text-decoration: none;
        }

        .edit-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>List and Edit Itinerary</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Budget</th>
                    <!-- Add more table headers for other fields -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($itineraries as $itinerary) {?>
                    <tr>
                        <td><?php echo $itinerary['Title']; ?></td>
                        <td><?php echo $itinerary['Budget']; ?></td>
                        <!-- Add more table cells for other fields -->
                        <td>
                            <a href="edit_itinerary.php?id=<?php echo $itinerary['Itinerary_id']; ?>" class="edit-link">Edit</a>
                            <!-- Add more actions like delete if needed -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
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
</body>
</html>