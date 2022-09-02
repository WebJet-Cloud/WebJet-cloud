<?php
# $email['index']['content']['mail']['contact']
$email = array(
	'index' => array(
		'title' => 'Связаться с нами',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact',
			'ru' => 'contact'
		),
		'content' => array(
			'mail' => array(
				'contact' => 'Контакт',
				'support' => 'Служба поддержки',
				'commercial' => 'Коммерческий',
				'sponsor' => 'Спонсор',
				'partner' => 'Партнер',
				'business' => 'Бизнес'
			),
			'default' => array(
				'email' => 'Электронная почта',
				'phone' => 'Телефон',
				'subject' => 'тема',
				'name' => 'Фамилия',
				'message' => 'Сообщение'
			),
			'placeholder' => array(
				'email' => 'Пожалуйста, введите действительный адрес электронной почты',
				'phone' => 'пожалуйста введите правильное число',
				'subject' => 'Пожалуйста, введите не менее 8 символов темы',
				'name' => 'Пожалуйста, введите не менее 4 символов',
				'message' => 'Напишите что-нибудь для нас'
			),
			'form' => array(
				'load' => 'Загрузка',
				'msg-thanks' => 'Ваше сообщение отправлено. Спасибо!',
				'send' => 'Сообщение отправлено'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_email = json_encode($email);

?>