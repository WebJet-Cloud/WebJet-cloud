<?php
# $law['full']['content']['powered']
$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'Все права защищены.',
			'developper' => 'Разработчик',
			'designer' => 'Дизайнер',
			'distributed' => 'Кем распространяется',
			'powered' => 'Приведено в действие'
		)
	),
	###################PAGE URL#####################
	'pages' => array(
		'title' => 'Правила',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules',
			'ru' => 'rules'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/law.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'cookies' => array(
		'title' => 'Печенье',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cookies',
			'ru' => 'rules/cookies'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cookie.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgu' => array(
		'title' => 'условия обслуживания',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cgu',
			'ru' => 'rules/conditions-générales-utilisation'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgu.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgv' => array(
		'title' => 'Условия продажи',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cgv',
			'ru' => 'rules/conditions-générales-de-vente'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgv.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'dmca' => array(
		'title' => 'DMCA',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/dmca',
			'ru' => 'rules/dmca'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'legal' => array(
		'title' => 'Официальное уведомление',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/legal',
			'ru' => 'rules/legal'
		),
		'content' => array(
			'owner' => array(
				'title' => 'приоритет',
				'name' => 'Фамилия:',
				'address' => 'Адрес:',
				'status' => 'Статус:'
			),
			'business' => array(
				'title' => 'Головной офис',
				'name' => 'Фамилия:',
				'address' => 'Адрес:',
				'status' => 'Статус:'
			),
			'hosting' => array(
				'title' => 'Хозяин',
				'address' => 'Адрес:',
				'name' => 'Фамилия:'
			),
			'server' => array(
				'title' => 'Cloud computing',
				'address' => 'Адрес:',
				'name' => 'Фамилия:'
			),
			'credits' => array(
				'title' => 'Честь',
				'developper' => 'Веб-разработчик:',
				'designer' => 'Обозначить:',
				'webmaster' => 'Веб-мастер:',
				'marketing' => 'Маркетолог:',
				'image' => 'Изображение:',
				'photographer' => 'Фотография:',
				'video' => 'Видео:',
				'webdesigner' => 'веб-дизайнер:'
			),
			'status' => array(
				'particular' => 'Особый',
				'association' => 'Ассоциация',
				'small' => 'Микропредприниматель',
				'medium' => 'TPE',
				'big' => 'PME'
			),
			'software' => array(
				'wp' => 'WebJet',
				'title' => 'Программного обеспечения'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Политика конфиденциальности',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/policy-privacy',
			'ru' => 'rules/policy-privacy'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/privacy-policy.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'rgpd' => array(
		'title' => 'RGPD',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/grpd',
			'ru' => 'rules/rgpd'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/rgpd.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_law = json_encode($law);

?>