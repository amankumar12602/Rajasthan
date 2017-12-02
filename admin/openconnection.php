                                                                                                                                   <?php
$con = mysql_connect("localhost","root","");

//$con = mysql_connect("localhost","root","");


if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }// some codemysql_close($con);

mysql_select_db("punehack", $con)or die(mysql_error()); 
//mysql_select_db("test", $con)or die(mysql_error()); 
?>


