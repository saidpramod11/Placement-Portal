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

</head>
	<body style="background-image:url('images/15.jpg'); background-size:100%;">
	

<center>
<table border="1" width="50%" style=" background-color:#fff">
<tr><td><tr><td>
<section style="color: #fff;text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);text-align: center;background-image:url('../images/bg.jpg');width:100%;padding: 1em 0 0em 0; ">
		<div id="dvContents">				
					<table height="150px" cellspacing="0" border="0">

						<tr>
						<td width="84%">
						<h1 style="font-family:Comic Sans MS; color:white; font-size:350%;text-align:right;padding-right:15px;margin-bottom:0px;margin-top:0px;">
						Inventory Management </h1>
						</td>
						</tr>

																	
					</table>			
		</section>
			</td></tr>
			<tr><td>				
			<div style = "margin-left:3px;">
				<h3 style = "margin-left:250px;">Inventory Management</h3>
			</div>                         
                               <?php 
							   if(null!==($_GET['id'] AND $_GET['name'])){
								  
									$user1=$_GET['id'];
									$user2=$_GET['name'];
									if($user1!=$user2){
								
									$sql1="Select * from stdedit_profile WHERE graduation='$user1' AND year_of_passing3='$user2' AND username='jatin123'";
									
									$result_3 = $con->query($sql1);
									if(mysqli_num_rows($result_3)<=0)
									{
									$sql2="Select * from stdedit_profile WHERE post_graduation='$user1' AND year_of_passing4='$user2' AND username='jatin123'";
									$result_3 = $con->query($sql2);
									}
									}
									
									}
									if($user1==$user2){
									$sql1="Select * from stdedit_profile WHERE username='jatin123'";
									
									$result_3 = $con->query($sql1);

									}
									
								?>
								
								<table border="0" class="table" style="width:1000px;" >
									
								<tbody>     
								<?php
								 
								while($row_1=mysqli_fetch_array($result_3)){
									
										
								?>
                                    <tr><td>Cutomer Name</td><td><?php echo $row_1['fullname']; ?></td></tr>
                                    <tr><td>Contact</td><td><?php echo $row_1['fullname']; ?></td></tr>
                                    <tr><td>Address</td><td><?php echo $row_1['fullname']; ?></td></tr>
									
									<tr class="success">
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Amount</th>
									</tr>
									<tr>
									<td>sdfsf</td>
									<td>dsfsf</td>
									<td>sdfs</td>
									</tr>
									
                                     <?php 
									}
							   									
								?>
						</tbody>
					
						</table><hr>
						
					</td></tr>
					
	</div>
	</td>
	</tr>
	</table>
	<div class="control-group">
						<div style="margin-left:120px">
							<a href="std_details.php"><input type = "button" value="Back" class="btn btn-primary"/></a>
							<button type="button" class="btn btn-primary" onclick="javascript:window.print();">Print</button>
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

	