jQuery(document).ready(function($){
	var height;
	var end = 0;
	var debugEvent = 1;
	$(window).resize(function(){
		height = $('body').width();
		$('.lineObl').css({'left':(height/2)-300});
		if(end)
		{
			$('.lineUp, .lineDown').css({'width':(height/2)-100});
		}
    });

	$(window).trigger('resize');
	$('.lineUp').animate({'width':(height/2)-100}, 200, "linear").queue(function(){
		$('.lineObl').animate({'height':145}, 100, "linear").queue(function(){
			$('.lineDown').animate({'width':(height/2)-100}, 200, "linear").queue(function(){
				end=1;
			});
		});
	});

	 $('select').material_select();
});



