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
		
		.table {
			margin: auto;
			width: 100%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>RFID: User Data</title>
	</head>
	
	<body>
		<h2 align="center" style=" font-size: 45.5px; font-weight: bold; font-family: "Jost", sans-serif; margin-top: 0px;"><font color="white">RFID ATTENDANCE SYSTEM</font></h2>
		<ul class="topnav">
			<li><a href="index.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3><font color="white">USER DATA TABLE</font></h3>
            </div>
            <div class="row">
                <table class="table table-striped" style="background-color:#dbf2fa; border-radius: 14px;">
                  <thead>
                    <tr bgcolor="teal" color="#000">
                      <th>NAME</th>
                      <th>ID</th>
					  <th>GENDER</th>
					  <th>EMAIL</th>
                      <th>MOBILE NUMBER</th>
					  <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM tbl_data ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
							echo '<td>'. $row['email'] . '</td>';
							echo '<td>'. $row['mobile'] . '</td>';
							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>