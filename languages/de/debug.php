<?php

$debug = array(
	'index' => array(
		'title' => 'Entwicklerseite - Debug',
		'description' => 'Hier sind alle Debugging-Informationen in JSON, die Sie aus den erforderlichen Daten für jede Art von Technologie entnehmen können',
		'keyword' => 'Debug, PHP, Json, Informationen, Website, Daten, Technologie, Entwickler, Programmierer',
		'url' => array(
			'default' => 'debug',
			'de' => 'debuggen'
		),
		'content' => array(
			'table' => array(
				'title' => array(
					'1' => 'Typ',
					'2' => 'Variable',
					'3' => 'Andere'
				),
				'tr' => array(
					'sites' => array(
						'1' => '$sites',
						'2' => 'name',
						'3' => '$sites[\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'social' => array(
						'1' => '$social',
						'2' => 'facebook->name',
						'3' => '$social[\'facebook\'][\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'private' => array(
						'1' => '$private',
						'2' => 'name',
						'3' => '$private[\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'business' => array(
						'1' => '$business',
						'2' => 'local->name',
						'3' => '$business[\'local\'][\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'images' => array(
						'1' => '$images',
						'2' => 'manager->logo->big',
						'3' => '$images[\'manager\'][\'logo\'][\'big\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'partner' => array(
						'1' => '$partner',
						'2' => 'planethoster->name',
						'3' => '$partner[\'planethoster\'][\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'sponsor' => array(
						'1' => '$sponsor',
						'2' => 'empty->name',
						'3' => '$sponsor[\'\'][\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					),
					'credits' => array(
						'1' => '$credits',
						'2' => 'developper->alexonbstudio->name',
						'3' => '$credits[\'developper\'][\'alexonbstudio\'][\'name\'] Beispiel in PHP <br>mit der Funktion <i>json_decode/json_encode</i> <br>Die Datei befindet sich intern auf '
					)
				)
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/debug.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_debug = json_encode($debug);

?>