(function($){

	$(document).ready(apparition());
	
	
	$(window).scroll(function(){
		
		if( $(window).scrollTop() >= 350 ){
			$('#intro').fadeOut();
			$('#header').fadeIn(200);
		}
		
		
	});
	
	function apparition(){
		$("body").animate({'opacity' : '0'},0, function() {
    	$(this).css({'background-image' : 'url(../images/fond.png)'})
        .animate({'opacity' : '1'},1200);
		});
		$('#header').hide();
	}
	
})(jQuery);