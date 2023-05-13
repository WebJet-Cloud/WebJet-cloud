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
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'En fournissant un aperçu du fonctionnement des moteurs de recherche, des techniques d\'optimisation des moteurs de recherche (SEO) et des principaux facteurs influençant le classement des sites web, elle souligne l\'importance de la recherche de mots clés pertinents, de l\'optimisation du contenu, de la structure du site, des liens entrants de qualité et de l\'expérience utilisateur. Elle met également en évidence l\'impact du référencement naturel sur la génération de trafic organique, l\'augmentation du taux de conversion et la construction d\'une présence en ligne solide et durable.'
			),
			'excel' => array(
				'title' => 'Les différents méthodes',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode',
						'2' => 'Description',
						'3' => 'Avantage'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Recherche de mots clés',
								'2' => 'Identification des mots clés pertinents et populaires liés à l\'activité pour les intégrer dans le contenu.',
								'3' => 'Amélioration de la visibilité dans les résultats de recherche.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Optimisation du contenu',
								'2' => 'Rédaction d\'un contenu de qualité, original et optimisé en intégrant les mots clés de manière naturelle.',
								'3' => 'Amélioration du classement dans les moteurs de recherche.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Structure du site',
								'2' => 'Mise en place d\'une structure de site claire et logique, avec des URL conviviales et des balises méta.',
								'3' => 'Amélioration de l\'indexation et de la navigation du site.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Liens entrants de qualité',
								'2' => 'Obtention de liens provenant de sites réputés et pertinents pour augmenter la crédibilité du site.',
								'3' => 'Augmentation de l\'autorité et de la visibilité du site.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Expérience utilisateur',
								'2' => 'Amélioration de la convivialité du site, de la vitesse de chargement, de la navigation intuitive et du design.',
								'3' => 'Réduction du taux de rebond et amélioration de la rétention.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Optimisation mobile',
								'2' => 'Adaptation du site pour une expérience optimale sur les appareils mobiles.',
								'3' => 'Amélioration de la visibilité sur les appareils mobiles.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Contenu engageant',
								'2' => 'Création de contenu attrayant (articles de blog, vidéos, infographies) pour encourager l\'engagement des utilisateurs.',
								'3' => 'Augmentation de l\'interaction et du partage sur les réseaux sociaux.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Balisage structuré',
								'2' => 'Utilisation de balises structurées (schema.org) pour aider les moteurs de recherche à comprendre le contenu.',
								'3' => 'Amélioration des extraits enrichis et de la visibilité.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Optimisation de l\'image',
								'2' => 'Optimisation des images en utilisant des balises alt, en les compressant et en les redimensionnant si nécessaire.',
								'3' => 'Amélioration du temps de chargement et de l\'accessibilité.'
							)
						),
						'10' => array(
							'tr' => array(
								'1' => 'Suivi et analyse',
								'2' => 'Utilisation d\'outils d\'analyse (Google Analytics, Search Console) pour surveiller les performances et ajuster la stratégie.',
								'3' => 'Mesure de l\'efficacité des actions et prise de décisions basées sur les données.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En tant qu\'autodidacte en référencement, J\'ai appris les fondamentaux du référencement, y compris la recherche de mots clés, l\'optimisation du contenu, la structure du site, la construction de liens et l\'analyse des performances. Je suis en mesure de mettre en œuvre des techniques de référencement efficaces pour améliorer la visibilité en ligne, générer du trafic organique et améliorer le classement des sites web dans les moteurs de recherche. Mon parcours en tant qu\'autodidacte démontre votre passion pour le référencement et mes capacité à apprendre de manière autonome pour devenir un professionnel compétent dans ce domaine.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Référencement Naturel',
					'h1' => 'Moteur de recherche',
					'text' => 'Le référencement naturel (SEO) dans les moteurs de recherche est un ensemble de techniques visant à améliorer la visibilité et le positionnement d\'un site web dans les résultats de recherche organiques. En servant les futurs clients, le référencement naturel peut jouer un rôle crucial en augmentant la visibilité de leur entreprise en ligne, en générant du trafic qualifié et en augmentant leur notoriété.<br /><br />Grâce à des méthodes telles que la recherche de mots clés pertinents, l\'optimisation du contenu, l\'amélioration de la structure du site, la création de liens de qualité, l\'optimisation des balises méta et la convivialité mobile, le référencement naturel vise à rendre un site web plus attrayant pour les moteurs de recherche. En conséquence, le site gagne en visibilité auprès des utilisateurs qui effectuent des recherches liées à l\'activité du client.<br /><br />Les avantages du référencement naturel incluent l\'augmentation du trafic organique, la possibilité de se positionner en tant qu\'autorité dans le domaine, une meilleure expérience utilisateur, une plus grande crédibilité et un retour sur investissement à long terme. En offrant une approche stratégique et une mise en œuvre efficace du référencement naturel, les futurs clients peuvent bénéficier d\'une présence en ligne renforcée, d\'une plus grande visibilité concurrentielle et d\'une croissance durable de leur activité.'
				),
				'2' => array(
					'h5' => 'Référencement Naturel',
					'h1' => 'Community Manager',
					'text' => 'Le référencement naturel joue un rôle essentiel dans le travail d\'un community manager en aidant les futurs clients à développer leur présence en ligne de manière organique. En tant que community manager, le référencement naturel peut être utilisé pour optimiser les contenus publiés sur les plateformes sociales, comme les blogs, les vidéos et les posts sur les réseaux sociaux, afin d\'améliorer leur visibilité dans les résultats de recherche.<br /><br />Le community manager peut effectuer une recherche de mots clés pertinents liés à l\'industrie ou à la marque du client, puis intégrer ces mots clés de manière naturelle dans les contenus qu\'il publie. En utilisant des techniques d\'optimisation du contenu, des balises appropriées et des descriptions bien rédigées, le community manager peut augmenter la visibilité du contenu sur les moteurs de recherche.<br /><br />En améliorant le référencement naturel des contenus partagés, le community manager contribue à générer du trafic organique vers les plateformes sociales du client, à augmenter l\'engagement des utilisateurs et à renforcer la présence en ligne de la marque. Le référencement naturel permet également de créer une empreinte digitale solide pour la marque, d\'améliorer sa réputation en ligne et d\'attirer un public qualifié.<br /><br />En combinant les compétences de community management avec une compréhension du référencement naturel, le community manager peut offrir aux futurs clients une stratégie de contenu efficace et une visibilité accrue sur les moteurs de recherche, ce qui favorise la croissance de leur communauté en ligne et l\'atteinte de leurs objectifs commerciaux.'
				),
				'3' => array(
					'h5' => 'Référencement Naturel',
					'h1' => 'Local Business',
					'text' => 'Le référencement naturel joue un rôle crucial pour les entreprises locales en aidant les futurs clients à augmenter leur visibilité en ligne au niveau local. En utilisant des techniques spécifiques, le référencement naturel peut aider les entreprises locales à apparaître dans les résultats de recherche pertinents pour leur emplacement géographique.<br /><br />Pour les entreprises locales, le référencement naturel implique l\'optimisation des éléments tels que les fiches Google My Business, les listes d\'annuaires locaux, les avis clients, les mots clés géolocalisés et les balises de localisation. En intégrant ces éléments de manière stratégique, les futurs clients peuvent obtenir une meilleure visibilité lorsqu\'un utilisateur effectue des recherches liées à leur emplacement.<br /><br />En améliorant le référencement naturel d\'une entreprise locale, il est possible d\'augmenter le trafic organique ciblé, d\'attirer des clients locaux qualifiés, d\'améliorer la visibilité concurrentielle et de renforcer la notoriété de la marque dans la communauté locale. Cela peut également contribuer à générer des conversions en ligne ou hors ligne, à encourager les avis positifs des clients et à établir une réputation solide dans la région.<br /><br />En fournissant des stratégies de référencement naturel adaptées aux entreprises locales, les futurs clients peuvent bénéficier d\'une présence en ligne solide, d\'une augmentation du trafic qualifié, d\'une meilleure visibilité dans leur région et d\'une croissance durable de leur activité locale.'
				),
				'4' => array(
					'h5' => 'Référencement Naturel',
					'h1' => 'Association à but non lucratif',
					'text' => 'Le référencement naturel joue un rôle important pour les associations à but non lucratif en les aidant à accroître leur visibilité en ligne, à atteindre leur public cible et à promouvoir leurs initiatives. En utilisant des techniques spécifiques, le référencement naturel peut aider les associations à se positionner favorablement dans les résultats de recherche pertinents pour leurs causes et activités.<br /><br />Pour les associations à but non lucratif, le référencement naturel implique l\'optimisation des contenus du site web, la recherche de mots clés liés à leurs domaines d\'action, la création de liens de qualité avec d\'autres sites pertinents, et l\'optimisation de la présence sur les réseaux sociaux. En mettant en œuvre ces stratégies, les futurs clients peuvent améliorer leur visibilité en ligne, attirer plus de visiteurs sur leur site web et augmenter leur impact.<br /><br />En améliorant leur référencement naturel, les associations à but non lucratif peuvent bénéficier d\'une augmentation du trafic organique qualifié, accroître leur sensibilisation auprès du public, mobiliser davantage de soutiens et collecter des dons pour financer leurs actions. Le référencement naturel permet également de renforcer la crédibilité de l\'association en ligne et d\'établir des partenariats plus solides avec d\'autres acteurs du secteur.<br /><br />En fournissant des stratégies de référencement naturel adaptées aux associations à but non lucratif, les futurs clients peuvent bénéficier d\'une plus grande visibilité pour leurs causes, d\'une mobilisation accrue de leur public cible, d\'une collecte de fonds plus efficace et d\'une plus grande influence dans leur domaine d\'action. Cela leur permet de maximiser leur impact et d\'atteindre leurs objectifs en faveur du bien commun.'
				)
			),
			'pricing' => array(
				'free' => 'Gratuit',
				'fees-seo' => 'En Option Frais de fonctionnement de €1400 HT par ans'
			)
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