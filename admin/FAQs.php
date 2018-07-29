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
	
<div id="page-inner">
		
			<center>	
				<form  action="AboutUs.php" method = "post" enctype="multipart/form-data">
				
		
				
						<?php 
						$result_1 = $con->query("Select * from static where static_id=4");
						while($row_1 = $result_1->fetch_assoc())
						{

						?>



						<?php
						if($row_1['status']==1){
						echo"<iframe src=\"uploads\FAQs\profile".$_SESSION['username'].".pdf\"  style=\"height:100%\" width=\"900px\"> </iframe>";
						}
						else{
						echo"<iframe src=\"uploads\profiledefault.pdf\" style=\"height:100%\" width=\"900px\"></iframe>";
						}
						?>


						<input type="file" class="btn btn-default" name="file">

						<button type="submit" class="btn btn-info" name="submit_image" />Upload</button>
						<?php
						

							if(isset($_POST['submit_image']))
							{
							$file=$_FILES['file'];
							$id=$_SESSION['username'];
							$fileName=$_FILES['file']['name'];
							$fileTmpName=$_FILES['file']['tmp_name'];
							$fileSize=$_FILES['file']['size'];
							$fileError=$_FILES['file']['error'];
							$fileType=$_FILES['file']['type'];

							$fileExt=explode('.',$fileName);
							$fileActualExt=strtolower(end($fileExt));
							
							$allowed=array('pdf');
							if(in_array($fileActualExt, $allowed)){
								if($fileError==0){
									if($fileSize<500000){ 
										$fileNameNew="profile".$_SESSION['username'].".".$fileActualExt;
										$fileDestination='uploads/AboutUs/'.$fileNameNew;
										move_uploaded_file($fileTmpName, $fileDestination);
										$sql="UPDATE static SET status=1 WHERE static_id=4";
										$result=mysqli_query($con,$sql);
										
										header("Refresh:0");
									}
									else{
										echo('The Uploaded Image is larger than expected. The maximum allowed image size should be less than 50kb');
									}
								}
								else{
										echo('Problem Uploading your Image');
								}
								
							}
							else{
								echo('not a perfect type');
							}
							}
	

						}
						?>
				
						</form>
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
