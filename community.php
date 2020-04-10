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
          <h1>Connect with golfers around the world.</h1>
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
            <h2>A community just for golfers.</h2>
            <p>Get swing tips, share equipment advice, and celebrate the win &mdash; both big and small. Whether you're a weekend duffer or a high achiever, all golfers are welcome here.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="block block-hero-interior">
      <div class="content">
        <div data-aos="fade-up">
          <h2>Join a local tournament or anywhere in the world.</h2>
          <p>Find an upcoming tournament at a course near you, or sign up for a virtual tournament.</p>
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

<?php require "footer.php"; ?>
