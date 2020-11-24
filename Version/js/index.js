
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
function addBucket(n,c){
	var name = n;
	var price;
	var title;
	i = i +c;
	switch(name){
		case 'burgerTon':
		price = 25;
		title = "Burger Ton";
		append(price,title,c);
		break;
		case 'burgerCreveti':
		price = 25;
		title = "Burger Creveti";
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
	var execute = true;
	if($('.elem').length !== 0){
		$('.elemName').each(function(){
			if($(this).html() == title){
				var existingCount = $(this).parent().find('.countSpan').html();
				existingCount = parseInt(existingCount);
				existingCount++;
				$(this).parent().find('.countSpan').html(existingCount);
				var newPrice = price * existingCount;
				$(this).parent().find('.elemPrice').html(newPrice + " RON");
				sum = sum + price;
				setSum(sum);
				execute = false;
			}
		});
	}
	if(execute){
		sum = sum + price;
		var leftSpan = $("<span class='leftSpan'>-</span>");
		var rightSpan = $("<span class='rightSpan'>+</span>");
		var countSpan = $("<span class='countSpan'></span>");
		countSpan.html("1");
		var z;
		rightSpan.click(function(){
			var c =	$(this).parent().find('.countSpan').html();
			z = parseInt(c);
			z = z+1;
			countSpan.html(z);
			var newPrice = price * z;
			$(this).parent().parent().find('.elemPrice').html(newPrice + " RON");
			sum = sum + price;
			setSum(sum);
		});
		leftSpan.click(function(){
			var c =	$(this).parent().find('.countSpan').html();
			z = parseInt(c);
			if(z-1 <1){
				z = 0;
				$(this).parent().parent().remove();
				sum = 0;
				setSum(sum);
			}
			else{
				z = z-1;
				sum = sum - price;
				setSum(sum);
			}
			countSpan.html(z);
			var newPrice = price * z;
			$(this).parent().parent().find('.elemPrice').html(newPrice + " RON");

		});
		price = price * parseInt(countSpan.html());
		var $elem = $("<div class='elem'></div>");
		var $elemcount = $("<div class='elemCount'></div>");
		$elemcount.append(leftSpan,countSpan,rightSpan);
		var $elemname = $("<div class='elemName'>" + title + "</div>");
		var $elemprice = $("<div class='elemPrice'>"+price+" RON</div>");
		$elem.append($elemcount,$elemname,$elemprice);
		$('.elems').append($elem);

setSum(sum);
}
}
function setSum(sum){
	$('.sum').html(sum + " RON");
}
function checkList(name){
	console.log(name);
}

