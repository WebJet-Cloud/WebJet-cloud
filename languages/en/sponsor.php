<?php

$sponsor = array(
	'index' => array(
		'title' => 'Sponsor',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sponsor',
			'en' => 'sponsor'
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

$JE_translate_sponsor = json_encode($sponsor);

?>