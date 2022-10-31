jQuery(document).ready(function ($) {
	var window_size = jQuery(window).width();
	new WOW().init();
	var currentRequest = null;

	/**Home Page Photo Gallery Section AJAX */
	jQuery(".gallery-tab li").on("click", function () {
		var slug = jQuery(this).attr("data-id");
		var active_name = jQuery(this).text();
		jQuery(".gallery-tab .gallery-active-menu").text(active_name);
		jQuery(".gallery-tab li").removeClass("gallery-active-tab");
		jQuery(this).addClass("gallery-active-tab");
		jQuery(".gallery-loader").css("display", "flex");
		currentRequest = $.ajax({
			type: "POST",
			url: custom_call.ajaxurl,
			data: {
				action: "gallery_tabbing",
				slug: slug,
			},
			dataType: "text",
			success: function (data) {
				if (window_size <= 991) {
					jQuery(".gallery-masonry").slick("destroy");
					jQuery(".gallery-masonry").html(data);
				
					gallery_slider();
				}else{					
					jQuery(".gallery-masonry").html(data);
				}
				jQuery(".gallery-loader").css("display", "none");
			},
		});
		jQuery("body .dropdown ul").removeAttr("style");
	});
	/** Home Page Other Work Section SLider */
	jQuery(".other-work-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		arrows: true,
		autoplay: false,
		autoplaySpeed: 8000,
		rows: 0,
		customPaging: function (slider, i) {
			return jQuery(slider.$slides[i])
				.find(".work-main-content")
				.attr("title");
		},
		appendDots: jQuery(".work-tab"),
		dotsClass: "dropdown-tabbing",
		adaptiveHeight: true,
		prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
		nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
	});
	$first_li =jQuery(".dropdown-tabbing li:first").text();
	jQuery(".work-sec .gallery-active-menu").text($first_li);
	/**Other Work Button Text Chnage JS */
	jQuery(".other-work-slider").on(
		"afterChange",
		function (event, {slideCount: count}, currentSlide, nextSlide) {
			var ser_name = jQuery(
				".work-main-wp[data-slick-index=" +
					currentSlide +
					"] .work-main-content"
			).attr("title");
			jQuery(".work-tab .gallery-active-menu").text(ser_name);
		}
	);
	/**Other Work Section See More JS */
	jQuery(".other-work-more").on("click", function () {
		var type = jQuery(this).data("type");
		$.cookie("other_work", type, {expires: 1, path: "/"});
	});

	jQuery("body").on("click","#custom-work .estimate-btn",function(){
		jQuery('#getEstimate .service-interested .form-input option[value="Custom Iron Work"]').prop('selected', true);
		jQuery('#getEstimate').modal('show');
	});

	/**Home Page About Slider */
	jQuery(".about-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000,
		rows: 0,
		prevArrow:'<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		nextArrow:'<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
	});

	/** All Page Testimonials SLider */
	jQuery(".testimonials-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		arrows: true,
		autoplay: false,
		swipeToSlide: true,
		autoplaySpeed: 4000,
		rows: 0,
		prevArrow:'<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		nextArrow:'<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					dots: true,
					rows: 0,
					arrows:false
				},
			},
		],
	});



	/**Home Page Tabbing to Dropdown JS */
	function myFunction(x) {
		if (x.matches) {
			// If media query matches 
			jQuery(".dropdown-tabbing").css('display','none');
			jQuery("body").on("click",".overlay",function(){
				jQuery(".active-dropdown").each(function(){
					if(jQuery(this).find(".dropdown-tabbing").hasClass('show')){				
						jQuery(this).find(".dropdown-tabbing").removeClass('show');
						jQuery(this).removeClass("active-dropdown");
					}
				});
				if(!jQuery(this).hasClass('hidden')){
					jQuery(".overlay").addClass('hidden');
				}
			});
			jQuery("body").on("click",".tab-dropdown",function(){
				if(!jQuery(".overlay").hasClass('hidden')){
					jQuery(".overlay").addClass('hidden');
				}else{
					jQuery(".overlay").removeClass('hidden');
				}
				jQuery(this).parent().toggleClass('active-dropdown');
				jQuery(this).parent().find(".dropdown-tabbing").toggleClass('show');

			});
			jQuery("body").on("click",".active-dropdown ul li",function(){
				jQuery(this).parent().removeClass('show');
				jQuery(this).parent().parent().removeClass('active-dropdown');
				jQuery(".overlay").addClass('hidden');
			});
			
		} else {
			jQuery(".dropdown-tabbing").removeAttr('style');
		}
	}
	var x = window.matchMedia("(max-width: 991px)");
	myFunction(x); // Call listener function at run time
	x.addListener(myFunction);

	/* Sticky Header JS */
	jQuery(window).scroll(function () {
		// this will work when your window scrolled.
		var height = jQuery(window).scrollTop(); //getting the scrolling height of window
		if (height > 50) {
			jQuery(".site-header").addClass("sticky_head");
		} else {
			jQuery(".site-header").removeClass("sticky_head");
		}
	});

	/* Mobile Menu JS */
	jQuery("#primary-menu .menu-item a").not(".menu-item-has-children  a:first").click(function () {
		jQuery("#site-navigation").removeClass("toggled");
	});
	jQuery('body').on('click','.menu-toggle',function () {
		jQuery(".sub-menu").css('display', 'none');
		jQuery(".menu-item-has-children").removeClass("active-sub-menu");
	});
});

/* Window Load and Resize JS */
jQuery(window).on("load resize", function () {
	var window_size = jQuery(window).width();
	if (window_size <= 991) {
		jQuery("#menu-item-15 a").first().attr('href', 'javascript:void(0);');
		jQuery(".menu-item-has-children").removeClass('active-sub-menu');
		jQuery(".sub-menu").css('display', 'none');
		jQuery('body').on('click', '#primary-menu .menu-item-has-children a', function() {
            if ((jQuery(this).parents('.menu-item-has-children').hasClass('active-sub-menu'))) {
                jQuery(this).parents('.menu-item-has-children').removeClass('active-sub-menu');
                jQuery(this).parents('.menu-item-has-children').find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).parents('.menu-item-has-children').addClass('active-sub-menu');
                jQuery(this).parents('.menu-item-has-children').find('.sub-menu').css('display', 'block');
            }
        });
		gallery_slider();
		/* CTA button JS */
		jQuery(window).scroll(function () {
			var window_size_scroll = jQuery(window).width();
			if(window_size_scroll <= 991){
				if (jQuery(this).scrollTop() > 100) {
					jQuery(".cta-btn").fadeIn();
					jQuery(".cta-btn").css("display","inline-flex");
				} else {
					jQuery(".cta-btn").fadeOut();
				}
			}
		});
	} else {
		if (jQuery(".gallery-masonry").hasClass("slick-slider")) {
			jQuery(".gallery-masonry").slick("destroy");
		}
		jQuery(".cta-btn").removeAttr("style");
		
	}
});

function gallery_slider() {
	if(!jQuery(".gallery-masonry").hasClass("slick-slider")){

		jQuery(".gallery-masonry").slick({
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			rows: 2,
			adaptiveHeight: true,
			swipeToSlide: true,
			prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		});
	}
}
