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
use libphonenumber\PhoneNumberFormat;

$PhoneNumberUtil = PhoneNumberUtil::getInstance();
$PhoneNumberCarrierMapper = PhoneNumberToCarrierMapper::getInstance();
$PhoneNumberGeocoder = PhoneNumberOfflineGeocoder::getInstance();

use VisualAppeal\SslLabs;
$api = new SslLabs(true);
$JE_DSslLabsOut = $api->analyze($protocols.'://'.$domainTLD);

# captcha of google
use ReCaptcha\ReCaptcha;



#frontend
if(isset($_GET[$DefineTranslateLang])){
    if($_GET[$DefineTranslateLang] == 'success'){
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
	} else if($_GET[$DefineTranslateLang] == 'error'){
		/**########## ERROR PAGE/EMAIL / BLOCK DIR ##########**/	
			$title = $block['error']['title'];
			$description = $block['error']['description'];
			$keyword = $block['error']['keyword'];
			$urls = $block['error']['url']['default'];
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
	} else if($_GET[$DefineTranslateLang] == 'index'){
		/**########## EMAIL DIR ##########**/	
		$title = $email['index']['title'];
		$description = $email['index']['description'];
		$keyword = $email['index']['keyword'];
		$urls = $email['index']['url']['default'];
		$imgs = $email['index']['sitemap']['images'];
		$vdos = $email['index']['sitemap']['video'];




		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $email['index']['url']['default'];
		}
	
		


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    # anti spam with HCAPTCHA
    #$Gresponse = $GRecaptcha->setExpectedHostname($domainTLD)->verify($GRecaptchaResponse, IpHelper::getIp());
    $hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$apiexternal['captcha']['hcaptcha']['secret'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
    $hcaptcha_RData = json_decode($hcaptcha_VResponse);

    // Vérifier la réponse reCAPTCHA
    $recaptcha = new ReCaptcha($apiexternal['captcha']['google']['secret']);
    $recaptchaResult = $recaptcha->verify($_POST['g-recaptcha-response']);

    if ($recaptchaResult->isSuccess() OR $hcaptcha_RData->success) {
  #  if($recaptchaResult->isScored() && $recaptchaResult->getScore() >= 0.5) {
        // La vérification reCAPTCHA a réussi

        // Vérifier le numéro de téléphone
        $phoneNumberUtil = PhoneNumberUtil::getInstance();
        try {
            $phoneNumber = $phoneNumberUtil->parse($_POST['phone'], strtoupper($DefineTranslateLang));
            if ($phoneNumberUtil->isValidNumber($phoneNumber) && $mail->validateAddress($_POST['email'])) {
                date_default_timezone_set($sites['default-timezone']);
                // Le numéro de téléphone est valide
                // Vous pouvez effectuer d'autres actions ici, comme l'envoi d'un email ou l'enregistrement des données dans une base de données
                /*
                $mail->isSMTP();
                $mail->Host = 'smtp.example.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'votre_email@example.com';
                $mail->Password = 'votre_mot_de_passe';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                */
                $mail->setFrom($_POST['email'], $_POST['name']);
               
				if(!empty($private['mail']['public'])){
					$mail->addAddress($private['mail']['public'].'@'.$domainTLD, $domainTLD);
				} else {
					$mail->addAddress($private['mail']['private'].'@'.$private['mail']['@']['external'], $domainTLD);
				} 
                $mail->isHTML(true);
                $mail->Subject = $_POST['subject'];
                $mail->Body = '<strong>'.$email['index']['content']['default']['email'].':</strong> '.$_POST['email'].'<br />
                <strong>'.$email['index']['content']['default']['name'].':</strong> '.$_POST['name'].'<br />
                <strong>'.$email['index']['content']['default']['phone'].':</strong>' . $phoneNumber . '<br />
                <strong>'.$email['index']['content']['default']['message'].':</strong> '.$_POST['message'];

                if ($mail->send()) {
                    echo 'Message envoyé avec succès';
                    # header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['success']['url'][$DefineTranslateLang]);
                } else {
                    echo 'Erreur lors de l\'envoi du message';
                    # header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
                }
            } else {
                // Le numéro de téléphone n'est pas valide
                // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
                # echo 'Le numéro de téléphone n\'est pas valide';
                header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
            }
        } catch (\libphonenumber\NumberParseException $e) {
            // Une exception s'est produite lors de l'analyse du numéro de téléphone
            // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
            #echo 'Une exception s\'est produite lors de l\'analyse du numéro de téléphone';
            header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
        }
    } else {
        // La vérification reCAPTCHA a échoué
        // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
        #echo 'La vérification reCAPTCHA a échoué';
        header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
    }
}		
	

		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/email/full.php');
		include('themes/'.$sites['template'].'/footer.php');	
 
	} else {
		header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
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
	} else if($_GET['pages'] == 'index'){
		/**########## EMAIL DIR ##########**/	
		$title = $email['index']['title'];
		$description = $email['index']['description'];
		$keyword = $email['index']['keyword'];
		//$urls = $email['index']['url']['default'];
		$imgs = $email['index']['sitemap']['images'];
		$vdos = $email['index']['sitemap']['video'];

		if(!empty($DefineTranslateLang)){ 
			$urls = $DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]; 
		} else { 
			$urls = $email['index']['url']['default'];
		}
	
		


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
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
					   exit();
					} else {
					   header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['success']['url'][$DefineTranslateLang]);
					   exit();
					}
				} else {
					header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$block['error']['url'][$DefineTranslateLang]);
					exit();

				}
			}		


		include('themes/'.$sites['template'].'/header.php');
		include_once('themes/'.$sites['template'].'/email/full.php');
		include('themes/'.$sites['template'].'/footer.php');	
 
	} else {
		header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
	}
} else {
    header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
}

?>