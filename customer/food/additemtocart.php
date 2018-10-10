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
					include "../nav/mainnav-food.php";
				?>
			</nav>
		</div>
	</div>
	<div class="containerboundary">
		<div class="wrapper">
			<div>
				
				<h2>Store Name</h2>
				Store Number
				
				<div class="profile">
					<img src="../../img/food.png<?php //echo $profilepicturedir;?>" alt="Picture of Food">
					<div >
						<?php //echo $name_staff;?>
						<h2>Food Item</h2>
						<br>
						Price: $4.50
					</div>
				</div>
				
				
			
				<br>
				
				<!-- Form -->
				
				<!--<form action="addpoc2.php?id=<?php echo $clientid;?>" method="post">-->
				<form action="" method="post">
					<div class="field">
						<div class="label"><label for="qty">Quantity:</label></div>
						<select id="qty" name="qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="field">
						<div class="label"><label for="request">Request:</label></div>
						<input type="text" id="request" name="request" required>
					</div>
					<div class="hiddendetails">
						<input type="text" name="clientid" value="<?php //echo $clientid;?>">
					</div>
					<input type="submit" name="next" value="Next" class="buttonlargesubmit">
				</form>
				
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