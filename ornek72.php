<pre>
<?php
/*
	İki boyutlu dizi ile birden fazla dersi alan 
	birden fazla öğrencinin adı, vize ve finalini kaydetmek
*/
$sinif = array(
	'PHP' => array(
		'123456789' => array(
			'adi'=>'Ali AK',
			'vize'=>70,
			'final'=>99
			),
		'987654321' => array(
			'adi'=>'Veli BAL',
			'vize'=>98,
			'final'=>50
			)
		),
	'Web Tasarımı' => array(
		'123456789' => array(
			'adi'=>'Ali AK',
			'vize'=>70,
			'final'=>99
			),
		'987654321' => array(
			'adi'=>'Veli BAL',
			'vize'=>98,
			'final'=>50
			)
		)
	);
print_r($sinif);

