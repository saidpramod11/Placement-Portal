<?php
	session_start();
	require ('dbconfig/config.php');
?>

<html>
	<head>
		<title> Administrator Portal</title>
		<link rel="stylesheet" href="css/style.css" >
		
	</head>
		<body>
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
		<div id="page-inner">
			 
			<table class = "table" cellspacing="14">
					<thead>
                                     
										
                                        <th>Full_Name</th>
										<th>Company</th>
										<th>Course</th>
					</thead>
                    <tbody>                
                               
                               <?php 
									$result_1 = $con->query("Select * from std_placed ");
									while($row_1 = $result_1->fetch_assoc())
									{ 	
								?>
                                    <tr>
									
   
                                        <td><?php echo $row_1['fullname']; ?></td>
                                        <td><?php echo $row_1['graduation']; ?></td>
                                        <td><?php echo $row_1['university']; ?></td>
										
										
                                       
										<!--<td>
											<a href = "delete_rec.php?id=<?php echo $row_1['username']; ?>">
											<button type = "button" class="Home_btn">Delete Record </button></a>
										</td>-->
                                    </tr>
								<?php 
									} 
								?>
									
									
                        </tbody>
						</table>
			
		</body>
</html>