<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  .header {
    background-color: transparent;
    position: absolute;
  }
</style>
<section class="p-0">
  <div class="main">
    <div style="position: relative;">
      <!-- Video Overlay -->
      <div style=" top: 0; left: 0; width: 100%; height:100vh; z-index: 1;    background: black;">
        <video id="backgroundVideo" width="100%" height="100%" muted autoplay loop preload="auto"
          style="object-fit: cover;    opacity: 0.5;">
          <source src="assets/img/Bolor_Night_Cut.mp4" type="video/mp4">
        </video>
      </div>

      <!-- Centered Text Overlay -->
      <div
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; z-index: 2;">
        <h1 style="margin: 0; font-size: 6em; --fontSize: 26; ">REAL ESTATE</h1>
        <h3 class="fusion-title-heading title-heading-center fusion-responsive-typography-calculated"
          style="margin: 0; font-size: 1.5em; --fontSize: 26; line-height: 1.2;">
          <span style="letter-spacing: 2px; line-height: 36px;"> FINANCE <strong>|</strong> INVESTMENT
            <strong>|</strong> DEVELOPMENT<span></span></span>
        </h3>
      </div>

      <!-- Additional Centered Text After Video -->

    </div>
    <div class="def"
      style="background-image: url('assets/img/back1.jpg');min-height:600px;align-items: center;display: flex;">
      <div class="container" style="height: 70%;">

        <h2 style="color: rgb(255, 255, 255);font-Size: 48px; line-height: 1;" class="">WHAT DEFINES US</h2>
        <div class="un mt-5 " style="height: 2px;width:200px;background:#fff;"></div>
        <h3 style="color: rgb(255, 255, 255);font-Size: 22; line-height: 1.91; " class="mt-4"><em>What defines us is not
            what we do, but how we do it.</em></h3>

        <p class="mt-5" style="color:#fff;">We embrace the unknown as an opportunity to create something meaningful and
          enriching. Whether developing a thriving community in an underserved area, partnering with a creative
          architectural pioneer or building value where there was none, the unknown is always an opportunity for us.</p>
      </div>

    </div>

  </div>
</section>






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