<?php #  ob_start("native_html_output");  /** Minify HTML start **/ ?>
<!doctype html>
<html lang="<?php echo $DefineTranslateLang; ?>">
<head>
<lien rel="dns-prefetch" href="//<?php echo $CDNdomainTLD; ?>/" />
    <lien rel="dns-prefetch" href="//googletagmanager.com/" />
    <lien rel="dns-prefetch" href="//cdnjs.cloudflare.com/" />
    <lien rel="dns-prefetch" href="//pagead2.googlesyndication.com/" />
    <lien rel="dns-prefetch" href="//www.googletagmanager.com/" />
    <lien rel="dns-prefetch" href="//fonts.googleapis.com/" />
    <lien rel="dns-prefetch" href="//fonts.gstatic.com/" />
    <lien rel="dns-prefetch" href="//code.tidio.co/" />
    <lien rel="dns-prefetch" href="//connect.facebook.net/" />

<!--Multi language-->
<link rel="alternate" href="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" hreflang="x-default" />
<link rel="alternate" href="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" hreflang="<?php echo $DefineTranslateLang; ?>"/>


<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->


    <?php if(!empty($seo['fb-pexel']['key'])){ ?>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $seo['fb-pexel']['key']; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo $seo['fb-pexel']['key']; ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<?php } ?>
<?php if(!empty($apiexternal['clarity.ms'])) { ?>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "<?php echo $apiexternal['clarity.ms']; ?>");
</script>
<?php } ?>
<?php if(!empty($apiexternal['matomo']['id'])) { ?>
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.<?php echo $sites['domain']; ?>"]);
  _paq.push(["setDomains", ["*.<?php echo $sites['domain']; ?>"]]);
  _paq.push(["setDoNotTrack", true]);
  _paq.push(["disableCookies"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//<?php echo $apiexternal['matomo']['url']; ?>/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '<?php echo $apiexternal['matomo']['id']; ?>']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//<?php echo $apiexternal['matomo']['url']; ?>/matomo.php?idsite=<?php echo $apiexternal['matomo']['id']; ?>&amp;rec=1" style="border:0;" alt="matomo" /></p>
<!-- Matomo Image Tracker-->
<img referrerpolicy="no-referrer-when-downgrade" src="https://<?php echo $apiexternal['matomo']['url']; ?>/matomo.php?idsite=<?php echo $apiexternal['matomo']['id']; ?>&amp;rec=1&amp;action_name=images" style="border:0" alt="matomo" />
<!-- End Matomo --></noscript>
<!-- End Matomo Code -->
<?php } ?>
<!--
  WebJet.Cloud is Open-Source PHP community available on github create by @ alexonbstudio
The owner is Alexon Balangue
                                                                               
                                     ▓▓▒  ▓▓  ▓▓                                
                                   ▓▓    ▓  ▓    ▓                              
                                  ▓     ▒    ▓    ▓▒                            
                                ▒▓    ▒▓      ▒    ▓░▒                          
                          ░▓▓         ▓        ▓         ▓▓                     
                         ▓            ▓  ░▓▓   ▓           ▒▓                   
                        ▓             ▓ ░   ▓  ▓            ░▓                  
 ▓▓▓▓ ▓▓▓▓ ▓▓▓▓▓▓▓▓▓▓▓▓▓ ▓▓▓▓▓▓▓▓  ░░ ▓        ▓ ▓▓     ▒▓▓▓ ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓
  ▓ ▓░▓   ▓▓ ▓▓▓  ▓▓▓▓▓▓ ▓  ▓▓▓  ▓▓   ▓        ▓   ▒    ▒▓ ▓ ▓▒ ▓▓▓▓▓▓▓▓▓▓  ▓▓▓▓
  ▓  ▓ ░▓ ▓▒ ▓ ▓      ▓▒▓▒      ▓▓▓   ▓        ▓   ▓    ▒▓ ▓ ▓      ▒    ▓  ▓   
  ▒░   ▓▓    ▓ ▓  ▓     ▒░  ░ ▒▓ ░▓  ▒▓  ▓▓▓░  ▓▓  ░▓░░░▓  ▓▓▓  ▓        ▓  ▓   
   ▓  ▓▓░▓  ▓  ▓       ▓ ░▓▓    ▒▓░   ▓▒▒▓▒▒▓▒▒▓  ░▒▒▓    ▓▓ ▓       ▓   ▓  ▓   
                             ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓                       
                                   ▓    ▓ ▓▓ ░    ▓                             
                                   ▓    ▓ ▓▓ ░    ▓                             
                                   ▓    ▓ ▓░ ░    ▓                             
                      ░▓▓▓         ▓ ▓    ▓░    ▓ ▓        ▓▓▓▓░                
                     ▓░   ▓░░░░░░▒░▓      ▓░      ▓▒▓░░░░░▒░   ▒░               
                     ▓▓  ▓▓              ▓▓▓▓              ▓   ▓                
                                        ▓    ▓                                  
                                        ▓▓░░▓░      

-->

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

if(!empty($seo['yandex']['analystics'])){
	echo '<!-- Yandex.Metrika counter --> 
	<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym('.$seo['yandex']['analystics'].', "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/'.$seo['yandex']['analystics'].'" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->';
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
  echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-'.$marketing['google']['adsense'].'"
  crossorigin="anonymous"></script>';
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
<!-- END SHAREAHOLIC CODE -->';
}
?>

<?php if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?><script src="https://hcaptcha.com/1/api.js?hl=<?php echo $Languages_translate; ?>" async defer></script><?php } ?>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">


  <!--Template-->
  <link href="<?php echo $version['external']['fontawesome']['css']; ?>" rel="stylesheet">
  <script defer src="<?php echo $version['external']['fontawesome']['js']; ?>"></script>

  <link href="<?php echo $version['external']['bootstrap']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $version['external']['bootstrap-icons']['css']; ?>" rel="stylesheet">
  <link href="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['custom']['css'][$sites['template']]; ?>" rel="stylesheet">


</head>
<body>

<main>
   
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3"><?php echo $general['pages']['full']['share']?>:</span>

                                <?php if(!empty($social['facebook']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['facebook']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> FACEBOOK"><i class="fab fa-facebook-f fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['twitter']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['twitter']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITTER"><i class="fab fa-twitter fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['pinterest']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['pinterest']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> PINTEREST"><i class="fab fa-pinterest fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['youtube']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['youtube']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> YOUTUBE"><i class="fab fa-youtube fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['twitch']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['twitch']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITCH"><i class="fab fa-twitch fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['discord']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['discord']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DISCORD"><i class="fab fa-discord fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['dailymotion']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['dailymotion']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DAILYMOTION"><i class="fab fa-dailymotion fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['mixcloud']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['mixcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> MIXCLOUD"><i class="fab fa-mixcloud fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['instagram']['name'])){ ?><li class="social-icon-item"><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['instagram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> INSTAGRAM"><i class="fab fa-instagram fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['linkedin']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['linkedin']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> LINKEDIN"><i class="fab fa-linkedin fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['github']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['github']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> GITHUB"><i class="fab fa-github fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['viadeo']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['viadeo']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> VIADEO"><i class="fab fa-viadeo fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['slack']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['slack']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SLACK"><i class="fab fa-slack fw-normal"></i></a> </li><?php } ?> 
                                <?php if(!empty($social['telegram']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['telegram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TELEGRAM"><i class="fab fa-telegram fw-normal"></i></a> </li><?php } ?> 
                                <?php if(!empty($social['soundcloud']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['soundcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> soundcloud"><i class="fab fa-soundcloud fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['blogger']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['blogger']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> blogger"><i class="fab fa-blogger fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['spotify']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['spotify']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SPOTIFY"><i class="fab fa-spotify fw-normal"></i></a>  </li><?php } ?>
                                <?php if(!empty($social['tiktok']['name'])){ ?><li class="social-icon-item"><a class="social-icon-link" href="<?php echo $social['tiktok']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TIKTOK"><i class="fab fa-tiktok fw-normal"></i></a> </li><?php } ?>	
                            </ul>
                        </p>
                    </div>

                </div>
            </div>
        </header>
  

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $protocols.'://'.$domainTLD; ?>">
                    <?php echo $sites['name']; ?>
                </a>

                <a href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['ask-quotes']['url'][$DefineTranslateLang]; ?>" class="btn custom-btn d-lg-none ms-auto me-4"><?php echo $email['ask-quotes']['title']; ?></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]; ?>"><?php echo $general['index']['title']; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['aboutus']['url'][$DefineTranslateLang]; ?>"><?php echo $general['aboutus']['title']; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['services']['url'][$DefineTranslateLang]; ?>"><?php echo $general['services']['title']; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>"><?php echo $general['pages']['menu']['undermenu']['boutique']; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$general['index']['url'][$DefineTranslateLang]; ?>#section_pricing"><?php echo $general['pages']['menu']['undermenu']['pricing']; ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="https://customers.webjet.cloud"><?php echo $general['pages']['menu']['undermenu']['former']; ?></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="<?php echo $protocols.'://'.$domainTLD.'/'.$DefineTranslateLang.'/'.$email['index']['url'][$DefineTranslateLang]; ?>"><?php echo $email['index']['title']; ?></a>
                        </li>
                    </ul>

                    <a href="https://calendly.com/webjetclouds" class="btn custom-btn d-lg-block d-none"><?php echo $general['pages']['menu']['undermenu']['rdv']; ?></a>
                </div>
            </div>
        </nav>



        <section class="about-section section-padding" id="section_pages">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4"><?php echo $title; ?></h2>

                            <p class="text-white"><?php echo $description; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>" class="about-image img-fluid" alt="<?php echo $title; ?>">
                            <!--
                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>a happy moment</h3>

                                    <p class="mb-0">your amazing festival experience with us</p>
                                </div>
                            </div>-->
                        </div>
                    </div>

                </div>
            </div>
        </section>

