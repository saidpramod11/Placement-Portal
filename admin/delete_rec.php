<?php

	if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			include('dbconfig/config.php');
			$query = "DELETE from stdedit_profile where username= '$id' ";
			$query_run = mysqli_query($con,$query);

			if($query_run)
				{
					echo '<script type="text/javascript"> alert("Record Successfully Deleted")</script>';
					echo "<script> location.href = 'std_details.php';</script>";
				}
			else
				{
					echo '<script type="text/javascript"> alert("Error!")</script>';
					echo "<script> location.href = 'std_details.php';</script>";
				}
			
		}
		
?>