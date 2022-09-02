<?php
# $block['success']['content']['msg']
$block = array(
	'success' => array(
		'title' => 'Erfolg',
		'description' => 'Ihre Nachricht wurde erfolgreich gesendet',
		'keyword' => '',
		'url' => array(
			'default' => 'contact/success',
			'de' => 'kontakt/erfolg'
		),
		'content' => array(
			'msg' => 'Ihre Nachricht wurde erfolgreich gesendet'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/success.jpg'  /*directory images from <exemple.tld>/assets */,
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	),
	'error' => array(
		'title' => 'Fehler',
		'description' => 'Désolé votre message n\'a pas été envoyé',
		'keyword' => '',
		'url' => array(
			'default' => 'error',
			'de' => 'fehler'
		),
		'content' => array(
			'line1' => 'Beim Ausführen der Abfrage ist ein Fehler aufgetreten.',
			'line2' => 'Sie können diese Seite nicht besuchen, weil:',
			'line3' => 'Lesezeichen / Favorit abgelaufen',
			'line4' => 'falsche Adresse',
			'line5' => 'Eine Suchmaschine hat einen veralteten Eintrag für diese Site',
			'line6' => 'Sie haben keinen Zugriff auf diese Seite',
			'line7' => 'Ihre Nachricht wurde nicht erfolgreich gesendet'
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'block/error.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	)
);

$JE_translate_block = json_encode($block);

?>