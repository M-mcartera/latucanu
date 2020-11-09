<!DOCTYPE html>
<html>
<head>
	<title>Tucanu Fish</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://kit.fontawesome.com/547a1ff53f.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Rufina&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/index.js"></script>	
</head>
<body>
	<div class="nav">
		<div class="logo">
			<img src="files/logo.png" alt="TucanuLogo">
		</div>
		<div class="text">
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">Meniu</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Livrare</a></li>
				<li><i class="fas fa-shopping-bag"></i></li>
			</ul>
		</div>
	</div>
	<div class="imgSlider">
		<img src="files/sliderPhotos/burg.png" alt="" class="imgS activeI">
		<img src="files/sliderPhotos/1-10.png" alt="" class="imgS">
		<img src="files/sliderPhotos/1-3.png" alt="" class="imgS">
		<img src="files/sliderPhotos/1-14.png" alt="" class="imgS">
		<img src="files/sliderPhotos/1.png" alt="" class="imgS">
		<div class="arr arrLeft" onclick="slide(-1);"><!--<i class="fas fa-arrow-circle-left">--></i></div>
		<div id="arrowRight" class="arr arrRight" onclick="slide(1);"><!--<i class="fas fa-arrow-circle-right">--></i></div>
		<div class="radiosSlider">
			<input type="radio" name="slider" checked="checked">
			<input type="radio" name="slider">
			<input type="radio" name="slider">
			<input type="radio" name="slider">
			<input type="radio" name="slider">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-3 ET">Echipa Tucanu</div>
		</div>
		<hr class="my-1 bg-white">
		<div class="contCards">
			<div class="card">
				<div class="img"></div>
				<div class="name">Nume Prenume</div>
				<div class="role">Rol</div>
			</div>
			<div class="card">
				<div class="img"></div>
				<div class="name">Nume Prenume</div>
				<div class="role">Rol</div>
			</div>		<div class="card">
				<div class="img"></div>
				<div class="name">Nume Prenume</div>
				<div class="role">Rol</div>
			</div>
		</div>
	</div>
</body>
</html>
