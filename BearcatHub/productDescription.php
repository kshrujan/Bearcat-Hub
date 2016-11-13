<?php include("top.php");?>


<script type="text/javascript">
$(document).ready(function(){
var speed = 300;

    $(".prev").on("click",function() {
        var now = $(this).parent().next("ul.gallery").children(":visible"),
            last = $(this).parent().next("ul.gallery").children(":last"),
            prev = now.prev();
            prev = prev.index() == -1 ? last : prev;
        now.fadeOut(speed, function() {prev.fadeIn(speed);});
    });

    $(".next").on("click",function() {
        var now = $(this).parent().next("ul.gallery").children(':visible'),
            first = $(this).parent().next("ul.gallery").children(':first'),
            next = now.next();
            next = next.index() == -1 ? first : next;
        now.fadeOut(speed, function() {next.fadeIn(speed);});
    });

    $(".gallery li").on("click",function() {
        var first = $(this).parent().children(':first'),
            next = $(this).next();
            next = next.index() == -1 ? first : next;
        $(this).fadeOut(speed, function() {next.fadeIn(speed);});
    });
});

</script>
					<div id="content">
						<div id="box1">
						<br>
						<?php
							$productId = $_GET['productId'];
							    require 'model/database.php';
								$con = connect();
								$result = mysqli_query($con,"SELECT * FROM `inventory` i, `student` s WHERE `productId` = $productId and i.`studentId` = s.`studentId`");
								echo "<table border = '0' width = '850'>";
								while($row = mysqli_fetch_array($result)) {
								echo "<h2>".$row['title']."</h2>";
								$img = $row['images'];
								$allImages = explode("#####", $img);
								echo "<tr>";
								echo "<td>";
								 echo"<div class=\"slideButtons\">";
							        echo"<button class=\"prev\">◀</button>";
							        echo"<button class=\"next\">▶</button>";
							    echo"</div>";
							echo "<ul class=\"gallery\" id=\"olympGallery\">";
								for ($i = 0; $i < count($allImages); $i++) {
									echo"<li><img src=\"" . $allImages[$i] . "\" height=\"350px\" width=\"600px\"alt=\"\" title=\"\" /></li>";
								}
								echo"</ul>";
								echo "</td>";
								echo "</tr>";
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
								echo "<td><b>Contact</b>  :<a href=\"https://mail.google.com/mail/?view=cm&fs=1&to=".$row['email']."&su=Interested in the listing: ".$row['title']." on Bearcat Hub\" target=\"_blank\">".$row['email']."</td>";
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
