function verbtn(n) {
	
		
		/*---------------------------------------*/
		
		type = $(this).attr('data-type');
		
		$('#o'+n).fadeIn(function() {
			
			window.setTimeout(function(){
				$("#w"+n).addClass('window-container-visible');
			}, 100);
			
		});
		/*---------------------------------------*/
	
	$('#close'+n).click(function() {
		$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
	});
	
}
/*-----------------------------------------------------------------------*/