<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Zomfi
 * @since Zomfi 1.0
 */
?>

	</main><!-- #main -->

	<footer id="site-footer" role="contentinfo">
		<div class="wrapper">
			<p class="copyright"><?php echo __('@2021 Zomfi. All Rights Reserved', 'zomfi'); ?></a></p>
		</div>
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<div class="scroll_top">
	<span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
