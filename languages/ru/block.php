<?php
# $block['success']['content']['msg']
$block = array(
	'success' => array(
		'title' => 'Успех',
		'description' => 'Ваше сообщение было отправлено успешно',
		'keyword' => '',
		'url' => array(
			'default' => 'contact/success',
			'ru' => 'contact/success'
		),
		'content' => array(
			'msg' => 'Ваше сообщение было отправлено успешно'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/success.jpg'  /*directory images from <exemple.tld>/assets */,
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	),
	'error' => array(
		'title' => 'Ошибка',
		'description' => 'Извините, ваше сообщение не было отправлено',
		'keyword' => '',
		'url' => array(
			'default' => 'error',
			'ru' => 'error'
		),
		'content' => array(
			'line1' => 'Произошла ошибка при выполнении запроса.',
			'line2' => 'Вы не можете посетить эту страницу, потому что:',
			'line3' => 'закладка / избранное истекло',
			'line4' => 'неправильный адрес',
			'line5' => 'В поисковой системе есть устаревшие данные об этом сайте.',
			'line6' => 'У вас нет доступа к этой странице',
			'line7' => 'Ваше сообщение не было отправлено'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/error.jpg',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_block = json_encode($block);

?>