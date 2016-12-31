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
	}
	else
	{
		$('.navTrigger').addClass('opened').removeClass('closed');
	}
}