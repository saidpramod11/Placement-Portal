<?php
	
 session_start();
 ob_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	$result_1 = $con->query("Select * from admin_login  ");
	while($row_1 = $result_1->fetch_assoc())
	{ 
		if($row_1['username']==$_SESSION['username']){
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_Panel</title>
    
	<!-- BOOTSTRAP STYLES-->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	#banner {
		color: #fff;
		text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);
		text-align: center;
		background-image:url("../images/bg.jpg");
		width:100%;
		padding: 1em 0 0em 0;
		margin: 0;	
	}
	#headingnew{
	font-family:Comic Sans MS; 
	color:white; 
	font-size:685%;
	text-align:center;
	padding:0px;
	margin-bottom:0px;
	margin-top:0px;
}
.footer{
	padding-top:15px;
	height:150px;
	left:0px;
	bottom:0px;
	position:fixed;
	width:100%;
	background-color:#000000; 
	color:white;
	text-align:center;
	font-family:comic sans ms;
}
.avatar3{ 
	width:50%;
	border-radius : 50% ;
	margin: 0 0 0 35px;
}
.h2{
	font-family:Comic Sans MS; 
	color:white; 
	font-size:200%;
	text-align:right;
	padding-right:15px;
	margin-bottom:0px;
	margin-top:0px;
}

marquee{
	color:white;
}
#pfimage{
	width: 200px;
	padding: 10px;
	
	margin-left: 50px;
	overflow: hidden;	
	}
	
#pfimage img {
	width: 120px;
	height:150px;
	background-image:url("uploads/profiledefault.jpg");
	background-size: 120px 150px;
	background-repeat: no-repeat;
}

		.navbar-default{
		opacity: .9;
		}

		.dropdown:hover .dropdown-menu {
		display: block;
		}
		
.panel-default{
		opacity: .9;
		}

hr.message-inner-separator
{
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}

		</style>

</head>

<body>

		<section id="banner">
		
			<header>
					<table cellspacing="0" border="0" >
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

	<?php
		include('admin_nav.php');
		?>
<form action="selected.php" method="post">
	<table class="table-condensed"><tr><td>				
				<label>Course:&nbsp;</label></td>
				
							<td><select name="course" class="form-control"  required/>
								<option value="" >Select Course</option>
								<option value="BCA" >BCA</option>
								<option value="BBA" >BBA</option>
								<option value="B.COM" >B.COM</option>
								
								<option value="B.TECH(IT)" >B.TECH(IT)</option>
								<option value="B.TECH(Cs)">B.TECH(Cs)</option>
								<option value="B.TECH(Mech.)">B.TECH(Mech.)</option>
							</select></td>
			<td><input type="text" class="form-control" placeholder="Enter Year" name="year" required/></td>
				<td><input type="submit" class="btn btn-primary" value="Search" name="search"></td>
				</tr></table></form>
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
			
				<div class="table-responsive">					
					<table class="table table-hover" border="0">
					
					<thead>
										<th></th>
                                        <th>Full_Name</th>
										<th>Company</th>
										<th>Email</th>
										<th>Contact</th>
										<th>Year</th>  
										<th>course</th>
										<th>desc</th>
										<th colspan="3" style="text-align:center">Actions</th>
					</thead>
                    <tbody>                
                               
			<?php
								if(isset($_POST['search']))
								{
									$course=$_POST['course'];
									$year=$_POST['year'];
									
									$sql1="Select * from std_placed WHERE course='$course' AND year='$year';";
									$result_3 = $con->query($sql1);
									if(mysqli_num_rows($result_3)<=0)
									{
										printf("Searched Category Not Found");
									}
								}
								else{
									$result_3 = $con->query("Select * from std_placed");
								}
				
				while($row_1 = $result_3->fetch_assoc())
				{ 	

			?>
					<tr>
						<td id="pfimage">
						<?php
								if($row_1['status']=1){
									echo"<img src='..\uploads/profile".$row_1['username'].".jpg'/>";
								}
						
						?>
						</td>
						
						<td><?php echo $row_1['fullname']; ?></td>
						<td><?php echo $row_1['company']; ?></td>
						<td><?php $sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row_1['username'] == $row_4['username']){
										echo $row_4['email'];	
										}
										else{
											echo "";
										}
									}
									  ?></td>
						<td><?php $sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row_1['username'] == $row_4['username']){
										echo $row_4['contact'];	
										}
										else{
											echo "";
										}
									}
									  ?></td>
						<td><?php echo $row_1['year']; ?></td>
						<td><?php echo $row_1['course']; ?></td>
						<td><?php echo $row_1['desc_']; ?></td>
						
					
					<td>
						<a href='update_std_placed.php?id=<?php echo $row_1['username']; ?>'data-toggle="tooltip" data-placement="top" title="Update Information"><span class="glyphicon glyphicon-edit" style="font-size:20px; color:black;"></span></a>
					</td>
					<td>
						<a href='delete_std_placed.php?id=<?php echo $row_1['username']; ?>' data-toggle="tooltip" data-placement="top" title="Delete Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
					</td>
						
						
					
					</tr>
				<?php 
				} 
		
				?><tr>
						<td colspan="11">
						<?php
							if(isset($_POST['search']))
							{ 		$course=$_POST['course'];
									$year=$_POST['year'];
						?>
					
						
							<a href='std_reports_view_all.php?id=<?php echo $course; ?>& name=<?php echo $year;?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
						<?php
							}
							
							else{
						?>	
							<a href='std_reports_view_all.php?id=<?php echo "0"; ?>& name=<?php echo "0";?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
						<?php
							}
							
						?></td>
						</tr>	
						
						</tbody>
					</table>
					<hr/>
					
					
						<font color="red"><b>Add Student Placed</b></font>

						<form action="#" method="post">
						<input type="text" name="username" placeholder="Enter Username" class="form-control" title="Input Username Of Student" >

						&nbsp;<button style="margin-top:10px;" name="sear" type="submit" class="btn btn-default" title='Search Student'><span class="glyphicon glyphicon-search" style="font-size:20px; color:red"></span></button>
						</form>

						<?php 
						if(isset($_POST['search'])){
						if(!empty($_POST['username'])){
						$user=$_POST['username'];

						$sql="SELECT * FROM `stdedit_profile` where username='".$user."'";
						$res=$con->query($sql);
						//$res->num_rows;
						if($res->num_rows>0){
						$row=$res->fetch_assoc();
						?>

						<form method="post" action="add.php" enctype="multipart/form-data">
						<table class="table">
							<thead>
								<th></th>
								<th><center>Username</center></th>
								<th><center>Full_Name</center></th>
								<th><center>Email</center></th>
								<th><center>Contact</center></th>
								<th><center>Company</center></th>
								<th><center>Year</center></th> 
								<th><center>course</center></th>
								<th></th>
								<th colspan="3" style="text-align:center">Actions</th>
							</thead>
							<tbody>
								<td id="pfimage">
								<?php
								$id=$row['username'];
									if($row['status']==1){
										echo"<img src='..\uploads/profile".$id.".jpg?'".mt_rand().">";
									}
									else{
										echo"<img src='..\uploads/profiledefault.jpg'>";
									}
							?>
								<td>
								<input style="margin-top:10px;" type="text" class="form-control" name="user" value="<?php echo $row['username']; ?>"required/>
								</td>
								<td><input style="margin-top:10px;" type="text" name="full" class="form-control" value="<?php echo $row['fullname']; ?>" required/></td>
								<td><input style="margin-top:10px;" type="text" name="email" class="form-control" value="<?php 
								$sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row['username'] == $row_4['username']){
										echo $row_4['email'];	
										}
										else{
											echo "";
										}
									}
									  ?>" required/></td>				
								<td><input style="margin-top:10px;" type="text" name="contact" maxlength="10" class="form-control" value="<?php 
								$sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row['username'] == $row_4['username']){
										echo $row_4['contact'];	
										}
										else{
											echo "";
										}
									} ?>"required/></td>							
								<td><input style="margin-top:10px;" type="text" name="company" class="form-control" required/></td>							
								<td><input style="margin-top:10px;" type="text" name="year" placeholder="Enter Year" class="form-control" maxlength="4" required/></td>														
								<td>
								<select style="margin-top:10px;" name="course" class="form-control" required/>
								<option value="">Course</option>
								<option value="BCA" >BCA</option>
								<option value="BBA" >BBA</option>
								<option value="B.COM" >B.COM</option>
								<option value="B.TECH(IT)" >B.TECH(IT)</option>
								<option value="B.TECH(Cs)">B.TECH(Cs)</option>
								<option value="B.TECH(Mech.)">B.TECH(Mech.)</option>
								<option value="MCA" >MCA</option>
								<option value="MBA">MBA</option>
								<option value="M.COM">M.COM</option>
								<option value="M.TECH(IT)">M.TECH(IT)</option>
								<option value="M.TECH(Cs)">M.TECH(Cs)</option>
								<option value="M.TECH(Mech.)">M.TECH(Mech.)</option>
								</select>
								</td>
								<td><input style="margin-top:10px;" class="form-control" type="text" name="desc_" placeholder="Any Details"></td>
								
								<td>&nbsp;<button style="margin-top:10px;" type="submit" name="submit_btn" class="btn btn-default" title='Add Student'>
								<span class="glyphicon glyphicon-plus-sign" style="font-size:20px; color:red"></span></button>
								</td>
							</tbody>
						</table>
						</form>
						<?php
						}
						}
						}
						?>

				</div>
			</div>
		</div>
	</div>
	
</div>
		
		<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/jquery.min.js"></script>
	
</body>
<?php
	}
		}
		
		}
		else
		{
			header('Location:logout.php');
		}

		

			include('footer.php');
		?>
</html>
