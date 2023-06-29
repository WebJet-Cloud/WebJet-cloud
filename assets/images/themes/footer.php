


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/bing.svg" alt="bing">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/bootstrap.svg" alt="bootstrap">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/composer.svg" alt="composer PHP">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/facebook.svg" alt="facebook">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/fontawesome.svg" alt="fontawesome">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/github.svg" alt="github">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/json-ld.svg" alt="json-ld">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/json.svg" alt="json">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/letsencrypt.svg" alt="letsencrypt">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/linux.svg" alt="linux">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/ovh.svg" alt="ovh">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/php.svg" alt="php">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/planethoster.svg" alt="planethoster">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/stripe.svg" alt="stripe">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/vistaprint.png" alt="vistaprint">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/yandex.svg" alt="yandex">
                    <img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/slacker/microsoft.svg" alt="microsoft">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        
                        
                        <p class="mt-3 mb-4"><a href=""></a><img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/Web_Jet-logo.png" class="img-fluid"></a></p>
                       
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Entrer en contact</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Paris, France</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">services[AT]webjet.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <?php if(!empty($social['facebook']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['facebook']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> FACEBOOK"><i class="fab fa-facebook-f fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['twitter']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['twitter']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITTER"><i class="fab fa-twitter fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['pinterest']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['pinterest']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> PINTEREST"><i class="fab fa-pinterest fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['youtube']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['youtube']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> YOUTUBE"><i class="fab fa-youtube fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['twitch']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['twitch']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITCH"><i class="fab fa-twitch fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['discord']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['discord']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DISCORD"><i class="fab fa-discord fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['dailymotion']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['dailymotion']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DAILYMOTION"><i class="fab fa-dailymotion fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['mixcloud']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['mixcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> MIXCLOUD"><i class="fab fa-mixcloud fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['instagram']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['instagram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> INSTAGRAM"><i class="fab fa-instagram fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['linkedin']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['linkedin']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> LINKEDIN"><i class="fab fa-linkedin fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['github']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['github']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> GITHUB"><i class="fab fa-github fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['viadeo']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['viadeo']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> VIADEO"><i class="fab fa-viadeo fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['slack']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['slack']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SLACK"><i class="fab fa-slack fa-3x fw-normal"></i></a><?php } ?> 
                                <?php if(!empty($social['telegram']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['telegram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TELEGRAM"><i class="fab fa-telegram fa-3x fw-normal"></i></a><?php } ?> 
                                <?php if(!empty($social['soundcloud']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['soundcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> soundcloud"><i class="fab fa-soundcloud fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['blogger']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['blogger']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> blogger"><i class="fab fa-blogger fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['spotify']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['spotify']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SPOTIFY"><i class="fab fa-spotify fa-3x fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['tiktok']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['tiktok']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TIKTOK"><i class="fab fa-tiktok fa-3x fw-normal"></i></a><?php } ?>		
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Liens rapides</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Logo</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Documentation</a>
                                <a class="text-light mb-2" href="https://lives.webjet.cloud/blog"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                                <a class="text-light mb-2" href="https://lives.webjet.cloud/forums/"><i class="bi bi-arrow-right text-primary me-2"></i>Forum / Communauté</a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/releases"><i class="bi bi-arrow-right text-primary me-2"></i>Télécharger</a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/releases"><i class="bi bi-arrow-right text-primary me-2"></i>Version</a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/blob/main/LICENSE"><i class="bi bi-arrow-right text-primary me-2"></i>Licences</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Autres</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <div id="google_translate_element"></div>
                                <script type="text/javascript">function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: <?php echo '\''.$DefineTranslateLang.'\''; ?>},'google_translate_element');}</script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                <br>
                                <div class="grade grade-<?php echo strtolower(substr($JE_DSslLabsOut->endpoints['0']->grade,0,1)); ?>">
                                    <a target="_blank" href="https://www.ssllabs.com/ssltest/analyze.html?d=<?php echo $JE_DSslLabsOut->host; ?>&s=<?php echo $JE_DSslLabsOut->endpoints['0']->ipAddress
                                    ; ?>">
                                        <b><?php echo $JE_DSslLabsOut->endpoints['0']->grade; ?></b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; 2022-<?php echo date('Y'); ?> Tous Droits Réservés | Powered by <a class="text-white border-bottom" href="#">WebJet</a> Open-Source PHP
						<br>
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						<?php echo $law['full']['content']['designer']; ?>: <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a> <?php echo $law['full']['content']['distributed']; ?>: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> <?php echo $law['full']['content']['developper']; ?>: <a class="border-bottom" href="https://alexonb.studio" target="_blank">Alexonb.Studio</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!--Template-->

  <script src="<?php echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php echo $version['external']['bootstrap']['js']; ?>"></script>
  <script src="<?php echo $version['external']['jquery.easing']['js']; ?>"></script>
  <script src="<?php echo $version['external']['owl.carousel']['js']; ?>"></script>
  <script src="<?php echo $version['external']['counterup2']['js']; ?>"></script>
  <script src="<?php echo $version['external']['waypoints']['js']; ?>"></script>
  <script src="<?php echo $version['external']['wow']['js']; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['production']['js']['startup']; ?>"></script>
  <!--<script src="<?php echo $version['external']['intl-tel-input']['js']; ?>"></script>
  
	<script>

		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
			initialCountry: "auto",
			geoIpLookup: function(success, failure) {
				$.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					var countryCode = (resp && resp.country) ? resp.country : "";
					success(countryCode);
				});
			}
		});

		var iti = window.intlTelInputGlobals.getInstance(input);
		iti.isValidNumber(); 

  </script>-->
    
  <?php if(!empty($seo['addthis']['key'])){ ?>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $seo['addthis']['key']; ?>"></script>
  <?php } ?>
  <?php if(!empty($seo['google']['tag-manager'])){ ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $seo['google']['tag-manager']; ?>"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php } ?>
  <?php 
  if(!empty($seo['crisp']['key'])){ 
	echo '<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="'.$seo['crisp']['key'].'";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>';
  }
  ?>
  <script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
    <?php  if(!empty($seo['tidio']['key'])){  ?>
  <script src="//code.tidio.co/<?php echo $seo['tidio']['key']; ?>.js" async></script>
	<?php } ?>

  <?php if(!empty($social['facebook']['page-id'])){ ?>
<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "<?php echo $social['facebook']['page-id']; ?>");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/<?php echo $DefineTranslateLang.'_'.$DefineMajLang; ?>/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<?php } ?>


<?php //echo $general['index']['url'][$DefineTranslateLang]; ?>
</body>
</html>


<?php ob_end_flush(); ?>   