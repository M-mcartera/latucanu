
$(document).ready(function(){
$(".bucket").on('click', function(){
	$(".dropdown-menu").toggle();
});
var menuDivpos = $("#menuDiv").offset().top-0.50;
var aboutUsDivpos = $("#aboutUsDiv").offset().top-0.50;
var deliveryDivpos= $("#deliveryDiv").offset().top - 200;
console.log(deliveryDivpos);
$(window).scroll(function(){
	console.log($(window).scrollTop());
	if($(window).scrollTop() > menuDivpos && $(window).scrollTop()<aboutUsDivpos){
		$('.nav-item').removeClass('active');
		$('.nav-item').eq(1).addClass('active');
	}
	else if($(window).scrollTop()>aboutUsDivpos && $(window).scrollTop()<deliveryDivpos){
		$('.nav-item').removeClass('active');
		$('.nav-item').eq(2).addClass('active');
	}
	else if($(window).scrollTop()>deliveryDivpos){
		$('.nav-item').removeClass('active');
		$('.nav-item').eq(3).addClass('active');
	}
	else{
		$('.nav-item').removeClass('active');
		$('.nav-item').eq(0).addClass('active');
	}
});
var i = 1;
$(".bucket").attr("data-content",i);


});
