<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Toolbox
 * @since Toolbox 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<?php if ( is_front_page() ) {} else { ?>
	<header class="entry-header">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header --> <?php } ?>
	

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
