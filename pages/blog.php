<?php
?>

<section id="blog" class="container">

  <h1>Blog</h1>

  <?php
        endif;

        /* Start the Loop */
        while (have_posts()) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part('template-parts/content', get_post_format());

        endwhile;

        the_posts_navigation();

    else :

        get_template_part('template-parts/content', 'none');

    endif; ?>

</section>


<?php

endwhile;

get_footer();
