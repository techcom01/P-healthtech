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

<section class="oms-tc-home-banner">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h1>The evolution of clinical excellence</h1>
				<p>VR healthcare education and training</p>
				<a href="#" class="btn btn-primary">Book a demo <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="col-md-6"><div class="space-full-hight"></div></div>
		</div>
	</div>
</section>


<section class="oms-tc-home-training brand-bg-color content-padding-lg">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-7">
				<h2 class="headingLine">Healthcare education and training tailored to your needs</h2>
				<p class="p-lg">We deliver unparalleled virtual healthcare simulation</p>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
	<div class="center-image-animation">
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17359.png" class="leftImage" />
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17360.png" class="centerImage" />
		<img src="https://onlinewebsolutions.in/oms/wp-content/uploads/2023/02/Mask-Group-17358.png" class="rightImage" />
	</div>
</section>


<section class="oms-tc-home-delivering brand-bg-color content-padding-lg">
	<div class="container position-relative">
		<div class="row align-items-center">
			<div class="col-md-4">
				<div class="max-width-sm">
					<h2 class="headingLine">Delivering value for everyone in healthcare</h2>
					<p>The learning platform to build competence and confidence in professional healthcare and higher education settings</p>
					<div class="space-sm"></div>
					<p class="p-md"><strong>Explore the depth and breadth of our platform</strong></p>
					<a href="#" class="btn btn-primary">Explore our platform <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>





<?php
get_footer();