$(document).ready(function() {
	if( $('.bottom-sheet').length >= 1 ) {
		var $bottomSheet = $('.bottom-sheet');

		$bottomSheet.after('<div class="bottom-sheet-background"></div>');
	}
});