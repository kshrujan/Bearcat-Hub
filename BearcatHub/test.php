<?php


$contents = file_get_contents("http://willamette.edu/index.php");

$x = my_strip2("<div id=\"highlights\">", "</h2></div>", $contents);

function my_strip2($start,$end,$total){ // includes both landmarks 

$total = stristr($total,$start);

$f2 = stristr($total,$end);

return substr($total,0,(strlen($total)-(strlen($f2) - strlen($end))));

}

echo $x;
?>