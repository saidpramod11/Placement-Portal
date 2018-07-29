<?php
	session_start();
	include('dbconfig/config.php');
	if($_SESSION['username'])
	{
	
	?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Placement Portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<section id="banner">
				<header>
					<table cellspacing="0" border="0">
						<tr>
						<td rowspan="3" width="18%">
						<img src="imgs/logo.jpeg" class="avatar3"/>
						</td>
						</tr>
					
						<tr>
						<td width="82%">
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
		
		<div id="page-inner">
		
			
						<?php 
						include('index_nav.php');
						?>	
				
			<center>		
			<table class = "table" cellspacing="14" border="1">
					<thead>
                                        <th>Full_Name</th>
										<th>Email</th>
										<th>City</th> 
										<th>Pincode</th>
										<th>Contact</th>
										<th>Company</th>
										<th></th>
										<th></th>
					</thead>
                    <tbody>                
                               
                               <?php 
									$result_1 = $con->query("Select * from std_placed");
									while($row_1 = $result_1->fetch_assoc())
									{ 	
								?>
                                    <tr>
                                        <td><?php echo $row_1['fullname']; ?></td>        
										<td><?php echo $row_1['email']; ?></td>
                                        <td><?php echo $row_1['city']; ?></td>
										<td><?php echo $row_1['contact']; ?></td>
                                        <td><?php echo $row_1['company']; ?></td>
										<td><?php echo $row_1['desc_']; ?></td>
    
										<td>
											<a href = "delete_rec.php?id=<?php echo $row_1['username']; ?>">
											<button type = "button" class="Home_btn">DELETE ME </button></a>
										</td>
                                    </tr>
								<?php 
									} 
								?>
									
									
                        </tbody>
						</table>
	</center>
				
			<?php
				
				if(isset($_POST['logout']))//$_POST becoz data is transfered through Post variable
				{
					session_destroy();
					header('location:logout.php');
				}
			?>
			<?php
		#Read comments
		//$read = fopen("feedback.txt", "r+t");
		//echo "<b><hr><h2>Comments<br></h2></b><br><hr>".fread($read, 1024);
		//fclose($read);
		?>
		
		
				
		</div>
		<?php 
		}
		else
		{
			header('Location:logout.php');
		}

		?>
	</body>
		<div>
		<?php
			include('footer.php');
		?>
		</div>
</html>