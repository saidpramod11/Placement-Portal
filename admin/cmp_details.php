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
	include('admin_nav.php');
	}}
	 
}
		else
		{
			header('Location:logout.php');
		}

		?>


	
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<center><h2>
							<font color="blue">
								<b>Companies Registration</b>
							</font>
							</h2>
					</center>
					
					
							
				<form action="#" method="POST">
					
							<form action="#" method="POST">
								<table class="table-condensed"><tr><td>				
								<label>State:&nbsp;</label></td>
								<td><select name="state" class="form-control">
								<option value="">Select State</option>
								<option value="Andhra Pradesh" >Andhra Pradesh</option>
								<option value="Arunanchal Pradesh" >Arunanchal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar" >Bihar</option>
								<option value="Chattisgarh" >Chattisgarh</option>
								<option value="Delhi" >Delhi</option>
								<option value="Goa" >Goa</option>
								<option value="Gujarat" >Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal Pradesh" >Himachal Pradesh</option>
								<option value="Jammu And Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand" >Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala" >Kerala</option>
								<option value="Madhya Pradesh" >Madhya Pradesh</option>
								<option value="Maharashtra" >Maharashtra</option>
								<option value="Manipur" >Manipur</option>
								<option value="Meghalaya" >Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland" >Nagaland</option>
								<option value="Odisha" >Odisha</option>
								<option value="Punjab" >Punjab</option>
								<option value="Rajasthan" >Rajasthan</option>
								<option value="Sikkim" >Sikkim</option>
								<option value="Tamil Nadu" >Tamil Nadu</option>
								<option value="Telangana" >Telangana</option>
								<option value="Tripura" >Tripura</option>
								<option value="Uttar Pradesh" >Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West Bengal" >West Bengal</option>
								</select></td>

								<td><input type="submit" class="btn btn-primary" value="Search" name="search"></td>
								</td></tr></table>				
							</form>		

						<div id="dvContents">
					<table class = "table" cellspacing="14">

                           <thead>                              
										
                                        <th>Company Name</th>
										<th>Established</th>
										<th>Email</th>
										
                                        <th>Contact</th>
										<th>State</th> 
										
										<th>Website</th>
										<th colspan="3" style="text-align:center">Actions</th>
                               </thead>
							   
                               <tbody>
                                   <?php 
								   if(isset($_POST['search']))
								{
									$state=$_POST['state'];
									
									
									$sql1="Select * from cmpedit_profile WHERE state='$state';";
									$result_3 = $con->query($sql1);
									if(mysqli_num_rows($result_3)<=0)
									{
										printf("Searched Category Not Found");
									}
								}
								else{
									$result_3 = $con->query("Select * from cmpedit_profile");
								}
									while($row=mysqli_fetch_array($result_3)){
							
								?>
                                    <tr>
									
                                     
                                        <td><?php echo $row['company']; ?></td>
                                        <td><?php echo $row['established']; ?></td>
                                        <td><?php $sql2="Select * from cmp_login";
										$result_4 = $con->query($sql2);
										while($row_4 = mysqli_fetch_array($result_4)){
										if($row['username'] == $row_4['username']){
										echo $row_4['email'];	
										}
										else{
											echo "";
										}
									}
									  ?></td>
									  <td><?php $sql2="Select * from cmp_login";
										$result_4 = $con->query($sql2);
										while($row_4 = mysqli_fetch_array($result_4)){
										if($row['username'] == $row_4['username']){
										echo $row_4['contact'];	
										}
										else{
											echo "";
										}
									}
									  ?></td>
                                        
										
                                        <td><?php echo $row['state']; ?></td>
                                        
                                        <td><?php echo $row['url']; ?></td>
										
										<td>
										<a href='cmp_view_details.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Details"><span class="glyphicon glyphicon-user" style="font-size:20px; color:blue; "></span></a>
										</td>									
										
										<td>
											<a href='update_cmp.php?id=<?php echo $row['username']; ?>'data-toggle="tooltip" data-placement="top" title="Update Information"><span class="glyphicon glyphicon-edit" style="font-size:20px; color:black;"></span></a>
										</td>
										<td>
											<a href='delete_cmp_rec.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="Delete Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
										</td>
									</tr>
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
							{ 		$state=$_POST['state'];
						?>
					
						
							<a href='cmp_reports_view.php?id=<?php echo $state; ?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
						<?php
							}
							
							else{
						?>	
							<a href='cmp_reports_view.php?id=<?php echo "0"; ?>' data-toggle="tooltip" data-placement="top" title="Print Preview"><input type="button" style="margin-left:45%" class="btn btn-info" value="Generate Report"></a>
						
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
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/jquery.min.js"></script>
	
</body>
<?php
			include('footer.php');
		?>
</html>
