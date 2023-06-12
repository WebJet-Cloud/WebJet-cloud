<?php
# exemple $images['dir']
# exemple $images['manager']['partner']['']['']

$images = array(
	'manager' => array(
		'intro-vdo' => 'video/webjet-intro.mp4',
		/*Manager Images for Template */
		'logo' => array(
			'creator' => 'themes/moi-creator-alexonb.png',
			'icon' => 'pinned/favicon.ico', /*ICO recommended oversize */
			'normal' => 'startup/Web_Jet-logo.png', /*size recommended ~60x60 */
			'small' => 'pinned/favicon-32x32.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => 'startup/Web_Jet-logo.png' /*size recommended ~200x200 */
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			's:70x70' => 'pinned/mstile-70x70.png',
			's:150x150' => 'pinned/mstile-150x150.png',
			's:310x310' => 'pinned/mstile-310x310.png',
			's:310x150' => 'pinned/mstile-310x150.png',
			's:192x192' => 'pinned/android-chrome-192x192.png',
			'safari' => 'pinned/safari-pinned-tab.svg',
			's:144x144' => 'pinned/mstile-144x144.png',
			's:180x180' => 'pinned/apple-touch-icon-180x180.png',
			's:32x32' => 'pinned/favicon-32x32.png',
			's:16x16' => 'pinned/favicon-16x16.png',
			's:57x57' => 'pinned/apple-touch-icon-57x57.png',
			's:60x60' => 'pinned/apple-touch-icon-60x60.png',
			's:72x72' => 'pinned/apple-touch-icon-72x72.png',
			's:76x76' => 'pinned/apple-touch-icon-76x76.png',
			's:114x114' => 'pinned/apple-touch-icon-114x114.png',
			's:120x120' => 'pinned/apple-touch-icon-120x120.png',
			's:152x152' => 'pinned/apple-touch-icon-152x152.png'
		),
		'others' => array(
			'assurup' => 'others/assurup.725be7d.png',
			'g-advice' => 'others/google-advice.png'
		),
		/*Manager Images */
		'services' => array(
			'cybersecurity' => array(
				'1' => 'services/cybersecurity/security-computer.jpg',
				'2' => 'services/cybersecurity/security-server.jpg',
				'3' => 'services/cybersecurity/security-mobile.jpeg',
				'4' => 'services/cybersecurity/security-hacking.jpg',
				'5' => 'services/cybersecurity/security-networks.jpg',
				'6' => 'services/cybersecurity/security-inject.jpeg',
				'7' => 'services/cybersecurity/security-bruteforce.jpeg',
				'8' => 'services/cybersecurity/security-phishing.jpeg',
				'9' => 'services/cybersecurity/security-ramsoware.jpeg',
				'10' => 'services/cybersecurity/security-osint.jpeg',
				'11' => 'services/cybersecurity/security-hijack.jpeg',
				'12' => 'services/cybersecurity/security-rootkit.jpg',
				'13' => 'services/cybersecurity/security-malware.jpeg',
				'14' => 'services/cybersecurity/security-spyware.jpeg',
				'15' => 'services/cybersecurity/security-update.jpg',
				'page' => 'services/cybersecurity/cybersecurity.png'
			),
			'marketing' => array(
				'1' => 'services/marketing/cpm.jpg',
				'2' => 'services/marketing/cpa.png',
				'3' => 'services/marketing/cpl.jpg',
				'4' => 'services/marketing/cpc.jpg',
				'5' => 'services/marketing/ctr.jpg',
				'6' => 'services/marketing/cpv.png',
				'7' => 'services/marketing/cpi.jpg',
				'8' => 'services/marketing/roi.jpg',
				'9' => 'services/marketing/ppc.jpg',
				'10' => 'services/marketing/kpi.png',
				'page' => 'services/marketing/marketing.png'
			),
			'developper' => array(
				'1' => 'services/developper/developper.jpg',
				'2' => 'services/developper/dev-framework.png',
				'3' => 'services/developper/dev-web.jpg',
				'4' => 'services/developper/dev-mobile.jpg',
				'5' => 'services/developper/dev-gaming.jpg'
			),
			'seo' => array(
				'1' => 'services/seo/search-engine.jpg',
				'2' => 'services/seo/community-manager.jpg',
				'3' => 'services/seo/local-business.jpg',
				'4' => 'services/seo/association.jpg'
			),
			'consultant' => array(
				'1' => 'services/consultant/Consultant-strategie.jpg',
				'2' => 'services/consultant/Consultant-management.jpg',
				'3' => 'services/consultant/Consultant-informatique.jpg',
				'4' => 'services/consultant/Consultant-marketing.jpg',
				'5' => 'services/consultant/Consultant-finance.jpg',
				'6' => 'services/consultant/assistant-informatique.jpg',
				'salp' => 'services/consultant/salp.png'
			),
			'webmaster' => array(
				'1' => 'services/webmaster/site-vitrine.jpg',
				'2' => 'services/webmaster/blog.jpg',
				'3' => 'services/webmaster/shop.jpg',
				'4' => 'services/webmaster/lms.jpg',
				'5' => 'services/webmaster/freelancer.jpg',
				'6' => 'services/webmaster/booking.jpg',
				'7' => 'services/webmaster/social.jpg',
			)
			/*Custom your own*/
		),
		'partner' => array(
			'page' => 'partner/partner.jpg',
			'1' => 'partner/logo-indy-new.svg',
			'2' => 'partner/planethoster-logo.png',
			'3' => 'partner/logo-assurup.svg',
			'4' => 'partner/uber.jpg',
			'5' => 'partner/',
			'6' => 'partner/',
			'7' => 'partner/',
			'8' => 'partner/',
			'9' => 'partner/',
			'10' => 'partner/',
			'11' => 'partner/',
			'12' => 'partner/',
			'13' => 'partner/',
			'14' => 'partner/',
			'15' => 'partner/',
			'16' => 'partner/',
			'17' => 'partner/',
			'18' => 'partner/',
			'19' => 'partner/',
			'20' => 'partner/'
		)
	),
	'dir' => 'images'
);

$JE_images = json_encode($images);

?>