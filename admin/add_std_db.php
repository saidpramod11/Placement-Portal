<?php
		require_once("dbconfig/config.php");
		$ff=$_POST['fullname'];
		$name[]=explode(" ",$ff);
		$id=$name[0][0][0].$name[0][1][0];
		$id=$id.date("Yms");

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
		$contact=$_POST['contact'];
		$X_percentage=$_POST['X_percentage'];	
		$XII_percentage=$_POST['XII_percentage'];	
		$graduation=$_POST['graduation'];
		$university=$_POST['university'];
		
	
		$query= " select * from std_login WHERE email='$email'";
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)//if($query_run->num_rows > 0 ) 
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("Student already present with the same email Try Another email")</script>';
				echo "<script> location.href = 'add_std.php';</script>";
			}
			else{
				$sql1="INSERT INTO `std_login`(`username`, `password`, `email`, `contact`) VALUES ('$id', '$id', '$email', '$contact');";
				
				
				if ($con->query($sql1) === TRUE){
					$sql2="insert into stdedit_profile(username,fullname,father_name,mother_name,gender,nationality,date_of_birth,state,city,pincode,X_percentage,XII_percentage,graduation,university) values('".$id."','".$fullname."','".$father_name."','".$mother_name."','".$gender."','".$nationality."','".$date_of_birth."','".$state."','".$city."','".$pincode."','".$X_percentage."','".$XII_percentage."','".$graduation."','".$university."')";
					if($con->query($sql2) === TRUE){
					require_once("add_std.php");
					echo '<script type="text/javascript"> alert("Student Added Successfully")</script>';
							echo "<script> location.href = 'std_details.php';</script>";
					}
						else
						{
						echo "Error: " . $sql2 . "<br>" . $con->error;
						}
					} 
					else {
						echo "Error: " . $sql1 . "<br>" . $con->error;
					}
			}
		
		?>
		
						   