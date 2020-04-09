<?php
$page = "community";
$title = "Community";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>

    <div class="block block-hero">
        <div class="content">
          <div data-aos="fade-up">
          <h1>Golf is better with friends</h1>
        </div>
      </div>
    </div>

    <div class="block block-feature-phone connect-with-golfers">
      <div class="container">
        <div class="image">
          <img src="assets/img/connect-around-world.png" alt="Connect with golders around the world.">
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <h2>Connect with golders around the world.</h2>
            <p>Get swing tips, share the wins. We are the only community that’s for golfers.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="block block-hero-interior">
      <div class="content">
        <div data-aos="fade-up">
          <h2>Join a tournament near you or anywhere in the world.</h2>
          <p>Find an upcoming tournament at a course near you, or a Virtual Tournament.</p>
          <a class="btn solid" href="#">Learn More</a>
        </div>
      </div>
    </div>

    <div class="block block-feature-phone reverse get-competitive">
      <div class="container">
        <div class="image">
          <img src="assets/img/get-competitive.png" alt="Get Competitive">
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <h2>Get competitive with multi-player scoring and side games. </h2>
            <a class="btn solid" href="#">Learn More</a>
          </div>
        </div>
      </div>
    </div>


    <?php

    include "ig-feed.php";

    ?>

<?php require "footer.php"; ?>
