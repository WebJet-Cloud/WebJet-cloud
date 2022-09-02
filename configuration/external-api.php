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
			'private' => '746e40aa-2cc5-4112-abc3-be5458139d27', # Sitekey
			'public' => 'b0c322b3-13bc-4c34-a0b5-ea790c77b01a' # APIKEY
		)
	), 
	/*OTHER*/
	'verify-phone' => '' /**GET your API KEY on https://numverify.com/**/
);

$JE_apiexternal = json_encode($apiexternal);

?>