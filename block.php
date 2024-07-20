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

	if($_GET['pages'] == 'success'){
		$title = $i18n->get("block_success_title[block]");
		$description = $i18n->get("block_success_description[block]");
		$keyword = $i18n->get("block_success_keyword[block]");
		$urls = $i18n->get("block_success_url[block]");
		$imgs = 'images.jpg';

		include('templates/header.php');
		include_once('templates/block/success.php');
		include('templates/footer.php');
	} else if($_GET['pages'] == 'error'){
		$title = $i18n->get("block_error_title[block]");
		$description = $i18n->get("block_error_description[block]");
		$keyword = $i18n->get("block_error_keyword[block]");
		$urls = $i18n->get("block_error_url[block]");
		$imgs = 'images.jpg';

		include('templates/header.php');
		include_once('templates/block/error.php');
		include('templates/footer.php');
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
}




?>