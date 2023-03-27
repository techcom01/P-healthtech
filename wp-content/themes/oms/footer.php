<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OMS
 */

?>

<section class="footer-form content-padding hide-mobile">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="62" title="Contact form"]'); ?>
	</div>
</section>

<footer class="site-footer brand-bg-color hide-mobile">
	<div class="container">

		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-2"><?php wp_nav_menu(array('theme_location' => 'footer-1'));?></div>
					<div class="col-md-2"><?php wp_nav_menu(array('theme_location' => 'footer-2'));?></div>
					<div class="col-md-2"><?php wp_nav_menu(array('theme_location' => 'footer-3'));?></div>
					<div class="col-md-2"><?php wp_nav_menu(array('theme_location' => 'footer-4'));?></div>
					<div class="col-md-2"> <?php wp_nav_menu(array('theme_location' => 'footer-5'));?></div>
				</div>
			</div>
			<div class="col-md-3">

				<?php if( have_rows('footer_right_links', 'option') ): ?>
				<ul class="footer-social">
					<li><a href="#">Cookie Policy</a></li>
					<?php while( have_rows('footer_right_links', 'option') ): the_row(); ?>
					<li><a href="<?php the_sub_field('icon_link', 'option'); ?>"><?php the_sub_field('icon_select', 'option'); ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>



		<div class="row mt-5">
			<div class="col-md-12">
				<div class="copyRight"><?php the_field('footer_copyright', 'option'); ?></div>
			</div>
		</div>


	</div>
</footer><!-- #colophon -->

<section class="footer-form content-padding hide-desktop">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="3379" title="Contact form Mobile"]'); ?>
	</div>
</section>

<footer class="site-footer brand-bg-color hide-desktop">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Quick links</h4>
				<?php wp_nav_menu(array('theme_location' => 'footer-6'));?>
			</div>
		</div>
	</div>
</footer>

<div class="footer-bottom hide-desktop">
	<?php if( have_rows('footer_right_links', 'option') ): ?>
	<ul class="footer-social">
		<li><a href="#">Cookie Policy</a></li>
		<?php while( have_rows('footer_right_links', 'option') ): the_row(); ?>
		<li><a href="<?php the_sub_field('icon_link', 'option'); ?>"><?php the_sub_field('icon_select', 'option'); ?></a></li>
		<?php endwhile; ?>
	</ul>
	<?php endif; ?>
	<div class="copyRight"><?php the_field('footer_copyright', 'option'); ?></div>
</div>

<?php wp_footer(); ?>


</body>
</html>
