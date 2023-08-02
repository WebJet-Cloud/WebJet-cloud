<?php
# $business['local']['address']
$business = array(
	'local' => array(
		'born' => '', /*exemple Day/Month/Year number only indicate age */
		'name' => '',/*IF empty variable output not show public/not use*/
		'siret' => '',
		'tva' => '', //TVA NUM
		'vat' => '',
		'rcs-number' => '',
		'salp' => '',//services à la personne N° agréer
		'capital-euro' => '',
		'address' => '',
		'postal' => '',
		'city' => '',
		'region' => '',
		'contry' => '',
		'status' => '', /*Special status on france SASU, SARL, SAS, etc...*/
		'geo' => array(
		/*Pratical for use Google map JS/Mapbox or other*/
			'latitude' => '',
			'longitude' => ''
		),
		'mobile' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '',
		),
		'phone' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '',
		),
		'fax' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '',
		),
		'mail' => array(
			'contact' => '',
			'support' => '',
			'commercial' => '',
			'sponsor' => '',
			'partner' => '',
			'business' => ''
		),
		'team' => array(
		/*exemple*/
			'john' => array(
				'name' => 'John',
				'url' => 'john.tld'
			),
			'bob' => array(
				'name' => 'bob',
				'url' => 'bob.tld'
			)
			/* Custom your own here */
		)
	),
	'external' => array(
		/*exemple*/
		'london' => array(
			'' => ''
		)
		/*Custom your own here*/
	)
);

$JE_business = json_encode($business);

#####################################
#									#
#			Email|SMTP 				#
#									#
#####################################
/*
$hostMAIL = 'mail.exemple.tld';
$userMAIL = 'user@exemple.tld';
$passwdMAIL = '****';
$portMAIL = 587;
*/

?>