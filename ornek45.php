<?php
$f = 1;
$n = 5;
echo "$n! = ";
while($n > 0){
	$f = $f * $n;
	$n--;
}
echo $f;