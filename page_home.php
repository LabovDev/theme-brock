<?php

/* Template Name: Home Page (v2) */

get_header(); ?>

<div class="wrap">
	
	<section class="hero">
		<header class="hero__img" style="background-image: url('<?php the_field('hero_img'); ?>')"; >
			<h1 class="hdln hdln--hero"><?php the_field('hero_hdr'); ?></h1>
			<p class="txt txt--hero"><?php the_field('hero_txt', false, false); ?></p>
		</header>
	</section> <!-- END .hero -->
	
	<section class="bloc bloc--about">
		
		<div class="wrap wrap--mxw wrap--toCols">
			<div class="bloc bloc--join">
				<h1 class="hdln hdln--join">Join Our Team</h1>
				<p class="txt txt--join"><?php the_field('join_team_txt', false, false); ?></p>
				<p class="txt txt--join"><a href="<?php bloginfo('url'); ?>/?page_id=11" title="Click to learn more about careers at Brock.">More About Careers at Brock</a></p>			
			</div>
			<div class="bloc bloc--join bloc--urgent">
				<p class="txt txt--hiring"><?php the_field('hiring_boom_txt', false, false); ?></p>
				<a href="tel:1-800-600-9675" class="joinLink">Call: 800-600-9675(WORK)</a>
				<a href="https://brockgroup.csod.com/ux/ats/careersite/1/home?c=brockgroup#/" class="bttn bttn--blue" title="Click to find a hiring center.">View Opportunities</a>
			</div>			
		</div> <!-- END .bloc__joinTeam -->
	</section> <!-- END .hiring -->
	
	<section class="bloc bloc--srvcs">
		<?php $srv = get_field('srv_sct'); if( $srv ): ?>
		<div class="bloc__hdln">
			<h1 class="hdln hdln--ndxSctn">Services</h1>
		</div>
		<div class="wrap wrap--mxw wrap--toCols">
			<div class="bloc__img">
				<img src="<?php echo $srv['image']['url']; ?>" alt="<?php echo $srv['image']['alt']; ?>"/>
			</div> <!-- END .prdcts__img -->
			<div class="bloc__txt">
				<p class="txt txt--ndxSctn"><?php echo $srv['text']; ?></p>
				<p><a href="<?php echo $srv['link']; ?>" class="bttn bttn--blue">See All Services</a></p>
			</div> <!-- END .cntnt--prdTxt -->			
		</div>
		<?php endif; ?>
	</section> <!-- END .srvcs -->
	
	<section class="bloc bloc--prdcts">
		<?php $prd = get_field('prd_sct'); if( $prd ): ?>
		<div class="bloc__hdln">
			<h1 class="hdln hdln--ndxSctn">Products</h1>
		</div>
		<div class="wrap wrap--mxw wrap--toCols">
			<div class="bloc__img">
				<img src="<?php echo $prd['image']['url']; ?>" alt="<?php echo $prd['image']['alt']; ?>"/>
			</div> <!-- END .prdcts__img -->		
			<div class="bloc__txt">
				<p class="txt txt--ndxSctn"><?php echo $prd['text']; ?></p>
				<p><a href="<?php echo $prd['link']; ?>" class="bttn bttn--blue">See All Products</a></p>
			</div> <!-- END .cntnt--prdTxt -->
		</div>
		<?php endif; ?>
	</section> <!-- END .srvcs -->
	
	<section class="bloc bloc--xprncs">
		<?php $xpr = get_field('xpr_sct'); if( $xpr ): ?>
		<div class="bloc__hdln">
			<h1 class="hdln hdln--ndxSctn">Experiences</h1>
		</div>
		<div class="wrap wrap--mxw wrap--toCols">
			<div class="bloc__img">
				<img src="<?php echo $xpr['image']['url']; ?>" alt="<?php echo $xpr['image']['alt']; ?>"/>
			</div> <!-- END .prdcts__img -->
			<div class="bloc__txt">
				<p class="txt txt--ndxSctn"><?php echo $xpr['text']; ?></p>
				<p><a href="<?php echo $xpr['link']; ?>" class="bttn bttn--blue">See All Experience</a></p>
			</div> <!-- END .cntnt--prdTxt -->
		</div>
		<?php endif; ?>
	</section> <!-- END .srvcs -->	

	<section class="bloc bloc--bis">
		<?php $bis = get_field('bis_sct'); if( $bis ): ?>
		<div class="bloc__hdln">
			<h1 class="hdln hdln--ndxSctn">Brock Industrial Services</h1>
		</div>
		<div class="wrap wrap--mxw wrap--toCols">
			<div class="bloc__img">
				<img src="<?php echo $bis['image']['url']; ?>" alt="<?php echo $bis['image']['alt']; ?>"/>
			</div> <!-- END .prdcts__img -->
			<div class="bloc__txt">
				<p class="txt txt--ndxSctn"><?php echo $bis['text']; ?></p>
				<p><a href="<?php echo $bis['link']; ?>" class="bttn bttn--blue">More BIS Info</a></p>
			</div> <!-- END .cntnt--prdTxt -->
		</div>
		<?php endif; ?>
	</section> <!-- END .srvcs -->

	<section class="bloc bloc__news">
		<div class="bloc__newsWrap">
			<h1 class="hdln hdln--news">News</h1>
			<div class="bloc__newsXcrpt">
				<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<p><?php the_excerpt(__('(more…)')); ?></p>
					<a class="bttn bttn--blue bttn--news" href="<?php the_permalink() ?>">Read</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div> <!-- END .newsXcrpt -->
		</div> <!-- END .bloc__newsWrap -->
	</section>
	
</div> <!-- END .wrap -->

<?php get_footer(); ?>