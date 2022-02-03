jQuery(document).ready(function(){
	jQuery('.gameplay_slider .bxslider').bxSlider({
		mode: 'horizontal',
		moveSlides: 1,
		slideMargin: 0,
		infiniteLoop: true,
		speed: 1000,
		pause: 5000,
		auto: true,
		autoDelay: 7000,
		stopAutoOnClick: false,
	});

	var slider = jQuery('.weapons_banner_wrap .bxslider').bxSlider({
		mode: 'horizontal',
		moveSlides: 1,
		slideMargin: 0,
		infiniteLoop: true,
		speed: 1000,
		pause: 5000,
		auto: true,
		autoDelay: 7000,
		stopAutoOnClick: false,
		minSlides: 1,
    maxSlides: 3,
    slideWidth: 295,
	});

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

    jQuery(".mobile_menu_link").on('click', function(e){
		e.preventDefault();
		jQuery(".header_wrap").toggleClass('nav_active').show();
	});

    jQuery(".mobile_menu_close_link").on('click', function(e){
		e.preventDefault();
		jQuery(".header_wrap").removeClass('nav_active');
	});

	jQuery("#mobile-menu a").on('click', function(event) {
    	var hash = jQuery(this).attr("href");
    	jQuery(".header_wrap").removeClass('nav_active');
		event.preventDefault();
		jQuery('html, body').animate({
			scrollTop: jQuery(hash).offset().top - 50
		}, 800);
	});

    jQuery("#primany-menu a").on('click', function(event) {
    	var hash = jQuery(this).attr("href");
		event.preventDefault();
		jQuery('html, body').animate({
			scrollTop: jQuery(hash).offset().top - 50
		}, 800);
	});

	jQuery(".scroll_top").on('click', function(event) {
		jQuery('html, body').animate({
			scrollTop: 0
		}, 800);
	});

	jQuery(".faq_list").click(function(){
		jQuery(".faq_list_wrap").find(".faq_list").removeClass("active");
		jQuery(this).addClass("active");
	});

	jQuery(".bosses_brand_list li a").click(function(e){
		var ids = jQuery(this).attr("href");

		bosses_brand_change(ids);

		e.preventDefault();
		return false;
	});

	jQuery(".bosses_brand_list li a").hover(function(){
		var ids = jQuery(this).attr("href");

		jQuery(".bosses_brand_list").find("li").removeClass("active");
		jQuery(this).parent().addClass("active");

		bosses_brand_change(ids);
	});

	jQuery(".bosses_brand_image").hover(function(){
		var ids = jQuery(this).attr("id");

		jQuery(".bosses_brand_list").find("li").removeClass("active");

		jQuery(".bosses_brand_list").find("a").each(function(){
			if(jQuery(this).attr("href") == "#" + ids){
				jQuery(this).parent().addClass("active");
			}
		});

		bosses_brand_change("#" + ids);
	});
});

jQuery(window).scroll(function() {
	if (jQuery(window).scrollTop() > 300) {
		jQuery(".scroll_top").addClass('show');
	} else {
		jQuery(".scroll_top").removeClass('show');
	}
});

function bosses_brand_change(ids){
	jQuery(".bosses_brand_image_wrap").find(".bosses_brand_image").removeClass("active");
	jQuery(ids).addClass("active");
}

jQuery(window).on('load', function () {
  jQuery('.spinner-wrapper').fadeOut(2000);
}) 

