<?php
# $law['full']['content']['powered']
$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'Alle Rechte vorbehalten.',
			'developper' => 'Entwickler von',
			'designer' => 'Designer von',
			'distributed' => 'Vertrieben von',
			'powered' => 'Unterstützt von'
		)
	),
	###################PAGE URL#####################
	'pages' => array(
		'title' => 'Regeln',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules',
			'de' => 'regeln'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/law.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'cookies' => array(
		'title' => 'Kekse',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cookies',
			'de' => 'kekse'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cookie.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgu' => array(
		'title' => 'Nutzungsbedingungen',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgu',
			'de' => 'nutzungsbedingungen'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgu.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'cgv' => array(
		'title' => 'Verkaufsbedingungen',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'cgv',
			'de' => 'verkaufsbedingungen'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/cgv.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'dmca' => array(
		'title' => 'DMCA',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'dmca',
			'de' => 'dmca'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'legal' => array(
		'title' => 'Impressum',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'legal',
			'de' => 'impressum'
		),
		'content' => array(
			'owner' => array(
				'title' => 'Priorität',
				'name' => 'Nachname:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'business' => array(
				'title' => 'Der Hauptsitz',
				'name' => 'Nachname:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'hosting' => array(
				'title' => 'Gastgeber',
				'address' => 'Adresse:',
				'name' => 'Nachname:'
			),
			'server' => array(
				'title' => 'Cloud Computing',
				'address' => 'Adresse:',
				'name' => 'Nachname:'
			),
			'credits' => array(
				'title' => 'Ehre',
				'developper' => 'Webentwickler:',
				'designer' => 'Designer:',
				'webmaster' => 'Webmaster:',
				'marketing' => 'Marketer:',
				'image' => 'Bild:',
				'photographer' => 'Foto:',
				'video' => 'Vidéo:',
				'webdesigner' => 'WebDesigner:'
			),
			'status' => array(
				'particular' => 'Besondere',
				'association' => 'Verband',
				'small' => 'kleinstunternehmer',
				'medium' => 'TPE',
				'big' => 'PME'
			),
			'software' => array(
				'wp' => 'WebJet',
				'title' => 'Software'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Datenschutz-Bestimmungen',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'privacy-policy',
			'de' => 'datenschutz-Bestimmungen'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/privacy-policy.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	),
	'rgpd' => array(
		'title' => 'RGPD',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'grpd',
			'de' => 'rgpd'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/rgpd.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA' /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_law = json_encode($law);

?>