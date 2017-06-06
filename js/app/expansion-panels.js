$(document).ready(function() {
	var $expansionPanel = $('.expansion-panel');

	$expansionPanel.each(function() {
		var $this = $(this),
			$li = $this.find('li');

		// Add arrow
		$li.each(function() {
			var $this = $(this),
				$content = $this.find('.expansion-panel-header').html();

			$this.find('.expansion-panel-header').html($content + '<span class="expand-icon"><i class="material-icons">expand_more</i></span>');

			var $expand = $this.find('.expand-icon');
			$expand.click(function() {
				if( $this.hasClass('expanded') ) {
					$this.removeClass('expanded');
				} else {
					$this.addClass('expanded');
				}
			});
		});
	});
});