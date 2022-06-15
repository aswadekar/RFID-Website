<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}
		 body {
			 background-color: #046ea0;
                         margin-top: 35px;
			 }

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #dbf2fa/*#ff6600*/;
			width: 94%;
                        margin-top: 30px;
                        border-radius: 16px;

		}

		ul.topnav li {float: left; margin-left: 12px;}

		ul.topnav li a {
			display: block;
			color: #000;
                        font-size: 14.8px;
                        font-weight: bold;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
                        text-transform: uppercase;
		}

		ul.topnav li a:hover:not(.active) {background-color: teal/*#3333ff*/;}

		ul.topnav li a.active {background-color: teal;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}

                textarea {
			resize: none;
		}
		</style>
		
		<title>RFID: Registration</title>
	</head>
	
	<body>

		<h2 align="center" style=" font-size: 45.5px; font-weight: bold; font-family: "Jost", sans-serif; margin-top: 0px;"><font color="white">RFID ATTENDANCE SYSTEM</font></h2>
		<ul class="topnav">
			<li><a href="index.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2; background-color: teal; margin-top: 16px; border-radius: 14px;">
				<div class="row" >
					<h3 align="center"><font color="white">Registration Form</font></h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post"  >
					<div class="control-group">
						<label class="control-label"><font color="white">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success" style="background-color: #046ea0; margin-left: -156px;">Save</button>
                    </div>
				</form></font>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>