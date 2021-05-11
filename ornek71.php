<?php
$aylar=array(
	'Ocak' => 31,
	'Şubat' => 28,
	'Mart' => 31,
	'Nisan' => 30,
	'Mayıs' => 31,
	'Haziran' => 30,
	'Temmuz' => 31,
	'Ağustos' => 31,
	'Eylül' => 30,
	'Ekim' => 31,
	'Kasım' => 30,
	'Aralık' => 31
);
foreach($aylar as $ay=>$gun){
	printf('%s ayı %d gündür<br>', $ay, $gun);
}