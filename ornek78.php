<pre>
<?php
/*
	Kendisine parametre olarak verilen dizinin değerlerini 
	toplayıp döndüren bir fonksiyon yazın
*/
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
function topla($d){
	$t=0;
	foreach($d as $v){
		$t += $v;
	}
	return $t;
}
echo topla($aylar);
