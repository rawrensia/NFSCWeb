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
				
				<h2>Cart</h2>
				
				<form action="" method="post">
					
					<div class="itemlistrecord">
						&nbsp;
						<div class="itemlistitem">
							Food Item
						</div>
						<div class="itemlistqty">
							Qty: 1
						</div>
						<a href="<?php //echo $href;?>" class="itemlistremove">
							X
						</a>
						
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
							Qty: 3
						</div>
						<a href="<?php //echo $href;?>" class="itemlistremove">
							X
						</a>
						
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
							Qty: 2
						</div>
						<a href="<?php //echo $href;?>" class="itemlistremove">
							X
						</a>
						
						<div class="hiddendetails">
							<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
						</div>
						
					</div>
					
					
					<div class="hiddendetails">
						<input type="text" name="clientid" value="<?php //echo $clientid;?>">
					</div>
					<input type="submit" name="checkout" value="Check Out" class="buttonlargesubmit">
				</form>
				
				<br>
				
				<a href="pasttransactions.php"><div class="buttonlargesubmit" style="text-align: center;">Past Transactions</div></a>
				
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