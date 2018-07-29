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
			<?php
				include('admin_nav.php');
			?>
	</form>

	
<div id="page-inner">
		
			<center>	
				<form  action="ContactUs.php" method = "post" enctype="multipart/form-data">
				
		
				
						<?php 
						$result_1 = $con->query("Select * from static where static_id=4 ");
						while($row_1 = $result_1->fetch_assoc())
						{

						?>



						<?php
						if($row_1['status']==1){
						echo"<iframe src=\"uploads\ContactUs\profile".$_SESSION['username'].".pdf\"  style=\"height:100%\" width=\"900px\"> </iframe>";
						}
						else{
						echo"<iframe src=\"uploads\profiledefault.pdf\" style=\"height:100%\" width=\"900px\"></iframe>";
						}
						?>


						<input type="file" class="inputvaluess" name="file">
						<button type="submit" id="signup_btn" name="submit_image" />Upload</button>
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
				$fileDestination='uploads/ContactUs/'.$fileNameNew;
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
