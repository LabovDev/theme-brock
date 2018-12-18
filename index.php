<?php get_header(); ?>

<section class="hero">
	<h1 class="hdln hdln--intHero">News</h1>
</section>

<section class="wrap wrap--mxw mainCntnt" id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php the_posts_pagination(); ?>
</section>

<?php get_footer(); ?>