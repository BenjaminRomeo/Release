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

	
	$('.teamContainer').on( "mousemove", function( event ) {
		$(this).css({'background-position-x': 2*($('body').width()-event.pageX)/100});
	});

	$('.machinist').hover(function(){
		$('.classContainer').addClass('machinistBack').show();
		$('.lineUp, .lineObl, .lineDown').addClass('mchLine');
		$('.teamText').addClass('mchText');

		$('.classContainer').stop(true,true).animate({'opacity':1}, 500).queue(function(){
			
		});
	},function(){
		$('.lineUp, .lineObl, .lineDown').removeClass('mchLine');
		$('.teamText').removeClass('mchText');

		$('.classContainer').stop(true,true).animate({'opacity':0}, 500, "linear").queue(function(){
			$(this).hide().removeClass('machinistBack');
		});
	});
});



