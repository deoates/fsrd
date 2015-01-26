<?php
/**
 * Template Name: Press page
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
						<header class="entry-header">
							<h1 class="entry-title"><?php
$parent_title = get_the_title($post->post_parent);
echo $parent_title;
?></h1>
						</header><!-- .entry-header -->
						<div id="side-menu">
<?php if ( is_page() ) { ?>
<?php
if($post->post_parent)
$children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&echo=0'); else
$children = wp_list_pages('title_li=&child_of='.$post->ID.';echo=0');
if ($children) { ?>

<ul><li>
<?php echo $children; ?>
</li></ul>

<?php } } ?>						</div>
					</div>
					<div id="right_side">
					
					<div id="text_area">
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