<?php include("top.php"); ?>
					<div id="content">
						<div id="box1">
						<br>
						<?php 
							$productId = $_GET['productId'];
							    require 'model/database.php';
								$con = connect();
								$result = mysqli_query($con,"SELECT * FROM `inventory` i, `student` s WHERE `productId` = $productId and i.`studentId` = s.`studentId`");
								echo "<table border = '0' width = '850'>
								<tr>
								</tr>";
								while($row = mysqli_fetch_array($result)) {
								echo "<h2>".$row['title']."</h2>";
								$img = $row['images'];
								echo "<tr>
								<img src = \"$img\" height=\"300px\" width=\"500px\"></img>
								</tr>";
								echo "<tr>";
								echo "<td><b>Description</b>  :".$row['description']."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><b>Offer Type</b>  :".$row['offerType']."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><b>Price</b>  :". "$".$row['price']."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>"."Interested?"."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><b>Contact</b>  :".$row['email']."</td>";
								echo "</tr>";
								
								
								
					}
								echo "</table>";
							    
							
							?>
						</div>
						<div id="box2">
							
						</div>
						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>