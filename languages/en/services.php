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
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'Cybersecurity presentation highlights the critical importance of protecting computer systems and data from online threats. It addresses key risks such as phishing attacks, malware, and data breaches. Key security measures are presented, including the use of strong passwords, security awareness, patch management, and the use of advanced security solutions. With a focus on incident prevention, detection, and response, the presentation highlights the imperative of cybersecurity for individuals, businesses, and organizations.'
			),
			'excel' => array(
				'title' => 'The different methods',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Method',
						'2' => 'Description',
						'3' => 'Advantage',
						'4' => 'Limit'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Firewall',
								'2' => 'A firewall is a network security system that controls and filters incoming and outgoing traffic.',
								'3' => 'Block unauthorized connections. Protects against Denial of Service (DDoS) attacks.',
								'4' => 'Can be bypassed by overpassing attacks. Requires regular setup and maintenance.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Antivirus',
								'2' => 'Antivirus software detects, blocks, and removes malicious software such as viruses, worms, and Trojans.',
								'3' => 'Identify and remove known threats. Protects against infected files.',
								'4' => 'May have lower detection rates for new threats. May cause system slowdowns during real-time scanning.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Two-factor authentication (2FA)',
								'2' => 'Two-factor authentication requires a second form of verification, in addition to the password, such as a code sent by SMS or an authenticator app.',
								'3' => 'Reinforce the security of online accounts. Protects against phishing attacks.',
								'4' => 'May require additional effort from users. May have compatibility issues with some systems.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Datenverschlüsselung',
								'2' => 'Datenverschlüsselung wandelt Informationen in ein unlesbares Format um, es sei denn, Sie haben einen Entschlüsselungsschlüssel.',
								'3' => 'Sensible Daten vor Diebstahl oder unbefugtem Zugriff schützen. Entspricht den Datenschutzbestimmungen.',
								'4' => 'Kann zu einer leichten Erhöhung der Latenz beim Zugriff auf verschlüsselte Daten führen. Der Verlust des Entschlüsselungsschlüssels kann zu einem dauerhaften Datenverlust führen.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Security Awareness Training',
								'2' => 'Security awareness training aims to educate users on cybersecurity best practices, such as identifying phishing emails and managing passwords.',
								'3' => 'Reduces the risk of human error. Improves the overall security posture of the organization.',
								'4' => 'Requires regular updates to keep up with new threats. May be initial resistance to changing user behavior.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Patch management',
								'2' => 'Patch management is the regular application of security updates and software patches to address known vulnerabilities.',
								'3' => 'Reduces the risk of exploiting known security vulnerabilities. Protects against attacks based on known software vulnerabilities.',
								'4' => 'Requires regular maintenance to apply patches. Patches may cause software incompatibilities.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Network monitoring',
								'2' => 'Network monitoring is the real-time analysis of network traffic to detect suspicious or malicious activity.',
								'3' => 'Identifies abnormal behavior or ongoing attacks. Enables rapid response to security incidents.',
								'4' => 'Can generate a large volume of data to analyze. Requires dedicated monitoring resources.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Malware Protection',
								'2' => 'Malware protection solutions use techniques such as behavioral analysis and signature detection to identify and block malware.',
								'3' => 'Protects against viruses, worms, Trojan horses and other malware. Can provide real-time defense against new threats.',
								'4' => 'May result in false positives or false negatives. Requires regular malware definition updates.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Email Security',
								'2' => 'Email security solutions use filters and scans to block phishing emails, phishing attacks and malicious file attachments.',
								'3' => 'Protects against email-based attacks. Reduces the risk of account compromise via malicious links or attachments.',
								'4' => 'May cause false positives, sometimes blocking legitimate emails. Sophisticated social engineering techniques can circumvent filters.'
							)
						),
						'10' => array(
							'tr' => array(
								'1' => 'Access management',
								'2' => 'Access management aims to control and limit access rights to systems and data, granting only the necessary permissions to each user.',
								'3' => 'Reduces the risk of unauthorized access to sensitive data. - Allows traceability of user actions.',
								'4' => 'Requires strict management of access rights to avoid configuration errors. - Spoofing attacks can bypass access controls.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and career path',
				'description' => '',
				'text' => 'As an autodidact in cybersecurity, you have taken the initiative to learn and develop your knowledge in this critical area. You have explored various topics such as the basics of computer security, common vulnerabilities, types of attacks, detection and prevention techniques, and security best practices. You\'ve used online resources, courses, tutorials, and maybe even certifications to learn practical skills in managing passwords, protecting networks, securing operating systems, and building awareness. Security. As an autodidact, you have demonstrated great motivation, intellectual curiosity and an ability to learn independently in the complex field of cybersecurity.'
			)
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
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'The marketing presentation highlights the importance of understanding consumer needs, identifying relevant market segments and developing targeted strategies. She also highlights the impact of new technologies on marketing, with a focus on social media, personalization and customer experience. Finally, it highlights the importance of measuring and analyzing data to assess the effectiveness of marketing campaigns and adjust strategies accordingly.'
			),
			'excel' => array(
				'title' => 'The different methods',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Method',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Traditional marketing',
								'2' => 'Use of traditional communication channels such as advertising on television, radio, newspapers, magazines, posters, etc. to reach the target audience.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Digital Marketing',
								'2' => 'Use of online channels such as websites, social media, email marketing, SEO, online advertising, etc. to promote products or services and reach a wider audience.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Content Marketing',
								'2' => 'Creation and dissemination of relevant and quality content, such as blog posts, videos, infographics, white papers, etc. to attract and engage a target audience, build brand credibility and generate qualified leads.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Social Media Marketing',
								'2' => 'Use of social media platforms such as Facebook, Twitter, Instagram, LinkedIn, etc. to interact with the target audience, promote the brand, share content and generate engagement.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Influencer Marketing',
								'2' => 'Collaboration with influencers or well-known personalities to promote products or services to their audience and benefit from their credibility and their power of persuasion.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Email Marketing',
								'2' => 'Use targeted and personalized email campaigns to communicate with potential and existing customers, provide them with relevant information, special offers and inspire them to take action.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Viral Marketing',
								'2' => 'Creating engaging, shareable content that spreads quickly across the internet through user shares, allowing massive exposure of the brand or product without significant advertising investment.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Experiential Marketing',
								'2' => 'Creating unique and memorable experiences for customers, using events, product demonstrations, free samples, etc. to elicit emotional engagement and foster loyalty.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and career path',
				'description' => '',
				'text' => 'As an autodidact in marketing, you have taken the initiative to learn and develop your knowledge in this essential field. You have probably studied various topics such as Marketing Basics, Consumer Psychology, Market Segmentation Strategies, Digital Marketing, Content Marketing, Social Media Marketing, Email Marketing, SEO, etc You also gained an understanding of the tools and platforms used in modern marketing. Through your willingness to learn and independent research, you have developed valuable skills to effectively promote products or services, reach a target audience and create impactful marketing campaigns.'
			)
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
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'The presentation on the webmaster highlights the essential role of this professional in the creation, management and maintenance of websites. The webmaster is responsible for the conception of the site, its architecture, its design and its overall functioning. He also takes care of the integration of content and functionalities, ensuring that the site is user-friendly and responsive.<br /><br />The webmaster manages the technical aspects of the site, such as the hosting, security, updating software and resolving technical issues. It also monitors site performance, analyzing statistics and making adjustments to improve user experience and SEO.<br /><br />In addition, the webmaster plays a key role in content management . He creates, edits and organizes pages, posts, images and videos, ensuring that they are relevant, well presented and comply with web standards. He may also be responsible for optimizing content for SEO to improve the visibility of the site in search engines.<br /><br />The webmaster works closely with the development teams, design and marketing to ensure that the website meets the objectives and needs of the business or organization. His versatility and knowledge of different web technologies allow him to effectively coordinate these efforts and ensure the proper functioning of the site.<br /><br />In summary, the webmaster is a key professional in the creation and management of websites. It combines technical skills and marketing knowledge to guarantee a high-performance, attractive site that meets the expectations of users and companies.'
			),
			'excel' => array(
				'title' => 'The different methods',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Method',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Website design',
								'2' => 'The webmaster is responsible for the design and architecture of websites. It creates a logical structure for the site and ensures that the pages are well organized and easy to navigate.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Design and integration',
								'2' => 'The webmaster takes care of the visual design of the site, creating graphic models and integrating them into the HTML/CSS code. He ensures that the design is attractive, user-friendly and conforms to web standards.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Content management',
								'2' => 'The webmaster is responsible for creating, modifying and organizing the content of the site. He adds articles, images, videos, and ensures that the content is relevant, well presented and optimized for SEO.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Technical maintenance',
								'2' => 'The webmaster manages the technical aspects of the site, such as hosting, security, software updates and the resolution of technical problems. He makes sure the site is working properly and performs regular backups.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'SEO Optimization',
								'2' => 'The webmaster uses optimization techniques to improve the visibility of the site in search engines. It performs keyword research, optimizes HTML tags, improves site structure and works on optimizing loading speed.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Performance analysis',
								'2' => 'The webmaster uses analytics tools to monitor site performance, such as number of visitors, conversion rates and page load times. It analyzes this data and makes adjustments to improve user experience and site results.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Coordination with teams',
								'2' => 'The webmaster works closely with the development, design and marketing teams to ensure that the website meets the goals and needs of the business. He coordinates the efforts of these teams and communicates effectively with them.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and career path',
				'description' => '',
				'text' => 'Being self-taught in the field of webmastering involves learning on your own the skills necessary to create, manage and maintain websites. This can be done by following online tutorials, reading specialized resources and actively practicing. As an autodidact, it is important to master programming languages such as HTML, CSS and JavaScript, as well as web design and SEO concepts. It is also crucial to be familiar with popular CMS such as WordPress and to understand the basics of web hosting, security and performance analysis. The autodidact must be motivated, persevering and curious, constantly seeking to keep abreast of the latest trends and webmaster techniques.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Webmaster',
					'h1' => 'Site Showcast',
					'text' => ''
				),
				'2' => array(
					'h5' => 'Webmaster',
					'h1' => 'Blog',
					'text' => ''
				),
				'3' => array(
					'h5' => 'Webmaster',
					'h1' => 'E-Commerce',
					'text' => ''
				),
				'4' => array(
					'h5' => 'Webmaster',
					'h1' => 'LMS',
					'text' => ''
				),
				'5' => array(
					'h5' => 'Webmaster',
					'h1' => 'Freelancer',
					'text' => ''
				),
				'6' => array(
					'h5' => 'Webmaster',
					'h1' => 'Booking',
					'text' => ''
				),
				'7' => array(
					'h5' => 'Webmaster',
					'h1' => 'Social Network',
					'text' => ''
				)
			)
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
			'intro' => array(
				'title' => 'Introduction',
				'description' => '',
				'text' => 'The developer is a professional who creates software, applications and websites using programming languages and computer tools. He is responsible for the design, development, implementation and maintenance of these computer systems. The developer has strong technical skills and in-depth knowledge of programming languages such as Java, Python, C++ or JavaScript. He often works in a team, collaborates with designers and IT specialists, and adapts to technological developments to provide innovative and effective solutions. The developer should also have good problem-solving skills and be able to quickly adapt to new technologies and requirements.'
			),
			'excel' => array(
				'title' => 'The different methods',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Method',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'agile',
								'2' => 'Iterative and collaborative software development approach, promoting flexibility, adaptability to changes and regular delivery of features.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'cascading',
								'2' => 'Sequential and linear approach where each development phase is carried out successively, with detailed planning from the start of the project.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'RAD (Rapid Application Development)',
								'2' => 'Rapid application development method, based on short and intensive development cycles, involving close interaction with end users.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'TDD (Test-Driven Development)',
								'2' => 'Test-centric approach, where developers write automated tests first, then code to satisfy those tests.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'BDD (Behavior-Driven Development)',
								'2' => 'Behaviour-driven development approach, emphasizing collaboration among stakeholders and expressing requirements in terms of expected behavior.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'DevOps',
								'2' => 'Continuous integration of software development and operations, aimed at improving collaboration, efficiency and quality of software products.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Lean',
								'2' => 'Development approach focused on eliminating waste and maximizing value for the customer, by promoting efficient management of resources.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'SCRUM',
								'2' => 'Agile framework that structures development into iterations called "sprints", with regular meetings for planning, review and retrospective.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'My education and career path',
				'description' => '',
				'text' => 'As an autodidact, I learn by myself the skills necessary to design, develop and maintain software. I use a variety of online resources, such as tutorials, online courses, books, and programming forums, to learn programming knowledge and skills. I develop my ability to solve problems and find solutions, by experimenting and practicing regularly. I can also participate in personal or collaborative projects to develop practical experience. And motivated, disciplined and persevering.'
			)
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
				'title' => 'My education and career path',
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