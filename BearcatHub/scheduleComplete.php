<?php
session_start();
include("top.php");
require 'model/database.php';
?>

<?php

$studentId = $_SESSION['studentId'];
if (isset($_GET['mw']))
	$mw = $_GET['mw'];
if (isset($_GET['tth']))
	$tth = $_GET['tth'];
if (isset($_GET['f']))
	$f = $_GET['f'];


$con = connect();
insert($con,"INSERT INTO `class_schedule`(`studentId`,`mw`, `tth`, `f`) values('$studentId','$mw','$tth','$f')");

?>

<div id="content">
	<div id="box1">
	<br>
		<h2> <font color = "maroon" size = 11>Successfully Updated Schedule</font> </h2>
		<a href = "tide.php">Click Here to Go Back to Tide</a>
	</div>
	<div id="box2">

	</div>
	<br class="clear" />
</div>



<?php
include("bottom.php");
?>
