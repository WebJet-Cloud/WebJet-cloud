<?php
# $phone_results['switch']['icon']
$phone_results = array(
	'switch' => array(
		'FIXED-LINE' => 'ФИКСИРОВАННАЯ ЛИНИЯ',
		'MOBILE' => 'МОБИЛЬНЫЙ',
		'FIXED-LINE-OR-MOBILE' => 'ФИКСИРОВАННАЯ ИЛИ МОБИЛЬНАЯ ЛИНИЯ',
		'TOLL-REE' => 'БЕЗ ПЛАТЫ',
		'PREMIUM-RATE' => 'ПРЕМИАЛЬНАЯ СТАВКА',
		'SHARED-COST' => 'ОБЩАЯ СТОИМОСТЬ',
		'VOIP' => 'VOIP',
		'PERSONAL NUMBER' => 'ПЕРСОНАЛЬНЫЙ НОМЕР',
		'PAGER' => 'БИПЕР',
		'UAN' => 'КАС',
		'UNKNOWN' => 'НЕИЗВЕСТНЫЙ',
		'EMERGENCY' => 'ЧРЕЗВЫЧАЙНОЕ ПРОИСШЕСТВИЕ',
		'VOICEMAIL' => 'ГОЛОСОВАЯ ПОЧТА',
		'SHORT-CODE' => 'МАЛЕНЬКИЙ КОД',
		'STANDARD RATE' => 'СТАНДАРТНЫЙ КУРС'
	),
	'true' => array(
		'icon' => '<i class="fas fa-check fa-3x"></i>',
		'text' => 'Правильный'
	),
	'false' => array(
		'icon' => '<i class="fas fa-ban fa-3x"></i>',
		'text' => 'Ложь'
	)
);

$JE_translate_phone_results = json_encode($phone_results);

?>