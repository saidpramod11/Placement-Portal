<?php
	if(isset($_POST['update']))
	{
		$fullname=$_POST['fullname'];
		$father_name=$_POST['father_name'];
		$mother_name=$_POST['mother_name'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$nationality=$_POST['nationality'];
		$date_of_birth=$_POST['date_of_birth'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$landmark=$_POST['landmark'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$X_percentage=$_POST['X_percentage'];
		$year_of_passing1=$_POST['year_of_passing1'];
		$X_Board=$_POST['X_Board'];
		
		$XII_percentage=$_POST['XII_percentage'];
		$year_of_passing2=$_POST['year_of_passing2'];
		$XII_Board=$_POST['XII_Board'];
		
		$graduation=$_POST['graduation'];
		$year_of_passing3=$_POST['year_of_passing3'];
		$university=$_POST['university'];
		$post_graduation=$_POST['post_graduation'];
		$year_of_passing4=$_POST['year_of_passing4'];
		$university2=$_POST['university2'];
		
		$sql1="update std_login set
		email='".$email."' ,
		contact='".$contact."' where username='".$_SESSION['username']."' ";	
		
		$sql2="update stdedit_profile set 
		
		fullname='".$fullname."' , 
		father_name='".$father_name."', 
		mother_name='".$mother_name."' ,
		gender='".$gender."' , 
		 
		nationality='".$nationality."' ,
		date_of_birth='".$date_of_birth."' , 
		state='".$state."' , 
		city='".$city."' , 
		pincode='".$pincode."' ,
		landmark='".$landmark."' ,
		address='".$address."' ,
		
		
		X_percentage='".$X_percentage."' , 
		year_of_passing1='".$year_of_passing1."' , 
		X_Board='".$X_Board."',
		
		XII_percentage='".$XII_percentage."' , 
		year_of_passing2='".$year_of_passing2."',
		XII_Board='".$XII_Board."',
		
		graduation='".$graduation."' ,
		year_of_passing3='".$year_of_passing3."',
		university='".$university."',
		
		post_graduation='".$post_graduation."' ,
		year_of_passing4='".$year_of_passing4."', 
		university2='".$university2."'
		
			where username='".$_SESSION['username']."' ";
			if ($con->query($sql1) === TRUE AND $con->query($sql2) === TRUE )		{
			require_once("dbconfig/config.php");
			echo '<script type="text/javascript"> alert("Your Profile Updated Successfully...")</script>';
			header("Refresh:0");
			} else {
			echo "Error: " . $sql . "<br>" . $con->error;
			}
	}
?>

				