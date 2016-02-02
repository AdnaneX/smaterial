$(document).ready(function() {
	var $sidenav = $('#sm-sidenav');

	$sidenav.find('li.sm-sidenav-dropdown').each(function() {
		var $this = $(this),
			$ul = $this.find('ul'),
			$arrow = $this.find('.material-icons');

		if( $arrow !== undefined ) {
			$arrow.addClass('sm-arrow');
		}

		// Hide ul element
		$ul.hide();

		$this.click(function() {
			if( $ul.visible() ) {
				$ul.slideUp('swing');

				if( $arrow !== undefined ) {
					$arrow.rotate(0, 400, 'ease-in-out');
				}
			} else {
				$ul.slideDown('swing');

				if( $arrow !== undefined ) {
					$arrow.rotate(180, 400, 'ease-in-out');
				}
			}
		});
	});

	$('#sm-nav-button').click(function() {
		var $trigger = $(this).data('sm-trigger');

		$('#' + $trigger).slideHorizontal();
	});
});