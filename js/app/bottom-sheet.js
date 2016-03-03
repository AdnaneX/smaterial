$(document).ready(function() {
	$('.sm-bottom-trigger').click(function() {
		var $this = $(this),
			$trigger = $('#'+$this.data('sm-trigger'));

		if( $trigger.visible() ) {
			$trigger.slideUp();
		} else {
			$trigger.slideDown();
		}

		$(document).mouseup(function (e) {
			if( $trigger.visible() ) {
				// if the target of the click isn't the $trigger nor a descendant of the $trigger
				if( !$trigger.is(e.target) && $trigger.has(e.target).length === 0 ) {
					$trigger.slideDown();
				}
			}
		});
	});


});