$(document).ready(function() {
	// More menu trigger functions
	$('.sm-nav-more').click(function() {
		var $this = $(this),
			$more = $('#'+$this.data('sm-trigger'));

		if( $more.visible() ) {
	   		$more.slideUp();
		} else {
			$more.slideDown();
		}
	});

	$(document).mouseup(function (e) {
		var $more = $('.sm-appbar-menu-more');

		if( $more.visible() ) {
			// if the target of the click isn't the $more nor a descendant of the $more
			if( !$more.is(e.target) && $more.has(e.target).length === 0 ) {
				$more.slideUp();
			}
		}
	});

	// Search trigger functions
	$('.sm-search-trigger').click(function() {
		$('.sm-')
	});
});