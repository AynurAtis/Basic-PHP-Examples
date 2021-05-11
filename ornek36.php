<?php
$t = 0;
$n = 0;
for($c=50; $c<=100; $c++){
	$t = $t + $c;
	$n++;
}
print "50-100 arası sayıların toplamı = $t<br>";
print '50-100 arası sayıların ortalaması = '.($t/$n);
