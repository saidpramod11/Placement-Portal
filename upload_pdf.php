<?php
include_once('dbconfig/config.php');
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
				$fileDestination='uploads/Resume/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql="UPDATE stdedit_profile SET status2=1 WHERE username='$id'";
				$result=mysqli_query($con,$sql);
				header("location: upload_resume.php?uploadsuccess");
				header("Refresh:0");
			}
			else{
				echo('The Uploaded PDF is larger than expected. The maximum allowed image size should be less than 500kb');
			}
		}
		else{
				echo('Problem Uploading your Resume');
		}
		
	}
	else{
		echo('The Resume should be in pdf form... Only pdf extension allowed');
	}
	}
	?>