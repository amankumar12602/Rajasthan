
<?php
session_start();
error_reporting(0);
					 if(isset($_SESSION['name'])) {
  

					 
$sessionname= $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analytics</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico">
   

</head>

<body style="overflow-x:hidden;">

    <div id="wrapper">
<?php include('header.php'); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Analytics
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Analytics
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
              

            
                <!-- /.row -->

                
                <!-- /.row -->

                
                <!-- /.row -->
<div class="row">
 <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Room Prices Of Various Hotels</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                              
                            </div>
                        </div>
                    </div>
</div>
                <!-- Morris Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Status of Inventory</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                
                            </div>
                        </div>
                    </div>
                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Inventory Pushed History</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php } 
  
  else { ?>  
   <script language="javascript" type="text/javascript">
	  
	  
	   window.location.href="index";
	   </script>  
       <?php }?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="morris.data.js.php"></script>

    <!-- Flot Charts JavaScript -->
 
</body>

</html>
