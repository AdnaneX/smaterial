$(document).ready(function() {
	$('.sc-bottom-trigger').click(function() {
		var $this = $(this),
			$trigger = $('#'+$this.data('sc-trigger'));

		if( $trigger.visible() ) {
			$trigger.hide();
		} else {
			$trigger.show();
		}

		$(document).mouseup(function (e) {
			if( $trigger.visible() ) {
				// if the target of the click isn't the $trigger nor a descendant of the $trigger
				if( !$trigger.is(e.target) && $trigger.has(e.target).length === 0 ) {
					$trigger.hide();
				}
			}
		});
	});
});