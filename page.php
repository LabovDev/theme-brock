<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
				<?php //the_content(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="container-fluid slider">
	<?php 
	if(has_post_thumbnail()) : 
		the_post_thumbnail('full');
	else: 
	?>
	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Brock_Secondary.jpg">
    <?php endif; ?>
</div>

<div class="container-fluid container-breadcrumbs">
	<div class="container"><?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?></div></div>

<div class="container-fluid middle">
	<div class="container">

        	<?php the_content(); ?>
    </div>
</div>

<?php endwhile;?>

<?php get_footer(); ?>
