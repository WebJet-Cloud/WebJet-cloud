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
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'Providing an overview of how search engines work, search engine optimization (SEO) techniques, and the major factors influencing website rankings, it highlights the importance of relevant keyword research, content optimization, site structure, quality inbound links, and user experience. She also highlights the impact of SEO on generating organic traffic, increasing conversion rates, and building a strong and lasting online presence.'
			),
			'excel' => array(
				'title' => 'The different methods',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Method',
						'2' => 'Description',
						'3' => 'Advantage'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Keyword search',
								'2' => 'Identification des mots clés pertinents et populaires liés à l\'activité pour les intégrer dans le contenu.',
								'3' => 'Amélioration de la visibilité dans les résultats de recherche.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Content optimization',
								'2' => 'Rédaction d\'un contenu de qualité, original et optimisé en intégrant les mots clés de manière naturelle.',
								'3' => 'Amélioration du classement dans les moteurs de recherche.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Site structure',
								'2' => 'Mise en place d\'une structure de site claire et logique, avec des URL conviviales et des balises méta.',
								'3' => 'Amélioration de l\'indexation et de la navigation du site.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Quality inbound links',
								'2' => 'Obtention de liens provenant de sites réputés et pertinents pour augmenter la crédibilité du site.',
								'3' => 'Augmentation de l\'autorité et de la visibilité du site.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'User experience',
								'2' => 'Improved site usability, loading speed, intuitive navigation and design.',
								'3' => 'Reduced bounce rate and improved retention.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Mobile optimization',
								'2' => 'Adapting the site for an optimal experience on mobile devices.',
								'3' => 'Improved visibility on mobile devices.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Engaging content',
								'2' => 'Creating compelling content (blog posts, videos, infographics) to encourage user engagement.',
								'3' => 'Increase interaction and sharing on social networks.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Structured markup',
								'2' => 'Use of structured tags (schema.org) to help search engines understand the content.',
								'3' => 'Improving rich snippets and visibility.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Image optimization',
								'2' => 'Optimization of images by using alt tags, compressing them and resizing them if necessary.',
								'3' => 'Improved loading time and accessibility.'
							)
						),
						'10' => array(
							'tr' => array(
								'1' => 'Follow-up and analysis',
								'2' => 'Use of analytical tools (Google Analytics, Search Console) to monitor performance and adjust strategy.',
								'3' => 'Measuring the effectiveness of actions and making data-driven decisions.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and career path',
				'description' => '',
				'text' => 'As a self-taught SEO practitioner, I have learned the fundamentals of SEO, including keyword research, content optimization, site structure, link building and performance analysis. I am able to implement effective SEO techniques to improve online visibility, generate organic traffic, and improve website search engine rankings. My background as a self-taught SEO practitioner demonstrates your passion for SEO and my ability to learn independently to become a competent SEO professional.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Natural referencing',
					'h1' => 'Search engine',
					'text' => 'Natural referencing (SEO) in search engines is a set of techniques aimed at improving the visibility and positioning of a website in organic search results. By serving future customers, SEO can play a crucial role in increasing their business\' online visibility, driving qualified traffic and increasing brand awareness.<br /><br />Through methods such as researching relevant keywords, optimizing content, improving site structure, building quality links, optimizing meta tags and mobile friendliness, SEO aims to make a site web more attractive to search engines. As a result, the site gains visibility with users conducting searches related to the client\'s business.<br /><br />The benefits of SEO include increased organic traffic, the ability to position as an authority in the field, better user experience, greater credibility and long-term return on investment. By providing a strategic approach and effective implementation of SEO, future clients can benefit from a stronger online presence, greater competitive visibility and sustainable business growth.'
				),
				'2' => array(
					'h5' => 'Natural referencing',
					'h1' => 'Community Manager',
					'text' => 'Search Engine Optimization plays a vital role in the work of a community manager by helping future clients grow their online presence organically. As a community manager, SEO can be used to optimize content published on social platforms, such as blogs, videos and social media posts, to improve their visibility in search results. br /><br />The community manager can search for relevant keywords related to the client\'s industry or brand, and then integrate these keywords naturally into the content he publishes. By using content optimization techniques, appropriate tags and well-written descriptions, the community manager can increase the visibility of content on search engines.<br /><br />By improving the natural referencing of content shared, the community manager helps generate organic traffic to the client\'s social platforms, increase user engagement and strengthen the brand\'s online presence. SEO also helps create a solid digital footprint for the brand, improve its online reputation and attract a qualified audience.<br /><br />By combining community management skills with an understanding natural referencing, the community manager can offer future clients an effective content strategy and increased visibility on search engines, which promotes the growth of their online community and the achievement of their business objectives.'
				),
				'3' => array(
					'h5' => 'Natural referencing',
					'h1' => 'Local Business',
					'text' => 'SEO plays a crucial role for local businesses by helping future customers increase their local online visibility. By using specific techniques, SEO can help local businesses appear in search results relevant to their geographic location.<br /><br />For local businesses, SEO involves optimizing for such as Google My Business listings, local directory listings, customer reviews, location-based keywords and location tags. By integrating these elements strategically, future customers can gain better visibility when a user conducts searches related to their location.<br /><br />By improving the SEO of a local business, it is possible to increase targeted organic traffic, attract qualified local customers, improve competitive visibility and build brand awareness in the local community. It can also help drive online or offline conversions, encourage positive customer reviews, and establish a strong reputation in the area.<br /><br />Providing SEO strategies tailored to local businesses , future clients can benefit from a solid online presence, increased qualified traffic, better visibility in their region and sustainable growth of their local business.'
				),
				'4' => array(
					'h5' => 'Natural referencing',
					'h1' => 'Non-profit association',
					'text' => 'SEO plays an important role for nonprofits by helping them increase their online visibility, reach their target audience and promote their initiatives. By using specific techniques, SEO can help charities rank favorably in search results relevant to their causes and activities.<br /><br />For nonprofits, SEO involves the optimization of website content, research of keywords related to their areas of action, creation of quality links with other relevant sites, and optimization of presence on social networks. By implementing these strategies, future clients can improve their online visibility, attract more visitors to their website, and increase their impact.<br /><br />By improving their SEO, nonprofits can benefit from an increase in qualified organic traffic, increase their public awareness, mobilize more support and collect donations to finance their actions. Natural referencing also helps to strengthen the credibility of the association online and to establish stronger partnerships with other players in the sector.<br /><br />By providing suitable natural referencing strategies to nonprofits, future clients can benefit from greater visibility for their causes, increased engagement with their target audience, more effective fundraising, and greater influence in their field of action. This allows them to maximize their impact and achieve their goals for the common good.'
				)
			),
			'pricing' => array(
				'free' => 'Free',
				'fees-seo' => 'Optional Operating costs of €1400 excl. tax per year'
			)
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