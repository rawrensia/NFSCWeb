<?php
$connection = new connection();
$mysqli = $connection->mysqli;

$qry = "
SELECT s.BankAcc
FROM $db.Store s
WHERE s.StoreID = '$vendorid'
";

if (!($result = $mysqli->query($qry)))
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;

$mysqli->close();
?>