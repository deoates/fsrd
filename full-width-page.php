<?php
/**
 * Template Name: Full width page
 * Description: A menu on the left side
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary" class="full width">
			
			
			
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="tour">
							<?php the_content(); ?>
						</div><!-- .tour -->
					
					</article><!-- #post-<?php the_ID(); ?> -->

						<?php endwhile; // end of the loop. ?>
					</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>