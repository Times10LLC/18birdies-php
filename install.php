<?php
$page = "install";
$title = "Install";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
    <div class="block block-hero">
      <div class="content">
        <h1>get the 18birdies app</h1>
        <div class="app-downloads">
          <a href="<?php echo $googleapplink; ?>" target=_blank><?php echo file_get_contents("assets/img/google-play.svg"); ?></a>
          <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
        </div>
        <p>Enter your phone number below and we'll send you a one-time text message with a link to download the app.</p>
        <form class="phone-form" action="#" method="post">
          <input type="text" class="phone-number-us" name="number" placeholder="(XXX) XXX-XXXX" required />
          <button type="submit" name="button" class="btn solid">Send me the app</button>
        </form>
    </div>
  </div>
<?php

require "footer.php";

?>
