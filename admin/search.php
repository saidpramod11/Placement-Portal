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

<body style="background-image:url('images/15.jpg'); background-size:100%;">
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

			<?php
				include('admin_nav.php');
			?>
			
<div class="container-fluid">
<?php
if(isset($_GET['$query']& $_GET['type']){
$query = $_GET['query'];
$type = $_GET['type'];
$min_length = 3;
if(strlen($query) >= $min_length){
	if($type=='student'){
	$query = htmlspecialchars($query);
		$query = mysqli_real_escape_string($con,$query);
			$sql = "SELECT * FROM stdedit_profile WHERE (`username` LIKE '%".$query."%'OR `fullname` LIKE '%".$query."%'
								OR `email` LIKE '%".$query."%'
									OR `graduation` LIKE '%".$query."%')";
		$qry = mysqli_query($con,$sql);
	if(mysqli_num_rows($qry) > 0){
?>
<div class="col-md-10 col-md-offset-1">
<div class="container-fluid" style="margin-top:50px;">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
				<table class="table table-hover">
					<thead>
					<tr><th>Match Results Are:...</th></tr>
						<tr>
							<th>Username</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Course</th>
							<th></th>
						</tr>
					</thead>
				<?php
				while($rec=mysqli_fetch_array($qry))
				{
				?>
				<tbody>
					<tr>
						<td>
							<?php echo $rec['username'] ?>
						</td>
						<td>
							<?php echo $rec['fullname'] ?>
						</td>
						<td>
							<?php echo $rec['email'] ?>
						</td>
						<td>
							<?php echo $rec['graduation'] ?>
						</td>
						
						<td>
							<a href='view_details.php?id=<?php echo $rec['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Details"><span class="glyphicon glyphicon-user" style="font-size:20px; color:blue; "></span></a>
						</td>									
						<td>
							<a href='resumes.php?id=<?php echo $rec['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Resume"><span class="glyphicon glyphicon-list-alt" style="font-size:20px; color:blue; "></span></a>
						</td>
						<td>
							<a href='update_std.php?id=<?php echo $rec['username']; ?>'data-toggle="tooltip" data-placement="top" title="Update Information"><span class="glyphicon glyphicon-edit" style="font-size:20px; color:black;"></span></a>
						</td>
						<td>
							<a href='delete_rec.php?id=<?php echo $rec['username']; ?>' data-toggle="tooltip" data-placement="top" title="Delete Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
						</td>
										
						
					</tr>
				</tbody>
			<?php
				}
				}
				else 
					{
						echo "<h2 style='margin-left:600px;margin-top:200px;'>No results<h2>";
					}
				}
				if($type=='company'){
					$query = htmlspecialchars($query);
					$query = mysqli_real_escape_string($con,$query);
					$sql = ("SELECT * FROM cmpedit_profile WHERE (`username` LIKE '%".$query."%' OR `company` LIKE '%".$query."%' OR `representative` LIKE '%".$query."%' OR `designation` LIKE '%".$query."%')");
				$qry = mysqli_query($con,$sql);
					if(mysqli_num_rows($qry) > 0){
				?>
				<div class="col-md-10 col-md-offset-1">
				<div class="container-fluid" style="margin-top:50px;">
					<div class = "row">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Username</th>
											<th>Company</th>
											<th>Representative</th>
											<th>Designation</th>
											<th></th>
										</tr>
									</thead>
				<?php
				while($rec=mysqli_fetch_array($qry))
				{
				?>
				<tbody>
					<tr>
						<td>
							<?php echo $rec['username'] ?>
						</td>
						<td>
							<?php echo $rec['company'] ?>
						</td>
						<td>
							<?php echo $rec['representative'] ?>
						</td>
						<td>
							<?php echo $rec['designation'] ?>
						</td>
						<td>
						<a href='cmp_view_details.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Details"><span class="glyphicon glyphicon-user" style="font-size:20px; color:blue; "></span></a>
						</td>									
						
						<td>
							<a href='update_cmp.php?id=<?php echo $row['username']; ?>'data-toggle="tooltip" data-placement="top" title="Update Information"><span class="glyphicon glyphicon-edit" style="font-size:20px; color:black;"></span></a>
						</td>
						<td>
							<a href='delete_cmp_rec.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="Delete Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
						</td>
					</tr>
				</tbody>
			<?php
				}
				}
				else 
					{
						echo "<h2 style='margin-left:600px;margin-top:200px;'>No results<h2>";
					}
				}
				else{
					echo "Please Select User Type"
				}
				}
				else
					{
						echo "Minimum length is ".$min_length;
					}
}
			?>
			</table>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
		<div class = "col-md-4 col-md-offset-1">
			<a href = "homepage.php"><input type="button" value="Back" name="cancel" class="btn btn-default"/></a>
		</div>	
</div>
			<?php 
	}
	}
		}
		else
		{
			header('Location:logout.php');
		}

		?>
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
			include('footer.php');
		?>
		
</html>
