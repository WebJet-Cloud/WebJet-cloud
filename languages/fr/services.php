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
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'La présentation sur la cybersécurité met en lumière l\'importance critique de la protection des systèmes informatiques et des données contre les menaces en ligne. Elle aborde les principaux risques tels que les attaques de phishing, les logiciels malveillants et les violations de données. Les mesures de sécurité clés sont présentées, notamment l\'utilisation de mots de passe robustes, la sensibilisation à la sécurité, la gestion des correctifs et l\'utilisation de solutions de sécurité avancées. En mettant l\'accent sur la prévention, la détection et la réponse aux incidents, la présentation souligne l\'impératif de la cybersécurité pour les individus, les entreprises et les organisations.'
			),
			'excel' => array(
				'title' => 'Les différents méthodes',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode',
						'2' => 'Description',
						'3' => 'Avantage',
						'4' => 'Limitation'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Pare-feu',
								'2' => 'Un pare-feu est un système de sécurité réseau qui contrôle et filtre le trafic entrant et sortant.',
								'3' => 'Bloque les connexions non autorisées. Protège contre les attaques par déni de service (DDoS).',
								'4' => 'Peut être contourné par des attaques de type "par-dessus" (overpassing). Nécessite une configuration et une maintenance régulières.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Antivirus',
								'2' => 'Les logiciels antivirus détectent, bloquent et suppriment les logiciels malveillants tels que les virus, les vers et les chevaux de Troie.',
								'3' => 'Identifie et élimine les menaces connues. Protège contre les fichiers infectés.',
								'4' => 'Peut avoir des taux de détection moins élevés pour les nouvelles menaces. Peut causer des ralentissements du système lors de l\'analyse en temps réel.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Authentification à deux facteurs (2FA)',
								'2' => 'L\'authentification à deux facteurs exige une deuxième forme de vérification, en plus du mot de passe, telle qu\'un code envoyé par SMS ou une application d\'authentification.',
								'3' => 'Renforce la sécurité des comptes en ligne. Protège contre les attaques de phishing.',
								'4' => 'Peut nécessiter un effort supplémentaire de la part des utilisateurs. Peut y avoir des problèmes de compatibilité avec certains systèmes.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Cryptage des données',
								'2' => 'Le cryptage des données convertit les informations en un format illisible, à moins d\'avoir une clé de décryptage.',
								'3' => 'Protège les données sensibles en cas de vol ou d\'accès non autorisé. Conforme aux réglementations en matière de protection des données.',
								'4' => 'Peut entraîner une légère augmentation de la latence lors de l\'accès aux données cryptées. La perte de la clé de décryptage peut entraîner une perte permanente des données.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Formation à la sensibilisation à la sécurité',
								'2' => 'La formation à la sensibilisation à la sécurité vise à éduquer les utilisateurs sur les meilleures pratiques en matière de cybersécurité, telles que l\'identification des e-mails de phishing et la gestion des mots de passe.',
								'3' => 'Réduit les risques d\'erreurs humaines. Améliore la posture globale de sécurité de l\'organisation.',
								'4' => 'Nécessite des mises à jour régulières pour suivre les nouvelles menaces. Peut y avoir une résistance initiale au changement de comportement des utilisateurs.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Gestion des correctifs',
								'2' => 'La gestion des correctifs consiste à appliquer régulièrement les mises à jour de sécurité et les correctifs logiciels pour combler les vulnérabilités connues.',
								'3' => 'Réduit les risques d\'exploitation des failles de sécurité connues. Protège contre les attaques basées sur des vulnérabilités logicielles connues.',
								'4' => 'Nécessite une maintenance régulière pour appliquer les correctifs. Les correctifs peuvent entraîner des incompatibilités logicielles.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Surveillance du réseau',
								'2' => 'La surveillance du réseau consiste à analyser en temps réel le trafic réseau afin de détecter les activités suspectes ou malveillantes.',
								'3' => 'Identifie les comportements anormaux ou les attaques en cours. Permet une réponse rapide aux incidents de sécurité.',
								'4' => 'Peut générer un grand volume de données à analyser. Nécessite des ressources de surveillance dédiées.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Protection contre les logiciels malveillants',
								'2' => 'Les solutions de protection contre les logiciels malveillants utilisent des techniques telles que l\'analyse comportementale et la détection des signatures pour identifier et bloquer les logiciels malveillants.',
								'3' => 'Protège contre les virus, les vers, les chevaux de Troie et autres malwares. Peut fournir une défense en temps réel contre les nouvelles menaces.',
								'4' => 'Peut entraîner des faux positifs ou des faux négatifs. Nécessite des mises à jour régulières des définitions de logiciels malveillants.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Sécurité des e-mails',
								'2' => 'Les solutions de sécurité des e-mails utilisent des filtres et des analyses pour bloquer les e-mails de phishing, les attaques de hameçonnage et les fichiers malveillants attachés.',
								'3' => 'Protège contre les attaques basées sur les e-mails. Réduit les risques de compromission des comptes via des liens ou des pièces jointes malveillants.',
								'4' => 'Peut entraîner des faux positifs, bloquant parfois des e-mails légitimes. Les techniques d\'ingénierie sociale sophistiquées peuvent contourner les filtres.'
							)
						),
						'10' => array(
							'tr' => array(
								'1' => 'Gestion des accès',
								'2' => 'La gestion des accès vise à contrôler et à limiter les droits d\'accès aux systèmes et aux données, en accordant uniquement les autorisations nécessaires à chaque utilisateur.',
								'3' => 'Réduit les risques d\'accès non autorisés aux données sensibles. - Permet une traçabilité des actions des utilisateurs.',
								'4' => 'Nécessite une gestion rigoureuse des droits d\'accès pour éviter les erreurs de configuration. - Les attaques par usurpation d\'identité peuvent contourner les contrôles d\'accès.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En tant qu\'autodidacte en cybersécurité, vous avez pris l\'initiative d\'apprendre et de développer vos connaissances dans ce domaine critique. Vous avez exploré divers sujets tels que les principes de base de la sécurité informatique, les vulnérabilités courantes, les types d\'attaques, les techniques de détection et de prévention, ainsi que les bonnes pratiques de sécurité. Vous avez utilisé des ressources en ligne, des cours, des tutoriels et peut-être même des certifications pour acquérir des compétences pratiques en matière de gestion des mots de passe, de protection des réseaux, de sécurisation des systèmes d\'exploitation et de sensibilisation à la sécurité. En tant qu\'autodidacte, vous avez démontré une grande motivation, une curiosité intellectuelle et une capacité à apprendre de manière autonome dans le domaine complexe de la cybersécurité.'
			)
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
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'La présentation sur le marketing met en évidence l\'importance de comprendre les besoins des consommateurs, d\'identifier les segments de marché pertinents et de développer des stratégies ciblées. Elle souligne également l\'impact des nouvelles technologies sur le marketing, en mettant l\'accent sur les médias sociaux, la personnalisation et l\'expérience client. Enfin, elle met en avant l\'importance de la mesure et de l\'analyse des données pour évaluer l\'efficacité des campagnes marketing et ajuster les stratégies en conséquence.'
			),
			'excel' => array(
				'title' => 'Les différents méthodes',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Marketing traditionnel',
								'2' => 'Utilisation de canaux de communication traditionnels tels que la publicité à la télévision, à la radio, dans les journaux, les magazines, les affiches, etc. pour atteindre le public cible.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Marketing digital',
								'2' => 'Utilisation des canaux en ligne tels que les sites web, les médias sociaux, le marketing par e-mail, le référencement, la publicité en ligne, etc. pour promouvoir des produits ou services et atteindre une audience plus large.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Marketing de contenu',
								'2' => 'Création et diffusion de contenu pertinent et de qualité, tels que des articles de blog, des vidéos, des infographies, des livres blancs, etc. pour attirer et engager un public cible, renforcer la crédibilité de la marque et générer des leads qualifiés.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Marketing des médias sociaux',
								'2' => 'Utilisation des plateformes de médias sociaux telles que Facebook, Twitter, Instagram, LinkedIn, etc. pour interagir avec le public cible, promouvoir la marque, partager du contenu et générer de l\'engagement.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Marketing d\'influence',
								'2' => 'Collaboration avec des influenceurs ou des personnalités connues pour promouvoir des produits ou services auprès de leur audience et bénéficier de leur crédibilité et de leur pouvoir de persuasion.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Marketing par e-mail',
								'2' => 'Utilisation de campagnes d\'e-mails ciblées et personnalisées pour communiquer avec les clients potentiels et existants, leur fournir des informations pertinentes, des offres spéciales et les inciter à agir.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Marketing viral',
								'2' => 'Création de contenu attrayant et partageable qui se propage rapidement sur Internet grâce aux partages des utilisateurs, permettant ainsi une exposition massive de la marque ou du produit sans investissement publicitaire important.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Marketing expérientiel',
								'2' => 'Création d\'expériences uniques et mémorables pour les clients, en utilisant des événements, des démonstrations de produits, des échantillons gratuits, etc. pour susciter leur engagement émotionnel et favoriser la fidélisation.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En tant qu\'autodidacte en marketing, vous avez pris l\'initiative d\'apprendre et de développer vos connaissances dans ce domaine essentiel. Vous avez probablement étudié divers sujets tels que les bases du marketing, la psychologie du consommateur, les stratégies de segmentation de marché, le marketing numérique, le marketing de contenu, le marketing des médias sociaux, le marketing par e-mail, le référencement, etc. Vous avez également acquis une compréhension des outils et des plateformes utilisés dans le marketing moderne. Grâce à votre volonté d\'apprendre et à votre recherche autonome, vous avez développé des compétences précieuses pour promouvoir efficacement des produits ou services, atteindre un public cible et créer des campagnes marketing impactantes.'
			)
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
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'La présentation sur le webmaster met en lumière le rôle essentiel de ce professionnel dans la création, la gestion et la maintenance de sites web. Le webmaster est responsable de la conception du site, de son architecture, de son design et de son fonctionnement global. Il s\'occupe également de l\'intégration des contenus et des fonctionnalités, en veillant à ce que le site soit convivial et réactif.<br /><br />Le webmaster gère les aspects techniques du site, tels que l\'hébergement, la sécurité, la mise à jour des logiciels et la résolution des problèmes techniques. Il surveille également les performances du site, en analysant les statistiques et en réalisant des ajustements pour améliorer l\'expérience utilisateur et le référencement.<br /><br />En outre, le webmaster joue un rôle clé dans la gestion du contenu. Il crée, modifie et organise les pages, les articles, les images et les vidéos, en veillant à ce qu\'ils soient pertinents, bien présentés et conformes aux normes du web. Il peut également être responsable de l\'optimisation du contenu pour le référencement afin d\'améliorer la visibilité du site dans les moteurs de recherche.<br /><br />Le webmaster travaille en étroite collaboration avec les équipes de développement, de design et de marketing pour s\'assurer que le site web répond aux objectifs et aux besoins de l\'entreprise ou de l\'organisation. Sa polyvalence et sa connaissance des différentes technologies web lui permettent de coordonner efficacement ces efforts et d\'assurer le bon fonctionnement du site.<br /><br />En résumé, le webmaster est un professionnel clé dans la création et la gestion de sites web. Il allie compétences techniques et connaissances en marketing pour garantir un site performant, attractif et conforme aux attentes des utilisateurs et des entreprises.'
			),
			'excel' => array(
				'title' => 'Les différents méthodes',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Conception de sites web',
								'2' => 'Le webmaster est responsable de la conception et de l\'architecture des sites web. Il crée une structure logique pour le site et s\'assure que les pages sont bien organisées et faciles à naviguer.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Design et intégration',
								'2' => 'Le webmaster s\'occupe de la conception visuelle du site, en créant des maquettes graphiques et en les intégrant au code HTML/CSS. Il s\'assure que le design est attrayant, convivial et conforme aux normes du web.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Gestion du contenu',
								'2' => 'Le webmaster est chargé de la création, de la modification et de l\'organisation du contenu du site. Il ajoute des articles, des images, des vidéos, et veille à ce que le contenu soit pertinent, bien présenté et optimisé pour le référencement.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Maintenance technique',
								'2' => 'Le webmaster gère les aspects techniques du site, tels que l\'hébergement, la sécurité, les mises à jour des logiciels et la résolution des problèmes techniques. Il s\'assure que le site fonctionne correctement et effectue des sauvegardes régulières.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Optimisation du référencement',
								'2' => 'Le webmaster utilise des techniques d\'optimisation pour améliorer la visibilité du site dans les moteurs de recherche. Il effectue des recherches de mots-clés, optimise les balises HTML, améliore la structure du site et travaille sur l\'optimisation de la vitesse de chargement.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Analyse des performances',
								'2' => 'Le webmaster utilise des outils d\'analyse pour surveiller les performances du site, tels que le nombre de visiteurs, les taux de conversion et les temps de chargement des pages. Il analyse ces données et effectue des ajustements pour améliorer l\'expérience utilisateur et les résultats du site.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Coordination avec les équipes',
								'2' => 'Le webmaster travaille en étroite collaboration avec les équipes de développement, de design et de marketing pour s\'assurer que le site web répond aux objectifs et aux besoins de l\'entreprise. Il coordonne les efforts de ces équipes et communique efficacement avec elles.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'Être autodidacte dans le domaine du webmaster implique d\'apprendre par soi-même les compétences nécessaires pour créer, gérer et maintenir des sites web. Cela peut se faire en suivant des tutoriels en ligne, en lisant des ressources spécialisées et en pratiquant activement. En tant qu\'autodidacte, il est important de maîtriser les langages de programmation tels que HTML, CSS et JavaScript, ainsi que les concepts de conception web et d\'optimisation du référencement. Il est également crucial de se familiariser avec les CMS populaires tels que WordPress et de comprendre les bases de l\'hébergement web, de la sécurité et de l\'analyse des performances. L\'autodidacte doit être motivé, persévérant et curieux, en cherchant constamment à se tenir au courant des dernières tendances et techniques du webmaster.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Webmestre',
					'h1' => 'Site vitrine',
					'text' => ''
				),
				'2' => array(
					'h5' => 'Webmestre',
					'h1' => 'Blog',
					'text' => ''
				),
				'3' => array(
					'h5' => 'Webmestre',
					'h1' => 'E-Commerce',
					'text' => ''
				),
				'4' => array(
					'h5' => 'Webmestre',
					'h1' => 'LMS',
					'text' => ''
				),
				'5' => array(
					'h5' => 'Webmestre',
					'h1' => 'Freelancer',
					'text' => ''
				),
				'6' => array(
					'h5' => 'Webmestre',
					'h1' => 'Réservation',
					'text' => ''
				),
				'7' => array(
					'h5' => 'Webmestre',
					'h1' => 'Réseaux Sociaux',
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
		'title' => 'Prestation de Services en développeur',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/developper',
			'fr' => 'services/developpeur'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'Le développeur est un professionnel qui crée des logiciels, des applications et des sites web en utilisant des langages de programmation et des outils informatiques. Il est responsable de la conception, du développement, de la mise en œuvre et de la maintenance de ces systèmes informatiques. Le développeur possède des compétences techniques solides et une connaissance approfondie des langages de programmation tels que Java, Python, C++ ou JavaScript. Il travaille souvent en équipe, collabore avec des concepteurs et des spécialistes en informatique, et s\'adapte aux évolutions technologiques pour fournir des solutions innovantes et efficaces. Le développeur doit également avoir de bonnes compétences en résolution de problèmes et être capable de s\'adapter rapidement à de nouvelles technologies et exigences.'
			),
			'excel' => array(
				'title' => 'Les différents méthodes',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'agile',
								'2' => 'Approche de développement logiciel itérative et collaborative, favorisant la flexibilité, l\'adaptabilité aux changements et la livraison régulière de fonctionnalités.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'en cascade',
								'2' => 'Approche séquentielle et linéaire où chaque phase du développement est réalisée successivement, avec une planification détaillée dès le début du projet.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'RAD (Rapid Application Development)',
								'2' => 'Méthode de développement rapide d\'applications, basée sur des cycles courts et intensifs de développement, impliquant une interaction étroite avec les utilisateurs finaux.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'TDD (Test-Driven Development)',
								'2' => 'Approche centrée sur les tests, où les développeurs écrivent d\'abord les tests automatisés, puis le code pour satisfaire ces tests.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'BDD (Behavior-Driven Development)',
								'2' => 'Approche de développement axée sur le comportement, mettant l\'accent sur la collaboration entre les parties prenantes et l\'expression des exigences en termes de comportement attendu.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'DevOps',
								'2' => 'Intégration continue du développement logiciel et des opérations, visant à améliorer la collaboration, l\'efficacité et la qualité des produits logiciels.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Lean',
								'2' => 'Approche de développement axée sur l\'élimination des gaspillages et la maximisation de la valeur pour le client, en favorisant une gestion efficace des ressources.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'SCRUM',
								'2' => 'Cadre de travail agile qui structure le développement en itérations appelées "sprints", avec des réunions régulières pour la planification, la révision et la rétrospective.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En tant qu\'autodidacte, j\'apprend par moi même les compétences nécessaires pour concevoir, développer et maintenir des logiciels. j\'utilise une variété de ressources en ligne, telles que des tutoriels, des cours en ligne, des livres et des forums de programmation, pour acquérir des connaissances et des compétences en programmation. Je développe ma capacité à résoudre des problèmes et à trouver des solutions, en expérimentant et en pratiquant régulièrement. Je peut également participer à des projets personnels ou collaboratifs pour développer son expérience pratique. Et motivé, discipliné et persévérant.'
			)
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