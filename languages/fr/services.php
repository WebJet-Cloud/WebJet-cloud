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
		'title' => 'Prestation de Services en cyber securité',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/cybersecurity',
			'fr' => 'services/cyber-securite'
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
		'title' => 'Prestation de Services en marketing',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/marketing',
			'fr' => 'services/marketing'
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
		'title' => 'Prestation de Services en webmestre',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/webmaster',
			'fr' => 'services/webmestre'
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
		'title' => 'Prestation de Services en développeur',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/developper',
			'fr' => 'services/developpeur'
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
		'title' => 'Prestation de Services en référencement naturel',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/seo',
			'fr' => 'services/reference-naturel'
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
		'title' => 'Prestation de Services en consultant',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/consulting',
			'fr' => 'services/consultant'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'Le métier de consultant est un rôle clé dans le monde des affaires, où les professionnels apportent leur expertise et leurs conseils pour aider les entreprises à résoudre des problèmes, améliorer leurs performances et atteindre leurs objectifs. Les consultants travaillent dans divers domaines, tels que la stratégie, le management, l\'informatique et bien d\'autres. Ce métier offre de nombreuses opportunités de carrière et d\'évolution, mais il peut également être exigeant en termes de charge de travail et de déplacements.'
			),
			'excel' => array(
				'title' => 'Les différents métiers',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Type de consultant',
						'2' => 'Domaine d\'expertise',
						'3' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Consultant en stratégie',
								'2' => 'Stratégie d\'entreprise',
								'3' => 'Aide les entreprises à définir et mettre en œuvre des stratégies pour améliorer leur compétitivité et leur croissance.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Consultant en management',
								'2' => 'Gestion et organisation',
								'3' => 'Conseille les entreprises sur la gestion des ressources humaines, l\'organisation interne et l\'amélioration des processus.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Consultant en informatique',
								'2' => 'Technologies de l\'information',
								'3' => 'Aide les entreprises à optimiser leur infrastructure informatique, à mettre en place des systèmes d\'information et à développer des solutions logicielles.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Consultant en marketing',
								'2' => 'Marketing et communication',
								'3' => 'Conseille les entreprises sur la stratégie marketing, la promotion des produits et services, et la communication avec les clients.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Consultant en finance',
								'2' => 'Finance et comptabilité',
								'3' => 'Aide les entreprises à optimiser leur gestion financière, à analyser les investissements et à améliorer leur rentabilité.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En tant qu\'autodidacte, je peux vous démontrer avec une grande capacité d\'apprentissage et d\'adaptation, ce qui est essentiel pour devenir consultant. Mes différentes compétences en recherche, en résolution de problèmes et en gestion du temps me permettent d\'acquérir rapidement de nouvelles connaissances et de les appliquer dans divers contextes. De plus, mon esprit d\'initiative et ma créativité vous aident à proposer des solutions innovantes et personnalisées pour répondre aux besoins spécifiques de chaque entreprise. Ces compétences, combinées à mes expériences professionnelles et à mes expertises dans un ou plusieurs domaines compétents.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'consultant',
					'h1' => 'En Stratégie',
					'text' => 'je propose mes services aux futurs clients en les aidant à atteindre leurs objectifs commerciaux grâce à une approche stratégique et réfléchie. J\'utilise mon expertise pour analyser leur environnement concurrentiel, identifier les opportunités de croissance, formuler des recommandations stratégiques et mettre en place des plans d\'action efficaces. Mon objectif est d\'apporter de la valeur ajoutée à mes clients en les accompagnant dans leurs prises de décision et en optimisant leur performance globale.'
				),
				'2' => array(
					'h5' => 'consultant',
					'h1' => 'En Management',
					'text' => 'mon rôle est d\'accompagner les futurs clients dans l\'amélioration de leurs processus, de leur efficacité opérationnelle et de leur performance globale. Je travaille en étroite collaboration avec les équipes dirigeantes pour analyser les défis organisationnels, identifier les lacunes et proposer des solutions adaptées. Je fournis des conseils stratégiques pour optimiser la structure organisationnelle, mettre en œuvre des pratiques de gestion efficaces, développer les compétences des employés et favoriser une culture d\'entreprise positive. Mon objectif est d\'aider mes clients à atteindre l\'excellence opérationnelle et à réaliser leurs objectifs commerciaux de manière durable.'
				),
				'3' => array(
					'h5' => 'consultant',
					'h1' => 'En Informatique',
					'text' => 'je propose mes services aux futurs clients en les accompagnant dans leurs besoins technologiques. Mon expertise consiste à évaluer leurs systèmes existants, identifier les opportunités d\'amélioration et recommander des solutions informatiques adaptées à leurs objectifs et contraintes. Je peux les aider à optimiser leur infrastructure, à mettre en place des stratégies de cybersécurité, à intégrer de nouvelles technologies, à développer des applications sur mesure et à gérer efficacement leurs données. Mon objectif est de fournir des conseils pertinents, de guider la transformation numérique de mes clients et de maximiser la valeur ajoutée de leurs investissements technologiques.'
				),
				'4' => array(
					'h5' => 'consultant',
					'h1' => 'En Marketing',
					'text' => 'je suis là pour aider les futurs clients à développer et à optimiser leur stratégie de marketing. Mon rôle est d\'analyser leur positionnement sur le marché, d\'identifier les opportunités de croissance et de recommander des tactiques efficaces pour atteindre leur public cible. Je peux les aider à définir leur marque, à élaborer des plans de marketing intégrés, à mettre en œuvre des campagnes publicitaires, à optimiser leur présence en ligne et à mesurer l\'efficacité de leurs efforts marketing. Mon objectif est de fournir des recommandations personnalisées et de maximiser le retour sur investissement de leurs activités marketing, en augmentant leur visibilité, leur notoriété et leur part de marché.'
				),
				'5' => array(
					'h5' => 'consultant',
					'h1' => 'En Finances',
					'text' => 'je suis là pour aider les futurs clients à optimiser leur gestion financière et à atteindre leurs objectifs financiers. Je fournis des conseils spécialisés dans divers domaines, tels que la planification budgétaire, la gestion des flux de trésorerie, l\'évaluation des investissements, la gestion des risques financiers et la stratégie de financement. Je peux également aider mes clients à élaborer des prévisions financières, à évaluer la rentabilité des projets, à mettre en place des politiques financières solides et à optimiser leur structure de capital. Mon objectif est d\'apporter une expertise financière approfondie, de minimiser les risques financiers et de maximiser la rentabilité, afin d\'aider mes clients à prendre des décisions éclairées et à assurer leur succès financier à long terme.'
				),
				'6' => array(
					'h5' => 'Assistant',
					'h1' => 'En Informatique',
					'text' => 'je suis là pour aider les futurs clients à résoudre leurs problèmes techniques et à maximiser leur utilisation des technologies. Je peux fournir une assistance dans divers domaines tels que l\'installation et la configuration de logiciels, le dépannage de problèmes matériels, la résolution de problèmes de réseau, la sécurité informatique et la gestion des données. Je peux également offrir des conseils sur les meilleures pratiques technologiques, recommander des solutions adaptées aux besoins spécifiques des clients et les guider dans l\'adoption de nouvelles technologies. Mon objectif est d\'assurer un fonctionnement fluide et efficace de leur environnement informatique, en les aidant à optimiser leur productivité et à tirer le meilleur parti de leurs investissements technologiques.'
				)
			),
			'pricing' => array(
				'free' => 'Gratuit'
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