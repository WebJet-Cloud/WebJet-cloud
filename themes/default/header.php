<?php ob_start("native_html_output"); ?>
<!doctype html>
<html lang="<?php echo $DefineTranslateLang; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if(!empty($title)){ ?>
	<title><?php echo htmlentities($sites['name'].' - '.$title); ?></title>
  <?php } else { ?>
	<title><?php echo htmlentities($sites['name']); ?></title>
  <?php } ?>
  <?php if(!empty($description)){ ?><meta name="description" content="<?php echo htmlentities($description); ?>"><?php } ?>
  <?php if(!empty($keyword)){ ?>
	<meta name="keywords" content="<?php echo htmlentities($keyword); ?>">
	<?php
	$WP_ParrayMeta = explode(' ',str_replace(',', '', $keyword));
	foreach ($WP_ParrayMeta as $WP_PvalueMeta) { echo '<meta property="article:tag" content="'.htmlentities($WP_PvalueMeta).'" />'; }
	 }
 ?>
  <meta name="author" content="<?php echo $sites['name']; ?>">
	<meta name="format-detection" content="telephone=yes">
	<meta name="robots" content="<?php echo $sites['head']['robots']; ?>">
	<meta name="googlebot" content="<?php echo $sites['head']['robots']; ?>, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<meta name="bingbot" content="<?php echo $sites['head']['robots']; ?>, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
	<?php if(!empty($images['manager']['logo']['icon'])){ ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['icon']; ?>">
	<?php } else { ?>
		<link rel="icon" href="<?php echo $protocols.'://'.$domainTLD; ?>/favicon.ico">
	<?php }?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['small']; ?>">
	<link rel="manifest" href="<?php echo $protocols.'://'.$domainTLD; ?>/manifest.json">	

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:180x180']; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:32x32']; ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:192x192']; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:16x16']; ?>">

<link rel="mask-icon" href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['safari']; ?>" color="<?php echo $seo['browsers']['color']['safari']; ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo htmlentities($sites['name'].' - '.$title);?>">
<meta name="application-name" content="<?php echo htmlentities($sites['name']);?>">
<meta name="msapplication-TileColor" content="<?php echo $seo['browsers']['color']['title']; ?>">
<meta name="msapplication-TileImage" content="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['pinned']['s:144x144']; ?>">
<meta name="theme-color" content="<?php echo $seo['browsers']['color']['themes']; ?>">



<!--HUMANS NOT ROBOTS-->
<link type="text/plain" rel="author" href="<?php echo $protocols.'://'.$domainTLD; ?>/humans.txt" />


<!--Multi Language-->
<link rel="alternate" hreflang="x-default" href="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" />


<!--SEO-->
<link rel="canonical" href="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" />

    <script type="application/ld+json">

<?php ##########	OWNER	########## ?>
[{
    "@context": "https://schema.org",
	"@type": "WebPage",
	"@id": "#webpage",
	"url": "<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($description); ?>",
    "headline": "<?php echo htmlentities($title); ?>"<?php if(!empty($imgs)){ ?>,
	"inLanguage":"<?php echo $meta_langs; ?>",
    "image": [
      "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>"
     ],<?php } ?>
     "speakable":
     {
      "@type": "SpeakableSpecification",
      "xpath": [
        "/html/head/title",
        "/html/head/meta[@name='description']/@content"
        ]
      },
	"potentialAction":[
		{
			"@type":"ReadAction",
			"target":[
				"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>"
			]
		}
	]
	
},<?php /*
{
      "@type": "VideoObject",
      "name": "Cat video",
      "duration": "P10M",
      "uploadDate": "2019-07-19",
      "thumbnailUrl": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"",
      "description": "Watch this cat jump over a fence!",
      "contentUrl": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"",
      "hasPart": [{
        "@type": "Clip",
        "name": "Cat jumps",
        "url": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"
      },
      {
        "@type": "Clip",
        "name": "Cat misses the fence",
        "url": "<?php echo $protocols.'://'.$domainTLD.'/'; ?>"
      }]
}, */?>
{
	"@type":"WebSite",
	"@id":"#website",
	"url":"<?php echo $protocols.'://'.$domainTLD.'/'; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($general['index']['description']); ?>",
	"inLanguage":"<?php echo $meta_langs; ?>"
},
<?php ##########	Breadcrumb	########## ?>
{
	"@type":"BreadcrumbList",
	"@id":"#breadcrumb",
	"itemListElement":[
		{
			"@type":"ListItem",
			"position":1,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$domainTLD; ?>",
				"url":"<?php echo $protocols.'://'.$domainTLD; ?>",
				"name":"<?php echo htmlentities($general['index']['title']); ?>"
			}
		},
		{
			"@type":"ListItem",
			"position":2,
			"item":{
				"@type":"WebPage",
				"@id":"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
				"url":"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
				"name":"<?php echo htmlentities($title); ?>"
			}
		}
	]
},
{
	"@type":"ImageObject",
	"@id":"#primaryimage",
	"inLanguage":"<?php echo $meta_langs; ?>",
	"url":"<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>",
	"width":718,
	"height":403,
	"caption":"<?php echo $title; ?>"
}<?php if(!empty($private['name'])){ ?>,
  {
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "<?php echo htmlentities($private['name']); ?>"<?php if(!empty($private['mobile']['number'])){ ?>,
  "telephone": "<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>"<?php } ?>,
  "url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($private['name'])){ ?>,
  "sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['tiktok']['name'])){ echo '"'.$social['tiktok']['url'].'",'; } ?>
		<?php if(!empty($social['blogger']['name'])){ echo '"'.$social['blogger']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		<?php if(!empty($social['linkedin']['name'])){ echo '"'.$social['linkedin']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['name'])){ echo '"'.$social['viadeo']['url'].'",'; } ?>
		"<?php echo htmlentities($private['name']);  ?>",
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>
<?php ##########	BUSINESS PAGE | You need Absolute CHANGE for Adapt your Business Local categories	########## ?>
<?php if(!empty($business['local']['name'])){ ?>,
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($business['local']['phone']['number'])){ ?>,
	"telephone": "<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>"<?php } ?>,
	"logo": "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>",
	"name": "<?php echo htmlentities($business['local']['name']); ?>",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "<?php echo htmlentities($business['local']['address']); ?>",
		"addressLocality": "<?php echo htmlentities($business['local']['city']); ?>",
		<?php if(!empty($business['local']['region'])){ ?>"addressRegion": "<?php echo htmlentities($business['local']['region']).','; ?>"<?php } ?>
		"postalCode": "<?php echo $business['local']['postal']; ?>",
		"addressCountry": "<?php echo htmlentities($business['local']['contry']); ?>"
	},
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": <?php echo $business['local']['geo']['latitude']; ?>,
		"longitude": <?php echo $business['local']['geo']['longitude']; ?>
	}<?php if(!empty($private['name'])){ ?>,
	"sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['tiktok']['name'])){ echo '"'.$social['tiktok']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['team']['name'])){ echo '"'.$social['viadeo']['team']['url'].'",'; } ?>
		<?php if(!empty($social['linkedin']['team']['name'])){ echo '"'.$social['linkedin']['team']['url'].'",'; } ?>
		<?php if(!empty($private['name'])){ echo '"'.htmlentities($private['name']).'",'; } ?>
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>]

    </script>

<meta property="og:site_name" content="<?php echo htmlentities($sites['name']); ?>" />
<meta property="og:url" content="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" />
<meta property="og:title" content="<?php echo htmlentities($title); ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo htmlentities($description); ?>" />
<meta property="og:image" content="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>" />

 <meta content="<?php echo $Languages_translate.'_'.$phone_langs; ?>" property="og:locale" />
<?php 
if(!empty($social['facebook']['admins'])){
	 echo '<meta content="'.$social['facebook']['admins'].'" property="og:admins"/>
	<meta content="'.$social['facebook']['admins'].'" property="fb:admins"/>';
}

if(!empty($social['facebook']['profile-id'])){
	 echo '<meta content="'.$social['facebook']['profile-id'].'" property="og:profile_id"/>
	<meta content="'.$social['facebook']['profile-id'].'" property="fb:profile_id"/>';
}

if(!empty($social['facebook']['app-id'])){
	 echo '<meta content="'.$social['facebook']['app-id'].'" property="og:app_id"/>
	 <meta content="'.$social['facebook']['app-id'].'" property="fb:app_id"/>';
}

if(!empty($social['twitter']['name'])){
	echo '
	
	<meta name="twitter:site" content="@'.$social['twitter']['name'].'">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="'.$title.'">
<meta name="twitter:domain" content="'.$domainTLD.'">
<meta name="twitter:twitter:image:src" content="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs.'">
<meta name="twitter:description" content="'.$description.'">';
}

if(!empty($seo['google']['analystics'])){
	echo '<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id='.$seo['google']['analystics'].'"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag(\'js\', new Date());
		  gtag(\'config\', \''.$seo['google']['analystics'].'\');
		</script>';
}


if(!empty($seo['google']['tag-manager'])){
	echo '<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
	new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
	\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,\'script\',\'dataLayer\',\''.$seo['google']['tag-manager'].'\');</script>
	<!-- End Google Tag Manager -->';
}

if(!empty($seo['yandex']['analystics'])){
	echo '<!-- Yandex.Metrika counter --> 
	<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym('.$seo['yandex']['analystics'].', "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/'.$seo['yandex']['analystics'].'" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->';
}

?>
<!--Marketing-->
<?php
if(!empty($marketing['33Across']['key'])){
	echo '<!-- Begin 33Across RevCTRL InView -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$marketing['33Across']['key'].'\');
		Tynt.cmd=Tynt.cmd||[];Tynt.cmd.push(function(){
		Tynt.ads.display(\'\',\'\',\'inview\');});
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/rciv.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across RevCTRL InView -->
	<!-- Begin 33Across SiteCTRL -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$marketing['33Across']['key'].'\');
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/ti.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across SiteCTRL -->';
}
if(!empty($marketing['awin']['key'])){
	echo '<script src="https://www.dwin2.com/pub.'.$marketing['awin']['key'].'.min.js"></script>';
}
if(!empty($marketing['uiz']['key'])){
	echo '<script type="text/javascript">
		var app_url = \'https://uiz.io/\';
		var app_api_token = \''.$marketing['uiz']['key'].'\';
		var app_advert = 1;
		var app_exclude_domains = ["*.'.$domainTLD.'"];
	</script>
	<script src=\'//uiz.io/js/full-page-script.js\'></script>';
}
if(!empty($marketing['google']['adsense'])){
	echo '<script data-ad-client="ca-'.$marketing['google']['adsense'].'" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
}

if(!empty($seo['shareaholic']['key'])){
	 echo '<!-- BEGIN SHAREAHOLIC CODE -->
<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
<meta name="shareaholic:site_id" content="'.$seo['shareaholic']['key'].'" />
<meta name="shareaholic:title" content="'.htmlentities($title).'" />
<meta name="shareaholic:site_name" content="'.htmlentities($sites['name']).'" />
<meta name="shareaholic:image" content="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs.'" />
<meta name="shareaholic:keywords" content="'.htmlentities($keyword).'" />
<meta name="shareaholic:language" content="'.$meta_langs.'" />
<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
<!-- END SHAREAHOLIC CODE -->

';
}

if(!empty($seo['quantcast']['key'])){
	echo '<!-- Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->
<script type="text/javascript" async=true>
(function() {
  var host = window.location.hostname;
  var element = document.createElement(\'script\');
  var firstScript = document.getElementsByTagName(\'script\')[0];
  var milliseconds = new Date().getTime();
  var url = \'https://quantcast.mgr.consensu.org\'
    .concat(\'/choice/\', \''.$seo['quantcast']['key'].'\', \'/\', host, \'/choice.js\')
    .concat(\'?timestamp=\', milliseconds);
  var uspTries = 0;
  var uspTriesLimit = 3;
  element.async = true;
  element.type = \'text/javascript\';
  element.src = url;

  firstScript.parentNode.insertBefore(element, firstScript);

  function makeStub() {
    var TCF_LOCATOR_NAME = \'__tcfapiLocator\';
    var queue = [];
    var win = window;
    var cmpFrame;

    function addFrame() {
      var doc = win.document;
      var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);

      if (!otherCMP) {
        if (doc.body) {
          var iframe = doc.createElement(\'iframe\');

          iframe.style.cssText = \'display:none\';
          iframe.name = TCF_LOCATOR_NAME;
          doc.body.appendChild(iframe);
        } else {
          setTimeout(addFrame, 5);
        }
      }
      return !otherCMP;
    }

    function tcfAPIHandler() {
      var gdprApplies;
      var args = arguments;

      if (!args.length) {
        return queue;
      } else if (args[0] === \'setGdprApplies\') {
        if (
          args.length > 3 &&
          args[2] === 2 &&
          typeof args[3] === \'boolean\'
        ) {
          gdprApplies = args[3];
          if (typeof args[2] === \'function\') {
            args[2](\'set\', true);
          }
        }
      } else if (args[0] === \'ping\') {
        var retr = {
          gdprApplies: gdprApplies,
          cmpLoaded: false,
          cmpStatus: \'stub\'
        };

        if (typeof args[2] === \'function\') {
          args[2](retr);
        }
      } else {
        queue.push(args);
      }
    }

    function postMessageEventHandler(event) {
      var msgIsString = typeof event.data === \'string\';
      var json = {};

      try {
        if (msgIsString) {
          json = JSON.parse(event.data);
        } else {
          json = event.data;
        }
      } catch (ignore) {}

      var payload = json.__tcfapiCall;

      if (payload) {
        window.__tcfapi(
          payload.command,
          payload.version,
          function(retValue, success) {
            var returnMsg = {
              __tcfapiReturn: {
                returnValue: retValue,
                success: success,
                callId: payload.callId
              }
            };
            if (msgIsString) {
              returnMsg = JSON.stringify(returnMsg);
            }
            event.source.postMessage(returnMsg, \'*\');
          },
          payload.parameter
        );
      }
    }

    while (win) {
      try {
        if (win.frames[TCF_LOCATOR_NAME]) {
          cmpFrame = win;
          break;
        }
      } catch (ignore) {}

      if (win === window.top) {
        break;
      }
      win = win.parent;
    }
    if (!cmpFrame) {
      addFrame();
      win.__tcfapi = tcfAPIHandler;
      win.addEventListener(\'message\', postMessageEventHandler, false);
    }
  };

  if (typeof module !== \'undefined\') {
    module.exports = makeStub;
  } else {
    makeStub();
  }

  var uspStubFunction = function() {
    var arg = arguments;
    if (typeof window.__uspapi !== uspStubFunction) {
      setTimeout(function() {
        if (typeof window.__uspapi !== \'undefined\') {
          window.__uspapi.apply(window.__uspapi, arg);
        }
      }, 500);
    }
  };

  var checkIfUspIsReady = function() {
    uspTries++;
    if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
      console.warn(\'USP is not accessible\');
    } else {
      clearInterval(uspInterval);
    }
  };

  if (typeof window.__uspapi === \'undefined\') {
    window.__uspapi = uspStubFunction;
    var uspInterval = setInterval(checkIfUspIsReady, 6000);
  }
})();
</script>
<!-- End Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->';
}


?>
<?php if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?><script src="https://hcaptcha.com/1/api.js?hl=<?php echo $Languages_translate; ?>" async defer></script><?php } ?>

<!--Template-->
  <link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['fontawesome']['css']; ?>" rel="stylesheet">
  <script defer src="<?php echo $version['external']['fontawesome']['js']; ?>"></script>
  <!--<link href="<?php //echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['production']['css']['default']; ?>" rel="stylesheet">-->
  <link href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['production']['css']['langs']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['production']['css']['tpl']; ?>" rel="stylesheet">

</head>
<body>


  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $protocols.'://'.$domainTLD; ?>"><?php echo $sites['name']; ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $protocols.'://'.$domainTLD.'/'.$general['index']['url']['default']; ?>"><?php echo $general['index']['title']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $protocols.'://'.$domainTLD.'/'.$email['index']['url']['default']; ?>"><?php echo $email['index']['title']; ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="#">1 Column Portfolio</a>
              <a class="dropdown-item" href="#">2 Column Portfolio</a>
              <a class="dropdown-item" href="#">3 Column Portfolio</a>
              <a class="dropdown-item" href="#">4 Column Portfolio</a>
              <a class="dropdown-item" href="#">Single Portfolio Item</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo $general['pages']['full']['previous']; ?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"><?php echo $general['pages']['full']['next']; ?></span>
      </a>
    </div>
  </header>