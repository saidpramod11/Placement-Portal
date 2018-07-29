<?php
	ob_start();
 session_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	$result_1 = $con->query("Select * from cmpedit_profile ");
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
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	#banner {
		color: #fff;
		text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);
		text-align: center;
		background-image:url("images/bg.jpg");
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
					<table cellspacing="0" border="0" style="margin-top:20px;">
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
	include('cindex_nav.php');
	?>

	
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">					
					
					<?php
						if(isset($_GET['id']))
						{
							$id = $_GET['id'];
							$result_1 = $con->query("Select * from stdedit_profile ");
							while($row_1 = $result_1->fetch_assoc())
						{
							if($row_1['username'] == $id){
								
					?>
                <table class="table table-hover" style="margin-left:498px; font-size:125%`	;">
					<thead>        
										<th>Resume of <?php echo ($row_1['fullname']);?></th>
										<th colspan="3" style="text-align:center">Actions</th>
					</thead>
                    <tbody>                
                       <tr> <td>  
					   <?php 
					   
						
							if($row_1['status2']==1){
							echo"<iframe src=\"uploads\Resume\profile".$id.".pdf\" style=\"height:1300px\" width=\"900px\"> </iframe>";
							}
							else{
								
							echo"<iframe src=\"uploads\Resume\sample_cv.pdf\" style=\"height:1250px\" width=\"900px\"></iframe>";
							echo("Selected Student didn't have uploaded his Resume yet");
							}

							}
							
						}
						?>
                                  </td>  
                                        <td><?php echo $row_1['university']; ?></td>
									<td>
										<a href='delete_rec.php?id=<?php echo $row_1['username']; ?>' data-toggle="tooltip" data-placement="top" title="Disable Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
									</td>
                                    </tr>
								<?php 
						} 
							
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</div>
		<?php 
			}}
	 
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
