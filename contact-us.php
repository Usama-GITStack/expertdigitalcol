<?php include 'Layout/toplinks.php'; ?>
<title>Contact US - Expert Digital Solutions -</title>
<?php include 'Layout/header.php'; ?>
<!--================Header Menu Area =================-->
<section class="content-section" data-aos-once="true" data-aos="fade-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header-font-contactus-new text-white roboto-family-semibold">Contact Us</h1>
                <p class="text-white contact-us-paragraph-set-versio-2" style="color: #efb434 !important;font-style: italic; font-weight: 600;">We are always one step away whenever you require our services. Our customer care team will never turn its back on you.<br>
                    <span style="color: white; font-style: normal; font-weight: 400;"> Whether you need to develop a website or find marketing solutions, we are always at your disposal. EDS will provide you all the solutions to gain clients’ trust and boost your business. We will help you grow your e-business from scratch in a fairly affordable price.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
</main>
<section class="contact-us-setting-card-2" data-aos-once="true" data-aos="fade-up">
    <div class="container">
        <div class="card setting-padding-card-set-version-2 provide-shadow-version-2">
            <div class="row">
                <div class="col-md-12">
                    <img src="./img/Version 2.0/Layer 116@1X.png" style="float: right;">
                    <div class="row set-contact-us-top-margin">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <form method="POST" action="PHP/ContactUSPage.php" class="set-inputs-padding-contactus-page">
                                <div class="form-row" data-aos-once="true" data-aos="fade-up">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">First Name</label>
                                            <input type="text" class="form-control input-padding-set-homepage roboto-family-regular" name="firstname" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Last Name</label>
                                            <input type="text" class="form-control input-padding-set-homepage roboto-family-regular" name="lastname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" data-aos-once="true" data-aos="fade-up">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Company Name</label>
                                            <input type="text" class="form-control input-padding-set-homepage roboto-family-regular" name="companyname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Email</label>
                                            <input type="email" class="form-control input-padding-set-homepage roboto-family-regular" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" data-aos-once="true" data-aos="fade-up">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Phone</label>
                                            <input type="number" class="form-control input-padding-set-homepage roboto-family-regular" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Interest</label>
                                            <input type="text" class="form-control input-padding-set-homepage roboto-family-regular" name="interest" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row" data-aos-once="true" data-aos="fade-up">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="input-lable-font-color-set">Description</label>
                                            <textarea class="form-control input-padding-set-homepage roboto-family-regular" name="message" type="text" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 text-center">
                                        <input type="submit" class="btn button-color-scheme-contact-us-version-2 roboto-family-regular responsive-value-button w-25" value="Request a Free Quote" data-aos-once="true" data-aos="fade-down" style="border: none;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'Layout/footer.php'; ?>
<script>
    $(document).ready(function() {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function() {
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function() {
            $(this).prev(".card-header").css('background', 'transparent').find(".fa").removeClass(
                "fa-plus").addClass("fa-minus");
            $(this).prev(".card-header").css('border', 'none')
        }).on('hide.bs.collapse', function() {
            $(this).prev(".card-header").css('background', '#bdbdbd').find(".fa").removeClass(
                "fa-minus").addClass("fa-plus");
        });
    });
</script>