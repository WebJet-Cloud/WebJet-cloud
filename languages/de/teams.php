<?php
# $block['success']['content']['msg']
$teams = array(
	'index' => array(
		'title' => 'Die Mannschaften',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'teams',
			'de' => 'mannschaften'
		),
		'content' => array(
			'msg' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/.jpg'  /*directory images from <exemple.tld>/assets */,
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_teams = json_encode($teams);

?>