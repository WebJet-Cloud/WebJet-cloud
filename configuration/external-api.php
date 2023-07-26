<?php
# $apiexternal['captcha']['google']['secret']
# $apiexternal['captcha']['google']['public']
$apiexternal = array(
	/*CAPTCHA*/
	'captcha' => array(
		'google' => array(
			'secret' => '6Lc0rwAmAAAAADBJEmqkGsBAlYhTnXs0Elh1JT40',
			'private' => '',
			'public' => '6Lc0rwAmAAAAAH4ELs7_q_wE16aqV_1E8m9-tXlW'
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