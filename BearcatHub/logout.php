	<?php 
		session_start(); 
		include("top.php"); 
	?>
		
							<?php 
							unset($_SESSION["studentId"]);
							$_SESSION["valid"] = false;
							unset($_SESSION["timeout"]);
							header("Location: index.php");
							exit();

							?>
						
	<?php include("bottom.php"); ?>