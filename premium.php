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
            <h1>Go further with premium</h1>
          </div>
        </div>
      </div>

      <div class="block block-plans">
        <div data-aos="fade-up">
        <div class="content">
          <h2>Choose Your Plan</h2>
          <p>Premium Members get access to the most powerful game improvement tools available to golfers &mdash; for both on and off the course.</p>
          <div class="plans">
            <a href="#" class="plan orange-bg">
              <p>14 days free</p>
              <p class="copy">Lock in this deal from day one of your membership.</p>
              <div class="bottom-wrap">
                <div class="price">$99.99 <small>/ year</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/flag.svg"); ?></div>
              </div>
              <div class="banner">Best Value</div>
            </a>
            <a href="#" class="plan">
              <p>7 days free</p>
              <p class="copy">Enjoy the flexibility of a monthly membership with full access to our most advanced features.</p>
              <div class="bottom-wrap">
                <div class="price">$9.99 <small>/ month</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/trophy.svg"); ?></div>
              </div>
              <div class="banner">Most Popular</div>
            </a>
            <a href="#" class="plan">
              <p>no trial period</p>
              <p class="copy">Even more flexibility for those who are looking to give our Premium features a try.</p>
              <div class="bottom-wrap">
                <div class="price">$2.99 <small>/ week</small></div>
                <div class="icon"><?php echo file_get_contents("assets/img/crossed-clubs.svg"); ?></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      </div>

      <div class="block block-benefits">
        <div class="content container">
          <h2>Premium Member Benefits</h2>
          <ul>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Caddy+</h3>
              <p>Hire your own digital caddy with tour-level knowledge, including Plays Like distance and club recommendations.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>AI Coach</h3>
              <p>Unlimited access to our game-changing AI swing analyzer and personalized drill recommendations.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Advanced Stats</h3>
              <p>Get more insight into your game with advanced charts and custom filters.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Live Weather Map</h3>
              <p>Get a detailed Doppler radar view of the weather at your location.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Tee Shot Planner</h3>
              <p>Find out which side of the fairway is the safest play, based on stats from other players in your handicap level.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Blind Shot Compass</h3>
              <p>Know where the flag is even when you can't see the green.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Pro Tips</h3>
              <p>Get tips on how to play shots from various lies and conditions during your round, when you need it the most.</p>
            </li>
            <li data-aos="fade-up">
              <h3><?php echo file_get_contents("assets/img/checkmark.svg"); ?>Strokes Gained Scoring</h3>
              <p>Tour-level stats that show you where you're losing or gaining strokes.</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="block block-feature-chart">
        <div class="content container">
          <h2>Features List</h2>
          <div class="feature-chart">
            <div class="feature-compare first" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Features</div>
              <div class="feature-free">Free</div>
              <div class="feature-premium">Premium</div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">GPS+</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Shot Tracking</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Scoring</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Stats Tracking</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Targets</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Multi-Player Scoring</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Side Games</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Notes</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Low Battery Mode</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Tournaments</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Apple Watch</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Social Connectivity</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>

            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Plays Like Distance</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Club Recommendations</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Advanced Stats</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Tee Shot Planner</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Live Coach</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Hole Insights</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Blind Shot Compass</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Strokes Gained</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Live Weather Map</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Apple Watch 'Start Round'</div>
              <div class="feature-free"><?php echo file_get_contents("assets/img/x.svg"); ?></div>
              <div class="feature-premium"><?php echo file_get_contents("assets/img/check.svg"); ?></div>
            </div>
            <div class="feature-compare" data-aos="fade-up" data-aos-offset="-200" data-aos-once="true">
              <div class="feature-name">Tee Time Discounts</div>
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
