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
$partner = json_decode($JE_partner, true);
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$videos = json_decode($JE_videos, true);
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
    if($_GET[$DefineTranslateLang] == 'cgu'){
        $title = $law['cgu']['title'];
        $description = $law['cgu']['description'];
        $keyword = $law['cgu']['keyword'];
        $urls = $law['cgu']['url']['default'];
        $imgs = $law['cgu']['sitemap']['images'];
        $vdos = $law['cgu']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cgu']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cgu']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cgu']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cgu']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cgu.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'cgv'){
        $title = $law['cgv']['title'];
        $description = $law['cgv']['description'];
        $keyword = $law['cgv']['keyword'];
        $urls = $law['cgv']['url']['default'];
        $imgs = $law['cgv']['sitemap']['images'];
        $vdos = $law['cgv']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cgv']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cgv']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cgv']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cgv']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cgv.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'dmca'){
        $title = $law['dmca']['title'];
        $description = $law['dmca']['description'];
        $keyword = $law['dmca']['keyword'];
        $urls = $law['dmca']['url']['default'];
        $imgs = $law['dmca']['sitemap']['images'];
        $vdos = $law['dmca']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['dmca']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$$law['dmca']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$$law['dmca']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$$law['dmca']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/dmca.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'legal'){
        $title = $law['legal']['title'];
        $description = $law['legal']['description'];
        $keyword = $law['legal']['keyword'];
        $urls = $law['legal']['url']['default'];
        $imgs = $law['legal']['sitemap']['images'];
        $vdos = $law['legal']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['legal']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['legal']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['legal']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['legal']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/legal.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'policy-privacy'){
        $title = $law['policy-privacy']['title'];
        $description = $law['policy-privacy']['description'];
        $keyword = $law['policy-privacy']['keyword'];
        $urls = $law['policy-privacy']['url']['default'];
        $imgs = $law['policy-privacy']['sitemap']['images'];
        $vdos = $law['policy-privacy']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['policy-privacy']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['policy-privacy']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['policy-privacy']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['policy-privacy']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'cookies'){
        $title = $law['cookies']['title'];
        $description = $law['cookies']['description'];
        $keyword = $law['cookies']['keyword'];
        $urls = $law['cookies']['url']['default'];
        $imgs = $law['cookies']['sitemap']['images'];
        $vdos = $law['cookies']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cookies']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cookies']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cookies']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cookies']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cookies.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'rgpd'){
        $title = $law['rgpd']['title'];
        $description = $law['rgpd']['description'];
        $keyword = $law['rgpd']['keyword'];
        $urls = $law['rgpd']['url']['default'];
        $imgs = $law['rgpd']['sitemap']['images'];
        $vdos = $law['rgpd']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['rgpd']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['rgpd']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['rgpd']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['rgpd']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/rgpd.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET[$DefineTranslateLang] == 'index'){
		/**########## LAW DIR ##########**/	
        $title = $law['pages']['title'];
        $description = $law['pages']['description'];
        $keyword = $law['pages']['keyword'];
        $urls = $law['pages']['url']['default'];
        $imgs = $law['pages']['sitemap']['images'];
        $vdos = $law['pages']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['pages']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['pages']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['pages']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['pages']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/full.php');
        include('themes/'.$sites['template'].'/footer.php');
    } else {

        header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$law['pages']['url'][$DefineTranslateLang]);

    }
} else if(isset($_GET['pages'])){
    if($_GET['pages'] == 'cgu'){
        $title = $law['cgu']['title'];
        $description = $law['cgu']['description'];
        $keyword = $law['cgu']['keyword'];
        $urls = $law['cgu']['url']['default'];
        $imgs = $law['cgu']['sitemap']['images'];
        $vdos = $law['cgu']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cgu']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cgu']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cgu']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cgu']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cgu.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'cgv'){
        $title = $law['cgv']['title'];
        $description = $law['cgv']['description'];
        $keyword = $law['cgv']['keyword'];
        $urls = $law['cgv']['url']['default'];
        $imgs = $law['cgv']['sitemap']['images'];
        $vdos = $law['cgv']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cgv']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cgv']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cgv']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cgv']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cgv.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'dmca'){
        $title = $law['dmca']['title'];
        $description = $law['dmca']['description'];
        $keyword = $law['dmca']['keyword'];
        $urls = $law['dmca']['url']['default'];
        $imgs = $law['dmca']['sitemap']['images'];
        $vdos = $law['dmca']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['dmca']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$$law['dmca']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$$law['dmca']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$$law['dmca']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/dmca.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'legal'){
        $title = $law['legal']['title'];
        $description = $law['legal']['description'];
        $keyword = $law['legal']['keyword'];
        $urls = $law['legal']['url']['default'];
        $imgs = $law['legal']['sitemap']['images'];
        $vdos = $law['legal']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['legal']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['legal']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['legal']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['legal']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/legal.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'policy-privacy'){
        $title = $law['policy-privacy']['title'];
        $description = $law['policy-privacy']['description'];
        $keyword = $law['policy-privacy']['keyword'];
        $urls = $law['policy-privacy']['url']['default'];
        $imgs = $law['policy-privacy']['sitemap']['images'];
        $vdos = $law['policy-privacy']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['policy-privacy']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['policy-privacy']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['policy-privacy']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['policy-privacy']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'cookies'){
        $title = $law['cookies']['title'];
        $description = $law['cookies']['description'];
        $keyword = $law['cookies']['keyword'];
        $urls = $law['cookies']['url']['default'];
        $imgs = $law['cookies']['sitemap']['images'];
        $vdos = $law['cookies']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['cookies']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['cookies']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['cookies']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['cookies']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/cookies.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'rgpd'){
        $title = $law['rgpd']['title'];
        $description = $law['rgpd']['description'];
        $keyword = $law['rgpd']['keyword'];
        $urls = $law['rgpd']['url']['default'];
        $imgs = $law['rgpd']['sitemap']['images'];
        $vdos = $law['rgpd']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['rgpd']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['rgpd']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['rgpd']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['rgpd']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/rgpd.php');
        include('themes/'.$sites['template'].'/footer.php');	
    } else if($_GET['pages'] == 'index'){
		/**########## LAW DIR ##########**/	
        $title = $law['pages']['title'];
        $description = $law['pages']['description'];
        $keyword = $law['pages']['keyword'];
        $urls = $law['pages']['url']['default'];
        $imgs = $law['pages']['sitemap']['images'];
        $vdos = $law['pages']['sitemap']['video'];

		$translatef_fr = $protocols.'://'.$domainTLD.'/fr/'.$law['pages']['url']['fr'];
		$translate_en = $protocols.'://'.$domainTLD.'/en/'.$law['pages']['url']['en'];
		$translate_de = $protocols.'://'.$domainTLD.'/de/'.$law['pages']['url']['de'];
		$translate_ru = $protocols.'://'.$domainTLD.'/ru/'.$law['pages']['url']['ru'];

		
        include('themes/'.$sites['template'].'/header.php');
        include_once('themes/'.$sites['template'].'/law/full.php');
        include('themes/'.$sites['template'].'/footer.php');
    } else {
        header('Location: '.$protocols.'://'.$domainTLD.'/'.$law['pages']['url']['default']);
    }
} else {
    header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$law['pages']['url'][$DefineTranslateLang]);
}


?>