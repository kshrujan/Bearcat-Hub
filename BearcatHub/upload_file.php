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

// echo"file 1:".$_FILES["file"]["name"][0];
// echo"file 2:".$_FILES["file"]["name"][1];

//print_r($_FILES);
$imagesPathInDb = "";

$fileLoc = "";
$allowedExts = array("GIF", "JPEG", "JPG", "PNG");

for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {
  $currFileName = $_FILES["file"]["name"][$i];
  $currFileTmpName = $_FILES["file"]["tmp_name"][$i];
  $temp = explode(".", $currFileName);
  $extension = strtoupper(end($temp));
  $currFileType = $_FILES["file"]["type"][$i];
  $currFileError = $_FILES["file"]["error"][$i];
if ((($currFileType == "image/gif")
|| ($currFileType == "image/jpeg")
|| ($currFileType == "image/jpg")
|| ($currFileType == "image/pjpeg")
|| ($currFileType == "image/x-png")
|| ($currFileType == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($currFileError > 0)
    {
    // echo "Return Code: " . $currFileError . "<br>";
    }
  else
    {
    // echo "Upload: " . $currFileName . "<br>";
    // echo "Type: " . $currFileType . "<br>";
    // echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " kB<br>";
    // echo "Temp file: " . $currFileTmpName . "<br>";
    $fileLoc = "http://" . $_SERVER['SERVER_NAME'] . "/BearcatHub/upload/" . $currFileName;
    if (file_exists("upload/" . $currFileName))
      {
        // echo $currFileName . " already exists. ";
      }
    else
      {
        move_uploaded_file($currFileTmpName, "upload/" . $currFileName);
	      // echo "Stored in: " . "upload/" . $currFileName;
      }
      $GLOBALS['imagesPathInDb'] = $GLOBALS['imagesPathInDb'] == "" || !isset($GLOBALS['imagesPathInDb']) ? $fileLoc : $GLOBALS['imagesPathInDb'] . "#####" . $fileLoc;
    }
  }
else
  {
  // echo "Invalid file file_type=" . $currFileType . ", extension=" . $extension;
  }

}


$price = $_POST ["price"];
$studentId = $_SESSION['studentId'];
$finalImageLoc = $GLOBALS['imagesPathInDb'];
$con = connect();
insert($con,"INSERT INTO `inventory`(`studentId`,`title`, `category`, `description`, `offerType`, `price`, `images`) values('$studentId','$title','$category','$description','$offer','$price', '$finalImageLoc')");
close($con);


function checkNull ($input, $fieldName) {
	if ($input == null){
		echo '<script type="text/javascript">alert("Please fill in the' . $fieldName . 'field") return false;</script>';
	}
}
?>


<div id="content">
	<div id="box1">
	<br>
		<h2> <font color = "maroon" size = 11>Your Listing has Been Created Successfully!</font> </h2>
		<a href = "buyAndSell.php">Go Back to Buy/Sell Page</a>
	</div>
	<div id="box2">

	</div>
	<br class="clear" />
</div>
<?php
include("bottom.php");
?>
