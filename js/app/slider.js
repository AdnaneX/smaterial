$(document).ready(function() {
	var $range = $('input[type="range"].slider');

	// Add range inside div
	$range.each(function() {
		var $this = $(this),
			$slider;

		if( $this.hasClass('slider-discrete') ) {
			$slider = '<div class="range"><div class="slider-bubble"></div>' + $this.getHTML() + '<div class="range-track"><div class="range-track-before"></div><div class="range-track-after"></div></div></div>';
		} else {
			$slider = '<div class="range">' + $this.getHTML() + '<div class="range-track"><div class="range-track-before"></div><div class="range-track-after"></div></div></div>';
		}
		// Add html after range slider
		$this.replaceWith( $slider );
	});

	// Calculate
	$range = $('.range .slider');
	$range.on('input', function() {
		var $this = $(this),
			$minVal = ( $this.attr('min') != undefined ? $this.attr('min') : 0 ),
			$maxVal = ( $this.attr('max') != undefined ? $this.attr('max') : 100 ),
			$percentage = ( $this.val() / ( $maxVal - $minVal ) ) * 100, // Calculate percentage
			$before = $this.closest('div').find('.range-track-before'),
			$after = $this.closest('div').find('.range-track-after');

		$before.css('width', $percentage+'%');
		$after.css('width', (100 - $percentage)+'%');

		// If range slider is discrete add value in bubble
		if( $this.hasClass('slider-discrete') ) {
			var $bubble = $this.parent('div').find('.slider-bubble');
			// Set value in bubble
			$bubble.text($this.val());
			$bubble.css('left', $percentage+'%');

			// If thumb is over 0%
			if( $percentage > 0 ) {
				$bubble.addClass('not-null');
			} else {
				$bubble.removeClass('not-null');
			}
		}

		// If thumb is over 0%
		if( $percentage > 0 ) {
			$this.addClass('not-null');
		} else {
			$this.removeClass('not-null');
		}

		// If slider is disabled
		if( $this.hasClass('disabled') || $this.attr('disabled') == 'disabled' ) {
			$this.parent('div').addClass('disabled');
		}
	});
	$range.trigger('input');
});