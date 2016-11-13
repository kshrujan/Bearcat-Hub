<?php

//session_start();
include("checkLoggedIn.php");
include ("top.php");

?>
<script type="text/javascript">
$(document).ready(function() {
    // Let's simulate some loading time.

    setTimeout(function() {
        $('.marketplaceContent').addClass('marketplaceContent-loaded');
    }, 500);
});


</script>
<script>
  $(function() {
    $( "#tabs-min" ).tabs();
  });
</script>
 <div class="marketplaceContent">
	<div id="box1">
	  <div id="tabs-min">

  <ul>
   <li><a href="#tabs-1">Buy</a></li>
   <li><a href="#tabs-2">Sell</a></li>
   <li><a href="#tabs-3">My Listings</a></li>
 </ul>
  <div id="tabs-1">
  <br><br>
  <font face = "brush script mt" color = "maroon" size = 15> Search By: </font><br><br>
  <form action = "buyList.php" method = "GET">
	Keyword : <input class="searchTextBox" type = "text" name = "title" size = 15> &nbsp Or &nbsp
  Category : <select name = "category">
		<option value = "0">Select</option>
		<option value = "1">Vehicles</option>
		<option value = "3">Dorm Items</option>
		<option value = "2">Clothing</option>
		<option value = "4">Textbooks</option>
		<option value = "5">Miscellaneous</option>
	</select><br><br>
	<input type = "submit" name = "submit" class="submitBtn"></input>
  </form>
  </div>
<div id="tabs-2">
<form name="listingForm" action="upload_file.php" method="post" enctype="multipart/form-data">
<table border = "0">
<tr>
<td><font color = "maroon"> Title : </font></td>
<td><input type = "text" name = "title"></input></td>
</tr>
<tr>
<td><font color = "maroon"> Category : </font></td>
<td><select name = "category">
	<option value = "1">Vehicles</option>
		<option value = "3">Dorm Items</option>
		<option value = "2">Clothing</option>
		<option value = "4">Textbooks</option>
		<option value = "5">Miscellaneous</option>
</select>
</td>
<br>
<tr>
	<td><font color = "maroon"> Description : </font></td>
	<td><textarea rows = "10" cols = "50" name = "description"></textarea></td>
</tr>
<tr>
	<td><font color = "maroon"> Offer Type : </font></td>
	<td><br><input type = "radio" name = "offer" value = "Best Offer"> Best Offer
	<br><input type = "radio" name = "offer" value = "Set Price"> Set Price
</td>
</tr>
<tr>
	<td><font color = "maroon"> Price : </font></td>
	<td>$<input type = "text" name = "price"></input></td>
</tr>
</table>
<br><br>
<label for="file"><font color = "maroon"> Images : </font></label>
<input type="file" name="file[]" id="file" multiple>
<br><br><br>
<input type = "submit" name = "submit"class="submitBtn"></input>
</form>
</div>
<div id="tabs-3" class="panel">
  	<?php
  		require ('model/database.php');
  		$con = connect();
  		$studentId = $_SESSION['studentId'];
  		$result = mysqli_query($con,"SELECT * FROM `inventory` where `studentid` = '$studentId'");
  		echo "<table border = '1' width = '1150' class=\"listingTable\">
		<tr>
		<th>Title of Listings</th>
		</tr>";
  		while($row = mysqli_fetch_array($result)) {
		$productId = $row['productId'];
		echo "<tr>";
		echo "<td> <a href=\"edit.php?productId=$productId&action=select\">".$row['title']. "</a></td>";
		echo "</tr>";
		}
		echo "</table>";
		close($con);






  	?>
  </div>
</div>
</div>
<div id="box2">
</div>
<br class="clear" />
</div>


<?php include("bottom.php"); ?>
