<?php

/* Template Name: Content Page (v2) */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="hero">
	<div class="hero__img" style="background-image: url('<?php the_field('hero_img'); ?>');"></div> <!-- END .hero__img -->
	<h1 class="hdln hdln--intHero"><?php the_field('hero_hdln'); ?></h1>
</section>

<section class="wrap wrap--mxw mainCntnt">
	<?php the_content(); ?>
</section> <!-- END .mainCntnt -->

<!-- Add new stuff here -->

<?php endwhile;?>
<?php get_footer(); ?>