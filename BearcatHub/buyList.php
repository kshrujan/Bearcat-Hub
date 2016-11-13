<?php include("top.php"); ?>
<script type="text/javascript">
$(document).ready(function() {
    // Let's simulate some loading time.

    setTimeout(function() {
        $('.buyContent').addClass('buyContent-loaded');
    }, 500);
});


</script>
					<div class="buyContent">
					<br>

            <form id="sortForm" action="buyList.php?>">
               Search: <input class="searchTextBoxLarge" type="text" size="40" name="title" placeholder="<?php echo $_GET['title']; ?>"value="<?php echo $_GET['title']; ?>" />
               	Sort By: <select name="sortSelect">
                           <option value="relevance" default selected>Relevance</option>
                            <option value="lowToHigh">Price: Low to High</option>
                            <option value="highToLow">Price: High to Low</option>
                        </select>
                    <button class = "" name ="sort">Sort</button>

                </form>
                <br>
						    <br>
<?php

require 'model/database.php';
$con = connect();

if(isset($_GET['title'])) {
	$title = $_GET['title'];
	$result = mysqli_query($con,"SELECT * FROM inventory where `description`  LIKE '%".$title."%' OR `title` LIKE '%".$title."%'");
} else if(isset($_GET['title']) || $_GET['sortSelect']=="relevance") {
	$title = $_GET['title'];
	$result = mysqli_query($con,"SELECT * FROM inventory where `description`  LIKE '%".$title."%' OR `title` LIKE '%".$title."%'");
}


if(isset($_GET['sortSelect']) && $_GET['sortSelect']=="lowToHigh"){
	$title = $_GET['title'];
	$result = mysqli_query($con,"SELECT * FROM inventory  where `description` LIKE '%".$title."%' OR `title` LIKE '%".$title."%' ORDER BY `price` ASC ");
}

if(isset($_GET['sortSelect']) && $_GET['sortSelect']=="highToLow"){
	$title = $_GET['title'];
	$result = mysqli_query($con,"SELECT * FROM inventory  where `description` LIKE '%".$title."%' OR `title` LIKE '%".$title."%' ORDER BY `price` DESC ");
}

if(isset($_GET['category']) && $_GET['category']!=="0") {
	$category = $_GET['category'];
	$result = mysqli_query($con,"SELECT * FROM inventory  where `category`=".$category."");
}


while($row = mysqli_fetch_array($result)) {
	$productId = $row['productId'];
	$images = $row["images"];
	if (isset($images)) {
		$images = explode("#####", $images);
	}

	echo "<div class=\"space\">";

	for ($i = 0; $i < 1; $i++) {
		echo "<div class=\"picture\">";
		echo"<img src=". $images[0] ." style=\"width:400px; height:300px; \">";
		echo "<div class=\"container\">";
		echo "<p><a href=\"productDescription.php?productId=$productId\">".$row['title']."</a></p>";
		echo "<div class=\"price\">";
		echo "<p>Price:$".$row['price']."</p>";
		  echo"</div>
		  </div>
		</div>"; // closing picture
	}

	echo "</div>"; //closing space
}

close($con);


?>

						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>
