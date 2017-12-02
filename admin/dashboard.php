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

    <title>CORAL | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    
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
                            Dashboard <small> Overview</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

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

$sql = "SELECT * FROM inventory where username='$sessionname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		 $x1=$row["single"];
		 $x2=$row["singleroomprice"];
		  $x3=$row["booked"];
		 
    }
}

$today = date("Y-m-d");
$sql1 = "SELECT * FROM event where username='$sessionname' and start>=$today order by start desc limit 1";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
		
		 $start=$row1["start"];
		 $end=$row1["end"];
		 $time=$row1["time"];
		 $desci=$row1["desci"];
		 
    }
}

$sql5 = "SELECT * FROM booking where hotelusername='$sessionname' ";
$result5 = mysqli_query($conn, $sql5);

$totalbooking=mysqli_num_rows($result5) ;

if (mysqli_num_rows($result5) > 0) {
    // output data of each row
    while($row5 = mysqli_fetch_assoc($result5)) {
		
		 $a=$row5["amount"];
		 $amount=$amount+$a;
		 $n=$row5["noofroom"];
		 $noofroom=$noofroom+$n;
		 
		 
    }
}

$sql6 = "SELECT * FROM booking where hotelusername='$sessionname' order by checkin  LIMIT 1 ";
$result6 = mysqli_query($conn, $sql6);



if (mysqli_num_rows($result6) > 0) {
    // output data of each row
    while($row6 = mysqli_fetch_assoc($result6)) {
		
		 $email=$row6["email"];
		 $name=$row6["name"];
		  $checkin=$row6["checkin"];
		 
		 
		
		 
		 
    }
}

mysqli_close($conn);
?>        

<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>New Booking Done</strong> done by <a href="details.php?email=<?php echo $email; ?>" class="alert-link"><?php echo $name; ?></a> on <?php echo $checkin; ?> !
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-home fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $x1; ?></div>
                                        <div>Rooms Avialable !</div>
                                    </div>
                                </div>
                            </div>
                            <a href="inventory">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-money fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $amount; ?></div>
                                        <div>Total Profit</div>
                                    </div>
                                </div>
                            </div>
                            <a href="inventory">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $noofroom; ?></div>
                                        <div>Room Booked!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="inventory">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $totalbooking; ?></div>
                                        <div>Total Bookings </div>
                                    </div>
                                </div>
                            </div>
                            <a href="inventory">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
<div class="jumbotron">
                    <h3><b>Hello, <?php echo $sessionname; ?> !</b></h3>
                    <h3> Coming Events</h3><br>
                    <p>There is a <?php echo $desci; ?> Starting From <?php echo $start; ?> at <?php echo $time; ?> and ending at <?php echo $end; ?>    </p>
                    <p><a href="mycalendar" class="btn btn-primary btn-lg" role="button">Explore More »</a>
                    </p>
                </div>

<!---                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>--->
                <!-- /.row -->
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
                        <div class="text-right">
                                    <a href="analytics">View More <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                    </div>
<script src="https://query.yahooapis.com/v1/public/yql?q=select * from weather.forecast where woeid in (select woeid from geo.places(1) where text='pune, in')&format=json&callback=callbackFunction"></script>

<script>
var callbackFunction = function(data) {
    var wind = data.query.results.channel.wind;
	var units = data.query.results.channel.units;
	   var atmosphere = data.query.results.channel.atmosphere;
	var astronomy = data.query.results.channel.astronomy;
	var condition = data.query.results.channel.item.condition;
document.write("WIND CHILL:- "+wind.chill);
	document.write("WIND DIRECTION:- "+wind.direction);
	document.write("WIND SPEED:- "+wind.speed+" "+units.speed);
   
	
	document.write("ATMOSPHERE HUMIDITY:- "+atmosphere.humidity);
	document.write("ATMOSPHERE PRESSURE:- "+atmosphere.pressure);
	document.write("ATMOSPHERE RISING:- "+atmosphere.rising);
	document.write("ATMOSPHERE VISIBILITY:- "+atmosphere.visibility);
	
	
	 
	
	document.write("SUNRISE:- "+astronomy.sunrise);
	document.write("SUNSET:- "+astronomy.sunset);
	
	
  
document.write("TEMP:- "+condition.temp+" "+ units.temperature);
	document.write("TEXT:- "+condition.text);
	document.write("DATE:- "+condition.date);	
}


</script>

                <div class="row">
                <div class="col-lg-12">
                        <h2>Weather Condition of <?php date_default_timezone_set('Asia/Kolkata');

    // Then call the date functions
    $time = date('Y-m-d H:i:s'); echo $time; ?></h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Description </th>
                                        <th>Data</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tempreature</td>
                                        <td>78 F</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Humidity</td>
                                        <td>96%</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Wind Speed</td>
                                        <td>9 mph</td>
                                        
                                    </tr>
                                     <tr>
                                        <td>Wind Direction</td>
                                        <td>270</td>
                                        
                                    </tr>
                                     <tr>
                                        <td>Wind Chill</td>
                                        <td>79</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Sunrise</td>
                                        <td>5:57 AM</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Sunset</td>
                                        <td>7:09 PM</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Atmospheric Pressure</td>
                                        <td>939.0</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Text</td>
                                        <td>Partly Cloudy</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Booking History Panel</h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                            <th>Name</th>
                                                <th>Checkin #</th>
                                                
                                                <th>Email</th>
                                                <th>Phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
										
										$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";

// Create connection
$conn3 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

										$sql3 = "SELECT * FROM booking where hotelusername='$sessionname' order by  checkin limit 5 ";
										
$result3 = mysqli_query($conn3, $sql3);

if (mysqli_num_rows($result3) > 0) {
    // output data of each row
    while($row3 = mysqli_fetch_assoc($result3)) {
		
		 
    
										
										?>
                                            <tr>
                                            <td><a href="details.php?email=<?php echo $row3["email"]; ?>"><?php echo $row3["name"]; ?></a></td>
                                                <td><?php echo $row3["checkin"]; ?></td>
                                                
                                                <td><?php echo $row3["email"]; ?></td>
                                                <td><?php echo $row3["phone"]; ?></td>
                                            </tr>
                                            
                                           <?php }}?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">Click on User to View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-calendar fa-fw"></i> Event Calendar </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Start #</th>
                                                <th>End</th>
                                                <th>Desc</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
										
										$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";

// Create connection
$conn2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

										$sql2 = "SELECT * FROM event where username='$sessionname' order by start desc limit 5 ";
$result2 = mysqli_query($conn2, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
		
		 
    
										
										?>
                                            <tr>
                                                <td><?php echo $row2["start"]; ?></td>
                                                <td><?php echo $row2["end"]; ?></td>
                                                <td><?php echo $row2["desci"]; ?></td>
                                                <td><?php echo $row2["time"]; ?></td>
                                            </tr>
                                            
                                           <?php }}?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="mycalendar">View All Events <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
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

</body>

</html>
