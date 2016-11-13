
		<?php
			session_start();
			include("top.php");

		?>
					<div class="signIncontent">
						<div class="signInBox">
						 <h2 class = "welcomeCenter"><font color = "maroon" size="25">Enter Username and Password</font></h2>
							<?php
								$msg = "";
							if (isset($_POST['login']) && !empty($_POST['user']) && !empty($_POST['pwd'])) {
							 require("model/database.php");
							 $con = connect();
							 $user = $_POST['user'];
							 $result = mysqli_query($con,"SELECT * FROM `student` where `email` = '$user'");
							 if (!$result) {    die('Invalid query: ' . mysql_error());}

							 $fName = "";
							 $studentId = "";
							while($row = mysqli_fetch_array($result)) {
								if ($row['password'] != base64_encode(gzdeflate($_POST['pwd']))) {
									// echo "Username or password is incorrect";
									// throw new Exception("Incorrect username or password");
									$msg = 'Wrong username or password1';
								}	else {
									$fName = $row['firstName'];
									$studentId = $row['studentId'];
									$_SESSION['valid'] = true;
									$_SESSION['timeout'] = time();
									$_SESSION['studentId'] = $studentId;
									header("Location: tide.php");
								}
							 }
							 close($con);


            			} else {
            				if (isset($_POST['login'])) {
            					$msg = 'Wrong username or password';
            				}

            			}
 					?>

							<form class = "signUpForm" action = "index.php" method = "POST">
								<?php echo $msg;?>
							 <br><input placeholder = "Username (email)" class = "signInTextBox" type = "text" name = "user"></input><br><br>
							 <input placeholder = "Password" class = "signInTextBox" type = "password" name = "pwd"></input><br><br>
							 <button class = "signInBtn" name ="login">Login</button>
							 <button class = "signInClearBtn" name ="clear" onClick="clearFields()">Clear</button><br><br>
							 <hr class="seamless"></hr><br>
							 <a href = "newSignUp.php">Not Registered Yet? Sign Up!</a>
							 </form>

							<script type="text/javascript">
								function clearFields(){
									document.getElementsByTagName('user').value="";
									document.getElementsByTagName('pwd').value="";
								}

							</script>

						</div>
						<div id="box2">
						</div>
						<br class="clear" />
					</div>
		<?php include("bottom.php"); ?>
