<?php 
	$host="localhost"; //127.0.0.1(ip address/ loop back address)
	$user="root";
	$password="";
	$db="placement_db";

	 $conn=mysqli_connect($host,$user,$password) or die(mysqli_error());
	 //echo 'COnnected ';
	 mysqli_select_db($conn,$db);

	/* for select query

	 $sql="select * from admin_login";
	 $result=$conn->query($sql);
	 while($row=mysqli_fetch_assoc($result)){
	 	echo "<br>".$row['username']." : ".$row['password'];
	 }
	 //	printf("Default database is %s.\n", $row[0]);
    //mysqli_free_result($result);
	 //	echo 'Successful';
	 */

	 /* for inserting data

	 $sql="insert into admin_login(username,password) values('Suraj','Sanwal')";
	 if($result=$conn->query($sql)){
	 	echo "Record inserted Successfully";
	 }else{
	 	echo "error in inserting new record";
	 }*/


	 /*	for update record

	 $sql="update admin_login set password='Sanwal13' where username='suraj'";
	 if($result=$conn->query($sql)){
	 	echo "Record updated Successfully";
	 }else{
	 	echo "error in updating existing record".$conn->error;
	 }*/
	

	/* for deleting record
	
	$sql="delete from admin_login where username='suraj'";
	 if($result=$conn->query($sql)){
	 	echo "Record deleted Successfully";
	 }else{
	 	echo "error in deleting existing record".$conn->error;
	 }
	 */

?>