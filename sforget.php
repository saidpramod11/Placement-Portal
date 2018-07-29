<?php 
	require 'dbconfig/config.php';
		$count=$msg="";
?>

<!DOCTYPE html>
<html>
		<head>
		<title>Change Password </title>
		<link rel="stylesheet" href="css/style.css">
		</head>	
		<body style="background-color:#7f8c8d">
		<div id="wrapper">
		<center><table cellspacing="0" border="0">
					<tr>
					<td rowspan="4">
					<img src="imgs/logo.jpeg" class="avatar3"/>
					</td>
					</tr>
				
					<tr>
					<td width="82%">
					<h1 id="headingnew">Amrapali</h1>
					</td>
					</tr>
					
					<tr>
					<td class="h2">
					<b>Group Of Institutes</b>
					</td>
					</tr>
					
					<tr>
					<td class="h2">
					<b>Amrapali Group Of Institutes</b>
					</td>
					</tr>
					
					<td colspan="4">
					<marquee>Welcome To Placement Portal</marquee>
					</td>
					<tr class="nav">
						<td colspan="4" >
					

						
							<form class="myform2" action="homepage.php" method="post">					
								<div align = "left"><input type="button" class="Home_btn"  value="HOME" onclick="window.location.href='homepage.php'" />
									<div class="dropdown">
										<button class="dropbtn">About Us</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											</div>
										</div>
													
									<div class="dropdown">
										<button class="dropbtn">Student</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											 </div>
									</div>
													
									<div class="dropdown">
										<button class="dropbtn">Company</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											</div>
									</div>
													
									<div class="dropdown">
										<button class="dropbtn">Latest News</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											</div>
									</div>
													
									<div class="dropdown">
										<button class="dropbtn">Placement Details</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											</div>
									</div>
													
									<div class="dropdown">
										<button class="dropbtn">Contact Us</button>
											<div class="dropdown-content">
												<a href="#">Link 1</a>
												<a href="#">Link 2</a>
												<a href="#">Link 3</a>
											</div>
									</div>
									
									<div class="dropdown">
										<button class="dropbtn">My Account</button>
											<div class="dropdown-content">
												<a href="changepass.php">Change Password</a>
												<a href="changeemail.php">Change Email</a>
												<a href="updateprofile.php">Update Profile</a>
											</div>
									</div>
							 
									
									<div align = "left" class="dropdown" >
									<input name="logout" type="submit" class="log_out" value="Log Out"  /></br>
									</div>
			
								</div>
							</form>
						</td>
						</tr>
					
				</table></center>
		</div>

		
				
		<div id="main-wrapper">
			
			<center><h2>Change Password</h2></center>

				<center>
					<img src="imgs/new.jpg" class="avatar"/>
				</center></br>
				<center>
				<form name="carform" action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">
								  
					<table cellspacing="10">
						<tr>
						<td>
						<label><b>Email:</b></label>
						</td>
						<td>
						<input type="password" name="email" class="inputvalues" placeholder="Enter Your Email_ID" required/></br>
						</td>
						</tr>
						
						<tr>
						<td>
						<label><b>Mobile:</b></label>
						</td>
						<td>
						<input type="text" name="mobile" class="inputvalues" placeholder="Enter Your Mobile_No." required/></br>
						</td>
						</tr>
						
						<tr>
						<td>
						<label><b>New Password:</b></label>
						</td>
						<td>
						<input type="password" name="newpass" class="inputvalues" placeholder="Enter Your Password" required/></br>
						</td>
						</tr>
						
						<tr>
						<td>
						<label><b>Password:</b></label>
						</td>
						<td>
						<input type="password" name="conpass" class="inputvalues" placeholder="Enter Your Password" required/></br>
						</td>
						</tr>
					
						<tr>
						<td width='200' height=" 0 auto" align='center' colspan='2'>
						<font color='red'>
						<?php 
							echo"$msg"; 
						?>
						</font>
						</td>
						</tr>
						
					</table>
					
						<div align = "right"><input type="reset" id="reset_btn" value="Reset"/>
						</div>
						<div>
						<input name="submit" type="submit" id="register_btn"  value="Submit" />
						</div>
						</form>
			</center>
			
		</div>
			<?php
				
			
				if(isset($_POST['submit']))
				{
					
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$newpass=$_POST['newpass'];
					$conpass=$_POST['conpass'];

					$query_check="select * from stdreg_table where email='$email' and mobile='$mobile' ";
					$result=mysqli_query($con,$query_check);
					$count=mysqli_num_rows($result);
					if($count > 0)
					{
							$query="update stdreg_table set password='$newpass' where email='$email' and mobile='$mobile' ";
							$res=mysqli_query($con,$query);
							if($res)
							{
								echo"<script>alert('Password Updated Successfully')</script>";
							}
					}
					else
					{
						$msg="Error";
					}
				}
				?>
		<div>
		<?php
			include('footer.php');
		?>
		</div>
		
		</body>

</html>