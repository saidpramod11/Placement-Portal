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

.pfimage{
	width: 200px;
	padding: 10px;
	
	margin-left: 50px;
	overflow: hidden;	
	}
	
.pfimage img {
	width: 150px;
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
}        </style>
</head>

<body style="background-image:url('images/15.jpg'); background-size:100%;">

		<section id="banner">
		
			<header>
					<table cellspacing="0" border="0" >
					
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
?>	
  		<div id="main-wrap">
				<form  action="add_cmp_db.php" method = "post" enctype="multipart/form-data">
				<a href="cmp_details.php"><input type = "button" value="Back" class="styled-button-8" style="margin-left:100px;"/></a>
					<table  width="500px" style="margin-left:35%; border-radius:5%; background-color:white;"><tr><td>
					<table class="table-condensed" width="500px" style=" font-size:120%; margin:40px 40px 40px 40px ; " border="0">
					<thead>
					<center><h2>
							<font color="blue">
								<b>Register Company</b>
							</font>
							</h2>
					</center>
					
					
					</thead>
					<tbody>
						<tr>
							<td>
							<label>Company's Name:</label>
							</td>
							<td>
							<input name="company" type="text" class="form-control" placeholder="Enter company Name" required/>
							</td>
						</tr>
					
						<tr>
						<td>
						<label>Established:</label>
						</td>
						<td>
						<input name="established" type="date" class="form-control" /></td>
						</tr>
						
						
						<tr>
							<td><label >Email id:</label></td>
							<td><input name="email"  class = "form-control" placeholder = "eg..abc@gmail.com" /></td>
						</tr>
						
						<tr> 
						  <td><label> Website:</label></td>
						  <td><input name="url" class="form-control" placeholder="Enter your Website Url" /></td>
						  </tr>
				
						
						<tr>
							<td>
							<label>Contact no.:</label>
							</td>
							<td>
							<input name="contact" type="text" class="form-control" maxlength="10" placeholder="+91" />
							</td> 
						</tr>
						
						<tr>
							<td>
							<label>State :</label>
							</td>
							
							<td>
								<select name="state" class="form-control">
								<option value="state">Select State</option>
								<option value="Andhra Pradesh" >Andhra Pradesh</option>
								<option value="Arunanchal Pradesh" >Arunanchal Pradesh</option>
								<option value="Assam" >Assam</option>
								<option value="Bihar" >Bihar</option>
								<option value="Chattisgarh" >Chattisgarh</option>
								<option value="Goa" >Goa</option>
								<option value="Gujarat" >Gujarat</option>
								<option value="Haryana" >Haryana</option>
								<option value="Himachal Pradesh" >Himachal Pradesh</option>
								<option value="Jammu And Kashmir" >Jammu and Kashmir</option>
								<option value="Jharkhand" >Jharkhand</option>
								<option value="Karnataka" >Karnataka</option>
								<option value="Kerala" >Kerala</option>
								<option value="Madhya Pradesh" >Madhya Pradesh</option>
								<option value="Maharashtra" >Maharashtra</option>
								<option value="Manipur" >Manipur</option>
								<option value="Meghalaya" >Meghalaya</option>
								<option value="Mizoram" >Mizoram</option>
								<option value="Nagaland" >Nagaland</option>
								<option value="Odisha" >Odisha</option>
								<option value="Punjab" >Punjab</option>
								<option value="Rajasthan" >Rajasthan</option>
								<option value="Sikkim" >Sikkim</option>
								<option value="Tamil Nadu" >Tamil Nadu</option>
								<option value="Telangana" >Telangana</option>
								<option value="Tripura" >Tripura</option>
								<option value="Uttar Pradesh" >Uttar Pradesh</option>
								<option value="Uttarakhand" >Uttarakhand</option>
								<option value="West Bengal" >West Bengal</option>
								</select>
							</td>
						</tr>	 
     
						<tr>
							<td>
							<label>City :</label>
							<td> 
							<select name="city" class="form-control">
                            <option value="-1" selected>select..</option>
                            <option value="NEW DELHI" >NEW DELHI</option>
                            <option value="MUMBAI" >MUMBAI</option>
                            <option value="GOA" >GOA</option>
                            <option value="PATNA" >PATNA</option>
							<option value="PUNE" >PUNE</option>
                            </select>
							</td>
							</td>
						</tr>	
						
						<tr>
							<td>
							<label>Postal code/Zip code:&nbsp;&nbsp;</label>
							</td>
							<td>
							<input name="pincode" type="text" class="form-control" maxlength="6" placeholder="Enter Your postal/zip code" required/>
							</td>
						</tr>

						<tr>
							<td><label>Address :</label></td>
							<td><input name="address" type="text" class="form-control" maxlength="80" /></td>
						</tr>
						<tr style="margin-top:50px;">
								<td></td>
								<td><input type="submit" name="submit" class='btn btn-info' value="Register Company"></td>
						</tr>
						</tbody>
					</table>
</td></tr></table>					
			</form>

			</div>
			</center>
			</div>
		
	<?php 
}}}
else
{
header('Location:logout.php');
}

?>
</body>
<?php

echo include('footer.php');
?>
</html>