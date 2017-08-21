<?php /* Template Name: Portfolio Page */ ?>




<?php get_header(); ?>


<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>

		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=6&post_type=case_studies'); ?>
	  				<?php while ( have_posts() ) : the_post();
										$image_1 = get_field("image_1");
										$size = "medium";
						?>
						<li class="individual-featured-work">
									<figure>
												<?php echo wp_get_attachment_image($image_1, $size); ?>
									</figure>

		 							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>

	  				<?php endwhile; // end of loop. ?>
	  				<?php wp_reset_query(); ?>
		</ul>


	<div id="primary-portfolio" class="portfolio-content-area">
		<main id="main-portfolio" class="portfolio-site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
