<?php
function ortalama($v, $f){
	return ($v*0.4 + $f*0.6);
}
$x = 41;
$y = 95;
printf('Vize=%d, Final=%d, Ortalama=%.1f', $x, $y, ortalama($x, $y));
