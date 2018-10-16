<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<div class="container-fluid slider">
	<?php 
	if(has_post_thumbnail()) : 
		the_post_thumbnail('full');
	else: 
	?>
	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Brock_Secondary.jpg">
    <?php endif; ?>
</div>
<div class="container-fluid middle">
	<div class="container">
	
		<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 xs-padding-btm-20px"><?php get_sidebar(); ?></div>
        
        <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 xs-padding-btm-20px">
	        <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

			<?php endwhile; // end of the loop. ?>
			
		</div>
	</div>
</div>


<?php get_footer(); ?>