<?php
$connection = new connection();
$mysqli = $connection->mysqli;

$qry2 = "
SELECT t.TransactionID, t.ItemID, i.ItemName, i.Price, t.Quantity, t.DateTime
FROM $db.Transaction t
INNER JOIN $db.Item i
ON t.ItemID = i.ItemID
WHERE t.OrderID = '$orderid'
and i.StoreID = '$storeid'
AND i.Status ='1'
ORDER BY t.DateTime DESC;
";

if (!($result2 = $mysqli->query($qry2)))
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;

$mysqli->close();
?>