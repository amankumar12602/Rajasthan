<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title> CORAL Admin Login</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/login.css">

    
     <link rel="shortcut icon" href="images/favicon.ico"/> 

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>
 <?php
include('openconnection.php');

session_start();

if(isset($_POST['submit']))
  {
	
	 $username=$_POST['username'];
	 $pass=$_POST['password'];
	 $password=$pass;  
	 $sql="select * from login where username='$username' && password ='$password'"; 
	 
	 $result=mysql_query($sql) or die (mysql_error());
	 $num=mysql_num_rows($result);
	 //echo "praveen5";
	 if($num==1)
	 {
	   $row=mysql_fetch_array($result);
	   $_SESSION['name']=$row['username'];
		   ?>        
			<script language="javascript" type="text/javascript">
			window.location.href="dashboard?msg=success";
			</script>
			<?php 
	   
	  }
	   
	else
	{
		?>
       <script language="javascript" type="text/javascript">
	   window.location.href="index?msg=not"
	   </script>
       <?php
	   
	  $msg=not;
	   return $msg;
	   



	}
	
  }

?>

  <body>

    <div class="login">
	<h1>Login To Access</h1>
    <form method="post">
    	<input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required />
        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required />
        <input type="submit" class="btn btn-primary btn-block btn-large" name="submit" value="Let me in.">
    </form>
</div>
    
     
    
    
    
  </body>
</html>
