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
			
			<!--<form action="addpoc2.php?id=<?php echo $clientid;?>" method="post">-->
			<form action="" method="post">
				<div class="field">
					<div class="label"><label for="payment">Payment:</label></div>
					<br>
					<label><input type="radio" name="payment" value="nets" checked>NETS Pay</label><br>
					<label><input type="radio" name="payment" value="dbs">DBS PayLah<label><br>
					<label><input type="radio" name="payment" value="ocbc">OCBC Pay Anyone<label><br>
					<label><input type="radio" name="payment" value="uob">UOB Mighty<label><br>
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