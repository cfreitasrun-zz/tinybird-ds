<?php /* Template Name: About-Page */ ?>



<?php get_header(); ?>

 <div id="primary-about" class="about-content-area">
   <main id="main-about" class="about-site-main">

     <?php
     while ( have_posts() ) : the_post();

       get_template_part( 'template-parts/content', 'page' );

       // If comments are open or we have at least one comment, load up the comment template.
       if ( comments_open() || get_comments_number() ) :
         comments_template();
       endif;

     endwhile; // End of the loop.
     ?>

   </main><!-- #main -->
 </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
