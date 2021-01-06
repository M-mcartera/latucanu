<?php
$rand = rand(1,10);
$user = "user" . $rand;
session_start();
$_SESSION['user'] = $user;	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/index.css">

	<script src="https://kit.fontawesome.com/547a1ff53f.js" crossorigin="anonymous"></script>
</head>	
<body>
	<div id="top"></div>
	<nav  class="navbar navbar-expand-md navbar-dark">
		<div class="container-fluid">
			<a href="#" class="navbar-brand"><img id="logo" src="files/logo 1.png" alt="TucanuLogo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navResponsive ">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="#top" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#menuDiv" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="#aboutUsDiv" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="#deliveryDiv" class="nav-link">Delivery</a></li>
					<li class="nav-item"><a class="nav-link"><i class="fas fa-shopping-bag bucket"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
<div class="checkBag">
	<span class="bucketCloseBtn"><i class="fas fa-times-circle"></i></span>
	<br><br>
	<div class="elems"></div>
	<hr>
	<span class="SosTag">Sos:</span><i class="fas fa-caret-right revSos"></i> 
	<div class="sosuri">
		<div class="elemSos ketchup" onclick="addBucket('sos ketchup',1)">Ketchup</div>
		<div class="elemSos sweetchilli" onclick="addBucket('sos sweetchilli',1)">Sweet Chilli</div>
		<div class="elemSos mujdei" onclick="addBucket('sos mujdei',1)">Mujdei</div>
		<div class="elemSos sostucanu" onclick="addBucket('sos sostucanu',1)">Sos Țucanu</div>
	</div>
	<hr>
	<div class="sum">Total: 0 RON</div>
	<div class="submitButton">Submit order</div>
	<div class="clearButton">Clear all</div>
	<form action="server/submit.php" method="POST" id="form">
			<hr>
		<input type="text" placeholder="Nume:" pattern="[A-Za-z]{3,}"  id="nume" required="required">
		<br>
		<input type="text" placeholder="Prenume:" pattern="[A-Za-z]{3,}" id="prenume" required="required">
		<br>
		<input type="tel" pattern="[0-9]{10}"  placeholder="0798765432" id="phone" required="required">
		<br>
		<button type="submit" id="SubmitOrderBtn">submit</button>
	</form>
	</div>			
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slide-to="3"></li>
		<li data-target="#slides" data-slide-to="4"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active"><img src="files/sliderPhotos/burg.png" alt="BurgCrab"></div>
		<div class="carousel-item"><img src="files/sliderPhotos/1-3.png" alt=""></div>
		<div class="carousel-item"><img src="files/sliderPhotos/1.png" alt=""></div>
		<div class="carousel-item"><img src="files/sliderPhotos/1-10.png" alt=""></div>
		<div class="carousel-item"><img src="files/sliderPhotos/1-14.png" alt=""></div>
	</div>
	<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	</a>
	<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	</a>
</div>
<br>
<div class="container menu">
	<div class="row text-center">
		<div class="col-sm-3 ">
			<p class="tagText" id="menuDiv">Menu</p>
		</div>
	</div>
	<hr class="section">
	<div class="options">
		<!--Burger ton-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/burgerTon.png" alt="BURGER TON">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Carne de Ton</li>
							<li>Salată</li>
							<li>Sos Țucanu</li>
							<li>Ceapă</li>
							<li>Castravete</li>
							<li>Sweet Chilli</li>
							<li>Ketchup</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Buger Ton</p>
			<div class="row text-center">
				<div class="col-sm-4 price">25 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('burgerTon', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--burger creveti-->
		<div class="option-item" id="menuDiv">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/burgerCreveti.png" alt="BURGER CREVETI">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Creveți Tempura</li>
							<li>Salată</li>
							<li>Sos Tzatziki</li>
							<li>Ceapă</li>
							<li>Castravete</li>
							<li>Sweet Chilli</li>
							<li>Ketchup</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Burger Creveți</p>
			<div class="row text-center">
				<div class="col-sm-4 price">25 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('burgerCreveti', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--sendfish-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/sendfish.png" alt="SENDFISH">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Chiflă</li>
							<li>Felie de Brânză</li>
							<li>Pește Marin Tocat</li>
							<li>Sos Tzatziki</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Sendfish</p>
			<div class="row text-center">
				<div class="col-sm-4 price">9 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('sendfish', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--FISH AND CHIPS-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/fishChips.png" alt="FISH & CHIPS">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Cod Pane</li>
							<li>Cartofi Prăjiți</li>
							<li>Sos Mazăre Menta</li>
							<li>Lămâie</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Fish & Chips</p>
			<div class="row text-center">
				<div class="col-sm-4 price">26 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('fishChips', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--Fish fingers-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/fishFingers.png" alt="Fish FINGERS">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Șalău în Crustă</li>
							<li>Lamâie</li>
							<li>Sweet Chilli</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Fish Fingers</p>
			<div class="row text-center">
				<div class="col-sm-4 price">18 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('fishFingers', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--Midii pane-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/midiiPane.png" alt="Midii Pane">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Carne de Midii</li>
							<li>Crustă Crocantă</li>
							<li>Lamâie</li>
							<li>Sweet Chilli</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Midii Pane</p>
			<div class="row text-center">
				<div class="col-sm-4 price">14 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('midii', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--INELE-CALAMAR-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/ineleCalamar.png" alt="INELE CALAMAR">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Inele Calamar</li>
							<li>Crustă Crocantă</li>
							<li>Lamâie</li>
							<li>Sweet Chilli</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Inele Calamar</p>
			<div class="row text-center">
				<div class="col-sm-4 price">17 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('ineleCalamar', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--Rulou somon-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/rulouSomon.png" alt="RULOU SOMON">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Somon</li>
							<li>Lipie</li>
							<li>Salată</li>
							<li>Ceapă</li>
							<li>Legume</li>
							<li>Sweet Chilli</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Rulou Somon</p>
			<div class="row text-center">
				<div class="col-sm-4 price">25 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('rulouSomon', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--hot dog somon-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/SomonDog.png" alt="SOMON DOG">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Chiflă</li>
							<li>Cârnăcior de somon</li>
							<li>Salată</li>
							<li>Ketchup</li>
							<li>Maioneză</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Hot Dog Somon</p>
			<div class="row text-center">
				<div class="col-sm-4 price">10 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('somonDog', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--Crispy mix box-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/crispiBox.png" alt="CRISPY BOX">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Inele Calamar Tempura</li>
							<li>Creveți Tempura</li>
							<li>File de Șalău Tempura</li>
							<li>Lămâie</li>
							<li>Sweet <Chilli></Chilli></li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Crispy Mix Box</p>
			<div class="row text-center">
				<div class="col-sm-4 price">25 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('crispyBox', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--Hamsii cu mamaliguta-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/hamsii.png" alt="HAMSII">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Hamsii Prăjite</li>
							<li>Mămăliguță</li>
							<li>Lămâie</li>
							<li>Mujdei</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Hamsii</p>
			<div class="row text-center">
				<div class="col-sm-4 price">15 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('hamsii', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--INELE DE CEAPA-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/ineleCeapa.png" alt="INELE DE CEAPĂ">
					</div>
					<div class="flip-box-back">
						<ol>
							<li>Inele de Ceapă Pane</li>
							<li>Lămâie</li>
							<li>Sweet Chilli</li>
						</ol>
					</div>
				</div>
			</div> 
			<p class="title">Inele de Ceapă</p>
			<div class="row text-center">
				<div class="col-sm-4 price">18 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('ineleCeapa', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
		<!--crispi-box-->
		<div class="option-item">
			<div class="flip-box">
				<div class="flip-box-inner">
					<div class="flip-box-front">
						<img src="files/menu/cartofFri.png" alt="Cartofi FRI">
					</div>
				</div>
			</div> 
			<p class="title">Cartofi Prăjiți</p>
			<div class="row text-center">
				<div class="col-sm-4 price">6 RON</div>
				<div class="col-sm-6"><button class="btn btn-secondary toBucket" onclick="addBucket('cartofi', 1);"><i class="fas fa-shopping-cart"></i></button></div>
			</div>
		</div>
	</div>
</div>
<div class="container aboutUs mt-5">
	<div class="row text-center">
		<div class="col-sm-3">
			<p class="tagText" id="aboutUsDiv">About Us</p>
		</div>
	</div>
	<hr class="section">
	<div class="contentAboutUs">
		<div class="wrapper">
			<img src="#" alt="Rulota" class="wrapperItem">
			<img src="#" alt="Rulota" class="wrapperItem">
		</div>
		<div class="row text-center mt-3">
			<div class="col-md-12">Adresa "La Țucanu": Strada Brăilei 175C</div>
		</div>
		<p class="aboutUsText">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
	</div>
	<div class="row text-center">
		<div class="col-sm-3">
			<p class="tagText">Echipa Țucanu</p>
		</div>
	</div>
	<hr class="section">
	<div class="echipaWrapper">
		<div class="echipa-item">
			<img src="files/echipa/Mihail.png" alt="Marius" class="wrapperImg">
			<div class="row text-center">
				<div class="col col-md-12">Carteră Mihail</div>
			</div>
			<div class="row text-center">
				<div class="col col-md-12">Ajutor Bucătar</div>
			</div>
		</div> 
		<div class="echipa-item">
			<img src="files/echipa/Mihail.png" alt="Victor" class="wrapperImg">
			<div class="row text-center">
				<div class="col-md 12">Nume Prenume</div>
			</div>
			<div class="row text-center">
				<div class="col-md-12">Rol</div>
			</div>
		</div>
		<div class="echipa-item">
			<img src="files/echipa/Mihail.png" alt="Mihai" class="wrapperImg">
			<div class="row text-center">
				<div class="col col-md-12">Nume Prenume</div>
			</div>
			<div class="row text-center">
				<div class="col col-md-12">Rol</div>
			</div>
		</div>
	</div>
</div>
<div class="container contentLivrare">
	<div class="row text-center">
		<div class="col-sm-3 mt-3">
			<p class="tagText" id="deliveryDiv">Delivery</p>
		</div>
	</div>
	<hr class="section">
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4 cards">

			<a href=""><img src="files/partners/index.png" alt=""></a>
			<h3>Takeaway.com</h3>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 cards">

			<a href=""><img src="files/partners/foodpanda.png" alt=""></a>
			<h3>FoodPanda</h3>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 cards">
			<a href="#"><img src="files/partners/glovo.png" alt=""></a>
			<h3>Glovo</h3>
		</div>
	</div>
</div>
<div id="contactDiv" class="mt-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col col-md-2 align-self-center">+40738236055</div>
			<div class="col col-md-2">facebook</div>
			<div class="col col-md offset-md-4">Adresa "La Țucanu": Strada Brăilei 175C</div>
		</div>
	</div>
</div>
<div class="alert alert-succes">Produsul a fost adaugat cu succes!</div>
<div class="alert alert-danger">Erroare!</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script src="js/index.js"></script>

</body>
</html>