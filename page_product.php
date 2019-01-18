<?php

/* Template Name: Product Page */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="hero">
	<div class="hero__img" style="background-image: url('<?php the_field('hero_img'); ?>');"></div> <!-- END .hero__img -->
	<h1 class="hdln hdln--intHero"><?php the_field('hero_hdln'); ?></h1>
</section>

<section class="wrap wrap--mxw mainCntnt">
	<div class="flexBloc flexBloc--prd">
		<div class="bloc bloc--prd">
			<h2 class="hdln hdln--prd"><?php the_field('prd_srv_hdr'); ?></h2>
			<?php the_field('prod_serv'); ?>
		</div>
		<div class="bloc bloc__img">
			<?php $image = get_field('prd_img_1'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="bloc bloc--prd txt--prdList">
			<?php the_field('prod_serv_list'); ?>
		</div>
	</div>
</section> <!-- END .mainCntnt -->

<section id="prdMIJ" class="wrap wrap--mxw mainCntnt">
	<div class="flexBloc flexBloc--prd">
		<div class="bloc bloc--prd">
			<h2 class="hdln hdln--prd"><?php the_field('prd_srv_hdr_2'); ?></h2>
			<?php the_field('prod_serv_2'); ?>
		</div>
		<div class="bloc bloc__img">
					<?php $image = get_field('prd_img_2'); if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="bloc bloc--prd txt--prdList">
			<?php the_field('prod_serv_list_2'); ?>
		</div>
	</div>
</section> <!-- END .mainCntnt -->

<section class="wrap wrap--mxw mainCntnt">
	<div class="flexBloc flexBloc--prd whyBrock">
		<div class="bloc bloc--prd">
			<h2 class="hdln hdln--prd">Why Brock?</h2>
			<?php the_field('prod_whyB'); ?>
		</div>
		<div class="bloc bloc--prd txt--prdList">
			<?php the_field('prod_whyB_list'); ?>
		</div>
	</div>
</section> <!-- END .mainCntnt -->

<!-- Add new stuff here -->

<?php endwhile;?>
<?php get_footer(); ?>