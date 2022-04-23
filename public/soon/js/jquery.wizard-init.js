$(function(){
	"use strict";
	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "article",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            finish: "Go Live",
            next: "Next",
            previous: "Back"
        }
    });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
	$('.wizard > .actions li:last-child > a').click(function(){
		$('.auto-popup').css("display", "none");
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    });
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    });
});
