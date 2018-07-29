<?php
	ob_start();
 session_start();
 include('dbconfig/config.php');	
	if($_SESSION['username'])
{	
	
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Report</title>
    
	<!-- BOOTSTRAP STYLES-->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	

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

@media print{
	.control-group{
		display: none;
	}
	
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
}          
</style>
	
<center>
<table border="1" width="50%" style=" background-color:#fff">
<tr><td><tr><td>
<section style="color: #fff;text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);text-align: center;background-image:url('../images/bg.jpg');width:100%;padding: 1em 0 0em 0; ">
		<div id="dvContents">				
					<table height="150px" cellspacing="0" border="0">
						<tr>
						<td rowspan="3" width="16%">
						<img src="imgs/logo.jpeg" style="width:80%; border-radius:50%; margin: 0 0 0 35px;"/>
						</td>
						</tr>

						<tr>
						<td width="84%">
						<h1 style="font-family:Comic Sans MS; color:white; font-size:350%;text-align:right;padding-right:15px;margin-bottom:0px;margin-top:0px;">Amrapali Group Of Institutes </h1>
						</td>
						</tr>

						<tr>
						<td style="font-family:Comic Sans MS; color:white; font-size:200%;text-align:right;padding-right:15px;margin-bottom:0px;margin-top:0px;">
						Shiksha Nagar, Lamachaur, Haldwani(263139)
						</td>
						</tr>

						<tr>
						<td colspan="4">
						</td>
						</tr>												
					</table>			
		</section>
			</td></tr>
			<tr><td>				
			<div style = "margin-left:3px;">
				<h3 style = "margin-left:250px;">Company Registered Report</h3>
			</div>
			
			
						           
                               
                               <?php 
							   if(isset($_GET['id'])){
								  
									$user=$_GET['id'];
									if($user!='0'){
									$query_1="SELECT * FROM cmpedit_profile WHERE state='$state'";
									$result = $con->query($query_1);
									}
									else{
									$query_1="SELECT * FROM cmpedit_profile ";
									$result = $con->query($query_1);

									}
									}
								
								?>
					<div id="dvContents">	
								<table border="0" class="table" style="width:1000px;" >
									<thead>                              
										
                                       
                                        <th>Company Name</th>
										<th>Established</th>
										<th>Email</th>
										
                                        <th>Contact</th>
										<th>State</th> 
										
										<th>Website</th>
										
                               </thead>
								<tbody>     
								<?php
								 
								while($row=mysqli_fetch_array($result)){
										
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
									
                                    </tr>
								<?php 
									}
							   									
								?>
						</tbody>
						
						
					</table>
					</td></tr>
					
					</div>
	</td>
	</tr>
	</table>
	<div class="control-group">
						<div style="margin-left:120px">
							<a href="cmp_details.php"><input type = "button" value="Back" class="styled-button-8"/></a>
							<button type="button" class="styled-button-8" onclick="javascript:window.print();">Print</button>
						</div>
						</div>
	</center>

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
<div class="control-group">
<?php
			include('footer.php');
		?>
</div>
<?php 
}
		else
		{
			header('Location:logout.php');
		}

		?>
		
</html>

	