
$(document).ready(function(){
$(".bucket").on('click', function(){
	$(".dropdown-menu").toggle();
});
var menuDivpos = $("#menuDiv").offset().top-0.50;
var aboutUsDivpos = $("#aboutUsDiv").offset().top-0.50;
var deliveryDivpos= $("#deliveryDiv").offset().top - 200;
$(window).scroll(function(){
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
});
var i = 0;
$(".bucket").attr("data-content",i);
/*
function addBucket(n,c){
	var name = n;
	var price;
	var title;
	var count = 1;
	i = i +c;
	switch(name){
		case 'cartofi':
			price = 6;
			title = "Cartofi Prăjiți";
			break;
		case 'rulou':
			price = 18;
			title = "Inele Ceapă";
			break;
		case 'macrou':
			price = 
	}
	console.log(i);
	$(".bucket").attr("data-content",i);

}

/*
var app = angular.module('ShoppingList',[]);
app.controller('ShoppingController',function($scope){
	$scope.counta = 1;
	$scope.countb = 1;
});
*/
