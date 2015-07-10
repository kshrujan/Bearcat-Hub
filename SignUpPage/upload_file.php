<?php 
session_start();
include("top.php");
require 'model/database.php';

$title = $_POST ["title"];
checkNull($title,"title");
$category = $_POST ["category"];
$description = $_POST ["description"];
if (isset($_POST['offer'])){
	$offer = $_POST ["offer"];
} else {
	checkNull(null, "offer");
}
$fileLoc = "";
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  $fileLoc = "http://" . $_SERVER['SERVER_NAME'] . "/SignUpPage/upload/" . $_FILES["file"]["name"];
	echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }


$price = $_POST ["price"];
$studentId = $_SESSION['studentId'];

$con = connect();
insert($con,"INSERT INTO `inventory`(`studentId`,`title`, `category`, `description`, `offerType`, `price`, `images`) values('$studentId','$title','$category','$description','$offer','$price', '$fileLoc')");
close($con);


function checkNull ($input, $fieldName) {
	if ($input == null){
		throw  new Exception("Please enter value for " . $fieldName);
	}
}
?>


<div id="content">
	<div id="box1">
	<br>
		<h2> <font color = "maroon" size = 11>Your Query has Been Uploaded Successfully!</font> </h2>
		<a href = "buyAndSell.php">Go Back to Buy/Sell Page</a>
	</div>
	<div id="box2">
		
	</div>
	<br class="clear" />
</div>
<?php 
include("bottom.php");
?>