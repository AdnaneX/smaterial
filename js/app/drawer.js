$(document).ready(function() {
	var $drawer = $('#sc-drawer');

	$drawer.find('li.sc-drawer-dropdown').each(function() {
		var $this = $(this),
			$ul = $this.find('ul'),
			$arrow = $this.find('.material-icons');

		if( $arrow !== undefined ) {
			$arrow.addClass('sc-arrow');
		}

		$this.click(function() {
			if( $this.hasClass('sc-expanded') ) {
				$this.removeClass('sc-expanded');
			} else {
				$this.addClass('sc-expanded');
			}
		});
	});

	$('#sc-nav-button').click(function() {
		var $trigger = $(this).data('sc-trigger'),
			$drawer = $('#' + $trigger);

		if( $drawer.hasClass('sc-expanded') ) {
			$drawer.removeClass('sc-expanded');
		} else {
			$drawer.addClass('sc-expanded');
		}
	});

	$drawer.find('.sc-active').closest('ul').closest('li').addClass('sc-expanded');
});