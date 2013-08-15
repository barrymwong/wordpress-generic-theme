$(function() {
	function doRevealSide(that, action) {
		var $this  = $(that);
		
		if(action === 'over') {
			$this.find('.post-side').removeClass('off').addClass('on');
			$this.find('.post').addClass('on');
		} else if (action === 'out') {
			$this.find('.post-side').removeClass('on').addClass('off');
			$this.find('.post').removeClass('on')
		}
	}

	
	
	
	$('.row').mouseover( function() {
		doRevealSide(this, 'over');
	});
	
	$('.row').mouseout( function() {
		doRevealSide(this, 'out');
	});
});