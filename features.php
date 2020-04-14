<?php
$page = "features";
$title = "Features";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
      <div class="block block-hero">
          <div class="content">
            <div data-aos="fade-up">
            <h1>Game improvement that works.</h1>
            <p>play. track. practice. compete.</p>
            <div class="app-downloads">
              <a href="<?php echo $googleapplink; ?>" target=_blank><?php echo file_get_contents("assets/img/google-play.svg"); ?></a>
              <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-feature with-phone">
        <div class="phone">
          <img src="assets/img/features-hero-phone.png" alt="Tee Shot Planner">
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <span class="category"><?php echo file_get_contents("assets/img/play-track.svg"); ?>play and track</span>
            <h2>Always play your best round with the world’s smartest digital caddy</h2>
            <p>Wind speeds, eleveation, temperature, rain. Take the guesswork out of your golf game and power your performance with accurate distances, club recommedations, and more.</p>
            <a class="btn solid" href="/premium">Discover GPS</a>
          </div>
        </div>
      </div>

      <div class="block block-feature measure">
        <img class="background-mobile" src="assets/img/measure-bg-mobile.jpg" alt="Man Teeing Off with Driver">
        <div class="topography">
          <?php echo file_get_contents("assets/img/topography.svg"); ?>
        </div>
        <img class="stats" src="assets/img/measure-stats.png" alt="Measure Stats">
        <div class="content-wrap">
          <div class="content container">
            <div data-aos="fade-up">
              <span class="category"><?php echo file_get_contents("assets/img/play-track.svg"); ?>play and track</span>
              <h2>Measure your performance</h2>
              <p>Track your score and stats during or after your round. We’ll crunch the numbers and let you know where you can improve.</p>
            </div>
          </div>
        </div>
        <img class="background" src="assets/img/measure-bg.jpg" alt="Man Teeing Off with Driver">
      </div>

      <div class="block block-feature ai-coach">
        <div class="container">
          <div class="image">
            <img src="assets/img/swing-analyzer.png" alt="AI Coach - Swing Analyzer">
          </div>
          <div class="content">
            <div data-aos="fade-up">
              <span class="category practice-improve"><?php echo file_get_contents("assets/img/practice-improve.svg"); ?>practice and improve</span>
              <h2>Improve faster with AI Coach</h2>
              <p>Take swing practice to another level with our game-changing AI-powered swing analysis and coaching system.</p>
              <a class="btn solid" href="<?php echo $homeUrl; ?>ai-coach">See How It Works</a>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-feature exercises">
        <div data-aos="fade-up" style="position:relative;z-index:2;">
          <div class="container content-wrap">
            <a href="https://vimeo.com/407025790" class="open-video" title="Open Exercise Video"><?php echo file_get_contents("assets/img/play-button.svg"); ?></a>
            <div class="inner-content-wrap">
              <div class="content">
                  <span class="category practice-improve"><?php echo file_get_contents("assets/img/practice-improve.svg"); ?>practice and improve</span>
                  <h2>Practice anytime, anywhere</h2>
                  <p>Work on your swing with personalized drills from our AI Coach, or tap into everyday game improvement videos for even more practice.</p>
              </div>
            </div>
            <div class="image">
              <img src="assets/img/exercises-video-poster.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="block block-feature know-your-game">
        <div class="container">
          <div class="image">
            <img src="assets/img/know-your-game.png" alt="AI Coach - Swing Analyzer">
          </div>
          <div class="content">
            <div data-aos="fade-up">
              <span class="category"><?php echo file_get_contents("assets/img/review-compare.svg"); ?>review and compete</span>
              <h2>Know your game</h2>
              <p>Finish each round to know what to work on next.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="block block-feature compare-compete">
        <div class="container">
          <div class="content">
            <div data-aos="fade-up">
              <span class="category"><?php echo file_get_contents("assets/img/review-compare.svg"); ?>review and compete</span>
              <h2>Benchmark your performance against others.</h2>
              <p>See how your game measures up against other golfers at the courses you play.</p>
            </div>
          </div>
          <div class="image">
            <img src="assets/img/compare-compete.png" alt="AI Coach - Swing Analyzer">
          </div>
        </div>
      </div>

<?php require "footer.php"; ?>
