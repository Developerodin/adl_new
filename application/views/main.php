<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  section {
    z-index: 999;
  }

  .header {
    background-color: transparent;
    position: absolute;
  }
.mobile-nav-toggle{
color: #000;
}
.sticked .mobile-nav-toggle{
  color: #fff !important;
  }
  .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
  }

  #backgroundVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
  }

  .text-overlay {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #00243a;
    z-index: 1;
  }

  .text-overlay h1 {
    margin: 0;
    font-size: 6em;
  }

  .text-overlay h3 {
    margin: 0;
    font-size: 1.5em;
    line-height: 1.2;
    letter-spacing: 2px;
    line-height: 36px;
  }

  .def {
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    min-height: 600px;
    position: relative;
    z-index: 2;
  }

  .def .container {
    height: 70%;
    margin: auto;
    text-align: start;
    color: #fff;
  }

  .defh2 {
    font-size: 48px;
    line-height: 1;
  }

  .def.un {
    height: 2px;
    width: 200px;
    background: #fff;
    margin: 0 auto;
  }

  .def h3 {
    font-size: 22px;
    line-height: 1.91;
    margin-top: 20px;
  }

  .def p {
    color: #fff;
  }

  .mob {
    display: none;
  }

  @media screen and (max-width: 768px) {
    .text-overlay h1 {
      margin: 0;
      font-size: 3em;
    }

    .desk {
      display: none;
    }

    .mob {
      display: block !important;
    }

    .text-overlay h3 {
      margin: 0;
      font-size: 1em;
      line-height: 1;
      letter-spacing: 2px;
      line-height: 28px;
    }

    .cou .col-8 {
      margin: 20px;
    }

    .cou {
      justify-content: center;
      padding: 0;
    }

    .co1 {
      margin: 2%;
    }

    .tc1 {
      text-align: center;
    }

    .mtm {
      margin-top: 50px;
    }
  }

  .dd .card {

    border: none;
    outline: none;
    color: #fff;
    background: #00243a;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
  }

  .dd .card:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
  }

  .dd .card:active {
    color: #000
  }

  .dd .card:active:after {
    background: transparent;
  }

  .dd .card:hover:before {
    opacity: 1;
  }

  .dd .card:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #00243a;
    left: 0;
    top: 0;
    border-radius: 10px;
  }

  @keyframes glowing {
    0% {
      background-position: 0 0;
    }

    50% {
      background-position: 200% 0;
    }

    100% {
      background-position: 0 0;
    }
  }

  .bg-black1 {
    width: 100%;
    height: 100%;
    opacity: 0.7;
    min-height: 600px;
    justify-content: center;
    display: flex;
    background-color: black;
  }

  .dds {
    display: none;
    max-width: 250px;
  }

  .ds {
    display: block;
    max-width: 250px;
  }

  .navbar a,
  .navbar a:focus {

    color: #121212;

  }

  .sticked .navbar a,
  .sticked .navbar a:focus {

    color: #fff;

  }
</style>
<section class="p-0">
  <div class="main">
    <div class="video-section desk" id="parallax-section">
      <div class="video-overlay" style="position: relative;">
        <img src="assets/img/ban1.jpg" alt="" style="width: 100%;">
        <div class="text-overlay">
          <h1>ACCOUNTING</h1>
          <h3>PRECISION <strong>|</strong> ANALYSIS <strong>|</strong> GROWTH</h3>
        </div>
      </div>
      
    </div>
    <div class="mob">
      <div class="video-overlay" style="position: relative;">
        <img src="assets/img/ban1mob.png" alt="" style="width: 100%;">
        <div class="text-overlay" style="WIDTH: 100%;">
          <h1>ACCOUNTING</h1>
          <h3>PRECISION <strong>|</strong> ANALYSIS <strong>|</strong> GROWTH</h3>
        </div>
      </div>

    </div>
    <div class="def" style="background-image: url('assets/img/back1.jpg');">
      <div class="bg-black1">
        <div class="container">
          <h2>WHAT DEFINES US</h2>
          <div class="un mt-md-5 mt-0"></div>
          <h3><em>What defines us is not what we do, but how we do it.</em></h3>
          <p class="mt-md-5 mt-3">
            ADLedger is dedicated to fostering growth and innovation at every level. Our mission is to create a
            collaborative work environment that promotes personal and professional development for both our clients and
            team members.
          </p>
        </div>
      </div>
    </div>

  </div>

  <div class="container">

    <style>
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        min-height: 270px;
      }

      .count {
        background-image: url('assets/img/dm1.png');
        padding: 40px 12px;
        min-height: 200px;
        width: 100%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-content: center;
        text-align: center;
      }
    </style>


    <div class="row mt-md-5 mt-5 pb-md-5 pb-3  dd">
      <div class="col-md-12 mt-md-3">
        <h2 class="text-center" style="width: 100%;">Why Choose ADLedger Outsourcing?</h2>
        <p class="text-center mt-3" style="width: 100%;">ADLedger provides trusted Outsourcing Services for bookkeeping,
          payroll, and tax preparation.</p>
      </div>
      <div class="col-md-4 p-md-5 p-3">
        <div class="card p-md-4 p-5">
          <img src="" alt="">
          <h6 class="pt-4 bold" style="    font-weight: 600;">DAY-TO-DAY ACCOUNTING ENTRIES IN SOFTWARES</h6>
          <p class="pt-3">Efficient and accurate data entry services using Tally, QB & many more ERP software ensuring
            precise and up-to-date financial records.</p>
        </div>
      </div>
      <div class="col-md-4 p-md-5 p-3">
        <div class="card p-md-4 p-5">
          <img src="" alt="">
          <h6 class="pt-4 bold" style="    font-weight: 600;">QUICKBOOKS SUPPPORT</h6>
          <p class="pt-3">Specialized assistance in QuickBooks for streamlined financial management and reporting.</p>
        </div>
      </div>
      <div class="col-md-4 p-md-5 p-3">
        <div class="card p-md-4 p-5">
          <img src="" alt="">
          <h6 class="pt-4 bold" style="    font-weight: 600;">EXCEL ACCOUNTING & REPORTING</h6>
          <p class="pt-3">Tailored Excel solutions for comprehensive and customizable accounting needs.</p>
        </div>
      </div>
    </div>



  </div>

</section>
<section style="background-color:#9cc4e4;">
  <div class="container">
    <div class="row text-black pt-4">
      <div class="col-md-5 tc1">
        <h6>7+ Years Of Experience</h6>
        <h3 class="mt-4" style="font-weight: 600;">
          ADLedger offers comprehensive services in bookkeeping, payroll, and tax preparation</h3>
        <p class="mt-4">ADLedger is a finance and accounting-focused company, specializing in providing comprehensive
          services for CPA firms and businesses of various sizes. Our expertise lies in delivering top-notch financial
          and accounting solutions, supported by the latest technologies. We understand the significance of even routine
          financial and accounting tasks, and our commitment is to enhance the overall business performance of our
          clients through our dedicated services.</p>
      </div>

      <div class="col-md-7 row cou text-white m-0" style="    align-items: center;">
        <div class="col-md-4 col-8">
          <div class="count">
            <h2>7+</h2>
            <h6 class="mt-2">Years Of Work Experience</h6>
          </div>
        </div>
        <div class="col-md-4 col-8 ">
          <div class="count">
            <h2>100k+</h2>
            <h6 class="mt-2">Hours Of Bookkeeping, Payroll & Tax Return Processing</h6>
          </div>
        </div>
        <div class="col-md-4 col-8">
          <div class="count">
            <h2 style="width: 100%;">30+</h2><br>
            <h6 class="mt-2" style="width: 100%;">Client Projects</h6>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="container d-none">
  <div class="row co1 ">
    <div class="col-md-12 mt-3">
      <h2 class="text-center" style="width: 100%;">Bolgs</h2>
      <p class="text-center mt-3" style="width: 100%;">ADLedger provides trusted Outsourcing Services for bookkeeping,
        payroll, and tax preparation.</p>
    </div>
    <div class="col-md-4 p-md-4 mtm">
      <img src="assets/img/blog1.png" alt="" width="100%">

      <h6 class="mt-3" style="font-weight: 600;">Director &nbsp;-&nbsp;<span
          style="font-weight:200;font-size:small;">13-01-2024</span></h6>
      <h4 style="font-weight: 600;">QUICKBOOKS SUPPPORT</h4>
      <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim necessitatibus aut commodi
        sequi ....
      </p>
      <button class="btn btn-success" style="padding: 10px 20px;">Read more...</button>
    </div>
    <div class="col-md-4 p-md-4 mtm">
      <img src="assets/img/blog1.png" alt="" width="100%">

      <h6 class="mt-3" style="font-weight: 600;">Director &nbsp;-&nbsp;<span
          style="font-weight:200;font-size:small;">13-01-2024</span></h6>
      <h4 class="mt-3" style="font-weight: 600;">QUICKBOOKS SUPPPORT</h4>
      <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim necessitatibus aut commodi
        sequi ....
      </p>
      <button class="btn btn-success" style="padding: 10px 20px;">Read more...</button>
    </div>
    <div class="col-md-4 p-md-4 mtm">
      <img src="assets/img/blog1.png" alt="" width="100%">

      <h6 class="mt-3" style="font-weight: 600;">Director &nbsp;-&nbsp;<span
          style="font-weight:200;font-size:small;">13-01-2024</span></h6>
      <h4 style="font-weight: 600;">QUICKBOOKS SUPPPORT</h4>
      <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim necessitatibus aut commodi
        sequi ....
      </p>
      <button class="btn btn-success" style="padding: 10px 20px;">Read more...</button>
    </div>
  </div>
</section>



<script>
  // Parallax effect using JavaScript
  document.addEventListener("DOMContentLoaded", function () {
    var parallaxSection = document.getElementById("parallax-section");
    var backgroundVideo = document.getElementById("backgroundVideo");
    var textOverlay = document.querySelector(".text-overlay");

    function updateParallax() {
      var scrollPosition = window.scrollY;
      var parallaxValue = scrollPosition * 0.5; // Adjust the speed of parallax

      backgroundVideo.style.transform = "translateY(" + parallaxValue + "px)";
      textOverlay.style.transform = "translate(-50%, calc(-50% + " + parallaxValue + "px))";
    }

    window.addEventListener("scroll", updateParallax);
  });
  document.addEventListener("DOMContentLoaded", function () {
    var parallaxContainer = document.querySelector('.def');
    var scrollPosition = window.scrollY;

    function updateParallax() {
      scrollPosition = window.scrollY;
      parallaxContainer.style.backgroundPositionX = -scrollPosition * 0.4 + 'px';
    }

    window.addEventListener("scroll", updateParallax);
  });
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var video = document.getElementById('backgroundVideo');
    var additionalText = document.getElementById('additionalText');

    // Play the video
    video.play();

    // Show the additional text after the video has started playing
    video.addEventListener('playing', function () {
      additionalText.style.opacity = 1;
    });
  });
</script>
<script>
  window.addEventListener('scroll', function () {
    var dsImage = document.querySelector('.ds');
    var ddsImage = document.querySelector('.dds');

    // Get the scroll position
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Define the threshold for switching images (adjust as needed)
    var switchThreshold = 20;

    // Toggle the visibility of images based on scroll position
    if (scrollPosition > switchThreshold) {
      dsImage.style.display = 'none';
      ddsImage.style.display = 'inline-block';
    } else {
      dsImage.style.display = 'inline-block';
      ddsImage.style.display = 'none';
    }
  });
</script>