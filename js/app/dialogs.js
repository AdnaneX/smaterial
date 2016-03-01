$(document).ready(function() {
	$('.sm-dialog-trigger').click(function(e) {
		e.preventDefault();
		var $this = $(this),
			$dialog = $('#'+$this.data('sm-trigger'));

		if( $dialog.visible() ) {
			$dialog.removeClass('active');
		} else {
			$dialog.addClass('active');

			var $height = $dialog.css('height'),
				$width = $dialog.css('width');

			$dialog.css({'height': $height, 'width': $width});
		}
	});

	$(document).mouseup(function (e) {
		var $dialog = $('.sm-dialog');

		if( $dialog.visible() ) {
			// if the target of the click isn't the $dialog nor a descendant of the $dialog
			if( !$dialog.is(e.target) && $dialog.has(e.target).length === 0 ) {
				$dialog.removeClass('active');
			}
		}
	});
});