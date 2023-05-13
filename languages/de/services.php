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
			/*custom your own*/
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
			/*custom your own*/
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
			/*custom your own*/
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
			/*custom your own*/
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
				'title' => 'Les différents méthodes',
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