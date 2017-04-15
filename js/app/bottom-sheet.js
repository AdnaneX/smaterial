$(document).ready(function() {
	if( $('.sc-bottom-sheet').length >= 1 ) {
		var $bottomSheet = $('.sc-bottom-sheet');

		$bottomSheet.after('<div class="sc-bottom-sheet-background"></div>');
	}
});