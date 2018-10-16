<?php
include "../../../auth/connection.php";

if (!isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_index");
}

$vendorid = $_SESSION["vendor_storeID"];
$storeid = $vendorid;

if (!isset($_GET["id"]) || $_GET["id"] == null) {
	header("Location: $r_vend_management_promo_index");
}
else {
	$itemid = $_GET["id"];
}
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
			<h2>Notice</h2>
			Are you sure you want to add the item to promotion?
			<!-- Form -->
			<form action="queries/setaddpromoitem.php" method="post">
				<div class="hiddendetails">
					<input type="text" name="itemid" value="<?php echo $itemid;?>">
				</div>
				<input type="submit" name="yes" value="Yes" class="buttonlargesubmit">
			</form>
			
			<!--<a href=""><div class="buttonlargesubmit buttonlargecancel" style="text-align: center;">Cancel</div></a>-->
			
			<button class="buttonlargesubmit buttonlargecancel" onclick="goBack()">Cancel</button>
			<script>
			function goBack() {
				window.history.back();
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