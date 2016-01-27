/**
 * Slide an element horizontal
 * @return type description
 */
$.fn.slideHorizontal = function() {
	$(this).animate({width: 'toggle'});
	return $(this);
};

/**
 * Rotate a element
 * @param  int $degrees How many degrees to rotate
 * @param  int $ms      The time in which to rotate
 * @return type         description
 */
$.fn.rotate = function( $degrees, $ms ) {
	$(this).css({'-webkit-transform': 'rotate('+ $degrees +'deg)',
		'-webkit-transition-duration': $ms + 'ms',
		'-moz-transform': 'rotate('+ $degrees +'deg)',
		'-moz-transition-duration': $ms + 'ms',
		'-ms-transform': 'rotate('+ $degrees +'deg)',
		'-ms-transition-duration': $ms + 'ms',
		'transform': 'rotate('+ $degrees +'deg)',
		'transition-duration': $ms + 'ms'});
	return $(this);
};

/**
 * Check if element is visible
 * @param  string $e Element
 * @return bool    True or false depending if the element is visible
 */
function visible( $e ) {
	if( $e.is(':visible') ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Check if something is empty
 * @param  string $value Input
 * @return bool        True or false depending if empty or not
 */
function empty( $value ) {
	if( $value.trim( $value.value ).length === 0) {
		return true;
	} else {
		return false;
	}
}