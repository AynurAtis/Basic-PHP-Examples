<?php
$f = 1;
$n = 5;
for($i=1; $i<=$n; $i++){
	$f *= $i;
}
printf('%d! = %d', $n, $f);
