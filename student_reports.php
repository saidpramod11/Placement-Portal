<?php
	include('dbconfig/config.php');
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
						include('cindex_nav.php');
						?>	
						
						<!--onClick="javascript:popUp('usertype.php')"-->
						
					<center>
					<table id="maint" border="0" cellspacing="14">
					<thead>
					<tr>
					<form action="placement_detail.php" method = "post">
					<td colspan="1"><label>Batch Year:&nbsp;</label>
					</td>

					<td>
					<input type="year" maxlength="4" name="start_year" class="inputvalues" placeholder="From"/>
					</td>

					<td><input type="year" maxlength="4" name="final_year" class="inputvalues" placeholder="To"/>
					</td>
					<td>
					<button type="submit" name="search" class="Home_btn">Search</button>
					</td>

					</form>
					</tr>

					<tr>
					<td colspan="4">
					<center>OR</center>
					<td>
					</tr>

					<tr>
					<form action="placement_detail.php" method = "post">
					<td colspan="1"><label>Company:&nbsp;</label>
					</td>

					<td>
					<input type="text" name="company" class="inputvalues" placeholder="Enter Company Name"/>
					</td>

					<td>
					<button type="submit" name="search1" class="Home_btn">Search</button>
					</td>

					</form>
					</tr>
					<tr><td colspan="4"><hr/></td></tr>
					<th>Full_Name</th>
					<th>Company</th>
					<th>Course</th>
					</thead>

					<tbody>                
					<?php 
					if(isset($_POST['search']) or isset($_POST['search1'])){
					if(isset($_POST['search'])){
					$start_year=$_POST['start_year'];
					$final_year=$_POST['final_year'];

					if($result= $con->query("Select * from std_placed where start_year BETWEEN '$start_year' AND '$final_year'")){
					while($row_1 = $result->fetch_assoc())
					{ 

					?>

					<tr>
					<td><?php echo $row_1['fullname']; ?></td>
					<td><?php echo $row_1['']; ?></td>
					<td><?php echo $row_1['course']; ?></td>

					<td>
					<a href = "std_placed.php?id=<?php echo $row_1['username']; ?>">
					<button type="button" class="Home_btn">View Details</button></a>
					</td>
					</tr>
					<?php 
					}
					}}

					if(isset($_POST['search1'])){
					$company=$_POST['company'];


					if($result= $con->query("Select * from std_placed where company='$company'")){
					while($row_1 = $result->fetch_assoc())
					{ 

					?>

					<tr>
					<td><?php echo $row_1['fullname']; ?></td>
					<td><?php echo $row_1['company']; ?></td>
					<td><?php echo $row_1['course']; ?></td>

					<td>
					<a href = "std_placed.php?id=<?php echo $row_1['username']; ?>">
					<button type="button" class="Home_btn">View Details</button></a>
					</td>
					</tr>
					<?php 
					}
					}
					}
					?>
					<tr><td colspan="4"><hr/></td></tr>
					
					<td colspan="3">
					</td>
					
					<td colspan="1">
					<button type="button" class="Home_btn">Gnerate Report</button></a>
					</td>
					<?php
					}

					else{

					$result_1 = $con->query("Select * from stdedit_profile ");
					while($row_1 = $result_1->fetch_assoc())
					{ 
					?>

					<tr>
					
					<td><?php echo $row_1['fullname']; ?></td>
					<td><?php echo $row_1['email']; ?></td>
					<td><?php echo $row_1['contact']; ?></td>
					
					<td>
					<a href = "cstd_details.php?id=<?php echo $row_1['username']; ?>">
					<button type="button" class="Home_btn">View Details</button></a>
					</td>
					</tr>
					<?php
					}
					?>
					<tr><td colspan="4"><hr/></td></tr>
					
					<td colspan="3">
					</td>
					
					<td colspan="1">
					<button type="button" class="Home_btn">Gnerate Report</button></a>
					</td>
					<?php
					} 

					?>
					</tbody>
					
				</table>
					</center>
					
		
		
		
		<center>
		
		<?php
		#Read comments
		//$read = fopen("feedback.txt", "r+t");
		//echo "<b><hr><h2>Comments<br></h2></b><br><hr>".fread($read, 1024);
		//fclose($read);
		?></center>
		
		
		</div>
		
	</body>
		<footer>
		<?php
			include('footer.php');
		?>
		</footer>
					
</html>
