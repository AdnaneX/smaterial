$(document).ready(function() {
	if( $('.dialog').length >= 1 ) {
		var $dialog = $('.dialog');

		$dialog.after('<div class="dialog-background"></div>');
	}
});