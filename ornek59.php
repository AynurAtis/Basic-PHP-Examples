<?php
function ciftle(&$x){
	$x *= 2;
}
$a = 5;
echo "$a ; ";
ciftle($a);
echo $a;