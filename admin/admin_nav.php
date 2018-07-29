<form action="homepage.php" method="post">	
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
			<li><a href="homepage.php">HOME</a>
			</li>
			<li><a href="AboutUs.php">AboutUs</a>
			</li>
			
			<li class="dropdown">		
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Student<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="std_details.php">Student Registration</a></li>
				<li><a href="add_Std.php">Add Student</a></li>
				</ul>
			</li>
			
			<li class="dropdown">		
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Company<span class="caret"></span></a>
			
				<ul class="dropdown-menu" role="menu">
				<li><a href="cmp_details.php">Company Registration</a></li>
				<li><a href="add_cmp.php">Add Company</a></li>
				<li><a href="arriving_schedule.php">Arrivng Schedule</a></li>
				</ul>
			</li>
			
			<li class="dropdown">		
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Placement Details<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="selected.php">Student Placed</a></li>
				</ul>
			</li>
			
			<li><a href="Terms&Conditions.php">Terms And Conditions</a>
			</li>
			<li><a href="FAQs.php">FAQs</a>
			</li>
			
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Feedbacks<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
			<li><a href="sfeedback.php">Students Feedback</a>
			</li>
			<li><a href="cfeedback.php">Company's Feedback</a>
			</li>
				</ul>
			</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
			<ul class="nav navbar-nav ">
				
				
			

			<ul class="nav navbar-nav" style="display:none">
				
				<form method="GET" action="search.php" role="search">
			<li>
				<input style="margin-top:10px;" type="text" name="query" data-toggle='tooltip' data-placement='top' title='Looking For Something Try Here...' class="form-control" placeholder="Search This Portal">
			
			</li>
			<li>
			<select class="form-control" style="margin-top:10px; margin-left:5px;" name="type">
					<option value="-1" selected>Select</option>
					<option value="Student">Student</option>
					<option value="Company">Company</option>
					</select>
					</select>
			</li>
				<li>&nbsp;<button style="margin-top:10px; margin-left:5px;" type="submit" class="btn btn-default" title='Search'><span class="glyphicon glyphicon-search" style="font-size:20px; color:red"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				</form>
			
			
			</ul>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong><?php echo "Admin"; ?></strong><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="change_pass.php">Change Password</a></li>
				<li><a href="logout.php" title="Log Out">Logout</a></li>
				</ul>
			</li>			
			</ul>
						

					
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
