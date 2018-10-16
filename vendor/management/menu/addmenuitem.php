<?php
include "../../../auth/connection.php";

if (!isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_index");
}

$vendorid = $_SESSION["vendor_storeID"];
$storeid = $vendorid;
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
	<div class="logincontainerheader">
		<img src="../../../img/NSFCW_logo.png" style="height:75px;">
	</div>
	
	<div class="substicky">
		<div class="wrapper">
			<nav class="mainnav">
				<?php
					include "../../nav/mainnav-management-menu.php";
				?>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="wrapper">
			<div>
				<h2>Add Menu Item</h2>
				<nav class="mainnav">
					<?php
						include "../../nav/subnav-management-menu-add.php";
					?>
					&nbsp;
				</nav>
				
				<form action="queries/setaddmenuitem.php" method="post">
					<div class="field">
						<div class="label"><label for="itemname">Item Name:</label></div>
						<input type="text" id="itemname" name="itemname" required>
					</div>
					<div class="field">
						<div class="label"><label for="price">Price:</label></div>
						<input type="number" id="price" name="price" min="0" step="0.01" required>
					</div>
					<div class="field">
						<div class="label"><label for="status">Status:</label></div>
						<select id="status" name="status">
							<option value="1">Available</option>
							<option value="0">Unavailable</option>
						</select>
					</div>
					<input type="submit" name="add" value="Add" class="buttonlargesubmit">
				</form>
				
			</div>
			<br>
			
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