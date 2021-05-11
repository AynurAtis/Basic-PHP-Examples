<?php
$gunler=array('Pazartesi', 'Salı', 'Çarşamba', 'Perşembe',
	'Cuma', 'Cumartesi', 'Pazar');
foreach($gunler as $i=>$g){
	printf('%d.gün %s<br>', $i+1, $g);
}