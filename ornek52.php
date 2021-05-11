<?php
function kuvvet($x, $y){
	$k = 1;
	for($i=1; $i<=$y; $i++)
		$k = $k * $x;
	printf('%d<sup>%d</sup>=%d<br>', $x, $y, $k);
}
kuvvet(2, 5);
kuvvet(3, 4);
kuvvet(4, 2);