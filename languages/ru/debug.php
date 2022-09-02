<?php

$debug = array(
	'index' => array(
		'title' => 'Сторона разработчика - Отладка',
		'description' => 'Вот вся отладочная информация в формате JSON, которую вы можете извлечь из необходимых данных по любому типу технологий.',
		'keyword' => 'отладка, php, json, информация, веб-сайт, данные, технология, разработчик, программист',
		'url' => array(
			'default' => 'debug',
			'ru' => 'déboguer'
		),
		'content' => array(
			'table' => array(
				'title' => array(
					'1' => 'Тип',
					'2' => 'Переменная',
					'3' => 'Другие'
				),
				'tr' => array(
					'sites' => array(
						'1' => '$sites',
						'2' => 'name',
						'3' => '$sites[\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'social' => array(
						'1' => '$social',
						'2' => 'facebook->name',
						'3' => '$social[\'facebook\'][\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'private' => array(
						'1' => '$private',
						'2' => 'name',
						'3' => '$private[\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'business' => array(
						'1' => '$business',
						'2' => 'local->name',
						'3' => '$business[\'local\'][\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'images' => array(
						'1' => '$images',
						'2' => 'manager->logo->big',
						'3' => '$images[\'manager\'][\'logo\'][\'big\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'partner' => array(
						'1' => '$partner',
						'2' => 'planethoster->name',
						'3' => '$partner[\'planethoster\'][\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'sponsor' => array(
						'1' => '$sponsor',
						'2' => 'empty->name',
						'3' => '$sponsor[\'\'][\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					),
					'credits' => array(
						'1' => '$credits',
						'2' => 'developper->alexonbstudio->name',
						'3' => '$credits[\'developper\'][\'alexonbstudio\'][\'name\'] пример в PHP <br>используя функцию <i>json_decode/json_encode</i> <br>Файл находится внутри'
					)
				)
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/debug.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_debug = json_encode($debug);

?>