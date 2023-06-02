<?php
# Check out if have error and fix
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

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
$partner = json_decode($JE_partner, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$videos = json_decode($JE_videos, true);
$marketing = json_decode($JE_marketing, true);
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
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);
$teams = json_decode($JE_translate_teams, true);

#Email contact form PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

use Joomla\Utilities\IpHelper;

# anti spam with HCAPTCHA
/*
$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$seo['hcaptcha']['private-key'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
$hcaptcha_RData = json_decode($hcaptcha_VResponse);
*/

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
if(isset($_GET['lang'])){
	if($_GET['lang'] == $DefineTranslateLang){
		if(isset($_GET['pages'])){
			if($_GET['pages'] == 'index'){
				$title = $general['index']['title'];
				$description = $general['index']['description'];
				$keyword = $general['index']['keyword'];
				$urls = $general['index']['url'][$DefineTranslateLang];
				$imgs = $general['index']['sitemap']['images'];
				$vdos = $general['index']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header-fix.php');
				include_once('themes/'.$sites['template'].'/general/home.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'aboutus'){
				$title = $general['aboutus']['title'];
				$description = $general['aboutus']['description'];
				$keyword = $general['aboutus']['keyword'];
				$urls = $general['aboutus']['url'][$DefineTranslateLang];
				$imgs = $general['aboutus']['sitemap']['images'];
				$vdos = $general['aboutus']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$general['aboutus']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/general/aboutus.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'services'){
				if(isset($_GET['activities'])){
					if($_GET['activities'] == 'cybersecurity'){
						$title = $services['cybersecurity']['title'];
						$description = $services['cybersecurity']['description'];
						$keyword = $services['cybersecurity']['keyword'];
						$urls = $services['cybersecurity']['url'][$DefineTranslateLang];
						$imgs = $services['cybersecurity']['sitemap']['images'];
						$vdos = $services['cybersecurity']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['cybersecurity']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/cybersecurity.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['activities'] == 'marketing'){
						$title = $services['marketing']['title'];
						$description = $services['marketing']['description'];
						$keyword = $services['marketing']['keyword'];
						$urls = $services['marketing']['url'][$DefineTranslateLang];
						$imgs = $services['marketing']['sitemap']['images'];
						$vdos = $services['marketing']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['marketing']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/marketing.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['activities'] == 'webmaster'){
						$title = $services['webmaster']['title'];
						$description = $services['webmaster']['description'];
						$keyword = $services['webmaster']['keyword'];
						$urls = $services['webmaster']['url'][$DefineTranslateLang];
						$imgs = $services['webmaster']['sitemap']['images'];
						$vdos = $services['webmaster']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['webmaster']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/webmaster.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['activities'] == 'developper'){
						$title = $services['developper']['title'];
						$description = $services['developper']['description'];
						$keyword = $services['developper']['keyword'];
						$urls = $services['developper']['url'][$DefineTranslateLang];
						$imgs = $services['developper']['sitemap']['images'];
						$vdos = $services['developper']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['developper']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/developper.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['activities'] == 'seo'){
						$title = $services['seo']['title'];
						$description = $services['seo']['description'];
						$keyword = $services['seo']['keyword'];
						$urls = $services['seo']['url'][$DefineTranslateLang];
						$imgs = $services['seo']['sitemap']['images'];
						$vdos = $services['seo']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['seo']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/seo.php');
						include('themes/'.$sites['template'].'/footer.php');	
					} else if($_GET['activities'] == 'consulting'){
						$title = $services['consulting']['title'];
						$description = $services['consulting']['description'];
						$keyword = $services['consulting']['keyword'];
						$urls = $services['consulting']['url'][$DefineTranslateLang];
						$imgs = $services['consulting']['sitemap']['images'];
						$vdos = $services['consulting']['sitemap']['video'];
						define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$services['consulting']['url'][$DefineTranslateLang]);
						include('themes/'.$sites['template'].'/header.php');
						include_once('themes/'.$sites['template'].'/services/consulting.php');
						include('themes/'.$sites['template'].'/footer.php');
					} else {
						header('Location: '.$protocols.'://'.$domainTLD.'/'.$general['services']['url'][$DefineTranslateLang]);
					}
				} else {
					$title = $general['services']['title'];
					$description = $general['services']['description'];
					$keyword = $general['services']['keyword'];
					$urls = $general['services']['url']['default'];
					$imgs = $general['services']['sitemap']['images'];
					$vdos = $general['services']['sitemap']['video'];
					define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]);
					include('themes/'.$sites['template'].'/header.php');
					include_once('themes/'.$sites['template'].'/general/services.php');
					include('themes/'.$sites['template'].'/footer.php');
				}
		
			} else if($_GET['pages'] == 'teams'){
				$title = $teams['index']['title'];
				$description = $teams['index']['description'];
				$keyword = $teams['index']['keyword'];
				$urls = $teams['index']['url'][$DefineTranslateLang];
				$imgs = $teams['index']['sitemap']['images'];
				$vdos = $teams['index']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$teams['index']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/general/teams.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else {
				header('Location: '.$protocols.'://'.$domainTLD);
				exit();
			}
		} else {
			header('Location: '.$protocols.'://'.$domainTLD);
			exit();
		}
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		exit();
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
	exit();
}

?>