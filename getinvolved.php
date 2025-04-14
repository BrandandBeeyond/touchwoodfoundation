<?php include('header.php') ?>
<style>
    .frow .titem {
        background: #ffffff;
        padding: 50px 37px 30px 37px;
        box-shadow: 1px 4px 20px -2px rgba(0, 0, 0, 0.1);
    }

    .titem i {
        font-size: 50px;
        position: absolute;
        left: 15px;
        top: 23px;
        opacity: 0.3;
        transform: rotate(180deg);
    }

    .client-name {
        color: #f67d4a !important;
        font-weight: 400 !important;
        font-size: 18px !important;
    }
</style>

<div class="tp-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcumb-wrap">
                    <h2>Get involved</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="features-area py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>Volunteer</h3>
                        <p>Give your time, your talent, or just your listening heart. Your presence can be someone’s
                            turning point.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>Partner</h3>
                        <p>Let’s combine purpose with resources. Together, we can do more - and do it better.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>CSR Collaborations</h3>
                        <p>We align with corporate values to build programs that don’t just check boxes - but change
                            lives.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="py-5">
    <div class="container">
        <div class="section-title-s3 section-title-s5 text-center">
            <h2 class="text-center">"Giving is not about how much. It’s about how deeply."</h2>
        </div>
        <div class="row mt-5">

            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>One-Time Donation </h3>
                        <p>Fuel a child’s dream or support a woman’s new beginning.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>Monthly Giving </h3>
                        <p>Help us plan and sustain long-term impact.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>Sponsor a Cause  </h3>
                        <p>Fund a school kit, a health camp, or a livelihood program.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="features-item-2 d-flex flex-row gap-4 p-3 h-100">
                    <div class="features-content">
                        <h3>In-Kind Support</h3>
                        <p>Give what you can - books, clothes, toys, food. It all matters.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-pg-contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area">
                    <div class="section-title-s3 section-title-s5 text-center">
                        <h2 class="text-center">Join with us</h2>
                    </div>
                    <div class="contact-form">
                        <form method="post" class="contact-validation-active" id="contact-form">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <select class="form-control" name="join_as" id="join_as" required>
                                    <option value="" disabled selected>Join as*</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Partner">Partner</option>
                                    <option value="CSR Collaborations">CSR Collaborations</option>
                                </select>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error">Error occurred while sending email. Please try again later.</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>

<script>
    $(document).ready(function () {
        $(".on_projects").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
    });
</script>