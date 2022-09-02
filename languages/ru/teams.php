<?php
# $block['success']['content']['msg']
$teams = array(
	'index' => array(
		'title' => 'Команды',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'teams',
			'ru' => 'teams'
		),
		'content' => array(
			'msg' => ''
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/.jpg'  /*directory images from <exemple.tld>/assets */,
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_teams = json_encode($teams);

?>