<?php
include "../../auth/connection.php";

$vendorid = $_SESSION["vendor_storeID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schyler</title>
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div class="logincontainerheader">
		<img src="../../img/NSFCW_logo.png" style="height:75px;">
	</div>
	
	<div class="substicky">
		<div class="wrapper">
			<nav class="mainnav">
				<?php
					include "../nav/mainnav-management.php";
				?>
			</nav>
		</div>
	</div>
	<div class="logincontainerbody">
		<?php
			include "queries/login_management.php";
		?>
		<h2>Management Login</h2>
		<br>
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
	</div>
	
	<hr style="border:solid #e7e7e7 1px;">
	<footer>
		<div class="wrapper">
			&copy; 2018 Schyler<br>
			All rights reserved.</p>
		</div>
	</footer>
</body>
</html>