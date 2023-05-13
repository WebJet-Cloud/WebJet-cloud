
    
<!-- intro -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['developper']['content']['intro']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['developper']['content']['intro']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <p>
                <?php echo $services['developper']['content']['intro']['text']; ?>
                </p>
            </div>
        </div>
    </div>
        
<!-- excel -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['developper']['content']['excel']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['developper']['content']['excel']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr class="align-middle">
                                <th scope="col"><?php echo $services['developper']['content']['excel']['table']['head']['1']; ?></th>
                                <th scope="col"><?php echo $services['developper']['content']['excel']['table']['head']['2']; ?></th>
                                <th scope="col"><?php echo $services['developper']['content']['excel']['table']['head']['3']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                                
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['1']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['1']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['2']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['2']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['3']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['3']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['4']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['4']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['5']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['5']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['6']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['6']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['7']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['7']['tr']['2']; ?></td>
                            </tr>
                            <tr class="align-middle">
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['8']['tr']['1']; ?></td>
                                <td><?php echo $services['developper']['content']['excel']['table']['body']['8']['tr']['2']; ?></td>
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
                <h5 class="fw-bold text-primary text-uppercase"><?php echo $services['developper']['content']['for-pro']['title']; ?></h5>
                <h1 class="mb-0"><?php echo $services['developper']['content']['for-pro']['description']; ?></h1>
            </div>
            <div class="row g-5">
                <p>
                <?php echo $services['developper']['content']['for-pro']['text']; ?>
                </p>
            </div>
        </div>
</div>
        

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
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo $protocols.'://'.$domainTLD.'/'.$services['developper']['url']['default']; ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
