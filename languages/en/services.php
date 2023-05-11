<?php
# $services['index']['content']['pricing']['blocks']['small']['']    ['']
# $services['pages']['full']['footer-os']['blocks']['small']['']    ['']
# $services['aboutus']['content']['container']['title']
$services = array(
	'intro-video' => array(
		'default' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/QcfkYsDWjTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'fr' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/QcfkYsDWjTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'en' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Y5HSAStwMaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'ru' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/3a9HoYIuaaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'de' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/iptn5TPxpD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
	),
	
	'cybersecurity' => array(
		'title' => 'Services - cybersecurity',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/cybersecurity',
			'en' => 'services/cybersecurity'
		),
		'content' => array(
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'marketing' => array(
		'title' => 'Services - marketing',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/marketing',
			'en' => 'services/marketing'
		),
		'content' => array(
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'webmaster' => array(
		'title' => 'Services - webmaster',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/webmaster',
			'en' => 'services/webmaster'
		),
		'content' => array(
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'developper' => array(
		'title' => 'Services - developper',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/developper',
			'en' => 'services/developper'
		),
		'content' => array(
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'seo' => array(
		'title' => 'Services - SEO',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/seo',
			'en' => 'services/seo'
		),
		'content' => array(
			/*custom your own*/
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'consulting' => array(
		'title' => 'Services - consulting',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/consulting',
			'en' => 'services/consulting'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'Consulting is a key role in the business world, where professionals provide expertise and advice to help companies solve problems, improve performance and achieve their goals. Consultants work in a variety of fields, such as strategy, management, information technology and many others. This profession offers many opportunities for career growth and advancement, but it can also be demanding in terms of workload and travel.'
			),
			'excel' => array(
				'title' => 'The different professions',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Type of consultant',
						'2' => 'Field of expertise',
						'3' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Consultant in strategy',
								'2' => 'Corporate strategy',
								'3' => 'Helps companies define and implement strategies to improve their competitiveness and growth.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Consultant in management',
								'2' => 'Management and organisation',
								'3' => 'Advises companies on human resources management, internal organization and process improvement.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'IT Consultant',
								'2' => 'Information Technologies',
								'3' => 'Helps companies optimize their IT infrastructure, implement information systems and develop software solutions.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Marketing Consultants',
								'2' => 'Marketing and communications',
								'3' => 'Advises companies on marketing strategy, product and service promotion, and customer communication.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Financial Consultant',
								'2' => 'Finance and accounting',
								'3' => 'Helps companies optimize their financial management, analyze investments and improve their profitability.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and professional background',
				'description' => '',
				'text' => 'As a self-taught individual, I can demonstrate a strong ability to learn and adapt, which is essential to becoming a consultant. My various research, problem-solving and time management skills allow me to quickly acquire new knowledge and apply it in various contexts. In addition, my initiative and creativity help me propose innovative and customized solutions to meet the specific needs of each company. These skills, combined with my professional experience and expertise in one or more of the relevant fields.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'consulting',
					'h1' => 'In strategy',
					'text' => 'I offer my services to prospective clients by helping them achieve their business goals through a strategic and thoughtful approach. I use my expertise to analyze their competitive environment, identify growth opportunities, formulate strategic recommendations and implement effective action plans. My goal is to add value to my clients by supporting them in their decision making and optimizing their overall performance.'
				),
				'2' => array(
					'h5' => 'consulting',
					'h1' => 'In Management',
					'text' => 'My role is to support future clients in improving their processes, operational efficiency and overall performance. I work closely with management teams to analyze organizational challenges, identify gaps and propose appropriate solutions. I provide strategic advice to optimize organizational structure, implement effective management practices, develop employee skills and foster a positive corporate culture. My goal is to help my clients achieve operational excellence and achieve their business objectives in a sustainable manner.'
				),
				'3' => array(
					'h5' => 'consulting',
					'h1' => 'In IT',
					'text' => 'I offer my services to future clients by accompanying them in their technological needs. My expertise consists in evaluating their existing systems, identifying opportunities for improvement and recommending IT solutions adapted to their objectives and constraints. I can help them optimize their infrastructure, implement cybersecurity strategies, integrate new technologies, develop custom applications, and effectively manage their data. My goal is to provide relevant advice, guide my clients\' digital transformation and maximize the value of their technology investments.'
				),
				'4' => array(
					'h5' => 'consulting',
					'h1' => 'In Marketing',
					'text' => 'I am here to help prospective clients develop and optimize their marketing strategy. My role is to analyze their market positioning, identify growth opportunities and recommend effective tactics to reach their target audience. I can help them define their brand, develop integrated marketing plans, implement advertising campaigns, optimize their online presence and measure the effectiveness of their marketing efforts. My goal is to provide personalized recommendations and maximize the return on investment of their marketing activities, increasing their visibility, awareness and market share.'
				),
				'5' => array(
					'h5' => 'consulting',
					'h1' => 'In Financial',
					'text' => 'I am here to help future clients optimize their financial management and achieve their financial goals. I provide specialized advice in a variety of areas, such as budget planning, cash flow management, investment evaluation, financial risk management and financing strategy. I can also help my clients develop financial forecasts, evaluate project profitability, implement sound financial policies and optimize their capital structure. My goal is to provide in-depth financial expertise, minimize financial risk and maximize profitability to help my clients make informed decisions and ensure their long-term financial success.'
				),
				'6' => array(
					'h5' => 'Assistant',
					'h1' => 'In Computer',
					'text' => 'I am here to help future clients solve their technical problems and maximize their use of technology. I can provide assistance in a variety of areas such as software installation and configuration, hardware troubleshooting, network problem resolution, computer security, and data management. I can also offer advice on technology best practices, recommend solutions tailored to specific client needs, and guide clients in the adoption of new technologies. My goal is to ensure the smooth and efficient operation of their IT environment, helping them optimize productivity and get the most out of their technology investments.'
				)
			),
			'pricing' => array(
				'free' => 'Free'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    )
);

$JE_translate_services = json_encode($services);

?>