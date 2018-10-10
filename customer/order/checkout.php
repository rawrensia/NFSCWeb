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
	<div class="containerboundary">
		<div class="wrapper" style="paddingtop:20px;">
			<h2>Check Out</h2>
			
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
					Qty: 3
				</div>
				<div class="itemlistprice">
					$15.00
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
					Qty: 2
				</div>
				<div class="itemlistprice">
					$10.00
				</div>
				
				<div class="hiddendetails">
					<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
				</div>
				
			</div>
			
			<br>
			
			<div class="itemlistrecord">
				&nbsp;
				<div class="itemlistitem">
					Total:
				</div>
				<div class="itemlistqty">
					&nbsp;
				</div>
				<div class="itemlistprice">
					$20.00
				</div>
				
				<div class="hiddendetails">
					<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
				</div>
				
			</div>
			
			
			<!-- Form for Payment -->
			
			<!--<form action="addpoc2.php?id=<?php echo $clientid;?>" method="post">-->
			<form action="" method="post">
				<div class="field">
					<div class="label"><label for="payment">Payment:</label></div>
					<br>
					<label><input type="radio" name="payment" value="ns" checked>NS Card</label><br>
					<label><input type="radio" name="payment" value="dc">Debit / Credit Card<label><br>
					<label><input type="radio" name="payment" value="pn">PAYNOW<label><br>  
				</div>
				<div class="hiddendetails">
					<input type="text" name="clientid" value="<?php //echo $clientid;?>">
				</div>
				<input type="submit" name="next" value="Next" class="buttonlargesubmit">
			</form>
			
			
			<a href=""><div class="buttonlargesubmit buttonlargecancel" style="text-align: center;">Cancel</div></a>
			
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