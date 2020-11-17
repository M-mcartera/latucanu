
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
var counterClick = 0;
function addBucket(n,c){
	var name = n;
	var price;
	var title;
	i = i +c;
	switch(name){
		case 'burgerTon':
		price = 25;
		title = "Burger Ton";
		counterClick++;
		append(price,title,c);
		break;
		case 'burgerCreveti':
		price = 25;
		title = "Burger Creveti";
		counterClick++;
		append(price,title,c);
		break;
		case 'sendfish':
		price = 9;
		title = "Sendfish";
		append(price,title,c);
		break;
		case 'fishChips':
		price = 26;
		title = "Fish & Chips";
		append(price,title,c);
		break;
		case 'fishFingers':
		price = 18;
		title = "Fish Fingers";
		append(price,title,c);
		break;
		case 'midii':
		price = 18;
		title = "Midii Pane";
		append(price,title,c);
		break;
		case 'ineleCalamar':
		price = 17;
		title = "Inele Calamar";
		append(price,title,c);
		break;
		case 'rulouSomon':
		price  = 25;
		title = "Rulou Somon";
		append(price,title,c);
		break;
		case 'somonDog':
		price = 10;
		title = "Hot Dog Somon";
		append(price,title,c);
		break;
		case 'crispyBox':
		price = 25;
		title = "Crispy Mix Box";
		append(price,title,c);
		break;
		case 'hamsii':
		price = 15;
		title = 'Hamsii';
		append(price,title,c);
		break;
		case 'ineleCeapa':
		price = 18;
		title = "Inele de Ceapa";
		append(price,title,c);
		break;
		case 'cartofi':
		price = 6;
		title = "Cartofi Prajiti";
		append(price,title,c);
		break;
	}
	$(".bucket").attr("data-content",i);

}
var sum = 0;
$('.sum').append(sum);
function append(price,title,c){
	sum = sum + price;
	var leftSpan = $("<span class='leftSpan'>-</span>");
	var rightSpan = $("<span class='rightSpan'>+</span>");
	rightSpan.click(function(){
		var c =	$(this).parent().html().charAt(0);
		var z = parseInt(c);
		z = z+1;
		z = z.toString();
	});
	var $elemcount = $("<div class='elemCount'>"+c+"</div>");
	$elemcount.append(leftSpan,rightSpan);
	var $elemname = $("<div class='elemName'>" + title + "</div>");
	var $elemprice = $("<div class='elemPrice'>"+price+" RON</div>");
	$('.elems').append($elemcount,$elemname,$elemprice);
	
	$('.sum').html(sum + " RON");
}
/*
var app = angular.module('ShoppingList',[]);
app.controller('ShoppingController',function($scope){
	$scope.counta = 1;
	$scope.countb = 1;
});
*/
