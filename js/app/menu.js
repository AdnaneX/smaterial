$(document).ready(function() {
	if( $('.sc-menu').length >= 1 ) {
		var $menu = $( '.sc-menu' );

		$menu.each( function () {
			var $this = $( this ),
				// Store height and width
				$height = $this.css('height'),
				$width = $this.css('width');

			if( !empty( $height ) && !empty( $width ) ) {
				$this.css( {'max-height': 0, 'max-width': 0} );
			}

			$(document).on('expanded', function() {
				if( $this.hasClass( 'sc-expanded' ) ) {
					$this.css( {'max-height': $height, 'max-width': $width} );
				} else {
					$this.css( {'max-height': 0, 'max-width': 0} );
				}
			});

			$(document).on('collapsed', function() {
				if( $this.hasClass( 'sc-expanded' ) ) {
					$this.css( {'max-height': $height, 'max-width': $width} );
				} else {
					$this.css( {'max-height': 0, 'max-width': 0} );
				}
			});
		} );
	}

	if( $('select.sc-select').length >= 1 ) {
		var $select = $('select.sc-select'),
			$selectID = 0;

		$select.each(function() {
			$selectID++;
			var $this = $(this),
				$options = $this.find('option');

			//console.log($options[0].text);

			$html = '';
			for( var i = 0; i < $options.length; i++ ) {
				$html += '<a href="#">'+ $options[i].text +'</a>';
			}

			$this.before(
				'<div class="sc-select">' +
					'<span class="sc-select-current sc-trigger" data-sc-trigger="select-'+$selectID+'">' +
						$options[0].text +
						'<i class="material-icons">arrow_drop_down</i>' +
					'</span>' +
					'<nav class="sc-menu" id="select-'+$selectID+'">'+$html+'</nav>' +
				'</div>');
		});

		var	$selectD = $('div.sc-select');

		$selectD.each(function() {
			var $this = $(this),
				$current = $this.find('.sc-select-current'),
				$options = $this.find('.sc-menu a');

			console.log($current.text());
			$options.click(function() {
				$current.html( $(this).replace('arrow_drop_down', '') );
			});
		});
	}
});