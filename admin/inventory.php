<?php
session_start();
error_reporting(0);
					 if(isset($_SESSION['name'])) {
  

					 
$sessionname= $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico"/> 
    <title>Google Calendar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    
  <link rel="stylesheet" href="css/custom.css" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="images/favicon.ico">


</head>


<body ng-cloak="">

    <div id="wrapper">
<?php include('header.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

            

            </div>
            <!-- /.container-fluid -->
 <div ng-view="" id="ng-view"></div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<?php } 
  
  else { ?>  
   <script language="javascript" type="text/javascript">
	  
	  
	   window.location.href="index";
	   </script>  
       <?php }?>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     
<!-- Libraries -->
<script src="js/angular.min.js"></script>
<script src="js/ui-bootstrap-tpls-0.11.2.min.js"></script>
<script src="js/angular-route.min.js"></script>
<script src="js/angular-animate.min.js"></script>

<!-- AngularJS custom codes -->
<script src="app/app.js"></script>
<script src="app/data.js"></script>
<script src="app/directives.js"></script>
<script src="app/productsCtrl.js"></script>

<!-- Some Bootstrap Helper Libraries -->

<script src="js/jquery.min.js"></script>
<script src="js/underscore.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
