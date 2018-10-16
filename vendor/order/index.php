<?php
include "../../auth/connection.php";

// if (isset($_SESSION["vendor_managment"])) redirect to management platform
if (isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_sales_index");
}

$vendorid = $_SESSION["vendor_storeID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schyler</title>
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div class="logincontainerheader">
		<img src="../../img/NSFCW_logo.png" style="height:75px;">
	</div>
	
	<div class="substicky">
		<div class="wrapper">
			<nav class="mainnav">
				<?php
					include "../nav/mainnav-order.php";
				?>
			</nav>
		</div>
	</div>
	<div class="containerboundary">
		<div class="wrapper">
			<div>
				<h2>Order</h2>
				<?php include "queries/getorderstatuslist.php"; ?> <!-- get status that are not 4, i.e. collected -->
				<?php
				if(mysqli_num_rows($result) != 0) {
				?>
				
				<?php
					while($row=$result->fetch_row()) { // co.OrderID, co.Status, co.Request, s.StoreID, s.StoreName, s.StoreNumber
						$orderid = $row[0];
						$status = $row[1];
						$request = $row[2];
						$storeid = $row[3];
						$storename = $row[4];
						$storenumber = $row[5];
						
				?>
				<div class="<?php
				if ($status == '3') {
					echo "ordergreen";
				}
				else {
					echo "orderorange";
				}
				?>">
					<div style="width:100%">
						&nbsp;<div style="width:50%; float:left;"><h2>Order Number: <?php echo $orderid; ?></h2></div><div style="width:45%; float:right; line-height:25px"><!--Status: <?php
						if ($status == 1)
							echo "Received";
						else if ($status == 2)
							echo "Preparing";
						else
							echo "Ready";
						?>--></div>
					</div>
					<br>
					<div style="width:100%">
						&nbsp;
						<form action="queries/setorderstatus.php" method="post" class="onethird">
							<div class="hiddendetails">
								<input type="text" name="status" value="<?php echo "1";?>">
								<input type="text" name="orderid" value="<?php echo $orderid;?>">
							</div>
							<input type="submit" name="changestatus" value="Received" class="buttonlargesubmit" style="<?php
							if ($status == 1) {
								echo "color: #FFF; background-color: #1664C2;";
							}?>">
						</form>
						<form action="queries/setorderstatus.php" method="post" class="onethird">
							<div class="hiddendetails">
								<input type="text" name="status" value="<?php echo "2";?>">
								<input type="text" name="orderid" value="<?php echo $orderid;?>">
							</div>
							<input type="submit" name="changestatus" value="Preparing" class="buttonlargesubmit" style="<?php
							if ($status == 2) {
								echo "color: #FFF; background-color: #1664C2;";
							}?>">
						</form>
						<form action="queries/setorderstatus.php" method="post" class="onethird">
							<div class="hiddendetails">
								<input type="text" name="status" value="<?php echo "3";?>">
								<input type="text" name="orderid" value="<?php echo $orderid;?>">
							</div>
							<input type="submit" name="changestatus" value="Ready" class="buttonlargesubmit" style="<?php
							if ($status == 3) {
								echo "color: #FFF; background-color: #1664C2;";
							}?>">
						</form>
					</div>
					<!--<div style="width:100%">
						&nbsp;<div style="width:50%; float:left;"><h3><?php echo $storename; ?></h3></div><div style="width:45%; float:right; line-height:25px"><?php echo $storenumber; ?></div>
					</div>-->
					<br>
					<br>
					
					<?php include "queries/getorderstatuslist2.php"; ?>
					<?php
					if(mysqli_num_rows($result2) != 0) {
					?>
					<?php
						while($row=$result2->fetch_row()) { // t.TransactionID, t.ItemID, i.ItemName, i.Price, t.Quantity, t.DateTime
							$transactionid = $row[0];
							$itemid = $row[1];
							$itemname = $row[2];
							$price = $row[3];
							$quantity = $row[4];
							$DateTime = $row[5];
							
					?>
					
					<div class="itemlistrecord">
						&nbsp;
						<div class="itemlistitem">
							<?php echo $itemname; ?>
						</div>
						<div class="itemlistqty">
							Qty: <?php echo $quantity; ?>
						</div>
					</div>
					
					<?php
					if ($status == 3) {
					?>
					<div style="width:100%">
						<form action="queries/setorderstatus.php" method="post">
							<div class="hiddendetails">
								<input type="text" name="status" value="<?php echo "4";?>">
								<input type="text" name="orderid" value="<?php echo $orderid;?>">
							</div>
							<input type="submit" name="changestatus" value="Collected" class="buttonlargesubmit">
						</form>
					</div>
					<br>
					<?php
					}
					?>
					
					<?php
						}
					}
					?>
					
				</div>
				<?php
					}
				?>
				
				
				<?php
				}
				else {
					echo "
					<div class='norecordmsg'>
					No Records.
					</div>
					";
				}
				?>
				
				
			</div>
			
		</div>
	</div>
	
	<hr style="border:solid #e7e7e7 1px;">
	<footer>
		<div class="wrapper">
			&copy; 2018 Schyler<br>
			All rights reserved.</p>
		</div>
	</footer>
</body>
</html>