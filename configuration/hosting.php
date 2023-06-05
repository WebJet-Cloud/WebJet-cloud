<?php
# $hosting['server']['external']['cloud']['site']
# $hosting['server']['internal']['site']
# $hosting['dl']['certifier-recipise']['site']
$hosting = array(
	'dl' => array(
		'prest-contract' => 'dl/',
		'certifier-recipise' => 'docs/'
	),
	'server' => array(
		'internal' => array(
			'name' => 'PlanetHoster',
			'siret' => '',
			'tva' => '',
			'vat' => '',
			'address' => '4416 Louis B. Mayer',
			'postal' => 'H7P 0G1',
			'city' => 'Laval (Québec)',
			'contry' => 'Canada',
			'site' => 'planethoster.com'
		),
		'external' => array(
			'cloud' => array(
				'google' => array(
					'name' => '', /*Google exemple*/
					'siret' => '',
					'tva' => '',
					'vat' => '',
					'address' => '1600 Amphitheatre Parkway',
					'postal' => 'CA 94043',
					'city' => 'Montain View',
					'contry' => 'Etat-Unis',
					'site' => 'google.com'
				)
			),
			'cdn' => array(
				'cloudflare' => array(
					'name' => '', /*Cloudflare exemple*/
					'siret' => '',
					'tva' => '',
					'vat' => '',
					'address' => 'Riverside Building, 6th Floor, County Hall/The, Belvedere Rd',
					'postal' => 'SE1 7PB',
					'city' => 'London',
					'contry' => 'Royaume-Uni',
					'site' => 'cloudflare.com'
				)
			)
		)
	)
);

$JE_hosting = json_encode($hosting);

?>