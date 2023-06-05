<?php
# $block['success']['content']['msg']
$teams = array(
	'default' => array(
		'title' => 'Team',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'teams',
			'en' => 'teams'
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


