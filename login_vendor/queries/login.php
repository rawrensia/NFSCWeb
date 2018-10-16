<?php

if (isset($_SESSION["vendor_storeID"])) {
	header("Location: $r_vend_order_index");
}

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$pass = $_POST['password'];
	if(empty($username) || empty($pass))
		exit();
	
	print_r(error_get_last());
	$password = new connection();
	$mysqli = $password->mysqli;
	
	$qry = "SELECT COUNT(*) FROM $db.VendorAccount
	WHERE Email = '$username' AND Password = '$pass';";
	$qry2 = "SELECT va.StoreID FROM $db.VendorAccount va WHERE va.Email = '$username' AND va.Password = '$pass'";
	
	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	
	$row=$result->fetch_row();
	
	if ($row[0] == 1) {
		
		$result = $mysqli->query($qry2);
		$row=$result->fetch_row();
		
		$_SESSION["vendor_storeID"] = $row[0];
		
		echo "<meta http-equiv=\"refresh\" content=\"0\" />";
	}
	else {
		echo "<p class=\"message_error\">Sorry, incorrect username or password entered.<br>Please try again.</p>";
	}
}
if (!empty($mysqli))
	$mysqli->close();

?>