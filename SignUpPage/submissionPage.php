<?php
include("top.php");
$fName = $_POST ["fName"];
$lName = $_POST ["lName"];
if (isset($_POST['sex'])){
	$gender = $_POST ["sex"];
} else {
	checkNull(null, "gender");
}
$eMail = $_POST ["wEmail"];
checkNull($eMail, "wEmail");
$pwd = base64_encode(gzdeflate($_POST ["pswd"]));
$month = $_POST ["month"];
$day = $_POST ["day"];
$year = $_POST ["year"]; 
$date = $month ."/". $day ."/". $year;

require 'model/database.php';
$con = connect();
insert($con,"INSERT INTO `student`(`firstName`, `lastName`, `email`, `gender`, `password`, `dateOfBirth`) values('$fName','$lName','$eMail','$gender','$pwd','$date')");
close($con);


function checkNull ($input, $fieldName) {
	if ($input == null){
		throw  new Exception("Please enter value for " . $fieldName);
	}
}

?>
<div id="content">
	<div id="box1">

	Thank you for signing up! Welcome <?php echo $fName; ?>. Please <a href = "index.php">Login</a>
	</div>
	<div id = "box2">
	</div>
	<br class="clear" />
</div>
	
<?php
include("bottom.php")
?>

