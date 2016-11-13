<?php
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--

	Design by Free CSS Templates
	http://www.freecsstemplates.org
	Released for free under a Creative Commons Attribution License

	Name       : Eponymous
	Version    : 1.0
	Released   : 20130222

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
    	<meta name=\"viewport\" content=\"width=device-width\">
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
		<title>Beartcat Hub</title>
        <link href=\"http://fonts.googleapis.com/css?family=Arvo\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />
		<link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
		<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
		<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
		<script src=\"app.js\"></script>
		<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <div class =\"background-image\">
    </div>
    <body>
		<div id=\"bg\">
		<div id=\"outer\">
				<div id=\"header\">
					<div id=\"logo\">
						<h1>
							<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'><a href = 'tide.php'>Bearcat Hub</a></font></a>
						</h1>
					</div>
					
					<div class=\"nav\">
						<ul>
							<li class=\"menu\">
								<a href=\"tide.php\">Tide</a>
							</li>
							<li class=\"menu\">
								<a href=\"buyAndSell.php\">Marketplace</a>
							</li>
							<li>
								<a href=\"rideShare1.html\">Ride Share</a>
							</li>
							<li>
								<a href=\"about.php\">About</a>
							</li>
							";

							if(!isset($_SESSION["valid"]) || $_SESSION["valid"]==false) {
							  echo"<li>";
							  echo"<a href=\"index.php\">Login</a>";
							  echo"</li>";

							} else {
							  echo"<li>";
							  echo"<a href=\"logout.php\">Logout</a>";
							  echo"</li>";
							} echo"								
						</ul>
						<br class=\"clear\" />
				</div>
			</div>
				
				<div id=\"main\">
					"
?>