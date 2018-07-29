<?php
	require_once("dbconfig/config.php");
	
	if(isset($_POST['submit']){
		
	$username=$_POST['$user']
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$company=$_POST['company'];
	$start_year=$_POST['start_year'];
	$final_year=$_POST['final_year'];
	$course=$_POST['course'];
		
	if ($username!='' AND $fullname!=''  AND $email!='' AND $contact!=''){
			$query= " select * from std_placed WHERE username='$username'";
			$query_run = mysqli_query($con,$query);//$query_run = con->query($query);
			 
			if(mysqli_num_rows($query_run)>0)//if($query_run->num_rows > 0 ) 
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("Student Already present.. Check Again")</script>';
			}
			else{
				echo $sql="insert into std_placed(username,fullname,email,contact,company,start_year,final_year,course) values('".$username."',
				'".$fullname."','".$email."','".$contact."','".$company."','".$start_year."','".$final_year."','".$course."')";

				if ($con->query($sql) === TRUE){
					require_once("add_std.php");
					echo '<script type="text/javascript"> alert("Student Added Successfully")</script>';
							echo "<script> location.href = 'add_std.php';</script>";
				} 
				else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}
			}
	}
}
?>