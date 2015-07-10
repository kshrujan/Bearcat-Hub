<?php

require 'database.php';
$con = connect();
insert($con,"INSERT INTO `category` (`categoryValue`) values('Tables')");
close($con);




?>