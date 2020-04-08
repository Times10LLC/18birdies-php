<?php

/* Template Name: Careers */
get_header();
while (have_posts()) : the_post(); ?>

<section class="container">
  <div class="col-md-9">
    <?php the_content(); ?>
  </div>
  <div class="col-md-12">
    <h2>current positions</h2>
    <?php

    $args = array( 'post_type' => 'jobs', 'posts_per_page' => -1);
    $loop = new WP_Query($args);

    ?>

    <div class="job-openings">
      <?php

      while ($loop->have_posts()) : $loop->the_post(); ?>

      <div class="position">
        <h3><?php echo get_the_title(); ?><i class="fa fa-plus-circle"></i></h3>
        <div class="description" style="display:none">
          <?php the_content(); ?>
          <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">See More</a>
          <a href="<?php echo site_url(); ?>/careers/apply?position=<?php echo $post->post_name; ?>" class="btn btn-primary">Apply Now</a>
        </div>
      </div>

      <?php
      endwhile;

      ?>
    </div>
  </div>

  <div class="disclaimer">
    <p>18Birdies is an equal opportunity employer. All qualified applicants will receive consideration for employment without regard to race, religion, color, national origin, sex, sexual orientation, gender identity, age, status as a protected veteran, among other things, or status as a qualified individual with a disability.</p>
  </div>

</section>


<?php
endwhile;

get_footer();
