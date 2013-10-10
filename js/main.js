(function($){

	$("#nav-toggle").bind( 'click', function (e) {
		e.preventDefault();

		var toggle = $(this).attr('class');

		if(toggle == "nav-closed"){
			$(this).removeClass().addClass('nav-active');
			$('.outer-wrap').css('margin-left', '81%');
		} else {
			$(this).removeClass().addClass('nav-closed');
			$('.outer-wrap').css('margin-left', '0');
		}
	});

})(jQuery);