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
		var $trigger = $(this).data('sc-trigger');

		$('#' + $trigger).slideHorizontal('cubic-bezier(0.4, 0.0, 0.2, 1)', 300);
	});

	$drawer.find('.sc-active').closest('ul').show();
});