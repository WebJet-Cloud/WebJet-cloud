<?php
# exemple $images['dir']
# exemple $images['manager']['services']['consultant']['']

$images = array(
	'manager' => array(
		/*Manager Images for Template */
		'logo' => array(
			'creator' => 'themes/moi-creator-alexonb.png',
			'icon' => 'pinned/favicon.ico', /*ICO recommended oversize */
			'normal' => 'themes/logo-normal.png', /*size recommended ~60x60 */
			'small' => 'pinned/favicon-32x32.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => 'themes/logo-big.png' /*size recommended ~200x200 */
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
		/*Manager Images */
		'services' => array(
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
				'6' => 'services/consultant/assistant-informatique.jpg'
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
		)
	),
	'dir' => 'images'
);

$JE_images = json_encode($images);

?>