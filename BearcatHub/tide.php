<?php
//session_start();

include("checkLoggedIn.php");
include ("top.php");
require 'model/database.php';

?>

<script>
  $(function() {
    $( "#tabs-min" ).tabs();
  });
</script>

<script>
$(document).ready(function() {
    $("#setScheduleForm").css("display", "none");
    $('.setScheduleBtn').click(function() {
        $("#setScheduleForm").fadeToggle("slow");
    });

});

</script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $('.tideContent').addClass('tideContent-loaded');
    }, 500);
});


</script>
	<div class="tideContent">
		<div id="box1">
			<div id="tabs-min">
			  <ul>
			   <li><a href="#tabs-1">My Class Schedule</a></li>
			   <li><a href="#tabs-2">Goudy Menu</a></li>
			   <li><a href="#tabs-3">Twitter Feed</a></li>
 			 </ul>
  <div id="tabs-1">
  <font face = "brush script mt" color = "maroon" size = 15> </font><br>
  <button class="setScheduleBtn">Set Schedule</button> <button class="clearScheduleBtn">Clear Schedule</button>
  <br><br>
  <form id="setScheduleForm" action="scheduleComplete.php">
    <?php
    $con=connect();
    $result = mysqli_query($con,"SELECT * FROM `class_schedule` c, `student` s WHERE c.`studentId` = s.`studentId`");
    $row = mysqli_fetch_array($result);
    ?>
  	<div class="inline-div">
  	<label>Monday, Wednesday:</label><br>
  	<textarea class="mw" rows = "10" cols = "20" name="mw">

  	</textarea>
  	</div>

  	<div class="inline-div">
  	<label>Tuesday, Thursday:</label><br>
  	<textarea class="tth" rows = "10" cols = "20" name="tth">

  	</textarea>
  	</div>

  	<div class="inline-div">
  	<label>Friday:</label><br>
  	<textarea class="f" rows = "10" cols = "20" name="f">

  	</textarea>
  	</div>
  	<br>
  	<button class="setScheduleButton">Set</button>
  </form>
  <br>
  <table border = '1' width = '300' class="listingTable">
	<th>Monday,Wednesday</th><th>Tuesday,Thursday</th><th>Friday</th>
  <tr>
    <td>
      <?php
      $con=connect();
      $result = mysqli_query($con,"SELECT * FROM `class_schedule` c, `student` s WHERE c.`studentId` = s.`studentId`");
      $row = mysqli_fetch_array($result);
      echo $row['mw'];
      close($con);
      ?>
    </td>
    <td>
      <?php
      $con=connect();
      $result = mysqli_query($con,"SELECT * FROM `class_schedule` c, `student` s WHERE c.`studentId` = s.`studentId`");
      $row = mysqli_fetch_array($result);
      echo $row['tth'];
      close($con);
      ?>
    </td>
    <td>
      <?php
      $con=connect();
      $result = mysqli_query($con,"SELECT * FROM `class_schedule` c, `student` s WHERE c.`studentId` = s.`studentId`");
      $row = mysqli_fetch_array($result);
      echo $row['f'];
      close($con);
      ?>
    </td>
  </tr>
  </table>

  </div>
<div id="tabs-2">
  <h1>Coming Soon.....</h1>
  <img src = "images/minion1.gif" width="500" height="500"></img>
</div>
<div id="tabs-3" class="panel">
  	<h1>Nothing to See Here</h1>
    <img src = "images/minion2.gif" width="500" height="500"></img>
  </div>
			</div>
			<br>
		</div>
	</div>

<?php include("bottom.php"); ?>
