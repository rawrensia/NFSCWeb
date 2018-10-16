<?php
include "../../../../auth/connection.php";

if (isset($_POST['save'])) {
	// Receive form input
	$bankacc = $_POST['bankacc']; 
	
	$vendorid = $_SESSION["vendor_storeID"];
	
	// Update record
	$connection = new connection();
	$mysqli = $connection->mysqli;

	$qry = "
	UPDATE $db.Store
	SET BankAcc = '$bankacc'
	WHERE StoreID = '$vendorid';
	";

	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	else {
		$_SESSION["profile_updated"] = 1;
	}
	
	$mysqli->close();
	
	// Redirect to order page.
	header("Location: $r_vend_management_settings_index");
}
else {
	header("Location: $r_vend_management_settings_index");
}




?>