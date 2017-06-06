$(document).ready(function() {
	if($('.chip-delete').length >= 1 ) {
		$( '.chip-delete' ).click( function () {
			$( this ).closest( '.chip' ).remove();
		} );
	}
});