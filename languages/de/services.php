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
		'title' => 'Dienstleistungen - Internet-Sicherheit',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/cybersecurity',
			'de' => 'dienstleistungen/internet-sicherheit'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Die Präsentation zur Cybersicherheit unterstreicht die entscheidende Bedeutung des Schutzes von Computersystemen und Daten vor Online-Bedrohungen. Es befasst sich mit wichtigen Risiken wie Phishing-Angriffen, Malware und Datenschutzverletzungen. Es werden wichtige Sicherheitsmaßnahmen vorgestellt, darunter die Verwendung sicherer Passwörter, Sicherheitsbewusstsein, Patch-Management und der Einsatz fortschrittlicher Sicherheitslösungen. Mit einem Schwerpunkt auf der Prävention, Erkennung und Reaktion von Vorfällen unterstreicht die Präsentation die Notwendigkeit der Cybersicherheit für Einzelpersonen, Unternehmen und Organisationen.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
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
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidakt im Bereich Cybersicherheit haben Sie die Initiative ergriffen, Ihr Wissen in diesem wichtigen Bereich zu erlernen und weiterzuentwickeln. Sie haben sich mit verschiedenen Themen wie den Grundlagen der Computersicherheit, häufigen Schwachstellen, Angriffsarten, Erkennungs- und Präventionstechniken sowie bewährten Sicherheitspraktiken befasst. Sie haben Online-Ressourcen, Kurse, Tutorials und vielleicht sogar Zertifizierungen genutzt, um praktische Fähigkeiten im Umgang mit Passwörtern, dem Schutz von Netzwerken, der Sicherung von Betriebssystemen und der Sensibilisierung für Sicherheit zu erlernen. Als Autodidakt haben Sie große Motivation, intellektuelle Neugier und die Fähigkeit zum selbstständigen Lernen im komplexen Bereich der Cybersicherheit bewiesen.'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'marketing' => array(
		'title' => 'Dienstleistungen - marketing',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/marketing',
			'de' => 'dienstleistungen/marketing'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Der Marketingvortrag unterstreicht, wie wichtig es ist, die Bedürfnisse der Verbraucher zu verstehen, relevante Marktsegmente zu identifizieren und zielgerichtete Strategien zu entwickeln. Sie hebt außerdem die Auswirkungen neuer Technologien auf das Marketing hervor, wobei der Schwerpunkt auf sozialen Medien, Personalisierung und Kundenerlebnis liegt. Abschließend wird hervorgehoben, wie wichtig es ist, Daten zu messen und zu analysieren, um die Wirksamkeit von Marketingkampagnen zu bewerten und Strategien entsprechend anzupassen.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
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
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidakt im Marketing haben Sie die Initiative ergriffen, Ihr Wissen in diesem wichtigen Bereich zu erlernen und weiterzuentwickeln. Sie haben wahrscheinlich verschiedene Themen wie Marketinggrundlagen, Verbraucherpsychologie, Marktsegmentierungsstrategien, digitales Marketing, Content-Marketing, Social-Media-Marketing, E-Mail-Marketing, SEO usw. studiert Darüber hinaus haben Sie ein Verständnis für die Tools und Plattformen des modernen Marketings gewonnen. Durch Ihre Lernbereitschaft und unabhängige Recherche haben Sie wertvolle Fähigkeiten entwickelt, um Produkte oder Dienstleistungen effektiv zu bewerben, eine Zielgruppe zu erreichen und wirkungsvolle Marketingkampagnen zu erstellen.'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'webmaster' => array(
		'title' => 'Dienstleistungen - webmaster',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/webmaster',
			'de' => 'dienstleistungen/webmaster'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Die Präsentation über den Webmaster unterstreicht die wesentliche Rolle dieses Fachmanns bei der Erstellung, Verwaltung und Pflege von Websites.“ Der Webmaster ist für die Konzeption der Website, ihre Architektur, ihr Design und ihre Gesamtfunktion verantwortlich. Er kümmert sich auch um die Integration von Inhalten und Funktionalitäten und stellt sicher, dass die Website benutzerfreundlich und reaktionsfähig ist.<br /><br />Der Webmaster verwaltet die technischen Aspekte der Website, wie Hosting, Sicherheit und Aktualisierung der Software und die Lösung technischer Probleme. Außerdem überwacht es die Leistung der Website, analysiert Statistiken und nimmt Anpassungen vor, um die Benutzererfahrung und SEO zu verbessern.<br /><br />Darüber hinaus spielt der Webmaster eine Schlüsselrolle bei der Inhaltsverwaltung. Er erstellt, bearbeitet und organisiert Seiten, Beiträge, Bilder und Videos und stellt sicher, dass sie relevant und gut präsentiert sind und den Webstandards entsprechen. Möglicherweise ist er auch für die Optimierung von Inhalten für SEO verantwortlich, um die Sichtbarkeit der Website in Suchmaschinen zu verbessern.<br /><br />Der Webmaster arbeitet eng mit den Entwicklungsteams, dem Design und dem Marketing zusammen, um sicherzustellen, dass die Website den Zielen entspricht und Bedürfnisse des Unternehmens oder der Organisation. Seine Vielseitigkeit und sein Wissen über verschiedene Webtechnologien ermöglichen es ihm, diese Bemühungen effektiv zu koordinieren und das ordnungsgemäße Funktionieren der Website sicherzustellen.<br /><br />Zusammenfassend ist der Webmaster ein wichtiger Fachmann bei der Erstellung und Verwaltung von Websites. „Es vereint technische Kompetenz und Marketingwissen, um eine leistungsstarke und attraktive Website zu gewährleisten, die den Erwartungen von Nutzern und Unternehmen entspricht.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Methode',
						'2' => 'Beschreibung'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Website-Design',
								'2' => 'Der Webmaster ist für das Design und die Architektur von Websites verantwortlich. Es schafft eine logische Struktur für die Website und stellt sicher, dass die Seiten gut organisiert und einfach zu navigieren sind.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Design und Integration',
								'2' => 'Der Webmaster kümmert sich um die visuelle Gestaltung der Seite, erstellt grafische Modelle und integriert diese in den HTML/CSS-Code. Er sorgt dafür, dass das Design ansprechend und benutzerfreundlich ist und den Webstandards entspricht.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Inhaltsverwaltung',
								'2' => 'Der Webmaster ist für die Erstellung, Änderung und Organisation des Inhalts der Website verantwortlich. Er fügt Artikel, Bilder und Videos hinzu und sorgt dafür, dass der Inhalt relevant, gut präsentiert und für SEO optimiert ist.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Technische Wartung',
								'2' => 'Der Webmaster verwaltet die technischen Aspekte der Website, wie Hosting, Sicherheit, Software-Updates und die Lösung technischer Probleme. Er stellt sicher, dass die Website ordnungsgemäß funktioniert, und führt regelmäßige Backups durch.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'SEO-Optimierung',
								'2' => 'Der Webmaster nutzt Optimierungstechniken, um die Sichtbarkeit der Website in Suchmaschinen zu verbessern. Es führt Keyword-Recherchen durch, optimiert HTML-Tags, verbessert die Site-Struktur und arbeitet an der Optimierung der Ladegeschwindigkeit.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Leistungsanalyse',
								'2' => 'Der Webmaster verwendet Analysetools, um die Leistung der Website zu überwachen, wie z. B. Anzahl der Besucher, Konversionsraten und Seitenladezeiten. Es analysiert diese Daten und nimmt Anpassungen vor, um die Benutzererfahrung und die Website-Ergebnisse zu verbessern.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Koordination mit Teams',
								'2' => 'Der Webmaster arbeitet eng mit den Entwicklungs-, Design- und Marketingteams zusammen, um sicherzustellen, dass die Website den Zielen und Anforderungen des Unternehmens entspricht. Er koordiniert die Bemühungen dieser Teams und kommuniziert effektiv mit ihnen.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidakt im Bereich Webmastering erlernen Sie selbstständig die erforderlichen Fähigkeiten zum Erstellen, Verwalten und Pflegen von Websites. Dies kann durch das Befolgen von Online-Tutorials, das Lesen spezieller Ressourcen und aktives Üben erreicht werden. Als Autodidakt ist es wichtig, Programmiersprachen wie HTML, CSS und JavaScript sowie Webdesign und SEO-Konzepte zu beherrschen. Es ist außerdem wichtig, mit gängigen CMS wie WordPress vertraut zu sein und die Grundlagen von Webhosting, Sicherheit und Leistungsanalyse zu verstehen. Der Autodidakt muss motiviert, ausdauernd und neugierig sein und ständig versuchen, über die neuesten Trends und Webmaster-Techniken auf dem Laufenden zu bleiben.'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'developper' => array(
		'title' => 'Dienstleistungen - Entwickler',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/developper',
			'de' => 'dienstleistungen/entwickler'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Der Entwickler ist ein Fachmann, der mithilfe von Programmiersprachen und Computertools Software, Anwendungen und Websites erstellt. Er ist für den Entwurf, die Entwicklung, die Implementierung und die Wartung dieser Computersysteme verantwortlich. Der Entwickler verfügt über ausgeprägte technische Fähigkeiten und fundierte Kenntnisse in Programmiersprachen wie Java, Python, C++ oder JavaScript. Er arbeitet häufig im Team, arbeitet mit Designern und IT-Spezialisten zusammen und passt sich den technologischen Entwicklungen an, um innovative und effektive Lösungen bereitzustellen. Der Entwickler sollte außerdem über gute Fähigkeiten zur Problemlösung verfügen und sich schnell auf neue Technologien und Anforderungen einstellen können.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Methode',
						'2' => 'Beschreibung'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'agil',
								'2' => 'Iterativer und kollaborativer Softwareentwicklungsansatz, der Flexibilität, Anpassungsfähigkeit an Änderungen und regelmäßige Bereitstellung von Funktionen fördert.'
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
								'2' => 'Schnelle Anwendungsentwicklungsmethode, basierend auf kurzen und intensiven Entwicklungszyklen, die eine enge Interaktion mit Endbenutzern erfordert.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'TDD (Testgetriebene Entwicklung)',
								'2' => 'Testzentrierter Ansatz, bei dem Entwickler zuerst automatisierte Tests schreiben und dann Code schreiben, um diese Tests zu erfüllen.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'BDD (Behavior-Driven Development)',
								'2' => 'Verhaltensgesteuerter Entwicklungsansatz, der die Zusammenarbeit zwischen den Beteiligten betont und Anforderungen in Form von erwartetem Verhalten ausdrückt.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'DevOps',
								'2' => 'Kontinuierliche Integration von Softwareentwicklung und -betrieb mit dem Ziel, die Zusammenarbeit, Effizienz und Qualität von Softwareprodukten zu verbessern.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Lean',
								'2' => 'Entwicklungsansatz konzentriert sich auf die Vermeidung von Verschwendung und die Maximierung des Werts für den Kunden durch die Förderung eines effizienten Ressourcenmanagements.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'SCRUM',
								'2' => 'Agiles Framework, das die Entwicklung in Iterationen namens „Sprints“ strukturiert, mit regelmäßigen Meetings zur Planung, Überprüfung und Retrospektive.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidakt lerne ich selbst die notwendigen Fähigkeiten, um Software zu entwerfen, zu entwickeln und zu warten. Ich nutze eine Vielzahl von Online-Ressourcen wie Tutorials, Online-Kurse, Bücher und Programmierforen, um Programmierkenntnisse und -fähigkeiten zu erlernen. Durch regelmäßiges Experimentieren und Üben entwickle ich meine Fähigkeit, Probleme zu lösen und Lösungen zu finden. Ich kann auch an persönlichen oder gemeinschaftlichen Projekten teilnehmen, um praktische Erfahrungen zu sammeln. Und motiviert, diszipliniert und ausdauernd.'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'seo' => array(
		'title' => 'Dienstleistungen - natürliche Referenz',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/seo',
			'de' => 'dienstleistungen/naturliche-referenz'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Sie gibt einen Überblick über die Funktionsweise von Suchmaschinen, die Techniken der Suchmaschinenoptimierung (SEO) und die wichtigsten Faktoren, die das Ranking von Websites beeinflussen, und betont die Bedeutung der Suche nach relevanten Schlüsselwörtern, der Optimierung des Inhalts, der Struktur der Website, hochwertiger eingehender Links und der Benutzererfahrung. Außerdem wird der Einfluss der natürlichen Suchmaschinenoptimierung auf die Generierung von organischem Traffic, die Steigerung der Konversionsrate und den Aufbau einer starken und dauerhaften Online-Präsenz hervorgehoben.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Methode',
						'2' => 'Beschreibung',
						'3' => 'Vorteil'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Stichwortsuche',
								'2' => 'Identifizierung relevanter und beliebter Schlüsselwörter im Zusammenhang mit der Aktivität, um sie in den Inhalt zu integrieren.',
								'3' => 'Verbesserte Sichtbarkeit in den Suchergebnissen.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Inhaltsoptimierung',
								'2' => 'Qualität, originelle und optimierte Inhalte durch natürliche Integration von Schlüsselwörtern schreiben.',
								'3' => 'Verbesserte Suchmaschinen-Rankings.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Site-Struktur',
								'2' => 'Einrichtung einer klaren und logischen Site-Struktur mit benutzerfreundlichen URLs und Meta-Tags.',
								'3' => 'Verbesserte Site-Indizierung und Navigation.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Qualität eingehender Links',
								'2' => 'Links von seriösen und relevanten Websites erhalten, um die Glaubwürdigkeit der Website zu erhöhen.',
								'3' => 'Erhöhte Site-Autorität und Sichtbarkeit.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Benutzererfahrung',
								'2' => 'Verbesserte Benutzerfreundlichkeit der Website, Ladegeschwindigkeit, intuitive Navigation und Design.',
								'3' => 'Reduzierte Absprungrate und verbesserte Bindung.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Mobile Optimierung',
								'2' => 'Anpassung der Seite für ein optimales Erlebnis auf mobilen Geräten.',
								'3' => 'Verbesserte Sichtbarkeit auf Mobilgeräten.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Ansprechender Inhalt',
								'2' => 'Ansprechende Inhalte (Blogbeiträge, Videos, Infografiken) erstellen, um das Engagement der Benutzer zu fördern.',
								'3' => 'Verstärkte Interaktion und Teilen in sozialen Netzwerken.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Strukturiertes Markup',
								'2' => 'Verwendung von strukturiertem Markup (schema.org), um Suchmaschinen das Verständnis von Inhalten zu erleichtern.',
								'3' => 'Rich Snippets und Sichtbarkeit verbessert.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Bildoptimierung',
								'2' => 'Bilder mithilfe von Alt-Tags optimieren, komprimieren und bei Bedarf in der Größe ändern.',
								'3' => 'Verbesserte Ladezeit und Zugänglichkeit.'
							)
						),
						'10' => array(
							'tr' => array(
								'1' => 'Tracking und Analyse',
								'2' => 'Verwendung von Analysetools (Google Analytics, Search Console) zur Überwachung der Leistung und Anpassung der Strategie.',
								'3' => 'Die Wirksamkeit von Maßnahmen messen und datengesteuerte Entscheidungen treffen.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidakt im Bereich Suchmaschinenoptimierung habe ich mir die Grundlagen der Suchmaschinenoptimierung angeeignet, darunter die Recherche von Schlüsselwörtern, die Optimierung von Inhalten, die Struktur der Website, den Linkaufbau und die Leistungsanalyse. Ich bin in der Lage, effektive SEO-Techniken einzusetzen, um die Online-Sichtbarkeit zu verbessern, organischen Traffic zu generieren und das Ranking von Websites in Suchmaschinen zu erhöhen. Mein Werdegang als Autodidakt zeigt Ihre Leidenschaft für die Suchmaschinenoptimierung und meine Fähigkeit, selbstständig zu lernen, um ein kompetenter Fachmann in diesem Bereich zu werden.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Natürliche Referenz',
					'h1' => 'Suchmaschine',
					'text' => 'Natürliche Referenzierung (SEO) in Suchmaschinen ist eine Reihe von Techniken, die darauf abzielen, die Sichtbarkeit und Positionierung einer Website in organischen Suchergebnissen zu verbessern. Durch die Betreuung zukünftiger Kunden kann SEO eine entscheidende Rolle dabei spielen, die Online-Sichtbarkeit ihres Unternehmens zu erhöhen, qualifizierten Traffic zu generieren und die Markenbekanntheit zu steigern.<br /><br />Durch Methoden wie die Recherche relevanter Schlüsselwörter, die Optimierung von Inhalten, die Verbesserung der Website-Struktur, Durch den Aufbau hochwertiger Links, die Optimierung von Meta-Tags und der Mobilfreundlichkeit zielt SEO darauf ab, eine Website für Suchmaschinen attraktiver zu machen. Dadurch gewinnt die Website an Sichtbarkeit bei Benutzern, die Suchanfragen im Zusammenhang mit dem Unternehmen des Kunden durchführen.<br /><br />Zu den Vorteilen von SEO gehören erhöhter organischer Traffic, die Möglichkeit, sich als Autorität auf diesem Gebiet zu positionieren, bessere Benutzererfahrung, größere Glaubwürdigkeit und langfristige Kapitalrendite. „Durch die Bereitstellung eines strategischen Ansatzes und die effektive Umsetzung von SEO können zukünftige Kunden von einer stärkeren Online-Präsenz, größerer Wettbewerbspräsenz und nachhaltigem Geschäftswachstum profitieren.'
				),
				'2' => array(
					'h5' => 'Natürliche Referenz',
					'h1' => 'Community Manager',
					'text' => 'Suchmaschinenoptimierung spielt eine wichtige Rolle in der Arbeit eines Community-Managers, indem sie zukünftigen Kunden dabei hilft, ihre Online-Präsenz organisch auszubauen. Als Community-Manager kann SEO zur Optimierung von auf sozialen Plattformen veröffentlichten Inhalten wie Blogs, Videos und Social-Media-Beiträgen eingesetzt werden, um deren Sichtbarkeit in Suchergebnissen zu verbessern. br /><br />Der Community-Manager kann nach relevanten Schlüsselwörtern suchen einen Bezug zur Branche oder Marke des Kunden herstellen und diese Schlüsselwörter dann auf natürliche Weise in die von ihm veröffentlichten Inhalte integrieren. Durch den Einsatz von Inhaltsoptimierungstechniken, geeigneten Tags und gut geschriebenen Beschreibungen kann der Community-Manager die Sichtbarkeit von Inhalten in Suchmaschinen erhöhen.<br /><br />Durch die Verbesserung der natürlichen Referenzierung geteilter Inhalte trägt der Community-Manager zur Generierung organischer Inhalte bei Traffic auf den sozialen Plattformen des Kunden steigern, das Nutzerengagement steigern und die Online-Präsenz der Marke stärken. SEO trägt auch dazu bei, einen soliden digitalen Fußabdruck für die Marke zu schaffen, ihre Online-Reputation zu verbessern und ein qualifiziertes Publikum anzulocken.<br /><br />Durch die Kombination von Community-Management-Fähigkeiten mit einer verständnisvollen natürlichen Referenzierung kann der Community-Manager künftigen Kunden ein effektives Angebot bieten Content-Strategie und erhöhte Sichtbarkeit in Suchmaschinen, was das Wachstum ihrer Online-Community und das Erreichen ihrer Geschäftsziele fördert.'
				),
				'3' => array(
					'h5' => 'Natürliche Referenz',
					'h1' => 'Lokales Unternehmen',
					'text' => 'SEO spielt eine entscheidende Rolle für lokale Unternehmen, indem es zukünftigen Kunden hilft, ihre lokale Online-Sichtbarkeit zu erhöhen. Durch den Einsatz spezifischer Techniken kann SEO dazu beitragen, dass lokale Unternehmen in Suchergebnissen angezeigt werden, die für ihren geografischen Standort relevant sind.<br /><br />Für lokale Unternehmen umfasst SEO die Optimierung für beispielsweise Google My Business-Einträge, lokale Verzeichniseinträge, Kundenrezensionen usw. standortbasierte Schlüsselwörter und Standort-Tags. Durch die strategische Integration dieser Elemente können zukünftige Kunden eine bessere Sichtbarkeit erlangen, wenn ein Benutzer Suchanfragen mit Bezug zu ihrem Standort durchführt.<br /><br />Durch die Verbesserung der SEO eines lokalen Unternehmens ist es möglich, den gezielten organischen Traffic zu erhöhen und qualifizierte Kunden anzuziehen Kunden vor Ort, verbessern die Sichtbarkeit im Wettbewerb und stärken die Markenbekanntheit in der lokalen Gemeinschaft. Es kann auch dazu beitragen, Online- oder Offline-Konvertierungen voranzutreiben, positive Kundenbewertungen zu fördern und einen guten Ruf in der Region aufzubauen.<br /><br />Durch die Bereitstellung von SEO-Strategien, die auf lokale Unternehmen zugeschnitten sind, können zukünftige Kunden von einer soliden Online-Präsenz profitieren. mehr qualifizierten Verkehr, bessere Sichtbarkeit in ihrer Region und nachhaltiges Wachstum ihres lokalen Geschäfts.'
				),
				'4' => array(
					'h5' => 'Natürliche Referenz',
					'h1' => 'Gemeinnützige Organisation',
					'text' => 'SEO spielt eine wichtige Rolle für gemeinnützige Organisationen, indem es ihnen hilft, ihre Online-Sichtbarkeit zu erhöhen, ihre Zielgruppe zu erreichen und ihre Initiativen zu fördern. Durch den Einsatz spezifischer Techniken kann SEO dazu beitragen, dass Wohltätigkeitsorganisationen in Suchergebnissen, die für ihre Anliegen und Aktivitäten relevant sind, einen guten Rang einnehmen.<br /><br />Für gemeinnützige Organisationen umfasst SEO die Optimierung von Website-Inhalten, die Recherche von Schlüsselwörtern im Zusammenhang mit ihren Aktionsbereichen, Erstellung hochwertiger Links zu anderen relevanten Websites und Optimierung der Präsenz in sozialen Netzwerken. Durch die Umsetzung dieser Strategien können zukünftige Kunden ihre Online-Sichtbarkeit verbessern, mehr Besucher auf ihre Website locken und ihre Wirkung steigern.<br /><br />Durch die Verbesserung ihrer SEO können gemeinnützige Organisationen von einer Steigerung des qualifizierten organischen Traffics profitieren in der Öffentlichkeit bekannt machen, mehr Unterstützung mobilisieren und Spenden sammeln, um ihre Aktionen zu finanzieren. Natürliche Referenzierung trägt auch dazu bei, die Glaubwürdigkeit des Vereins online zu stärken und stärkere Partnerschaften mit anderen Akteuren in der Branche aufzubauen.<br /><br />Durch die Bereitstellung geeigneter natürlicher Referenzierungsstrategien für gemeinnützige Organisationen können zukünftige Kunden von einer größeren Sichtbarkeit ihrer Organisationen profitieren Anliegen, stärkeres Engagement bei ihrer Zielgruppe, effektiveres Fundraising und größerer Einfluss in ihrem Aktionsbereich. Dadurch können sie ihre Wirkung maximieren und ihre Ziele für das Gemeinwohl erreichen.'
				)
			),
			'pricing' => array(
				'free' => 'Kostenlos',
				'fees-seo' => 'Optionale Betriebskosten von 1400 € zzgl. Steuern pro Jahr'
			)
		),
		'sitemap' => array(
			'images' => '',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'consulting' => array(
		'title' => 'Dienstleistungen - Beratung',
		'description' => '',
		'keyword' => '',
		'url' => array(
			'default' => 'services/consulting',
			'de' => 'dienstleistungen/beratung'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Präsentation',
				'description' => '',
				'text' => 'Der Beruf des Beraters spielt eine Schlüsselrolle in der Geschäftswelt, wo Fachleute mit ihrem Fachwissen und ihrer Beratung Unternehmen dabei helfen, Probleme zu lösen, ihre Leistung zu verbessern und ihre Ziele zu erreichen. Berater arbeiten in verschiedenen Bereichen, wie z. B. Strategie, Management, IT und vielen anderen. Der Beruf bietet viele Karriere- und Aufstiegsmöglichkeiten, kann aber auch anspruchsvoll sein, was die Arbeitsbelastung und die Reisetätigkeit betrifft.'
			),
			'excel' => array(
				'title' => 'Die verschiedenen Berufe',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Art des Beraters',
						'2' => 'Fachgebiet',
						'3' => 'Beschreibung'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Strategieberater',
								'2' => 'Unternehmensstrategie',
								'3' => 'Unterstützt Unternehmen bei der Festlegung und Umsetzung von Strategien zur Verbesserung ihrer Wettbewerbsfähigkeit und ihres Wachstums.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Unternehmensberater',
								'2' => 'Verwaltung und Organisation',
								'3' => 'Berät Unternehmen bei der Personalverwaltung, der internen Organisation und der Verbesserung von Prozessen.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'IT-Berater',
								'2' => 'Informationstechnologie',
								'3' => 'Unterstützt Unternehmen bei der Optimierung ihrer IT-Infrastruktur, der Einführung von Informationssystemen und der Entwicklung von Softwarelösungen.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Marketingberater',
								'2' => 'Marketing und Kommunikation',
								'3' => 'Berät Unternehmen hinsichtlich der Marketingstrategie, der Werbung für Produkte und Dienstleistungen und der Kommunikation mit den Kunden.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Finanzberater',
								'2' => 'Finanzen und Buchhaltung',
								'3' => 'Hilft Unternehmen, ihr Finanzmanagement zu optimieren, Investitionen zu analysieren und die Rentabilität zu verbessern.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Meine Ausbildung und mein beruflicher Werdegang',
				'description' => '',
				'text' => 'Als Autodidaktin kann ich Ihnen eine hohe Lern- und Anpassungsfähigkeit demonstrieren, die für eine Tätigkeit als Beraterin unerlässlich ist. Meine verschiedenen Fähigkeiten in den Bereichen Forschung, Problemlösung und Zeitmanagement ermöglichen es mir, mir schnell neues Wissen anzueignen und es in verschiedenen Kontexten anzuwenden. Darüber hinaus helfen mir meine Eigeninitiative und Kreativität dabei, innovative und maßgeschneiderte Lösungen vorzuschlagen, die den spezifischen Bedürfnissen eines jeden Unternehmens gerecht werden. Diese Fähigkeiten, kombiniert mit meiner Berufserfahrung und meinen Fachkenntnissen in einem oder mehreren kompetenten Bereichen.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Berater',
					'h1' => 'In Strategie',
					'text' => 'ich biete meine Dienste zukünftigen Kunden an, indem ich ihnen helfe, ihre Geschäftsziele durch einen strategischen und durchdachten Ansatz zu erreichen. Ich nutze mein Fachwissen, um ihr Wettbewerbsumfeld zu analysieren, Wachstumschancen zu identifizieren, strategische Empfehlungen auszusprechen und effektive Aktionspläne umzusetzen. Mein Ziel ist es, meinen Kunden einen Mehrwert zu bieten, indem ich sie bei der Entscheidungsfindung unterstütze und ihre Gesamtleistung optimiere.'
				),
				'2' => array(
					'h5' => 'Berater',
					'h1' => 'Im Management',
					'text' => 'Meine Aufgabe ist es, zukünftige Kunden bei der Verbesserung ihrer Prozesse, ihrer betrieblichen Effizienz und ihrer Gesamtleistung zu unterstützen. Ich arbeite eng mit den Führungsteams zusammen, um die organisatorischen Herausforderungen zu analysieren, Lücken zu identifizieren und geeignete Lösungen vorzuschlagen. Ich biete strategische Beratung, um die Organisationsstruktur zu optimieren, effektive Managementpraktiken umzusetzen, die Fähigkeiten der Mitarbeiter zu entwickeln und eine positive Unternehmenskultur zu fördern. Mein Ziel ist es, meinen Kunden zu helfen, operative Exzellenz zu erreichen und ihre Geschäftsziele nachhaltig zu verwirklichen.'
				),
				'3' => array(
					'h5' => 'Berater',
					'h1' => 'In Informatik',
					'text' => 'ich biete meine Dienste zukünftigen Kunden an, indem ich sie bei ihren technologischen Anforderungen unterstütze. Meine Expertise besteht darin, ihre bestehenden Systeme zu bewerten, Verbesserungsmöglichkeiten zu identifizieren und IT-Lösungen zu empfehlen, die auf ihre Ziele und Einschränkungen zugeschnitten sind. Ich kann ihnen helfen, ihre Infrastruktur zu optimieren, Cybersicherheitsstrategien zu implementieren, neue Technologien zu integrieren, maßgeschneiderte Anwendungen zu entwickeln und ihre Daten effizient zu verwalten. Mein Ziel ist es, relevante Ratschläge zu erteilen, die digitale Transformation meiner Kunden anzuleiten und den Mehrwert ihrer Technologieinvestitionen zu maximieren.'
				),
				'4' => array(
					'h5' => 'Berater',
					'h1' => 'Im Marketing',
					'text' => 'Ich bin dazu da, zukünftigen Kunden bei der Entwicklung und Optimierung ihrer Marketingstrategie zu helfen. Meine Aufgabe ist es, ihre Marktposition zu analysieren, Wachstumschancen zu identifizieren und wirksame Taktiken zu empfehlen, um ihre Zielgruppe zu erreichen. Ich kann ihnen helfen, ihre Marke zu definieren, integrierte Marketingpläne zu erstellen, Werbekampagnen umzusetzen, ihre Online-Präsenz zu optimieren und die Wirksamkeit ihrer Marketingmaßnahmen zu messen. Mein Ziel ist es, maßgeschneiderte Empfehlungen zu geben und die Rendite ihrer Marketingaktivitäten zu maximieren, indem ich ihre Sichtbarkeit, ihren Bekanntheitsgrad und ihren Marktanteil steigere.'
				),
				'5' => array(
					'h5' => 'Berater',
					'h1' => 'In Finanzen',
					'text' => 'ich bin hier, um zukünftigen Kunden dabei zu helfen, ihr Finanzmanagement zu optimieren und ihre finanziellen Ziele zu erreichen. Ich biete fachkundige Beratung in verschiedenen Bereichen wie Budgetplanung, Cashflow-Management, Investitionsbewertung, Management von Finanzrisiken und Finanzierungsstrategien. Ich kann meine Kunden auch bei der Erstellung von Finanzprognosen, der Beurteilung der Rentabilität von Projekten, der Einführung solider Finanzrichtlinien und der Optimierung ihrer Kapitalstruktur unterstützen. Mein Ziel ist es, fundiertes Finanzwissen bereitzustellen, finanzielle Risiken zu minimieren und die Rentabilität zu maximieren, um meinen Klienten zu helfen, fundierte Entscheidungen zu treffen und ihren langfristigen finanziellen Erfolg zu sichern.'
				),
				'6' => array(
					'h5' => 'Assistent',
					'h1' => 'In Informatik',
					'text' => 'ich bin hier, um zukünftigen Kunden zu helfen, ihre technischen Probleme zu lösen und die Nutzung der Technologie zu maximieren. Ich kann in verschiedenen Bereichen Unterstützung bieten, z. B. bei der Installation und Konfiguration von Software, der Behebung von Hardwareproblemen, der Lösung von Netzwerkproblemen, der Computersicherheit und dem Datenmanagement. Ich kann auch Ratschläge zu den besten technologischen Praktiken geben, Lösungen empfehlen, die auf die spezifischen Bedürfnisse der Kunden zugeschnitten sind, und sie bei der Einführung neuer Technologien anleiten. Mein Ziel ist es, einen reibungslosen und effizienten Betrieb ihrer IT-Umgebung zu gewährleisten und ihnen dabei zu helfen, ihre Produktivität zu maximieren und den größtmöglichen Nutzen aus ihren Technologieinvestitionen zu ziehen.'
				)
			),
			'pricing' => array(
				'free' => 'Kostenlos'
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