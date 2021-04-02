<!-- <section id="contactfrom" class="form-section">
    <div class="container">
        <div class="card  form-card">
            <div class="form-text text-center">
                <h1 class="font-Vivvic-semiBold ">Form</h1>
                <p class="mt-4 font-Vivvic-regular">Contact us today and take your brand to the next level with our
                    professional.</p>
            </div>
            <<div class="form-container">
                <form method="POST" action="PHP/ContactUs.php">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control input-padding-set-homepage font-Vivvic-regular" name="firstname" type="text" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control input-padding-set-homepage font-Vivvic-regular" placeholder="Last Name" name="lastname">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control input-padding-set-homepage font-Vivvic-regular" name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control input-padding-set-homepage font-Vivvic-regular" name="message" type="text" placeholder="Description" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-submit w-50 button-color-scheme-black font-Vivvic-regular">Submit</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</section> -->
<footer class="set-bg-footer home-form-footer">
    <div class="container">
        <div class="primary-footer">
            <div class="row">

                <div class="col-md-5 mb-md-0 mb-3">
                    <div class="foot-content">
                        <img src="img/Version 2.0/footerlogonewversion.png" class="img-fluid setbootompadd">
                        <p class="roboto-family-regular">Digital Experts is a digital transformation agency specializing
                            in delivering marketing and develop solutions to international companies.With an emphasis on making customer acquisition easy, we make sure you can transform your vision into business realities, for greater profit and greater global goodwill.</p>
                    </div>
                </div>

                <div class="col-md-7 mb-md-0 mb-3">
                    <div class="row">

                        <div class="col-6 col-md-4 mb-md-0 mb-3">
                            <div class="foot-list-column">
                                <div class="foot-item">

                                    <h5 class="text-uppercase font-Vivvic-regular">Services</h5>

                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="social-media-management-marketing" class="font-Vivvic-regular">Social Media
                                                Marketing</a>
                                        </li>
                                        <li>
                                            <a href="website-design-development" class="font-Vivvic-regular">Website
                                                Development </a>
                                        </li>
                                        <li>
                                            <a href="search-engine-optimization" class="font-Vivvic-regular">SEO</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 mb-md-0 mb-3">
                            <div class="foot-list-column">
                                <div class="foot-item">

                                    <h5 class="text-uppercase font-Vivvic-regular">About</h5>

                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="about-us" class="font-Vivvic-regular">About US</a>
                                        </li>
                                        <li>
                                            <a href="contact-us" class="font-Vivvic-regular">Contact US</a>
                                        </li>
                                        <li>
                                            <a href="branding-designin.html" class="font-Vivvic-regular">Blog</a>
                                        </li>
                                        <!-- <li>
                                            <a href="portfolio.html" class="font-Vivvic-regular">Portfolio</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 mb-md-0 mb-3">
                            <div class="foot-list-column">
                                <div class="foot-item">

                                    <h5 class="text-uppercase font-Vivvic-regular">Info</h5>

                                    <ul class="list-unstyled font-Vivvic-regular">
                                        <li>
                                            <a href="#!">info@expertdigitalsol.com</a>
                                        </li>
                                        <li>
                                            <a>188 Grand Street Unit # 229 New York, NY 10013</a>
                                        </li>
                                        <li>
                                            <a href="#!">+1 917 512 2984</a>
                                        </li>
                                        <li>
                                            <div class="social-links">
                                                <a href="#!"><i class="fab fa-twitter"></i></a>
                                                <a href="#!"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</footer>
<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 2,
            dots: true,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });

    });
    $(document).ready(function() {
        $(".b").hide();
    });
    var header = document.getElementById("myHeader1");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script>
    // document.getElementById("redirect").onclick = function() {
    //     location.href = "services";
    // };
    // document.getElementById("redirect1").onclick = function() {
    //     location.href = "services";
    // };
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
    var a = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 1500,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            a = 1;
        }

    });
    AOS.init({
        duration: 1200,
    });
</script>
</body>


</html>