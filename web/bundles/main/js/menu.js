// JavaScript Document
jQuery(document).ready(function($){
	$(window).resize(function(){
		$('#container').css('right', '35%');
	});
	$(window).trigger('resize');
	$('body').on('click','.navTrigger',function(){
		responsiveMenu();
	});
});

function responsiveMenu()
{
	if($('.navTrigger').hasClass('opened'))
	{
		$('.navTrigger').addClass('closed').removeClass('opened');
		$('#container').stop(true,true).animate({
			right: "0%",
		})
	}
	else
	{
		$('.navTrigger').addClass('opened').removeClass('closed');
		$('#container').stop(true,true).animate({
			right: "+35%",
		})
	}
}