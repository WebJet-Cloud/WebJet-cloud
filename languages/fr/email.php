<?php
# $email['ask-quotes']['content']['sebservices']['developper']
$email = array(
	'index' => array(
		'title' => 'Contactez',
		'description' => 'N\'hésitez pas à prendre contact notre équipe pour vous aidez',
		'keyword' => 'contact, équipe, vous aidez, besoin information',
		'url' => array(
			'default' => 'contact',
			'fr' => 'contacter'
		),
		'content' => array(
			'container' => array(
				'slogan' => 'Si vous avez des questions, n\'hésitez pas à nous contacter',
				'blocks' => array(
					'1' => 'Appelez pour poser n\'importe quelle question',
					'2' => 'E-mail pour obtenir un devis gratuit',
					'3' => 'Visitez notre bureau'
				),
				'calendly' => 'Prévoyez du temps avec moi'
			),
			'mail' => array(
				'contact' => 'Contact',
				'support' => 'Support',
				'commercial' => 'Commercial',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Business'
			),
			'default' => array(
				'email' => 'E-mail',
				'phone' => 'Téléphone',
				'subject' => 'sujet',
				'name' => 'Nom',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'S\'il vous plaît entrer un e-mail valide',
				'phone' => 'S\'il vous plaît entrer un numéro valide',
				'subject' => 'S\'il vous plaît entrer au moins 8 caractères de sujet',
				'name' => 'S\'il vous plaît entrer au moins 4 caractères',
				'message' => 'S\'il vous plaît écrire quelque chose pour nous'
			),
			'form' => array(
				'load' => 'Chargement',
				'msg-thanks' => 'Votre message a été envoyé. Merci!',
				'send' => 'Message Envoyé'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	),
	'ask-quotes' => array(
		'title' => 'Demander un Devis',
		'description' => 'N\'hésitez pas de nous demander votre devis gratuitement',
		'keyword' => 'demande du devis, equipe, travaille, freelance, gratuit',
		'url' => array(
			'default' => 'ask-quote',
			'fr' => 'demande-devis'
		),
		'content' => array(
			'sebservices' => array(
				'developper' => 'développeur',
				'webmaster' => 'Webmestre',
				'services-it' => 'Services IT',
				'consulting' => 'Consultant'
			),
			'container' => array(
				'slogan' => 'Si vous avez des questions, n\'hésitez pas à nous contacter',
				'blocks' => array(
					'1' => 'Appelez pour poser n\'importe quelle question',
					'2' => 'E-mail pour obtenir un devis gratuit',
					'3' => 'Visitez notre bureau'
				),
				'calendly' => 'Prévoyez du temps avec moi'  
			),
			'mail' => array(
				'contact' => 'Contact',
				'support' => 'Support',
				'commercial' => 'Commercial',
				'sponsor' => 'Sponsor',
				'partner' => 'Partner',
				'business' => 'Business'
			),
			'default' => array(
				'email' => 'E-mail',
				'phone' => 'Téléphone',
				'subject' => 'sujet',
				'name' => 'Nom',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'S\'il vous plaît entrer un e-mail valide',
				'phone' => 'S\'il vous plaît entrer un numéro valide',
				'subject' => 'S\'il vous plaît entrer au moins 8 caractères de sujet',
				'name' => 'S\'il vous plaît entrer au moins 4 caractères',
				'message' => 'S\'il vous plaît écrire quelque chose pour nous'
			),
			'form' => array(
				'load' => 'Chargement',
				'msg-thanks' => 'Votre message a été envoyé. Merci!',
				'send' => 'Message Envoyé'
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