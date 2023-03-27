$('.singleSlider').slick({
	prevArrow: "<i class='fa fa-arrow-right'></i>",
	nextArrow: "<i class='fa fa-arrow-left'></i>"
});


$('.workingSlider').slick({
	prevArrow: "<i class='fa fa-arrow-right'></i>",
	nextArrow: "<i class='fa fa-arrow-left'></i>"
});

$('.toggleButon').on('click', function(){
	$(this).toggleClass('active');
	$('#site-navigation').slideToggle();
});




$('.showContent').on('click', function(){
	$(this).slideToggle();
	$(this).parent('.elementor-widget-wrap').find('.hide-content').slideToggle();
});


$('.closeButton').on('click', function(){
	$(this).parent().parent().parent().parent().parent('.elementor-widget-wrap').find('.showContent').slideToggle();
	$(this).parent().parent().parent().parent().parent('.elementor-widget-wrap').find('.hide-content').slideToggle();
});



$('.myVideo video, .myVideo2 video').mouseover(function(){
  this.play(); 
});

$('.myVideo video, .myVideo2 video').mouseout(function(){
  this.pause(); 
});


$('.myVideo').on('click', function(){
	$(this).toggleClass('videoOpen');
	$(this).parent().parent().parent().parent('.elementor-section').toggleClass('videoSize');
});

$('.myVideo2').on('click', function(){
	$(this).toggleClass('videoExpand');
	$('.leftSlideContent').toggleClass('contentMove');
});


$('.tabIconList li.elementor-icon-list-item:first-child').addClass('active');



