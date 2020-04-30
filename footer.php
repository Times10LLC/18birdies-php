<div class="block block-premium">
  <div class="container">
    <div class="premium-wrap">
      <div class="content">
        <h2>Go further with premium membership</h2>
        <p>Achieve more with each and every round you play.</p><p>Go Premium to get full access to our most advanced on-course and improvement features.</p>
        <div class="mobile-copy">
          <p>Achieve more with each and every round you play. Go Premium to get full access to our most advanced on-course and improvement features.</p>
        </div>
      </div>
      <a href="<?php echo $homeUrl; ?>premium" class="btn solid">Explore Premium</a>
    </div>
  </div>
</div>

</main>

<footer>
  <div class="downloads-wrap">
    <div class="container">
      <img src="assets/img/three-phones.png" alt="Three Phones">
      <h2>get the app</h2>
      <div class="downloads">
        <div class="app-downloads">
          <a href="<?php echo $googleapplink; ?>" target=_blank><?php echo file_get_contents("assets/img/google-play.svg"); ?></a>
          <a href="<?php echo $appstorelink; ?>" target=_blank><?php echo file_get_contents("assets/img/app-store.svg"); ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-wrap container">
    <nav class='top-menu'>
      <div class="menu-content">
        <ul id="menu-footer-menu" class="">
          <li>
            <a href="<?php echo $homeUrl; ?>company">Company</a>
            <ul class="sub-menu">
            	<li><a href="<?php echo $homeUrl;?>company#about-us">About Us</a></li>
            	<li><a href="<?php echo $homeUrl;?>company#our-mission">Our Mission</a></li>
              <li><a href="https://shop.18birdies.com">Shop</a></li>
            	<li><a href="<?php echo $homeUrl;?>company#featured-in">Featured In</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo $homeUrl; ?>features">Features</a>
            <ul class="sub-menu">
            	<li><a href="<?php echo $homeUrl; ?>features">Digital Caddy</a></li>
            	<li><a href="<?php echo $homeUrl; ?>ai-coach">AI Coach</a></li>
            	<li><a href="<?php echo $homeUrl; ?>community">Community</a></li>
            	<li><a href="<?php echo $homeUrl; ?>tournaments">Tournaments</a></li>
            	<li><a href="<?php echo $homeUrl; ?>courses">Tee Times</a></li>
            </ul>
            </li>
          <li>
            <a href="https://help.18birdies.com/">Resources</a>
            <ul class="sub-menu">
            	<li><a href="mailto:support@18birdies.com:">Contact Us</a></li>
            	<li><a href="https://help.18birdies.com/">FAQs</a></li>
              <li><a href="https://business.18birdies.com/account/login">Log into Business</a></li>
              <li><a href="<?php echo $homeUrl; ?>premium">Premium Membership</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="menu-social">
      <?php
      $social_large = true;
      require "footer-social.php";
      ?>
      <div class="newsletter-signup">
        <div class="link-header">Sign up to get the latest</div>
        <form method="post">
          <div class="input-group">
            <label for="email"><span class="sr-only">Email Address</span>
            <input type="email" name="email" value="" placeholder="Enter email" aria-label="Email Address">
            </label>
            <button type="submit" name="submit"><?php echo file_get_contents("assets/img/arrow.svg"); ?><span class="sr-only">Submit Email</span></button>
          </div>
        </form>
      </div>
    </div>

  </div>
  <div class="legal-wrap">
    <div class="legal container">
      <span class='copyright'>&copy;<?= date('Y'); ?> 18Birdies, LLC. All Rights Reserved.</span>
      <nav>
        <ul>
          <li><a href="<?php echo $homeUrl; ?>legal">Legal Information</a></li>
          <li><a href="<?php echo $homeUrl; ?>terms-of-service">Terms of Service</a></li>
          <li><a href="<?php echo $homeUrl; ?>privacy-policy">Privacy Policy</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>

</main>
</body>

<script src="assets/js/bundle.min.js?v=<?php echo filemtime('assets/js/bundle.min.js'); ?>" charset="utf-8"></script>

</html>
