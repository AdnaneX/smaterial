$(document).ready(function() {
	$('.sm-hover-ripple').hover(function() {
		var $this = $(this),
			$content = $this.html(),
			$height = Math.ceil(parseInt($this.css('height').replace('px', ''))),
			$width = Math.ceil(parseInt($this.css('width').replace('px', ''))),
			$padding_top = Math.ceil(parseInt($this.css('padding-top').replace('px', ''))),
			$padding_left = Math.ceil(parseInt($this.css('padding-left').replace('px', ''))),
			$padding_bottom = Math.ceil(parseInt($this.css('padding-bottom').replace('px', ''))),
			$padding_right = Math.ceil(parseInt($this.css('padding-right').replace('px', '')));

		$this.html('<div class="sm-circle-hover" style="height:'+ $height +'px; width: '+ $width +'px; margin: -'+ $padding_top +'px -'+ $padding_right +'px -'+ $padding_bottom +'px -'+ $padding_left +'px">'+ $content +'</div>');
	},
	function() {
		var $this = $(this),
			$content = $this.find('.sm-circle-hover').html();

		$this.html($content);
		$this.find('.sm-circle-hover').remove();
	});
});