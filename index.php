<?php
$page = "home";
$title = "Home";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
      <div class="block block-hero">
          <div class="content">
            <div data-aos="fade-up" data-aos-delay="600">
              <h1>Play better golf</h1>
              <div class="app-downloads">
                <a href="<?php echo $googleapplink; ?>" target=_blank><?php echo file_get_contents("assets/img/google-play.svg"); ?></a>
                <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
              </div>
            </div>
        </div>
      </div>

      <div class="block block-feature with-phone">
        <div class="phone"><img src="assets/img/iphone-transparent.png" width="375px" alt="Phone Border"></div>
        <div class="slider" id="feature-slider">
          <div class="item"><img src="assets/img/screenshot-gps.jpg" width="325px" alt="GPS"></div>
          <div class="item"><img src="assets/img/screenshot-swing-analyzer.jpg" width="325px" alt="Swing Analyzer"></div>
          <div class="item"><img src="assets/img/screenshot-stats.jpg" width="325px" alt="Stats"></div>
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <h2>The #1 rated digital caddy</h2>
            <p>Get the precise yardages with the most advanced mobile GPS rangefinder. Caddy+ adjusts for wind speeds, elevation, temperature and rain – powering your rounds with accurate distances, clubs recommendations and more.</p>
            <a class="btn solid" href="<?php echo $homeUrl; ?>features">See More Features</a>
          </div>
        </div>
        <div class="overlay"></div>
      </div>

      <div class="container" id="feature-grid">
        <div data-aos="fade-up">
          <div class="block block-feature half-half" id="ai-coach">
            <div class="image">
              <img src="assets/img/ai-coach.jpg" alt="Golf green with golf ball and putter">
            </div>
            <div class="content">
              <div class="content-wrap">
                <h2>AI-Powered swing analyzer & coach</h2>
                <p>Breakthrough technology that's changing the way golfers analyze and work on improving their game.</p>
                <a href="<?php echo $homeUrl; ?>ai-coach" class="btn solid">See It In Action</a>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="fade-up">
          <div class="block block-feature half-half" id="discover-courses">
            <div class="content">
              <div class="content-wrap">
                <h2>Discover courses & book tee times</h2>
                <p>View course reviews from other golfers, and book your next tee time &mdash; all in one app.</p>
                <a href="#" class="btn solid">View Courses</a>
              </div>
            </div>
            <div class="image">
              <img src="assets/img/discover-courses.png" alt="Man golfing">
            </div>
          </div>
        </div>
      </div>

      <div class="block block-stats">
        <div class="stat-wrap container">
          <div class="stat has-one">
            <div data-aos="fade-up" data-aos-delay="200">
              <h2><span>1</span>.8m</h2>
              <small>Global Users</small>
            </div>
          </div>
          <div class="stat has-one">
            <div data-aos="fade-up" data-aos-delay="300">
              <h2><span>1</span>0m</h2>
              <small>Rounds Scored</small>
            </div>
          </div>
          <div class="stat">
            <div data-aos="fade-up" data-aos-delay="400">
              <h2>40k</h2>
              <small>Courses Worldwide</small>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-reviews">
        <div data-aos="fade-up" data-aos-delay="200">
          <div class="reviews-wrap container">
            <div class="slider" id="reviews-slider">
              <div class="review">
                <blockquote>
                  <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
            </div>
            <a href="https://apps.apple.com/us/app/18birdies-golf-gps-scorecard/id892700751" target=_blank class="btn solid">See More Reviews</a>
          </div>
        </div>
      </div>

      <div class="block block-hero-interior">
        <div class="content">
          <div data-aos="fade-up">
            <h2>Host a tournament</h2>
            <p>We've made it easier than ever to run your own tournament – with registration, live scoring, and more.</p>
            <a href="#" class="btn solid">Learn More</a>
          </div>
        </div>
      </div>

      <div class="block block-feature connect">
        <div class="container">
          <div class="connect-wrap">
            <div class="image">
              <img src="assets/img/connect.png" alt="Man golfing">
            </div>
            <div class="content">
              <div data-aos="fade-up" data-aos-delay="200">
                <h2>Join the community</h2>
                <p>Connect with other golfers, compare stats and compete in tournaments, no matter where you are in the world.</p>
                <a href="#" class="btn solid">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php

      include "ig-feed.php";

      ?>


<?php require "footer.php"; ?>
