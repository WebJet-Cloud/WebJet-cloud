<?php

$sponsor = array(
	'index' => array(
		'title' => 'Gesponsert',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sponsor',
			'de' => 'gesponsert'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_sponsor = json_encode($sponsor);

?>