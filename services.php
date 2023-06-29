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
$marketing = json_decode($JE_marketing, true);
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
$partner = json_decode($JE_translate_partner, true);
$sponsor = json_decode($JE_translate_sponsor, true);
$law = json_decode($JE_translate_law, true);
$email = json_decode($JE_translate_email, true);
$block = json_decode($JE_translate_block, true);
$sitemap = json_decode($JE_translate_sitemap, true);
$phone_results = json_decode($JE_translate_phone_results, true);
$teams = json_decode($JE_translate_teams, true);
$services = json_decode($JE_translate_services, true);

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
			if($_GET[$DefineTranslateLang] == 'cybersecurity'){
				$title = $services['cybersecurity']['title'];
				$description = $services['cybersecurity']['description'];
				$keyword = $services['cybersecurity']['keyword'];
				//$urls = $services['cybersecurity']['url']['default'];
				$imgs = $services['cybersecurity']['sitemap']['images'];
				$vdos = $services['cybersecurity']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['cybersecurity']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['cybersecurity']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/cybersecurity.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET[$DefineTranslateLang] == 'marketing'){
				$title = $services['marketing']['title'];
				$description = $services['marketing']['description'];
				$keyword = $services['marketing']['keyword'];
				//$urls = $services['marketing']['url']['default'];
				$imgs = $services['marketing']['sitemap']['images'];
				$vdos = $services['marketing']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['marketing']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['marketing']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/marketing.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET[$DefineTranslateLang] == 'webmaster'){
				$title = $services['webmaster']['title'];
				$description = $services['webmaster']['description'];
				$keyword = $services['webmaster']['keyword'];
				//$urls = $services['webmaster']['url']['default'];
				$imgs = $services['webmaster']['sitemap']['images'];
				$vdos = $services['webmaster']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['webmaster']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['webmaster']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/webmaster.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET[$DefineTranslateLang] == 'developper'){
				$title = $services['developper']['title'];
				$description = $services['developper']['description'];
				$keyword = $services['developper']['keyword'];
				//$urls = $services['developper']['url']['default'];
				$imgs = $services['developper']['sitemap']['images'];
				$vdos = $services['developper']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['developper']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['developper']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/developper.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET[$DefineTranslateLang] == 'seo'){
				$title = $services['seo']['title'];
				$description = $services['seo']['description'];
				$keyword = $services['seo']['keyword'];
				//$urls = $services['seo']['url']['default'];
				$imgs = $services['seo']['sitemap']['images'];
				$vdos = $services['seo']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['seo']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['seo']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/seo.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET[$DefineTranslateLang] == 'consulting'){
				$title = $services['consulting']['title'];
				$description = $services['consulting']['description'];
				$keyword = $services['consulting']['keyword'];
				//$urls = $services['consulting']['url']['default'];
				$imgs = $services['consulting']['sitemap']['images'];
				$vdos = $services['consulting']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['consulting']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['consulting']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/consulting.php');
				include('themes/'.$sites['template'].'/footer.php');
			} else if($_GET[$DefineTranslateLang] == 'sap'){
				$title = $services['sap']['title'];
				$description = $services['sap']['description'];
				$keyword = $services['sap']['keyword'];
				//$urls = $services['sap']['url']['default'];
				$imgs = $services['sap']['sitemap']['images'];
				$vdos = $services['sap']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['sap']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['sap']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/sap.php');
				include('themes/'.$sites['template'].'/footer.php');
			} else if($_GET[$DefineTranslateLang] == 'index'){
                $title = $general['services']['title'];
                $description = $general['services']['description'];
                $keyword = $general['services']['keyword'];
                //$urls = $general['services']['url']['default'];
                $imgs = $general['services']['sitemap']['images'];
                $vdos = $general['services']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $general['services']['url']['default'];
				}
			
				
                include('themes/'.$sites['template'].'/header.php');
                include_once('themes/'.$sites['template'].'/general/services.php');
                include('themes/'.$sites['template'].'/footer.php');
			} else {
				header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]);
			}
        } else if(isset($_GET['pages'])){
			if($_GET['pages'] == 'cybersecurity'){
				$title = $services['cybersecurity']['title'];
				$description = $services['cybersecurity']['description'];
				$keyword = $services['cybersecurity']['keyword'];
				//$urls = $services['cybersecurity']['url']['default'];
				$imgs = $services['cybersecurity']['sitemap']['images'];
				$vdos = $services['cybersecurity']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['cybersecurity']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['cybersecurity']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/cybersecurity.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'marketing'){
				$title = $services['marketing']['title'];
				$description = $services['marketing']['description'];
				$keyword = $services['marketing']['keyword'];
				//$urls = $services['marketing']['url']['default'];
				$imgs = $services['marketing']['sitemap']['images'];
				$vdos = $services['marketing']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['marketing']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['marketing']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/marketing.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'webmaster'){
				$title = $services['webmaster']['title'];
				$description = $services['webmaster']['description'];
				$keyword = $services['webmaster']['keyword'];
				//$urls = $services['webmaster']['url']['default'];
				$imgs = $services['webmaster']['sitemap']['images'];
				$vdos = $services['webmaster']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['webmaster']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['webmaster']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/webmaster.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'developper'){
				$title = $services['developper']['title'];
				$description = $services['developper']['description'];
				$keyword = $services['developper']['keyword'];
				//$urls = $services['developper']['url']['default'];
				$imgs = $services['developper']['sitemap']['images'];
				$vdos = $services['developper']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['developper']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['developper']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/developper.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'seo'){
				$title = $services['seo']['title'];
				$description = $services['seo']['description'];
				$keyword = $services['seo']['keyword'];
				//$urls = $services['seo']['url']['default'];
				$imgs = $services['seo']['sitemap']['images'];
				$vdos = $services['seo']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['seo']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['seo']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/seo.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['pages'] == 'consulting'){
				$title = $services['consulting']['title'];
				$description = $services['consulting']['description'];
				$keyword = $services['consulting']['keyword'];
				//$urls = $services['consulting']['url']['default'];
				$imgs = $services['consulting']['sitemap']['images'];
				$vdos = $services['consulting']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['consulting']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['consulting']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/consulting.php');
				include('themes/'.$sites['template'].'/footer.php');
			} else if($_GET['pages'] == 'sap'){
				$title = $services['sap']['title'];
				$description = $services['sap']['description'];
				$keyword = $services['sap']['keyword'];
				//$urls = $services['sap']['url']['default'];
				$imgs = $services['sap']['sitemap']['images'];
				$vdos = $services['sap']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$services['sap']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $services['sap']['url']['default'];
				}
			
				
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/services/sap.php');
				include('themes/'.$sites['template'].'/footer.php');
			} else if($_GET['pages'] == 'index'){
                $title = $general['services']['title'];
                $description = $general['services']['description'];
                $keyword = $general['services']['keyword'];
                //$urls = $general['services']['url']['default'];
                $imgs = $general['services']['sitemap']['images'];
                $vdos = $general['services']['sitemap']['video'];


				if(!empty($DefineTranslateLang)){ 
					$urls = $DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]; 
				} else { 
					$urls = $general['services']['url']['default'];
				}
			
				
                include('themes/'.$sites['template'].'/header.php');
                include_once('themes/'.$sites['template'].'/general/services.php');
                include('themes/'.$sites['template'].'/footer.php');
			} else {
				header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]);
			}
        } else {
				header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]);
 		}

?>