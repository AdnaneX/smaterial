$(document).ready(function() {
	var $range = $('input[type="range"].sc-slider');

	$range.each(function() {
		var $this = $(this),
			$slider = '<div class="sc-range">' + $this.getHTML() + '<div class="sc-range-track"><div class="sc-range-track-before"></div><div class="sc-range-track-after"></div></div></div>',
			$before = $( '.sc-range-track-before' ),
			$after = $( '.sc-range-track-after' ),
			$thumb = $('.sc-range .sc-slider'),
			$minVal = $thumb.attr('min'),
			$maxVal = $thumb.attr('max');
		// Add html after range slider
		$this.replaceWith( $slider );

		//
		$thumb.on('input', function() {
			var $val = $(this).val();

			console.log($val);
		});
	});
});