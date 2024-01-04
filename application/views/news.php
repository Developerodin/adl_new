<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<script src="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
  "></script>
<link href="
  https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
  " rel="stylesheet">

<style>
.card1 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
}

.splide__slide {
    margin: 1px 20px;
}
</style>
<div class="hero-section wf-section">
    <div class="container__solutions mb-5 text-center">
        <h1 class="h0 mt-30 mt-4"> <span class="orange">News & Articles</span></h1>
        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide card1"><a
                            href="https://economictimes.indiatimes.com/industry/renewables/ev-sales-rise-148-to-race-past-1-18-million/articleshow/99180406.cms">
                            <img src="<?php echo base_url(); ?>/assets/img/news/6.webp" width="250" height="300"
                                alt="" />
                            <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
              10px;">Electric vehicle sales rise 148% to race past 1.18 million</h5>
                        </a>
                    </li>
                    <li class="splide__slide card1"><a
                            href="https://www.business-standard.com/article/automobile/mercedes-benz-to-launch-4-evs-in-india-in-8-12-months-matthias-luehrs-123032301027_1.html">
                            <img src="<?php echo base_url(); ?>/assets/img/news/7.webp" width="250" height="300"
                                alt="" />
                            <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
              10px;">Mercedes-Benz plans to launch 4 electric vehicles in India in 8-12 months</h5>
                        </a>
                    </li>
                    <li class="splide__slide card1"><a
                            href="https://www.hindustantimes.com/car-bike/report-finds-4-states-with-most-comprehensive-ev-policies-in-india-they-are-101676633036567.html">
                            <img src="<?php echo base_url(); ?>/assets/img/news/8.webp" width="250" height="300"
                                alt="" />
                            <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
              10px;">Report finds 4 states with most comprehensive EV policies in India. They are… </h5>
                        </a>
                    </li>
                    <li class="splide__slide card1"><a
                            href="https://economictimes.indiatimes.com/industry/renewables/ev-calculator">
                            <img src="<?php echo base_url(); ?>/assets/img/news/2.jpg" width="250" height="300"
                                alt="" />
                            <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
              10px;">Electric Vehicle Calculator</h5>
                        </a>
                    </li>
                    <li class="splide__slide card1"><a
                            href="https://www.india-briefing.com/news/indian-government-tightens-release-of-fame-2-subsidies-probes-ev-makers-26973.html/r">
                            <img src="<?php echo base_url(); ?>/assets/img/news/1.webp" width="250" height="300"
                                alt="" />
                            <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
              10px;">India Tightens Release of FAME-2 Subsidies for EV Makers, May Not Extend Scheme</h5>
                        </a>
                    </li>

                </ul>
            </div>
        </section>

    </div>
</div>
<div class="hero-section wf-section">
    <div class="container mb-5 text-center">
        <h1 class="h0 mt-30"> <span class="orange">News Upadate</span></h1>
        <div class="row mt-5">



            <div class="col-md-4 card1"><a href="https://www.virta.global/blog/what-is-roaming-in-ev-charging">
                    <img src="<?php echo base_url(); ?>/assets/img/news/10.png" width="250" height="300" alt="" />
                    <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
          10px;">Why roaming is the buzzword in electric vehicle charging</h5>
                </a>
            </div>
            <div class="col-md-4 card1"><a
                    href="https://www.bain.com/insights/electric-vehicle-charging-shifts-into-high-gear/">
                    <img src="<?php echo base_url(); ?>/assets/img/news/11.jpg" width="250" height="300" alt="" />
                    <h5 class="mt-3" style="height: 51px;overflow: hidden;margin: 1px
          10px;">EV Charging Shifts into High Gear </h5>
                </a>
            </div>
        </div>

    </div>
</div>


<script>
var splide = new Splide('.splide', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    autoplay: 2000,
    speed: 800,
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 1,
    // Responsive breakpoints
    breakpoints: {
        120: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50
        }
    }

});

splide.mount();
</script>