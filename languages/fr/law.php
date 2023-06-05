<?php
# $law['full']['content']['powered']
$law = array(
	'full' => array(
		'content' => array(
			'footer' => 'Tous Droits Réservés.',
			'developper' => 'Développeur par',
			'designer' => 'Designer par',
			'distributed' => 'Distributé par',
			'powered' => 'Propulsé par'
		)
	),
	###################PAGE URL#####################
	'pages' => array(
		'title' => 'Règles',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules',
			'fr' => 'regles'
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
		'title' => 'Cookies',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cookies',
			'fr' => 'regles/cookies'
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
		'title' => 'Conditions générales d\'utilisation',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cgu',
			'fr' => 'regles/conditions-generales-utilisation'
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
		'title' => 'Conditions générales de vente',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/cgv',
			'fr' => 'regles/conditions-generales-de-vente'
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
			'fr' => 'regles/dmca'
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
		'title' => 'Mentions légales',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/legal',
			'fr' => 'regles/mentions-legales'
		),
		'content' => array(
			'owner' => array(
				'title' => 'Prioritaire',
				'name' => 'Nom:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'business' => array(
				'title' => 'Siège Social',
				'name' => 'Nom:',
				'address' => 'Adresse:',
				'status' => 'Status:'
			),
			'hosting' => array(
				'title' => 'Hébergeur',
				'address' => 'Adresse:',
				'name' => 'Nom:'
			),
			'server' => array(
				'title' => 'Cloud computing',
				'address' => 'Adresse:',
				'name' => 'Nom:'
			),
			'credits' => array(
				'title' => 'Honeur',
				'developper' => 'Développeur web:',
				'designer' => 'Designer:',
				'webmaster' => 'Webmestre:',
				'marketing' => 'Marketeur:',
				'image' => 'Image:',
				'photographer' => 'Photograph:',
				'video' => 'Vidéo:',
				'webdesigner' => 'WebDesigner:'
			),
			'status' => array(
				'particular' => 'Particulier',
				'association' => 'Association',
				'small' => 'Micro Entrepreneur',
				'medium' => 'TPE',
				'big' => 'PME'
			),
			'software' => array(
				'wp' => 'WebJet',
				'title' => 'Logiciel'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'background/law/copyright.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc' /*directory images from <exemple.tld>/assets */
		)
	),
	'policy-privacy' => array(
		'title' => 'Politique de confidentialité',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'rules/policy-privacy',
			'fr' => 'regles/politique-de-confidentialite'
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
			'fr' => 'regles/rgpd'
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