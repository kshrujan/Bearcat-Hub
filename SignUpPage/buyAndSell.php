<?php 
session_start();

include("checkLoggedIn.php");
include ("top.php"); ?>

<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>
 <div id="content">
	<div id="box1">
	  <div id="tabs">

  <ul>
   <li><a href="#tabs-1">Buy</a></li>
   <li><a href="#tabs-2">Sell</a></li>
 </ul>
  <div id="tabs-1">
  <br><br>
  <font face = "brush script mt" color = "maroon" size = 15> Search : </font><br>
  <form action = "buyList.php" method = "GET">
	Category : <select name = "category">
		<option value = "1">Vehicles</option>
		<option value = "3">Dorm Items</option>
		<option value = "2">Clothing</option>
		<option value = "4">Textbooks</option>
		<option value = "5">Miscellaneous</option>
	</select>	
	<br><br>
	Title : <input type = "text" name = "title" size = 15>
	<input type = "submit" name = "submit"></input>
  </form>  
  </div>
<div id="tabs-2">
<form action="upload_file.php" method="post" enctype="multipart/form-data">
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
<input type="file" name="file" id="file">
<br><br><br>
<input type = "submit" name = "submit"></input>
</form>
</div>
</div>
</div>
<div id="box2">
</div>
<br class="clear" />
</div>


<?php include("bottom.php"); ?>

