<?php get_header(); ?>
	<section class="wrap wrap--mxw mainCntnt" id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>