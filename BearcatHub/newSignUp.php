<?php include("top.php"); ?>
<script>
  $(function() {
    $( document ).tooltip();
  });
  </script>
  <script>
  	function validateForm() {
  		var x = document.forms['signup']['wEmail'].value;
  		if (x == null || x == "" || x.indexOf("willamette.edu") == -1) {
  			confirm("We require you to sign up with a willamette.edu email address!");
  			return false;
  		}
  	}
  </script>
  <style>
  label {
    display: inline-block;
    width: 1em;
  }
  </style>
					<div id="content">

							<br>
							<h2><font color = "maroon">Sign Up</font> </h2>
							<form name='signup' action = "submissionPage.php" method = "POST">
							First Name : <input type = "text" name = "fName" class="signUpTextBox" required><br><br>
							Last Name : <input type = "text" name = "lName" class="signUpTextBox" required><br><br>
							Username: <input type = "email" name = "wEmail" class="signUpTextBox" required pattern=".{6,}"><br><br>
							Password : <input type = "password" name = "pswd" size = "15" class="signUpTextBox" required><br><br>
							<button name ="submit" class ="signInBtn" onclick='return validateForm()'>Sign Me Up!</button>

							<a href="index.php">Already Have an Account?</a>
							</form>


						<div id="box2">
							<div id="box1">

							</div>
						</div>
						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>
