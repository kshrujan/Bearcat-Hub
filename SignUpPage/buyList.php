<?php include("top.php"); ?>

					
		
					
					
					
					<div id="content">
						<div id="box1">
						<br>
							<?php 
require 'model/database.php';
$con = connect();
$title = $_GET['title'];
$result = mysqli_query($con,"SELECT * FROM inventory where `description` LIKE '%".$title."%'");
echo "<table border = '1' width = '850'>
<tr>
<th>Student ID</th>
<th>Title</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
$productId = $row['productId'];
echo "<tr>";
echo "<td>".$row['studentId']."</td>";
echo "<td><a href=\"productDescription.php?productId=$productId\">".$row['title']. "</a></td>";
echo "</tr>";
}
echo "</table>";
close($con);


?>
							</div>
						<div id="box2">
							
						</div>
						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>