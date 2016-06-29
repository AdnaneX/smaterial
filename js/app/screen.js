var $screen,
	$screenWidth = window.width;

if( $screenWidth >= 1600 ) {
	$screen = 'xl';
} else if( $screenWidth >= 1280 ) {
	$screen = 'l';
} else if( $screenWidth >= 960 ) {
	$screen = 'm';
} else if( $screenWidth >= 480 ) {
	$screen = 's';
} else if( $screenWidth < 480 ) {
	$screen = 'xs';
}