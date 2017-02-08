$(document).ready(function() {
	if( $('.sc-drawer').length >= 1 ) {
		var $drawer = $( '#sc-drawer' ),
			$dropdownButton = $drawer.find('.sc-drawer-dropdown'),
			$dropdown = $drawer.find('.sc-dropdown');

		if( $dropdownButton.length >= 1 && $dropdown.length >= 1 ) {
			if( $dropdownButton.length !== $dropdown.length ) {
				alert('There aren\'t as many dropdowns as dropdown buttons');
			}

			$drawer.find( '.sc-drawer-dropdown' ).each( function () {
				var $this = $( this ),
					$arrow = $this.find( '.material-icons'),
					$dropdown = $this.next('.sc-dropdown'),
					$height = $dropdown.css('height');
				console.log($height);

				if( $arrow !== undefined ) {
					if( $arrow.text() == 'expand_more' ) {
						$arrow.addClass( 'sc-arrow' );
					}
				}

				$this.click( function () {
					if( $this.hasClass( 'sc-expanded' ) && $dropdown.hasClass('sc-expanded')) {
						$this.removeClass( 'sc-expanded' );
						$dropdown.removeClass('sc-expanded').css('max-height', '0px');
					} else {
						$this.addClass( 'sc-expanded' );
						$dropdown.addClass('sc-expanded').css('max-height', $height);
					}
				} );

				if( !empty( $height ) ) {
					$dropdown.css('max-height', '0px');
				}
			} );

			$drawer.find( '.sc-active' ).closest( 'ul' ).closest( 'li' ).addClass( 'sc-expanded' );
		}
	}
});