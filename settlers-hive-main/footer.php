<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blacksettlers
 */

?>

		<footer id="colophon" class="site-footer">
			<div class="footer-content-home">
				<div class="logo-footer">
					<?php the_custom_logo(); ?>
				</div>
				<div class="site-info">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'secondary-menu',
							)
						);
					?>
	
				</div><!-- .site-info -->
				<?php
					get_search_form();
				?>
			</div>
			<small class="copyright">Website Created by NAIT Students</small>
		</footer><!-- #colophon -->
	</div><!-- #page -->


</body>
</html>
