<?php include("top.php");
 ?>
					<div id="content">
						<div id="box1">
						<br>
						<?php
							$productId = $_GET['productId'];
							$action = $_GET['action'];
							    require 'model/database.php';
								$con = connect();
								$result = mysqli_query($con,"SELECT * FROM `inventory` i, `student` s WHERE `productId` = $productId and i.`studentId` = s.`studentId`");
								echo "<table border = '0' width = '600'>
								<tr>
								</tr>";
								if ($action == "edit") {
									echo "<form action='editComplete.php' method='GET'>";
									echo "<input type='hidden' name='productId', value='" . $productId . "'></input>";
								}
								while($row = mysqli_fetch_array($result)) {
								if($action =="edit"){
									echo "<h2>Edit:</h2>";
								} else {

								}

								if($action =="edit"){
									echo"<label>Title:</label><h2><input class = \"signInTextBox\" type = \"text\" name = \"title\" value='".$row['title']."' placeholder=".$row['title']."></h2></input>";
								} else {
								echo "<h2>".$row['title']."</h2>";
							    }

								echo "<tr><br>";
								if($action =="edit"){
									echo"<td><textarea class = \"editTextArea\"rows = \"10\" cols = \"50\" name = \"description\" value='".$row['description']."'>".$row['description']."</textarea></td>";
								} else {
								echo "<td><b>Description</b>  :".$row['description']."</td>";
							    }
								echo "</tr>";

								echo "<tr>";
								if($action =="edit"){
									if($row['offerType'] == "Best Offer") {
										echo"<td><br><input type = \"radio\" name = \"offer\" value = \"Best Offer\" checked='checked'> Best Offer";
										echo "<br><input type = \"radio\" name = \"offer\" value = \"Set Price\"> Set Price
										</td>";
									} else {
										echo"<td><br><input type = \"radio\" name = \"offer\" value = \"Best Offer\"> Best Offer";
										echo "<br><input type = \"radio\" name = \"offer\" value = \"Set Price\" checked='checked'> Set Price
										</td>";
									}
								} else {
								echo "<td><b>Offer Type</b>  :".$row['offerType']."</td>";
								}
								echo "</tr>";
								echo "<tr>";
								if($action =="edit"){
									echo"<td>$<input class = \"signInTextBox\" type = \"text\" name = \"price\" value='" . $row['price'] . "' placeholder=".$row['price']."></input></td>";
								} else {
								echo "<td><b>Price</b>  :". "$".$row['price']."</td>";
								}
								echo "</tr>";
								echo "<tr>";
								echo "<td>"."Interested?"."</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td><b>Contact</b>  :".$row['email']."</td>";
								echo "</tr>";

								echo "</table>";
								echo "<br><br>";


					}
							if($action =="edit"){
								echo "<input type='submit' class =\"submitBtn\" style=\"text-decoration:none\" value='Submit'></input>";
								echo "</form>";
							} else {
								echo "<a class =\"editDeleteLink\" href = \"edit.php?productId=$productId&action=edit\" style=\"text-decoration:none\">Edit </a>";
								echo "<a class =\"editDeleteLink\" href = \"deleteListing.php?productId=$productId\" style=\"text-decoration:none\">Delete</a>";
							}



							?>
						</div>
						<div id="box2">

						</div>
						<br class="clear" />
					</div>
<?php include("bottom.php"); ?>
