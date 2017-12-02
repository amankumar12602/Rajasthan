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
<link rel="shortcut icon" href="images/favicon.ico"/> 
    <title>Frugalbin | Add Event</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>

<body>

    <div id="wrapper">
<?php include('header.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add Event To Calendar
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add Event
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
<?php
include('openconnection.php');



if(isset($_POST['submit']))
  {
	
	 $desci=$_POST['desci'];
	 $start=$_POST['start'];
	  $end=$_POST['end'];
	 $time=$_POST['time'];
	   
	 $sql="insert into event(username,desci,start,end,time) values('$sessionname','$desci','$start','$end','$time')"; 
	 
	 $result=mysql_query($sql) or die (mysql_error());
	 $num=mysql_num_rows($result);
	 

	   
		   ?>   
           <style>.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}</style>     
			<div class="alert alert-success alert-dismissable">
                    <strong>Well done!</strong> You successfully Created a Event in Calendar.
                </div>
			<?php 
	   
	 
	
  }
?>
                        <form role="form" method="post" action="#">

                            <div class="form-group">
                                <label>Event Description</label>
                                <input class="form-control" type="text" name="desci">
                                <p class="help-block">Example: Meeting at XYZ Hotel.</p>
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" type="text" name="start"  >
                                <p class="help-block">Format: YYYY-MM-DD</p>
                            </div>
 <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" type="text" name="end" >
                                <p class="help-block">Format: YYYY-MM-DD</p>
                            </div>

 <div class="form-group">
                                <label>Time of Event</label>
                                <input class="form-control" type="text" name="time" >
                                <p class="help-block">Format:HH:MM:SS eg:- 12:30:00</p>
                            </div>

                       

                           

                           
                          

                          <input type="submit" class="btn btn-primary" name="submit" value="Create Event">
                           

                        </form>

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

</body>

</html>
