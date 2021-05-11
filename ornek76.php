<!--
	iki boyutlu bir diziye tarih tarih sabah, öğle, akşam 
	sıcaklık değerlerini kaydedip iç içe foreach döngüsü ile 
	HTML tablo şeklinde görüntüleme
-->
<table border="1">
<tr>
	<th>Tarih</th>
	<th>Sabah</th>
	<th>Öğle</th>
	<th>Akşam</th>
</tr>
<?php
$a =array(
	'19.12.2016' => array(
		'sabah' => -5,
		'öğle' => 4,
		'akşam' => -1
	),
	'20.12.2016' => array(
		'sabah' => -6,
		'öğle' => 3,
		'akşam' => -3
	)
);
foreach($a as $tarih=>$s){
	printf('<tr><td>%s</td>', $tarih);
	foreach($s as $d){
		printf('<td>%d &deg;C</td>', $d);
	}
	print '</tr>';
}
print '</table>';