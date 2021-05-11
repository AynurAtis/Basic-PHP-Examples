<?php
$c = 1;
$x = 2;
$y = 8;
for($i=1; $i<=$y; $i++){
	$c *= $x;
}
printf('%d<sup>%d</sup> = %d', $x, $y, $c);
