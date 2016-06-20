$(document).ready(function() {
	var $sidenav = $('#sc-sidenav');

	$sidenav.find('li.sc-sidenav-dropdown').each(function() {
		var $this = $(this),
			$ul = $this.find('ul'),
			$arrow = $this.find('.material-icons');

		if( $arrow !== undefined ) {
			$arrow.addClass('sc-arrow');
		}

		// Hide ul element
		$ul.hide();

		$this.click(function() {
			if( $ul.visible() ) {
				$ul.animate({transition: 'cubic-bezier(0.4, 0.0, 0.2, 1)',height: 'toggle'}, 300);

				if( $arrow !== undefined ) {
					$arrow.rotate(0, 300, 'cubic-bezier(0.4, 0.0, 0.2, 1)');
				}
			} else {
				$ul.animate({transition: 'cubic-bezier(0.4, 0.0, 0.2, 1)',height: 'toggle'}, 300);

				if( $arrow !== undefined ) {
					$arrow.rotate(180, 300, 'cubic-bezier(0.4, 0.0, 0.2, 1)');
				}
			}
		});
	});

	$('#sc-nav-button').click(function() {
		var $trigger = $(this).data('sc-trigger');

		$('#' + $trigger).slideHorizontal('cubic-bezier(0.4, 0.0, 0.2, 1)', 300);
	});

	$sidenav.find('.sc-active').closest('ul').show();
});