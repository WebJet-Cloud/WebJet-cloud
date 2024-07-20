<?php 

$Security = array(
	'hcaptcha' => array(
        'public' => '',
        'private' => ''
    ),
    'recaptcha' => array(
        'public' => '',
        'private' => ''
    ),
);

$JSecurity = json_encode($Security);

?>