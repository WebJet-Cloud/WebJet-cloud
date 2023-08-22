<?php
# Check out if have error and fix
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/autoload.php';
#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

#Decode
$sites = json_decode($JE_sites, true);
$translate = json_decode($JE_translate, true);
$credits = json_decode($JE_credits, true);
$private = json_decode($JE_private, true);
$seo = json_decode($JE_seo, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$apiexternal = json_decode($JE_apiexternal, true);
$images = json_decode($JE_images, true);
$business = json_decode($JE_business, true);
$PhoneRegionCodeManualNumbers = json_decode($JE_PhoneRegionCodeManualNumbers, true);
/*
#Supplémentaire
$markets = json_decode($JE_markets, true);
$restaurant = json_decode($JE_restaurant, true);
*/


#Syslink
$protocols = $sites['protocol'];
$CDNdomainTLD = (!empty($sites['sub-domain']) ? $sites['sub-domain'] : $sites['domain']);
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);

#auto translate
$browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : $translate['meta']['lang']['FR'];
$Languages_translate = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 0,2) : $translate['manual']['frontend']['french'];
$phone_langs = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($browser_lang, 3,4) : $translate['manual']['backend']['french'];
$meta_langs = $browser_lang;


#Configuration
$lang_finales = 'languages/'.$Languages_translate.'/general.php';
if (file_exists($lang_finales)) {
	foreach (glob('languages/'.$Languages_translate.'/*.php') as $GlobLangAuto) { include_once $GlobLangAuto; }
	$DefineMajLang = strtoupper($Languages_translate);
	$DefineTranslateLang = $Languages_translate;
} else {
	foreach (glob('languages/'.$translate['manual']['frontend']['french'].'/*.php') as $GlobLangManual) { include_once $GlobLangManual; }
	$DefineMajLang = strtoupper($translate['manual']['frontend']['french']);
	$DefineTranslateLang = $translate['manual']['frontend']['french'];
}

#Translate
$general = json_decode($JE_translate_general, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$phone_results = json_decode($JE_translate_phone_results, true);
#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

use Joomla\Utilities\IpHelper;

#LibPhoneNumber-for-php - check only
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberToCarrierMapper;
use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberFormat;

$PhoneNumberUtil = PhoneNumberUtil::getInstance();
$PhoneNumberCarrierMapper = PhoneNumberToCarrierMapper::getInstance();
$PhoneNumberGeocoder = PhoneNumberOfflineGeocoder::getInstance();

use VisualAppeal\SslLabs;
$api = new SslLabs(true);
$JE_DSslLabsOut = $api->analyze($protocols.'://'.$domainTLD);


#frontend
if(isset($_GET[$DefineTranslateLang])){

	if($_GET[$DefineTranslateLang] == 'index'){
		$title = $general['index']['title'];
		$description = $general['index']['description'];
		$keyword = $general['index']['keyword'];
		//$urls = $general['index']['url']['default'];
		$imgs = $general['index']['sitemap']['images'];
		$vdos = $general['index']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $general['index']['url']['default'];
		}
	
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/home.php');
		include('themes/'.$sites['template'].'/footer.php');
	} else {
		header($protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]);
	}
} else if(isset($_GET['pages'])){
	if($_GET['pages'] == 'success'){
		/**########## EMAIL - RECEIVE SUCCESS / BLOCK DIR ##########**/	
			$title = $block['success']['title'];
			$description = $block['success']['description'];
			$keyword = $block['success']['keyword'];
			//$urls = $block['success']['url']['default'];
			$imgs = $block['success']['sitemap']['images'];
			$vdos = $block['success']['sitemap']['video'];

			if(!empty($DefineTranslateLang)){ 
				$urls = $DefineTranslateLang.'/'.$block['success']['url'][$DefineTranslateLang]; 
			} else { 
				$urls = $block['success']['url']['default'];
			}
		
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/success.php');
			include('themes/'.$sites['template'].'/footer.php');
	} else if($_GET['pages'] == 'error'){
		/**########## ERROR PAGE/EMAIL / BLOCK DIR ##########**/	
			$title = $block['error']['title'];
			$description = $block['error']['description'];
			$keyword = $block['error']['keyword'];
			//$urls = $block['error']['url']['default'];
			$imgs = $block['error']['sitemap']['images'];
			$vdos = $block['error']['sitemap']['video'];

			if(!empty($DefineTranslateLang)){ 
				$urls = $DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]; 
			} else { 
				$urls = $block['error']['url']['default'];
			}
		
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/error.php');
			include('themes/'.$sites['template'].'/footer.php');	
	} else {
		header($protocols.'://'.$domainTLD.'/'.$general['index']['url']['default']);
	}

} else {
	$title = $general['index']['title'];
	$description = $general['index']['description'];
	$keyword = $general['index']['keyword'];
	//$urls = $general['index']['url']['default'];
	$imgs = $general['index']['sitemap']['images'];
	$vdos = $general['index']['sitemap']['video'];

	if(!empty($DefineTranslateLang)){ 
		$urls = $DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]; 
	} else { 
		$urls = $general['index']['url']['default'];
	}

	include('themes/'.$sites['template'].'/header.php');
	include_once('themes/'.$sites['template'].'/general/home.php');
	include('themes/'.$sites['template'].'/footer.php');	
}

?>