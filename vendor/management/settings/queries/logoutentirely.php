<?php
	session_start();
	//include_once 'redirectlist.php';
	if (!isset($_SESSION["vendor_managment"]) && !isset($_SESSION["vendor_storeID"])) {
		header("Location: http://localhost/cz3002%20-%20schyler");
	}
	
	unset($_SESSION['vendor_managment']);
	unset($_SESSION['vendor_storeID']);
	
	//$_SESSION["vendor_userID_logout"] = 1;
	echo "<meta http-equiv=\"refresh\" content=\"0\" />";
?>