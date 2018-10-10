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
				
				<h2>Past Transactions</h2>
				
				
				09-10-2018
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						Food Item
					</div>
					<div class="itemlistqty">
						Qty: 1
					</div>
					<div class="itemlistprice">
						$5.00
					</div>
					
					<div class="hiddendetails">
						<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
					</div>
					
				</div>
				
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						Food Item
					</div>
					<div class="itemlistqty">
						Qty: 1
					</div>
					<div class="itemlistprice">
						$5.00
					</div>
					
					<div class="hiddendetails">
						<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
					</div>
					
				</div>
				
				<br>
				
				08-10-2018
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						Food Item
					</div>
					<div class="itemlistqty">
						Qty: 2
					</div>
					<div class="itemlistprice">
						$5.00
					</div>
					
					<div class="hiddendetails">
						<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
	
	<hr style="border:solid #e7e7e7 1px;">
	<footer>
		<div class="wrapper">
			&copy; 2018 Schlyer<br>
			All rights reserved.</p>
		</div>
	</footer>
</body>
</html>