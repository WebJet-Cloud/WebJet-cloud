

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        
                        
                        <p class="mt-3 mb-4">
                            <a href="<?php echo $protocols.'://'.$domainTLD; ?>"></a><img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/Web_Jet-logo.png" class="img-fluid"></a><br>
                            <?php echo 'www.'.$sites['domain'].' '.$general['pages']['full']['footer-os']; ?>
                        </p>
                       
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $general['pages']['menu']['footer']['enter-contact']; ?></h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0"><?php echo $private['city'].', '.$private['contry']; ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0"><?php echo $private['mail']['public'].'[AT]'.$sites['domain']; ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0"><?php echo $business['local']['mobile']['code'].' '.$business['local']['mobile']['number']; ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <p class="mb-0"><?php echo $general['full']['clock']['1'].'<br />'.$general['full']['clock']['2'].'<br />'.$general['full']['clock']['3']; ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <?php if(!empty($social['facebook']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['facebook']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> FACEBOOK"><i class="fab fa-facebook-f fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['twitter']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['twitter']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITTER"><i class="fab fa-twitter fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['pinterest']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['pinterest']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> PINTEREST"><i class="fab fa-pinterest fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['youtube']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['youtube']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> YOUTUBE"><i class="fab fa-youtube fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['twitch']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['twitch']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TWITCH"><i class="fab fa-twitch fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['discord']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['discord']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DISCORD"><i class="fab fa-discord fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['dailymotion']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['dailymotion']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> DAILYMOTION"><i class="fab fa-dailymotion fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['mixcloud']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['mixcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> MIXCLOUD"><i class="fab fa-mixcloud fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['instagram']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['instagram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> INSTAGRAM"><i class="fab fa-instagram fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['linkedin']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['linkedin']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> LINKEDIN"><i class="fab fa-linkedin fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['github']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['github']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> GITHUB"><i class="fab fa-github fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['viadeo']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['viadeo']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> VIADEO"><i class="fab fa-viadeo fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['slack']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['slack']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SLACK"><i class="fab fa-slack fw-normal"></i></a><?php } ?> 
                                <?php if(!empty($social['telegram']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['telegram']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TELEGRAM"><i class="fab fa-telegram fw-normal"></i></a><?php } ?> 
                                <?php if(!empty($social['soundcloud']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['soundcloud']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> soundcloud"><i class="fab fa-soundcloud fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['blogger']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['blogger']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> blogger"><i class="fab fa-blogger fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['spotify']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['spotify']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> SPOTIFY"><i class="fab fa-spotify fw-normal"></i></a> <?php } ?>
                                <?php if(!empty($social['tiktok']['name'])){ ?><a class="btn btn-primary btn-square me-2" href="<?php echo $social['tiktok']['url']; ?>" data-toggle="tooltip" title="<?php echo $general['pages']['full']['follow-us']; ?> TIKTOK"><i class="fab fa-tiktok fw-normal"></i></a><?php } ?>		
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $general['pages']['menu']['footer']['link-speed']; ?></h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="<?php echo $protocols.'://docs.'.$sites['domain']; ?>/others/logo-design"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['logo']; ?></a>
                                <a class="text-light mb-2" href="<?php echo $protocols.'://docs.'.$sites['domain']; ?>"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['docs']; ?></a>
                                <a class="text-light mb-2" href="<?php echo $protocols.'://'.$domainTLD.'/'.$law['pages']['url']['default']; ?>"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $law['pages']['title']; ?></a>
                                <a class="text-light mb-2" href="<?php echo $protocols.'://tripecotech.blog'; ?>"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['blog']; ?></a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/releases"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['downloads']; ?></a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/releases"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['v']; ?></a>
                                <a class="text-light mb-2" href="https://github.com/WebJet-Cloud/WebJet-cloud/blob/main/LICENSE"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $general['pages']['menu']['undermenu']['licences']; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0"><?php echo $general['pages']['menu']['footer']['others']; ?></h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <div id="google_translate_element"></div>
                                <script type="text/javascript">function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: <?php echo '\''.$DefineTranslateLang.'\''; ?>},'google_translate_element');}</script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                <br>
                                <div class="grade grade-<?php echo strtolower(substr($JE_DSslLabsOut->endpoints['0']->grade,0,1)); ?>">
                                    <a target="_blank" href="https://www.ssllabs.com/ssltest/analyze.html?d=<?php echo $JE_DSslLabsOut->host; ?>&s=<?php echo $JE_DSslLabsOut->endpoints['0']->ipAddress; ?>">
                                        <b><?php echo $JE_DSslLabsOut->endpoints['0']->grade; ?></b>
                                    </a>
                                </div>
                                <br>
                                <a href="https://www.servicesalapersonne.gouv.fr/files_sap/files/publications/les-sap-pour-tout-savoir.pdf"><img class="img-fluid" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['salp']; ?>"></a><br>
                                <span><?php echo $services['consulting']['content']['footer']['credit-impot']; ?></span><br>
                                <span><?php echo $services['consulting']['content']['footer']['n-agree'].' '.$business['local']['salp']; ?></span>
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
                        <p class="mb-0">&copy; 2022-<?php echo date('Y'); ?> <?php echo $law['full']['content']['footer']; ?> | <?php echo $law['full']['content']['powered']; ?> <a class="text-white border-bottom" href="<?php echo $protocols.'://'.$domainTLD; ?>"><?php echo $sites['name']; ?></a> <?php echo $general['pages']['full']['footer-os']; ?>
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

  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['libs']['wow']['js']; ?>"></script>
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['libs']['easing']['js']; ?>"></script>
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['libs']['waypoints']['js']; ?>"></script>
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['libs']['counterup']['js']; ?>"></script>
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['libs']['owlcarousel']['js']; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['custom']['js']['startup']; ?>"></script>
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