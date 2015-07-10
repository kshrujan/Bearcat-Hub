<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	Design by Free CSS Templates
	http://www.freecsstemplates.org
	Released for free under a Creative Commons Attribution License

	Name       : Eponymous
	Version    : 1.0
	Released   : 20130222

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Eponymous by FCT</title>
        <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="#">Bearcat Hub!</a>
						</h1>
					</div>
					<div id="nav">
						<ul>
							<li class="first active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Services</a>
							</li>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Portfolio</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li class="last">
								<a href="#">Contact</a>
							</li>
						</ul>
						<br class="clear" />
					</div>
				</div>
				<div id="banner">
					<img src="images/header.jpg" width="1120" height="200" alt="" />
				</div>
				<div id="main">
					<div id="sidebar">
						<h3>
							Nascetur etiam et consequat amet
						</h3>
						<p>
							Suspendisse pretium leo convallis. Viverra augue euismod sodales etiam volutpat. Vulputate amet
							sapien quis placerat et vulputate. Lorem ipsum dolor sit amet.
						</p>
						<ul class="linkedList">
							<li class="first">
								<a href="#">Nulla diam vivamus</a>
							</li>
							<li>
								<a href="#">Pretium mollis cubilia</a>
							</li>
							<li>
								<a href="#">Auctor est fermentum</a>
							</li>
							<li>
								<a href="#">Praesent est ullamcorper</a>
							</li>
							<li class="last">
								<a href="#">Volutpat et blandit</a>
							</li>
						</ul>
					</div>
3							<h2> Welcome to Bearcat Hub!</h2>
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
							 while($row = mysqli_fetch_array($result)) {
								if ($row['password'] != base64_encode(gzdeflate($_POST['pwd']))) {
									echo "Username or password is incorrect";
									throw new Exception("Incorrect username or password");
								}	else {
									$fName = $row['firstName'];
								}
							 }
							 close($con);
							?>
							 
							 
							 
							 
							<img class="left" src="images/pic2.jpg" width="170" height="140" alt="" />
							<p> 
							    Thank You For Signing In, Welcome <?php echo $fName; ?> 
								<!--This is <strong>Eponymous</strong>, a two column CSS template by
								<a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a> with photos from 
								<a href="http://www.pdphoto.org/">PDPhoto</a>. It's released (for free) under the
								<a href="http://www.freecsstemplates.org/license/">Creative Commons Attribution 3.0 license</a>,
								so feel free to use it for any personal or commercial work, just keep our footer credit links intact.
								Hit up our <a href="http://www.freecsstemplates.org/">website</a> for more awesomely
								cool free templates, and follow us on <a href="http://twitter.com/freecsstemplate">Twitter</a>
								(<a href="http://twitter.com/freecsstemplate">@freecsstemplate</a>) for updates, announcements, and other
								interesting ramblings.-->
							</p>
							<?php } ?>
						</div>
						<!--<div id="box2">
							<h3>
								
							</h3>
							<p>
								
							</p>
							<ul class="linkedList">
								<!--<li class="first">
									<a href="#"></a>
								</li>
								<li>
									<a href="#"></a>
								</li>
								<li>
									<a href="#"></a>
								</li>
								<li>
									<a href="#"></a>
								</li>
								<li class="last">
									<a href="#"></a>
								</li>
							</ul>
						</div> 
						<br class="clear" />-->
					</div>
					<br class="clear" />
				</div>
				<div id="footer">
					<div id="footerSidebar">
						<h3>
							Odio adipiscing
						</h3>
						<ul class="linkedList">
							<li class="first">
								<a href="#">Curabitur mus posuere</a>
							</li>
							<li>
								<a href="#">Penatibus et accumsan</a>
							</li>
							<li class="last">
								<a href="#">Convallis sed ornare</a>
							</li>
						</ul>
					</div>
					<div id="footerContent">
						<h3>
							Proin dolor nullam
						</h3>
						<p>
							Magna euismod risus interdum vulputate viverra. Urna ultrices vitae ornare volutpat. Pellentesque penatibus 
							semper aliquam mollis. Urna lobortis elit eget a dignissim rutrum. Integer ipsum ligula sociis tellus quam enim. 
							Nibh nec phasellus mattis montes faucibus malesuada. Venenatis cubilia odio volutpat phasellus facilisis 
							ultricies convallis. Convallis purus urna suspendisse consectetur feugiat. Varius dignissim aliquet montes 
							libero. Consectetur a lobortis nulla montes quisque blandit. Primis eget vestibulum pretium turpis.
						</p>
					</div>
					<br class="clear" />
				</div>
			</div>
			<div id="copyright">
				&copy; Your Site Name | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>
			</div>
		</div>
    </body>
</html>
