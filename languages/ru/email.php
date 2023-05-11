<?php
# $email['index']['content']['mail']['contact']
$email = array(
	'index' => array(
		'title' => 'Связаться с нами',
		'description' => 'Не стесняйтесь обращаться к нашей команде, чтобы помочь вам',
		'keyword' => 'контакт, команда, у вас есть, нужна информация',
		'url' => array(
			'default' => 'contact',
			'ru' => 'contact'
		),
		'content' => array(
			'sebservices' => array(
				'developper' => 'разработчик',
				'webmaster' => 'веб-мастер',
				'services-it' => 'Услуги ИТ',
				'consulting' => 'Консалтинг'
			),
			'container' => array(
				'slogan' => 'Если у вас есть какие-либо вопросы, не стесняйтесь обращаться к нам',
				'blocks' => array(
					'1' => 'Звоните, чтобы задать любой вопрос',
					'2' => 'Электронная почта для бесплатной цитаты',
					'3' => 'Посетите наш офис'
				),
				'calendly' => 'запланируй время со мной'
			),
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
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	),
	'ask-quotes' => array(
		'title' => 'Спросите цену',
		'description' => 'Не стесняйтесь обращаться к нам за бесплатной цитатой',
		'keyword' => 'запрос цитаты, команда, работа, фриланс, бесплатно',
		'url' => array(
			'default' => 'ask-quote',
			'ru' => 'ask-quote'
		),
		'content' => array(
			'container' => array(
				'slogan' => 'Если у вас есть какие-либо вопросы, не стесняйтесь обращаться к нам',
				'blocks' => array(
					'1' => 'Звоните, чтобы задать любой вопрос',
					'2' => 'Электронная почта для бесплатной цитаты',
					'3' => 'Посетите наш офис'
				),
				'calendly' => 'Prévoyez du temps avec moi'
			),
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
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_email = json_encode($email);

?>