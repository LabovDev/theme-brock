<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<footer class="wrap--brckFtr">
	<div class="brckFtr">
		<div>
			<h1 class="hdln hdln--ftr">Site Sections</h1>
			<ul class="brckFtr__sctLinks">
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=621">News</a></li>
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=15">Services</a></li>
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=1924">Products</a></li>
			</ul>
			<ul class="brckFtr__sctLinks">
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=1903">Experience</a></li>
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=11">Careers</a></li>
				<li class="txt txt--ftrSctLnk"><a href="<?php bloginfo('url'); ?>/?page_id=21">Contact</a></li>
			</ul>
		</div> <!-- END .brckFtr__scnts -->
		
		<div>
			<h2 class="hdln hdln--ftr">Social Media</h2>
			<ul class="brckFtr__socLinks">
				<li class="txt txt--socLnk txt--socLnkLi"><a href="http://linkedin.com/company/brockgroup">linkedin.com/company/brockgroup</a></li>
				<li class="txt txt--socLnk txt--socLnkFb"><a href="http://facebook.com/brockgroup">facebook.com/brockgroup</a></li>
				<li class="txt txt--socLnk txt--socLnkTw"><a href="http://twitter.com/brockgroup">twitter.com/brockgroup</a></li>
			</ul>
		</div>
		
		<div class="brckFtr__legal">
			<p class="txt txt--legal">&copy; <?php echo date("Y"); ?> Brock Group. All rights reserved. <a href="<?php bloginfo('url'); ?>/?page_id=31">Terms of Use &amp; Privacy Policy</a></p>
		</div>
				
	</div> <!-- END .brckFtr -->
</footer> <!-- END .brockFtr -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/theme-brock/js/smooth-scroll.js"></script>
</body>
</html>