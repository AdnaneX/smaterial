$(document).ready(function() {
	var $trigger = $('.trigger'),
		$triggered = undefined;

	$trigger.click(function() {
		var $this = $(this),
			$element = $('#'+$this.data('trigger'));

		$triggered = $element;

		if( $element.hasClass('expanded') ) {
			$element.removeClass('expanded');
			$(document).trigger('collapsed');
		} else {
			$element.addClass('expanded');
			$(document).trigger('expanded');
		}
	});

	$(document).mouseup(function (e) {
		if( $triggered !== undefined ) {
			if( $triggered.visible() ) {
				// if the target of the click isn't the $triggered nor a descendant of the $triggered
				if( !$triggered.is( e.target ) && $triggered.has( e.target ).length === 0 ) {
					$triggered.removeClass( 'expanded' );
					$(document).trigger('collapsed');
				}
			}
		}
	});

	// Add element behind title in appbar to place other elements at the end
	$('.appbar-title').after('<div class="appbar-spacer"></div>');
});
