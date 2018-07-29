<?php
	ob_start();
 session_start();
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
    <title>Admin_Panel</title>
    
	<!-- BOOTSTRAP STYLES-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript">
        function PrintDiv() {
            var contents = document.getElementById("dvContents").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "relative";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>Placement Portal</title>');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
    </script>
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


	
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<center><h2>
							<font color="blue">
								<b>Students Registration</b>
							</font>
							</h2>
					</center>
				
<table class="table-condensed"><tr><td>				
				<form action="#" method="POST">
<tr><td>				
				<label>Course:&nbsp;</label></td>
							<td><select name="graduation" class="form-control"  required/>
								<option value="" >Select</option>
								<option value="BCA" >BCA</option>
								<option value="BBA" >BBA</option>
								<option value="B.COM" >B.COM</option>
								
								<option value="B.TECH(IT)" >B.TECH(IT)</option>
								<option value="B.TECH(Cs)">B.TECH(Cs)</option>
								<option value="B.TECH(Mech.)">B.TECH(Mech.)</option>
								<option value="MCA">MCA</option>
								<option value="MBA">MBA</option>
								<option value="M.COM">M.COM</option>
								<option value="M.TECH(IT)">M.TECH(IT)</option>
								<option value="M.TECH(Cs)">M.TECH(Cs)</option>
								<option value="M.TECH(Mech.)">M.TECH(Mech.)</option>
							</select></td>
							
				<td><input type="text" class="form-control" placeholder="Enter Year" maxlength="4" name="year_of_passing3" required/></td>
				<td><input type="submit" class="btn btn-primary" value="Search" name="search"> </td> 
</td></tr></form>
</td></tr></table>				
						
							
				<form action="std_details.php" method="POST">
				
						<div id="dvContents">
						<table class="table table-hover table-condensed" >
							<thead>
								<th>Username</th>	
								<th>Full_Name</th>	
								<th>Email</th>				
								<th>Contact</th>				
								<th>10th_%age</th> 
								<th>12th_%age</th> 
								<th>Graduation</th>
								<th>University</th>
								<th colspan="3" style="text-align:center">Actions</th>
							</thead>
							<tbody>
								<?php
								if(isset($_POST['search']))
								{
									$graduation=$_POST['graduation'];
									$year_of_passing3=$_POST['year_of_passing3'];
									
									$sql1="Select * from stdedit_profile WHERE graduation='$graduation' AND year_of_passing3='$year_of_passing3';";
									$result_3 = $con->query($sql1);
									if(mysqli_num_rows($result_3)<=0)
									{
										$sql2="Select * from stdedit_profile WHERE post_graduation='$graduation' AND year_of_passing4='$year_of_passing3';";
									
										$result_3 = $con->query($sql2);
										if(mysqli_num_rows($result_3)<=0)
										{
											printf("Searched Category Not Found");
										}
									}
								}
								else{
									$result_3 = $con->query("Select * from stdedit_profile");
								}
							while($row_3 = mysqli_fetch_array($result_3))
							{ 			
							
								?>
								<tr>
								<td><?php echo $row_3['username']; ?></td>
								<td><?php echo $row_3['fullname']; ?></td>
								<td><?php 
								$sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row_3['username'] == $row_4['username']){
										echo $row_4['email'];	
										}
										else{
											echo "";
										}
									}
									 ?></td>
								<td><?php 
								$sql2="Select * from std_login";
								$result_4 = $con->query($sql2);
									while($row_4 = mysqli_fetch_array($result_4)){
										if($row_3['username'] == $row_4['username']){
										echo $row_4['contact'];	
										}
										else{
											echo "";
										}
									}?></td>
								<td><?php echo $row_3['X_percentage']; ?></td>
								<td><?php echo $row_3['XII_percentage']; ?></td>
								<td><?php echo $row_3['graduation']; ?></td>
								<td><?php echo $row_3['university']; ?></td>				
								
								<td>
										<a href='view_details.php?id=<?php echo $row_3['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Details"><span class="glyphicon glyphicon-user" style="font-size:20px; color:blue; "></span></a>
									</td>									
									<td>
										<a href='resumes.php?id=<?php echo $row_3['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Resume"><span class="glyphicon glyphicon-list-alt" style="font-size:20px; color:blue; "></span></a>
									</td>
									
										
									<?php
							}
									?>  
								
								
							</tbody>
						</table>
						<tr>
						<td width="47%"></td>
						<td colspan="0">
						<?php
							if(isset($_POST['search']))
							{ 		$graduation=$_POST['graduation'];
									$year_of_passing3=$_POST['year_of_passing3'];
						?>
					
						
							<a href='std_reports_view.php?id=<?php echo $graduation; ?>& name=<?php echo $year_of_passing3;?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
						<?php
							}
							
							else{
						?>	
							<a href='std_reports_view.php?id=<?php echo "0"; ?>& name=<?php echo "0";?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
						<?php
							}
							
						?>
							
						</td>
						</tr>
				</form>
						
				</div>
			</div>
		</div>
	</div>
								
</div>						
							
								
								
							
						

		
	
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
	
			}}
	 
}
		else
		{
			header('Location:logout.php');
		}

		?>
</html>
