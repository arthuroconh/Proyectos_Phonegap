$(document).ready(main);
 
var contador = 1;
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.menu2').animate({
				left: '0'
			});
			$('.cerrador').css("display","block");
			$('.cerrador').animate({
				right: '0'
			});
			contador = 0;

		} else {
			contador = 1;
			$('.menu2').animate({
				left: '-100%'
			});
			$('.cerrador').css("display","none");
			$('.cerrador').animate({
				right: '-100%'
			});
		} 
	});
	$('.cerrador').click(function(){
		if(contador == 1){
			$('.menu2').animate({
				left: '0'
			});
			$('.cerrador').css("display","block");
			$('.cerrador').animate({
				right: '0'
			});
			contador = 0;

		} else {
			contador = 1;
			$('.menu2').animate({
				left: '-100%'
			});
			$('.cerrador').css("display","none");
			$('.cerrador').animate({
				right: '-100%'
			});
		} 
	});
 
};