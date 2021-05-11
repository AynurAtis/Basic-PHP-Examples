<pre><?php
//$ogr = array('adi'=>'Asım Kocabıyık', 'no'=>'331560001', 'vize'=>83, 'final'=>95);
$ogr = array(
	'adi'=>'Asım Kocabıyık', 
	'no'=>'331560001', 
	'vize'=>83, 
	'final'=>95
	);
foreach($ogr as $i=>$d){
	printf('%s : %s<br>', $i, $d);
}