
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $description; ?></p>
        </div>

        <div class="row">
      <div class="col-lg-12">
	  .	<?php if(!empty($business['local']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['business']['title']; ?></h3>
		   Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l'économie numérique, il est précisé aux utilisateurs du site WebJetClouds l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.

<h3>Edition du site </h3>

  Le présent site, accessible à l’URL <?php echo $sites['auto']['domain']; ?> (le « Site »), est édité par :
  <?php echo $business['local']['name']; ?>, société au capital de <?php echo $business['local']['capital-euro']; ?>, inscrite au R.C.S. de <?php echo $business['local']['city']; ?> sous le numéro RCS <?php echo $business['local']['rcs-number']; ?>, dont le siège social est situé au <?php echo $business['local']['address'].' '.$business['local']['postal'].' '.$business['local']['city']; ?>, représenté(e) par Alexon Balangue dûment habilité(e)

  <h4><strong>Le numéro individuel TVA de l’éditeur est :</strong> <?php echo $business['local']['vat']; ?><h4>

  <strong>Les présents sites, également accessible aux autres URL :</strong>
  <ul>
  <li>Store.WebJet.Cloud</li>
  <li>1Troc1.Site</li>
  <li>1Euro1.Agency</li>
  <li>Boost-Vos-Achat.Fr & Boost-Vos-Achat.Be</li>
  <li>Alexonb.Studio</li>
  <li>Roxannes-Skin.Store</li>
  <li>TripEco.Tech & TripEcoTech.Blog</li>
  <li>The-familly.com</li>
  </ul>
		
	    <?php } else { ?>
           <h3><?php echo $law['legal']['content']['owner']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['owner']['name']; ?></strong> <?php echo $private['name']; ?><br />
				
				<strong><?php echo $law['legal']['content']['owner']['status']; ?></strong> <?php echo $law['legal']['content']['status']['particular']; ?>
				
			</p>
	    <?php } ?> 

		  
		   <?php if(!empty($hosting['server']['internal']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['hosting']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['hosting']['name']; ?></strong> <a href="<?php echo $protocols.'://'.$hosting['server']['internal']['site']; ?>"><?php echo $hosting['server']['internal']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['hosting']['address']; ?></strong> <?php echo $hosting['server']['internal']['address'].' '.$hosting['server']['internal']['postal'].' '.$hosting['server']['internal']['city'].' '.$hosting['server']['internal']['contry']; ?>
				
			</p>
		   
		   <?php } ?> 
		   <?php if(!empty($hosting['server']['external']['cloud']['google']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['server']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['server']['name']; ?></strong> <a href="<?php echo $protocols.'://'.$hosting['server']['external']['cloud']['google']['site']; ?>"><?php echo $hosting['server']['external']['cloud']['google']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['server']['address']; ?></strong> <?php echo $hosting['server']['external']['cloud']['google']['address'].' '.$hosting['server']['external']['cloud']['google']['postal'].' '.$hosting['server']['external']['cloud']['google']['city'].' '.$hosting['server']['external']['cloud']['google']['contry']; ?>
				
			</p>
		   <?php } ?> 
		   <?php if(!empty($hosting['server']['external']['cdn']['cloudflare']['name'])){ ?>
           <h3><?php echo $law['legal']['content']['server']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['server']['name']; ?></strong> <a href="<?php echo $protocols.'://'.$hosting['server']['external']['cdn']['cloudflare']['site']; ?>"><?php echo $hosting['server']['external']['cdn']['cloudflare']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['server']['address']; ?></strong> <?php echo $hosting['server']['external']['cdn']['cloudflare']['address'].' '.$hosting['server']['external']['cdn']['cloudflare']['postal'].' '.$hosting['server']['external']['cdn']['cloudflare']['city'].' '.$hosting['server']['external']['cdn']['cloudflare']['contry']; ?>
				
			</p>
		   <?php } ?> 
           <h3><?php echo $law['legal']['content']['credits']['title']; ?></h3>
		   <p>
				<strong><?php echo $law['legal']['content']['credits']['developper']; ?></strong> <?php 
					echo '<a href="'.$protocols.'://'.$credits['developper']['alexonbstudio']['url'].'">'.$credits['developper']['alexonbstudio']['name'].'</a> <a href="'.$protocols.'://'.$credits['developper']['PHPMailer']['url'].'">'.$credits['developper']['PHPMailer']['name'].'</a> <a href="'.$protocols.'://'.$credits['developper']['joomla']['url'].'">'.$credits['developper']['joomla']['name'].'</a> <a href="'.$protocols.'://'.$credits['developper']['icamys']['url'].'">'.$credits['developper']['icamys']['name'].'</a> <a href="'.$protocols.'://'.$credits['developper']['giggsey']['url'].'">'.$credits['developper']['giggsey']['name'].'</a> <a href="'.$protocols.'://'.$credits['developper']['google']['url'].'">'.$credits['developper']['google']['name'].'</a>'; 
					?><br>
				<strong><?php echo $law['legal']['content']['credits']['designer']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['designer']['alexonbstudio']['url']; ?>"><?php echo $credits['designer']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['webmaster']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['webmaster']['alexonbstudio']['url']; ?>"><?php echo $credits['webmaster']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['marketing']; ?></strong> -<br />
				<strong><?php echo $law['legal']['content']['credits']['image']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['images']['alexonbstudio']['url']; ?>"><?php echo $credits['images']['alexonbstudio']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['pexels']['url'].'">'.$credits['images']['pexels']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['pixabay']['url'].'">'.$credits['images']['pixabay']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['wikimedia']['url'].'">'.$credits['images']['wikimedia']['name'].'</a>, <a href="'.$protocols.'://'.$credits['images']['unsplash']['url'].'">'.$credits['images']['unsplash']['name']; ?></a><br />
				<!--<strong><?php echo $law['legal']['content']['credits']['photographer']; ?></strong> -<br />-->
				<strong><?php echo $law['legal']['content']['credits']['video']; ?></strong> <a href="<?php echo $protocols.'://'.$credits['video']['alexonbstudio']['url']; ?>"><?php echo $credits['video']['alexonbstudio']['name']; ?></a><br />
				<strong><?php echo $law['legal']['content']['credits']['webdesigner']; ?></strong>  <a href="<?php echo $credits['webdesigner']['bootstrapmade']['url']; ?>"><?php echo $credits['webdesigner']['bootstrapmade']['name']; ?></a>
				
			</p>
           <h3><?php echo $law['legal']['content']['software']['title']; ?></h3>
		   <p>
			<strong><?php echo $law['legal']['content']['software']['title']; ?></strong> <?php echo $law['legal']['content']['software']['wp']; ?> - CC-BY-SA - Alexon Balangue<br />
			License: GNU GPL V3.0
		   </p>
		   

		   <h3> Directeur de publication </h3><br />
			<p>Le Directeur de la publication du Site est Alexon Balangue. (www.alexonb.studio)
			<br /><br />
			Nous contacter <br />
			Par téléphone : <?php echo $business['local']['mobile']['code'].' '.$business['local']['mobile']['number']; ?><br />
			Par email : services@webjet.cloud<br />
			Par courrier : <?php echo $business['local']['address'].' '.$business['local']['postal'].' '.$business['local']['city']; ?><br /><br /></p>

			<h3>Données personnelles</h3>
			<br />
			<p>Le traitement de vos données à caractère personnel est régi par notre Charte du respect de la vie privée, disponible depuis la section "Charte de Protection des Données Personnelles", conformément au Règlement Général sur la Protection des Données 2016/679 du 27 avril 2016 («RGPD»).</p>
				
      </div>
        </div>

      </div>
    </section><!-- End Services Section -->