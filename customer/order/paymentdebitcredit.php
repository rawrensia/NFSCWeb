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
			<h2>Payment - Debit / Credit Card</h2>
			
			<img src="../../img/visamaster.png" style="height:80px;">
			
			<!-- Form -->
			
			<!--<form action="addpoc2.php?id=<?php echo $clientid;?>" method="post">-->
			<form action="" method="post">
				<div class="field">
					<div class="label">Payable Amount:</div>
					$20.00
				</div>
				<br>
				<div class="field">
					<div class="label"><label for="nameoncard">Name on Card:</label></div>
					<input type="text" id="nameoncard" name="nameoncard" required>
				</div>
				<div class="field">
					<div class="label"><label for="cardnumber">Card Number:</label></div>
					<input type="text" id="cardnumber" name="cardnumber" required>
				</div>
				<div class="field">
					<div class="label"><label for="expirydate">Expiry Date:</label></div>
					<input type="text" id="expirydate" name="expirydate" placeholder="MM/YY" required>
				</div>
				<div class="field">
					<div class="label"><label for="securitycode">Security Code:</label></div>
					<input type="text" id="securitycode" name="securitycode" required>
				</div>
				<div class="hiddendetails">
					<input type="text" name="clientid" value="<?php //echo $clientid;?>">
				</div>
				<input type="submit" name="pay" value="Pay" class="buttonlargesubmit">
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