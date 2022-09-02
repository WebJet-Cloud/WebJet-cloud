<?php

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
$social = json_decode($JE_social, true);
$hosting = json_decode($JE_hosting, true);
$marketing = json_decode($JE_marketing, true);
$images = json_decode($JE_images, true);
$videos = json_decode($JE_videos, true);
$business = json_decode($JE_business, true);
$PhoneRegionCodeManualNumbers = json_decode($JE_PhoneRegionCodeManualNumbers, true);


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
$debug = json_decode($JE_translate_debug, true);
$teams = json_decode($JE_translate_teams, true);



use Icamys\SitemapGenerator\SitemapGenerator;	
//use Icamys\SitemapGenerator\FileSystem;

$outputDir = getcwd();
	
$generator = new SitemapGenerator($domainTLD, $outputDir);
#$generator = new \Icamys\SitemapGenerator\SitemapGenerator($domainTLD, $outputDir);

// Create a compressed sitemap
//$generator->enableCompression();

$generator->setMaxURLsPerSitemap(50000);

use MatthiasMullie\Minify;

#frontend

$generator->setSitemapFileName("sitemap-fr.xml");

$alternates = [
    ['hreflang' => 'de', 'href' => $protocols.'://'.$sites['domain'].'/de'],
    ['hreflang' => 'en', 'href' => $protocols.'://'.$sites['domain'].'/en'],
    ['hreflang' => 'ru', 'href' => $protocols.'://'.$sites['domain'].'/ru'],
];

# Preparing integrated on the sitemap
$generator->addURL('/fr/'.$general['index']['url']['fr'], new DateTime(), 'monthly', 0.5, $alternates);
include_once('themes/automate/sitemap-fr.php');	
#include_once('themes/automate/sitemap-index.php');

$generator->flush();
$generator->finalize();
$generator->submitSitemap();


# Sitemap test how work

?>

