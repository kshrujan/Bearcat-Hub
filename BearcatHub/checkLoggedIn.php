<?php
session_start();
if ($_SESSION["valid"] == false) {
	include("top.php");
	?>
						<div id="content">
						<div id="box1">
	<?php
				echo "Sorry, but you'll have to sign in to use Bearcat Hub's services";
				echo "<a href=\"index.php\"> Click here to go back to sign in page</a>";
				echo '<script type="text/javascript">alert("Sorry, but session is invalid");</script>';
				header("Location: index.php");
	?>
	</div>
	</div>
	<?php
	include("bottom.php");
	return;
} 
?>