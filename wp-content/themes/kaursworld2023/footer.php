<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaursworld2023
 */

?>

	<div class="site-icon__rotate"><img src="<?php echo get_site_icon_url();?>" alt="kaurs site icon" width="80" height="80"/></div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="main__footer">
				<div class="container">
					<div class="footer__inner">
						<div class="foo__inner">
							<div class="logo__footer">
								<?php dynamic_sidebar('footer-1')?>
							</div>
						</div>
						<div class="foo__inner">
							<ul>
								<li><a href="https://goo.gl/maps/bR9rTfCCHqtAEJyy6" target="_blank"><i class="fa-regular fa-location-dot"></i> Hamilton, Ontario</a></li>
								<li><a href="mailto:contact@kaursworld.com"><i class="fa-regular fa-envelope"></i> contact@kaursworld.com</a></li>
								<li><a href="tel:+13654762955"><i class="fa-regular fa-phone"></i> +1365-476-2955</a></li>
							</ul>
						</div>
						<div class="foo__inner">
							<div class="subscribe__form">
								<h3>Subscribe Us</h3>
								<?php echo do_shortcode('[wpforms id="59" title="false"]');?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<p class="copyright-text orange-br-top">Copyright &copy 2023. All Rights Reserved.</p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="fixed-social__icons animatefromright">
		<div class="social__cont">
			<ul>
				<li><a href="https://www.facebook.com/profile.php?id=100090614095794" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
				<li><a href="https://www.linkedin.com/company/kaur-s-world/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
				<li><a href="https://www.instagram.com/kaurs.world/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="https://wa.me/13654762955" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
				<li><a href="mailto:contact@kaursworld.com" target="_blank"><i class="fa-regular fa-envelope"></i></a></li>
				
			</ul>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
