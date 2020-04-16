<?php
$page = "tournaments";
$title = "Tournaments";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>

    <div class="block block-hero">
        <div class="content">
          <div data-aos="fade-up">
          <h1>Tournaments made easy</h1>
          <p>The preferred tournament solution for charities, leagues, brands and local organizers.</p>
          <a class="btn solid" href="#">Try For Free</a>
        </div>
      </div>
    </div>

    <div class="block block-benefits">
      <div class="content container">
        <h2>Tournament Features</h2>
        <ul>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/live-scoring.svg"); ?>
            <h3>Live Scoring</h3>
            <p>Save time and money by removing those painstaking, handwritten scoreboards.</p>
          </li>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/leaderboards.svg"); ?>
            <h3>Leaderboards</h3>
            <p>Keep everyone in the know with live leaderboards that run on all screens, whether it’s mobile, desktop, TV, or even a projector.</p>
          </li>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/multiple-round-formats.svg"); ?>
            <h3>Multiple Round Formats</h3>
            <p>Create any style of tournament you want, including idividual Stroke Play, Stableford, Best Ball, and Scramble.</p>
          </li>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/registration.svg"); ?>
            <h3>Registration</h3>
            <p>Players sign up and pay through one main portal.</p>
          </li>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/social-feed.svg"); ?>
            <h3>Social Feed</h3>
            <p>Players can share photos and banter using a closed banter social feed.</p>
          </li>
          <li data-aos="fade-up">
            <?php echo file_get_contents("assets/img/messaging.svg"); ?>
            <h3>Messaging</h3>
            <p>Message players directly via app or by email.</p>
          </li>
        </ul>
      </div>
    </div>

    <div class="block block-feature-phone reverse go-virtual">
      <div class="container">
        <div class="image">
          <img src="assets/img/go-virtual.png" alt="Go Virtual">
        </div>
        <div class="content">
          <div data-aos="fade-up">
            <h2>Go Virtual</h2>
            <p>18Birdies virtual tournaments are golf tournaments that players can join from any course, anywhere in the world &mdash; using the 18Birdies app.</p>
            <p>Virtual tournament players have the chance to play golf and connect with other 18Birdies users, post and share content to the Tournament Feed &mdash; and win tons of sweet prizes!</p>
            <a class="btn solid" href="#">Try for free</a>
          </div>
        </div>
      </div>
    </div>

    <div class="block block-customers">
      <div class="container">
        <h2>Featured Customers</h2>
        <div class="customer-wrap">
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/tony-finau.jpg" alt="Tony Finau Foundation Golf Classic">
            <p>Tony Finau Foundation Golf Classic</p>
          </div>
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/pga-memes.jpg" alt="PGA Memes Challenge">
            <p>PGA Memes Challenge</p>
          </div>
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/autism-ribbon.jpg" alt="Els for Autism Golf Challenge">
            <p>Els for Autism Golf Challenge</p>
          </div>
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/sf-mga.jpg" alt="Mediocre Golf Association">
            <p>Mediocre Golf Association</p>
          </div>
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/american-century.jpg" alt="American Century Classic">
            <p>American Century Classic</p>
          </div>
          <div class="customer" data-aos="fade-up">
            <img src="assets/img/derek-jeter.jpg" alt="Derek Jeter Celebrity Invitational">
            <p>Derek Jeter Celebrity Invitational</p>
          </div>
        </div>
      </div>
    </div>

<?php require "footer.php"; ?>
