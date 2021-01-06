
$(document).ready(function(){
	$(".bucket").on('click', function(event){
		event.preventDefault();
		$(".checkBag").fadeIn(300);
		$(".sosuri").css("transform","translateX(0%)");
		$('.container').each(function(){
			$(this).css("filter","blur(10px)").css("pointer-events","none");
		});
		$('.navbar').css("filter","blur(10px)").css("pointer-events", "none");
		$('#slides').css("filter","blur(10px)").css("pointer-events","none");
	});
	$(".bucketCloseBtn").on('click',function(){
		$(".checkBag").fadeOut(300);
		$(".sosuri").css("transform","translateX(-150%)");
		$('.container').each(function(){
			$(this).css("filter","blur(0px)").css("pointer-events","auto");
		});
		$('.navbar').css("filter","blur(0px)").css("pointer-events", "auto");
		$('#slides').css("filter","blur(0px)").css("pointer-events","auto");
	});
	$(".submitButton").on("click",function(){
		$("#form").slideDown(200);
	})
	$(".clearButton").on("click",function(){
		$(".elems").empty();
		$('.elems').css("height","auto");
		$(".bucket").attr("data-content",0);
		sum = 0;
		setSum(0);
	});
	$('#SubmitOrderBtn').on('click', function(e){
		e.preventDefault();
		var nume = $("#nume").val().trim();
		var prenume = $("#prenume").val().trim();
		var phone = $("#phone").val().trim();
		var phoneTrue = (/[0-9]{10}/.test(phone));
		var eC = $(".elem").length;
		$(".elem").each(function(){
			var c = $(this).find(".countSpan").html();
			var n = $(this).find(".elemName").html();
			var p = $(this).find(".elemPrice").html();
			p = p.replace(" RON","");
			var temp = {name:oleg,prenume:sosi};
			console.log(temp);
		});
		/*if(nume.length >=3  && prenume.length >= 3 && phoneTrue){
			if(eC == 0){
				$('.alert-danger').html("Nu este nici un element adaugat in cos");
				$(".alert-danger").slideDown(150);
				setTimeout(function(){
					$(".alert-danger").slideUp(150);
				},1000);
			}
			else{
				var value = {nume: nume, prenume: prenume, phone: phone, elementsNr: eC};
				$.post("../server/submit.php", value, function(data){
					console.log("Data returned "+data);
				});

			}
		}
		else{
			$('.alert-danger').html("Datele Introduse sunt incorecte");
			$(".alert-danger").slideDown(150);
			setTimeout(function(){
				$(".alert-danger").slideUp(150);
			},1000);
		}*/
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
	var z = $('.bucket').attr("data-content");
	z = parseInt(z);
	z = z+c;
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
		case 'sos ketchup':
		price = 2;
		title = "Extra Sos Ketchup";
		append(price,title,c);
		break;
		case 'sos sweetchilli':
		price = 2;
		title = "Extra Sos Sweet Chilli";
		append(price,title,c);
		break;
		case 'sos mujdei':
		price = 2;
		title = "Extra Sos Mujdei";
		append(price,title,c);
		break;
		case 'sos sostucanu':
		price = 2;
		title = "Extra Sos Tucanu";
		append(price,title,c);
		break;

	}
	$(".bucket").attr("data-content",z);
	if($('.elem').length>=3){
		$('.elems').css('height','200px');
	}
	$(".alert-succes").slideDown(150);
	setTimeout(function(){
		$(".alert-succes").slideUp(150);
	},1000);
}
var sum = 0;
$('.sum').html("Total: "+sum+" RON");
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
		var leftSpan = $("<span class='leftSpan'><i class='far fa-minus-square'></i></span>");
		var rightSpan = $("<span class='rightSpan'><i class='far fa-plus-square'></i></span>");
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
			var bucketCount = $(".bucket").attr("data-content");
			bucketCount = parseInt(bucketCount);
			bucketCount++;
			$(".bucket").attr("data-content",bucketCount);
		});
		leftSpan.click(function(){
			var c =	$(this).parent().find('.countSpan').html();
			z = parseInt(c);
			var l = $('.elem').length;
			if(l-1<3){
				$('.elems').css("height","auto");
			}
			if(z-1 <1){
				z = 0;
				$(this).parent().parent().remove();
				sum = sum-price;
				setSum(sum);
			}
			else{
				z = z-1;
				sum = sum - price;
				setSum(sum);
			}
			var bucketCount = $(".bucket").attr("data-content");
			bucketCount = parseInt(bucketCount);
			bucketCount--;
			$(".bucket").attr("data-content",bucketCount);
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
	$('.sum').html("Total: "+sum+" RON");
}
