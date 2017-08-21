$(document).ready(function() {
	var $input = $('.input input'),
		$textarea = $('.textarea textarea');

	// If page is loaded and input has a value
	$input.each(function() {
		var $this = $(this),
			$value = $this.val(),
			$label = $this.parent('div').find('label');

		if( !empty($value) ) {
			$label.addClass('active');
		} else {
			$label.removeClass('active');
		}
	});

	/*$input.click(function() {
		$(this).parent('div').find('label').addClass('active');
	});*/

	$('.input').append('<div class="expander"></div>');

	// When typing
	$input.change(function() {
		var $this = $(this),
			$value = $this.val(),
			$label = $this.parent('div').find('label');

		if( !empty($value) ) {
			$label.addClass('active');
		} else {
			$label.removeClass('active');
		}
	});

	// Fix bug that text field isn't selected when label is clicked
	$('.input label').click(function() {
		var $this = $(this),
			$id = $this.attr('for');

		/*$this.addClass('active');*/

		if( $id != undefined ) {
			if( $( '#' + $id ).is( ':checkbox, :radio' ) ) {
				return;
			}

			$( '#' + $id ).trigger( 'click' );
			/*if( $( '#' + $id ).attr('input') == 'checkbox' || $( '#' + $id ).attr('input') == 'radio' ) {
				return;
			} else {
				$( '#' + $id ).trigger( 'click' );
			}*/
		}
	});

	// Text area hover
	$textarea.hover(
		function() {
			$(this).parent('.textarea').addClass('hover');
		},
		function() {
			$(this).parent('.textarea').removeClass('hover');
		}
	);

	// Text area active
	$textarea.click(function() {
		var $this = $(this).parent('.textarea');
		$this.addClass('active');

		$(document).mouseup(function (e) {
			if(! $( e.target ).closest($this).length ) {
				$this.removeClass('active');
			}
		});
	});

	// Display default JS error messages below the field
	var createAllErrors = function() {
		var form = $( this );

		var showAllErrorMessages = function() {

			// Find all invalid fields within the form.
			var invalidFields = form.find( ":invalid" ).each( function( index, node ) {
				 var $this = $(this), // Select input
					 $parent = $this.closest('.input, .textarea'),
				 	 $helper = $parent.find('.helper-text');

				 // Give parent error class
				$parent.addClass('invalid');

				// Find the field's corresponding label
				var message = node.validationMessage || 'Invalid value.';

				console.log($helper.length);

				if( $helper.length ) {
					// Clear text
					$helper.html('');
					$helper.html('<i class="material-icons">error_outline</i>' + message);
				} else {
					$parent.append('<div class="helper-text"><i class="material-icons">error_outline</i>' + message + '</div>');
				}
			});
		};

		// Support Safari
		form.on( "submit", function( event ) {
			if ( this.checkValidity && !this.checkValidity() ) {
				$( this ).find( ":invalid" ).first().focus();
				event.preventDefault();
			}
		});

		$( "input[type=submit], button:not([type=button])", form ).on( "click", showAllErrorMessages);

		$( "input, textarea", form ).on( "keypress", function( event ) {
			var type = $( this ).attr( "type" );
			if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
				&& event.keyCode == 13 ) {
				showAllErrorMessages();
			}
		});
	};

	$( "form" ).each( createAllErrors );

	// Add date-picker
	$(function() {
		$('.input.date-picker input').datepicker();
	});

	$('.input.date-picker input').click(function() {
		// Remove span
		$('.ui-datepicker-prev, .ui-datepicker-next').find('span').remove();

		// Add material design icons
		$('.ui-datepicker-prev').html('<i class="material-icons">chevron_left</i>');
		$('.ui-datepicker-next').html('<i class="material-icons">chevron_right</i>');
	});
});