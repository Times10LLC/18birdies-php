<?php
$page = "premium";
$title = "Premium";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
      <div class="block block-hero">
          <div class="content">
            <div data-aos="fade-up">
            <h1>Start your free trial of premium</h1>
          </div>
        </div>
      </div>

      <div class="block block-plans">
        <div data-aos="fade-up">
        <div class="content">
          <h2>Choose your plan</h2>
          <p>Next generation of technology to help you take your game to the next level!</p>
          <div class="plans">
            <a href="#" class="plan orange-bg">
              <p>14 days free</p>
              <div class="bottom-wrap">
                <div class="price">$99.99 <small>/ year</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/flag.svg"); ?></div>
              </div>
            </a>
            <a href="#" class="plan">
              <p>7 days free</p>
              <div class="bottom-wrap">
                <div class="price">$9.99 <small>/ month</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/trophy.svg"); ?></div>
              </div>
              <div class="banner">Most Popular</div>
            </a>
            <a href="#" class="plan">
              <p>no trial period</p>
              <div class="bottom-wrap">
                <div class="price">$2.99 <small>/ week</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/crossed-clubs.svg"); ?></div>
              </div>
              <div class="banner">Best Value</div>
            </a>
          </div>
        </div>
      </div>
      </div>

      <div class="block block-benefits">
        <div class="content container">
          <h2>Benefits with Premium</h2>
          <ul>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Caddy+</h3>
              <p>18Birdies can recommend clubs while considering wind and course elevation.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Partner Discounts</h3>
              <p>Get exclusive deals from 18Birdies partners like Golftec, OneCore, and more!</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Advanced Stats</h3>
              <p>Get more insight into your game with new charts and custom filters to better understand your progress.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Live Weather Map</h3>
              <p>Get a detailed Doppler radar view of the weather at your location.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Advanced GPS</h3>
              <p>Plan your perfect shot based on elevation, temperature, humidity, wind elevation and weather data.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Premium Lesson Plans</h3>
              <p>Receive world-class instructions from  coaches covering fitness, strategy, technique, mental game, and more!</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Shot Tracking</h3>
              <p>Save a memorable golf shot or to share it with your friends.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Strokes Gained</h3>
              <p>Measure your performance on the course against a set of other golfers.</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="block block-feature-chart">
        <div class="content container">
          <h2>Features Comparison</h2>
          <div class="feature-chart">
            <div class="feature-compare first" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Features</div>
              <div class="feature-free">Free</div>
              <div class="feature-premium">Premium</div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">GPS+</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Digital Scoring</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Stat Tracking</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Live Rounds</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Social Connectivity</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Side Games</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Tournament</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Caddy+</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Advanced GPS</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Shot Tracking</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Partner Discounts</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Premium Lesson Plans</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Live Weather Plans</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200">
              <div class="feature-name">Strokes Gained</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
          </div>
          <!-- <a href="#" class="btn solid">Start your trial today</a> -->
        </div>
      </div>

<?php

require "footer.php";

?>
