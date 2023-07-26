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
} else {
    header('Location: '.$protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]);
}

?>