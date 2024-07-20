<?php 
# Check out if have error and fix
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/autoload.php';
#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

#translate
use i18n\i18n;
$i18n = new i18n(true, "en", ["en", "fr"]);


#Syslink
$protocols = $sites['protocol'];
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);


#frontend
if(isset($_GET['pages'])){

	if($_GET['pages'] == 'index'){
		$title = $i18n->get("index_homes_title[pages]");
		$description = $i18n->get("index_homes_description[pages]");
		$keyword = $i18n->get("index_homes_keyword[pages]");
		$urls = $i18n->get("index_homes_url[pages]");
		$imgs = 'images.jpg';

		include('templates/header.php');
		include_once('templates/general/home.php');
		include('templates/footer.php');
	}
} else {
	$title = $i18n->get("index_homes_title[pages]");
	$description = $i18n->get("index_homes_description[pages]");
	$keyword = $i18n->get("index_homes_keyword[pages]");
	$urls = $i18n->get("index_homes_url[pages]");
	$imgs = 'images.jpg';

	include('templates/header.php');
	include_once('templates/general/home.php');
	include('templates/footer.php');
}




?>