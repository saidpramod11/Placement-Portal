<div class="hea">
		<font color="red"><b>Add Student Placed</b></font>
	
	<form action="#" method="get">
		<input type="text" name="username" placeholder="Search Student" class="form-control" >
	
		&nbsp;<button style="margin-top:10px;" type="submit" class="btn btn-default" title='Add Student'><span class="glyphicon glyphicon-search" style="font-size:20px; color:red"></span></button>
	</form>
	</div>
	
	<?php 
		if(isset($_GET['username'])){
		if(!empty($_GET['username'])){
		$user=$_GET['username'];

		$sql="SELECT * FROM `stdedit_profile` where username='".$user."'";
		$res=$con->query($sql);
		//$res->num_rows;
		if($res->num_rows>0){
		$row=$res->fetch_assoc();
	?>
					
<form method="post" action="#">
<table class="table" >
	<thead>
		<th></th>
		<th>Full_Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Company</th>
		<th>start_year</th> 
		<th>final_year</th> 
		<th>course</th>
		<th colspan="3" style="text-align:center">Actions</th>
		
	</thead>
	<tbody>
		<td id="pfimage">
		<?php
		if($row_1['status']=1){
			echo"<img src='..\uploads/profiledefault.jpg'/>";
		}
						
		?>
		</td>
		<td><input style="margin-top:10px;" type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>" required/></td>
		<td><input style="margin-top:10px;" type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" required/></td>				
		<td><input style="margin-top:10px;" type="text" name="contact" maxlength="10" class="form-control" value="<?php echo $row['contact']; ?>"required/></td>							
		<td><input style="margin-top:10px;" type="text" name="company" class="form-control" required/></td>							
		<td><input style="margin-top:10px;" type="text" name="start_year" class="form-control" maxlength="4" required/></td>							
		<td><input style="margin-top:10px;" type="text" name="final_year" class="form-control" maxlength="4" required/></td>							
		<td><input style="margin-top:10px;" type="text" name="course" class="form-control" required/></td>					
		<td>&nbsp;<input style="margin-top:10px;" type="submit" name="submit_btn" class="btn btn-default" title='Add Student'><span class="glyphicon glyphicon-plus-sign" style="font-size:20px; color:red"></span></input></td>
	</tbody>
</table>
</form>
<?php
	
	if(isset($_POST['submit_btn']){
		
	$username=$_POST['$user']
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$company=$_POST['company'];
	$start_year=$_POST['start_year'];
	$final_year=$_POST['final_year'];
	$course=$_POST['course'];
		
	if ($username!='' AND $fullname!=''  AND $email!='' AND $contact!=''){
			$query= " select * from std_placed WHERE username='$username'";
			$query_run = mysqli_query($con,$query);//$query_run = con->query($query);
			 
			if(mysqli_num_rows($query_run)>0)//if($query_run->num_rows > 0 ) 
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("Student Already present.. Check Again")</script>';
			}
			else{
				echo $sql="insert into std_placed(username,fullname,email,contact,company,start_year,final_year,course) values('".$username."','".$fullname."','".$email."','".$contact."','".$company."','".$start_year."','".$final_year."','".$course."')";

				if ($con->query($sql) === TRUE){
					require_once("add_std.php");
					echo '<script type="text/javascript"> alert("Student Added Successfully")</script>';
							echo "<script> location.href = 'add_std.php';</script>";
				} 
				else {
					echo "Error: " . $sql . "<br>" . $con->error;
				}
			}
	}
}
?>
<?php
						}
					}
				}
?>
