<?php
# $apiexternal['captcha']['google']['secret']
# $apiexternal['captcha']['google']['public']
$apiexternal = array(
	/*CAPTCHA*/
	'captcha' => array(
		'google' => array(
			'secret' => '',
			'private' => '',
			'public' => ''
		),
		'hcaptcha' => array(
			'secret' => '', # Secret key
			'private' => '', # Sitekey
			'public' => '' # APIKEY
		)
	), 
	/*OTHER*/
	'verify-phone' => '', /**GET your API KEY on https://numverify.com/**/
	'matomo' => array(
		'url' => '',
		'id' => ''
	),
	'clarity.ms' => ''	
);

$JE_apiexternal = json_encode($apiexternal);

?>