<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage angrytoken
 */
?>
<footer id="footer">
	<div class="bottom-footer">
		<div class="container">
            <img class="foot-logo" src="<?php echo site_url();?>/wp-content/uploads/angrylogo2.svg"/>
			<p class="copyright">
				<span>Copyright 2018 &copy; AngryToken Team</span>
				<span>| <a class="footer-link" href="mailto:support@angrytoken.com">support@angrytoken.com</a></span>
				<span>| <a class="footer-link" href="#">Privacy Policy</a></span>
			</p>
            <?php
            $ang_options = get_option('angrytoken_option_name');
            ?>
            <p class="social-icons">
            <a target=_new href="<?php echo $ang_options['ang_instagram']; ?>"><i class="fab fa-instagram"></i></a>
            <a target=_new href="<?php echo $ang_options['ang_telegram']; ?>"><i class="fab fa-telegram-plane"></i></a>
            <a target=_new href="<?php echo $ang_options['ang_twitter']; ?>"><i class="fab fa-twitter"></i></a>
            <a target=_new href="<?php echo $ang_options['ang_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
            <a target=_new href="<?php echo $ang_options['ang_bitcoin']; ?>"><i class="fab fa-bitcoin"></i></a>
            <a target=_new href="<?php echo $ang_options['ang_medium']; ?>"><i class="fab fa-medium-m"></i></a>
            </p>
		</div>
	</div>
</footer><!--/#footer-->

<?php if ( 'page' == get_option( 'show_on_front' ) && is_front_page() && get_theme_mod( 'illdy_go_to_top', false ) ) : ?>
	<a href="#" class="illdy-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<?php endif ?>

<?php wp_footer(); ?>
</body>
</html>
