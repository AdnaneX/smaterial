$(document).ready(function() {
	// More menu trigger functions
	$('.sc-nav-more').click(function() {
		var $this = $(this),
			$more = $('#'+$this.data('sc-trigger'));

		if( $more.hasClass('sc-expanded') ) {
	   		$more.removeClass('sc-expanded');
		} else {
			$more.addClass('sc-expanded');
		}
	});

	$(document).mouseup(function (e) {
		var $more = $('.sc-appbar-menu-more');

		if( $more.visible() ) {
			// if the target of the click isn't the $more nor a descendant of the $more
			if( !$more.is(e.target) && $more.has(e.target).length === 0 ) {
				$more.removeClass('sc-expanded');
			}
		}
	});


});
// Search trigger functions
var $searchTrigger = document.getElementsByClassName('sc-search-trigger'),
	$searchBox = document.getElementsByClassName('sc-search-input');

$searchTrigger.onclick = function() {
	$searchBox.style.display = 'block';
}

var $appbar = $('.sc-appbar');
