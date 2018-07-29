<form action="shomepage.php" method="post">	
		<nav  role="navigation" style=" background-color: #333; color:white;">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						
					  </button>
					  
				</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
			<ul class="nav navbar-nav" style="margin-bottom:-25px;">
			<li><a href="shomepage.php">HOME</a>
			</li>
			<li><a href="sAboutUs.php">AboutUs</a>
			</li>
			
			
			<li class="dropdown">		
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Company<span class="caret"></span></a>
			
				<ul class="dropdown-menu" role="menu">
				<li><a href="srecruiters.php">Our Recruiters</a></li>
				<li><a href="svacancy.php">Arriving Schedule</a></li>
				</ul>
			</li>
			
			<li class="dropdown">		
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Placement Details<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="splacement_detail.php">Student Placed</a></li>
				</ul>
			</li>
			
			<li><a href="sTerms&Conditions.php">Terms And Conditions</a>
			</li>
			
			<li><a name="Home_btn" href="sContactUs.php">Contact Us</a>
			</li>
			<li><a href="sfeedback.php">Feedback</a>
			</li>
			<li><a href="sFAQs.php">FAQs</a>
			</li>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
			<ul class="nav navbar-nav" >
				
			
			<li class="dropdown" >
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong><?php
					
					if($row_1['fullname']=="")
					{
						echo ($row_1['username']); 
					}
					else{
						echo ($row_1['fullname']);
					}
				 ?></strong><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="schangepass.php">Change Password</a></li>
				<li><a href="supdate_profile.php">Update Profile</a></li>
				<li><a href="upload_resume.php">Update Resume</a></li>
				<li><a href="logout.php" title="Log Out">Logout</a></li>
				</ul>
			</li>
			</ul>
			</div>
			</div>
			</nav>
			</form>
				
	