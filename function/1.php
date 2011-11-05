<?php

$prom1 = "1.05215215";
$prom2 = "5";
$prom3 = "3";
$promm = "-7";
$promx = $prom1; //write $prom1 into $promx

$a = abs($promm); //shows absolute value for -7 (7)
echo $a;
echo "<p>";

$file = file_exists("test1.dat"); // shows logical value if file exists or not
echo $file; // shows 1, because file "test1" exists

?>