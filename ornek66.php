<pre><?php
$d = 33;
unset($d);
$d[] = 1;
$d[] = 2;
$d[5] = 3;
$d[] = 4;
print_r($d);