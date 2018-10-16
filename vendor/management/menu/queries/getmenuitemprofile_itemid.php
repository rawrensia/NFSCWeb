<?php
$connection = new connection();
$mysqli = $connection->mysqli;

$qry = "
SELECT i.ItemID, i.ItemName, i.Price, i.Status, i.ProfilePictureDIR, i.StoreID
FROM $db.Item i
WHERE i.StoreID = '$storeid'
AND i.ItemID = '$itemid';
";

if (!($result = $mysqli->query($qry)))
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;

$mysqli->close();
?>