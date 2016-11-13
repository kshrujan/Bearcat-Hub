<?php
session_start();
include("top.php");
require 'model/database.php';
?>

<?php

if (isset($_GET['title']))
	$title = $_GET['title'];
if (isset($_GET['description']))
	$description = $_GET['description'];
if (isset($_GET['offer']))
	$offer = $_GET['offer'];
if (isset($_GET['price']))
	$price = $_GET['price'];

$productId = $_GET['productId'];
$con = connect();
$query = "UPDATE `inventory`  SET title='$title', description='$description' , offerType='$offer', price='$price' WHERE productId = '$productId'";
$result = mysqli_query($con, $query);

?>

<div id="content">
	<div id="box1">
	<br>
		<h2> <font color = "maroon" size = 11>You Have Updated the Following Listing: <?php  echo "$title" ?></font> </h2>
		<a href = "buyAndSell.php">Go Back to the Marketplace</a>
	</div>
	<div id="box2">

	</div>
	<br class="clear" />
</div>















<?php
include("bottom.php");
?>
