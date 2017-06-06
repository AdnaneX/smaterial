$(document).ready(function() {
	if( $('.drawer').length >= 1 ) {
		var $drawer = $( '#drawer' ),
			$dropdownButton = $drawer.find('.drawer-dropdown'),
			$dropdown = $drawer.find('.dropdown');

		$drawer.after('<div class="drawer-background"></div>');

		if( $dropdownButton.length >= 1 && $dropdown.length >= 1 ) {
			if( $dropdownButton.length !== $dropdown.length ) {
				alert('There aren\'t as many dropdowns as dropdown buttons');
			}

			$drawer.find( '.drawer-dropdown' ).each( function () {
				var $this = $( this ),
					$arrow = $this.find( '.material-icons'),
					$dropdown = $this.next('.dropdown'),
					$height = $dropdown.css('height');

				if( $arrow !== undefined ) {
					if( $arrow.text() == 'expand_more' ) {
						$arrow.addClass( 'arrow' );
					}
				}

				$this.click( function () {
					if( $this.hasClass( 'expanded' ) && $dropdown.hasClass('expanded')) {
						$this.removeClass( 'expanded' );
						$dropdown.removeClass('expanded').css('height', '0px');
					} else {
						$this.addClass( 'expanded' );
						$dropdown.addClass('expanded').css('height', $height);
					}
				} );

				if( !empty( $height ) ) {
					$dropdown.css('height', '0px');
				}
			} );

			// Automatically open dropdown
			$drawer.find( '.active' ).parent('.dropdown').prev('.drawer-dropdown').trigger('click');
		}
	}
});