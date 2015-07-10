<?php include("top.php"); ?>
					<div id="content">
						<div id="box1">
						<br>
							<h2> <font color = "maroon">Sign Up</font> </h2>
							<form action = "submissionPage.php" method = "POST">
							First Name : <input type = "text" name = "fName"><br><br>
							Last Name : <input type = "text" name = "lName"><br><br><br>
							Gender : <br>
                            <input type = "radio" name = "sex" value = "Male"> Male 
						    <input type = "radio" name = "sex" value = "Female"> Female<br><br>
							Username(Willamette Email) : <input type = "text" name = "wEmail"><br>
							Password : <input type = "password" name = "pswd" size = "15"><br><br>
							Date of Birth : 
							<input type = "text" name = "month" size = "5"> / 
                            <input type = "text" name = "day" size = "5"> / 
							<input type = "text" name = "year" size = "7"><br><br>
							<input type = "submit" name ="submit"></input>
							</form>
							
						</div>
						<div id="box2">
							
						</div>
						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>