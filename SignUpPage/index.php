		
		<?php 
			session_start(); 
			include("top.php"); 
		?>
					<div id="content">
						<div id="box1">
						<br>
							<h2><font face = "brush script mt" color = "maroon" size="25"> Welcome to Bearcat Hub!</font></h2>
							<?php if(!isset($_POST['user'])) { ?>
							<form action = "index.php" method = "POST">
							 Username : <input type = "text" name = "user"></input><br>
							 Password : <input type = "password" name = "pwd"></input><br>
							 <input type = "submit" value = "submit"></input>
							 </form>
							 <a href = "newSignUp.php">Not Registered Yet? Sign Up!</a>
							 
							 <?php } else {
							 require("model/database.php");
							 $con = connect();
							 $user = $_POST['user'];
							 $result = mysqli_query($con,"SELECT * FROM `student` where `email` = '$user'");
							 $fName = "";
							 $studentId = "";
							 while($row = mysqli_fetch_array($result)) {
								if ($row['password'] != base64_encode(gzdeflate($_POST['pwd']))) {
									echo "Username or password is incorrect";
									throw new Exception("Incorrect username or password");
								}	else {
									$fName = $row['firstName'];
									$studentId = $row['studentId'];
								}
							 }
							 close($con);
							 ?>
							<img class="left" src="images/pic2.jpg" width="170" height="140" alt="" />
							<p> 
								<?php 
									$_SESSION['studentId'] = $studentId;
								?>
							    Thank You For Signing In, Welcome <?php echo $fName; echo "   Session id: " . $studentId; } ?> 
						</div>
						<div id="box2">
						</div>
						<br class="clear" />
					</div>
		<?php include("bottom.php"); ?>