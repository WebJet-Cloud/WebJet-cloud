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

	if($_GET['pages'] == 'legal-notice'){
		$title = $i18n->get("rules_ln_title[legal_notice]");
		$description = $i18n->get("rules_ln_description[legal_notice]");
		$keyword = $i18n->get("rules_ln_keyword[legal_notice]");
		$urls = $i18n->get("rules_ln_url[legal_notice]");
		$imgs = 'images.jpg';

		include('templates/header.php');
		include_once('templates/rules/legal-notice.php');
		include('templates/footer.php');
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
}




?>