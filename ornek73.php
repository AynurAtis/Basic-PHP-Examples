<pre>
<?php
/*
	mevsimleri ve her mevsimdeki ayları ve ayların gün 
	sayılarını iki boyutlu bir diziye kaydetmek
*/
$aylar = array(
	'İlkbahar' => array(
		'Mart' => 31,
		'Nisan' => 30,
		'Mayıs' => 31
	),
	'Yaz' => array(
		'Haziran' => 30,
		'Temmuz' => 31,
		'Ağustos' => 31
	),
	'Sonbahar' => array(
		'Eylül' => 30,
		'Ekim' => 31,
		'Kasım' => 30
	),
	'Kış' => array(
		'Aralık' => 31,
		'Ocak' => 31,
		'Şubat' => 28
	)
);
print_r($aylar);
var_dump($saylar);