<?php
session_start();
error_reporting(0);
					 if(isset($_SESSION['name'])) {
  

					 
$sessionname= $_SESSION['name'];
?>

$(function() {

  

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT * FROM inventory where username='$sessionname' order by startdate limit 1 ";
//echo $sql1;
$result1 = mysqli_query($conn1, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
		
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   ?>
		
		{
            label: "Booked Rooms",
            value: <?php echo $row1["booked"] ?>
        }, {
            label: "Avialable Rooms",
            value: <?php echo $row1["single"] ?>
        },
        {
            label: "Total Rooms",
            value: <?php $x=$row1["booked"]+$row1["single"];
			echo $x; ?>
        }
		
		<?php
	 }
} 


?>	
		],
        resize: true
    });


    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
       
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";

// Create connection
$conn2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql2 = "SELECT * FROM inventory where username='$sessionname'";
$result2 = mysqli_query($conn2, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
$old_date = $row2["startdate"];              // returns Saturday, January 30 10 02:06:34
$old_date_timestamp = strtotime($old_date);
$new_date = date('Y-m-d', $old_date_timestamp);
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   ?>
        
        {
            d: '<?php echo $new_date; ?>',
            rooms: <?php echo $row2["single"]; ?>
        }, 
        <?php
	 }
} 

mysqli_close($conn);
?>
        
        
        ],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['rooms'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Rooms Pushed'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [
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
$sql = "SELECT * FROM inventory limit 15";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   ?>
		
		
		{
            device: '<?php echo $row["username"] ;?>',
            geekbench: <?php echo $row["singleroomprice"]; ?>
        }, 
		
	<?php
	 }
} 

mysqli_close($conn);
?>	
		],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Price'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        resize: true
    });


});

<?php } 
  
  else { ?>  
   <script language="javascript" type="text/javascript">
	  
	  
	   window.location.href="index";
	   </script>  
       <?php }?>