<?php
$page = "four-oh-four";
$title = "404";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php require "head.php"; ?>

  <body class="<?= $page; ?> preload">
    <?php require "nav.php"; ?>
      <div class="block block-hero">
          <div class="content">
            <div data-aos="fade-up">
            <h1>This page doesn't exist, take a mulligan?</h1>
            <a href="<?php echo $homeUrl; ?>" class="btn solid">Home</a>
          </div>
        </div>
      </div>
<?php

require "footer.php";

?>
