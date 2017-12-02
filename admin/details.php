<?php
session_start();
error_reporting(0);
					 if(isset($_SESSION['name'])) {
  

					 
$sessionname= $_SESSION['name'];
$email=$_GET["email"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="images/favicon.ico">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Details</title>

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
                        <h3 class="page-header">
                            Booking Details
                           
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Booking 
                            </li>
                        </ol>
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM booking where email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	   
	   ?>
	   <div class="table-responsive">
       <h3>Travelling Details for <?php echo $row["name"]; ?></h3>
       <br>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Details</th>
                                        <th>Information</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>Name</td>
                                        <td><?php echo $row["name"]; ?></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td>Email</td>
                                        <td><?php echo $row["email"]; ?></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td>Phone</td>
                                        <td><?php echo $row["phone"]; ?></td>
                                       
                                    </tr>
                                    <tr class="danger">
                                        <td>Check In</td>
                                        <td><?php echo $row["checkin"]; ?></td>
                                        
                                    </tr>
                                    <tr class="active">
                                        <td>Check Out</td>
                                        <td><?php echo $row["checkout"]; ?></td>
                                        
                                    </tr>
                                    <tr class="success">
                                        <td>No Of Rooms</td>
                                        <td><?php echo $row["noofroom"]; ?></td>
                                        
                                    </tr>
                                    <tr class="warning">
                                        <td>No of Adults</td>
                                        
                                       <td><?php echo $row["noofadult"]; ?></td>
                                    </tr>
                                    
                                     <tr class="danger">
                                        <td>Amount Payed</td>
                                        
                                       <td><?php echo "Rs ". $row["amount"]; ?></td>
                                    </tr>
                                    <tr class="active">
                                        <td>Location</td>
                                        
                                       <td><?php echo  $row["location"]; ?></td>
                                    </tr>
                                    <tr class="success">
                                        <td>Date & Time</td>
                                        
                                       <td><?php echo "Rs ". $row["time"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
	   <?php
    }
} 

mysqli_close($conn);
?>
                        
                        
                        
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
