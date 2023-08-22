

            <p>&copy; 2022-<?php echo date('Y'); ?> All Right Reserved | Powered by <a href="<?php echo $protocols.'://webjet.cloud'; ?>">WebJetClouds</a>.</p>




<!--Template-->
    <!-- JAVASCRIPT FILES -->
    <script src="<?php # echo $version['external']['jquery']['js']; ?>"></script>
  <script src="<?php # echo $version['external']['bootstrap']['js']; ?>"></script>
  <script src="<?php # echo $version['external']['jquery-sticky']['js']; ?>"></script>
  <script src="<?php # echo $protocols.'://'.$CDNdomainTLD.'/'.$version['internal']['custom']['js'][$sites['template']]; ?>"></script>
  <!--<script src="<?php # echo $version['external']['intl-tel-input']['js']; ?>"></script>
  
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


<?php #ob_end_flush(); /** Minify HTML end **/ ?>   