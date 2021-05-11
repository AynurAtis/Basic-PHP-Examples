<?php
function kuvvet($x, $y){
	$k = 1;
	for($i=1; $i<=$y; $i++)
		$k = $k * $x;
	return $k;
}
echo kuvvet(2, 5).'<br>';
$r = 4;
$alan=3*kuvvet($r, 2);
echo "Alan=".$alan;