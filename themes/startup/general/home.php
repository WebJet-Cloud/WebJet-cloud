

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0"><?php echo $general['index']['content']['menu']['client-s']; ?>

                            </h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0"><?php echo $general['index']['content']['menu']['project-f']; ?></h5>
                            <h1 class="mb-0" data-toggle="counter-up">4</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-code-branch text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0"><?php echo $general['index']['content']['menu']['version-a']; ?></h5>
                            <h1 class="text-white mb-0"><?php echo $credits['version']['stable']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['about']['aboutus']; ?></h5>
                        <h1 class="mb-0"><?php echo $general['index']['content']['about']['whatis'].' '.$sites['name']; ?></h1>
                    </div>
                    <p class="mb-4"></p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['1']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['2']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['3']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['4']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['5']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['left']['6']; ?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['1']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['2']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['3']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['4']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['5']; ?></h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i><?php echo $general['index']['content']['about']['under']['right']['6']; ?></h5>
                        </div>
                    </div>
                    <a href="<?php echo $protocols.'://'.$domainTLD.'/'.$email['ask-quotes']['url']['default']; ?>" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s"><?php echo $email['ask-quotes']['title']; ?></a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <?php echo $services['intro-video'][$DefineTranslateLang]; ?>
                        <!--<img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/Web_Jet-logo.png" style="object-fit: cover;">-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['features']['container']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $general['index']['content']['features']['container']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4><?php echo $general['index']['content']['features']['blocks']['1']['title']; ?></h4>
                            <p class="mb-0"><?php echo $general['index']['content']['features']['blocks']['1']['description']; ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa-solid fa-bug text-white"></i>
                                
                            </div>
                            <h4><?php echo $general['index']['content']['features']['blocks']['2']['title']; ?></h4>
                            <p class="mb-0"><?php echo $general['index']['content']['features']['blocks']['2']['description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/trade-expotientiel.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4><?php echo $general['index']['content']['features']['blocks']['3']['title']; ?></h4>
                            <p class="mb-0"><?php echo $general['index']['content']['features']['blocks']['3']['description']; ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4><?php echo $general['index']['content']['features']['blocks']['4']['title']; ?></h4>
                            <p class="mb-0"><?php echo $general['index']['content']['features']['blocks']['4']['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['services']['container']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $general['index']['content']['services']['container']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['1']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['1']['description']; ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['2']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['2']['description']; ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['3']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['3']['description']; ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa-solid fa-bug text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['4']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['4']['description']; ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['5']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['5']['description']; ?></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-info text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['6']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['6']['description']; ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['pricing']['container']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $general['index']['content']['pricing']['container']['description']; ?></h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <small class="text-uppercase"><?php echo $general['index']['content']['pricing']['blocks']['small']['1']; ?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $sites['tarifs']['money']; ?></small><?php echo $sites['tarifs']['plan']['basic']; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> HT/ <?php echo $general['index']['content']['pricing']['blocks']['small']['ho']; ?></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['2']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['3']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['4']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['5']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>/all/numerique/creation-de-site-vitrine/" class="btn btn-primary py-2 px-4 mt-4"><?php echo $general['index']['content']['pricing']['blocks']['btn']['1']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <small class="text-uppercase"><?php echo $general['index']['content']['pricing']['blocks']['small']['2']; ?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $sites['tarifs']['money']; ?></small><?php echo $sites['tarifs']['plan']['standard']; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> HT/ <?php echo $general['index']['content']['pricing']['blocks']['small']['ho']; ?></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['2']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['3']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['4']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['5']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>/all/numerique/creation-de-blog/" class="btn btn-primary py-2 px-4 mt-4"><?php echo $general['index']['content']['pricing']['blocks']['btn']['2']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <small class="text-uppercase"><?php echo $general['index']['content']['pricing']['blocks']['small']['3']; ?></small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $sites['tarifs']['money']; ?></small><?php echo $sites['tarifs']['plan']['premium']; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> HT/ <?php echo $general['index']['content']['pricing']['blocks']['small']['ho']; ?></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['2']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $general['index']['content']['pricing']['blocks']['3']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['4']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $general['index']['content']['pricing']['blocks']['5']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>/all/numerique/creation-de-e-commerce/" class="btn btn-primary py-2 px-4 mt-4"><?php echo $general['index']['content']['pricing']['blocks']['btn']['3']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['quotes']['container']['title']; ?></h5>
                        <h1 class="mb-0"><?php echo $general['index']['content']['quotes']['container']['description']; ?></h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i><?php echo $general['index']['content']['quotes']['blocks']['1'] ; ?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo $general['index']['content']['quotes']['blocks']['2'] ; ?></h5>
                        </div>
                    </div>
                    <p class="mb-4"><?php echo $general['index']['content']['quotes']['blocks']['3'] ; ?></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo $general['index']['content']['quotes']['blocks']['4'] ; ?></h5>
                            <h4 class="text-primary mb-0"><?php echo $business['local']['mobile']['code'].' '.$business['local']['mobile']['number']; ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                       
                            <div class="row g-3">
                                <div class="col-12">
                                    <a href="<?php echo $protocols.'://'.$domainTLD.'/'.$email['ask-quotes']['url']['default']; ?>" class="btn btn-dark w-100 py-3"><?php echo $email['ask-quotes']['title']; ?></a>
                                </div>
                                <div class="col-12">
                                    <a href="<?php echo $protocols.'://'.$domainTLD.'/'.$email['index']['url']['default']; ?>" class="btn btn-dark w-100 py-3"><?php echo $email['index']['title']; ?></a>
                                </div>
                                <div class="col-12">
                                        <!-- Début de widget de lien Calendly -->
                                        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                                        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                                        <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/webjetclouds?hide_landing_page_details=1&hide_gdpr_banner=1'});return false;" class="btn btn-dark w-100 py-3"><?php echo $email['index']['content']['container']['calendly']; ?></a>
                                        <!-- Fin de widget de lien Calendly -->
                                </div>    
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <!-- 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    // -->
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $general['index']['content']['teams']['container']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $general['index']['content']['teams']['container']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/alexonbstudio.jpeg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/alexonbstudio"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/alexonbstudio"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.pinterest.com/alexonbstudios/"><i class="fab fa-pinterest fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">AlexonbStudio</h4>
                            <p class="text-uppercase m-0"><?php echo $general['index']['content']['teams']['function']['developper'].'<br>'.$general['index']['content']['teams']['function']['webmaster']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/themewagon.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/themewagon"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/themewagon"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.pinterest.com/themewagon/"><i class="fab fa-pinterest fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">ThemeWagon</h4>
                            <p class="text-uppercase m-0"><?php echo $general['index']['content']['teams']['function']['webdesigner']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir']; ?>/startup/htmlcodex.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/htmlcodex"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/htmlcodex"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.pinterest.com/htmlcodex/"><i class="fab fa-pinterest fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">HTML Codex</h4>
                            <p class="text-uppercase m-0"><?php echo $general['index']['content']['teams']['function']['designer']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <div class="col-12 col-lg-9">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.9891821126616!2d2.2895651763841434!3d48.87748277133474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f74e59e0bb3%3A0x29c81d7d11d0052f!2sWebJetClouds!5e0!3m2!1sfr!2sfr!4v1685191542958!5m2!1sfr!2sfr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-12 col-lg-3">
           <img class="img-fluid" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['salp']; ?>" alt="<?php echo $business['local']['salp']; ?>"><br>
             <span><?php echo $services['consulting']['content']['footer']['n-agree'].' '.$business['local']['salp']; ?></span><br />
           <img class="img-fluid" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['others']['assurup']; ?>" alt="Assurup"><br>
           <span>N° RCP23052584222</span><br />
           <a href="https://g.page/r/CS8F0BF9HcgpEBI/review" rel="dofollow"><img class="img-fluid" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['others']['g-advice']; ?>" alt="Google advice"></a><br>
           
            </div> 
         </div> 
     </div> 