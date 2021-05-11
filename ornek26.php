<?php
$n = 84;
if($n < 0 && $n > 100) $s = 'Geçersiz';
elseif($n >= 85) $s = 'AA';
elseif($n >= 80) $s = 'BA';
elseif($n >= 75) $s = 'BB';
elseif($n >= 70) $s = 'CB';
elseif($n >= 60) $s = 'CC';
elseif($n >= 55) $s = 'DC';
elseif($n >= 50) $s = 'DD';
elseif($n >= 40) $s = 'FD';
else $s = 'FF';
echo "Notunuz: $n ise harf notunuz: $s";
