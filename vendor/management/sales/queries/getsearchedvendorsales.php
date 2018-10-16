<?php
	$connection = new connection();
	$mysqli = $connection->mysqli;	

	$qry = "
	SELECT t.TransactionID, i.ItemID, i.ItemName, i.Price, t.Quantity, t.DateTime
	FROM $db.Transaction t
	INNER JOIN $db.Item i
	ON t.ItemID = i.ItemID
	WHERE t.OrderID IS NOT NULL
	AND i.StoreID = '$vendorid'
	AND t.DateTime IN (SELECT DateTime FROM $db.Transaction WHERE DateTime BETWEEN '" . date('Y-m-d H:i:s', $searchStart) . "' AND '" . date('Y-m-d H:i:s', $searchEnd) . "')
	ORDER BY t.DateTime DESC;
	";
	
	if (!($result = $mysqli->query($qry)))
		echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
	
	$mysqli->close();
?>