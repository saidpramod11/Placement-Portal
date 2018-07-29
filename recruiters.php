<?php
	
 session_start();
 ob_start();
 include('dbconfig/config.php');	

?>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_Panel</title>
    
	<!-- BOOTSTRAP STYLES-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	#banner {
		color: #fff;
		text-shadow: 0 0 0.5px rgba(255, 255, 255, 0.25);
		text-align: center;
		background-image:url("images/bg.jpg");
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

marquee{
	color:white;
}
#pfimage{
	width: 200px;
	padding: 10px;
	
	margin-left: 50px;
	overflow: hidden;	
	}
	
#pfimage img {
	width: 120px;
	height:150px;
	background-image:url("uploads/profiledefault.jpg");
	background-size: 120px 150px;
	background-repeat: no-repeat;
}
#maint img{
	width: 240px;
	height:190px;
	margin:10px;	
}
#maint{
    width:70%;
	
	
    margin: 0 0 0 0;
    background: white;
	border-radius: 10px;

	font-size:120%;
	opacity:0.85;
	border-radius:5%;
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

<body style="background-image:url('images/14.jpg'); background-size:100%;">
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
				include('index_nav.php');
			?>
			
						
		
			 <center>
			<table id="maint" border="0">
				
				<tr>
					<td><?php echo"<img src='logos/1.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/2.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/3.gif'>"; ?></td>
					<td><?php echo"<img src='logos/4.jpg'>"; ?></td>
				</tr>
				<tr>
					<td><?php echo"<img src='logos/5.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/7.gif'>"; ?></td>
					<td><?php echo"<img src='logos/6.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/8.jpg'>"; ?></td>
				</tr>
				<tr> 
					<td><?php echo"<img src='logos/9.jpg'>"; ?></td> 
					<td><?php echo"<img src='logos/10.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/11.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/12.jpg'>"; ?></td>
				</tr>
				<tr>  
					<td><?php echo"<img src='logos/13.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/14.jpg'>"; ?></td>
					<td><?php echo"<img src='logos/15.gif'>"; ?></td>  
					<td><?php echo"<img src='logos/16.gif'>"; ?></td>
				</tr>
				<tr>
					<td><?php echo"<img src='logos/17.png'>"; ?></td>
					<td><?php echo"<img src='logos/18.gif'>"; ?></td>
					<td><?php echo"<img src='logos/19.gif'>"; ?></td>
				</tr>
			</table>
			</center>
		
		
		<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/jquery.min.js"></script>
	
</body>
		<?php
			include('footer.php');
		?>
		
</html>
