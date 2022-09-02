<?php
# exemple $social['pinterest']['name'];
$social_http_sites = isset($_SERVER["HTTPS"]) ? 'https' : 'http'; 

$social = array(
	'facebook' => array(
		'sites' => 'facebook',
		'name' => 'webjetclouds',
		'url' => $social_http_sites.'://fb.me/webjetclouds',
		'admins' => '103042234555592',
		'profile-id' => '100000686899395',
		'app-id' => '215266456206074',
		'page-id' => '103207239191211'
	),
	'twitter' => array(
		'sites' => 'twitter',
		'name' => 'webjetclouds',
		'url' => $social_http_sites.'://twitter.com/webjetclouds'
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
		'name' => 'webjetclouds',
		'url' => $social_http_sites.'://instagram.com/webjetclouds'
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
		'name' => 'WebJetClouds',
		'url' => $social_http_sites.'://www.youtube.com/channel/UCb_yP8M244gxQG1uen6dRgQ'
	),
	'twitch' => array(
		'sites' => 'twitch',
		'name' => '',
		'url' => ''
	),
	'github' => array(
		'sites' => 'github',
		'name' => 'WebJet-Cloud',
		'url' => $social_http_sites.'://github.com/WebJet-Cloud/',
		'sponsor' => $social_http_sites.'://github.com/sponsors/alexonbstudio'
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
		'name' => 'webjetclouds',
		'url' => $social_http_sites.'://www.pinterest.com/webjetclouds'
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
	'shop' => array(
		'sites' => 'shop',
		'name' => 'webjet',
		'url' => $social_http_sites.'://lives.webjet.cloud/boutique/'
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
		'name' => 'webjetclouds',
		'url' => $social_http_sites.'://webjetclouds.slack.com'
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