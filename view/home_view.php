<?php ob_start(); ?>
<div class="video_bg">

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="w-100 position-absolute">
    <source src="utils/videos/trailer.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100 priority">
    <div class="d-flex h-100 text-center align-items-center flex-column">
      <div class="w-100 text-white">
    <img class="w-50 mt-5" src="https://blz-contentstack-images.akamaized.net/v3/assets/blt9c12f249ac15c7ec/bltbcf2689c29fa39eb/622906a991f4232f0085d3cc/Masthead_Overwatch2_Logo.png" alt="">
      </div>
      <h1>L'avenir mérite qu'on se batte pour lui </h1>
    </div>
  </div>
</div>


<?php
$content = ob_get_clean();
$title="Home Game - X";
require_once "base_html.php";

?>