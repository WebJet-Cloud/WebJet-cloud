<?php

$apiexternal = array(
	/*CAPTCHA*/
	'captcha' => array(
		'google' => array(
			'secret' => '',
			'private' => '',
			'public' => ''
		),
		'hcaptcha' => array(
			'secret' => '0x6C9FA380ffbf8Aa5D702139144320306a6517b1D', # Secret key
			'private' => 'daa1f01e-caf1-4c49-b36c-894dbfc82622', # Sitekey
			'public' => '746e40aa-2cc5-4112-abc3-be5458139d27' # APIKEY
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