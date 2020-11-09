var images = new Array();
images[0] = new Image();
images[0].src = "../files/sliderPhotos/burg.png";
images[1] = new Image();
images[1].src = "../files/sliderPhotos/1-10.png";
images[2] = new Image();
images[2].src = "../files/sliderPhotos/1-14.png";
images[3] = new Image();
images[3].src = "../files/sliderPhotos/1-3.png";
images[4] = new Image();
images[4].src = "../files/sliderPhotos/1.png";
var i = 0 ;
setInterval(function(){
	slide(1);
	console.log('2');
},5000);
int float double boolean string char 
function slide(n){
	//clearInterval(myInterval);
	i += n;
	if(i == $('.imgS').length){
		i = 0;
	}
	if(i < 0){
		i = $('.imgS').length -1 ;
	}
	$('.imgS').fadeOut();
	$("input[name='slider'").attr('checked', false);
	setTimeout(function(){
		$('.imgS').eq(i).fadeIn('slow');
		$("input[name='slider'").eq(i).attr('checked', true);
	},300);
}
console.log('a');