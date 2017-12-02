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

    <title>Google Calendar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='js/jquery-ui.custom.min.js'></script>

    <link rel="shortcut icon" href="images/favicon.ico">


</head>
<?php
echo "<script>\n"; 
echo "\n"; 
echo "	$(document).ready(function() {\n"; 
echo "\n"; 
echo "\n"; 
echo "		/* initialize the external events\n"; 
echo "		-----------------------------------------------------------------*/\n"; 
echo "\n"; 
echo "		$('#external-events .fc-event').each(function() {\n"; 
echo "\n"; 
echo "			// store data so the calendar knows to render an event upon drop\n"; 
echo "			$(this).data('event', {\n"; 
echo "				title: $.trim($(this).text()), // use the element's text as the event title\n"; 
echo "				stick: true // maintain when user navigates (see docs on the renderEvent method)\n"; 
echo "			});\n"; 
echo "\n"; 
echo "			// make the event draggable using jQuery UI\n"; 
echo "			$(this).draggable({\n"; 
echo "				zIndex: 999,\n"; 
echo "				revert: true,      // will cause the event to go back to its\n"; 
echo "				revertDuration: 0  //  original position after the drag\n"; 
echo "			});\n"; 
echo "\n"; 
echo "		});\n"; 
echo "\n"; 
echo "\n"; 
echo "		/* initialize the calendar\n"; 
echo "		-----------------------------------------------------------------*/\n"; 
echo "\n"; 
echo "		$('#calendar').fullCalendar({\n"; 
echo "			eventSources: [\n"; 
echo "\n"; 
echo "        // your event source\n"; 
echo "        {\n"; 
echo "            events: [ \n"; 
echo "			\n"; 
echo "			\n"; 
echo "			\n"; 
echo "			// put the array in the `events` property\n"; 
echo "               \n";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "punehack";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM event where username='$sessionname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
    
    
    
    
    


 
echo "                {\n"; 
echo "                    title  : '".$row['desci']."',\n"; 
echo "                    start  : '".$row['start']."',\n"; 
echo "                    end    : '".$row['end']."'\n"; 
echo "                },\n";

}}


 
echo "                \n"; 
echo "            ],\n"; 
echo "            color: 'black',     // an option!\n"; 
echo "            textColor: 'yellow' // an option!\n"; 
echo "        }\n"; 
echo "\n"; 
echo "        // any other event sources...\n"; 
echo "\n"; 
echo "    ],\n"; 
echo "\n"; 
echo "			header: {\n"; 
echo "				left: 'prev,next today',\n"; 
echo "				center: 'title',\n"; 
echo "				right: 'month,agendaWeek,agendaDay'\n"; 
echo "			},\n"; 
echo "			editable: true,\n"; 
echo "			droppable: true, // this allows things to be dropped onto the calendar\n"; 
echo "			drop: function() {\n"; 
echo "				// is the \"remove after drop\" checkbox checked?\n"; 
echo "				if ($('#drop-remove').is(':checked')) {\n"; 
echo "					// if so, remove the element from the \"Draggable Events\" list\n"; 
echo "					$(this).remove();\n"; 
echo "				}\n"; 
echo "			}\n"; 
echo "			\n"; 
echo "		});\n"; 
echo "\n"; 
echo "\n"; 
echo "	});\n"; 
echo "\n"; 
echo "</script>\n";
?>
<style>

	
		
	
	#calendar {
		padding-left:50px;
		width: 900px;
	}

</style>

<body>

    <div id="wrapper">
<?php include('header.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            My Event Calendar
                            
                        </h1>
                       
                    </div>
                    
                    
                    	
                </div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
 <div id='wrap'>

		

		<div id='calendar'></div>

		<div style='clear:both'></div>

	</div>

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

</body>

</html>
