<?php
$yas = 55;
$cins = 'E';  // E/K
if($cins == 'E'){
	if($yas <= 20) echo 'Genç';
	else if($yas <= 40) echo 'Orta Yaşlı';
	else echo 'Yaşlı';
}
else {
	if($yas <= 25) echo 'Genç';
	else if($yas <= 45) echo 'Orta Yaşlı';
	else echo 'Daha az genç';
}