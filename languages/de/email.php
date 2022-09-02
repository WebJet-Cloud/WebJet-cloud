<?php
# $email['index']['content']['mail']['contact']
$email = array(
	'index' => array(
		'title' => 'Kontakt',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact',
			'de' => 'kontakt'
		),
		'content' => array(
			'mail' => array(
				'contact' => 'Kontakt',
				'support' => 'Unterstützung',
				'commercial' => 'Werbung',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Geschäft'
			),
			'default' => array(
				'email' => 'E-mail',
				'phone' => 'Telefon',
				'subject' => 'Thema',
				'name' => 'Nachname',
				'message' => 'Nachricht'
			),
			'placeholder' => array(
				'email' => 'Bitte geben Sie eine gültige Email-Adresse ein',
				'phone' => 'Bitte geben Sie eine gültige Nummer ein',
				'subject' => 'Bitte geben Sie mindestens 8 Betreff-Zeichen ein',
				'name' => 'Bitte geben Sie mindestens 4 Zeichen ein',
				'message' => 'Bitte schreib etwas für uns'
			),
			'form' => array(
				'load' => 'Wird geladen',
				'msg-thanks' => 'Ihre Nachricht wurde gesendet. Danke schön!',
				'send' => 'Nachricht gesendet'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=pzXxTTyxFNA'  /*directory images from <exemple.tld>/assets */
		)
	),
	'ask-quotes' => array(
		'title' => 'Ask-Zitat',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'ask-quote',
			'de' => 'ask-zitat'
		),
		'content' => array(
			'mail' => array(
				'contact' => 'Kontakt',
				'support' => 'Unterstützung',
				'commercial' => 'Werbung',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Geschäft'
			),
			'default' => array(
				'email' => 'E-mail',
				'phone' => 'Telefon',
				'subject' => 'Thema',
				'name' => 'Nachname',
				'message' => 'Nachricht'
			),
			'placeholder' => array(
				'email' => 'Bitte geben Sie eine gültige Email-Adresse ein',
				'phone' => 'Bitte geben Sie eine gültige Nummer ein',
				'subject' => 'Bitte geben Sie mindestens 8 Betreff-Zeichen ein',
				'name' => 'Bitte geben Sie mindestens 4 Zeichen ein',
				'message' => 'Bitte schreib etwas für uns'
			),
			'form' => array(
				'load' => 'Wird geladen',
				'msg-thanks' => 'Ihre Nachricht wurde gesendet. Danke schön!',
				'send' => 'Nachricht gesendet'
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