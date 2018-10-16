<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	



<div class="container-fluid slider">
	
	<img src="http://www.brockgroup.com/wp-content/uploads/2015/03/Brock_About_Us_Banner.jpg">
  
</div>

<div class="container-fluid middle">
	<div class="container">
        	<article id="post-0" class="post error404 no-results not-found">
				

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

    </div>
</div>



<?php get_footer(); ?>
