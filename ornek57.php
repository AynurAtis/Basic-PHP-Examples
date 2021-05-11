<?php
function cevre($r, $pi=3.14){
	return 2 * $pi * $r;
}
$r = 3;
printf('Yarıçapı=%d olan dairenin çevresi=%.1f<br>', $r, cevre($r));
printf('Yarıçapı=%d olan dairenin çevresi=%.1f<br>', $r, cevre($r, 3));
