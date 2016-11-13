<?php

$HOST = "localhost";
$USER = "";
$PASSWD = "";
$DB = "test";

function connect() {
	global $HOST, $USER, $PASSWD, $DB;
	$con=mysqli_connect($HOST, $USER, $PASSWD, $DB);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $con;
}

function close($con) {
	mysqli_close($con);
}

function insert($con, $sql) {
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	return true;
}

?>