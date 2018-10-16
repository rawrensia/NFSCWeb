<?php
$connection = new connection();
$mysqli = $connection->mysqli;

$qry = "
SELECT i.ItemID, i.ItemName, i.Price, i.ProfilePictureDir, i.Status
FROM $db.Item i
LEFT JOIN $db.Promotion p
ON i.ItemID = p.ItemID
WHERE i.StoreID = '$storeid'
ORDER BY i.ItemName ASC;
";

if (!($result = $mysqli->query($qry)))
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;

$mysqli->close();
?>