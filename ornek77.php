<pre>
<?php
/*
	Parametre olarak aldığı bir diziyi print_r fonksiyonuna 
	benzer şekilde çıktı veren bir fonksiyon yazın
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
function yaz($d){
	print "Array(\n";
	foreach($d as $i=>$v){
		printf("    %s => %s\n", $i, $v);
	}
	print ")\n";
}
yaz($aylar);
