
    
<!-- intro -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['intro']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['consulting']['content']['intro']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <p>
                <?php echo $services['consulting']['content']['intro']['text']; ?>
                </p>
            </div>
        </div>
    </div>
        
<!-- excel -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['excel']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['consulting']['content']['excel']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col"><?php echo $services['consulting']['content']['excel']['table']['head']['1']; ?></th>
                                <th scope="col"><?php echo $services['consulting']['content']['excel']['table']['head']['2']; ?></th>
                                <th scope="col"><?php echo $services['consulting']['content']['excel']['table']['head']['3']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                                
                            <tr class="align-middle">
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['1']['tr']['1']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['1']['tr']['2']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['1']['tr']['3']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['2']['tr']['1']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['2']['tr']['2']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['2']['tr']['3']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['3']['tr']['1']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['3']['tr']['2']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['3']['tr']['3']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['4']['tr']['1']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['4']['tr']['2']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['4']['tr']['3']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['5']['tr']['1']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['5']['tr']['2']; ?></td>
                                <td><?php echo $services['consulting']['content']['excel']['table']['body']['5']['tr']['3']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    
<!-- Ma Formation et mon parcours professionnel -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['for-pro']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['consulting']['content']['for-pro']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <p>
                <?php echo $services['consulting']['content']['for-pro']['text']; ?>
                </p>
            </div>
        </div>
</div>
        
    
<!-- secteur 1 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['1']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['1']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['1']['text']; ?>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['1']; ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
        
 
    
<!-- secteur 2 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['2']; ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['2']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['2']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['2']['text']; ?>
            </div>
        </div>
    </div>
</div>

 
    
<!-- secteur 3 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">

                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['3']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['3']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['3']['text']; ?>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['3']; ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

 
    
<!-- secteur 4 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['4']; ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">

                 <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['4']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['4']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['4']['text']; ?>
            </div>
        </div>
    </div>
</div>

 
    
<!-- secteur 5 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">

                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['5']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['5']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['5']['text']; ?>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['5']; ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


 
    
<!-- secteur 6 -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['services']['consultant']['6']; ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">

                    <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['consulting']['content']['secteur']['6']['h5']; ?></h5>
                    <h1 class="mb-0"><?php echo $services['consulting']['content']['secteur']['6']['h1']; ?></h1>
                </div>
                <p class="mb-4"></p>
                <?php echo $services['consulting']['content']['secteur']['6']['text']; ?>
            </div>
        </div>
    </div>
</div>




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
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"> <?php echo $services['consulting']['content']['pricing']['free']; ?></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>--</span></div>
                            <a href="<?php echo $protocols.'://'.$sites['domain'].'/'.$email['ask-quotes']['url'][$DefineTranslateLang]; ?>" class="btn btn-primary py-2 px-4 mt-4"><?php echo $general['index']['content']['quotes']['container']['title']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $sites['tarifs']['money']; ?></small><?php echo $sites['tarifs']['plan']['basic']; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> HT/ <?php echo $general['index']['content']['pricing']['blocks']['small']['ho']; ?></small>
                            </h1>
                            
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['1']['h1']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['2']['h1']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['3']['h1']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['4']['h1']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['5']['h1']; ?></span><i class="fa fa-times text-danger pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['6']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>/all/numerique/creation-de-blog/" class="btn btn-primary py-2 px-4 mt-4">Assistant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"><?php echo $sites['tarifs']['money']; ?></small><?php echo $sites['tarifs']['plan']['premium']; ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"> HT/ <?php echo $general['index']['content']['pricing']['blocks']['small']['ho']; ?></small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['1']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['2']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span><?php echo $services['consulting']['content']['secteur']['3']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['4']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['5']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span><?php echo $services['consulting']['content']['secteur']['6']['h1']; ?></span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="<?php echo $protocols.'://stores.'.$sites['domain']; ?>/all/numerique/creation-de-e-commerce/" class="btn btn-primary py-2 px-4 mt-4">Consultant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['cybersecurity']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['2']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['2']['description']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['marketing']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['3']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['3']['description']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['webmaster']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa-solid fa-bug text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['4']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['4']['description']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['developper']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['5']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['5']['description']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['seo']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-info text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php echo $general['index']['content']['services']['blocks']['6']['title']; ?></h4>
                        <p class="m-0"><?php echo $general['index']['content']['services']['blocks']['6']['description']; ?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['consulting']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
