<?php

$prom1 = "1.05215215";
$prom2 = "5";
$prom3 = "3";
$promx = $prom1; //write $prom1 into $promx



echo $prom1;
echo "<html><head><p>$prom2 <head/></html>";
echo $prom3;


$prom4 = $prom2 * $prom3;
echo "<html><head><p> testovací text '$prom4' <head/></html>";
$prom2++; //

echo "proměnná \$prom2 po \++ je '$prom2' "; // return 6, because 5+1=6
echo "$promx"; //return 1.05215215

?>