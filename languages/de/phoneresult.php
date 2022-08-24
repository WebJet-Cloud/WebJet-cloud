<?php
# $phone_results['switch']['icon']
$phone_results = array(
	'switch' => array(
		'FIXED-LINE' => 'FESTE LINIE',
		'MOBILE' => 'HANDY, MOBILTELEFON',
		'FIXED-LINE-OR-MOBILE' => 'FESTE ODER MOBILE LEITUNG',
		'TOLL-REE' => 'OHNE MAUT',
		'PREMIUM-RATE' => 'PREMIUM-RATE',
		'SHARED-COST' => 'GETEILTE KOSTEN',
		'VOIP' => 'VOIP',
		'PERSONAL NUMBER' => 'PERSÖNLICHE NUMMER',
		'PAGER' => 'PIEPSER',
		'UAN' => 'UAN',
		'UNKNOWN' => 'UNBEKANNT',
		'EMERGENCY' => 'NOTFALL',
		'VOICEMAIL' => 'VOICEMAIL',
		'SHORT-CODE' => 'KLEINER CODE',
		'STANDARD RATE' => 'NORMALSATZ'
	),
	'true' => array(
		'icon' => '<i class="fas fa-check fa-3x"></i>',
		'text' => 'Richtig'
	),
	'false' => array(
		'icon' => '<i class="fas fa-ban fa-3x"></i>',
		'text' => 'Falsch'
	)
);

$JE_translate_phone_results = json_encode($phone_results);

?>