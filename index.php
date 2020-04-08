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
              <h1>Not your average free golf app.</h1>
              <p>Join 1.8 million golfers using 18Birdies to improve their game and connect with a community like no other &mdash; while they're on and off the course.</p>
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
          <div class="item"><img src="assets/img/practice.png" width="325px" alt="Practice Screen"></div>
          <div class="item"><img src="assets/img/lessons.png" width="325px" alt="Lessons Screen"></div>
          <div class="item"><img src="assets/img/course.png" width="325px" alt="Golf Course Map"></div>
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <h2>The most advanced digital caddy.</h2>
            <p>Get precise yardage with the most advanced GPS rangefinder that adjusts for slope, weather and altitude.</p>
            <a class="btn solid" href="/features">More Features</a>
          </div>
        </div>
        <div class="overlay"></div>
      </div>

      <div class="container" id="feature-grid">
        <div data-aos="fade-up">
          <div class="block block-feature half-half" id="ai-coach">
            <div class="image">
              <img src="assets/img/ai-coach.png" alt="Golf green with golf ball and putter">
            </div>
            <div class="content">
              <div class="content-wrap">
                <h2>First-ever AI swing analyzer + coach</h2>
                <p>Breakthrough technology that's changing the way golfers analyze and work on improving their game.</p>
                <a href="#" class="btn solid">See it in action</a>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="fade-up">
          <div class="block block-feature half-half" id="discover-courses">
            <div class="content">
              <div class="content-wrap">
                <h2>Discover courses + book tee times</h2>
                <p>See course ratings from the community and book your next tee time in seconds.</p>
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
                  <img src="assets/img/user.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
              <div class="review">
                <blockquote>
                  <img src="assets/img/user.png" alt="Arthur Hanson">
                  <p>I got the most out of my game with 18Birdies GPS, tee times, scoring, stats and on-demand golf content. I absolutely love it. Thank you 18Birdies</p>
                  <footer><cite>Arthur Hanson</cite></footer>
                </blockquote>
              </div>
            </div>
            <a href="#" class="btn solid">Read All Reviews</a>
          </div>
        </div>
      </div>


      <div class="block block-feature connect">
        <div class="image">
          <img src="assets/img/connect.png" alt="Man golfing">
        </div>
        <div class="content">
          <div data-aos="fade-up" data-aos-delay="200">
            <h2>Connect, compare and compete.</h2>
            <p>Get swing tips, celebrate wins and compete in virtual tournaments no matter where you are in the world.</p>
            <a href="#" class="btn solid">See More</a>
          </div>
        </div>
      </div>

<?php require "footer.php"; ?>
