
	
	<script >
		function validation()
		{
			{
				if(document.carform.name.value=="")
				{
				alert ("please enter the name");
				document.carform.name.focus();
				return false;
				}
			}
			{	
				var mob_no = document.getElementById('mob_no');
				var filter = /^([0-9])+$/;
				if(!filter.test(mob_no.value))
				{
				alert("Please Enter The valid No.");
				document.carform.mob_no.focus();
				return false;
				}
			}

		{
			    var email = document.getElementById('txtEmail');
			    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			    if (!filter.test(email.value))
			    {
			    	alert('Please provide a valid email address');
			    	email.focus;
			    	return false;
			    }
		 	}
			{
				if(document.carform.msg.value=="")
				{
					alert("Please Enter Enquiry Here.");
					document.carform.msg.focus();
					return false;
				}
			}
		
		}
	</script>
	
	<body style="background-color:#95a5a6">
	
	<table border="0" style="width:100%; height:200px;background-color:#EFEFEF;" >					
	<tr>
		<td>
			<div style="width:100%; height:40px; border:solid 0px #CCCCCC; color:#FFFFFF; background:#4171AF; font-size:20px; font-family:Comic Sans MS;">
			<div style="width:100%; height:31px; background-color:#4171AF; border:#000000 solid 0px;" align="center"><b>Feedback/Suggestions</b>
			</div>
			</div>
			
				<form name="carform" action="#" method="post" enctype="multipart/form-data" onSubmit="return validation()">
				<center>
				<table class="table-condensed" border="0" width="50%" cellpadding="2" cellspacing="2" >
					<tr>
						<td>&nbsp;
						</td>
					</tr>	
								
					<tr>
						<td colspan="2">
						<input name="name" class="form-control" placeholder='Name' type="text" value="" size="25">
						</td>
					</tr>
							
					<tr>
						<td colspan="2">
						<input name="mob_no" id="mob_no" class="form-control" type="text" placeholder='Mobile No' value="" maxlength="10">
						</td>
					</tr>
								
					<tr>
						<td colspan="2">
						<input name="email" id="txtEmail" class="form-control" type="text" placeholder='Email' value="" maxlength="25">
						</td>
					</tr>
		
					<tr>
						<td colspan="2" >
						<textarea name="msg" class="form-control" placeholder='Write Your Comment Here...' rows="2" cols="21"></textarea>
						</td>
					</tr>
								
					<tr>
						<td colspan="2">
						<input name="Submit_btn" type="Submit" class="btn btn-primary" value="Submit" >
						</td>
					</tr>
							
					<tr>
						<td>&nbsp;
						</td>
					</tr>
							
					
				</table>	
				</center>
				</form>
			
		</td>
	</tr>
	</table>	
	

<?php
	if(isset($_POST['Submit_btn'])){
		print "<h1>Your Feedback/Suggestions have been Posted</h1>";
		
		$name = $_POST['name'];
		$mob_no = $_POST['mob_no'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];
		
		#Get old messages
		$old = fopen("feedback.txt", "r+t");
		$old_comments = fread($old, 1024);
		
		#Delete everything,write down new and old comments
		$write = fopen("feedback.txt", "w+");
		$string = "<b>".$name."</b><br><b>".$mob_no."</b><br><b>".$email."</b><br>".$msg."<br><br><hr>\n".$old_comments;
		fwrite($write, $string);
		fclose($write);
		fclose($old);
	}
	
?>


