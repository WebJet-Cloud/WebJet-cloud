<?php
# $business['local']['name']
$business = array(
	'local' => array(
		'born' => '', /*exemple Day/Month/Year number only indicate age */
		'name' => 'WebJet',/*IF empty variable output not show public/not use*/
		'siret' => '',
		'tva' => '',
		'vat' => '',
		'address' => '',
		'postal' => '75000',
		'city' => 'Paris',
		'region' => 'Paris',
		'contry' => 'France',
		'status' => 'particulier', /*Special status on france SASU, SARL, SAS, etc...*/
		'geo' => array(
		/*Pratical for use Google map JS/Mapbox or other*/
			'latitude' => '48.8588897',
			'longitude' => '2.3200410217200766'
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