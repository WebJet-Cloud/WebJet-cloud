<?php
#TESTING
$protocols_v = isset($_SERVER["HTTPS"]) ? 'https' : 'http';


$cdn_vendor = $protocols_v.'://cdnjs.cloudflare.com/ajax/libs/'; #cdnjs by Cloudflare (vendor directories)
#host external

# IF USING CDN (sub-domain on configuration/site) take out assets/
$local_vendor = 'assets/vendor/';
$local_libs = 'libs/';
$local_custom = 'custom/';
$local_production = 'production/';
$local_combined = 'combined/';

# $version["internal"]["custom"]["css"][$sites["template"]]

$version = array(
	'internal' => array(),
	'external' => array(),
	'vendor' => array(),
	'custom' => array(),
	'production' => array(),
	'combined' => array()
);

$JE_version = json_encode($version);

?>