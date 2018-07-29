<?php
	
 session_start();
 ob_start();
 include('dbconfig/config.php');	

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
.avatar{ 
	width: 150px;
	text-align:center;
	border-radius:30%;
}
#main-wrapper2{
        width:600px;
        margin: 0 auto;
       background: white;
	   border-radius: 10px;
	   border: 2px solid #2c3e50;
	   font-size:130%;
	   
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
				include('index_nav.php');
			?>
						<!--onClick="javascript:popUp('usertype.php')"-->
						
					
							
		<div id="main-wrapper2">
		<table width="80%"  border="0" style="margin-left:10%;"><tr><td>
			<center><h2>Company Registration</h2></center>
			
				<center>
					<img src="imgs/new.jpg" class="avatar"/>
				</center></br>

				<form class="myform" action="cmpregister.php" method = "post">
						<table width="100%" class="table-condensed" style=" font-size:110%" border="0">
							
							<tr>
							<td><label>Username</label></td>
							<td><input name="username" type="text" class="form-control" placeholder="Enter Your Username" required/></td>
							</tr>
							
							<tr>
							<td><label>Password</label></td>
							<td><input name="password" type="password" class="form-control" placeholder="Enter Your Password" required/></td>
							</tr>
							
							<tr>
							<td><label>Confirm_Password</label></td>
							<td><input name="cpassword" type="password" class="form-control" placeholder="Confirm Your Password" required/></td>
							</tr>
							
							<tr>
							<td>
							<label>Email Id :</label>
							</td>
							<td>
							<input name="email" type="email" class="form-control" maxlength="80" placeholder="eg.,@gmail.com" required/>
							</td>
							</tr>
							
							<tr>
							<td><label>Contact no.:&nbsp;&nbsp;<b>+91<b></label></td>
							<td><input name="contact" type="number" class="form-control" maxlength="10" placeholder="Enter Your Mobile No." required/></td>
							</tr>
							
							<tr>
							<td>
							<label>City:</label>
							</td>
							<td>
							<input name="city" type="text" class="form-control" placeholder="Enter Your City" required/>
							</td>
							</tr>
							
						</table>
							
							
				
							<div align = "right"><input type="reset" class="btn btn-success" value="Reset"/></div>
							<input name="submit_btn" type="submit" onclick="check(this.form)" class="btn btn-primary" value="Sign Up"/><br><br>	
			</form>	
			</table>	
		</div>
						
			
		<?php
			if(isset($_POST['submit_btn']))
			
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					$cpassword=$_POST['cpassword'];
					$email=$_POST['email'];
					$contact=$_POST['contact'];
					$city=$_POST['city'];
					
	
						if ($username==''){
							echo'<script>alert("enter your username")</script>';
						}
						
						if ($password==''){
							echo'<script>alert("enter your password")</script>';
						}
						
						if ($cpassword==''){
							echo'<script>alert("enter your password")</script>';
						}
						
						if($password!=$cpassword) 
						{
							echo'<script>alert("Password And Confirm Password Does Not Match Try Again")</script>';
						}
						
						if ($email==''){
							echo'<script>alert("enter your email")</script>';
						}
						
						if ($contact==''){
							echo'<script>alert("Select your Contact No.")</script>';
						}
						
						if ($city==''){
							echo'<script>alert("Enter your City")</script>';
						}
						
						if ($username!='' AND $password==$cpassword  AND $email!='' AND $contact!='' AND $city!=''){
								$query= " select * from cmp_login WHERE username='$username'";
								$query_run = mysqli_query($con,$query);//$query_run = con->query($query);
								 
								if(mysqli_num_rows($query_run)>0)//if($query_run->num_rows > 0 ) 
								{
									//there is already a user with the same username
									echo '<script type="text/javascript"> alert("Username already exits.. Try Another Username")</script>';
								}
						
								else
								{
							$query1="INSERT INTO `cmp_login`(`username`, `password`, `email`, `contact`) VALUES 
								('$username','$password','$email','$contact')";
$query2="INSERT INTO `cmpedit_profile`(`username`, `company`, `established`, `state`, `city`, `pincode`, `address`, `url`) VALUES ('$username','','','','$city','','','')";
$query3="INSERT INTO `vacancy`(`username`, `recruiter_name`, `designation`, `arrival_date`, `vacancy_type`, `rqd_skill`, `url_`) VALUES ('$username','','','','','','')";
								
								$query_run = mysqli_query($con,$query1);
								$query_ = mysqli_query($con,$query2);
								$query_r = mysqli_query($con,$query3);
							
								if($query_run AND $query_ AND $query_r)
									{
										echo '<script type="text/javascript"> alert("You Have Registered Successfully... Go To Login Page")</script>';
										echo "<script> location.href = 'login.php';</script>";
									}
									else
									{
										echo '<script type="text/javascript"> alert("Error!")</script>';
									}
								}
						}	
						else
						{
							echo '<script type="text/javascript"> alert("Unable To Register!")</script>';
						}
				}
				?>		
	
			<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/jquery.min.js"></script>
	
</body>
		<?php
			include('footer.php');
		?>
		
</html>

		