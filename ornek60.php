<?php
function topla(){
	$n = func_num_args();
	if($n==0) echo 'En az bir sayı verin';
	for($i=0; $i<$n; $i++)
		$t = $t + func_get_arg($i);
	return $t;
}
echo topla().'<br>';
echo topla(5, 9).'<br>';
echo topla(6, 1, 2, 3).'<br>';
