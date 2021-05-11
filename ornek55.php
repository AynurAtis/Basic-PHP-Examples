<?php
function buyuk($a, $b){
	if($a>$b) return $a;
	return $b;
}
$x = 4;
$y = 5;
printf('%d ve %d\'in büyük olanı %d', $x, $y, buyuk($x, $y));
