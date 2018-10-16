<?php
include "../../../auth/connection.php";

if (!isset($_SESSION["vendor_managment"])) {
	header("Location: $r_vend_management_index");
}

$vendorid = $_SESSION["vendor_storeID"];
$storeid = $vendorid;
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
					include "../../nav/mainnav-management-promo.php";
				?>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="wrapper">
			<div>
				<h2>Add Promo Item</h2>
				<nav class="mainnav">
					<?php
						include "../../nav/subnav-management-promo-add.php";
					?>
					&nbsp;
				</nav>
				
				<?php include "queries/getnonpromolist.php"; ?>
				<?php
				if(mysqli_num_rows($result) != 0) {
				?>
				<?php
				while($row=$result->fetch_row()) {
					$itemid = $row[0];
					$itemname = $row[1];
					$price = $row[2];
					$profilepicturedir = $row[3] == NULL ? "../../../img/food.png" : $row[3];
					$status = $row[4];
					
					$href = "addpromoitem2.php?id=" . $itemid;
				?>
				<div class="cleanlink">
					
					<div class="item">
						<div class="hiddendetails">
							<?php echo $itemid;?>
						</div>
						<a href="<?php echo $href;?>">
							<div class="detailsnotonlyimg">
								<img src="<?php echo $profilepicturedir;?>" alt="Picture of Food">
							</div>
						</a>
						<div class="detailsnotonly">
							<a href="<?php echo $href;?>">
								<div class="detailsonly">
									<div class="description"><?php echo $itemname;?></div>
									<div class="subdescription">$<?php echo $price;?></div>
								</div>
							</a>
							<a href="<?php echo $href;?>"><div class="edit"><?php
							if ($status == 1) {
								echo "Available";
							}
							else {
								echo "Unavailable";
							}
							?></div></a>
						</div>
					</div>
					
				</div>
				<?php
					}
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
			<br>
			
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