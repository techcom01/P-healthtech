<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OMS
 Template Name: Home Page
 */

get_header();
?>


<?php if( have_rows('home_page_section') ): ?>
<?php while( have_rows('home_page_section') ): the_row(); ?>

<?php if( get_row_layout() == 'hero_banner_section' ): ?>

<section class="oms-tc-home-banner" style="background-image:url('<?php the_sub_field('hero_image'); ?>');">
	<div class="vimeo-wrapper">
   <iframe src="https://player.vimeo.com/video/769371382?background=1&autoplay=1&loop=1&byline=0&title=0"
           frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h1><?php the_sub_field('hero_title'); ?></h1>
				<p><?php the_sub_field('hero_text'); ?></p>
				<a href="<?php the_sub_field('hero_cta_link'); ?>" class="btn btn-primary"><?php the_sub_field('hero_cta_text'); ?> <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="col-md-6"><div class="space-full-hight"></div></div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'training_banner_section' ): ?>


<section class="oms-tc-home-training brand-bg-color" style="padding-top:150px;">
<?php echo do_shortcode('[scrollsequence id="393"]'); ?>
</section>


<!--<section class="oms-tc-home-training brand-bg-color content-padding-lg">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-7">
				<h2 class="headingLine"><?php the_sub_field('heading'); ?></h2>
				<p class="p-lg"><?php the_sub_field('sub_heading'); ?></p>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
	<div class="center-image-animation">
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17359.png" class="leftImage" />
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17360.png" class="centerImage" />
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17358.png" class="rightImage" />
	</div>
</section> -->

<?php elseif( get_row_layout() == 'delivering_section' ): ?>

<section class="oms-tc-home-delivering brand-bg-color content-padding-lg" style="background-image:url('<?php the_sub_field('bg_image'); ?>');">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-4">
				<div class="max-width-sm">
					<h2 class="headingLine"><?php the_sub_field('heading'); ?></h2>
					<p><?php the_sub_field('text'); ?></p>
					<div class="space-sm"></div>
					<p class="p-md"><strong><?php the_sub_field('sub_text'); ?></strong></p>
					<a href="<?php the_sub_field('cta_link'); ?>" class="btn btn-primary"><?php the_sub_field('cta_text'); ?> <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'practice_section' ): ?>

<section class="oms-tc-home-practice brand-bg-color content-padding">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h2 class="headingLine"><?php the_sub_field('heading'); ?></span></h2>
			<p><?php the_sub_field('sub_heading'); ?></p>
			<?php the_sub_field('slide_item'); ?>
		</div>
		<div class="col-md-6">

			<?php if( have_rows('image_slider') ): ?>
			<div class="singleSlider">
				<?php while( have_rows('image_slider') ): the_row(); ?>
				<img src="<?php the_sub_field('slider_img'); ?>" />
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'putting_section' ): ?>

<section class="oms-tc-home-putting brand-bg-color content-padding">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h2 class="headingLine"><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>
		<div class="row">

			<?php if( have_rows('block_repeater') ): ?>
			<?php while( have_rows('block_repeater') ): the_row(); ?>
			<div class="col-md-3">
				<div class="text-ourlay-block" style="background-image:url('<?php the_sub_field('block_image'); ?>');">
					<h4><?php the_sub_field('block_heading'); ?></h4>
					<p><?php the_sub_field('block_text'); ?></p>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="<?php the_sub_field('block_cta_link'); ?>" class="btn btn-primary"><?php the_sub_field('block_cta_text'); ?> <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'optimizing_section' ): ?>

<section class="brand-bg-color">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h2 class="headingLine"><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<?php the_sub_field('center_content'); ?>
			</div>
		</div>
	</div>
	<div class="space"></div>
</section>

<?php elseif( get_row_layout() == 'full_width_banner' ): ?>

<section class="brand-bg-color full-width-bg content-padding content-margin-sm" style="background-image:url('<?php the_sub_field('banner_image'); ?>');">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="space-sm"></div>
				<p class="p-lg"><?php the_sub_field('sub_heading'); ?></p>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'two_col_left_image_section' ): ?>

<section class="gray-bg-color oms-tc-home-healthcare mb-5">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-6">
				<img src="<?php the_sub_field('left_image'); ?>" />
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<?php the_sub_field('right_content'); ?>
				<a href="<?php the_sub_field('block_cta_link'); ?>" class="btn btn-primary"><?php the_sub_field('block_cta_text'); ?> <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'two_col_right_image_section' ): ?>

<section class="gray-bg-color oms-tc-home-healthcare content-margin-sm">
	<div class="container-fluid">
		<div class="row align-items-center">

			<div class="col-md-1"></div>
			<div class="col-md-5">
				<?php the_sub_field('left_content'); ?>
				<a href="<?php the_sub_field('block_cta_link'); ?>" class="btn btn-primary"><?php the_sub_field('block_cta_text'); ?> <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="col-md-6">
				<img src="<?php the_sub_field('right_image'); ?>" />
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'working_section' ): ?>

<section class="brand-bg-color content-padding content-margin-sm oms-tc-home-working">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3><?php the_sub_field('heading'); ?> <img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Group-16641.svg" /></h3>

				<div class="workingSlider">

					<?php if( have_rows('left_slider') ): ?>
					<?php while( have_rows('left_slider') ): the_row(); ?>
					
					<div class="slideItem">
						<div class="row">
							<div class="col-md-8"><?php the_sub_field('slider_text'); ?></div>
							<div class="col-md-1"></div>
							<div class="col-md-3"><img src="<?php the_sub_field('slider_image'); ?>" /></div>
						</div>
					</div>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>

			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<?php the_sub_field('right_content'); ?>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'partners_section' ): ?>

<section class="content-padding oms-tc-home-trusted">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<h4 class="headingLine"><?php the_sub_field('left_heading'); ?></h4>
				<div class="space-sm"></div>
				<?php the_sub_field('left_content'); ?>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<img src="<?php the_sub_field('right_image'); ?>" />
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



<?php
get_footer();