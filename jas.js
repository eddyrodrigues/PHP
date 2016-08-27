$(function(){
	$('.menu ul li').mouseenter(function(){
		$('ul', this).slideDown(150);	
	});	//end mousenter function menu
	
	
	$('.menu ul li').mouseleave(function(){
		$('ul', this).slideUp(150);
	}); //end mouseleave func menu
	
} //end main function
);