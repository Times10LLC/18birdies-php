<?php
$page = "company";
$title = "Company";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>

    <div class="block block-hero">
        <div class="content">
          <div data-aos="fade-up">
          <h1>Powering the future of Golf</h1>
        </div>
      </div>
    </div>

    <div class="block block-text" id="about-us">
      <div class="container">
        <div class="content" data-aos="fade-up">
          <h2>About 18birdies</h2>
          <h3>In every golfer is the desire to play better.</h3>
          <p>18Birdies is synonymous with ambition, performance &mdash; and the thrill that one gets from reaching a goal they’ve been working so long and so hard to accomplish.</p>
          <p>Above all else, our community of golfers is always on a mission to get better, play better, and achieve more. And, maybe, over a few good rounds &mdash; they'll be able to check off those 18 birdies one by one. We can all dream, can't we?</p>
        </div>
      </div>
    </div>

    <div class="block block-text" id="our-mission">
      <div class="container">
        <div class="content" data-aos="fade-up">
          <h2>Our Mission</h2>
          <p>Founded in 2014, 18Birdies is now the #1 rated game improvement and social platform for golfers. Our mission is to empower all golfers with the tools they need to play at their best – while they’re on or off the course. Avid and beginner golfers reach for 18Birdies to get distances, plan and manage their rounds and stats, learn and challenge themselves with our practice tools and content – and to connect with friends, family and the larger 18Birdies community to share in their collective golf journeys.</p>
        </div>
      </div>
    </div>

    <div class="block block-callout" id="merch">
      <div class="container">
        <div class="content-wrap">
          <div class="content" data-aos="fade-up">
            <h2>Join the flock</h2>
            <p>Wear Birdie on your sleeve or outfit your golf bag with an official 18Birdies logo towel. It's a crowd favorite.</p>
            <a href="https://shop.18birdies.com" class="btn solid">Shop Gear</a>
          </div>
          <div class="image">
            <img src="assets/img/merch.png" alt="Join the Flock">
          </div>
        </div>
      </div>
    </div>

    <div class="block block-press" id="featured-in">
      <div class="content" data-aos="fade-up">
        <h2>Featured In</h2>
        <div id="press-slider">
          <div class="article-wrap">
            <div class="article">
              <h3>Best Swing and Game Analyzers</h3>
              <div class="date">March 24, 2019</div>
              <p>The free 18Birdies app works like a super-powered scorecard, merging GPS data on the course you're playing with the shots you hit to prompt you with swing and strategy advice.</p>
              <div class="footer">
                <div class="press-logo"><?php echo file_get_contents("assets/img/golf-digest.svg"); ?></div>
                <a href="#" class="btn solid">Read More</a>
              </div>
            </div>
          </div>
          <div class="article-wrap">
            <div class="article">
              <h3>Best Swing and Game Analyzers</h3>
              <div class="date">March 24, 2019</div>
              <p>18Birdies' rich features and ever-growing community make it a great place to start. It's on-course functions, include scoring, statistics tracking, and mapping. There's also a handy tab for logging any friendly bets your group might have wagered. Fill your clubhouse downtime by browsing the app's newsfeed or DreamGames feature, which rewards you with swag both minor (gloves, headwear) and major (trips to the Masters and U.S. Open).</p>
              <div class="footer">
                <div class="app-downloads">
                  <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
                </div>
              </div>
            </div>
          </div>
          <div class="article-wrap">
            <div class="article">
              <h3>Always Look At The Bright Side Of Your Round</h3>
              <div class="date">March 24, 2019</div>
              <p>Anything you can think of in golf, there’s an app for that and this is especially the case when you’re talking about scorecard replacing apps that provide high quality GPS. But 18Birdies stickiness and multi-functionality make it more difficult to pigeon hole.</p>
              <div class="footer">
                <div class="press-logo">
                  <?php echo file_get_contents("assets/img/forbes.svg"); ?>
                </div>
                <a href="#" class="btn solid">Read More</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

<?php require "footer.php"; ?>
