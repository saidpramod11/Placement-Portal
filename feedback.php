<?php	
 session_start();
 ob_start();
 include('dbconfig/config.php');	
	
		echo '<script>alert("You Must be logged in to Post a feedback")</script>';
		echo "<script> location.href = 'index.php';</script>";

?>

