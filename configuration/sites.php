<?php
/*
exemple $sites['name'];
exemple $sites['update']['rdf'];
exemple $sites['auto']['domain'][''];
exemple $sites['template'];

*/
$sites = array(
	'name' => '',
	'domain' => 'webjetclouds.local:8890', /*domain: exemple.tld*/
	'acceptlang' => 'fr',
	'auto' => array(
		'domain' => preg_replace('/www./i', '', $_SERVER['SERVER_NAME']) /*Automate domain.tld no put*/
	),
	'email' => array(
		'receive' => 'text' /* [text or icon] (icon: need to use template mailing - contact form you'll receive */
	),
	'sub-domain' => 'webjetclouds.local:8890',  /*domain: cdexemple.tld*/
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'template' => 'default',
	'create' => array(),
	'update' => array(
		'rdf' => date('Y-m-d')
	),
	'copyright' => array(
		'frontend' => 'Copyright &copy; 2022-'.date('Y'), /*show on template */
		'rdf' => 'Copyright &copy;' /*show only template seo/txt/rdf*/
	),
	'head' => array(
		'robots' => 'index, follow' /*Only show on template header.php | robots meta*/
	),
	'default-timezone' => 'Europe/Paris', /*Docs PHP variable date_default_timezone_set() */
	/*Pricing*/
	'tarifs' => array(
		'money' => '€',
		'plan' => array(
			'basic' => '',
			'standard' => '',
			'premium' => ''
		)
	)
);

$JE_sites = json_encode($sites);

#Secret hidden debug json

#####################################
#									#
#			DATABASE|ADODB			#
#									#
#####################################
/*
$hostDB = 'localhost';
$nameDB = '';
$userDB = '';
$passwdDB = '';
$portDB = 3306;
*/

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