<?php

/* Template Name: Long Content */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="hero">
	<div class="hero__img" style="background-image: url('<?php the_field('hero_img'); ?>');"></div> <!-- END .hero__img -->
	<h1 class="hdln hdln--intHero"><?php the_field('hero_hdln'); ?></h1>
</section>

<ul id="menuAbt" class="subMenu">
	<li class="subMenu__item"><a href="#advan" class="subMenu__link">Advantages</a></li>
	<li class="subMenu__item"><a href="#vision" class="subMenu__link">Vision, Misson, and Values</a></li>
	<li class="subMenu__item"><a href="#comm" class="subMenu__link">Community</a></li>
</ul> <!-- END sub-menu -->

<section id="abt" class="wrap wrap--mxw mainCntnt">

	<div id="advan" class="flexBloc">
		<div class="bloc">
			<h2 class="hdln hdln--h2">Advantages</h2>
		</div>
		<div class="bloc advanCopy">
			<?php the_field('lc_abt_advan'); ?>
		</div>
	</div> <!-- END Advantages -->

	<div id="vision" class="flexBloc bloc--clr">
		<div class="bloc bloc--33 bloc--txt">
			<h3 class="hdln--h3 hdln--rev">Vison</h3>
			<?php the_field('lc_abt_vis'); ?>
		</div>
		<div class="bloc bloc--33 bloc--txt">
			<h3 class="hdln--h3 hdln--rev">Misson</h3>
			<?php the_field('lc_abt_mis'); ?>
		</div>
		<div class="bloc bloc--33 bloc--txt">
			<h3 class="hdln--h3 hdln--rev">Values</h3>
			<?php the_field('lc_abt_val'); ?>
		</div>
	</div> <!-- END Vision, Mission, & Values -->

	<div id="comm" class="flexBloc flexBloc--img">
		<div class="bloc bloc--50" style="background: url('<?php the_field('lc_abt_comi'); ?>') center center/cover no-repeat;"></div>
		<div class="bloc bloc--50 bloc--txt">
			<h4 class="hdln--h4">Community</h4>
			<p class="txt txt--body"><?php the_field('lc_abt_comt'); ?></p>
		</div>
	</div> <!-- END Community -->

</section> <!-- END About  -->

<ul id="menuCar" class="subMenu">
	<li class="subMenu__item"><a href="#working" class="subMenu__link">Working At Brock</a></li>
	<li class="subMenu__item"><a href="#benefits" class="subMenu__link">Benefits</a></li>
	<li class="subMenu__item"><a href="#hiring" class="subMenu__link">Hiring Centers</a></li>
</ul> <!-- END Career sub-menu -->

<section id="car" class="wrap wrap--mxw mainCntnt">

	<div id="working" class="flexBloc">
		<div class="bloc">
			<h2 class="hdln hdln--h2">Working At Brock</h2>
		</div>
		<div class="bloc advanCopy">
			<?php the_field('lc_car_working'); ?>
		</div>
		<div class="bloc carCTAs">
			<a href="https://brockgroup.csod.com/ats/careersite/search.aspx?site=1&c=brockgroup" class="bttn bttn--working" title="Online application.">Apply</a>
			<a href="http://www.brockgroup.comcareers/hiring-locations/" class="bttn bttn--working" title="Find hiring center locations.">Find A Hiring Center</a>
		</div>
	</div> <!-- END Working At Brock -->

	<div id="benefits" class="flexBloc bloc--clr">
		<div class="bloc bloc--txt">
			<h3 class="hdln--h3 hdln--rev">Benefits</h3>
			<?php the_field('lc_car_bene_copy'); ?>
		</div>
		<div class="bloc beneList">
			<?php the_field('lc_car_bene_list'); ?>
		</div>
		<div class="bloc carCTAs">
			<a href="https://brockgroup.csod.com/ats/careersite/search.aspx?site=1&c=brockgroup" class="bttn bttn--working" title="Online application.">Apply</a>
			<a href="http://www.brockgroup.comcareers/hiring-locations/" class="bttn bttn--working" title="Find hiring center locations.">Find A Hiring Center</a>
		</div>
	</div>

	<div id="hiring" class="flexBloc hrngCntr">
		<div class="bloc">
			<h4 class="hdln hdln--h4">Hiring Centers</h4>
		</div>
		<?php if( have_rows('lc_car_hCenters') ): ?>
		
			<?php while( have_rows('lc_car_hCenters') ): the_row(); 
				// vars
				$city = get_sub_field('hc_citySt');
				$addr = get_sub_field('hc_addr');
				$phone = get_sub_field('hc_phone');
				$fax = get_sub_field('hc_fax');
				$notes = get_sub_field('hc_notes');
				$map = get_sub_field('hc_map');
				
			?>
			<div class="bloc bloc--33 ">
			<ul class="hrngCntr__loc">
				<li class="hrngCntr__item hrngCntr__item--hdr"><?php echo $city; ?></li>
				<li class="hrngCntr__item"><?php echo $addr; ?></li>
				<li class="hrngCntr__item">Phone: <?php echo $phone; ?></li>
				<li class="hrngCntr__item">Fax: <?php echo $fax; ?></li>
				<li class="hrngCntr__item">
					<?php if( $map ): ?>
					<a href="<?php echo $map; ?>" title="Click to see a map of this location." target="_blank">
					<?php endif; ?>
						» Map
					<?php if( $map ): ?>	
					</a>
					<?php endif; ?>
				</li>
				<li class="hrngCntr__item hrngCntr__item--note"><?php echo $notes; ?></li>
			</ul>
			</div>
			<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	
</section> <!-- END Careers  -->

<ul id="menuExp" class="subMenu">
	<li class="subMenu__item"><a href="#exp" class="subMenu__link">Experience</a></li>
	<li class="subMenu__item"><a href="#cap" class="subMenu__link">Capital Projects</a></li>
	<li class="subMenu__item"><a href="#skl" class="subMenu__link">Skilled Craft Maintenance</a></li>
	<li class="subMenu__item"><a href="#trn" class="subMenu__link">Turnarounds</a></li>
	<li class="subMenu__item"><a href="#cas" class="subMenu__link">Case Studies</a></li>
</ul> <!-- END Experience sub-menu -->

<section id="exper" class="wrap wrap--mxw mainCntnt">

	<div id="exp" class="flexBloc">
		<div class="bloc">
			<h2 class="hdln hdln--h2">Experience</h2>
		</div>
		<div class="bloc advanCopy">
			<?php the_field('lc_exp_copy'); ?>
		</div>
	</div> <!-- END Experieince Intro -->

	<div id="cap" class="flexBloc bloc--clr flexBloc--img">
		<div class="bloc bloc--50 bloc--txt">
			<h2 class="hdln hdln--h2 hdln--rev">Capital Projects</h3>
			<?php the_field('lc_exp_cap_copy'); ?>
		</div>
		<div class="bloc bloc--50" style="background: url('<?php the_field('lc_exp_cap_img'); ?>') center center/cover no-repeat;"></div>
	</div> <!-- END Capital Projects -->

	<div id="skl" class="flexBloc flexBloc--img">
		<div class="bloc bloc--50" style="background: url('<?php the_field('lc_exp_skl_img'); ?>') center center/cover no-repeat;"></div>
		<div class="bloc bloc--50 bloc--txt">
			<h2 class="hdln hdln--h2">Skilled Craft Maintenance</h3>
			<?php the_field('lc_exp_skl_copy'); ?>
		</div>
	</div> <!-- END Skilled Craft Maintenance -->

	<div id="trn" class="flexBloc bloc--txt">
		<div class="bloc">
			<h2 class="hdln hdln--h2">Turnarounds</h2>
		</div>
		<div class="bloc advanCopy ">
			<?php the_field('lc_exp_trn_copy'); ?>
		</div>
	</div> <!-- END Turnarounds -->

	<div id="cas" class="flexBloc flexBloc--cs bloc--txt">
		<h2 class="hdln hdln--h2 hdln--cs">Case Studies</h3>
		<?php if( have_rows('cs_stds') ): ?>
		<?php while( have_rows('cs_stds') ): the_row(); 
			// vars
			$hdln = get_sub_field('cs_hdln');
			$img = get_sub_field('cs_img');
			$xcrpt = get_sub_field('cs_xcrpt');
			$lnk = get_sub_field('cs_link');
		?>	
		<div class="bloc bloc--50 bloc--cs">
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

	</div> <!-- END Case Studies -->

</section> <!-- END Experience  -->

<ul id="menuCntct" class="subMenu">
	<li class="subMenu__item"><a href="#cnt" class="subMenu__link">Contact Us</a></li>
	<li class="subMenu__item"><a href="#map" class="subMenu__link">Offices &amp; Projects Map</a></li>
	<li class="subMenu__item"><a href="#hq" class="subMenu__link">Headquarters</a></li>
	<li class="subMenu__item"><a href="#hq" class="subMenu__link">Find A Location</a></li>
</ul> <!-- END sub-menu -->

<section id="cnt" class="wrap wrap--mxw mainCntnt">
	
	<div id="cnt" class="flexBloc">
		<div class="bloc">
			<h2 class="hdln hdln--h2">Contact Us</h2>
		</div>
		<div class="bloc bloc--70">
			<?php echo do_shortcode( '[contact-form-7 id="632" title="Contact form 1"]' ); ?>
		</div>
		<div class="bloc bloc--30">
			<?php the_field('lc_cnt_cntInfo'); ?>
		</div>
	</div> <!-- END Form / Location -->

	<div class="flexBloc">
		<!-- Map code goes here -->
	</div> <!-- END Map -->

	<div id="hq" class="bloc">
			<h2 class="hdln hdln--h2">Headquarters</h2>
		</div>
		<div class="bloc bloc--50">
			<?php the_field('lc_cnt_hq'); ?>
		</div>
		<div class="bloc bloc--50">
			<!-- Search By State -->
		</div>
	</div> <!-- END HQ -->

	<div class="flexBloc">
		<?php if( have_rows('lc_reg_hq') ): ?>

		<?php while( have_rows('lc_reg_hq') ): the_row(); 
			// vars
			$city = get_sub_field('lc_reg_hq_city');
			$addr = get_sub_field('lc_reg_hq_addr');
			$ph = get_sub_field('lc_reg_hq_phone');
			$fx = get_sub_field('lc_reg_hq_fax');
			$map = get_sub_field('lc_reg_hq_map');
		?>

		<div class="loc">
			<div class="loc__addr">
				<p class="txt txt--locCity"><?php echo $city; ?></p>
				<p class="txt txt--body"><?php echo $addr; ?></p>
			</div>
			<div class="loc__phFx">
				<p class="txt txt--body"><?php echo $ph; ?></p>
				<p class="txt txt--body"><?php echo $fx; ?></p>
			</div>
			<div class="loc__map">
				<?php if( $map ): ?>
					<a href="<?php echo $map; ?>" class="btn">
				<?php endif; ?>
					Map
				<?php if( $map ): ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<?php endwhile; ?>
		<?php endif; ?>

	</div> <!-- END Regional HQs -->

	<div class="flexBloc">
		<!-- Repeater for all locations goes here -->
	</div> <!-- END Locations -->

</section> <!-- END Contact  -->

<!-- Add new stuff here -->

<?php endwhile;?>
<?php get_footer(); ?>