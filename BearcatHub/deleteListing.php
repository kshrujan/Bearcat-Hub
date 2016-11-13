<?php
session_start();
include("top.php");
require 'model/database.php';
?>

<?php
$productId = $_GET['productId'];
$con = connect();
$result = mysqli_query($con,"DELETE FROM `inventory` WHERE `productId` = $productId ");
?>

<div id="content">
	<div id="box1">
	<br>
		<h2> <font color = "maroon" size = 11>You Have Deleted the Listing</font> </h2>
		<a href = "buyAndSell.php">Go Back to the Martketplace</a>
	</div>
	<div id="box2">

	</div>
	<br class="clear" />
</div>




<?php
include("bottom.php");
?>
