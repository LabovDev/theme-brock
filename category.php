<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
        
        	<?php if ( have_posts() ) : ?>
                <header class="archive-header">
                    <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
    
                <?php if ( category_description() ) : // Show an optional category description ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?>
                </header><!-- .archive-header -->
    
                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();
    
                    /* Include the post format-specific template for the content. If you want to
                     * this in a child theme then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
    
                endwhile;
    
                twentytwelve_content_nav( 'nav-below' );
                ?>
    
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        
        </div>
	</div>
</div>


<?php get_footer(); ?>