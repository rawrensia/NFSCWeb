<?php

if (isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_sales_index");
}

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$pass = $_POST['password'];
	if(empty($username) || empty($pass))
		exit();
	
	print_r(error_get_last());
	$password = new connection();
	$mysqli = $password->mysqli;
	
	$qry = "SELECT COUNT(*) FROM $db.VendorAccount va
	INNER JOIN $db.VendorMasterAccount vma
	ON va.VendorAccID = vma.VendorAccID
	WHERE Email = '$username' AND Password = '$pass';";
	//$qry2 = "SELECT va.VendorAccID FROM $db.VendorAccount va WHERE va.Email = '$username' AND va.Password = '$pass'";
	
	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	
	$row=$result->fetch_row();
	
	if ($row[0] == 1) {
		
		/*$result = $mysqli->query($qry2);
		$row=$result->fetch_row();
		
		$_SESSION["vendor_managment"] = $row[0];*/
		
		$_SESSION["vendor_managment"] = 1;
		
		echo "<meta http-equiv=\"refresh\" content=\"0\" />";
	}
	else {
		echo "<p class=\"message_error\">Sorry, incorrect username or password entered.<br>Please try again.</p>";
	}
}
if (!empty($mysqli))
	$mysqli->close();

?>