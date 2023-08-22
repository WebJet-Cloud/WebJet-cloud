<?php
$social_http_sites = isset($_SERVER["HTTPS"]) ? 'https' : 'http'; 

$social = array(
	'facebook' => array(
		'sites' => 'facebook',
		'name' => '',
		'url' => $social_http_sites.'://facebook.com/',
		'admins' => '',
		'profile-id' => '',
		'app-id' => '',
		'page-id' => ''
	),
	'twitter' => array(
		'sites' => 'twitter',
		'name' => '',
		'url' => $social_http_sites.'://twitter.com/'
	),
	'tiktok' => array(
		'sites' => 'tiktok',
		'name' => '',
		'url' => ''
	),
	'blogger' => array(
		'sites' => 'blogger',
		'name' => '',
		'url' => ''
	),
	'spotify' => array(
		'sites' => 'spotify',
		'name' => '',
		'url' => ''
	),
	'instagram' => array(
		'sites' => 'instagram',
		'name' => '',
		'url' => $social_http_sites.'://instagram.com/'
	),
	'soundcloud' => array(
		'sites' => 'soundcloud',
		'name' => '',
		'url' => ''
	),
	'linkedin' => array(
		'sites' => 'linkedin',
		'name' => '',
		'url' => '',
		'team' => array(
			'url' => ''
		)
	),
	'youtube' => array(
		'sites' => 'youtube',
		'name' => '',
		'url' => $social_http_sites.'://www.youtube.com/@'
	),
	'twitch' => array(
		'sites' => 'twitch',
		'name' => '',
		'url' => ''
	),
	'github' => array(
		'sites' => 'github',
		'name' => '',
		'url' => $social_http_sites.'://github.com/',
		'sponsor' => $social_http_sites.'://github.com/sponsors/'
	),
	'discord' => array(
		'sites' => 'discord',
		'name' => '',
		'url' => ''
	),
	'viadeo' => array(
		'sites' => 'viadeo',
		'name' => '',
		'url' => '',
		'team' => array(
			'url' => ''
		)
	),
	'mixcloud' => array(
		'sites' => 'mixcloud',
		'name' => '',
		'url' => ''
	),
	'dailymotion' => array(
		'sites' => 'dailymotion',
		'name' => '',
		'url' => ''
	),
	'pinterest' => array(
		'sites' => 'pinterest',
		'name' => '',
		'url' => $social_http_sites.'://www.pinterest.com/'
	),
	'redbubble' => array(
		'sites' => 'redbubble',
		'name' => '',
		'url' => ''
	),
	'spreadshirt' => array(
		'sites' => 'spreadshirt',
		'name' => '',
		'url' => ''
	),
	'teespring' => array(
		'sites' => 'teespring',
		'name' => '',
		'url' => ''
	),
	'coinbase' => array(
		'sites' => 'coinbase',
		'name' => '',
		'url' => ''
	),
	'patreon' => array(
		'sites' => 'patreon',
		'name' => '',
		'url' => ''
	),
	'paypal' => array(
		'sites' => 'paypal',
		'name' => '',
		'url' => ''
	),
	'tipeee' => array(
		'sites' => 'tipeee',
		'name' => '',
		'url' => ''
	),
	'utip' => array(
		'sites' => 'utip',
		'name' => '',
		'url' => ''
	),
	'omlet-arcade' => array(
		'sites' => 'omlet arcade',
		'name' => '',
		'url' => ''
	),
	'streamlabs' => array(
		'sites' => 'streamlabs',
		'name' => '',
		'url' => ''
	),
	'twitch' => array(
		'sites' => 'twitch',
		'name' => '',
		'url' => ''
	),
	'bigo' => array(
		'sites' => 'bigo',
		'name' => '',
		'url' => ''
	),
	'slack' => array(
		'sites' => 'slack',
		'name' => '',
		'url' => $social_http_sites.'://.slack.com'
	),
	'telegram' => array(
		'sites' => 'telegram',
		'name' => '',
		'url' => ''
	),
	'snapchat' => array(
		'sites' => 'snapchat',
		'name' => '',
		'url' => ''
	)
);

$JE_social = json_encode($social);
?>