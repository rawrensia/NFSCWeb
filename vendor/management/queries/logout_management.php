<?php
	session_start();
	//include_once 'redirectlist.php';
	if (!isset($_SESSION["vendor_managment"])) {
		header("Location: http://localhost/cz3002%20-%20schyler/vendor/management/index.php");
	}
	unset($_SESSION['vendor_managment']);	
	
	//$_SESSION["vendor_userID_logout"] = 1;
	echo "<meta http-equiv=\"refresh\" content=\"0\" />";
?>