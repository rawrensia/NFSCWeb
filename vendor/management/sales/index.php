<?php
include "../../../auth/connection.php";

if (!isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_index");
}

$vendorid = $_SESSION["vendor_storeID"];

if(isset($_GET["searchfrom"]) && !empty($_GET["searchfrom"])) {
	$searchStart = strtotime(date('Y-m-d 00:00:00', strtotime($_GET["searchfrom"])));
	if(isset($_GET["searchto"]) && !empty($_GET["searchto"]))
		$searchEnd = strtotime(date('Y-m-d 23:59:59', strtotime($_GET["searchto"])));
	else
		$searchEnd = mktime(23, 59, 59, date("m", $searchStart) , date("d", $searchStart), date("Y", $searchStart));
} else {
	$searchStart = mktime(0,0,0, date("m"), date("d"), date("Y"));
	$searchEnd = mktime(23, 59, 59, date("m"), date("d"), date("Y"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schyler</title>
	<link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../../js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div class="logincontainerheader">
		<img src="../../../img/NSFCW_logo.png" style="height:75px;">
	</div>
	
	<div class="substicky">
		<div class="wrapper">
			<nav class="mainnav">
				<?php
					include "../../nav/mainnav-management-sales.php";
				?>
			</nav>
		</div>
	</div>
	<div class="containerboundary">
		<div class="wrapper">
			<?php include "queries/getsearchedvendorsales.php";?>

			<?php
			$row=$result->fetch_row();
			?>
			<div>
				<h2>Sales</h2>
				<form action="" method="get">
					<div class="field">
						<div class="label"><label for="searchfrom">From:</label></div>
						<input type="date" id="searchfrom" name="searchfrom" placeholder="dd/mm/yyyy" required>
					</div>
					<div class="field">
						<div class="label"><label for="searchto">To:</label></div>
						<input type="date" id="searchto" name="searchto" placeholder="dd/mm/yyyy" required>
					</div>
					<div class="hiddendetails">
						<!--<input type="text" name="id" value="<?php echo $siteid;?>">-->
					</div>
					<input type="submit" name="search" value="Search" class="buttonlargesubmit">
				</form>
				
			</div>
			<br>
			<h2 style="text-align: left;">Store Name<?php //echo $name_site;?></h2>
			<div class="profileinfo">
				<div class="label">From: </div>
				<div class="info"><?php echo date('d/m/Y (D) H:i', $searchStart);?></div>
			</div>
			<div class="profileinfo">
				<div class="label">To: </div>
				<div class="info"><?php echo date('d/m/Y (D) H:i', $searchEnd);?></div>
			</div>
			
			<?php
			if(mysqli_num_rows($result) != 0) { // t.TransactionID, i.ItemID, i.ItemName, i.Price, t.Quantity, t.DateTime
			?>
			<?php
				$totalsales = 0;
				do {
					$transactionid = $row[0];
					$itemid = $row[1];
					$itemname = $row[2];
					$price = $row[3];
					$quantity = $row[4];
					$datetime = $row[5];
					
					$totalsales += ($price*$quantity);
					
				?>
				<div class="itemlistrecord">
					<div style="margin-left: 7px; font-size: 70%;">
						<?php echo $datetime;?>
					</div>
					&nbsp;
					<div class="itemlistitem">
						<?php echo $itemname;?>
					</div>
					<div class="itemlistqty">
						Qty: <?php echo $quantity;?>
					</div>
					<div class="itemlistprice">
						$<?php echo $price*$quantity;?>
					</div>
											
				</div>
				<?php
				}while($row=$result->fetch_row());
				
				
				echo "<br> <p style='font-weight:bold;'>Total Sales: $".$totalsales."</p>";
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
	
	<hr style="border:solid #e7e7e7 1px;">
	<footer>
		<div class="wrapper">
			&copy; 2018 Schyler<br>
			All rights reserved.</p>
		</div>
	</footer>
</body>
</html>