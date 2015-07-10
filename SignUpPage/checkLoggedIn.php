<?php
if (!isset($_SESSION['studentId'])) {
	include("top.php");
	?>
						<div id="content">
						<div id="box1">
	<?php
				echo "Please sign in before you try to buy or sell";
				echo "<a href=\"index.php\"> Click here to go back to sign in page</a>";
	?>
	</div>
	</div>
	<?php
	include("bottom.php");
	return;
}
?>