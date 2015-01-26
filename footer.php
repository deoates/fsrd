<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->
	<hr />
	<footer id="colophon" role="contentinfo">
		<p class="foot"> 1235 E. East Blvd #202, Charlotte NC 28203   |   P 704.332.4075    |   FSmith@franksmithdesign.com   |   Copyright &copy; Frank Smith Residential Design, Inc.
		</p>
		
		<div id="sm">
		
		<?php if ( is_page('bio') ) { ?>
		
		<a href="http://www.facebook.com/franksmithdesign" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bw_fb.png" alt="Facebook" width="27" height="26" /></a>
		<a href="http://twitter.com/FrankSmithRD" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bw_tw.png" alt="Twitter" width="25" height="26" /></a>
		<a href="http://pinterest.com/efs4600/" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bw_pi.png" alt="Pinterest" width="25" height="26" /></a>
		<a href="https://www.tumblr.com/" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/bw_tu.png" alt="Tumblr" width="23" height="26" /></a>
		
		<?php } else { ?>
		
		
		<a href="http://www.facebook.com/franksmithdesign" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/fb.png" alt="Facebook" width="27" height="26" /></a>
		<a href="http://twitter.com/FrankSmithRD" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/tw.png" alt="Twitter" width="25" height="26" /></a>
		<a href="http://pinterest.com/efs4600/" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/pi.png" alt="Pinterest" width="25" height="26" /></a>
		<a href="https://www.tumblr.com/" target="_blank>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/tu.png" alt="Tumblr" width="23" height="26" /></a>
		
		<?php } ?>
		
		
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>