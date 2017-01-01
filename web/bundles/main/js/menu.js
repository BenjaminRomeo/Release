// JavaScript Document
jQuery(document).ready(function($){
	$(window).resize(function(){
		
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
		$('#container').css('right', '-35%');
	}
	else
	{
		$('.navTrigger').addClass('opened').removeClass('closed');
		$('#container').css('right', '0%');
	}
}