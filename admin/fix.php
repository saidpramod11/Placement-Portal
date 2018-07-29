<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<form action="std_details.php" method="POST">
					<input type="text" name="valuetosearch" placeholder="value to search" class="form-control" >

							&nbsp;<button style="margin-top:10px;" type="submit" name="search" class="btn btn-default" title='Add Student'>
							<span class="glyphicon glyphicon-search" style="font-size:20px; color:red"></span></button>
												

							<?php 
							if(isset($_POST['search'])){
														
							$valuetosearch=$_POST['valuetosearch'];
							$query_1="SELECT * FROM stdedit_profile WHERE CONCAT (`username`,`password`,`fullname`,`father_name`,`mother_name`,`gender`,`nationality`,`date_of_birth`,`contact`,`email`,`X_percentage`,`year_of_passing1`,`X_Board`,`XII_percentage`,`year_of_passing2`,`XII_Board`,`graduation`,`year_of_passing3`,`university`,`post_graduation`,`year_of_passing4`,`university2`,`address`,`landmark`,`city`,`state`,`pincode`,`status`,`status2`) LIKE '%".$valuetosearch."%'";
							$search_result=filterTable($query_1);
							}
							else{
							$query_1="SELECT * FROM stdedit_profile ";
							$search_result=filterTable($query_1);
								
							}
							function filterTable($query_1){
								
								include('dbconfig/config.php');
								$filter_Result=mysqli_query($con,$query_1);
								return $filter_Result;
							}

							?>

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
								while($row=mysqli_fetch_array($search_result)){
							
								?>
								<tr>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['fullname']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['X_percentage']; ?></td>
								<td><?php echo $row['XII_percentage']; ?></td>
								<td><?php echo $row['graduation']; ?></td>
								<td><?php echo $row['university']; ?></td>				
								
								<td>
										<a href='view_details.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Details"><span class="glyphicon glyphicon-user" style="font-size:20px; color:blue; "></span></a>
									</td>									
									<td>
										<a href='resumes.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="View Resume"><span class="glyphicon glyphicon-list-alt" style="font-size:20px; color:blue; "></span></a>
									</td>
									<td>
										<a href='update_std.php?id=<?php echo $row['username']; ?>'data-toggle="tooltip" data-placement="top" title="Update Information"><span class="glyphicon glyphicon-edit" style="font-size:20px; color:black;"></span></a>
									</td>
									<td>
										<a href='delete_rec.php?id=<?php echo $row['username']; ?>' data-toggle="tooltip" data-placement="top" title="Delete Account"><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></span></a>
									</td>
										
									  
								<?php
									}
								?>
								
							</tbody>
						</table>
						<tr>
						<td width="47%"></td>
						<td colspan="0">
							<a href='std_reports_view.php?id=
							<?php 
							if(isset($_POST['search'])){
							if($_POST['valuetosearch']!=''){
							echo $_POST['valuetosearch'];
							}
							}
							else{
								echo '*';
							}
							?>'><input style="margin-left: 45%;" type='button' name="submit_btn" value='Generate Report' data-toggle="tooltip" data-placement="top" title="Print Preview" class='btn btn-info'/></a>
							
						</td>
						</tr>
				</form>