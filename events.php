<?php include('header.php') ?>

<style>
      .pasthimg {
            height: 300px;
            width: 100%;
      }
</style>

<div class="tp-breadcumb-area">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                              <h2>Events</h2>

                        </div>
                  </div>
            </div>
      </div>
</div>

<section class="py-5">
      <div class="container">
            <div class="section-title text-center">
                  <h2 class="">Past Highlights</h2>
            </div>
            <div class="owl-carousel owl-theme life events">
                  <div class="card rounded-3 shadow-sm">
                        <div class="card-header pasthimg p-0 overflow-hidden">
                              <img src="" class="img-fluid h-100 object-fit-cover" alt="">
                        </div>
                        <div class="card-body">
                              <h4 class="cart-title">Warmth for Winter – 1000 blankets distributed</h4>
                        </div>
                  </div>
                  <div class="card rounded-3 shadow-sm">
                        <div class="card-header pasthimg p-0 overflow-hidden">
                              <img src="" class="img-fluid h-100 object-fit-cover" alt="">
                        </div>
                        <div class="card-body">
                              <h4 class="cart-title">Health Drive for Rural Families – 800+ treated</h4>
                        </div>
                  </div>
                  <div class="card rounded-3 shadow-sm">
                        <div class="card-header pasthimg p-0 overflow-hidden">
                              <img src="assets/img/diwalipast.jpg" class="img-fluid h-100 object-fit-cover"
                                    style="object-position:34% 41%;" alt="">
                        </div>
                        <div class="card-body">
                              <h4 class="cart-title">Diwali Donation – 500+ children gifted joy</h4>
                        </div>
                  </div>

            </div>
      </div>
</section>


<section class="event-section section-padding">
      <div class="container">
            <div class="section-title text-center">
                  <span>Our Events</span>
                  <h2>Upcoming Events</h2>
            </div>
            <div class="row ">
                  <div class="col-12 col-xs-12">
                        <div class="event-grids clearfix">
                              <div class="grid">
                                    <div class="img-holder">
                                          <img src="assets/images/event/img-1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                          <ul class="entry-meta">
                                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 2025</a></li>
                                                <li><a href="#"> Women Empowerment</a></li>
                                          </ul>
                                          <h3>Women Empowerment Camp</h3>
                                    </div>
                              </div>
                              <div class="grid">
                                    <div class="img-holder">
                                          <img src="assets/images/event/img-2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                          <ul class="entry-meta">
                                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> June 2025</a></li>
                                                <li><a href="#"> Plantation</a></li>
                                          </ul>
                                          <h3><a href="event-single.html">Monsoon Plantation Drive</a></h3>
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
      </div> <!-- end container -->
</section>





<?php include('footer.php') ?>

<script>
      $(document).ready(function () {
            $(".events").owlCarousel({
                  items: 2,       // Show 1 item at a time
                  loop: true,     // Infinite loop
                  margin: 50,     // Space between items
                  nav: false,      // Show navigation arrows
                  dots: false,     // Show pagination dots
                  autoplay: true, // Enable autoplay
                  autoplayTimeout: 3000, // Autoplay every 3 seconds
                  autoplayHoverPause: true // Pause on hover
            });
      });
</script>