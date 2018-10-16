<?php
include "../../../auth/connection.php";

if (isset($_POST['changestatus'])) {
	// Receive form input
	$status = $_POST['status'];
	$orderid = $_POST['orderid'];
	
	$vendorid = $_SESSION["vendor_storeID"];
	
	// Remove item from cart
	$connection = new connection();
	$mysqli = $connection->mysqli;

	$qry = "
	UPDATE $db.CustomerOrder
	SET Status = '$status'
	WHERE OrderID = '$orderid';
	";

	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
		
	$mysqli->close();
	
	// Redirect to order page.
	header("Location: $r_vend_order_index");
}
else {
	header("Location: $r_vend_order_index");
}




?>