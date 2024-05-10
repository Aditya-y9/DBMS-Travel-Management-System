<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0) {   
    header('location:index.php');
} else { 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin manage Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Font Awesome CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Tables CSS -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<!-- Basic Table JavaScript -->
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<!-- Responsive Table Script -->
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();
    });
</script>
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Lined Icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
</head> 
<body>
   <div class="page-container">
       <div class="left-content">
           <div class="mother-grid-inner">
                <!-- Header -->
                <?php include('includes/header.php');?>
                <div class="clearfix"> </div>    
            </div>
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Manage Users</li>
            </ol>
            <!-- Manage Users Table -->
            <div class="agile-grids">    
                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2>Manage Users</h2>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mobile No.</th>
                                    <th>Email Id</th>
                                    <th>RegDate</th>
                                    <th>Updation Date</th>
                                    <th>Action</th> <!-- Added Action column for edit and delete buttons -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql = "SELECT * FROM dbms_project.User";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount() > 0) {
                                        foreach($results as $result) {
                                ?>      
                                <tr>
                                    <td><?php echo htmlentities($cnt);?></td>
                                    <td><?php echo htmlentities($result->Name);?></td>
                                    <td><?php echo htmlentities($result->PhoneNo);?></td>
                                    <td><?php echo htmlentities($result->Email_Id);?></td>
                                    <td><?php echo htmlentities($result->Dob);?></td>
                                    <td><?php echo htmlentities($result->UpdationDate);?></td>
                                    <td>
                                        <a href="edit_user.php?id=<?php echo htmlentities($result->id);?>">Edit</a> <!-- Edit link -->
                                        <a href="delete_user.php?id=<?php echo htmlentities($result->id);?>">Delete</a> <!-- Delete link -->
                                    </td>
                                </tr>
                                <?php 
                                    $cnt=$cnt+1;
                                    }
                                } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include('includes/footer.php');?>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <?php include('includes/sidebarmenu.php');?>
    <div class="clearfix"></div>
    <script>
    var toggle = true;
    $(".sidebar-icon").click(function() {                
      if (toggle) {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      } else {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }
      toggle = !toggle;
    });
    </script>
    <!-- Nice Scroll and Scripts -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
} 
?>
