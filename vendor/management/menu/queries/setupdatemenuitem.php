<?php
// Receive items from form; add them to cart; redirect to store page using store id.
include "../../../../auth/connection.php";

if (isset($_POST['save'])) {
	// Receive form input
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	$itemid = $_POST['itemid'];
	
	$vendorid = $_SESSION["vendor_storeID"];
	
	// Check existing cart if there is existing item
	$connection = new connection();
	$mysqli = $connection->mysqli;

	$qry = "
	UPDATE $db.Item
	SET ItemName = '$itemname', Price = '$price', Status = '$status'
	WHERE ItemID = '$itemid';
	";

	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	else {
		$_SESSION["item_edited"] = 1;
	}
	
	$mysqli->close();
	
	// Redirect to menu page.
	header("Location: $r_vend_management_menu_index");
}
else {
	header("Location: $r_vend_management_menu_index");
}




?>