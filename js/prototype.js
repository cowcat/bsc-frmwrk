$(document).ready(function() {

	// Toggles expand/collapse nav elements
	$('.toggle').click(function() {
		if ($(this).hasClass('open')) {
			$(this).addClass('closed').removeClass('open');
			$(this).next().animate({opacity:0}, 0);
			$(this).next().toggle();
		} else {
			$(this).addClass('open').removeClass('closed');
			$(this).next().animate({opacity:1}, 200);
			$(this).next().toggle();
		}
	});

	$('#tablet-switch').click(function() {
		$('.container').css("max-width", "560px");
	});

	$('#mobile-switch').click(function() {
		$('.container').css("max-width", "280px");
	});

	// Begin Chosen options
	$('.chosen-select').chosen();

});