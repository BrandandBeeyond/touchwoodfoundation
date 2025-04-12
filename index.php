<?php include('header.php') ?>

<style>
   
  
    .wrapper {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px
    }

    .service_title {
        font-size: 20px;
        line-height: 25px;
        margin-bottom: 10px;
        font-style: normal;
        font-weight: 600;
    }

    .wc-content {
    font-size: 15px;
    line-height: 20px;
}

    .features_1 {
        position: relative;
        padding-left: 550px;
        min-height: 640px;
        margin-top: 40px;
    }

    .f-image1 {
        position: absolute;
        left: 0;
        top: 25px;
        pointer-events: none;
        max-width: 411px;
        height: 600px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 20px 20px 0px #f67d4a;
    }

    .hover-tab:first-child {
        padding-top: 35px;
    }

    .hover-tab {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding-bottom: 12px;
        margin-bottom: 20px;
    }

    .hover-tab .f-image1 img {
        height: 100%;
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        position: relative;
        -webkit-clip-path: inset(0 100% 0 0);
        clip-path: inset(0 100% 0 0);
        -webkit-animation: inactiveImageAnimation1 0.6s forwards ease;
        animation: inactiveImageAnimation1 0.6s forwards ease;
        z-index: 2;
        border-radius: 15px;
    }

    .hover-tab.active .f-image1 img {
        -webkit-animation: activeImageAnimation1 0.6s forwards ease;
        animation: activeImageAnimation1 0.6s forwards ease;
    }



    @keyframes inactiveImageAnimation1 {
        0% {
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        100% {
            -webkit-clip-path: inset(0 100% 0 0);
            clip-path: inset(0 100% 0 0);
        }
    }

    @keyframes activeImageAnimation1 {
        0% {
            -webkit-clip-path: inset(0 0 0 100%);
            clip-path: inset(0 0 0 100%);
        }

        100% {
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }
    }



    @media(max-width:500px) {
        .features_1 {
            position: relative;
            padding-left: 0;
            min-height: 40px;
            margin-top: 0px;
        }

        .f-image1 {
            display: none;
            visibility: hidden;
        }

        .h-section-mob.third .wc-title {
            margin: 0px 0 19px 0;
        }
    }
</style>

<!-- end of header -->
<!-- start of hero -->
<section class="hero hero-style-1">
    <div class="hero-slider">
        <div class="slide">
            <div class="container">
                <img src="https://themepresss.com/tf/html/sadakat-live/assets/images/slider/slide-1.jpg" alt
                    class="slider-bg">
                <div class="row">
                    <div class="col col-md-6 slide-caption">
                        <div class="slide-title">
                            <h2>You and I can make a<span> Soul Smile</span></h2>
                        </div>
                        <div class="slide-subtitle">
                            <p>Not by giving much, but by giving from the heart.</p>

                        </div>
                        <div class="btns">
                            <a href="donate.php" class="theme-btn">Donate Now</a>
                            <a href="about.php" class="theme-btn-s2">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <img src="assets/img/banner2.jpg" alt class="slider-bg">
                <div class="row">
                    <div class="col col-md-6 slide-caption">
                        <div class="slide-title">
                            <h2>Together, we are planting<span>seeds</span>of change.</h2>
                        </div>
                        <div class="slide-subtitle">
                            <p>Every act of kindness grows into something beautiful - with you, with us, with love.</p>

                        </div>
                        <div class="btns">
                            <a href="donate.php" class="theme-btn">Donate Now</a>
                            <a href="about.php" class="theme-btn-s2">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end of hero slider -->
<!--features start -->




<!--features-features end -->
<!-- about-area start-->
<div class="about-style-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="about-img">
                    <img src="assets/img/aboutfoundation.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="about-content">
                    <div class="section-title">
                        <h2>About Touchwood Foundation</h2>
                    </div>
                    <p>Founded with the vision to make service a way of life, Touchwood Foundation is a
                        community-powered initiative that brings smiles to those who need them most. What began as a
                        desire to give back has today grown into a movement driven by compassion and care. Every
                        book given, every meal served, and every tree planted carries a story of love, healing, and
                        transformation.
                    </p>
                    <p>We’re not just reaching out to communities - we’re growing with them.</p>
                    <div class="btns">
                        <div><a class="theme-btn" href="about.php">More About Us..</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="features-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3">
                    <div class="features-icon">
                        <img src="assets/img/icons/plant.png" class="img-fluid sicon" alt="">
                    </div>
                    <div class="features-content">
                        <p>15000+</p>
                        <h3>Live Touched</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3">
                    <div class="features-icon">
                        <img src="assets/img/icons/school.png" class="img-fluid sicon" alt="">
                    </div>
                    <div class="features-content">
                        <p>1000+</p>
                        <h3>children educated</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3">
                    <div class="features-icon">
                        <img src="assets/img/icons/woman.png" class="img-fluid sicon" alt="">
                    </div>
                    <div class="features-content">
                        <p>500+</p>
                        <h3>women empowered</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3">
                    <div class="features-icon">
                        <img src="assets/img/icons/green.png" class="img-fluid sicon" alt="">
                    </div>
                    <div class="features-content">
                        <p>100+</p>
                        <h3>heartfelt initiatives</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container my-5 py-5">
    <div class="wrapper">
        <div class="col-12 USP_features position-relative sec_padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3">
                        <div class="section-title text-center">
                            <span></span>
                            <h2>Our core Values</h2>
                        </div>
                    </div>
                </div>
                <div class="features_1">
                    <div class="hover-tab">
                        <h3 class="service_title wow fadeInUp" data-wow-offset="36" style="visibility: visible;">Empathy
                        </h3>
                        <p class="wc-content" data-wow-offset="48" style="visibility: visible;">
                            We lead with the heart.
                        </p>
                        <div class="f-image1">
                            <picture>
                                <source srcset="assets/img/empathy.jpeg" width="410" height="600" alt=""
                                    class=" lazyloaded" loading="lazy">
                                <source srcset="assets/img/empathy.jpeg" width="410" height="600" alt=""
                                    class=" lazyloaded" loading="lazy">
                                <img src="assets/img/empathy.jpeg" class=" ls-is-cached lazyloaded"
                                    loading="lazy" width="410" height="600" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="hover-tab active">
                        <h3 class="service_title wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="36"
                            style="visibility: visible; animation-delay: 0.3s;">
                            Sustainability
                        </h3>
                        <p class="wc-content" data-wow-delay="0.3s" data-wow-offset="72"
                            style="visibility: visible; animation-delay: 0.3s;">
                            We build with care for tomorrow.


                        </p>
                        <div class="f-image1">
                            <picture>
                                <source srcset="assets/img/sustainable.jpg" width="410" height="600"
                                    alt="All-services-at-one-place" class=" lazyloaded" loading="lazy">
                                <source srcset="assets/img/sustainable.jpg" width="410" height="600"
                                    alt="All-services-at-one-place" class=" lazyloaded" loading="lazy">
                                <img src="assets/img/sustainable.jpg" class=" lazyloaded" loading="lazy"
                                    width="410" height="600" alt="All-services-at-one-place">
                            </picture>
                        </div>
                    </div>
                    <div class="hover-tab">
                        <h3 class="service_title wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="36"
                            style="visibility: visible; animation-delay: 0.6s;">Collaboration
                        </h3>
                        <p class="wc-content" data-wow-delay="0.6s" data-wow-offset="48"
                            style="visibility: visible; animation-delay: 0.6s;">
                            We walk this path together.

                        </p>
                        <div class="f-image1">
                            <picture>
                                <source srcset="assets/img/collabration.jpg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <source srcset="assets/img/collabration.jpg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <img src="assets/img/collabration.jpg" class=" lazyloading" loading="lazy"
                                    width="410" height="600" alt="Highly-Skilled-in-line-team">
                            </picture>
                        </div>
                    </div>
                    <div class="hover-tab">
                        <h3 class="service_title wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="36"
                            style="visibility: visible; animation-delay: 0.6s;">Transparency

                        </h3>
                        <p class="wc-content" data-wow-delay="0.6s" data-wow-offset="48"
                            style="visibility: visible; animation-delay: 0.6s;">
                            Trust is our foundation.
                        </p>
                        <div class="f-image1">
                            <picture>
                                <source srcset="assets/img/transparency.jpeg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <source srcset="assets/img/transparency.jpeg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <img src="assets/img/transparency.jpeg" class=" lazyloading" loading="lazy"
                                    width="410" height="600" alt="Highly-Skilled-in-line-team">
                            </picture>
                        </div>
                    </div>
                    <div class="hover-tab">
                        <h3 class="service_title wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="36"
                            style="visibility: visible; animation-delay: 0.6s;">Empowerment

                        </h3>
                        <p class="wc-content" data-wow-delay="0.6s" data-wow-offset="48"
                            style="visibility: visible; animation-delay: 0.6s;">
                            We help people help themselves.
                        </p>
                        <div class="f-image1">
                            <picture>
                                <source srcset="assets/img/empowerment.jpg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <source srcset="assets/img/empowerment.jpg" width="410" height="600"
                                    alt="Highly-Skilled-in-line-team" class=" lazyloaded" loading="lazy">
                                <img src="assets/img/empowerment.jpg" class=" lazyloading" loading="lazy"
                                    width="410" height="600" alt="Highly-Skilled-in-line-team">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- case-area-end -->
<!-- .tp-counter-area start -->
<div class="tp-counter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-counter-grids">
                    <div class="grid">
                        <div>
                            <h2><span class="odometer" data-count="200">00</span>+</h2>
                        </div>
                        <p>Events</p>
                    </div>
                    <div class="grid">
                        <div>
                            <h2><span class="odometer" data-count="80">00</span>+</h2>
                        </div>
                        <p>Fund Raised</p>
                    </div>
                    <div class="grid">
                        <div>
                            <h2><span class="odometer" data-count="245">00</span>+</h2>
                        </div>
                        <p>Volunteers</p>
                    </div>
                    <div class="grid">
                        <div>
                            <h2><span class="odometer" data-count="605">00</span>+</h2>
                        </div>
                        <p>Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .tp-counter-area end -->
<!--Start project area-->

<!--End project area-->
<!-- start team-section -->

<!-- end team-section -->
<!-- start event-section -->
<section class="event-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span>Our Events</span>
            <h2>Upcoming Events</h2>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="event-grids clearfix">
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/event/img-1.jpg" alt>
                        </div>
                        <div class="details">
                            <ul class="entry-meta">
                                <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                <li><a href="#"><i class="ti-folder"></i> Education</a></li>
                            </ul>
                            <h3><a href="event-single.html">Education for All Children</a></h3>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/event/img-2.jpg" alt>
                        </div>
                        <div class="details">
                            <ul class="entry-meta">
                                <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                <li><a href="#"><i class="ti-folder"></i> Food</a></li>
                            </ul>
                            <h3><a href="event-single.html">Food for All Everyone</a></h3>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="assets/images/event/img-3.jpg" alt>
                        </div>
                        <div class="details">
                            <ul class="entry-meta">
                                <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                <li><a href="#"><i class="ti-folder"></i> Treatment</a></li>
                            </ul>
                            <h3><a href="event-single.html">Free Treatment</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end event-section -->
<!-- tp-cta-area start -->
<div class="tp-cta-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-cta-text">
                    <h2>Be the reason someone smiles today.</h2>
                    <p>Donate With Love,Join Our Mission</p>
                    <div class="btns">
                        <a href="donate.php" class="theme-btn">Donate Now</a>
                        <a href="contact.php" class="theme-btn-s2">Join Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tp-cta-area end -->
<!-- start blog-section -->
<section class="blog-section section-padding">
    <div class="container">
        <div class="col-l2">
            <div class="section-title text-center">
                <span>From Our Blog</span>
                <h2>Latest News</h2>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="blog-grids clearfix">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="assets/images/blog/1.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3><a href="blog-single.html">Best and less published their supplier lists.</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration.</p>
                            <ul class="entry-meta">
                                <li>
                                    <img src="assets/images/blog/7.jpg" alt="">
                                    By <a href="#">Lily Anne</a>
                                </li>
                                <li>Feb 12,2021</li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="assets/images/blog/2.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3><a href="blog-single.html">Best and less published their supplier lists.</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration.</p>
                            <ul class="entry-meta">
                                <li>
                                    <img src="assets/images/blog/7.jpg" alt="">
                                    By <a href="#">Lily Anne</a>
                                </li>
                                <li>Feb 12,2021</li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="assets/images/blog/3.jpg" alt="">
                        </div>
                        <div class="details">
                            <h3><a href="blog-single.html">Best and less published their supplier lists.</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration.</p>
                            <ul class="entry-meta">
                                <li>
                                    <img src="assets/images/blog/7.jpg" alt="">
                                    By <a href="#">Lily Anne</a>
                                </li>
                                <li>Feb 12,2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end blog-section -->
<!-- news-letter-section start-->
<section class="news-letter-section">
    <div class="container">
        <div class="news-letter-wrap">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                    <div class="newsletter">
                        <h3>Join us now</h3>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                        <div class="newsletter-form">
                            <form>
                                <div>
                                    <input type="text" placeholder="Enter Your Email" class="form-control">
                                    <button class="bigCursor" type="submit">join</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- news-letter-section end-->


<?php include('footer.php') ?>

<script>
    $(function () {
        $('.hover-tab').hover(function () {
            $(this)
                //        .parents('.cs-hover_tab')
                .addClass('active')
                .siblings()
                .removeClass('active');
        });


        setInterval(function () {
            $('.flip').toggleClass('active');
        }, 4000);

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })


        var o1 = $('#c1'), o2 = $('#c2');

        //Sync o2 by o1
        o1.on('click', '.owl-next', function () {
            o2.trigger('next.owl.carousel')
        });
        o1.on('click', '.owl-prev', function () {
            o2.trigger('prev.owl.carousel')
        });
        //Sync o1 by o2
        o2.on('click', '.owl-next', function () {
            o1.trigger('next.owl.carousel')
        });
        o2.on('click', '.owl-prev', function () {
            o1.trigger('prev.owl.carousel')
        });

        //Carousel settings
        o1.owlCarousel({
            center: true,
            loop: true,
            items: 3,
            margin: 0,
            nav: false,
            dots: false,
            mouseDrag: false,
            touchDrag: false
        });
        o2.owlCarousel({
            center: true,
            loop: true,
            items: 1,
            margin: 0,
            nav: true,
            navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
            dots: false,
            mouseDrag: false,
            touchDrag: false
        });
    });
</script>