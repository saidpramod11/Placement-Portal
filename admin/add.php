<?php

					
						
						include_once('dbconfig/config.php');
						$username=$_POST['user'];
						$fullname=$_POST['full'];
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$company=$_POST['company'];
						$year=$_POST['year'];
					
						$course=$_POST['course'];
						$desc_=$_POST['desc_'];

						if ($username==''){
							echo'<script>alert("enter your username")</script>';
						}
						if ($email==''){
							echo'<script>alert("enter your email")</script>';
						}
						if ($username!='' AND $fullname!=''  AND $email!='' AND $contact!=''){
							
						$query= ("SELECT * from std_placed WHERE username='$username'");
						$query_run = mysqli_query($con,$query);//$query_run = con->query($query);

						if(mysqli_num_rows($query_run)>0)//if($query_run->num_rows > 0 ) 
						{
						//there is already a user with the same username
						echo '<script type="text/javascript"> alert("Student Already present.. Check Again")</script>';
						}
						else{
							$sql1="INSERT INTO `std_placed` (`username`, `fullname`, `email`, `contact`, `company`, `year`, `course`, `desc_`) VALUES ('$username', '', '', '', '', '', '', '');";
							$sql2="update std_placed set
							fullname='".$fullname."' ,
							email='".$email."' ,
							contact='".$contact."',
							company='".$company."' ,							
							year='".$year."' ,							
							course='".$course."' ,							
							desc_='".$desc_."'							
							
							where username='".$username."' ";
							

						if ($con->query($sql1) === TRUE AND $con->query($sql2) === TRUE){
		
							echo '<script type="text/javascript"> alert("Student Added Successfully")</script>';
							echo "<script> location.href = 'selected.php';</script>";
							} 
						else {
						echo '<script type="text/javascript"> alert("Error Adding Student")</script>';
						echo "<script> location.href = 'selected.php';</script>";
						}
						}
						}
						else {
						echo '<script type="text/javascript"> alert("Fill The Information Correctly")</script>';
						echo "<script> location.href = 'selected.php';</script>";
						}
						?>
						