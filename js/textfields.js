$(document).ready(function() {
	var $input = $('input, textarea');

	// If page is loaded and input has a value
	$input.each(function() {
		var $this = $(this),
			$value = $this.val(),
			$label = $this.parent('div').find('label');

		if( $value != '' ) {
			$label.addClass('sm-active');
		} else {
			$label.removeClass('sm-active');
		}
	});

	// When typing
	$input.keyup(function() {
		var $this = $(this),
			$value = $this.val(),
			$label = $this.parent('div').find('label');

		console.log($label);

		if( $value != '' ) {
			$label.addClass('sm-active');
		} else {
			$label.removeClass('sm-active');
		}
	});
});