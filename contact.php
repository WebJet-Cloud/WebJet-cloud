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

# captcha of google
use ReCaptcha\ReCaptcha;


#Syslink
$protocols = $sites['protocol'];
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);


#frontend
if(isset($_GET['pages'])){

	if($_GET['pages'] == 'index'){
		$title = $i18n->get("contact_index_title[contact]");
		$description = $i18n->get("contact_index_description[contact]");
		$keyword = $i18n->get("contact_index_keyword[contact]");
		$urls = $i18n->get("contact_index_url[contact]");
		$imgs = 'images.jpg';

		

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Récupérer les données du formulaire
    # anti spam with HCAPTCHA
    #$Gresponse = $GRecaptcha->setExpectedHostname($domainTLD)->verify($GRecaptchaResponse, IpHelper::getIp());
    $hcaptcha_VResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$JSecurity['hcaptcha']['private'].'&response='.$_POST['h-captcha-response'].'&remoteip='.IpHelper::getIp());
    $hcaptcha_RData = json_decode($hcaptcha_VResponse);

    // Vérifier la réponse reCAPTCHA
    $recaptcha = new ReCaptcha($JSecurity['recaptcha']['private']);
    $recaptchaResult = $recaptcha->verify($_POST['g-recaptcha-response']);

    if ($recaptchaResult->isSuccess() OR $hcaptcha_RData->success) {
  #  if($recaptchaResult->isScored() && $recaptchaResult->getScore() >= 0.5) {
        // La vérification reCAPTCHA a réussi

        // Vérifier le numéro de téléphone
        $phoneNumberUtil = PhoneNumberUtil::getInstance();
        try {
            $phoneNumber = $phoneNumberUtil->parse($_POST['phone'], strtoupper($i18n->getLang()));
            if ($phoneNumberUtil->isValidNumber($phoneNumber) && $mail->validateAddress($_POST['email'])) {
                date_default_timezone_set($JSeo['default-timezone']);
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
                $mail->addAddress($JSeo['local']['email'], $domainTLD);
                $mail->isHTML(true);
                $mail->Subject = $_POST['subject'];
                $mail->Body = '<strong>Email:</strong> '.$_POST['email'].'<br />
                <strong>'.$i18n->get("form_body_name[contact_form]").':</strong> '.$_POST['name'].'<br />
                <strong>'.$i18n->get("form_body_phone[contact_form]").':</strong> '. $phoneNumber.'<br />
                <strong>'.$i18n->get("form_body_message[contact_form]").':</strong> '.$_POST['message'];

                if ($mail->send()) {
					header('Location: '.$protocols.'://'.$domainTLD.'/'.$i18n->get("block_success_url[block]"));
                } else {
					header('Location: '.$protocols.'://'.$domainTLD.'/'.$i18n->get("block_error_url[block]"));
                }
            } else {
                // Le numéro de téléphone n'est pas valide
                // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
                # echo 'Le numéro de téléphone n\'est pas valide';
                header('Location: '.$protocols.'://'.$domainTLD.'/'.$i18n->get("block_error_url[block]"));
            }
        } catch (\libphonenumber\NumberParseException $e) {
            // Une exception s'est produite lors de l'analyse du numéro de téléphone
            // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
            #echo 'Une exception s\'est produite lors de l\'analyse du numéro de téléphone';
            header('Location: '.$protocols.'://'.$domainTLD.'/'.$i18n->get("block_error_url[block]"));
        }
    } else {
        // La vérification reCAPTCHA a échoué
        // Vous pouvez afficher un message d'erreur à l'utilisateur ou effectuer d'autres actions nécessaires
        #echo 'La vérification reCAPTCHA a échoué';
        header('Location: '.$protocols.'://'.$domainTLD.'/'.$i18n->get("block_error_url[block]"));
    }
}	



		include('templates/header.php');
		include_once('templates/contact/index.php');
		include('templates/footer.php');
	}
} else {
	header('Location: '.$protocols.'://'.$domainTLD);
}




?>