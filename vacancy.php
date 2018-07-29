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
#main-wrapper2{
        width:60%;
        margin: 0 auto;
       background: white;
	   border-radius: 10px;
	   border: 2px solid #2c3e50;
	   font-size:130%;	   
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
			<?php
			$result_2 = $con->query("Select * from vacancy");
			while($row_2 = $result_2->fetch_assoc()){
				if($row_2['username']==$_SESSION['username']){
				?>
		
					<center>
					<table width="95%" height="60%" cellspacing="0" border="0" style="margin-top:18px":">
					
						
						<tr>
						<td width="21%" rowspan="3">
						
						</td>
						</tr>
					
						<tr>
						<td width="58%" rowspan="3">
						<div id="main-wrapper2">
						<center>
						<h2>Post/Update Vacancy Details</h2>
						<form action="#" method="post">
						<table class="table-condensed">
							<tr>
							<td>
							<label>Recruiter Name</label></td>&nbsp;
							<td>
							<input type="text" class="form-control" value="<?php echo $row_2['recruiter_name'];?>" name="recruiter_name">
							</td>
							</tr>
							<tr>
							<td>
							<label>Designation</label></td>&nbsp;
							<td>
							<input type="text" class="form-control" value="<?php echo $row_2['designation'];?>" name="designation">
							</td>
							</tr>
							<tr>
							<td>
							<label>Set Arrival Date</label></td>&nbsp;
							<td>
							<input type="date" class="form-control" value="<?php echo $row_2['arrival_date'];?>" name="arrival_date">
							</td>
							</tr>
							<tr>
							<td>
							<label>Vacancy Type</label></td>&nbsp;
							<td>
							<input type="text" class="form-control" value="<?php echo $row_2['vacancy_type'];?>" name="vacancy_type">
							</td>
							</tr><tr>
							<td>
							<label>Skill Required/Course</label></td>&nbsp;
							<td>
							<input type="text" class="form-control" value="<?php echo $row_2['rqd_skill'];?>" name="rqd_skill">
							</td>
							</tr>
							<tr>
							<td>
							<label>Related Url</label></td>&nbsp;
							<td>
							<input type="text" class="form-control" value="<?php echo $row_2['url_'];?>" name="url_">
							</td>
							</tr><br><br>
							<tr>
							<td colspan="2">
						<input name="post_btn" type="submit" style="margin-left:40%" class="btn btn-primary"  value="Update" />
						</td></tr>
						</table>
						
						</form>
							</center>
							</div>
						</td>
						</tr>
						
						<tr>
						<td width="21%" rowspan="3">
						
						</td>
						</tr>
						
					</table>
					</center>
					<?php
				}
			}
						if(isset($_POST['post_btn'])){
							
							$recruiter_name=$_POST['recruiter_name'];
							$designation=$_POST['designation'];
							$arrival_date=$_POST['arrival_date'];
							$vacancy_type=$_POST['vacancy_type'];
							$rqd_skill=$_POST['rqd_skill'];
							$url_=$_POST['url_'];
							
							$sql1="update vacancy set
							recruiter_name='".$recruiter_name."' ,
							designation='".$designation."' ,
							arrival_date='".$arrival_date."' ,
							vacancy_type='".$vacancy_type."',
							rqd_skill='".$rqd_skill."' , 
							url_='".$url_."'
							where username='".$_SESSION['username']."' ";
							if ($con->query($sql1) === TRUE)		
							{
							require_once("dbconfig/config.php");
							echo '<script type="text/javascript"> alert("Vacancy Details Updated Successfully...")</script>';
								header("Refresh:0");
							}
							else {
							echo "Error: " . $sql1 . "<br>" . $con->error;
							}
					}
					?>
			
		
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
