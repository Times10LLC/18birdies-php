<?php
$page = "legal";
$title = "Legal";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>

    <div class="block block-hero legal">
      <div class="content"><h1>Legal</h1></div>
    </div>

    <div class="block block-legal-portal">
      <div class="container">
        <p>Thank you for taking the time to learn about 18Birdies’ legal and privacy policies. This is where you’ll find information about how we protect your privacy, what you may and may not do with 18Birdies products, and how we use the information you provide us. If you still have questions after reviewing the information here, <a href="mailto:support@18birdies.com">please contact us</a>.</p>
        <div class="links-wrap">
          <a href="<?php echo $homeUrl; ?>terms-of-service" class="link">
            <div class="content">
              <?php echo file_get_contents("assets/img/app-tos.svg"); ?>
              <h2>App Terms of Service</h2>
              <p>If you're a user of the 18Birdies App, this website or any of our consumer services, the <strong>18Birdies Terms of Service</strong> applies to the services provided to you by 18Birdies.</p>
            </div>
          </a>
          <a href="<?php echo $homeUrl; ?>business-terms" class="link">
            <div class="content">
              <?php echo file_get_contents("assets/img/business-terms.svg"); ?>
              <h2>18birdies for Business Terms of Service</h2>
              <p>If you're a business customer, the <strong>18Birdies for Business Terms of Service</strong> applies to the business services provided to you by 18Birdies.</p>
            </div>
          </a>
          <a href="<?php echo $homeUrl; ?>privacy-policy" class="link">
            <div class="content">
              <?php echo file_get_contents("assets/img/privacy-policy.svg"); ?>
              <h2>Privacy Policy</h2>
              <p>This is where you’ll find information about what information we collect from you, what we do with that information, and how we safeguard it. Learn more about the <strong>18Birdies Privacy Policy</strong>.</p>
            </div>
          </a>
          <a href="https://help.18birdies.com/article/214-feed-guidelines" class="link">
            <div class="content">
              <?php echo file_get_contents("assets/img/community-guidelines.svg"); ?>
              <h2>Community Guidelines</h2>
              <p>This is where you'll find information about the rules and best practices for interacting with the 18Birdies Community. Find out more about the <strong>18Birdies Community Guidelines</strong>.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
<?php

require "footer.php";

?>
