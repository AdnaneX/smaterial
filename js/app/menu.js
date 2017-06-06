$(document).ready(function() {
	if( $('.menu').length >= 1 ) {
		var $menu = $( '.menu' );

		$menu.each( function () {
			var $this = $( this ),
				// Store height and width
				$height = $this.css('height'),
				$width = $this.css('width');

			if( !empty( $height ) && !empty( $width ) ) {
				$this.css( {'max-height': 0, 'max-width': 0} );
			}

			$(document).on('expanded', function() {
				if( $this.hasClass( 'expanded' ) ) {
					$this.css( {'max-height': $height, 'max-width': $width} );
				} else {
					$this.css( {'max-height': 0, 'max-width': 0} );
				}
			});

			$(document).on('collapsed', function() {
				if( $this.hasClass( 'expanded' ) ) {
					$this.css( {'max-height': $height, 'max-width': $width} );
				} else {
					$this.css( {'max-height': 0, 'max-width': 0} );
				}
			});
		} );
	}

	if( $('select.select').length >= 1 ) {
		var $select = $('select.select'),
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
				'<div class="select">' +
				'<span class="select-current trigger" data-trigger="select-'+$selectID+'">' +
				$options[0].text +
				'</span>' +
				'<i class="material-icons trigger" data-trigger="select-'+$selectID+'">arrow_drop_down</i>' +
				'<nav class="menu" id="select-'+$selectID+'">'+$html+'</nav>' +
				'</div>');
		});

		var	$selectD = $('div.select');

		$selectD.each(function() {
			var $select = $(this),
				$current = $select.find('.select-current'),
				$options = $select.find('.menu a'),
				$active = undefined;

			$options.on('click', function() {
				var $this = $(this),
					$index = $this.index(),
					$selected = $this.closest('div.select').next('select.select');

				// Set item to active
				$this.addClass('active');
				if( $active != undefined ) {
					if( $this != $active ) {
						$active.removeClass( 'active' );
					}
				}
				$active = $this;

				// Set text of select-current
				$current.text($this.text());

				// Set value of select.select
				$selected.val($selected.find('option').eq($index).val());

				// Close select
				$select.find('.menu').removeClass('expanded');
			});
		});
	}
});