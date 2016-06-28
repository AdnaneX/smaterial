$(document).ready(function() {
	var $range = $('input[type="range"].sc-slider');

	// Add range inside div
	$range.each(function() {
		var $this = $(this),
			$slider = '<div class="sc-range">' + $this.getHTML() + '<div class="sc-range-track"><div class="sc-range-track-before"></div><div class="sc-range-track-after"></div></div></div>';
		// Add html after range slider
		$this.replaceWith( $slider );
	});

	//
	$('.sc-range .sc-slider').on('input', function() {
		var $this = $(this),
			$minVal = ( $this.attr('min') != undefined ? $this.attr('min') : 0 ),
			$maxVal = ( $this.attr('max') != undefined ? $this.attr('max') : 100 ),
			$percentage = ( $this.val() / ( $maxVal - $minVal ) ) * 100, // Calculate percentage
			$before = $this.closest('div').find('.sc-range-track-before'),
			$after = $this.closest('div').find('.sc-range-track-after');

		$before.css('width', $percentage+'%');
		$after.css('width', (100 - $percentage)+'%');
	}).trigger('change'); // Fake a change to position thumb at page load
});