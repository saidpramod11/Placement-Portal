<?php
	ob_start();
 session_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	$result_1 = $con->query("Select * from cmpedit_profile  ");
	$result_2 = $con->query("Select * from cmp_login  ");
	$result_3 = $con->query("Select * from vacancy");
	while($row_1 = $result_1->fetch_assoc() AND $row_2 = $result_2->fetch_assoc() AND $row_3 = $result_3->fetch_assoc())
	{ 
		if($row_1['username']==$_SESSION['username']){
			$options3=$row_1['state'];
			
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Portal</title>
    
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

.pfimage{
	width: 200px;
	padding: 10px;
	
	margin-left: 50px;
	overflow: hidden;	
	}
	
.pfimage img {
	width: 150px;
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

<body style="background-image:url('images/15.jpg'); background-size:100%;">

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
	include('cindex_nav.php');
?>	
			
				
			<div id="main-wrap">
				<form  action="#" method = "post" enctype="multipart/form-data">
				
					<table  width="500px" style="margin-left:35%; border-radius:5%; background-color:white;"><tr><td>
					<table class="table-condensed" width="500px" style=" font-size:120%; margin:40px 40px 40px 40px ; " border="0">
					<thead>
					<center><h2>
							<font color="blue">
								<b>Update Company Details</b>
							</font>
							</h2>
					</center>
					
					
					</thead>
						<tbody>
							
					
						<tr>
							
							
							<td colspan="2"><label>Username:</label></td>
							<td colspan="1"><input name="username" type="text" class="form-control" value="<?php echo $row_1['username']; ?>" disabled="disabled"/></td>
						</tr>
						<tr>
						<td colspan="2">
							<label>Company's Name:</label>
							</td>
							<td>
							<input name="company" type="text" class="form-control" placeholder="Enter company Name" value="<?php echo $row_1['company']; ?>" required/>
							</td>
						</tr>
						<td colspan="2">
							<label>Established:</label>
							</td>
							<td>
							<input name="established" type="date" class="form-control" value="<?php echo $row_1['established']; ?>" required/>
							</td>
						</tr>
					
						<tr>
						<td colspan="2">
						<label>Recruiter's Name :</label>
						</td>
						<td>
						<input name="recruiter_name" type="text" class="form-control"  placeholder="Enter your name" value="<?php echo $row_3['recruiter_name']; ?>" required/></td>
						</tr>
						
						<tr>
							<td colspan="2">
							<label>Designation</label>
							</td>
							<td>
							<input name="designation" type="text" class="form-control"  value="<?php echo $row_3['designation']; ?>" required/></td>
						</tr>
						
						<tr>
							<td colspan="2"><label >Email id:</label></td>
							<td><input name="email" type="email"  class = "form-control" placeholder = "eg..abc@gmail.com" value="<?php echo $row_2['email']; ?>" required/></td>
						</tr>
						
						<tr>
						  <td colspan="2"><label> Website:</label></td>
						  <td><input name="url" class="form-control" placeholder="Enter your Website Url" value="<?php echo $row_1['url']; ?>" ></td>
						  </tr>
				
						
						<tr>
							<td colspan="2">
							<label>Contact no.:</label>
							</td>
							<td>
							<input name="contact" type="text" class="form-control" maxlength="10" placeholder="+91" value="<?php echo $row_2['contact']; ?>" required/>
							</td> 
						</tr>
						
						<tr>
							<td colspan="2">
							<label>State :</label>
							</td>
							
							<td>
								<select name="state" class="form-control">
								<option value="">Select State</option>
								<option value="Andhra Pradesh" <?php if($options3=="Andhra Pradesh") echo'selected="selected"';?>>Andhra Pradesh</option>
								<option value="Arunanchal Pradesh" <?php if($options3=="Arunanchal Pradesh") echo'selected="selected"';?>>Arunanchal Pradesh</option>
								<option value="Assam" <?php if($options3=="Assam") echo'selected="selected"';?>>Assam</option>
								<option value="Bihar" <?php if($options3=="Bihar") echo'selected="selected"';?>>Bihar</option>
								<option value="Chattisgarh" <?php if($options3=="Chattisgarh") echo'selected="selected"';?>>Chattisgarh</option>
								<option value="Delhi" <?php if($options3=="Delhi") echo'selected="selected"';?>>Delhi</option>
								<option value="Goa" <?php if($options3=="Goa") echo'selected="selected"';?>>Goa</option>
								<option value="Gujarat" <?php if($options3=="Gujarat") echo'selected="selected"';?>>Gujarat</option>
								<option value="Haryana" <?php if($options3=="Haryana") echo'selected="selected"';?>>Haryana</option>
								<option value="Himachal Pradesh" <?php if($options3=="Himachal Pradesh") echo'selected="selected"';?>>Himachal Pradesh</option>
								<option value="Jammu And Kashmir" <?php if($options3=="Jammu And Kashmir") echo'selected="selected"';?>>Jammu and Kashmir</option>
								<option value="Jharkhand" <?php if($options3=="Jharkhand") echo'selected="selected"';?>>Jharkhand</option>
								<option value="Karnataka" <?php if($options3=="Karnataka") echo'selected="selected"';?>>Karnataka</option>
								<option value="Kerala" <?php if($options3=="Kerala") echo'selected="selected"';?>>Kerala</option>
								<option value="Madhya Pradesh" <?php if($options3=="Madhya Pradesh") echo'selected="selected"';?>>Madhya Pradesh</option>
								<option value="Maharashtra" <?php if($options3=="Maharashtra") echo'selected="selected"';?>>Maharashtra</option>
								<option value="Manipur" <?php if($options3=="Manipur") echo'selected="selected"';?>>Manipur</option>
								<option value="Meghalaya" <?php if($options3=="Meghalaya") echo'selected="selected"';?>>Meghalaya</option>
								<option value="Mizoram" <?php if($options3=="Mizoram") echo'selected="selected"';?>>Mizoram</option>
								<option value="Nagaland" <?php if($options3=="Nagaland") echo'selected="selected"';?>>Nagaland</option>
								<option value="Odisha" <?php if($options3=="Odisha") echo'selected="selected"';?>>Odisha</option>
								<option value="Punjab" <?php if($options3=="Punjab") echo'selected="selected"';?>>Punjab</option>
								<option value="Rajasthan" <?php if($options3=="Rajasthan") echo'selected="selected"';?>>Rajasthan</option>
								<option value="Sikkim" <?php if($options3=="Sikkim") echo'selected="selected"';?>>Sikkim</option>
								<option value="Tamil Nadu" <?php if($options3=="Tamil Nadu") echo'selected="selected"';?>>Tamil Nadu</option>
								<option value="Telangana" <?php if($options3=="Telangana") echo'selected="selected"';?>>Telangana</option>
								<option value="Tripura" <?php if($options3=="Tripura") echo'selected="selected"';?>>Tripura</option>
								<option value="Uttar Pradesh" <?php if($options3=="Uttar Pradesh") echo'selected="selected"';?>>Uttar Pradesh</option>
								<option value="Uttarakhand" <?php if($options3=="Uttarakhand") echo'selected="selected"';?>>Uttarakhand</option>
								<option value="West Bengal" <?php if($options3=="West Bengal") echo'selected="selected"';?>>West Bengal</option>
								</select>
							</td>
						</tr>	 
     
						<tr>
							<td colspan="2">
							<label>City :</label>
							<td> 
							<input name="city" type="text" class="form-control" maxlength="80" value="<?php echo $row_1['city']; ?>" />
							</td>
							</td>
						</tr>	
						
						<tr>
							<td colspan="2">
							<label>Postal code/Zip code:&nbsp;&nbsp;</label>
							</td>
							<td>
							<input name="pincode" type="number" class="form-control" maxlength="6"  value="<?php

							if($row_1['pincode']!=0){
								echo $row_1['pincode']; 
							}
							else{
								echo "";
							} ?>" required/>
							</td>
						</tr>

						<tr>
							<td colspan="2"><label>Address :</label></td>
							<td><input name="address" type="text" class="form-control" maxlength="80" value="<?php echo $row_1['address']; ?>" /></td>
						</tr>
						
						<tr style="margin-top:50px;">
							
							<td colspan='3'>
							<input type="submit" name="submit" class="styled-button-8" value="Update" style="margin-left:45%;"></td>
						</tr>						
						 
					
						<?php
	if(isset($_POST['submit']))	
	{
		$company=$_POST['company'];
		$recruiter_name=$_POST['recruiter_name'];
		$designation=$_POST['designation'];
		$established=$_POST['established'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];	
		$url=$_POST['url'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$address=$_POST['address'];
		
		
		$sql1="update cmp_login set
		email='".$email."' ,
		contact='".$contact."' where username='".$_SESSION['username']."' ";
		$sql3="update vacancy set
		recruiter_name='".$recruiter_name."' ,
		designation='".$designation."' where username='".$_SESSION['username']."' ";
		$sql2="update cmpedit_profile set 
		
		company='".$company."' , 
		
		established='".$established."',
		
		state='".$state."' , 
		city='".$city."' , 
		pincode='".$pincode."' ,
		address='".$address."',
		url='".$url."' 
		
		
		where username='".$_SESSION['username']."' ";
			if ($con->query($sql1) === TRUE AND $con->query($sql2) === TRUE AND $con->query($sql3) === TRUE)		{
			require_once("dbconfig/config.php");
			echo '<script type="text/javascript"> alert("Company Profile Updated Successfully...")</script>';
			header("Refresh:0");
			} else {
			echo "Error: " . $sql2 . "<br>" . $con->error;
			}
	}

						
	?>	</tbody></table></td></tr></table>
					</form>
					
					
				</div>
			</center>
		</div>
		 <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/jquery.min.js"></script>
				
		
<?php 
}}}
else
{
header('Location:logout.php');
}
?>
</body>
<?php
	include('footer.php');
?>
</html>
