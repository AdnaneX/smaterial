$(document).ready(function() {
	$('.sm-chip-delete').click(function() {
		$(this).closest('.sm-chip').remove();
	});
});