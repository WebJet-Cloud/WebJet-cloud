<?php

$partner = array(
	'index' => array(
		'title' => 'Partner',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'partner',
			'en' => 'partner'
		),
		'content' => array(
			'' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_partner = json_encode($partner);

?>