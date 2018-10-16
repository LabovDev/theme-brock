<?php

/* Template Name: Category Page (v2) */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="hero">
	<div class="hero__img" style="background-image: url('<?php the_field('hero_img'); ?>');"></div> <!-- END .hero__img -->
	<h1 class="hdln hdln--intHero"><?php the_field('hero_hdln'); ?></h1>
</section>

<section class="wrap wrap--mxw mainCntnt">
	<div class="serv_menu">
		<?php the_field('services_menu'); ?>
	</div>
	<?php the_content(); ?>
</section> <!-- END .mainCntnt -->

<section class="wrap wrap--mxw caseStudies" data-attr="<?php the_field('show_cs'); ?>">
	<h2 class="hdln hdln--intSubHdln">Case Studies</h2>
	<?php if( have_rows('cs_stds') ): ?>
	<?php while( have_rows('cs_stds') ): the_row(); 
		// vars
		$hdln = get_sub_field('cs_hdln');
		$img = get_sub_field('cs_img');
		$xcrpt = get_sub_field('cs_xcrpt');
		$lnk = get_sub_field('cs_link');
	?>	
	<div class="caseStudy">
		<h3 class="hdln hdln--csStd" ><?php echo $hdln; ?></h3>
		
		<?php if( $lnk ): ?>
			<a href="<?php echo $lnk; ?>">
		<?php endif; ?>
			<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" />
		<?php if( $lnk ): ?>
			</a>
		<?php endif; ?>
		
		<p class="txt txt--csStd"><?php echo $xcrpt; ?></p>
		
		<?php if ($lnk): ?>
			<a href="<?php echo $lnk ?>" class="bttn bttn--blue">Read Full Case Study
		<?php endif; ?>
		<?php if( $lnk ): ?>
			</a>
		<?php endif; ?>
		
	</div> <!-- END .caseStudy -->
	<?php endwhile; ?>
	<?php endif; ?>
</section> <!-- END .bloc--caseStudies -->

<?php endwhile;?>
<?php get_footer(); ?>