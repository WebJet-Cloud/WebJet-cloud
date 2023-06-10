<?php
# $services['index']['content']['pricing']['blocks']['small']['']    ['']
# $services['pages']['full']['footer-os']['blocks']['small']['']    ['']
# $services['aboutus']['content']['container']['title']
# $services['down-contract']['content']['container']['title']
$services = array(
	'intro-video' => array(
		'default' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/QcfkYsDWjTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'fr' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/QcfkYsDWjTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'en' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/Y5HSAStwMaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'ru' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/3a9HoYIuaaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
		'de' => '<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/iptn5TPxpD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
	),
	'down-contract' => 'Download (+ Contract)',
	'cybersecurity' => array(
		'title' => 'Services - cybersecurity',
		'description' => 'Discover the importance of cybersecurity in protecting your computer systems and data from online threats. Learn the main risks and the key security measures to adopt.',
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
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Security',
					'h1' => 'Computer',
					'text' => 'Cybersecurity of computers is essential to ensure the protection of data and computer systems of future customers. By implementing strong security measures, you can ensure the confidentiality, integrity and availability of sensitive information. This includes installing effective antivirus, configuring a robust firewall, using two-factor authentication, data encryption, and raising awareness and training of users on good security practices. Continuous network monitoring and rigorous access management are also necessary to detect and prevent security incidents. By offering a comprehensive approach to cybersecurity, you can build trust with your future customers by providing them with a safe and reliable computing environment.'
				),
				'2' => array(
					'h5' => 'Security',
					'h1' => 'Server',
					'text' => 'The cybersecurity of a server is crucial to guarantee the protection of the data and applications of future customers. To ensure a high level of security, several measures must be put in place. This includes regular firewall configuration and maintenance to control incoming and outgoing traffic, as well as implementing strict access policies to limit unauthorized connections. It is also essential to have an intrusion detection system in place to monitor suspicious activity and to apply regular security patches to close known vulnerabilities. Strong authentication, such as two-factor authentication, should be in place to prevent unauthorized access. Additionally, regular backups and proper management of SSL certificates are necessary to protect data in case of failure or loss. By implementing these strong cybersecurity measures, you can provide your future customers with a secure and reliable server environment.'
				),
				'3' => array(
					'h5' => 'Security',
					'h1' => 'mobile devices',
					'text' => 'Mobile device cybersecurity is of paramount importance to ensure data protection and privacy for future customers. To ensure the security of mobile devices, it is essential to put in place protective measures such as the use of strong passwords, screen locks and biometric authentication. Additionally, installing applications only from trusted sources and regularly updating the operating system and applications are key to patching known vulnerabilities. Setting up anti-virus software and a firewall on mobile devices can detect and block potential threats. It is also recommended to encrypt sensitive data stored on devices and enable remote location functionality so that data can be wiped in case of loss or theft. By educating users about good mobile security practices, such as avoiding unsecured Wi-Fi networks and being careful when opening attachments or suspicious links, you can help prevent attacks and maintain the security of the mobile devices of your future customers.'
				),
				'4' => array(
					'h5' => 'Security',
					'h1' => 'hacking',
					'text' => 'Hacking cybersecurity is essential to protect future customers from malicious attacks aimed at compromising their systems and sensitive data. Hacking can take different forms, such as account hacking, network hacking, or website hacking. To prevent such attacks, it is important to have strong security measures in place. This includes using strong, unique passwords for all accounts, enabling two-factor authentication (2FA) for an extra layer of security, and educating users about the social engineering techniques used by hackers to obtain sensitive information. Having firewalls, intrusion detection systems, and network monitoring in place can help detect and block suspicious hacker-related activity. Regularly updating the operating system and applications is also essential to fix known vulnerabilities that could be exploited by hackers. Training and educating employees on computer security best practices is also important to reduce the risk of hacking. By implementing these cybersecurity measures, you can help future customers protect against hacking attacks and maintain the confidentiality, integrity, and availability of their systems and data.'
				),
				'5' => array(
					'h5' => 'Security',
					'h1' => 'Networks',
					'text' => 'The cybersecurity of a network is essential to ensure the protection of future customers against online threats. To ensure a secure network, several measures must be put in place. This includes setting up a firewall to control incoming and outgoing traffic, as well as having strong access and authentication policies in place to limit unauthorized connections. Network segmentation can also be used to isolate different domains and reduce the risk of attacks spreading. In addition, regularly updating network software and hardware, as well as using intrusion detection and intrusion prevention, are essential to detect and prevent malicious activity. Continuous network monitoring, vulnerability management and user awareness of good security practices are also essential to maintain a high level of cybersecurity. By implementing these measures, you can offer your future customers a network that is secure, reliable and protected against cyber threats.'
				),
				'6' => array(
					'h5' => 'Security',
					'h1' => 'Injection',
					'text' => 'Injection cybersecurity is crucial to protect future customers against malicious code injection attacks. Code injection occurs when untrusted data is embedded in a web application or database, allowing an attacker to execute unauthorized commands. To prevent these attacks, it is essential to implement secure coding practices, such as the use of prepared statements and validated input parameters. Rigorous input data validation, filtering, and special character escaping can help prevent SQL injection, command injection, and other forms of injection. Regular updating of frameworks and libraries used in the application is also important to benefit from security patches. Additionally, implementing web application firewalls (WAFs) and intrusion detection solutions can help monitor and block injection attempts. Raising awareness and training of developers and end users on the risks associated with injections is also essential to strengthen application security and protect future customers against code injection attacks.'
				),
				'7' => array(
					'h5' => 'Security',
					'h1' => 'brute force',
					'text' => 'Cybersecurity against brute force attacks is essential to protect future customers from unauthorized attempts to access their accounts and systems. A brute force attack involves trying to guess login credentials using a combination of common usernames and passwords. To prevent such attacks, it is important to have strong password policies in place, which encourage the use of complex and unique passwords. Implementing account lockout mechanisms after a number of failed attempts can also deter attackers. Using two-factor authentication (2FA) strengthens security by adding an extra layer of verification. Additionally, the use of intrusion detection techniques, such as analyzing event logs and monitoring suspicious activity, can help identify and block brute force attacks. Educating users on the risks of weak passwords and training on password security best practices are also essential to strengthen cybersecurity against brute force attacks and protect future customers.'
				),
				'8' => array(
					'h5' => 'Security',
					'h1' => 'phishing',
					'text' => 'Cybersecurity against phishing is essential to protect future customers against online phishing attacks. Phishing aims to trick users into divulging their sensitive personal information, such as login credentials or credit card information. To prevent such attacks, it is important to educate users on the signs of a phishing email or website, such as suspicious links, misspellings, or asking unusual information. Implementing spam and phishing filters at the email server level can help block phishing emails before they reach customers\' inboxes. Threat detection tools can also be used to identify known phishing websites and protect users against attacks. Educating and training users on email security best practices, as well as the use of authentication mechanisms such as Domain-based Message Authentication, Reporting, and Conformance (DMARC), can also strengthen security against phishing. By implementing these cybersecurity measures, you can help protect future customers from phishing attacks and keep their personal information private.'
				),
				'9' => array(
					'h5' => 'Security',
					'h1' => 'ramsoware',
					'text' => 'Cybersecurity against ransomware attacks is essential to protect future customers from the devastating consequences of this type of malware. The ransomware aims to encrypt files on a system and demand a ransom for their decryption. To prevent such attacks, it is crucial to have a regular data backup strategy in place, keeping copies offline and testing them regularly to ensure their recovery in the event of an incident. Regularly updating operating systems and software, including security patches, is also essential to close vulnerabilities exploited by ransomware. Using an up-to-date anti-virus and anti-malware solution that can detect known ransomware signatures and malicious behavior can help block attacks before they infect the system. Educating users about social engineering techniques used by attackers, such as phishing emails and malicious links, is also important to prevent unintentional opening of infected files. By implementing these cybersecurity measures, you can help protect future customers from ransomware attacks and avoid associated data loss and financial extortion.'
				),
				'10' => array(
					'h5' => 'Security',
					'h1' => 'OSINT',
					'text' => 'Cybersecurity related to OSINT (Open Source Intelligence) is essential to protect future customers by using publicly available information in a legal and ethical manner. OSINT helps collect, analyze and interpret data from open sources such as social media, websites, online forums, etc. In a cybersecurity context, this can be used to identify potential threats, monitor malicious activity, and assess online reputation. By using OSINT, it is possible to detect potential vulnerabilities and risks related to public information, and adopt preventive measures accordingly. This includes monitoring company mentions on social media, finding data leaks, identifying phishing attacks targeting employees, and much more. Having strong OSINT processes in place and using the right tools helps strengthen cybersecurity by proactively identifying potential threats and taking action to mitigate them. By offering OSINT services to future customers, you can help them strengthen their security posture and make informed decisions to protect against cyber threats.'
				),
				'11' => array(
					'h5' => 'Security',
					'h1' => 'hijack',
					'text' => 'Cybersecurity against hijacking (or hijacking) attacks is crucial to protect future customers from unauthorized intrusion and manipulation of their accounts, devices or communications. Hijacking can occur in different forms, such as session hijacking, account hijacking, or domain hijacking. To prevent such attacks, it is important to adopt strong security measures, such as using strong and unique passwords for all accounts, enabling two-factor authentication ( 2FA) and constant monitoring for suspicious activity. It is also recommended to use secure connections, such as encryption protocols (HTTPS), to prevent attackers from intercepting sensitive data. Raising awareness and educating users about the risks of hijacking, such as opening suspicious links or attachments, is also key to enhancing security. Additionally, organizations must implement strict access management, data protection, and network monitoring policies to detect and respond to hijacking attempts quickly. By implementing these cybersecurity measures, you can help future customers protect themselves against hijacking attacks and maintain the confidentiality and integrity of their information.'
				),
				'12' => array(
					'h5' => 'Security',
					'h1' => 'rootkit',
					'text' => 'Rootkit cybersecurity is essential to protect future customers against sophisticated attacks aimed at compromising the security of their systems. A rootkit is a type of malware that allows an attacker to take full control of a system, hiding its presence and subverting existing security mechanisms. To prevent such attacks, it is important to implement several security measures. This includes using up-to-date anti-virus and anti-malware software capable of detecting known rootkits and suspicious behavior. Regularly updating the operating system and applications is also essential to fix vulnerabilities that could be exploited by rootkits. Implementing firewalls, intrusion detection systems, and network monitoring can help detect and block suspicious activity associated with rootkits. Educating users about the risks of downloading software from untrusted sources, opening suspicious attachments or clicking on malicious links is also crucial. Additionally, constant monitoring of security logs and rapid response in the event of a rootkit detection are key to minimizing potential damage. By implementing these cybersecurity measures, you can help future customers protect against rootkit attacks and maintain the integrity and privacy of their systems and data.'
				),
				'13' => array(
					'h5' => 'Security',
					'h1' => 'malware',
					'text' => 'Malware-related cybersecurity is key to protecting future customers from malware attacks. Malware is software designed to cause damage, steal information, or take control of a system for malicious purposes. To prevent such attacks, it is important to implement several security measures. This includes using up-to-date anti-virus and anti-malware software that can detect and block known malware. Regularly updating the operating system and applications is also essential to fix vulnerabilities that could be exploited by malware. Caution when opening attachments or browsing dubious websites is also recommended to avoid unintentionally downloading malware. Educating users about the social engineering techniques used by attackers, such as phishing emails and malicious links, is also important to prevent malware infection. Additionally, having firewalls, intrusion detection systems, and network monitoring in place can help detect and block malware before it damages the system. By implementing these cybersecurity measures, you can help future customers protect themselves against malware attacks and keep their systems and data safe.'
				),
				'14' => array(
					'h5' => 'Security',
					'h1' => 'spyware',
					'text' => 'Spyware cybersecurity is essential to protect future customers from spyware attacks. Spyware is a type of malicious software designed to collect information about a user\'s activities and habits without their consent. To prevent such attacks, it is important to implement several security measures. This includes using up-to-date anti-virus and anti-malware software capable of detecting and removing known spyware. Caution when downloading software from untrustworthy sources or opening suspicious email attachments is also recommended to avoid spyware infection. Educating users about the social engineering techniques used by attackers, such as phishing emails and malicious links, is also important to prevent unintentional installation of spyware. It is also recommended that you limit administrative privileges on systems and implement security policies to restrict the installation of unauthorized software. Implementing firewalls, intrusion detection systems, and network monitoring can also help detect and block suspicious spyware-related activity. By implementing these cybersecurity measures, you can help future customers protect themselves against spyware attacks and maintain the privacy and security of their personal information.'
				),
				'15' => array(
					'h5' => 'Security',
					'h1' => 'update',
					'text' => 'Cybersecurity related to software updates is essential to protect future customers against vulnerabilities and potential attacks. Regular updates of the operating system, applications and software are crucial to close known security vulnerabilities and strengthen resistance against attacks. Software vendors regularly release security patches to fix discovered vulnerabilities. It is therefore important to install these updates as soon as they are available. Software updates also provide improved functionality and optimized performance, contributing to a better user experience. To ensure security, it is recommended to enable automatic updates to ensure that the latest security patches are installed promptly. Moreover, it is essential to download updates from trusted and official sources to avoid downloads of malware disguised as updates. Educating users about the importance of regular updates and the positive impact on security is also important. By following cybersecurity best practices regarding software updates, future customers can maintain a high level of security and reduce the risk of exploiting known vulnerabilities by cybercriminals.'
				)
			)
		),
		'sitemap' => array(
			'images' => 'services/cybersecurity/cybersecurity.png',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'sap' => array(
		'title' => 'Prestation de Services à la Personne',
		'description' => 'They allow you to stay at home in the best possible conditions and to benefit from assistance adapted to your situation.',
		'keyword' => '',
		'url' => array(
			'default' => 'services/sap',
			'fr' => 'services/services-a-la-personne'
		),
		'content' => array(
			'intro' => array(
				'title' => 'Présentation',
				'description' => '',
				'text' => 'La prestation de services à la personne est un secteur qui englobe une variété d\'activités visant à répondre aux besoins quotidiens des individus. Ces services comprennent l\'aide aux tâches ménagères, les soins aux personnes âgées ou handicapées, l\'assistance éducative, les soins de santé à domicile et le soutien social et psychologique. Ils sont dispensés par des professionnels qualifiés et personnalisés en fonction des besoins spécifiques de chaque bénéficiaire. Ces services contribuent à améliorer la qualité de vie des personnes en favorisant leur autonomie, leur sécurité et leur intégration sociale. Ils sont soutenus par des politiques publiques visant à faciliter l\'accès aux services et à promouvoir l\'inclusion sociale.'
			),
			'excel' => array(
				'title' => 'Les différents métiers',
				'description' => '',
				'table' => array(
					'head' => array(
						'1' => 'Méthode de services à la personne',
						'2' => 'Description'
					),
					'body' => array(
						'1' => array(
							'tr' => array(
								'1' => 'Aide à domicile',
								'2' => 'Fournir une assistance dans les tâches ménagères, comme le nettoyage, le repassage, la cuisine, etc.'
							)
						),
						'2' => array(
							'tr' => array(
								'1' => 'Soins aux personnes âgées',
								'2' => 'Fournir une assistance aux personnes âgées pour les aider dans leurs activités quotidiennes, telles que se lever, se laver, \'habiller, prendre des médicaments, etc.'
							)
						),
						'3' => array(
							'tr' => array(
								'1' => 'Accompagnement éducatif',
								'2' => 'Fournir un soutien scolaire et éducatif aux enfants, les aider avec leurs devoirs, les encourager dans leur apprentissage, etc.'
							)
						),
						'4' => array(
							'tr' => array(
								'1' => 'Soins de santé à domicile',
								'2' => 'Dispenser des soins médicaux à domicile, tels que la prise de médicaments, le changement de pansements, les injections, etc.'
							)
						),
						'5' => array(
							'tr' => array(
								'1' => 'Soutien psychologique',
								'2' => 'Offrir un soutien émotionnel et psychologique aux personnes en difficulté, en les écoutant, en les conseillant et en les accompagnant dans leur parcours de vie.'
							)
						),
						'6' => array(
							'tr' => array(
								'1' => 'Assistance aux personnes handicapées',
								'2' => 'Aider les personnes handicapées dans leurs activités quotidiennes, en fonction de leurs besoins spécifiques, comme se déplacer, se nourrir, communiquer, etc.'
							)
						),
						'7' => array(
							'tr' => array(
								'1' => 'Garde d\'enfants',
								'2' => 'Assurer la garde et l\'accompagnement des enfants en l\'absence des parents, en veillant à leur sécurité, en organisant des activités ludiques, etc.'
							)
						),
						'8' => array(
							'tr' => array(
								'1' => 'Soutien social',
								'2' => 'Fournir un soutien social aux personnes isolées, en favorisant les échanges sociaux, en organisant des activités communautaires, etc.'
							)
						),
						'9' => array(
							'tr' => array(
								'1' => 'Transport et accompagnement',
								'2' => 'Assurer le transport des personnes, par exemple pour se rendre à des rendez-vous médicaux, des activités sociales, des courses, etc.'
							)
						)
					)
				)
			),
			'for-pro' => array(
				'title' => 'Ma Formation et mon parcours professionnel',
				'description' => '',
				'text' => 'En étant autodidacte sur les services à la personne, vous pouvez acquérir des connaissances et compétences précieuses en utilisant diverses ressources disponibles. Vous pouvez commencer par consulter des livres, des cours en ligne, des vidéos et des articles sur les différents aspects des services à la personne, tels que l\'aide aux tâches ménagères, les soins aux personnes âgées, l\'accompagnement éducatif, etc. Il est également utile de se renseigner sur les réglementations et les exigences légales associées à ces services.<br /><br />Ensuite, vous pouvez vous exercer en mettant en pratique vos connaissances. Par exemple, vous pouvez proposer votre aide à des proches, des amis ou des voisins qui pourraient bénéficier de services à la personne. Cela vous permettra d\'acquérir de l\'expérience pratique et de développer vos compétences dans différents domaines.<br /><br />Il est également important de rester à jour avec les dernières tendances et pratiques dans le domaine des services à la personne. Vous pouvez suivre des blogs, participer à des forums en ligne ou rejoindre des groupes de discussion pour échanger des informations et des idées avec d\'autres professionnels du secteur.<br /><br />En résumé, en tant qu\'autodidacte dans les services à la personne, vous pouvez vous former en utilisant diverses ressources disponibles, acquérir de l\'expérience pratique et rester à jour avec les développements dans le domaine. Cela vous permettra de développer vos compétences et de vous positionner pour offrir des services de qualité dans ce secteur.'
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Services à la Personne',
					'h1' => 'Informatique',
					'text' => 'Les services à la personne en informatique offrent un soutien technique et une expertise aux particuliers dans le domaine de l\'informatique et de la technologie. Ces services peuvent inclure la réparation et la maintenance des ordinateurs, l\'installation de logiciels, la configuration de réseaux, la récupération de données, l\'assistance à distance et la formation aux technologies.<br /><br />Pour les futurs clients, les services à la personne en informatique offrent de nombreux avantages. Tout d\'abord, ils permettent aux utilisateurs de bénéficier d\'une assistance personnalisée et adaptée à leurs besoins spécifiques. Les professionnels de l\'informatique peuvent résoudre les problèmes techniques, améliorer les performances des systèmes, et fournir des conseils pour optimiser l\'utilisation des appareils et des logiciels.<br /><br />En outre, ces services aident les clients à économiser du temps et de l\'énergie en leur évitant d\'avoir à résoudre eux-mêmes des problèmes complexes ou à effectuer des tâches techniques qu\'ils ne maîtrisent pas. Les experts en informatique peuvent intervenir rapidement et efficacement pour résoudre les problèmes et assurer le bon fonctionnement des équipements informatiques.<br /><br />De plus, les services à la personne en informatique peuvent contribuer à renforcer la sécurité en ligne des utilisateurs. Les professionnels peuvent mettre en place des solutions de protection contre les virus, les logiciels malveillants et les cyberattaques, ainsi que sensibiliser les clients aux meilleures pratiques en matière de sécurité informatique.<br /><br />En somme, les services à la personne en informatique sont essentiels pour les futurs clients, car ils offrent un soutien technique expert, permettent d\'économiser du temps et de l\'énergie, et contribuent à renforcer la sécurité en ligne. Ces services permettent aux particuliers de bénéficier d\'une assistance personnalisée et de tirer le meilleur parti de leurs appareils et de leurs logiciels.'
				),
				'2' => array(
					'h5' => 'Services à la Personne',
					'h1' => 'Administrative',
					'text' => 'Les services à la personne en administratif offrent un soutien professionnel dans la gestion des tâches administratives et organisationnelles. Ces services peuvent inclure la gestion de courrier, la gestion des factures et des paiements, la rédaction de documents, la planification d\'événements, la gestion de l\'agenda, la coordination des rendez-vous, etc.<br /><br />Pour les futurs clients, les services à la personne en administratif présentent de nombreux avantages. Tout d\'abord, ils permettent de déléguer les tâches administratives, souvent chronophages et complexes, à des professionnels expérimentés. Cela permet aux clients de se concentrer sur leurs activités principales et de gagner du temps précieux.<br /><br />De plus, les services à la personne en administratif offrent une expertise dans la gestion des documents et des procédures administratives. Les professionnels peuvent s\'assurer que les documents sont correctement rédigés, classés et archivés, et veiller au respect des délais et des exigences légales.<br /><br />Ces services peuvent également apporter une organisation plus efficace et une meilleure productivité. Les clients peuvent bénéficier d\'une gestion optimisée de leur agenda, d\'une planification stratégique des tâches et d\'une coordination efficace des rendez-vous et des réunions.<br /><br />En outre, les services à la personne en administratif garantissent la confidentialité et la sécurité des informations sensibles. Les professionnels respectent les règles de confidentialité et de protection des données, offrant ainsi une tranquillité d\'esprit aux clients.<br /><br />En somme, les services à la personne en administratif permettent aux futurs clients de déléguer les tâches administratives, de bénéficier d\'une expertise professionnelle, d\'améliorer l\'efficacité et la productivité, et de garantir la confidentialité des informations. Ces services offrent un soutien précieux dans la gestion administrative, libérant ainsi du temps et des ressources pour se concentrer sur les activités essentielles.'
				),
				'3' => array(
					'h5' => 'Services à la Personne',
					'h1' => 'Téléassistance et TéléConférence',
					'text' => 'Les services à la personne en téléassistance et téléconférence offrent un soutien à distance aux individus, en particulier aux personnes âgées ou en situation de handicap. La téléassistance permet aux clients de rester en contact avec des professionnels formés qui peuvent intervenir en cas d\'urgence médicale ou de besoin d\'assistance. La téléconférence permet aux clients de communiquer et de participer à des réunions ou à des événements à distance, en utilisant des outils de communication tels que la visioconférence.<br /><br />Pour les futurs clients, les services à la personne en téléassistance et téléconférence offrent une tranquillité d\'esprit et favorisent l\'inclusion sociale. La téléassistance assure une surveillance 24h/24 et 7j/7, ce qui permet aux personnes vulnérables de se sentir en sécurité dans leur propre domicile. En cas d\'urgence médicale ou de situation critique, l\'assistance est rapidement disponible en appuyant simplement sur un bouton.<br /><br />La téléconférence facilite la communication et la participation des clients aux réunions, aux formations, aux événements familiaux ou aux activités sociales, même à distance. Cela permet aux individus de rester connectés avec leurs proches, leurs collègues ou leur communauté, en surmontant les barrières géographiques ou les difficultés de déplacement.<br /><br />Ces services à la personne offrent également une plus grande indépendance aux clients, en leur permettant de rester dans leur environnement familier et de bénéficier d\'une assistance à distance. Cela favorise l\'autonomie et le maintien à domicile des personnes âgées ou en situation de handicap.<br /><br />En somme, les services à la personne en téléassistance et téléconférence offrent un soutien essentiel aux futurs clients, en assurant leur sécurité, leur inclusion sociale et leur indépendance. Ces services permettent aux clients de recevoir une assistance à distance en cas d\'urgence et de participer activement aux activités sociales et professionnelles grâce aux outils de communication à distance.'
				)
			),
			'pricing' => array(
				'free' => '',
				'fees-seo' => '(+/-) 40HT Frais de déplacement',
				'not-propose' => ''
			)

		),
		'sitemap' => array(
			'images' => 'services/consultant/assistant-informatique.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
	),
    'marketing' => array(
		'title' => 'Services - marketing',
		'description' => 'The impact of new technologies on marketing, including the use of social media, personalization and customer experience',
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
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Marketing',
					'h1' => 'CPM',
					'text' => 'The marketing of a CPM (Cost Per Mille) aims to promote the advantages and opportunities that this advertising method offers to future customers. Focusing on profitability, it highlights the fact that advertisers only pay per thousand impressions (views) of their advertisements, which allows for better cost control and more efficient use of the advertising budget. It also highlights the broad reach of this approach, allowing advertisers to reach large audiences while benefiting from transparent pricing based on actual impressions. By emphasizing the precision of targeting and the advantages of the possible personalization of advertisements, the marketing of a CPM gives confidence to future customers by demonstrating the convincing results that this method can bring to their advertising campaigns.'
				),
				'2' => array(
					'h5' => 'Marketing',
					'h1' => 'CPA',
					'text' => 'The marketing of a CPA (Cost Per Action) aims to present the advantages of this advertising method to future customers. It emphasizes that advertisers only pay when users take a specific, pre-defined action, such as a purchase, signup, or download, allowing greater control over ROI. By emphasizing the precise measurement of results, a CPA\'s marketing reassures future clients by providing them with tangible data on the performance of their advertising campaigns. It also highlights the ability to specifically target users most likely to perform the desired action, which improves advertising effectiveness and reduces wasteful spending. In summary, marketing a CPA showcases the performance, profitability, and targeting accuracy of this advertising method, providing future clients with the confidence to invest in more effective advertising campaigns.'
				),
				'3' => array(
					'h5' => 'Marketing',
					'h1' => 'CPL',
					'text' => 'The marketing of a CPL (Cost Per Lead) aims to highlight the advantages of this advertising method for future customers. It emphasizes that advertisers only pay for the leads (qualified contacts) generated by their campaigns, allowing precise control of marketing spend. By highlighting the quality of the leads obtained, CPL marketing reassures future customers by assuring them that their advertising budget is devoted to prospects who are genuinely interested in their products or services. It also highlights the ability to customize campaigns to reach specific market segments, which improves message relevance and increases the chance of conversion. In summary, the marketing of a CPL emphasizes the efficiency, profitability and quality of the leads obtained, giving future customers the confidence to invest in advertising campaigns oriented towards the generation of qualified leads.'
				),
				'4' => array(
					'h5' => 'Marketing',
					'h1' => 'CPC',
					'text' => 'CPC (Pay Per Click) marketing aims to highlight the benefits of this advertising method to future customers. It emphasizes that advertisers only pay when users actually click on their ads, ensuring efficient use of advertising budget by only charging for actual interactions. By emphasizing the ability to accurately measure the number of clicks and analyze performance, CPC marketing offers future customers clear visibility into the return on investment of their advertising campaigns. It also highlights the ability to optimize ads for performance, adjusting keywords, targets, and messages to maximize relevance and results. In summary, CPC marketing emphasizes transparency, cost control, and the ability to adjust campaigns in real time, giving future customers an effective way to promote their products or services while controlling their advertising spending.'
				),
				'5' => array(
					'h5' => 'Marketing',
					'h1' => 'CTR',
					'text' => 'Marketing a CTR (click-through rate) aims to highlight the benefits of this measure for future customers. It emphasizes that CTR is a measure of ad effectiveness by showing the percentage of users who clicked on an ad out of the total number of impressions. By emphasizing the importance of a high CTR, CTR marketing highlights the relevance and appeal of ads, giving future customers a way to judge the effectiveness of their campaigns. advertisers. It also highlights the ability to optimize ads for CTR, adjusting visuals, messaging, and targeting to improve engagement and drive more clicks. In summary, marketing a CTR enhances the measurement of advertising effectiveness, providing future clients with valuable information to evaluate and improve their campaigns, with a view to obtaining more convincing results and optimize their return on advertising investment.'
				),
				'6' => array(
					'h5' => 'Marketing',
					'h1' => 'CPV',
					'text' => 'The marketing of a CPV (Cost Per View) aims to highlight the advantages of this advertising method for future customers. It emphasizes that advertisers only pay when their ads are actually seen by users, ensuring efficient use of advertising budget by only charging for viewable impressions. By emphasizing the ability to maximize brand visibility, CPV marketing emphasizes the ability to reach large audiences and generate meaningful exposure. It also highlights the ability to specifically target users most likely to be interested in ads, which improves advertising relevance and impact. In summary, marketing a CPV emphasizes guaranteed visibility, cost control and the ability to reach a targeted audience, providing future customers with an effective way to promote their brand and gain increased exposure. of their products or services.'
				),
				'7' => array(
					'h5' => 'Marketing',
					'h1' => 'CPI',
					'text' => 'The marketing of a CPI (Cost Per Install) aims to highlight the advantages of this advertising method for future customers. It emphasizes that advertisers only pay when their mobile apps are actually installed by users, ensuring cost effective acquisition of new users. By highlighting the precise measurement of app installs, a CPI\'s marketing reassures future customers by providing them with tangible data on the performance of their advertising campaigns. It also highlights the ability to target specific users based on their interests, geographic location, and other demographic criteria, which helps reach a more qualified audience and increase the chances of conversion. In summary, CPI marketing emphasizes efficiency, cost-effectiveness, and the ability to achieve quality app installs, providing future customers with the confidence to invest in advertising campaigns aimed at grow their mobile user base.'
				),
				'8' => array(
					'h5' => 'Marketing',
					'h1' => 'ROI',
					'text' => 'The marketing of a ROI (Return on Investment) aims to highlight the advantages of this measure for future customers. It emphasizes that ROI is a measure of the return on investment of a marketing campaign by comparing the benefits generated against the costs incurred. By emphasizing the importance of a high ROI, ROI marketing highlights the return on advertising dollars, providing future clients with a way to quantify the effectiveness of their marketing efforts. It also highlights the possibility of optimizing marketing strategies based on ROI, allocating resources more efficiently and adjusting tactics to maximize returns. In summary, ROI marketing emphasizes the measurement of the performance and profitability of marketing campaigns, providing future clients with key information to evaluate and improve their strategies, in order to maximize their return on investment and achieve their business goals.'
				),
				'9' => array(
					'h5' => 'Marketing',
					'h1' => 'PPC',
					'text' => 'The marketing of a PPC (Pay-Per-Click) aims to highlight the advantages of this advertising method for future customers. It emphasizes that advertisers only pay when their ads are actually clicked by users, ensuring cost control and efficient use of advertising budget. By emphasizing the ability to specifically target relevant users based on keywords, interests, or behaviors, PPC marketing emphasizes the relevance and accuracy of advertising, allowing future customers to \'reach their target audience more effectively. It also highlights the ability to measure performance in real time, adjust campaigns and optimize results to maximize ROI. In summary, PPC marketing emphasizes cost control, precise targeting, and the ability to achieve measurable results, providing future clients with an effective way to promote their business, increase their visibility, and drive qualified traffic to their website.'
				),
				'10' => array(
					'h5' => 'Marketing',
					'h1' => 'KPI',
					'text' => 'The marketing of a KPI (Key Performance Indicator) aims to highlight the advantages of this measure for future customers. It emphasizes that KPIs help define and track key performance indicators specific to marketing objectives. By emphasizing the importance of KPIs in measuring results, marketing a KPI offers future clients a way to quantify and evaluate the performance of their marketing initiatives. It also highlights the ability to adjust strategies and tactics based on KPIs to improve efficiency and achieve business goals. In summary, marketing a KPI emphasizes performance measurement, the ability to evaluate results and make informed decisions, providing future clients with key insights to optimize their marketing efforts and achieve stronger results. .'
				)
			)
		),
		'sitemap' => array(
			'images' => 'services/marketing/marketing.png',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'webmaster' => array(
		'title' => 'Services - webmaster',
		'description' => 'The presentation on the webmaster highlights the essential role of this professional in the creation, management and maintenance of websites.',
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
					'text' => 'The role of the webmaster of a showcase site intended for future customers is to ensure that the site offers an optimal user experience and effectively attracts visitors. The webmaster must ensure that the design of the site is attractive, professional and in keeping with the image of the brand. He must also ensure that the content of the site is clear, concise and engaging, highlighting the products, services and advantages of the company.<br /><br />The webmaster must optimize SEO of the showcase site using techniques such as optimizing keywords, improving the structure of the site and creating relevant links. This will increase the visibility of the site in search engines and attract qualified traffic.<br /><br />In addition, the webmaster must ensure that the showcase site is fast, secure and easy to use. navigate. It must make regular updates of content and functionality, while ensuring compatibility with different browsers and devices.<br /><br />The webmaster also plays a role in analyzing the performance of the showcase site. It uses analytics tools to monitor traffic, conversions, and other key metrics. This data makes it possible to identify the strengths and weaknesses of the site, and to make continuous improvements to better meet the needs of future customers.<br /><br />In summary, the webmaster of a showcase site for future customers is responsible for the design, maintenance, SEO optimization and performance analysis of the site. Its main objective is to provide a quality user experience and to maximize the conversion of visitors into future customers.'
				),
				'2' => array(
					'h5' => 'Webmaster',
					'h1' => 'Blog',
					'text' => 'The role of the webmaster of a blog for future customers is to create and manage an online environment that is attractive, informative and engaging. The webmaster must design an intuitive and aesthetic layout to facilitate navigation and reading of the content. He must also optimize the blog for SEO using techniques such as keyword optimization and improving the site structure.<br /><br />The webmaster is responsible for the management and regular posting of high quality content on the blog. He must ensure that the articles are relevant, informative and interesting for the targeted readership. In addition, it can encourage interaction by integrating social media commenting and sharing features.<br /><br />The webmaster must also ensure that the blog is technically efficient by performing regular updates of the CMS (content management system) used, ensuring the security of the site and optimizing the page loading speed.<br /><br />Finally, the webmaster can use analysis tools to follow the blog statistics, such as number of visitors, most viewed pages and user behavior. This information allows him to identify the trends and preferences of future customers, in order to adjust the content strategy and offer a better user experience.<br /><br />In short, the webmaster of A blog for future customers plays a vital role in designing, managing and optimizing the blog to attract and retain potential visitors. Its objective is to create quality content and provide an optimal user experience to generate interest and establish a relationship of trust with future customers.'
				),
				'3' => array(
					'h5' => 'Webmaster',
					'h1' => 'E-Commerce',
					'text' => 'The role of the webmaster of an e-commerce aimed at future customers is to create and maintain a user-friendly and secure online platform for potential buyers. The webmaster must ensure that the e-commerce site has an attractive design, highlighting products, special offers and important information. It must also ensure that the purchase process is smooth and intuitive, optimizing the shopping cart, payment options and overall navigation.<br /><br />The webmaster must implement SEO optimization techniques to increase the site\'s visibility in search engines and attract qualified traffic. It must also incorporate social media sharing features and recommendation options to encourage future customers to share their shopping experiences.<br /><br />Security is a priority for the webmaster of an e-commerce site. It must implement advanced security measures to protect the personal information and payment data of potential customers. This involves the use of SSL certificates, firewalls, fraud detection systems, and regular updating of the site to counter potential vulnerabilities.<br /><br />The webmaster of a e-commerce is also responsible for managing inventory, adding new products and updating prices. He must ensure the availability of products and ensure that descriptions and images are accurate and attractive.<br /><br />By using analytics tools, the webmaster can track the performance of the site, such as the conversion rate, cart abandonment and sales. This data makes it possible to identify the strengths and weaknesses of the site and to put in place continuous improvements to maximize sales and the satisfaction of future customers.<br /><br />In summary, the webmaster of an e-commerce aimed at future customers plays a crucial role in the creation, management and optimization of the online sales platform. Its goal is to provide a pleasant, secure and efficient shopping experience for future customers, while maximizing sales and generating brand loyalty.'
				),
				'4' => array(
					'h5' => 'Webmaster',
					'h1' => 'LMS',
					'text' => 'The webmaster of an LMS (Learning Management System) intended for future customers plays an essential role in the creation and management of an online learning platform. The webmaster must design a friendly and attractive user interface, facilitating navigation and access to courses and educational resources. He must also ensure that the LMS offers advanced features such as learner progress tracking, online assessments and registration management.<br /><br />The webmaster must optimize the SEO of the LMS by using appropriate techniques to improve its visibility in search engines. This will attract future customers interested in online learning and stimulate their engagement.<br /><br />The security and confidentiality of learner data is a priority for the webmaster of a LMS. He must put in place robust security measures to protect personal information and guarantee the confidentiality of sensitive data.<br /><br />The webmaster is also responsible for managing the content of the LMS. He must ensure that courses, modules and resources are organized in a logical and accessible way. In addition, he can collaborate with trainers and experts to update existing content and add new elements to meet the needs of future customers.<br /><br />Using analysis tools integrated into the LMS, the webmaster can track usage statistics, course completion rates, and learner feedback. This information allows him to identify the strengths and weaknesses of the system, and to make improvements to improve the learning experience for future customers.<br /><br />In summary, the webmaster of an LMS for future customers is responsible for creating, managing and optimizing the e-learning platform. Its goal is to provide a user-friendly, secure and efficient learning experience for future customers, with a focus on content accessibility, progress tracking and overall quality of learning experience. \'learning.'
				),
				'5' => array(
					'h5' => 'Webmaster',
					'h1' => 'Freelancer',
					'text' => 'A freelancer\'s webmaster plays a crucial role in creating and maintaining an engaging and professional online presence. The webmaster is responsible for designing and maintaining a website or portfolio that showcases the skills, experience, and accomplishments of the freelancer. He must ensure that the site is user-friendly, easy to navigate and highlights the services offered.<br /><br />The webmaster must optimize the referencing of the site to attract future customers interested in the specific skills of the freelance. This may include using relevant keywords, creating quality content, and improving site structure for better search engine visibility.<br /><br />The webmaster must also incorporate attractive visual elements, such as images, videos or examples of work carried out, to illustrate the skills and professionalism of the freelancer. This allows future clients to have a concrete idea of what they can expect from the freelancer.<br /><br />Managing the presence on social networks is also part of the role of the webmaster of a freelancer. He must create and maintain professional profiles on relevant platforms, share interesting content and interact with potential future customers.<br /><br />The webmaster is also responsible for managing contacts and inquiries from future clients. He must ensure that the contact forms are functional, that the contact information is easily accessible and that the requests of the future customers are treated in a professional and fast way.<br /><br />In summary, the webmaster of a freelancer plays a key role in creating and managing an engaging and professional online presence. Its objective is to attract future clients, to highlight the skills and experience of the freelancer, and to facilitate interactions with potential clients.'
				),
				'6' => array(
					'h5' => 'Webmaster',
					'h1' => 'Booking',
					'text' => 'The webmaster of an online reservation system, also called booking, plays an essential role in the creation and management of a platform allowing future customers to book services or products. The webmaster must design an intuitive and user-friendly interface, facilitating the search, selection and reservation of the available options. He must ensure that the reservation process is simple, transparent and secure.<br /><br />The webmaster is responsible for managing availability, prices and information on the services or products offered. He must ensure that the data is up-to-date and accurate, allowing future customers to make informed choices when booking.<br /><br />Security is a crucial aspect for the webmaster of a system of booking. It must implement advanced security measures to protect the personal information and payment data of future customers. This involves the use of encryption protocols, firewalls and secure payment validation methods.<br /><br />The webmaster is also responsible for managing customer reviews and comments. He must ensure that reviews are genuine and respond to concerns or questions from future customers. This helps build trust and improve the experience of future customers when booking services or products.<br /><br />Using analytics tools built into the booking system, the webmaster can track booking statistics, conversion rates and demand trends. This information allows it to identify periods of high demand, adjust availability and offer targeted offers or promotions to attract future customers.<br /><br />In summary, the webmaster of \'a booking system for future customers is responsible for the design, management and optimization of the online booking platform. Its objective is to provide a smooth, secure and user-friendly reservation experience for future customers, with an emphasis on the simplicity of the reservation process, the accuracy of information and confidence in the security of transactions.'
				),
				'7' => array(
					'h5' => 'Webmaster',
					'h1' => 'Social Network',
					'text' => 'The webmaster of a social network aimed at future customers plays an essential role in the creation, management and optimization of the company\'s online presence on social networks. The webmaster must design and maintain a consistent and engaging presence on relevant social platforms to attract and engage future customers.<br /><br />The webmaster is responsible for creating compelling and relevant content for future customers, using various formats such as posts, images, videos and stories. He must also ensure that the content is adapted to the specificities of each social network.<br /><br />The webmaster must optimize social referencing by using appropriate techniques to increase the visibility of the company on the networks social. This involves the use of relevant keywords, hashtags, audience targeting strategies and collaborations with influencers or partners.<br /><br />Community management is an essential aspect for the webmaster of a social network. He must interact with future customers, answer their questions, solve problems and encourage positive conversations around the brand. He can also organize contests, surveys or online events to stimulate the engagement of future customers.<br /><br />The webmaster is also responsible for monitoring the performance of publications and campaigns on the social networks using integrated analysis tools. This allows him to identify the most successful types of content, the optimal times to publish and the reactions of future customers. This information guides future strategies and makes it possible to adjust actions based on feedback from future customers.<br /><br />In summary, the webmaster of a social network aimed at future customers is responsible for managing and optimizing the company\'s online presence on social platforms. Its goal is to create an engaged community, attract future customers, promote the brand and boost conversions.'
				)
			),
			'pricing' => array(
				'fees-seo' => 'Optional 3-day delivery charge of €275 excl. VAT and additional running costs.'
			)
		),
		'sitemap' => array(
			'images' => 'services/webmaster/site-vitrine.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'developper' => array(
		'title' => 'Services - developper',
		'description' => 'The developer is an expert in creating computer systems, such as software, applications and websites. He uses programming languages and computer tools to design, develop, implement and maintain these systems.',
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
			),
			'secteur' => array(
				'1' => array(
					'h5' => 'Developper',
					'h1' => 'WebJetClouds',
					'text' => 'WebJetClouds is a project developed by developers to serve future customers by offering them a complete solution of cloud services. As a developer, our goal is to design and implement a robust and user-friendly web platform that will allow customers to benefit from the advantages of cloud computing. We will develop features such as creating and managing virtual machines, secure data storage, advanced networking, as well as administration and monitoring tools. Our approach will be focused on the user experience, ensuring an intuitive and easy-to-use interface, as well as strong security to protect sensitive customer data. In addition, we are committed to offering efficient and responsive technical support, in order to accompany our customers throughout their journey with WebJetClouds. Our ultimate goal is to provide a quality cloud platform that meets customer needs, offering them a reliable, scalable and high-performance solution for their applications and data.'
				),
				'2' => array(
					'h5' => 'Developper',
					'h1' => 'Framework',
					'text' => 'As an experienced developer working on several frameworks, we have acquired a diversified expertise to serve future customers in their development projects. We are proficient in several popular frameworks such as React, Angular, Vue.js, Django, Ruby on Rails and Laravel.<br /><br />Using the React framework, we are able to develop responsive and interactive user interfaces for modern web applications. With Angular, we can build robust and scalable applications, taking advantage of its advanced features such as state management and real-time data manipulation. Vue.js is another framework we use to build high-performance applications, with a gentler learning curve and a phased approach.<br /><br />For backend applications, we use Django, a Python framework which offers a solid structure and integrated functionality for the rapid development of secure web applications. Ruby on Rails is also a preferred option for its convention rather than configuration approach, which makes it easier to develop elegant and efficient web applications. Laravel is another PHP framework that we use for its ease of use and wide range of out-of-the-box features.<br /><br />By working with these different frameworks, we can meet the varying needs future customers, whether building interactive web applications, powerful APIs or complete content management systems. We are able to provide bespoke solutions using the specific features of each framework to ensure optimal results.<br /><br />Our experience with these frameworks allows us to recommend the best solution based on project requirements and customer technology preferences. We are also committed to staying up to date with the latest trends and developments in these frameworks, in order to provide innovative and up-to-date solutions for our future customers.'
				),
				'3' => array(
					'h5' => 'Developper',
					'h1' => 'Web project',
					'text' => 'As a developer working on a web project, our goal is to serve future customers by offering them a complete solution for the creation and deployment of their website. We will develop key functionalities such as design and development of attractive and responsive websites, content management, integration of online payment systems, implementation of e-commerce functionalities, optimization of the SEO and integration of analytics solutions to track performance.<br /><br />Our team of developers will work closely with clients to understand their specific needs and translate their ideas into a user-friendly user interface and attractive. We will use programming languages such as HTML, CSS and JavaScript, as well as popular frameworks and libraries like Bootstrap, jQuery and React to create interactive and dynamic websites.<br /><br />We will also ensure that the website is optimized for different devices and browsers, using adaptive and responsive design techniques. Security will be a top priority, with robust safeguards in place to protect customer data and end users.<br /><br />In addition to initial website development, we will also offer ongoing support , updates and additional features according to customer needs. Our goal is to provide a high quality web solution, meeting clients\' business objectives and providing an exceptional user experience for their visitors.<br /><br />In summary, as a developer working on a web project, we We are committed to serving future customers by providing them with bespoke, attractive and functional websites, while ensuring security and optimization. Our goal is to provide an exceptional user experience and meet the specific needs of each client to help them achieve their online goals.'
				),
				'4' => array(
					'h5' => 'Developper',
					'h1' => 'Mobile Application Project',
					'text' => 'As a developer working on a mobile application project, our goal is to serve future customers by offering them a complete solution for the development and deployment of mobile applications. We will develop mobile applications for iOS and Android platforms, using programming languages such as Swift or Objective-C for iOS, and Java or Kotlin for Android.<br /><br />We will work closely with customers to understand their specific needs and requirements, and translate their ideas into an intuitive and engaging user interface. We will ensure that the mobile app is ergonomic, user-friendly and meets the latest design standards.<br /><br />Our team of developers will implement key features such as backend service integration , user and data management, integration of payment systems, use of technologies such as geolocation, push notifications, augmented reality or virtual reality, according to specific customer needs.<br /><br />We will also ensure that the mobile application is efficient, secure and compatible with a wide range of mobile devices. We will perform rigorous testing to ensure the app runs smoothly and respond quickly to resolve any issues or bugs.<br /><br />In addition to the initial development of the mobile app, we will offer ongoing support, updates and enhancements based on user feedback and evolving customer needs. Our goal is to deliver a high quality mobile application that meets clients\' business goals and provides an exceptional user experience for their end users.<br /><br />In summary, as a developer working on a mobile application, our goal is to serve future customers by providing them with personalized, high-performance and attractive mobile applications, while ensuring security and optimization. We are committed to meeting each customer\'s specific needs and delivering an exceptional user experience on iOS and Android platforms.'
				),
				'5' => array(
					'h5' => 'Developper',
					'h1' => 'Video Games Project',
					'text' => 'As a developer working on a game project, our goal is to serve future customers by providing them with an immersive, entertaining and high-quality gaming experience. We will develop games for different platforms such as game consoles, computers, mobile devices or online gaming platforms.<br /><br />We will work closely with customers to understand their vision and their specific requirements, and translate their ideas into engaging gameplay and attractive graphics. We will use popular game engines such as Unity or Unreal Engine to develop 2D or 3D games, making sure to optimize performance to deliver a smooth experience.<br /><br />Our team of developers will focus on level design, character AI, game physics, game mechanics, sound effects and music to create an immersive ambiance. We will ensure that the game is balanced, engaging and offers appropriate challenges for players.<br /><br />We will perform extensive testing to ensure game playability, stability and lack of of bugs. We will also adapt to player and customer feedback, making continuous updates and improvements to ensure the best gaming experience.<br /><br />In addition to game development, we will offer additional services such as the integration of multiplayer features, the monetization of the game, the integration of social media platforms or the support for the launch of the game on the different platforms.<br /><br />Our goal is to provide customers a high quality, entertaining and competitive game in the gaming market. We are committed to meeting the specific needs of each customer and creating a memorable gaming experience for players around the world.<br /><br / >In summary, as a developer working on a game project, our goal is to serve future customers by providing them with immersive, entertaining and high-quality games for different platforms. We are committed to creating an engaging gaming experience, making continuous improvements, and addressing specific customer needs to succeed in the gaming industry.'
				)
			),
			'pricing' => array(
				'free' => 'Free',
				'fees-seo' => 'Optional 3-day delivery charge of €275 excl. VAT and additional running costs.',
				'not-propose' => 'No Propose'
			)
		),
		'sitemap' => array(
			'images' => 'services/developper/developper.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'seo' => array(
		'title' => 'Services - SEO',
		'description' => 'By providing an overview of how search engines work, search engine optimization (SEO) techniques and the main factors influencing website rankings, she highlights the importance of researching relevant keywords, optimization of content, site structure, quality inbound links and user experience.',
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
			'images' => 'services/seo/local-business.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    ),
    'consulting' => array(
		'title' => 'Services - consulting',
		'description' => 'A consultant is an expert who advises companies to help them solve challenges, optimize their results and achieve their ambitions. He works in different areas, such as strategy, management, IT and more. This job offers great career and development prospects, but it also requires a lot of work and mobility.',
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
				'free' => 'Free',
				'fees-pro' => 'Optional travel expenses Zone Paris 17ᵉ: Free, Zone Paris: €40 HT and Zone International: Request for quote required.'
			),
			'footer' => array(
				'credit-impot' => 'Profitez de - 50% sur nos tarifs, grâce à la déduction fiscale.',
				'n-agree' => 'N° Agrément SAP '
			)
		),
		'sitemap' => array(
			'images' => 'services/consultant/Consultant-management.jpg',
			'video' => 'www.youtube.com/watch?v=aAGMYq68eHc'  /*directory images from <exemple.tld>/assets */
		)
    )
);

$JE_translate_services = json_encode($services);

?>