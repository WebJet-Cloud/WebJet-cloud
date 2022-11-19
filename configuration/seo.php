<?php
# $seo['hcaptcha']['private-key']
$seo = array(
	'crisp' => array(
		'key' => '' 
	),
	'tidio' => array(
		'key' => '' 
	),
	'fb-pexel' => array(
		'key' => '' 
	),
	'quantcast' => array(
		'key' => '' /*gH0YrwXWXWWS3*/
	),
	'hcaptcha' => array(
		'public-key' => '746e40aa-2cc5-4112-abc3-be5458139d27', /* Key public*/
		'private-key' => 'daa1f01e-caf1-4c49-b36c-894dbfc82622' /* Key private*/
	),
	'brave' => array(
		'token' => ''
	),
	'google' => array(
		'analystics' => '',
		'tag-manager' => ''
	),
	'shareaholic' => array(
		'key' => ''
	),
	'yandex' => array(
		'analystics' => '' /**/
	),
	'bing' => array(
		'key' => ''
	),
	'microsoft' => array(
		'key' => ''
	),
	'addthis' => array(
		'key' => '' /*ra-5efbed45630393b0*/
	),
	'html-verify' => array(
		/** Verification HTLM Social & Video & Search Engine after that change your seo.htaccess **/	
		'dailymotion' => array(
			'key' => ''
		),
		'google' => array(
			'key' => ''
		),
		'pinterest' => array(
			'key' => ''
		),
		'yandex' => array(
			'key' => ''
		)
		
	),
	/*			All Browser Pinned - just color on HEX			*/
	'browsers' => array(
		'color' => array(
			'title' => '#2b5797',
			'themes' => '#ffffff',
			'safari' => '#5bbad5',
			'background' => '#ffffff'
		)
	)
);

$JE_seo = json_encode($seo);
# $seo['browsers']['color']['title']
?>