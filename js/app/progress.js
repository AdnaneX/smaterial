$(document).ready(function(){
	var $circle = $('.circular'),
		$indeterminate = $('.indeterminate');

	$circle.each(function() {
		$(this).html('<svg viewBox="25 25 50 50"><circle cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"/></svg>');
	});

	$indeterminate.each(function() {
		$(this).html('<div class="progressbar"></div>');
	});
});