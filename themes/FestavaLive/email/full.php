
<section class="contact-section section-padding" id="section_email">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4"><?php echo $email['index']['title']; ?></h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactForm" type="button" role="tab"
                                    aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                                aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" method="post"
                                    role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="name" id="name"
                                                    class="form-control" placeholder="<?php echo $email['index']['content']['default']['name']; ?>" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="email" id="email"
                                                    class="form-control" placeholder="<?php echo $email['index']['content']['default']['email']; ?>" required>
                                            </div>
                                        </div>
                                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="<?php echo $email['index']['content']['default']['phone']; ?>" required>
                                        

                                        <input type="text" name="subject" id="subject"
                                            class="form-control" placeholder="<?php echo $email['index']['content']['default']['subject']; ?>" required>

                                        <textarea name="message" rows="3" class="form-control"
                                            id="message" placeholder="<?php echo $email['index']['content']['default']['message']; ?>"></textarea>
                                        
                                        <?php  if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?>
                                            <div class="h-captcha" data-sitekey="<?php echo $apiexternal['captcha']['hcaptcha']['public']; ?>" data-theme="dark"></div>
                                        <?php 
                                            }
                                            if(!empty($apiexternal['captcha']['google']['public'])){
                                        ?>
                                             <!-- Ajouter le widget reCAPTCHA V3 -->
                                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                                        <?php } ?>
                                       

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control"><?php echo $email['index']['content']['form']['send']; ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                                aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.9891821126644!2d2.2895651759961155!3d48.87748277133469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f74e59e0bb3%3A0x29c81d7d11d0052f!2sWebJetClouds!5e0!3m2!1sfr!2sfr!4v1685968302705!5m2!1sfr!2sfr"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



<?php if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?>
        <script>
$("form").submit(function(event) {

   var hcaptchaVal = $('[name=h-captcha-response]').value;
   if (hcaptchaVal === "") {
      event.preventDefault();
      alert("Please complete the hCaptcha");
   }
});
</script>

<?php 
}
if(!empty($apiexternal['captcha']['google']['public'])){
?>
<!-- Inclure le script reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo $apiexternal['captcha']['google']['public']; ?>"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo $apiexternal['captcha']['google']['public']; ?>', {action: 'contact'}).then(function(token) {
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>
<?php } ?>