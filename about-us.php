<?php include 'Layout/toplinks.php'; ?>
<title>About US - Expert Digital Solutions -</title>
<?php include 'Layout/header.php'; ?>
<!--================Header Menu Area =================-->
<section class="content-section sidemargin-newversion-banner-image" data-aos-once="true" data-aos="fade-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img src="img/Version 2.0/bannersidepic.png" class="floating img-fluid">
            </div>
            <div class="col-md-6 align-self-center">
                <h1 class="aboutus-versio-2 roboto-family-semibold text-white">Your trust<br>
                    <span class="setting-the-fornt-color">
                        is our asset!</span>
                </h1>
                <p class="roboto-family-regular parahraph-aboutus-version2 text-white">Our team is constantly battling to facilitate our customers with what they need. The services we provide to fulfill their interests, and the sincerity our team put out for the clients is rare to find. Our digital services and marketing efforts help you gain trust in us, and your customers' in you. We put our best efforts into supporting you and helping you in your business growth with our ingenious digital solutions. Your trust is our asset and the work our team put up will never let you down.</p>
                <a href="contact-us">
                    <button class="btn button-color-schemeV-2 roboto-family-regular">Request a Free
                        Quote</button>
                </a>
            </div>
        </div>
    </div>
</section>
</main>
<section class="content-card-section" data-aos-once="true" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="roboto-family-semibold parahraph-aboutus-version2 text-black ">Work <span class="color-about-us-blue">with us</span></p>
            </div>
            <div class="col-md-6">

                <h1 class="text-black header-section-aboutus-version2 ">About our Company</h1>
                <p class="about-us-para-color-version-2">Expert Digital Solution delivers you peculiar services with high-standard quality. From web development to inbound/outbound marketing, from SEO/SEM to WordPress development, and from brand to Shopify development; EDS facilitates you with the fuel to develop and grow your e-business. Its services will not let a consumer get away from your site. Here you can find the solutions to all your digital worries.</p>
                <p class="about-us-para-color-version-2">EDS cares for your business and knows its needs. We are aware of the market and what a customer wants. That’s why we are always working to bring up innovative solutions for our customers. The digital market has a reputation for keeping on changing by each passing day. The more the countries get introduced to the world of e-commerce, the more channels and platforms are growing and changing the entire landscape on a daily basis. </p>
                <p class="about-us-para-color-version-2">EDS is here for you to guide through all the twists, turns, highs, and lows of digital marketing for your e-business. We not only provide you with a customer-centric website but will also train you to use it until you get a hold of it. </p>
                <p class="about-us-para-color-version-2">When it comes to inbound marketing, we’ll help you raise brand awareness that will increase your revenue. Along with that, we have strategies that will approach your target market and get you the customers who won’t turn their back on you. In regards to WordPress, we have all the methods which will help you reach out to your target audience. Hence, we have got all you business needs covered. </p>
            </div>
            <div class="col-md-6">
                <h1 class="text-black header-section-aboutus-version2 ">About our Team</h1>
                <p class="about-us-para-color-version-2">EDS has been working with all the top-ranked agencies and renowned brands worldwide. We have an elite team of experts for all the digital solutions that you are looking for. And what makes EDS distinct in the market of digital experts is that we provide you with the services at affordable prices. Also the equipment and technology our team uses are extraordinary and they have a full expertise in that department too.</p>
                <p class="about-us-para-color-version-2">We have a team of professional and dedicated marketers, IT-specialists, and developers that will work with you depending on the nature of your business, and will provide you the customized solutions catering to the specific nature of your business. The innovative technology we use will help you cope up with the ever-changing digital landscape.</p>
                <p class="about-us-para-color-version-2">Our team of experts have been in business when the technology was comparatively simpler and when e-commerce wasn’t known to many, and they are still here when the trends and technology are advancing by each passing day. The complex it is getting the more innovations we are bringing up to retain our customers keep up with the pace.</p>
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