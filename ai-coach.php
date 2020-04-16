<?php
$page = "ai-coach";
$title = "AI Coach";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
      <div class="block block-hero">
          <video src="assets/video/video-loop.mp4" autoplay muted loop poster="assets/img/video-loop-poster.png"></video>
          <div class="content">
            <div data-aos="fade-up">
            <h1>Swing practice will never be the same</h1>
            <div class="app-downloads">
              <a href="<?php echo $googleapplink; ?>" target=_blank><?php echo file_get_contents("assets/img/google-play.svg"); ?></a>
              <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-feature-phone analyze-your-swing">
        <div class="container">
          <div class="image">
            <img src="assets/img/ai-coach-phone.png" alt="AI Coach - Swing Analyzer">
          </div>
          <div class="content">
            <div data-aos="fade-up">
              <div class="step"><span>01</span></div>
              <h2>Analyze your swing in minutes</h2>
              <p>Get instant feedback anytime, anywhere and with our without a club. All you need is your phone and the 18Birdies AI Coach.</p>
              <a class="btn solid" href="#">Try It Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-hero-interior">
        <div class="content">
          <div data-aos="fade-up">
            <div class="step"><span>02</span></div>
            <h2>See exactly what you need to work on to improve.</h2>
            <p>The AI Coach will show you what your strengths are, and exactly where you need to improve.</p>
          </div>
        </div>
      </div>

      <div class="block block-feature-phone reverse see-your-progress">
        <div class="container">
          <div class="image">
            <img src="assets/img/see-your-progress.png" alt="AI Coach - Swing Analyzer">
          </div>
          <div class="content">
            <div data-aos="fade-up">
              <div class="step"><span>03</span></div>
              <h2>Drill plans, custom fit for your swing</h2>
              <p>Short and simple drills that you can do at home and take to the range.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-quotes">
        <div data-aos="fade-up" data-aos-delay="200">
          <div class="quotes-wrap">
            <h2>What golfers are saying</h2>
            <div class="slider" id="quotes-slider">
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>Absolutely blownaway, beyond my expectations. It’s a holy shit wow. The product itself. The look. The seamless and ease of use.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>It's amazing – 10/10. That you can do this automatically is pretty amazing.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>Absolutely blown away, beyond my expectations. It’s a holy shit wow. The product itself. The look. The seamless and ease of use.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>It's amazing – 10/10. That you can do this automatically is pretty amazing.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>Absolutely blown away, beyond my expectations. It’s a holy shit wow. The product itself. The look. The seamless and ease of use.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>It's amazing – 10/10. That you can do this automatically is pretty amazing.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>Absolutely blown away, beyond my expectations. It’s a holy shit wow. The product itself. The look. The seamless and ease of use.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="quote">
                <blockquote>
                  <div>
                    <?php echo file_get_contents("assets/img/quote.svg"); ?>
                    <p>It's amazing – 10/10. That you can do this automatically is pretty amazing.</p>
                  </div>
                  <footer>
                    <img src="assets/img/user-generic.png" alt="Arthur Hanson">
                    <cite>Arthur Hanson</cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php require "footer.php"; ?>
