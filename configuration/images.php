<?php

$images = array(
	'manager' => array(
		'logo' => array(
			'creator' => 'copyright/moi-creator-alexonb.png',
			'icon' => 'copyright/webjetclouds-logo.png', /*ICO recommended oversize */
			'normal' => 'copyright/webjetclouds-logo.png', /*size recommended ~60x60 */
			'small' => 'copyright/webjetclouds-logo.png', /*size recommended ~32x32 = favicon on PNG */
			'big' => 'copyright/webjetclouds-logo.png' /*size recommended ~200x200 */
		),
		/*Manager Images for SEO PINNED (Windows, Apple, Android/Safari, chrome) */
		'pinned' => array(
			's:70x70' => 'copyright/webjetclouds-logo.png',
			's:150x150' => 'copyright/webjetclouds-logo.png',
			's:310x310' => 'copyright/webjetclouds-logo.png',
			's:310x150' => 'copyright/webjetclouds-logo.png',
			's:192x192' => 'copyright/webjetclouds-logo.png',
			'safari' => 'copyright/webjetclouds-logo.png',
			's:144x144' => 'copyright/webjetclouds-logo.png',
			's:180x180' => 'copyright/webjetclouds-logo.png',
			's:32x32' => 'copyright/webjetclouds-logo.png',
			's:16x16' => 'copyright/webjetclouds-logo.png',
			's:57x57' => 'copyright/webjetclouds-logo.png',
			's:60x60' => 'copyright/webjetclouds-logo.png',
			's:72x72' => 'copyright/webjetclouds-logo.png',
			's:76x76' => 'copyright/webjetclouds-logo.png',
			's:114x114' => 'copyright/webjetclouds-logo.png',
			's:120x120' => 'copyright/webjetclouds-logo.png',
			's:152x152' => 'copyright/webjetclouds-logo.png'
		),
	),
	'dir' => 'images'
);

$JE_images = json_encode($images);

?>