<?php
session_start();
error_reporting(0);
					 if(isset($_SESSION['name'])) {
  

					 
$sessionname= $_SESSION['name'];
?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="dashboard">CORAL ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
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
					
					 $sql6 = "SELECT * FROM booking where hotelusername='$sessionname' order by checkin desc LIMIT 1 ";
$result6 = mysqli_query($conn, $sql6);



if (mysqli_num_rows($result6) > 0) {
    // output data of each row
    while($row6 = mysqli_fetch_assoc($result6)) {
		
		 $email=$row6["email"];
		 $name=$row6["name"];
		  $checkin=$row6["checkin"];
		 
		 
		
		 
		 
    }
}
?>
                        <li>
                            <a href="details.php?email=<?php echo $email; ?>"><?php echo $name; ?> Booked on <?php echo $checkin; ?> <span class="label label-success">Booked </span></a>
                        </li>
                       
                       
                       
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $sessionname; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="mycalendar"><i class="fa fa-calendar"></i> My Calendar</a>
                        </li>
                        <li>
                            <a href="analytics"><i class="fa fa-fw fa-renren"></i> Analytics</a>
                        </li>
                        <li>
                            <a href="addevent"><i class="fa fa-fw fa-book"></i> Add Event</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="inventory"><i class="fa fa-fw fa-database"></i> Push Inventory</a>
                    </li>
                    <li>
                        <a href="analytics"><i class="fa fa-fw fa-bar-chart-o"></i> View Analytics</a>
                    </li>
                    
                   
                    
                        
                            <li>
                                <a href="mycalendar"> <i class="fa fa-fw fa-calendar-o"></i>My Calendar </a>
                            </li>
                            <li>
                                <a href="googlecalendar"><i class="fa fa-fw fa-google"></i>Google Calendar </a>
                            </li>
                            
                        
                  
                    <li>
                                <a href="addevent"><i class="fa fa-fw fa-edit"></i>Add Event To My Calendar</a>
                            </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <?php } 
  
  else { ?>  
   <script language="javascript" type="text/javascript">
	  
	  
	   window.location.href="index";
	   </script>  
       <?php }?>