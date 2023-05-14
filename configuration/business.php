<?php
# $business['local']['salp']
$business = array(
	'local' => array(
		'born' => '', /*exemple Day/Month/Year number only indicate age */
		'name' => 'WebJetClouds',/*IF empty variable output not show public/not use*/
		'siret' => '',
		'tva' => '', //TVA NUM
		'vat' => 'TVA XXXXX',
		'rcs-number' => '',
		'salp' => 'en cours',//services à la personne N° agréer
		'capital-euro' => '€100',
		'address' => '6 Rue d\'Armaillé,',
		'postal' => '75017',
		'city' => 'Paris',
		'region' => 'Île-De-France',
		'contry' => 'France',
		'status' => 'SASU', /*Special status on france SASU, SARL, SAS, etc...*/
		'geo' => array(
		/*Pratical for use Google map JS/Mapbox or other*/
			'latitude' => '48.878089904785156',
			'longitude' => '2.291578531265259'
		),
		'mobile' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '756934140',
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
			'contact' => 'con',
			'support' => 'supp',
			'commercial' => 'comm',
			'sponsor' => 'spon',
			'partner' => 'part',
			'business' => 'buz'
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