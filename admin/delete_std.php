<?php
	ob_start();
 session_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{
?>
<html>
<head>
    <title>Admin_Panel</title>
    
	<!-- BOOTSTRAP STYLES-->
    <link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
		<section id="banner">
		
			<header>
					<table cellspacing="0" border="0">
						<tr>
						<td rowspan="3" width="16%">
						<img src="imgs/logo.jpeg" class="avatar3"/>
						</td>
						</tr>
					
						<tr>
						<td width="84%">
						<h1 id="headingnew">Amrapali Group Of Institutes </h1>
						</td>
						</tr>
						
						
						<tr>
						<td class="h2">
						Shiksha Nagar, Lamachaur, Haldwani(263139)
						</td>
						</tr>
						
						<tr>
						<td colspan="4">
						<marquee><b>Welcome To Placement Portal<b></marquee>	
						</td>
						</tr>
						
						
					</table>
				</header>
		</section>

	<form class="myform2" action="homepage.php" method="post">	
			<nav>
			<ul>
			<li><a href="homepage.php">HOME</a>
			</li>
			<li><a href="AboutUs.php">AboutUs</a>
			</li>
			
			<li class="dropdown">		
			<a class="active2" href="#">Manage Student</a>
				<div class="dropdown-content">
				<a href="std_details.php">Student Registered</a>
				<a href="add_Std.php">Add Student</a>
				<a href="update_Std.php">update Student</a>
				<a class="active2" href="delete_Std.php">Delete Student</a>
				</div>
			</li>
			
			<li class="dropdown">		
			<a href="#">Manage Company</a>
				<div class="dropdown-content">
				<a href="cmp_details.php">Company Registered</a>
				<a href="add_cmp.php">Add Company</a>
				<a href="update_cmp.php">Update Company</a>
				<a href="delete_cmp.php">Delete Company</a>
				</div>
			</li>
			
			<li class="dropdown">		
				<a href="#">Placement Details</a>
				<div class="dropdown-content">
				<a href="#">Student Placed</a>
				<a href="#">Alumini</a>
				</div>
			</li>
			
			<li><a href="Terms&Conditions.php">Terms And Conditions</a>
			</li>
			
			<li class="dropdown">
			<a href="#">Manage Profile</a>
			<div class="dropdown-content">
				<a href="change_pass.php">Change Password</a>
				</div>
			</li>
			
			<li class="dropdown"><a name="logout" href="logout.php">Logout</a>
			</li>
			</ul>
			</nav>
	</form>

	
	
			<div id="page-inner">
		
					<center>
					<table class = "table" cellspacing="14">
					<thead>
                                     
										<th>Username</th>
                                        <th>Full_Name</th>
										<th>Father's_Name</th>
										<th>Mother's_Name</th>
										<th>Email</th>
										<th>Gender</th>										
                                        <th>Nationality</th>
										<th>D.O.B</th> 
										<th>State</th> 
										<th>City</th> 
										<th>Pincode</th>
										<th>Contact</th>
										
										<th>10th_%age</th> 
										<th>12th_%age</th> 
										<th>Graduation</th>
										<th>University</th>
										<th></th>
					</thead>
                    <tbody>                
                               
                               <?php 
									$result_1 = $con->query("Select * from stdedit_profile ");
									while($row_1 = $result_1->fetch_assoc())
									{ 	
								?>
                                    <tr>
									
                                        <td><?php echo $row_1['username']; ?></td>
                                        <td><?php echo $row_1['fullname']; ?></td>
                                        <td><?php echo $row_1['father_name']; ?></td>
                                        <td><?php echo $row_1['mother_name']; ?></td>
										 <td><?php echo $row_1['email']; ?></td>
                                        <td><?php echo $row_1['gender']; ?></td>
										
										<td><?php echo $row_1['nationality']; ?></td>
                                        <td><?php echo $row_1['date_of_birth']; ?></td>
                                        <td><?php echo $row_1['state']; ?></td>
                                        <td><?php echo $row_1['city']; ?></td>
                                        <td><?php echo $row_1['pincode']; ?></td>
										
										<td><?php echo $row_1['contact']; ?></td>
                                        <td><?php echo $row_1['X_percentage']; ?></td>
                                        <td><?php echo $row_1['XII_percentage']; ?></td>
                                        <td><?php echo $row_1['graduation']; ?></td>
                                        <td><?php echo $row_1['university']; ?></td>
										
										
                                       
										<td>
											<a href = "delete_rec.php?id=<?php echo $row_1['username']; ?>">
											<button type = "button" class="Home_btn">Delete Record </button></a>
										</td>
                                    </tr>
								<?php 
									} 
								?>
									
									
                        </tbody>
						</table>
					</center>
		
		
		
		<footer>
		<?php
			include('footer.php');
		?>
		</footer>
		</div>
		<?php 
		}
		else
		{
			header('Location:logout.php');
		}

		?>
</body>
</html>
