<?php
	ob_start();
 session_start();
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

.pfimage{
	width: 200px;
	padding: 10px;
	
	margin-left: 50px;
	overflow: hidden;	
	}
	
.pfimage img {
	width: 150px;
}
marquee{
	color:white;
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
			<style type="text/css">
.styled-button-8 {
	background: #25A6E1;
	background: -moz-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#25A6E1),color-stop(100%,#188BC0));
	background: -webkit-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	background: -o-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	background: -ms-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
	width:100px;
	height:40px;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #1A87B9
}        </style>
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
		<?php
						if(isset($_GET['id']))
						{
							$id = $_GET['id'];
							$result= $con->query("Select * from std_placed ");
							while($row= $result->fetch_assoc())
						{
							if($row['username'] == $id){
								
					?>
			<div id="main-wrap">
				<form  action="#" method = "post" enctype="multipart/form-data">
				
					<table class="table-condensed" style="margin-left:500px;">
					<thead>
					<center><h2>
							<font color="blue">
								<b>Update Student Placed Details</b>
							</font>
							</h2>
					</center>
					<a href="selected.php"><input type = "button" value="Back" class="styled-button-8" style="margin-left:100px;"/></a>
					
					</thead>
					
					<tbody>
					 <?php 
								$options1=$row['course'];
			
				?>
					<tr><td colspan ="4"><h3>Basic Details- <hr/></h3></td></tr>
						
						<tr>
							<td colspan="2"><label>Username:</label></td>
							<td colspan="1"><input name="username" type="text" class="form-control" value="<?php echo $row['username']; ?>" disabled="disabled"/></td>
						</tr>
						<tr>
							<td colspan="2"><label>Full_Name:</label></td>
							<td colspan="1"><input name="fullname" type="text" class="form-control" value="<?php echo $row['fullname']; ?>"  ></td>
							<td rowspan="3">
							<div class="pfimage">
							<?php
								$sql2="Select * from stdedit_profile";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row['username'] == $row_4['username']){
											if($row_4['status']==1){
												echo"<img src='..\uploads/profile".$id.".jpg?'".mt_rand().">";
											}
											else{
												echo"<img src='..\uploads/profiledefault.jpg'>";
											}
										}
									}
							?>
							</div>
							</td>
								
						</tr>
						 <tr>
							 <td colspan="2"><label>Email Id :</label></td>
							<td colspan="1">
							<input name="email" type="text" class="form-control" maxlength="80" value="<?php echo $row['email']; ?>" /></td>
						</tr>
						
						
						<tr>
							<td colspan="2">Contact no.:&nbsp;&nbsp;<b>+91</td>
							<td colspan="1"><input name="contact" type="text" class="form-control" maxlength="10" value="<?php echo $row['contact']; ?>" /></td>
						</tr>
							 					
						<tr>
					   
						<tr>
							<td colspan="1"><label>Company:&nbsp;</label></td>
							<td colspan="1"><input name="company" type="text" class="form-control" maxlength="5" value="<?php echo $row['company']; ?>"/></td>
						</tr>
						
						
                        <tr>
							<td colspan="1"><label>YEAR:&nbsp;</label></td>
                           <td colspan="1"><input name="year" type="text" class="form-control" maxlength="5" value="<?php echo $row['year']; ?>" /></td> 
						</tr>
						

						<tr>
							<td colspan="1"><label>Graduation:&nbsp;</label></td>
							<td colspan="1"><select name="course" class="form-control"  >
								<option value="" >Select</option>
								<option value="BCA" <?php if($options1=="BCA") echo'selected="selected"';?> >BCA</option>
								<option value="BBA" <?php if($options1=="BBA") echo'selected="selected"';?> >BBA</option>
								<option value="B.COM" <?php if($options1=="B.COM") echo'selected="selected"';?> >B.COM</option>
								
								<option value="B.TECH(IT)" <?php if($options1=="B.TECH(IT)") echo'selected="selected"';?> >B.TECH(IT)</option>
								<option value="B.TECH(Cs)"<?php if($options1=="B.TECH(Cs)") echo'selected="selected"';?> >B.TECH(Cs)</option>
								<option value="B.TECH(Mech.)"<?php if($options1=="B.TECH(Mech.)") echo'selected="selected"';?> >B.TECH(Mech.)</option>
								
								<option value="MCA" <?php if($options1=="MCA") echo'selected="selected"';?> >MCA</option>
								<option value="MBA"<?php if($options1=="MBA") echo'selected="selected"';?> >MBA</option>
								<option value="M.COM" <?php if($options1=="M.COM") echo'selected="selected"';?> >M.COM</option>
								<option value="M.TECH(IT)" <?php if($options1=="M.TECH(IT)") echo'selected="selected"';?> >M.TECH(IT)</option>
								<option value="M.TECH(Cs)"<?php if($options1=="M.TECH(Cs)") echo'selected="selected"';?> >M.TECH(Cs)</option>
								<option value="M.TECH(Mech.)"<?php if($options1=="M.TECH(Mech.)") echo'selected="selected"';?> >M.TECH(Mech.)</option>
								</select>
							</td> 
						</tr>
			
						<tr>
							<td><label>Discription/Details :</label></td>
							<td><input name="desc_" type="text" class="form-control" maxlength="80" value="<?php echo $row['desc_']; ?>" /></td>
						</tr>
						<tr><td colspan="4">
						<input type = "submit" value="Update" name="submit" class="styled-button-8" style="margin-left:45%;"/>
						</td></tr>
						<?php
					}

				}
						
	
						?>
					
					</tbody>			 
					</table>	 
					</form>	
						<?php
	if(isset($_POST['submit']))
							{
		$username=$_GET['id'];
		$fullname=$_POST['fullname'];
	
		$email=$_POST['email'];
		
		$contact=$_POST['contact'];
		
		
		$company=$_POST['company'];
		$year=$_POST['year'];
		$course=$_POST['course'];
		$desc_=$_POST['desc_'];
		

		$sql="update std_placed set 
		
		fullname='".$fullname."' , 
		 
		email='".$email."' , 
		
		contact='".$contact."' ,
		
		
		
		company='".$company."' , 
		year='".$year."',
		course='".$course."',
		
		desc_='".$desc_."'
		where username='".$username."' ";
								if ($con->query($sql) === TRUE)		{
								require_once("..\dbconfig/config.php");
								echo '<script type="text/javascript"> alert("Student Details Updated Successfully")</script>';
								header("Refresh:0");
								} else {
								echo "Error: " . $sql . "<br>" . $con->error;
								}
							}
						?>
					
					
					<?php 
						}else{
						echo "No record Found";
						}
					} ?>
				</div>
			</center>
		</div>
	<footer>
		<?php
			include('footer.php');
		?>
	</footer>

<?php 
}}
else
{
header('Location:logout.php');
}
?>
</body>
</html>
