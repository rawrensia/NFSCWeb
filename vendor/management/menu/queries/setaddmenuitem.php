<?php
// Receive items from form; add them to cart; redirect to store page using store id.
include "../../../../auth/connection.php";

if (isset($_POST['add'])) {
	// Receive form input
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	
	$vendorid = $_SESSION["vendor_storeID"];
	
	// Check existing cart if there is existing item
	$connection = new connection();
	$mysqli = $connection->mysqli;

	$qry = "
	INSERT INTO $db.Item (ItemID, ItemName, Price, Status, ProfilePictureDIR, StoreID)
	VALUES (NULL, '$itemname', '$price', '$status', NULL, '$vendorid');
	";

	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	else {
		$_SESSION["item_added_to_menu"] = 1;
	}
	
	$mysqli->close();
	
	// Redirect to menu page.
	header("Location: $r_vend_management_menu_index");
}
else {
	header("Location: $r_vend_management_menu_index");
}




?>