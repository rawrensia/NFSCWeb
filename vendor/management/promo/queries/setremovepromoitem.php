<?php
// Receive items from form; add them to cart; redirect to store page using store id.
include "../../../../auth/connection.php";

if (isset($_POST['yes'])) {
	// Receive form input
	$itemid = $_POST['itemid'];
	
	$vendorid = $_SESSION["vendor_storeID"];
	
	// Delete from promotion
	$connection = new connection();
	$mysqli = $connection->mysqli;
	
	echo $itemid;
	
	$qry = "
	DELETE FROM $db.Promotion
	WHERE ItemID = '$itemid';
	";

	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	else {
		$_SESSION["promo_item_deleted"] = 1;
	}
	
	$mysqli->close();
	
	// Redirect to menu page.
	header("Location: $r_vend_management_promo_index");
}
else {
	header("Location: $r_vend_management_promo_index");
}




?>