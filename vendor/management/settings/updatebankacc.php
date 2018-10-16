<?php
include "../../../auth/connection.php";

if (!isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_index");
}

$vendorid = $_SESSION["vendor_storeID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schyler</title>
	<link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../../js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div class="containerboundary">
		<div class="wrapper" style="paddingtop:20px;">
			<h2>Update - Bank Account</h2>
			
			<form action="queries/setupdatebankacc.php" method="post">
				<div class="field">
					<div class="label"><label for="bankacc">Bank Acc:</label></div>
					<input type="text" id="bankacc" name="bankacc" required>
				</div>
				<input type="submit" name="save" value="Save" class="buttonlargesubmit">
			</form>
			
			<button class="buttonlargesubmit buttonlargecancel" onclick="goBack()">Cancel</button>
			<script>
			function goBack() {
				window.history.go(-1);
			}
			</script>
			
		</div>
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