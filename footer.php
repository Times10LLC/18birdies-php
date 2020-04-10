<div class="block block-premium">
  <div class="container">
    <div class="premium-wrap">
      <div class="content">
        <h2>Go further with premium membership</h2>
        <p>Achieve more with each and every round you play.</p><p>Go Premium to get full access to our most advanced on-course and improvement features.</p>
      </div>
      <a href="<?php echo $homeUrl; ?>premium" class="btn solid">Explore Premium</a>
    </div>
  </div>
</div>

</main>

<footer>
  <div class="downloads-wrap">
    <div class="container">
      <img src="assets/img/three-phones-small.png" alt="Three Phones">
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
            <a href="#">Company</a>
            <ul class="sub-menu">
            	<li><a href="<?php echo $homeUrl;?>our-story">Our Story</a></li>
            	<li><a href="https://shop.18birdies.com">Shop</a></li>
            	<li><a href="#">Press</a></li>
            	<li><a href="#">Team</a></li>
            	<li><a href="#">Investors + Advisors</a></li>
            	<li><a href="#">Careers</a></li>
            	<li><a href="#">Partners</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo $homeUrl; ?>features">Features</a>
            <ul class="sub-menu">
            	<li><a href="#">Digital Caddy</a></li>
            	<li><a href="#">Courses</a></li>
            	<li><a href="#">Tournaments</a></li>
            	<li><a href="<?php echo $homeUrl; ?>community">Community</a></li>
            </ul>
            </li>
          <li>
            <a href="#">Resources</a>
            <ul class="sub-menu">
            	<li><a href="#">Contact Us</a></li>
            	<li><a href="https://help.18birdies.com/category/42-faqs">FAQs</a></li>
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
        <div class="link-header">Newsletter Sign-up</div>
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
        <?php
        // wp_nav_menu(array(
        //   'theme_location' => 'legal',
        //   'container'  => false,
        //   'menu_class' => '',
        //   'fallback_cb' => '')
        // );
        ?>
    </div>
  </div>
</footer>

</main>
</body>

<script src="assets/js/bundle.min.js?v=<?php echo filemtime('assets/js/bundle.min.js'); ?>" charset="utf-8"></script>

</html>
