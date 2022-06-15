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
                         height: 94vh;
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
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>RFID: Home</title>
	</head>
	
	<body>
		<h2 align="center" style=" font-size: 45.5px; font-weight: bold; font-family: "Jost", sans-serif; margin-top: 0px;"><font color="white">RFID ATTENDANCE SYSTEM</font></h2>
		<ul class="topnav">
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<img src="an.png" alt="" style="margin-top: 90px;" width="200" height="140"> <h3 style="margin-top: 60px; font-size: 30px;"><font color="white">RFID BASED ATTENDANCE SYSTEM</font></h3>
		
		<!------<img src="bg.jpg" alt="" width="1920" height="1000">------>
	</body>
</html>