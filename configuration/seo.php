<?php 

$Seo = array(
	'name' => 'Test Name',
	'domain' => 'webjetclouds-php.local:8890', /*domain: exemple.tld*/
	'auto' => array(
		'domain' => preg_replace('/www./i', '', $_SERVER['SERVER_NAME']) /*Automate domain.tld no put*/
	),
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'default-timezone' => 'Europe/Paris', /*Docs PHP variable date_default_timezone_set() */
	'hosting' => array(
		'Compagny-name' => '',
		'Address' => ''
	),
	'local' => array(
		'organisation-names' => '',
		'email' => 'exempl@domail.tld',
		'address' => array(
			'street' => '',
			'zipcode' => '',
			'city' => '',
			'region' => '',
			'contry' => ''
		),
		'type-entreprise' => '',
		'times-open' => array(
			'monday' => '10:00-20:00',
			'tuesday' => '10:00-20:00',
			'wednesday' => '10:00-20:00',
			'thursday' => '10:00-20:00',
			'friday' => '10:00-20:00',
			'saturday' => '10:00-20:00',
			'sunday' => '10:00-20:00'
		),
		'number-phone' => array(
			'' => ''
		),
		'prices' => '€€',
		'additional-info' => array(
			'legal-name' => '',
			'funding-name' => '',
			'duns' => '',
			'vat-id' => '',
			'number-employed' => '',
			'tax-id' => ''
		),
		'map' => array(
			'google' => array(
				'api' => ''
			),
			'geo' => array(
				'latitude' => '',
				'longitude' => ''
			)
		),
		'pages' => array(
			'about-url' => '',
			'contact-url' => ''
		)
	)
	
);

$JSeo = json_encode($Seo);

?>