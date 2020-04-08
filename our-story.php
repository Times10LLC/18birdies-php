<?php
$page = "our-story";
$title = "Our Story";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>

    <div class="block block-video">
      <div class="container">
        <div class="plyr__video-embed" id="player">
          <iframe src="https://player.vimeo.com/video/76979871?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media" allowfullscreen allowtransparency allow="autoplay"></iframe>
        </div>
      </div>
    </div>

<?php require "footer.php"; ?>
