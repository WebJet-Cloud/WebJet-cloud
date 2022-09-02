<?php

$email = array(
	'index' => array(
		'title' => 'Contact',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'contact',
			'en' => 'contact'
		),
		'content' => array(
			'container' => array(
				'slogan' => 'If You Have Any Query, Feel Free To Contact Us',
				'blocks' => array(
					'1' => 'Call to ask any question',
					'2' => 'Email to get free quote',
					'3' => 'Visit our office'
				),
				'calendly' => 'Schedule time with me'                                                                                                                                                                                                                                                                                                                                                                         
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
				'email' => 'Email',
				'phone' => 'Phone',
				'subject' => 'sujet',
				'name' => 'Full Name',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'Please enter a valid email',
				'phone' => 'Please enter a valid number',
				'subject' => 'Please enter at least 8 characters of subject',
				'name' => 'Please enter at least 4 characters',
				'message' => 'Please write something for us'
			),
			'form' => array(
				'load' => 'Loading',
				'msg-thanks' => 'Your message has been sent. Thank you!',
				'send' => 'Send Message'
			)
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => 'themes/bg-alexonbstudio.png',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	),
	'ask-quotes' => array(
		'title' => 'Ask quote',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'ask-quote',
			'en' => 'ask-quote'
		),
		'content' => array(
			'sebservices' => array(
				'developper' => 'developper',
				'webmaster' => 'Webmaster',
				'services-it' => 'Services IT'
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
				'email' => 'Email',
				'phone' => 'Phone',
				'subject' => 'sujet',
				'name' => 'Full Name',
				'message' => 'Message'
			),
			'placeholder' => array(
				'email' => 'Please enter a valid email',
				'phone' => 'Please enter a valid number',
				'subject' => 'Please enter at least 8 characters of subject',
				'name' => 'Please enter at least 4 characters',
				'message' => 'Please write something for us'
			),
			'form' => array(
				'load' => 'Loading',
				'msg-thanks' => 'Your message has been sent. Thank you!',
				'send' => 'Send Message'
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