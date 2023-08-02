<?php

$private = array(
	'born' => '', /*exemple Day/Month/Year number only indicate age */
	'name' => '',/*IF empty variable output not show public/not use*/
	'address' => '',
	'postal' => '',
	'city' => '',
	'region' => '',
	'contry' => '',
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
		'public' => '', /*IF yes domain name or not indicate use mail private -> @ -> external = gamil.com*/
		'private' => '', /* *@gmail.com down is gmail.com*/
		'@' => array(
			'external' => ''
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