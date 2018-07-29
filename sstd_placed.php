<?php
	
 session_start();
 ob_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	$result_1 = $con->query("Select * from stdedit_profile  ");
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
#maint img{
	width: 240px;
	height:190px;
	margin:10px;	
}
#maint{
    width:70%;
	height:50%;
	
    margin: 0 0 0 0;
    background: white;;
	border-radius:10px;
	font-size:120%;
	opacity:0.85;
	
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

<body style="background-image:url('images/14.jpg'); background-size:100%;">
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
				include('sindex_nav.php');
			?>
						
						<!--onClick="javascript:popUp('usertype.php')"-->
						
					<center>
				<table id="maint" class="table" border="0" cellspacing="14">
				<tr><td>
					<table class="table" style="font-size:125%"  width="45%" cellspacing="12" border="0">
								<tr><td colspan="3">
								<h1 style="color:blue">Placed Student Detail</h1>
								</td></tr>
							<?php 
							if(isset($_GET['id']))
						{
							$id = $_GET['id'];
							$result_1 = $con->query("Select * from std_placed where username='$id'");
							while($row_1 = $result_1->fetch_assoc())
							{ 	
							?>
								<tr>
								<td colspan="2"><label><?php echo $row_1['fullname']; ?></label></td>
								<td id="pfimage" rowspan="4" width="20%">
									
									<?php
									$result = $con->query("Select * from stdedit_profile where username='$id'");
									while($row = $result->fetch_assoc())
									{ 
									if($id==$row['username'] AND $row['status']==1){
									echo"<img src='uploads/profile".$id.".jpg'>";
									}
									else{
										echo"<img src='uploads/profiledefault.jpg'>";
									}
									}
									?>
									
								
								</td>
								</tr>	

								<tr>
								<td colspan="2"><label><?php echo $row_1['email']; ?></label></td>
								</tr>
								
								<tr>
								<td colspan="2"><label>+91<?php echo $row_1['contact']; ?></label></td>
								</tr>

								<tr>
								<td colspan="2"><label>Company Selected :* <?php echo $row_1['company']; ?></label></td>
								</tr>

								<tr>
								<td colspan="3" height="70px"><label>Discription: <?php echo $row_1['desc_']; ?><hr/></label>
								</td>
								</tr>
							<?php 
							}
						}							
							?>
							</table><td><tr></table>
					</center>
					
						</center>
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
