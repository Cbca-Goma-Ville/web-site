//-----window.load start here

// Animate loader off screen
$(window).on('load', function () {
	"use strict";
    /*$(".se-pre-con").fadeOut("slow");*/
	$('#page-loader').addClass('hidden');
	
//animated svg icons
	var settings = $.extend({
			type: 'oneByOne',
			start: 'inViewport',
			dashGap: 10,
			duration: 20
		}, 'body' );

	$('svg.feather' ).each(function() {
		var iconID = $(this).attr('id');
		if(iconID != undefined){
			var iconVar = iconID.replace( '-', '' );
			window['tc'+iconVar] = new Vivus( iconID, settings );
		}
	});
	//svg mouse hover animation  
	$(document).delegate( "ai-icon", "mouseenter", function() {
		var iconID = $(this).find('svg').attr('id');
		if(!iconID) return false;
		var iconVar = iconID.replace( '-', '' );
		window['tc'+iconVar].reset().play();
	});	

});//---window.load end here


//---- document ready start here--
jQuery(document).ready(function($) {
	
	"use strict";

// select gender on pitpoint page	
	$('.starting-ask').click( function() {
		$(this).addClass('selected').siblings().removeClass('selected');
	  });	

//--- emojies 
if ($.isFunction($.fn.emojioneArea)) {	
	$("#emojionearea1").emojioneArea({
		pickerPosition: "bottom",
		tonesStyle: "bullet"
	  });
	
	$("#emojionearea2").emojioneArea({
		pickerPosition: "top",
		tonesStyle: "bullet"
	  });
}
	
// date and time picker 
if ($.isFunction($.fn.datetimepicker)) {		
	$('#datetimepicker_mask').datetimepicker({
		mask:'9999/19/39 29:59',
	});
	$('#datetimepicker').datetimepicker();
	$('#datetimepicker').datetimepicker({value:'Schedule Post'});
}
	
//--- drag and drop files
if ($.isFunction($.fn.dropzone)) {
	$("#drop").dropzone({ url: "/file/post" });
}
	
//----- popup display on window load	
	function delay(){
		$(".auto-popup").fadeIn();
	}
	window.setTimeout( delay, 3000 );

	$('.canceled').on('click', function() {
	  $('.auto-popup').addClass('closed');
	  return false;
	});
	
// responsive menu dropdown		
	$(".menu-area").click(function () {
		$(".drop-menu").toggleClass("show");
	});	
	
// dark mode	
	$('.dark-mod').on('click', function () {
		$('body').toggleClass('nightview');
		return false;
	});

// delete notifications
	$('.notification-box > ul li > i.del').on("click", function(){
	    $(this).parent().slideUp();
		return false;
	});
	
// 	`New submit post box`
	$(".new-postbox").click(function () {
	    $(".postoverlay").fadeIn(500);
	});
	$(".postoverlay").not(".new-postbox").click(function() {
	    $(".postoverlay").fadeOut(500);
	});
	$("[type = submit]").click(function () {
	    var post = $("textarea").val();
	    $("<p class='post'>" + post + "</p>").appendTo("section");
	});	
	
// top menu list	
	$('.main-menu > span').on('click', function () {
		$('.nav-list').slideToggle(300);
	});
	
// top menu list	
	$('.send-mesg').on('click', function () {
		$('.popup-wraper').addClass('active');
		return false;
	});
	$('.popup-closed').on('click', function () {
		$('.popup-wraper').removeClass('active');
	});

// invite collegues popup	
	$('.invite, .invite-new').on('click', function () {
		$('.wraper-invite').addClass('active');
		return false;
	});
	$('.popup-closed').on('click', function () {
		$('.wraper-invite').removeClass('active');
	});	
	
// side slide messages and notifications	
	$('.mesg-notif').on('click', function () {
		$('.side-slide').addClass('active');
		return false;
	});
	$('.popup-closed').on('click', function () {
		$('.side-slide').removeClass('active');
	});
	
// search active on focus	
	$('.searches > form input').on('focus', function () {
		$('.searches > form').addClass('active');
		$('.recent-search').addClass('active');
	});
	$('.cancel-search').on('click', function () {
		$('.searches > form').removeClass('active');
		$('.recent-search').removeClass('active');
	});
	
// New Post Popup	
	$('.create').on('click', function () {
		$('.post-new-popup').addClass('active');
		return false;
	});
	$('.new-post > form input').on('focus', function () {
		$('.post-new-popup').addClass('active');
	});
	$('.popup-closed').on('click', function () {
		$('.post-new-popup').removeClass('active');
	});
	
// New Post Popup	
	$('.ask-qst').on('click', function () {
		$('.new-question-popup').addClass('active');
		return false;
	});
	$('.popup-closed').on('click', function () {
		$('.new-question-popup').removeClass('active');
	});
	
// Create New Room	
	$('.create-newroom').on('click', function () {
		$('.createroom-popup').addClass('active');
		return false;
	});
	$('.popup-closed').on('click', function () {
		$('.createroom-popup').removeClass('active');
	});
	
// follow widget	
	$('.sug-like').on('click', function () {
		$(this).toggleClass("active");
	});	
	
//--- bootstrap tooltip and popover	
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
		$('[data-toggle="popover"]').popover();
	});
	
 // share post popup //
	  $(".share-to").on("click", function(){
	     $(".share-wraper").addClass('active');
		  return false;
	  });

	  $('.close-btn').on("click",function(){
		  $(".share-wraper").removeClass('active');
	  });
	
// watch list unread
	$('.watchlist > li').on('click', function () {
		$(this).removeClass('unread');
		$(this).addClass('active').siblings().removeClass('active');
		return false;
	});
	
 // smiles for chat //
	  $(".add-smiles").on("click", function(){
	     $(".smiles-bunch").toggleClass('active');
		  return false;
	  });	

// slide message box singel 
	  $(".friend > a").on("click", function(){
	     $(".chat-card").addClass('show');
		  return false;
	  });

	  $('.close-mesage').on("click",function(){
		  $(".chat-card").removeClass('show');
	  });

// chat box //
	  $(".chat-btn").on("click", function(){
	     $(".chat-box").addClass('active');
		  return false;
	  });

	  $('.clozed').on("click",function(){
		  $(".chat-box").removeClass('active');
		  return false;
	  });

// share to friends	
	$('.share-options > ul > li a').on('click', function () {
		$(this).toggleClass('active');
	});
	$('li.friends').on('click', function () {
		$('.friends-to').slideToggle(300);
	});	

	$('li.socialz').on('click', function () {
		$('.social-media').slideToggle(300);
	});
	
// top menu list	
	$('.comment-to, .reply-coment').on('click', function () {
		$(this).siblings('.new-comment').slideToggle(300);
		return false;
	});
	
// add currency popup
	$('.add-currency').on('click', function () {
		$('.popup-add-card').addClass('active');
		return false;
	});	

	$('.card-poup-meta > ul > li').click( function() {
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.security > ul > li').click( function() {
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('.popup-closed').on('click', function () {
		$('.popup-add-card').removeClass('active');
	});
	
// light gallery
	if ($.isFunction($.fn.lightGallery)) {	
		$("#lightgallery").lightGallery(); 
	}
	
//----- sticky header
    if ($.isFunction($.fn.stickit)) {
        $('.menus, .responsive-header').stickit({scope: StickScope.Document});
    }	

//chosen select plugin
	if ($.isFunction($.fn.chosen)) {
		$("select").chosen();
	}
	
// Sticky Sidebar & header
	if($(window).width() < 981) {
		$(".sidebar").children().removeClass("stick-widget");
	}

// gif image play plugin
	if ($.isFunction($.fn.jqGifPreview)) {
		$(".gif").jqGifPreview();
	}
	
	if ($.isFunction($.fn.stick_in_parent)) {
		$('.stick-widget').stick_in_parent({
			parent: '#page-contents',
			offset_top: 93,
		});

		
		$('.stick').stick_in_parent({
		    parent: 'body',
            offset_top: 0,
		});
	}

// chat attachments
	$('.more-attachments').on('click', function () {
		$('.attach-options').toggleClass('active');
		$(this).toggleClass('active');
	});
		$('.closed').on('click', function () {
		$('.more-attachments, .attach-options').removeClass('active');
	});	
	
/*--- responsive top search  ---*/	
	$('.res-search > span').on("click", function() {
	    $(".restop-search").addClass("active");
	  });
	
	$('.hide-search').on("click", function() {
	    $(".restop-search").removeClass("active");
	  });
	
//for open and close button rotation
	$('#nav-icon3').on('click', function(){
		$(this).toggleClass('open');

	});

/*--- emojies show on text area ---*/	
	$('.emojie').on("click", function() {
	    $(".smiles-bunch").toggleClass("active");
	  });
	
// Responsive nav dropdowns
	$('li.menu-item-has-children > a').on('click', function () {
		$(this).parent().siblings().children('ul').slideUp();
		$(this).parent().siblings().removeClass('active');
		$(this).parent().children('ul').slideToggle();
		$(this).parent().toggleClass('active');
		return false;
	});
	

// side header slide
	
	 jQuery(document).on('click', '.sidemenu', function() {
		jQuery(".sidebar").addClass('hide');
	 });
	
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
		  $("nav.sidebar").addClass("padding");
		} else {
		  $("nav.sidebar").removeClass("padding");
		}
	  });
	
	$("body *").not('nav.sidebar li a').on("click", function() {
		$("nav.sidebar").removeClass('hide');
		$("nav.sidebar").removeClass('padding');
	 });


// auto typer typed	
if ($.isFunction($.fn.typed)) {
	$(".feature-meta > h3 span").typed({
		strings: ["Engineering", "Mathamatics", "Computer", "Science", "Climate"],
		loop: true,
		startDelay: 1e3,
		backDelay: 3e3,
		typeSpeed: 30
	});
}
	
//---- calander	
if ($.isFunction($.fn.jalendar)) { 
 $('#yourId').jalendar({
		customDay: '11/01/2015',
		color: '#577e9a', // Unlimited Colors
		color2: '#57c8bf', // Unlimited Colors
		lang: 'EN',
		sundayStart: true
	});
}
//-- progressbar circle widget	
if ($.isFunction($.fn.circleProgress)) {	
	$('[data-progress=tip]').each(function(){
		$(this).circleProgress({
		  size: $(this).width(),
		  startAngle: 4.7,
		  fill: {
			gradient: ["#088dcd", "#9eddfb"]
		  },
		  emptyFill: "rgba(0, 0, 0, .1)"
		});
  });

  setInterval(function(){
  $('[data-progress=tip]')
		.circleProgress('redraw');
	}, 3000);
}
	
//===== owl carousel  =====//
if ($.isFunction($.fn.owlCarousel)) {
	$('.suggested-caro').owlCarousel({
		items: 3,
		loop: true,
		margin: 30,
		autoplay: false,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,

				},
				1000:{
					items:3,
				}
			}

	});
			
// Featured area fade caro soundnik page
	$('.soundnik-featured').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		center:false,
		animateOut: 'fadeOut',
		animateIn: 'fadein',
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:1,

				},
				1000:{
					items:1,
				}
			}
	});
		
//books caro	
	$('.books-caro').owlCarousel({
		items: 5,
		loop: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		center:false,
		responsiveClass:true,
			responsive:{
				0:{
					items:2,
				},
				600:{
					items:4,

				},
				1000:{
					items:5,
				}
			}
	});
	
//Market Product caro	
	$('.market-categories').owlCarousel({
		items: 5,
		loop: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		center:false,
		responsiveClass:true,
			responsive:{
				0:{
					items:2,
				},
				600:{
					items:4,

				},
				1000:{
					items:5,
				}
			}
	});	
		
//Event categories	
	$('.event-browse').owlCarousel({
		items: 5,
		loop: true,
		margin: 30,
		autoplay: false,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		center:false,
		responsiveClass:true,
			responsive:{
				0:{
					items:2,
				},
				600:{
					items:4,

				},
				1000:{
					items:5,
				}
			}
	});	
		
//student testimonials	
	$('.student-review').owlCarousel({
		items: 3,
		loop: true,
		margin: 30,
		autoplay: false,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		center:false,
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,

				},
				1000:{
					items:3,
				}
			}
	});	
		
//-- page caro
	$('.page-caro').owlCarousel({
		items: 6,
		loop: true,
		margin: 0,
		autoplay: false,
		autoplayTimeout: 2500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots: false,
		responsiveClass:true,
			responsive:{
				0:{
					items:5,
				},
				600:{
					items:5,

				},
				1000:{
					items:6,
				}
			}

	});
	
//-- group carousel		
	$('.rec-grp-caro').owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: true,
		animateOut: 'fadeOut',
		animateIn: 'fadein',
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:1,

				},
				1000:{
					items:1,
				}
			}
	});
	
//-- welcome caro
	$('.welcome-caro').owlCarousel({
		items: 1,
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		animateOut: 'fadeOut',
		animateIn: 'fadein',
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:1,

				},
				1000:{
					items:1,
				}
			}
	});
//-- suggested caro		
	$('.sug-caro').owlCarousel({
		items: 1,
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		animateOut: 'fadeOut',
		animateIn: 'fadein',
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:1,

				},
				1000:{
					items:1,
				}
			}
	});
		
// chat rooms	
	$('.chat-rooms').owlCarousel({
		items: 4,
		loop: false,
		margin: 15,
		autoplay: false,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,

			},
			1000:{
				items:4,
			}
		}
	});

// videos caro	
	$('.videos-caro').owlCarousel({
		items: 3,
		loop: true,
		margin: 15,
		autoplay: false,
		video: true,
		lazyLoad: true,
		center: true,
		merge: true,
		videoWidth: true,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,

			},
			1000:{
				items:3,
			}
		}
	});

// sponsored caro	
	$('.sponsored-caro').owlCarousel({
		items: 2,
		loop: true,
		margin: 15,
		autoplay: false,
		video: true,
		lazyLoad: true,
		center: true,
		merge: true,
		videoWidth: true,
		autoplayTimeout: 4500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,

			},
			1000:{
				items:2,
			}
		}
	});

//Badges carousel on badges page
	$('.badge-caro').owlCarousel({
		items: 6,
		loop: true,
		margin: 30,
		autoplay: false,
		autoplayTimeout: 1500,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		center:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:3,
			},
			600:{
				items:4,

			},
			1000:{
				items:6,
			}
		}
	});	
		
}
		
// slick carousel for detail page
if ($.isFunction($.fn.slick)) {
	$('.slider-for-gold').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		slide: 'li',
		fade: false,
		asNavFor: '.slider-nav-gold'
	});

	$('.slider-nav-gold').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for-gold',
		dots: false,
		arrows: true,
		slide: 'li',
		vertical: true,
		centerMode: true,
		centerPadding: '0',
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				vertical: false,
				centerMode: true,
				dots: false,
				arrows: false
			}
		},
		{
			breakpoint: 641,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
				vertical: false,
				centerMode: true,
				dots: false,
				arrows: false
			}
		}
		]
	});
}
	
//------ scrollbar plugin
	if ($.isFunction($.fn.perfectScrollbar)) {
		$('.chatting-area, .message-header, .friend, .chat-list > ul, .commentbar .comments-area, .menu-slide').perfectScrollbar();
	}	
	
//parallax
    if ($.isFunction($.fn.scrolly)) {
        $('.parallax').scrolly({bgParallax: true});
    }
 
//----- count down timer		
	if ($.isFunction($.fn.downCount)) {
		$('.countdown').downCount({
			date: '11/6/2021 12:00:00',
			offset: +10
		});
	}
	
//counter for funfacts
	if ($.isFunction($.fn.counterUp)) {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	}
	
//live came
if ($(this).find('#my_camera').length) {	
	Webcam.set({
		width: 640,
		height: 400,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach( '#my_camera' );
}
	
// Skills feedback progress bar at course-detail page.
	
	var skills = {
	  ht: 78,
	  jq: 60,
	  sk: 45,
	  ph: 25,
	  il: 15,
	  in: 5
	};

	$.each(skills, function(key, value) {
	  var skillbar = $('.' + key);

	  skillbar.animate(
	  {
		width: value + "%"
	  },
	  3000,
	  function() {
		$(".speech-bubble").fadeIn();
	  }
	  );
	});
	

	
//image with comment sidebar of fancy box
	  $('[data-fancybox="cl-group"]').fancybox({
		baseClass: "fancybox-custom-layout",
		infobar: false,
		touch: {
		  vertical: false
		},
		buttons: ["close", "thumbs", "share"],
		animationEffect: "fade",
		transitionEffect: "fade",
		preventCaptionOverlap: false,
		idleTime: false,
		gutter: 0,
		// Customize caption area
		caption: function(instance) {
		  return '<h3>home</h3><p>interiors, exteriors, and the humans that inhabit them.</p><p><a href="https://unsplash.com/collections/curated/162" target="_blank">unsplash.com</a></p>';
		}
	  });
	  
// audio video player post	
new Plyr(".video-player"),
new Plyr(".audio-player")	  
	
});//document ready end