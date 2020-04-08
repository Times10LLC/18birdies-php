<?php

/* Template Name: Contact */
get_header();
while (have_posts()) : the_post(); ?>

<!-- <header style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');background-size:cover;background-position:center center;">
  <h1 class="container">Contact</h1>
</header> -->

<section id="contact" class="container">

  <div class="col-md-8 three-fifths">
    <?php the_content(); ?>
  </div>
  <div class="four-fifths col-md-12" id="form-wrap">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="contactForm" class="row">
        <h2 class="col-sm-12 message hide">Thanks for your message!</h2>
        <h2 class="col-sm-12 error hide">Something went wrong, please try again later.</h2>
        <div class="form-group col-sm-6">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" name="first-name" placeholder=" " required />
        </div>
        <div class="form-group col-sm-6 right">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" name="last-name" placeholder=" " required />
        </div>
        <div class="form-group col-sm-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" placeholder=" " required />
        </div>
        <div class="form-group col-sm-6 right">
          <label for="phone-number">Phone Number</label>
          <input type="text" class="form-control phone" name="phone-number" placeholder=" " required />
        </div>
        <div class="form-group col-sm-12 right">
          <label for="message">message</label>
          <textarea name="message" class="form-control" rows="8" cols="80" maxlength="500" required /></textarea>
          <small id="charCount"></small>
        </div>
        <div class="form-group col-xs-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
  </div>
</section>

<?php


endwhile;

get_footer();
