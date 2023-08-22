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

#Google Captcha:
//$GRecaptcha = new \ReCaptcha\ReCaptcha($apiexternal['captcha']['google']['secret']);
//$Gresponse = $GRecaptcha->setExpectedHostname($domainTLD)->verify($GRecaptchaResponse, IpHelper::getIp());

# anti spam with HCAPTCHA
//$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$apiexternal['captcha']['hcaptcha']['private'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
//$hcaptcha_RData = json_decode($hcaptcha_VResponse);

/*
$data = array(
            'secret' => $apiexternal['captcha']['hcaptcha']['secret'],
            'response' => $_POST['h-captcha-response']
        );
$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);

// var_dump($response);
$responseData = json_decode($response);
if($responseData->success) {
    // your success code goes here
} 
else {
   // return error to user; they did not pass
}
*/


#frontend
if(isset($_GET[$DefineTranslateLang])){
    if($_GET[$DefineTranslateLang] == 'aboutus'){
		$title = $general['aboutus']['title'];
		$description = $general['aboutus']['description'];
		$keyword = $general['aboutus']['keyword'];
		//$urls = $general['aboutus']['url']['default'];
		$imgs = $general['aboutus']['sitemap']['images'];
		$vdos = $general['aboutus']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$general['aboutus']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $general['aboutus']['url']['default'];
		}
	
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/aboutus.php');
		include('themes/'.$sites['template'].'/footer.php');

	} else if($_GET[$DefineTranslateLang] == 'teams'){
		$title = $teams['index']['title'];
		$description = $teams['index']['description'];
		$keyword = $teams['index']['keyword'];
		//$urls = $teams['index']['url']['default'];
		$imgs = $teams['index']['sitemap']['images'];
		$vdos = $teams['index']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$teams['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $teams['index']['url']['default'];
		}
	
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/teams.php');
		include('themes/'.$sites['template'].'/footer.php');

	} else if($_GET[$DefineTranslateLang] == 'partner'){
		/**########## PARTNER DIR ##########**/	
		$title = $partner['index']['title'];
		$description = $partner['index']['description'];
		$keyword = $partner['index']['keyword'];
		//$urls = $partner['index']['url']['default'];
		$imgs = $partner['index']['sitemap']['images'];
		$vdos = $partner['index']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$partner['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $partner['index']['url']['default'];
		}
	
		
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/partner/full.php');
		include('themes/'.$sites['template'].'/footer.php');
	} else {

		header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]);
	}
} else if(isset($_GET['pages'])){
    if($_GET['pages'] == 'aboutus'){
		$title = $general['aboutus']['title'];
		$description = $general['aboutus']['description'];
		$keyword = $general['aboutus']['keyword'];
		//$urls = $general['aboutus']['url']['default'];
		$imgs = $general['aboutus']['sitemap']['images'];
		$vdos = $general['aboutus']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$general['aboutus']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $general['aboutus']['url']['default'];
		}
	
		
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/aboutus.php');
		include('themes/'.$sites['template'].'/footer.php');

	} else if($_GET['pages'] == 'teams'){
		$title = $teams['index']['title'];
		$description = $teams['index']['description'];
		$keyword = $teams['index']['keyword'];
		//$urls = $teams['index']['url']['default'];
		$imgs = $teams['index']['sitemap']['images'];
		$vdos = $teams['index']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$teams['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $teams['index']['url']['default'];
		}
	
		
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/teams.php');
		include('themes/'.$sites['template'].'/footer.php');

	} else if($_GET['pages'] == 'partner'){
		/**########## PARTNER DIR ##########**/	
		$title = $partner['index']['title'];
		$description = $partner['index']['description'];
		$keyword = $partner['index']['keyword'];
		//$urls = $partner['index']['url']['default'];
		$imgs = $partner['index']['sitemap']['images'];
		$vdos = $partner['index']['sitemap']['video'];


		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$partner['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $partner['index']['url']['default'];
		}
	
		
		
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/partner/full.php');
		include('themes/'.$sites['template'].'/footer.php');
	} else {

		header('Location: '.$protocols.'://'.$domainTLD.'/'.$general['index']['url']['default']);
	}
} else { 
    header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]);
}

?>