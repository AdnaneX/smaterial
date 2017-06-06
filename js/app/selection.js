$(document).ready(function() {
	var $selection = $('.checkbox, .radio');

	$selection.each(function() {
		var $this = $(this),
			$id = $this.attr('id'),
			$lever = $this.closest('.switch').length;

		if( $lever == 0 ) {
			$this.after( '<label for="' + $id + '"></label>' );
		}
	});
});