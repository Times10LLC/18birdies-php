<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

 ?>

<a href="#main" class="sr-only" tabindex="0">Skip to main content</a>
<nav id="mobile-nav">
  <ul class="mobile-nav">
    <li class="<?php if($page == "features"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>features">Features</a></li>
    <li class="<?php if($page == "ai-coach"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>ai-coach">AI Coach</a></li>
    <li class="<?php if($page == "premium"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>premium">Premium</a></li>
    <li class="<?php if($page == "tournaments"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>tournaments">Tournaments</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="https://help.18birdies.com" target=_blank>Help</a></li>
  </ul>
  <div class="menu-social">
    <?php
    // get_template_part("template-parts/footer", "social");
    $social_large = false;
    require "footer-social.php";
?>
  </div>
</nav>
<header>
  <a data-aos="fade" class="logo" href="<?php echo $homeUrl; ?>"><?php echo file_get_contents("assets/img/logo-color.svg"); ?></a>

  <nav id="top-menu">
    <div data-aos="fade">
    <ul>
      <li class="<?php if($page == "features"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>features">Features</a></li>
      <li class="<?php if($page == "ai-coach"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>ai-coach">AI Coach</a></li>
      <li class="<?php if($page == "premium"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>premium">Premium</a></li>
      <li class="<?php if($page == "tournaments"){ echo "active"; } ?>"><a href="<?php echo $homeUrl; ?>tournaments">Tournaments</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="https://help.18birdies.com" target=_blank>Help</a></li>
    </ul>
    </div>
  </nav>

  <div id="top-right-menu">
    <div data-aos="fade">
      <ul>
        <li><a href="<?php echo $homeUrl; ?>install" class="btn white-border">download</a></li>
      </ul>
    </div>
  </div>

  <a class="menu-icon" aria-label=”Menu”>
    <span aria-hidden="true"></span>
  </a>
</header>
<main id="main">
