<?php
# $credits['version']['stable']['url'].' '.$credits['webdesigner']['startbootstrap']['name'].' '.$credits['developper']['PHPMailer']['name'].' '.$credits['developper']['joomla']['name']

$credits = array(
	'developper' => array(
		'alexonbstudio' => array(
			'name' => 'AlexonbStudio',
			'url' => 'alexonb.studio'
		),
		'PHPMailer' => array(
			'name' => 'PHPMailer',
			'url' => 'github.com/PHPMailer/PHPMailer'
		),
		'joomla' => array(
			'name' => 'Joomla',
			'url' => 'joomla.org'
		),
		'icamys' => array(
			'name' => 'Prisacari Dmitrii',
			'url' => 'github.com/icamys'
		),
		'giggsey' => array(
			'name' => 'Joshua Gigg',
			'url' => 'giggsey.com'
		),
		'google' => array(
			'name' => 'Google',
			'url' => 'github.com/google'
		),
		/* This part on libs not yet use */
		'Minify' => array(
			'name' => 'Minify',
			'url' => 'minifier.org'
		),
		'tinypng' => array(
			'name' => 'Tinyfy',
			'url' => 'tinypng.com'
		),
		'symfony' => array(
			'name' => 'Symfony',
			'url' => 'symfony.com'
		),
		'gargon' => array(
			'name' => 'Eugen Rochko',
			'url' => 'zeonfederated.com"'
		)
	),
	'designer' => array(
	),
	'webdesigner' => array(
	),
	'photographer' => array(
	),
	'images' => array(
	),
	'webmaster' => array(
		'alexonbstudio' => array(
			'name' => 'AlexonbStudio',
			'url' => 'alexonb.studio'
		)	
	),
	'version' => array(
		'stable' => '3.0.3',
		'rc' => '1.9',
		'beta' => '1.3',
		'alpha' => '0.2',
		'actual' => 'Stable',
		'date' => '2023/08/02'
	)
);

$JE_credits = json_encode($credits);

?>