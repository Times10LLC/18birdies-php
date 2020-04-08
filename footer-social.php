<?php
/**
 * Template part for displaying a gallery of images
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *

 */

?>
  <div class="link-header">Follow Us</div>
  <div class="links">
  <?php if (!empty($fb)) {
    ?><a href="<?= $fb; ?>" target=_blank>
      <span class="fa-stack <?php if($social_large){ echo 'fa-lg'; } ?>">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fab fa-facebook-f fa-stack-1x"></i>
      </span>
      <span class="sr-only">Facebook</span>
    </a><?php

} ?>
  <?php if (!empty($twitter)) {
    ?><a href="<?= $twitter; ?>" target=_blank>
      <span class="fa-stack <?php if($social_large){ echo 'fa-lg'; } ?>">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fab fa-twitter fa-stack-1x"></i>
      </span>
      <span class="sr-only">Twitter</span>
    </a><?php

} ?>
<?php if (!empty($youtube)) {
  ?><a href="<?= $youtube; ?>" target=_blank>
    <span class="fa-stack <?php if($social_large){ echo 'fa-lg'; } ?>">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fab fa-youtube fa-stack-1x"></i>
    </span>
    <span class="sr-only">YouTube</span>
  </a><?php

} ?>
  <?php if (!empty($ig)) {
    ?><a href="<?= $ig; ?>" target=_blank>
      <span class="fa-stack <?php if($social_large){ echo 'fa-lg'; } ?>">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fab fa-instagram fa-stack-1x"></i>
      </span>
      <span class="sr-only">Instagram</span>
    </a><?php

} ?>

<?php if (!empty($linkedin)) {
    ?><a href="<?= $linkedin; ?>" target=_blank>
      <span class="fa-stack <?php if($social_large){ echo 'fa-lg'; } ?>">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fab fa-linkedin-in fa-stack-1x"></i>
      </span>
      <span class="sr-only">LinkedIn</span>

    </a><?php

} ?>
</div>
