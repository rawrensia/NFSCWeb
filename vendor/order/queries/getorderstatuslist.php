<?php
$connection = new connection();
$mysqli = $connection->mysqli;

$qry = "
SELECT co.OrderID, co.Status, co.Request, s.StoreID, s.StoreName, s.StoreNumber
FROM $db.CustomerOrder co
INNER JOIN $db.Transaction t
ON co.OrderID = t.OrderID
INNER JOIN $db.Item i
ON t.ItemID = i.ItemID
INNER JOIN $db.Store s
ON i.StoreID = s.StoreID
WHERE i.StoreID = '$vendorid'
AND t.OrderID IS NOT NULL
AND co.Status < 4
GROUP BY co.OrderID
ORDER BY co.OrderID ASC;
";

if (!($result = $mysqli->query($qry)))
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;

$mysqli->close();
?>