<?php
include("top.php");
$fName = $_POST ["fName"];
$lName = $_POST ["lName"];

$eMail = $_POST ["wEmail"];
checkNull($eMail, "wEmail");
$pwd = base64_encode(gzdeflate($_POST ["pswd"]));


require 'model/database.php';
$con = connect();
insert($con,"INSERT INTO `student`(`firstName`, `lastName`, `email`, `password`) values('$fName','$lName','$eMail','$pwd')");
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

