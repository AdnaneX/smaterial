$(document).ready(function() {
	$('.sm-toggle-button').each(function() {
		var $this = $(this),
			$icon = $this.data('sm-toggle-icon');

		$this.hide().after('<div class="sm-toggle-button"><i class="material-icons">' + $icon + '</i></div>');

		$this.click(function() {
			$this.toggleClass('checked').prev().prop('checked', $(this).is('.checked'))
		});
	});
});