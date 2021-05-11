<!--
	iki boyutlu bir diziye tarih tarih sabah, öğle, akşam 
	sıcaklık değerlerini kaydedip döngü ile HTML tablo şeklinde görüntüleme
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
	printf('<tr><td>%s</td><td>%d &deg;C</td><td>%d &deg;C</td><td>%d &deg;C</td></tr>',
		$tarih, $s['sabah'], $s['öğle'], $s['akşam']);
}
print '</table>';