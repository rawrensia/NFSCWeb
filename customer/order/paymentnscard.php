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
			<h2>Payment - NS Card</h2>
			
			<!--<form action="addpoc2.php?id=<?php echo $clientid;?>" method="post">-->
			<form action="" method="post">
			
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						Balance:
					</div>
					<div class="itemlistqty">
						&nbsp;
					</div>
					<div class="itemlistprice">
						$50.00
					</div>
					
					<div class="hiddendetails">
						<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
					</div>
					
				</div>
				
				
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						Payable Amount
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
				
				<br>
				
				<div class="itemlistrecord">
					&nbsp;
					<div class="itemlistitem">
						New Balance:
					</div>
					<div class="itemlistqty">
						&nbsp;
					</div>
					<div class="itemlistprice">
						$30.00
					</div>
					
					<div class="hiddendetails">
						<input type="text" name="cartitem" value="<!-- fooditemid and qty --><?php //echo $clientid;?>">
					</div>
					
				</div>
			
			
				<div class="hiddendetails">
					<input type="text" name="clientid" value="<?php //echo $clientid;?>">
				</div>
				<!-- if balance is negative, hide pay button -->
				<input type="submit" name="pay" value="Pay" class="buttonlargesubmit">
			</form>
			
			<!-- if balance is negative, show top up card button -->
			<a href=""><div class="buttonlargesubmit" style="text-align: center; display:none;">Top Up Card</div></a>
			
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