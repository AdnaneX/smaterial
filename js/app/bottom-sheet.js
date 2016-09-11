$(document).ready(function() {
	$('.sc-bottom-trigger').on('click', function() {
		var $this = $(this),
			$trigger = $('#'+$this.data('sc-trigger')),
			$drawer = $('.sc-drawer');

		if( $drawer !== undefined && $drawer.hasClass('sc-expanded') ) {
			$drawer.removeClass('sc-expanded');
		}

		if( $trigger.hasClass('sc-expanded') ) {
			$trigger.removeClass('sc-expanded');
		} else {
			$trigger.addClass('sc-expanded');
		}
	});

	/*$(document).mouseup(function(e) {
		if( $trigger.hasClass('sc-expanded') ) {
			// if the target of the click isn't the $trigger nor a descendant of the $trigger
			if( !$trigger.is(e.target) && $trigger.has(e.target).length === 0 ) {
				$trigger.removeClass('sc-expanded');
			}
		}
	});*/
});