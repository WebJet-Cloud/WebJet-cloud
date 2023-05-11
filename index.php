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
if(isset($_GET['pages'])){
	if($_GET['pages'] == 'index'){
		$title = $general['index']['title'];
		$description = $general['index']['description'];
		$keyword = $general['index']['keyword'];
		$urls = $general['index']['url']['default'];
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
		$urls = $general['aboutus']['url']['default'];
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
				include('themes/'.$sites['template'].'/header-fix.php');
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
		$urls = $teams['index']['url']['default'];
		$imgs = $teams['index']['sitemap']['images'];
		$vdos = $teams['index']['sitemap']['video'];
		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$teams['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/general/teams.php');
		include('themes/'.$sites['template'].'/footer.php');

	} else if($_GET['pages'] == 'debug'){
		/**########## debug DIR ##########**/
		if(isset($_GET['json'])){
			if($_GET['json'] == 'sites'){
				include_once('themes/debug/sites.php');
			} else if($_GET['json'] == 'social'){
				include_once('themes/debug/social.php');
			} else if($_GET['json'] == 'private'){
				include_once('themes/debug/private.php');
			} else if($_GET['json'] == 'business'){
				include_once('themes/debug/business.php');
			} else if($_GET['json'] == 'images'){
				include_once('themes/debug/images.php');
			} else if($_GET['json'] == 'partner'){
				include_once('themes/debug/partner.php');
			} else if($_GET['json'] == 'sponsor'){
				include_once('themes/debug/sponsor.php');
			} else if($_GET['json'] == 'credits'){
				include_once('themes/debug/credits.php');
			} else {
				header('Location: '.$protocols.'://'.$domainTLD);
				exit();
			}
		} else {
			$title = $debug['index']['title'];
			$description = $debug['index']['description'];
			$keyword = $debug['index']['keyword'];
			$urls = $debug['index']['url']['default'];
			$imgs = $debug['index']['sitemap']['images'];
			$vdos = $debug['index']['sitemap']['video'];
			define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$debug['index']['url'][$DefineTranslateLang]);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/debug/full.php');
			include('themes/'.$sites['template'].'/footer.php');	
		}
	} else if($_GET['pages'] == 'email'){
		/**########## EMAIL DIR ##########**/	
		$title = $email['index']['title'];
		$description = $email['index']['description'];
		$keyword = $email['index']['keyword'];
		$urls = $email['index']['url']['default'];
		$imgs = $email['index']['sitemap']['images'];
		$vdos = $email['index']['sitemap']['video'];


			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				
				$mail->setFrom($_POST['email'], $_POST['name']);
				
				if(!empty($private['mail']['public'])){
					$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
				} else {
					$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
				}

				if(isset($_POST['phone-country-code']) && !empty($_POST['phone-country-code'])){
					$PhoneCountryCodeArray = $_POST['phone-country-code'];
					print_r($PhoneCountryCodeArray);
						foreach($PhoneCountryCodeArray as $PhoneCountryCodeValue){
								$PhoneCountryCode = $PhoneCountryCodeValue;
					}
				}
				# Verify Number libphonenumber-for-php		
				if(!empty($_POST['phone'])){
					$phone = $PhoneNumberUtil->parse(substr(strip_tags($_POST['phone']), 0, 255), $PhoneCountryCode); # Default FR
				} else {
					$phone = $PhoneNumberUtil->parse('000000000', $PhoneCountryCode); # Default FR
				}
				if ($PhoneNumberUtil->isValidNumber($phone)){
					$PhoneVerify = $phone_results['true'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($PhoneCountryCode); # 33
					$PhonecarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($phone, $DefineTranslateLang);
					$PhoneformatE164Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::E164);
					$PhoneformatNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::NATIONAL);
					$PhoneformatINTERNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::INTERNATIONAL);
					$PhoneformatRFC3966Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::RFC3966);
				} else {
					$PhoneVerify = $phone_results['false'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($PhoneCountryCode); # 33
					$PhonecarrerNumbers = '';
					$PhoneformatE164Numbers = '#';
					$PhoneformatNATIONALNumbers = '000000000';
					$PhoneformatINTERNATIONALNumbers = '000000000';
					$PhoneformatRFC3966Numbers = '#';
				}
				
				switch ($PhoneNumberUtil->getNumberType($phone)) {
					case '0':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE'];
					break;
					case '1':
						$PhoneGetType = $phone_results['switch']['MOBILE'];
					break;
					case '2':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE-OR-MOBILE'];
					break;
					case '3':
						$PhoneGetType = $phone_results['switch']['TOLL-REE'];
					break;
					case '4':
						$PhoneGetType = $phone_results['switch']['PREMIUM-RATE'];
					break;
					case '5':
						$PhoneGetType = $phone_results['switch']['SHARED-COST'];
					break;
					case '6':
						$PhoneGetType = $phone_results['switch']['VOIP'];
					break;
					case '7':
						$PhoneGetType = $phone_results['switch']['PERSONAL-NUMBER'];
					break;
					case '8':
						$PhoneGetType = $phone_results['switch']['PAGER'];
					break;
					case '9':
						$PhoneGetType = $phone_results['switch']['UAN'];
					break;
					case '10':
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
					break;
					case '27':
						$PhoneGetType = $phone_results['switch']['EMERGENCY'];
					break;
					case '28':
						$PhoneGetType = $phone_results['switch']['VOICEMAIL'];
					break;
					case '29':
						$PhoneGetType = $phone_results['switch']['SHORT-CODE'];
					break;
					case '30':
						$PhoneGetType = $phone_results['switch']['STANDARD-RATE'];
					break;
					default:
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
				}
						
				if ($mail->addReplyTo($_POST['email'], $_POST['name']) && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
					$mail->Subject = $_POST['subject'].' ('.$email['index']['title'].') - '.$domainTLD.'.';
					$mail->isHTML(true);
							/*
							#Solution 1
							ob_start("ob_html_compress");
							include 'themes/email/backend.php';
							$body = ob_get_clean();
							$mail->msgHTML($body, dirname(__FILE__));
							*/
							#Solution 2
							/*$email_vars_tpl = array(
								'subject' => $_POST['subject'],
								'email' => $_POST['email'],
								'name' => $_POST['name'],
								'phone' =>  '(Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')',
								'message' => $_POST['message'],
							);
							$body_tpl = file_get_contents('themes/email/public.php');

							if(isset($vars_tpl)){
								foreach($email_vars_tpl as $code_tpl=>$value){
									$body_tpl = str_replace('{'.strtoupper($code_tpl).'}', $value, $body_tpl);
								}
							}
							$mail->msgHTML($body_tpl, dirname(__FILE__));
							#Solution 3
							#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
							#Solution 0 = basic
							$mail->Body = '
							<h2>'.$email['index']['title'].': '.$domainTLD.'</h2>
							<h4>'.$email['index']['content']['default']['subject'].' - '.$_POST['subject'].'</h4>
							<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br />
							<strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br />
							<strong>'.$email['index']['content']['default']['phone'].':</strong> (Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')</strong><br /><br />
							<strong>'.$email['index']['content']['default']['message'].':</strong> '.$_POST['message'];
					
					//$Gresponse = $GRecaptcha->setExpectedHostname($domainTLD)->verify($GRecaptchaResponse, IpHelper::getIp());

					# anti spam with HCAPTCHA
					$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$apiexternal['captcha']['hcaptcha']['secret'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
					$hcaptcha_RData = json_decode($hcaptcha_VResponse);
					
					
					if (!$mail->send() AND $hcaptcha_RData->success) {
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
					   exit();
					} else {
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['success']['url']['default']);
					   exit();
					}
				} else {
					header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
					exit();

				}
			}		

		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/email/full.php');
		include('themes/'.$sites['template'].'/footer.php');	
	} else if($_GET['pages'] == 'ask-quotes'){
		/**########## EMAIL DIR ##########**/	
		$title = $email['ask-quotes']['title'];
		$description = $email['ask-quotes']['description'];
		$keyword = $email['ask-quotes']['keyword'];
		$urls = $email['ask-quotes']['url']['default'];
		$imgs = $email['ask-quotes']['sitemap']['images'];
		$vdos = $email['ask-quotes']['sitemap']['video'];


			if (array_key_exists('email', $_POST) && $mail->validateAddress($_POST['email'])) {
				date_default_timezone_set($sites['default-timezone']);
				
				$mail->setFrom($_POST['email'], $_POST['name']);
				
				if(!empty($private['mail']['public'])){
					$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
				} else {
					$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
				}

				if(isset($_POST['phone-country-code']) && !empty($_POST['phone-country-code'])){
					$PhoneCountryCodeArray = $_POST['phone-country-code'];
					print_r($PhoneCountryCodeArray);
						foreach($PhoneCountryCodeArray as $PhoneCountryCodeValue){
								$PhoneCountryCode = $PhoneCountryCodeValue;
					}
				}
				
				if(isset($_POST['servicesweb']) && !empty($_POST['servicesweb'])){
					$serviceswebArray = $_POST['servicesweb'];
					print_r($serviceswebArray);
						foreach($serviceswebArray as $serviceswebValue){
								$serviceswebCode = $serviceswebValue;
					}
				}

				# Verify Number libphonenumber-for-php		
				if(!empty($_POST['phone'])){
					$phone = $PhoneNumberUtil->parse(substr(strip_tags($_POST['phone']), 0, 255), $PhoneCountryCode); # Default FR
				} else {
					$phone = $PhoneNumberUtil->parse('000000000', $PhoneCountryCode); # Default FR
				}
				if ($PhoneNumberUtil->isValidNumber($phone)){
					$PhoneVerify = $phone_results['true'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($PhoneCountryCode); # 33
					$PhonecarrerNumbers = $PhoneNumberCarrierMapper->getNameForNumber($phone, $DefineTranslateLang);
					$PhoneformatE164Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::E164);
					$PhoneformatNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::NATIONAL);
					$PhoneformatINTERNATIONALNumbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::INTERNATIONAL);
					$PhoneformatRFC3966Numbers = $PhoneNumberUtil->format($phone, PhoneNumberFormat::RFC3966);
				} else {
					$PhoneVerify = $phone_results['false'][$sites['email']['receive']];
					$PhoneRegionCodeNumbers = $PhoneNumberUtil->getCountryCodeForRegion($PhoneCountryCode); # 33
					$PhonecarrerNumbers = '';
					$PhoneformatE164Numbers = '#';
					$PhoneformatNATIONALNumbers = '000000000';
					$PhoneformatINTERNATIONALNumbers = '000000000';
					$PhoneformatRFC3966Numbers = '#';
				}
				
				switch ($PhoneNumberUtil->getNumberType($phone)) {
					case '0':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE'];
					break;
					case '1':
						$PhoneGetType = $phone_results['switch']['MOBILE'];
					break;
					case '2':
						$PhoneGetType = $phone_results['switch']['FIXED-LINE-OR-MOBILE'];
					break;
					case '3':
						$PhoneGetType = $phone_results['switch']['TOLL-REE'];
					break;
					case '4':
						$PhoneGetType = $phone_results['switch']['PREMIUM-RATE'];
					break;
					case '5':
						$PhoneGetType = $phone_results['switch']['SHARED-COST'];
					break;
					case '6':
						$PhoneGetType = $phone_results['switch']['VOIP'];
					break;
					case '7':
						$PhoneGetType = $phone_results['switch']['PERSONAL-NUMBER'];
					break;
					case '8':
						$PhoneGetType = $phone_results['switch']['PAGER'];
					break;
					case '9':
						$PhoneGetType = $phone_results['switch']['UAN'];
					break;
					case '10':
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
					break;
					case '27':
						$PhoneGetType = $phone_results['switch']['EMERGENCY'];
					break;
					case '28':
						$PhoneGetType = $phone_results['switch']['VOICEMAIL'];
					break;
					case '29':
						$PhoneGetType = $phone_results['switch']['SHORT-CODE'];
					break;
					case '30':
						$PhoneGetType = $phone_results['switch']['STANDARD-RATE'];
					break;
					default:
						$PhoneGetType = $phone_results['switch']['UNKNOWN'];
				}
						
				if ($mail->addReplyTo($_POST['email'], $_POST['name']) && isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
					$mail->Subject = $_POST['subject'].' ('.$email['ask-quotes']['title'].') - '.$domainTLD.'.';
					$mail->isHTML(true);
							/*
							#Solution 1
							ob_start("ob_html_compress");
							include 'themes/email/backend.php';
							$body = ob_get_clean();
							$mail->msgHTML($body, dirname(__FILE__));
							*/
							#Solution 2
							/*$email_vars_tpl = array(
								'subject' => $_POST['subject'],
								'email' => $_POST['email'],
								'name' => $_POST['name'],
								'phone' =>  '(Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')',
								'message' => $_POST['message'],
							);
							$body_tpl = file_get_contents('themes/email/public.php');

							if(isset($vars_tpl)){
								foreach($email_vars_tpl as $code_tpl=>$value){
									$body_tpl = str_replace('{'.strtoupper($code_tpl).'}', $value, $body_tpl);
								}
							}
							$mail->msgHTML($body_tpl, dirname(__FILE__));
							#Solution 3
							#$mail->msgHTML(file_get_contents('contents.html'), __DIR__);*/
							#Solution 0 = basic
							$mail->Body = '
							<h2>'.$email['ask-quotes']['title'].': '.$domainTLD.'</h2>
							<h4>'.$email['ask-quotes']['content']['default']['subject'].' - '.$_POST['subject'].'</h4>
							<strong>'.$email['ask-quotes']['content']['default']['email'].':</strong> '.$_POST['email'].'<br />
							<strong>'.$email['ask-quotes']['content']['default']['name'].':</strong> '.$_POST['name'].'<br />
							<strong>'.$email['ask-quotes']['content']['default']['phone'].':</strong> (Type:'.$PhoneGetType.'/'.$PhoneVerify.')='.$phone.' | +('.$PhoneRegionCodeNumbers.') <a href="'.$PhoneformatE164Numbers.'">'.$PhoneformatINTERNATIONALNumbers.'</a> <strong>(info: '.$PhonecarrerNumbers.')</strong><br /><br />
							<strong>'.$email['ask-quotes']['content']['default']['message'].':</strong> '.$_POST['message'];
					
					//$Gresponse = $GRecaptcha->setExpectedHostname($domainTLD)->verify($GRecaptchaResponse, IpHelper::getIp());

					# anti spam with HCAPTCHA
					$hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$apiexternal['captcha']['hcaptcha']['secret'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
					$hcaptcha_RData = json_decode($hcaptcha_VResponse);
					
					
					if (!$mail->send() AND $hcaptcha_RData->success) {
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
					   exit();
					} else {
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['success']['url']['default']);
					   exit();
					}
				} else {
					header('Location: '.$protocols.'://'.$domainTLD.'/'.$block['error']['url']['default']);
					exit();

				}
			}		

		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/email/ask-devis.php');
		include('themes/'.$sites['template'].'/footer.php');	
	} else if($_GET['pages'] == 'sponsor'){
		/**########## SPONSOR DIR ##########**/	
		$title = $sponsor['index']['title'];
		$description = $sponsor['index']['description'];
		$keyword = $sponsor['index']['keyword'];
		$urls = $sponsor['index']['url']['default'];
		$imgs = $sponsor['index']['sitemap']['images'];
		$vdos = $sponsor['index']['sitemap']['video'];
		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$sponsor['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/sponsor/full.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'sitemap'){
		/**########## SITEMAP DIR ##########**/	
		$title = $sitemap['index']['title'];
		$description = $sitemap['index']['description'];
		$keyword = $sitemap['index']['keyword'];
		$urls = $sitemap['index']['url']['default'];
		$imgs = $sitemap['index']['sitemap']['images'];
		$vdos = $sitemap['index']['sitemap']['video'];
		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$sitemap['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/sitemap/default.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'partner'){
		/**########## PARTNER DIR ##########**/	
		$title = $partner['index']['title'];
		$description = $partner['index']['description'];
		$keyword = $partner['index']['keyword'];
		$urls = $partner['index']['url']['default'];
		$imgs = $partner['index']['sitemap']['images'];
		$vdos = $partner['index']['sitemap']['video'];
		define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$partner['index']['url'][$DefineTranslateLang]);
		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/partner/full.php');
		include('themes/'.$sites['template'].'/footer.php');
		
		
	} else if($_GET['pages'] == 'success'){
		/**########## EMAIL - RECEIVE SUCCESS / BLOCK DIR ##########**/	
			$title = $block['success']['title'];
			$description = $block['success']['description'];
			$keyword = $block['success']['keyword'];
			$urls = $block['success']['url']['default'];
			$imgs = $block['success']['sitemap']['images'];
			$vdos = $block['success']['sitemap']['video'];
			define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$block['success']['url'][$DefineTranslateLang]);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/success.php');
			include('themes/'.$sites['template'].'/footer.php');
	} else if($_GET['pages'] == 'error'){
		/**########## ERROR PAGE/EMAIL / BLOCK DIR ##########**/	
			$title = $block['error']['title'];
			$description = $block['error']['description'];
			$keyword = $block['error']['keyword'];
			$urls = $block['error']['url']['default'];
			$imgs = $block['error']['sitemap']['images'];
			$vdos = $block['error']['sitemap']['video'];
			define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/block/error.php');
			include('themes/'.$sites['template'].'/footer.php');	
	} else if($_GET['pages'] == 'law'){
		/**########## LAW DIR ##########**/	
		if(isset($_GET['full'])){
			if($_GET['full'] == 'cgu'){
				$title = $law['cgu']['title'];
				$description = $law['cgu']['description'];
				$keyword = $law['cgu']['keyword'];
				$urls = $law['cgu']['url']['default'];
				$imgs = $law['cgu']['sitemap']['images'];
				$vdos = $law['cgu']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['cgu']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/cgu.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'cgv'){
				$title = $law['cgv']['title'];
				$description = $law['cgv']['description'];
				$keyword = $law['cgv']['keyword'];
				$urls = $law['cgv']['url']['default'];
				$imgs = $law['cgv']['sitemap']['images'];
				$vdos = $law['cgv']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['cgv']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/cgv.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'dmca'){
				$title = $law['dmca']['title'];
				$description = $law['dmca']['description'];
				$keyword = $law['dmca']['keyword'];
				$urls = $law['dmca']['url']['default'];
				$imgs = $law['dmca']['sitemap']['images'];
				$vdos = $law['dmca']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['dmca']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/dmca.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'legal'){
				$title = $law['legal']['title'];
				$description = $law['legal']['description'];
				$keyword = $law['legal']['keyword'];
				$urls = $law['legal']['url']['default'];
				$imgs = $law['legal']['sitemap']['images'];
				$vdos = $law['legal']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['legal']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/legal.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'policy-privacy'){
				$title = $law['policy-privacy']['title'];
				$description = $law['policy-privacy']['description'];
				$keyword = $law['policy-privacy']['keyword'];
				$urls = $law['policy-privacy']['url']['default'];
				$imgs = $law['policy-privacy']['sitemap']['images'];
				$vdos = $law['policy-privacy']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['policy-privacy']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/policy-privacy.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'cookies'){
				$title = $law['cookies']['title'];
				$description = $law['cookies']['description'];
				$keyword = $law['cookies']['keyword'];
				$urls = $law['cookies']['url']['default'];
				$imgs = $law['cookies']['sitemap']['images'];
				$vdos = $law['cookies']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['cookies']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/cookies.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else if($_GET['full'] == 'rgpd'){
				$title = $law['rgpd']['title'];
				$description = $law['rgpd']['description'];
				$keyword = $law['rgpd']['keyword'];
				$urls = $law['rgpd']['url']['default'];
				$imgs = $law['rgpd']['sitemap']['images'];
				$vdos = $law['rgpd']['sitemap']['video'];
				define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['rgpd']['url'][$DefineTranslateLang]);
				include('themes/'.$sites['template'].'/header.php');
				include_once('themes/'.$sites['template'].'/law/rgpd.php');
				include('themes/'.$sites['template'].'/footer.php');	
			} else {
				header('Location: '.$protocols.'://'.$domainTLD);
				exit();
			}
		} else {
			$title = $law['pages']['title'];
			$description = $law['pages']['description'];
			$keyword = $law['pages']['keyword'];
			$urls = $law['pages']['url']['default'];
			$imgs = $law['pages']['sitemap']['images'];
			$vdos = $law['pages']['sitemap']['video'];
			define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$law['pages']['url'][$DefineTranslateLang]);
			include('themes/'.$sites['template'].'/header.php');
			include_once('themes/'.$sites['template'].'/law/full.php');
			include('themes/'.$sites['template'].'/footer.php');
		}
	} else {
		header('Location: '.$protocols.'://'.$domainTLD);
		exit();
	}
} else {
	$title = $general['index']['title'];
	$description = $general['index']['description'];
	$keyword = $general['index']['keyword'];
	$urls = $general['index']['url']['default'];
	$imgs = $general['index']['sitemap']['images'];
	$vdos = $general['index']['sitemap']['video'];
	define('__WP_'.$DefineMajLang.'_URL', $DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]);
	include('themes/'.$sites['template'].'/header-fix.php');
	include_once('themes/'.$sites['template'].'/general/home.php');
	include('themes/'.$sites['template'].'/footer.php');	
}

?>