function selectNav( select ){
	window.location = select.options[select.selectedIndex].id;
}

(function($){

	$("#nav-toggle").bind( 'click', function () {
		var toggle = $(this).attr('class');

		if(toggle == "nav-closed"){
			$(this).removeClass().addClass('nav-active');
			$('.outer-wrap').css('margin-left', '81%');

			setTimeout( function () {
				$("#home nav").css({
					opacity : '1',
					margin  : '0'
				});

				$("#home .logo").css({
					opacity : '1',
					margin  : '0 0 20px 0'
				});
			}, 200);
		} else {
			$(this).removeClass().addClass('nav-closed');
			$('.outer-wrap').css('margin-left', '0');

			setTimeout( function(){
				$("#home nav").css({
					opacity : '0',
					margin  : '0 0 0 -20%'
				});

				$("#home .logo").css({
					opacity : '0',
					margin  : '0 0 20px 20%'
				});
			}, 200);
		}
	});

	$('#search-show').bind( 'click', function () {
		//console.log('boom baby');

		var toggle = $(this).attr('class');

		if(toggle == "search-closed"){
			$(this).removeClass().addClass('search-active');
			$('.outer-wrap').css('margin-top', '40px');
		} else {
			$(this).removeClass().addClass('search-closed');
			$('.outer-wrap').css('margin-top', '0');
		}
	});

})(jQuery);