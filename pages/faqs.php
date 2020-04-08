<?php
?>

<section id="faqs" class="container">

  <h1>FAQs</h1>
  <?php

  $args = array( 'post_type' => 'faq','posts_per_page' => -1);

  $loop = new WP_Query($args);
  $i = 1;

  while ($loop->have_posts()) : $loop->the_post();

  // $premium = get_post_meta(get_the_ID(), 'premium_feature', true);

  ?>

  <div class="faq">
      <h2><?php echo get_the_title(); ?></h2>
      <p><?php the_content(); ?></p>
  </div>

  <?php

  $i++;

  endwhile;
  ?>
</section>


<?php

endwhile;

get_footer();
