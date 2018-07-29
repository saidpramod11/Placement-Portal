<?php
		require_once("dbconfig/config.php");
		$ff=$_POST['company'];
		$name[]=explode(" ",$ff);
		$id=$name[0][0][0].$name[0][1][0];
		$id=$id.date("Yms");
	   
		$company=$_POST['company'];
		$established=$_POST['established'];
	
		$email=$_POST['email'];
		$contact=$_POST['contact'];	
		$url=$_POST['url'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$address=$_POST['address'];
		
		$sql1="INSERT INTO `cmp_login`(`username`, `password`, `email`, `contact`) VALUES ('$id','$id', '$email', '$contact');";
		 $sql2="INSERT INTO `cmpedit_profile`(`username`, `company`, `established`, `state`, `city`, `pincode`, `address`, `url`) VALUES ('$id', '$company', '$established', '$state', '$city', '$pincode', '$address', '$url')";
		 
$sql3="INSERT INTO `vacancy`(`username`, `recruiter_name`, `designation`, `arrival_date`, `vacancy_type`, `rqd_skill`, `url_`) VALUES ('$id','','','','','','')";
		
		if ($con->query($sql1) === TRUE AND $con->query($sql2) === TRUE AND $con->query($sql3) === TRUE)		{
			require_once("add_cmp.php");
			echo '<script type="text/javascript"> alert("Company Added Successfully")</script>';
					echo "<script> location.href = 'cmp_details.php';</script>";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		
		?>
		
						   