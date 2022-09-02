<?php

$sitemap = array(
	'index' => array(
		'title' => 'Plan du site',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'sitemap',
			'fr' => 'plan-du-site'
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

$JE_translate_sitemap = json_encode($sitemap);

?>