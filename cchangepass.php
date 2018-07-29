<?php
	
 session_start();
 ob_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	$result_1 = $con->query("Select * from cmpedit_profile  ");
	while($row_1 = $result_1->fetch_assoc())
	{ 
		if($row_1['username']==$_SESSION['username']){
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
.avatar{ 
	width: 150px;
	text-align:center;
	border-radius:30%;
}

marquee{
	color:white;
}

#main-wrapper2{
        width:600px;
        margin: 0 auto;
       background: white;
	   border-radius: 10px;
	   border: 2px solid #2c3e50;
	   font-size:130%;	   
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
				include('cindex_nav.php');
			?>
						
						<!--onClick="javascript:popUp('usertype.php')"-->
						
					
					<table width="95%" height="60%" cellspacing="0" border="0" style="margin-top:18px":"">
						<tr>
						<td width="31%" rowspan="3">
						<?php 
						//include('enquiry.php');
						?>
						
						
						</td>
						</tr>
					
						<tr>
						<td width="38%" rowspan="3">
						<div id="main-wrapper2">
						<?php
				
				$count=$msg="";
				if(isset($_POST['submit']))
				{
					include("dbconfig/config.php");
					$username=$_SESSION['username'];
					$oldpass=$_POST['oldpass'];
					$newpass=$_POST['newpass'];
					$conpass=$_POST['conpass'];

					$query_check="select * from cmp_login where password='$oldpass' and username='$username' ";
					$result=mysqli_query($con,$query_check);
					$count=mysqli_num_rows($result);
					if($count > 0)
					{
							$query="update cmp_login set password='$newpass' where password='$oldpass' and username='$username' ";
							$res=mysqli_query($con,$query);
							if($res)
							{
								echo"<script>alert('Password Updated Successfully')</script>";
							}
					}
					else
					{
						$msg="Old Password Is Incorrect";
					}
				}
				?>	
							
								<center>
								<center><h2>Change Password</h2></center>

				<center>
					<img src="imgs/new.jpg" class="avatar"/>
				</center></br>
				<center>
				<form name="carform" action="" method="post" enctype="multipart/form-data" onsubmit="return validation()">
								  
					<table cellspacing="10">
						<tr>
						<td>
						<label><b>Old Password:</b></label>
						</td>
						<td>
						<input type="password" name="oldpass" class="form-control" placeholder="Enter Your Username" required/></br>
						</td>
						</tr>
						<tr>
						<td>
						<label><b>New Password:</b></label>
						</td>
						<td>
						<input type="password" name="newpass" class="form-control" placeholder="Enter Your Password" required/></br>
						</td>
						</tr>
						
						<tr>
						<td>
						<label><b>Password:</b></label>
						</td>
						<td>
						<input type="password" name="conpass" class="form-control" placeholder="Enter Your Password" required/></br>
						</td>
						</tr>
					
						<tr>
						<td width='200' height=" 0 auto" align='center' colspan='2'>
						<font color='red'>
						<?php 
							echo"$msg"; 
						?>
						</font>
						</td>
						</tr>
						
					</table>
						<div>
						<input name="submit" type="submit" class="btn btn-primary"  value="Submit" />
						</div>
						</form>
								</center>
					</div>
						
						</td>
						</tr>
						
						
						<tr>
						<td width="31%" rowspan="3">
						
						</td>
						</tr>
					</table>
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/jquery.min.js"></script>
	
</body>
		<?php
			include('footer.php');
		?>
		
</html>
