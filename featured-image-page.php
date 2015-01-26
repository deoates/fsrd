<?php
/**
 * Template Name: Featured image page
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
					
					<div id="left_side">
	
						<?php if ( has_post_thumbnail()) { the_post_thumbnail(); } ?>
						
					
					</div>
					<div id="right_side">
						<div id="text_area">

						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					
					</article><!-- #post-<?php the_ID(); ?> -->

						<?php endwhile; // end of the loop. ?>
					</div>
					</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>