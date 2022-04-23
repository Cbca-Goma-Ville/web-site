jQuery(function($){

var NATIVE = window.NATIVE || {};

/* ==================================================
	Contact Form Validations
================================================== */
	NATIVE.ContactForm = function(){
		$('.contact-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){
		
			var action = $(this).attr('action');
		
			$("#message").slideUp(750,function() {
			$('#message').hide();
		
			$('#submit')
				.after('<img src="images/assets/ajax-loader.gif" class="loader" />')
				.attr('disabled','disabled');
		
			$.post(action, {
				name: $('#name').val(),
				email: $('#email').val(),
				phone: $('#phone').val(),
				comments: $('#comments').val()
			},
				function(data){
					document.getElementById('message').innerHTML = data;
					$('#message').slideDown('slow');
					$('.contact-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#submit').removeAttr('disabled');
					if(data.match('success') != null) $('.contact-form').slideUp('slow');
		
				}
			);
			});
			return false;
		});
		});
	}

/* ==================================================
	Responsive Nav Menu
================================================== */
	NATIVE.navMenu = function() {
		// Responsive Menu Events
		$(".menu-toggle").click(function(){
			$(this).toggleClass("opened");
			$(".main-menu-wrapper").slideToggle(500);
			return false;
		});
		$(window).resize(function(){
			if($(".menu-toggle").hasClass("opened")){
				$(".main-menu-wrapper").css("display","block");
			} else {
				$(".menu-toggle").css("display","none");
			}
		});
	}
/* ==================================================
	Scroll to Top
================================================== */
	NATIVE.scrollToTop = function(){
		var windowWidth = $(window).width(),
			didScroll = false;
	
		var $arrow = $('#back-to-top');
	
		$arrow.click(function(e) {
			$('body,html').animate({ scrollTop: "0" }, 750, 'easeOutExpo' );
			e.preventDefault();
		})
	
		$(window).scroll(function() {
			didScroll = true;
		});
	
		setInterval(function() {
			if( didScroll ) {
				didScroll = false;
	
				if( $(window).scrollTop() > 200 ) {
					$arrow.fadeIn();
				} else {
					$arrow.fadeOut();
				}
			}
		}, 250);
	}
/* ==================================================
   Accordion
================================================== */
	NATIVE.accordion = function(){
		var accordion_trigger = $('.accordion-heading.accordionize');
		
		accordion_trigger.delegate('.accordion-toggle','click', function(event){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).addClass('inactive');
			}
			else{
				accordion_trigger.find('.active').addClass('inactive');          
				accordion_trigger.find('.active').removeClass('active');   
				$(this).removeClass('inactive');
				$(this).addClass('active');
			}
			event.preventDefault();
		});
	}
/* ==================================================
   Toggle
================================================== */
	NATIVE.toggle = function(){
		var accordion_trigger_toggle = $('.accordion-heading.togglize');
		
		accordion_trigger_toggle.delegate('.accordion-toggle','click', function(event){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
				$(this).addClass('inactive');
			}
			else{
				$(this).removeClass('inactive');
				$(this).addClass('active');
			}
			event.preventDefault();
		});
	}
/* ==================================================
   Tooltip
================================================== */
	NATIVE.toolTip = function(){ 
		$('a[data-toggle=tooltip]').tooltip();
	}
/* ==================================================
   Twitter Widget
================================================== */
	NATIVE.TwitterWidget = function() {
		$('.twitter-widget').each(function(){
			var twitterInstance = $(this); 
			twitterTweets = twitterInstance.attr("data-tweets-count") ? twitterInstance.attr("data-tweets-count") : "1"
			twitterInstance.twittie({
            	dateFormat: '%b. %d, %Y',
            	template: '<li><i class="fa fa-twitter"></i> {{tweet}} <span class="date">{{date}}</span></li>',
            	count: twitterTweets,
            	hideReplies: true
        	});
		});
	}
/* ==================================================
   Flex Slider
================================================== */
	NATIVE.FlexSlider = function() {
		$('.flexslider').each(function(){
				var carouselInstance = $(this); 
				carouselAutoplay = carouselInstance.attr("data-autoplay") == 'yes' ? true : false,
				carouselPagination = carouselInstance.attr("data-pagination") == 'yes' ? true : false,
				carouselArrows = carouselInstance.attr("data-arrows") == 'yes' ? true : false,
				carouselDirection = carouselInstance.attr("data-direction") ? carouselInstance.attr("data-direction") : "horizontal",
				carouselStyle = carouselInstance.attr("data-style") ? carouselInstance.attr("data-style") : "fade",
				carouselSpeed = carouselInstance.attr("data-speed") ? carouselInstance.attr("data-speed") : "5000",
				carouselPause = carouselInstance.attr("data-pause") == 'yes' ? true : false,
				
				carouselInstance.flexslider({
					animation: carouselStyle,
					easing: "swing",               
					direction: carouselDirection,       
					slideshow: carouselAutoplay,              
					slideshowSpeed: carouselSpeed,         
					animationSpeed: 600,         
					initDelay: 0,              
					randomize: false,            
					pauseOnHover: carouselPause,       
					controlNav: carouselPagination,           
					directionNav: carouselArrows,            
					prevText: "",          
					nextText: "",
					
				});
		});
	}
/* ==================================================
   PrettyPhoto
================================================== */
	NATIVE.PrettyPhoto = function() {
			$("a[data-rel^='prettyPhoto']").prettyPhoto({
				  opacity: 0.5,
				  social_tools: "",
				  deeplinking: false
			});
	}
/* ==================================================
   Nivo Slider
================================================== */
	NATIVE.NivoSlider = function() {
		$('.nivoslider').each(function(){
				var nivoInstance = $(this); 
				nivoAutoplay = nivoInstance.attr("data-autoplay") == 'no' ? true : false,
				nivoPagination = nivoInstance.attr("data-pagination") == 'yes' ? true : false,
				nivoArrows = nivoInstance.attr("data-arrows") == 'yes' ? true : false,
				nivoThumbs = nivoInstance.attr("data-thumbs") == 'yes' ? true : false,
				nivoEffect = nivoInstance.attr("data-effect") ? nivoInstance.attr("data-effect") : "random",
				nivoSlices = nivoInstance.attr("data-slices") ? nivoInstance.attr("data-slices") : "15",
				nivoanimSpeed = nivoInstance.attr("data-animSpeed") ? nivoInstance.attr("data-animSpeed") : "500",
				nivopauseTime = nivoInstance.attr("data-pauseTime") ? nivoInstance.attr("data-pauseTime") : "3000",
				nivoPause = nivoInstance.attr("data-pauseonhover") == 'yes' ? true : false
				
				nivoInstance.nivoSlider({
					effect: nivoEffect,
					slices: nivoSlices,
					animSpeed: nivoanimSpeed,
					pauseTime: nivopauseTime,
					directionNav: nivoArrows,
					controlNav: nivoPagination,
					controlNavThumbs: nivoThumbs,
					pauseOnHover: nivoPause,
					manualAdvance: nivoAutoplay
				});
		});
	}
/* ==================================================
   PrettyPhoto
================================================== */
	NATIVE.PrettyPhoto = function() {
			$("a[data-rel^='prettyPhoto']").prettyPhoto({
				  opacity: 0.5,
				  social_tools: "",
				  deeplinking: false
			});
	}
/* ==================================================
   Animated Counters
================================================== */
	NATIVE.Counters = function() {
		$('.counters').each(function () {
			$(".timer .count").appear(function() {
			var counter = $(this).html();
			$(this).countTo({
				from: 0,
				to: counter,
				speed: 2000,
				refreshInterval: 60,
				});
			});
		});
	}
/* ==================================================
   SuperFish menu
================================================== */
	NATIVE.SuperFish = function() {
		$('.sf-menu').superfish({
			  delay: 200,
			  animation: {opacity:'show', height:'show'},
			  speed: 'fast',
			  cssArrows: false,
			  disableHI: true
		});
		$(".navigation > ul > li:has(ul)").find("a:first").append(" <i class='fa fa-angle-down'></i>");
		$(".navigation > ul > li > ul > li:has(ul)").find("a:first").append(" <i class='fa fa-angle-right'></i>");
	}
/* ==================================================
   IsoTope Portfolio
================================================== */
		NATIVE.IsoTope = function() {	
			$("ul.sort-source").each(function() {

				var source = $(this);
				var destination = $("ul.sort-destination[data-sort-id=" + $(this).attr("data-sort-id") + "]");

				if(destination.get(0)) {

					$(window).load(function() {

						destination.isotope({
							itemSelector: ".grid-item",
							layoutMode: 'sloppyMasonry'
						});

						source.find("a").click(function(e) {

							e.preventDefault();

							var $this = $(this),
								filter = $this.parent().attr("data-option-value");

							source.find("li.active").removeClass("active");
							$this.parent().addClass("active");

							destination.isotope({
								filter: filter
							});

							if(window.location.hash != "" || filter.replace(".","") != "*") {
								self.location = "#" + filter.replace(".","");
							}

							return false;

						});

						$(window).bind("hashchange", function(e) {

							var hashFilter = "." + location.hash.replace("#",""),
								hash = (hashFilter == "." || hashFilter == ".*" ? "*" : hashFilter);

							source.find("li.active").removeClass("active");
							source.find("li[data-option-value='" + hash + "']").addClass("active");

							destination.isotope({
								filter: hash
							});

						});

						var hashFilter = "." + (location.hash.replace("#","") || "*");

						var initFilterEl = source.find("li[data-option-value='" + hashFilter + "'] a");

						if(initFilterEl.get(0)) {
							source.find("li[data-option-value='" + hashFilter + "'] a").click();
						} else {
							source.find("li:first-child a").click();
						}

					});

				}

			});
			$(window).load(function() {
				IsoTopeCont = $(".isotope-grid");
				IsoTopeCont.isotope({
					itemSelector: ".grid-item",
					layoutMode: 'sloppyMasonry'
				});
				if ($(".grid-holder").length > 0){	
					var $container_blog = $('.grid-holder');
					$container_blog.isotope({
					itemSelector : '.grid-item'
					});
			
					$(window).resize(function() {
					var $container_blog = $('.grid-holder');
					$container_blog.isotope({
						itemSelector : '.grid-item'
					});
					});
				}
			});
		}
/* ==================================================
   Sticky Navigation
================================================== */	
	NATIVE.StickyNav = function() {
		if($("body").hasClass("boxed"))
			return false;
		if ($(window).width() > 992){
			$(".main-menu-wrapper").sticky({topSpacing:0});
		}
		
		var windowWidth = $(window).width(),
		didScroll = false;
	
		var $menu = $('.site-header');
	
		$(window).scroll(function() {
			didScroll = true;
		});
	
		setInterval(function() {
	
				if( $(window).scrollTop() > 20 ) {
					$menu.addClass('sticky-header');
				} else {
					$menu.removeClass('sticky-header');
				}
		}, 250);
	}
/* ==================================================
   Init Functions
================================================== */
$(document).ready(function(){
	NATIVE.ContactForm();
	NATIVE.scrollToTop();
	NATIVE.accordion();
	NATIVE.toggle();
	NATIVE.toolTip();
	NATIVE.navMenu();
	NATIVE.TwitterWidget();
	NATIVE.FlexSlider();
	NATIVE.NivoSlider();
	NATIVE.PrettyPhoto();
	NATIVE.SuperFish();
	NATIVE.Counters();
	NATIVE.IsoTope();
	NATIVE.StickyNav();
});


// FITVIDS
$(".container, .hero-slider").fitVids();

// Pages Design Functions

// Event Listing Height Calculation
$(".events-listing .item").each(function(){
	var eventHeight = $(this).height();
	$(this).find(".to-event-url").css("height",eventHeight);
});
$(window).resize(function(){
	$(".events-listing .item").each(function(){
	var eventHeight = $(this).height();
	$(this).find(".to-event-url").css("height",eventHeight);
});
});
// Centering the dropdown menus
$(".navigation ul li").mouseover(function() {
	 the_width = $(this).find("a").width();
	 child_width = $(this).find("ul").width();
	 width = parseInt((child_width - the_width)/2);
	$(this).find("ul").css('left', -width);
});
// Image Hover icons for gallery items
$(window).load(function(){
$(".format-image").each(function(){
	$(this).find(".media-box").append("<span class='zoom'><i class='fa fa-search'></i></span>");
});
$(".format-standard").each(function(){
	$(this).find(".media-box").append("<span class='zoom'><i class='fa fa-plus'></i></span>");
});
$(".format-video").each(function(){
	$(this).find(".media-box").append("<span class='zoom'><i class='fa fa-play'></i></span>");
});
$(".format-link").each(function(){
	$(this).find(".media-box").append("<span class='zoom'><i class='fa fa-link'></i></span>");
});
$(".media-box .zoom").each(function(){
	mpwidth = $(this).parent().width();
	mpheight = $(this).parent().find("img").height();
	
	$(this).css("width", mpwidth);
	$(this).css("height", mpheight);
	$(this).css("line-height", mpheight+"px");
});
$('.goingon-events-floater').animate({opacity:1},[1000]);
});
$(window).resize(function(){
	$(".media-box .zoom").each(function(){
		mpwidth = $(this).parent().width();
		mpheight = $(this).parent().find("img").height();
		
		$(this).css("width", mpwidth);
		$(this).css("height", mpheight);
		$(this).css("line-height", mpheight+"px");
	});
	if ($(window).width() > 992){
		$(".main-menu-wrapper").css("display","block");
	} else {
		$(".main-menu-wrapper").css("display","none");
	}
});
// List Styles
$('ul.checks li').prepend('<i class="fa fa-check"></i> ');
$('ul.angles li, .nav-list-primary li a, .widget ul > li > a:first-child').prepend('<i class="fa fa-angle-right"></i> ');
$('ul.inline li').prepend('<i class="fa fa-check-circle-o"></i> ');
$('ul.chevrons li').prepend('<i class="fa fa-chevron-right"></i> ');
$('ul.carets li').prepend('<i class="fa fa-caret-right"></i> ');
$('a.external').prepend('<i class="fa fa-external-link"></i> ');
$('.goingon-events-floater').prepend('<i class="fa flo-arrow fa-caret-down"></i> ');

// Featured Event Widget
$(".featured_event_widget").find(".sidebar-widget-title h3").prepend("<span class='featured-star'><i class='fa fa-star'></i></span>");
$(".featured_event_widget").find("h4.featured-event-title a").append(" <i class='fa fa-caret-right'></i>");
$(".featured_event_widget").has("img.featured-event-image").find(".featured-event-time").css("position","absolute");

//Donation Modal
$(".donate-paypal").click(function(){
	CauseName = $(this).parents(".cause-item").find("h3").html();
	$(".payment-to-cause").html(CauseName);
});
$('select[name="donation amount"]').change(function(){
  if ($(this).val() === "Custom")
  {
    $('.custom-donate-amount').show();
	$('input[name="Custom Donation Amount"]').focus();
  }
  else
  {
    $('.custom-donate-amount').hide();
  }
});

// Initialize Audio Player (MediaElement.js)
if ($('.audio-player').length) {
	// Initialize audio player
	var audio_player = new MediaElementPlayer( '.audio-player' );
	// Make player responsive
	$( ".audio-player" ).css( 'max-width', '100%' );
	// Hide after delay keeps progress bar showing when switch from video
	setTimeout( function() {
		// Snap volume into place on first load
		$(window).trigger('resize');
		if ($('.video-container').length) {
			$('.audio-container').hide();
		}
		// Show audio player if #play-audio has in URL
		if (window.location.hash == '#play-audio') {
			$('.video-container').hide(); // hide video
			$('.audio-container').show();
		}
	}, 500 );
	// Snap volume control back into place after resize
	$(window).bind('load debouncedresize', function() {
		$('.mejs-time-rail').width( $('.mejs-time-rail').width() - 2 );
	});
}
// Play Video Link
$('.play-video-link').click(function(event) {
	event.preventDefault();
	var video_url = $(this).attr('href');
	var video_container = $('.video-container');
	// have video URL and place to stick it
	if (video_url && video_container) {
		// get video embed code and change autoplay to 1
		var embed_code = video_container
			.html()
			.replace('autoplay=0', 'autoplay=1'); 
		// have good code
		if (embed_code) {
			// stop and hide audio player
			var audio_container = $('.audio-container');
			if (audio_container.length) { // if there is audio
				audio_player.pause();
				audio_container.hide();
			}
			// replace embed code and show
			video_container
				.html(embed_code)
				.show();
		}
	}
});
// Play Audio Link
$('.play-audio-link').click(function(event) {
	event.preventDefault();
	// hide video player
	$('.video-container').hide();
	// stop video player
	// get embed code and replace autoplay=1 with 0, then overwrite the HTML (this effectively stops video without API)
	var video_container = $('.video-container');
	if (video_container.length) { // if there is video
		var embed_code = video_container
			.html().replace('autoplay=1', 'autoplay=0'); // same for YouTube and Vimeo
		video_container.html(embed_code)
	}
	// show and play audio player
	$('.audio-container').show();
	audio_player.pause();
	audio_player.play();
	// Snap volume into place on first load
	$(window).trigger('resize');
});

// FrontPage Time Counter
var expiryDate = $('#counter').data('date');
var target = new Date(expiryDate),
finished = false,
availiableExamples = {
	set15daysFromNow: 15 * 24 * 60 * 60 * 1000,
	set5minFromNow  : 5 * 60 * 1000,
	set1minFromNow  : 1 * 60 * 1000
};
function callback(event) {
	$this = $(this);
	switch(event.type) {
		case "seconds":
		case "minutes":
		case "hours":
		case "days":
		case "weeks":
		case "daysLeft":
			$this.find('div span#'+event.type).html(event.value);
			if(finished) {
				$this.fadeTo(0, 1);
				finished = false;
			}

			break;
		case "finished":
			$this.fadeTo('slow', .5);
			finished = true;
			break;
	}
}
$('#counter').countdown(target.valueOf(), callback);

// Animation Appear
$("[data-appear-animation]").each(function() {

	var $this = $(this);
  
	$this.addClass("appear-animation");
  
	if(!$("html").hasClass("no-csstransitions") && $(window).width() > 767) {
  
		$this.appear(function() {
  
			var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
  
			if(delay > 1) $this.css("animation-delay", delay + "ms");
			$this.addClass($this.attr("data-appear-animation"));
  
			setTimeout(function() {
				$this.addClass("appear-animation-visible");
			}, delay);
  
		}, {accX: 0, accY: -150});
  
	} else {
  
		$this.addClass("appear-animation-visible");
	}
});
// Animation Progress Bars
$("[data-appear-progress-animation]").each(function() {

	var $this = $(this);

	$this.appear(function() {

		var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);

		if(delay > 1) $this.css("animation-delay", delay + "ms");
		$this.addClass($this.attr("data-appear-animation"));

		setTimeout(function() {

			$this.animate({
				width: $this.attr("data-appear-progress-animation")
			}, 1500, "easeOutQuad", function() {
				$this.find(".progress-bar-tooltip").animate({
					opacity: 1
				}, 500, "easeOutQuad");
			});

		}, delay);

	}, {accX: 0, accY: -50});

});

// Parallax Jquery Callings
if(!Modernizr.touch) {
	$(window).bind('load', function () {
		parallaxInit();						  
	});
}
function parallaxInit() {
	$('.parallax1').parallax("50%", 0.1);
	$('.parallax2').parallax("50%", 0.1);
	$('.parallax3').parallax("50%", 0.1);
	$('.parallax4').parallax("50%", 0.1);
	$('.parallax5').parallax("50%", 0.1);
	$('.parallax6').parallax("50%", 0.1);
	$('.parallax7').parallax("50%", 0.1);
	$('.parallax8').parallax("50%", 0.1);
	/*add as necessary*/
}

// Window height/Width Getter Classes
wheighter = $(window).height();
wwidth = $(window).width();
$(".wheighter").css("height",wheighter);
$(".wwidth").css("width",wwidth);
$(window).resize(function(){
	wheighter = $(window).height();
	wwidth = $(window).width();
	$(".wheighter").css("height",wheighter);
	$(".wwidth").css("width",wwidth);
});
});