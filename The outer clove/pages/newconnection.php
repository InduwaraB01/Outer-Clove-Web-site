<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "outerclovedb"; 
  $conn = new mysqli($servername, $username, $password, $db_name );
    
   if(mysqli_connect_errno())
	{
		echo"failed to connect to Mysql:".
			mysqli_connect_errno();
		die;
	}
	else 
	{
		echo"database connected!".
			mysqli_connect_error();
	}
    ?>