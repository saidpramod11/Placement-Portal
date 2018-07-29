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

  				
			
			<form method="post" action="add_std_db.php">
			<a href="std_details.php"><input type = "button" value="Back" class="styled-button-8" style="margin-left:100px;"/></a>
			<table style="margin-left:32%; border-radius:5%; background-color:white;"><tr><td>
					<table class="table-condensed" style="margin:50px 50px 50px 50px ; background-color:white;">
					<thead>
					<center><h2>
							<font color="blue">
								<b>Student Registration</b>
							</font>
							</h2>
					</center>
					
					
					</thead>
					<tbody>
					
					<tr><td colspan ="4"><h3>Basic Details- <hr/></h3></td></tr>
					
						<tr>
							<td colspan="2"><label>Name:</label></td>
							<td colspan="1"><input name="fullname" type="text" class="form-control"></td>	
						</tr>

						
						<tr>
							<td colspan="2"><label>Father's Name:</label></td>
							<td colspan="1"><input name="father_name" type="text" class="form-control"></td>
						</tr>	
							
						<tr>
							<td colspan="2"><label>Mother's Name:</label></td>
							<td colspan="1"><input name="mother_name" type="text" class="form-control"></td>
						</tr>	

						<tr>
						   <td colspan="2"><label>Gender:</label>
							<td colspan="2">
								<input type="radio" name="gender" class ="radio" value="male">Male<br>
								<input type="radio" name="gender" class ="radio" value="female">Female<br>	
								<input type="radio" name="gender"  class ="radio" value="other">Others<br>
							</td>
						</tr>
						
							<tr>
							<td colspan="2"><label>Nationality:</label></td>
							<td><select name="nationality" class="form-control">
							<option value="" >Select</option>
							<option value="INDIAN">INDIAN</option>
							<option value="OTHER">OTHER</option>
							</select></td>
							</tr>

						
						<tr>
							<td colspan="2"><label > Date_Of_Birth :*</label></td>
							<td colspan="1"><input name="date_of_birth" type = "date" class = "form-control"></td>
						</tr>
	

						<tr>
							<td colspan="2">Contact no.:&nbsp;&nbsp;<b>+91</td>
							<td colspan="1"><input name="contact" type="text" class="form-control" maxlength="10"></td>
						</tr>
						
						
						 <tr>
							 <td colspan="2"><label>Email Id :</label></td>
							<td colspan="1">
							<input name="email" type="text" class="form-control" maxlength="80"></td>
						</tr>

							 					
						<tr>
						<td colspan="4"><h3>Educational Qualification- <hr></h3></td></tr>
				
					   
						<tr>
							<td colspan="1"><label>High_school_Marks:&nbsp;</label></td>
							<td colspan="1"><input name="X_percentage" type="text" class="form-control" maxlength="5"></td>
						</tr>
						
						
                        <tr>
							<td colspan="1"><label>Intermediate_marks:&nbsp;</label></td>
                           <td colspan="1"><input name="XII_percentage" type="text" class="form-control" maxlength="5" ></td> 
						</tr> 
						
						

						<tr>
							<td colspan="1"><label>Graduation:&nbsp;</label></td>
							<td colspan="1"><select name="graduation" class="form-control" >
								<option value="" >Select</option>
								<option value="BCA" >BCA</option>
								<option value="BBA" >BBA</option>
								<option value="B.COM">B.COM</option>
								
								<option value="B.TECH(IT)">B.TECH(IT)</option>
								<option value="B.TECH(Cs)">B.TECH(Cs)</option>
								<option value="B.TECH(Mech.)">B.TECH(Mech.)</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td colspan="1"><label>University:&nbsp;</label></td>
							<td colspan="1"><input name="university" type="text" class="form-control" maxlength="80"></td>
						</tr>
						

						<tr><td colspan=2><h3>Permanent Address- <hr></h3></td></tr>

						<tr>
							<td><label>State :</label></td>
							<td><select name="state" class="form-control">
								<option value="">Select State</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunanchal Pradesh" >Arunanchal Pradesh</option>
								<option value="Assam" >Assam</option>
								<option value="Bihar" >Bihar</option>
								<option value="Chattisgarh" >Chattisgarh</option>
								<option value="Goa" >Goa</option>
								<option value="Gujarat" >Gujarat</option>
								<option value="Haryana">Haryana</option>
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
								</select></td>
						</tr>	 	
						
						<tr>
							<td><label>City :</label></td> 
							<td><input name="city" type="text" class="form-control" maxlength="40"></td>
						</tr>
	
						
						<tr>
							<td><label>Pincode :</label></td>
							<td><input name="pincode" type="text" class="form-control" maxlength="6"></td>
						</tr>
						
						<tr><td colspan="4">
					<input style="margin-left: 45%;" type='submit' value='Submit' data-toggle="tooltip" data-placement="top" title="Print Preview" class='btn btn-info'/></a></td></tr>
					</tbody>			 
					</table>
				</td></tr>					
					</table>	 
			</form>
		
		
			
		
		
		<footer>
		<?php
			include('footer.php');
		?>
		</footer>
</body>
</html>
