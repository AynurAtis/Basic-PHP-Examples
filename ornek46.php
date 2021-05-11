<?php
$x = 2;
$y = 5;
$k = 1;
printf('%d<sup>%d</sup>=', $x, $y);
while($y > 0){
	$k = $k * $x;
	$y--;
}
print $k;