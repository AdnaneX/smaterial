$(document).ready(function() {
	// More menu trigger functions
	$('.sc-nav-more').click(function() {
		var $this = $(this),
			$more = $('#'+$this.data('sc-trigger'));

		if( $more.visible() ) {
	   		$more.slideUp();
		} else {
			$more.slideDown();
		}
	});

	$(document).mouseup(function (e) {
		var $more = $('.sc-appbar-menu-more');

		if( $more.visible() ) {
			// if the target of the click isn't the $more nor a descendant of the $more
			if( !$more.is(e.target) && $more.has(e.target).length === 0 ) {
				$more.slideUp();
			}
		}
	});

	// Search trigger functions

});