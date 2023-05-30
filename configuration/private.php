<?php
# $private['phone']['code'].' '.$private['phone']['number']

$private = array(
	'born' => '24/04/1991', /*exemple Day/Month/Year number only indicate age */
	'name' => 'Alexon Balangue',/*IF empty variable output not show public/not use*/
	'address' => 'adresse personnel non partager',
	'postal' => '75017',
	'city' => 'Paris',
	'region' => 'Paris',
	'contry' => 'France',
	'phone' => array(
		'code' => '+33',
		'normal' => '0',
		'number' => '',
	),
	'mobile' => array(
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
		'public' => 'services', /*IF yes domain name or not indicate use mail private -> @ -> external = gamil.com*/
		'private' => 'services', /* *@gmail.com down is gmail.com*/
		'@' => array(
			'external' => 'webjet.cloud'
		)
	)
);

$JE_private = json_encode($private);

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