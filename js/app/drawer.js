$(document).ready(function() {
	if( $('.sc-drawer').length >= 1 ) {
		var $drawer = $( '#sc-drawer' ),
			$dropdownButton = $drawer.find('.sc-drawer-dropdown'),
			$dropdown = $drawer.find('.sc-dropdown');

		$drawer.after('<div class="sc-drawer-background"></div>');

		if( $dropdownButton.length >= 1 && $dropdown.length >= 1 ) {
			if( $dropdownButton.length !== $dropdown.length ) {
				alert('There aren\'t as many dropdowns as dropdown buttons');
			}

			$drawer.find( '.sc-drawer-dropdown' ).each( function () {
				var $this = $( this ),
					$arrow = $this.find( '.material-icons'),
					$dropdown = $this.next('.sc-dropdown'),
					$height = $dropdown.css('height');

				if( $arrow !== undefined ) {
					if( $arrow.text() == 'expand_more' ) {
						$arrow.addClass( 'sc-arrow' );
					}
				}

				$this.click( function () {
					if( $this.hasClass( 'sc-expanded' ) && $dropdown.hasClass('sc-expanded')) {
						$this.removeClass( 'sc-expanded' );
						$dropdown.removeClass('sc-expanded').css('height', '0px');
					} else {
						$this.addClass( 'sc-expanded' );
						$dropdown.addClass('sc-expanded').css('height', $height);
					}
				} );

				if( !empty( $height ) ) {
					$dropdown.css('height', '0px');
				}
			} );

			// Automatically open dropdown
			$drawer.find( '.sc-active' ).parent('.sc-dropdown').prev('.sc-drawer-dropdown').trigger('click');
		}
	}
});