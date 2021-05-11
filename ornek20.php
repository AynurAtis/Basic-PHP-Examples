<?php
$n = 50;
if($n < 0 || $n > 100) echo 'Geçersiz';
elseif($n <= 40) echo 'Kaldınız';
elseif($n < 50) echo 'Biraz gayret';
else echo 'Geçtiniz';
