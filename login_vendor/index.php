<?php
$loginpage = True;
include "../auth/connection.php";
unset($loginpage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schyler</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
</head>
<body class="bodybackground">
	<div class="logincontainer">
		<div>
			<?php
				include "queries/login.php";
			?>
			<div class="logincontainerheader">
				<img src="../img/NSFCW_logo.png" style="height:75px;">
			</div>
			<br>
			<div class="logincontainerbody">
				Welcome to the <span style="font-weight: bold;">North Spine Food Court Web</span>
				<br><br>
				<span style="font-weight: bold; font-size:125%;">NSFC Stall Owners / Employee</span>
				<br><br>
				<form action="index.php" method="post">
					<div class="field">
						<div class="label"><label for="username">Username:</label></div>
						<input type="text" id="username" name="username" placeholder="Username" required>
					</div>
					<div class="field">
						<div class="label"><label for="password">Password:</label></div>
						<input type="password" id="password" name="password" placeholder="Password" required>
					</div>
					<input type="submit" name="login" value="Login" class="buttonlargesubmit">
				</form>
				
				<!--<a href="signup.php">
					<div class="buttonlargesubmit buttonlargecancel">
						Sign Up
					</div>
				</a>-->
			</div>
		</div>
	</div>
	<footer>
		&copy; 2018 Schyler<br>
		All rights reserved.</p>
	</footer>
</body>
</html>