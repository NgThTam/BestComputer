<!DOCTYPE html>
<html>
<head>
	<title>Laptop.com</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Laptop, Laptop gia re, Laptop thoi trang, Laptop chinh hang">
  <meta name="description" content="Chuyen mua ban laptop cac loai, Laptoop gia sinh vien, laptop gia re, Ship toan quoc, Tra gop lai xuat thap">
  <meta http-equiv="refresh" content="600">
  <!-- Lien ket css bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Lien ket font - awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Lien ket font size -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- Lien ket aos -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
	<!-- Lien ket self -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style-scroll-top.css">
</head>
<?php
	session_start();
	include_once('connect.php');
?>
<body style="width: 100%;">
	<!-- Loader -->
	<div class="loader">
		<img src="assets/images/loading-2.gif" alt="Loading ..." class="img-fluid" style="width: 150px; height: 150px;">
	</div>
	<a class="scroll-top px-2 py-1" href="#">
		<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
	</a>
	<!-- start header -->
	<div class="header">
		<div class="top-header bottom-separator	bg-transparent d-none d-sm-block">
			<!-- start header container -->
			<div class="position-absolute top-h">
				<div class="top-header-my-self border-bottom border-light">
				<div class="container">
					<div class="row py-2">
						<!-- start left top header -->
						<div class="col-md justify-content-start d-flex">
							<div class="list-item pl-4">
								<span class="info-icon">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>
								Sidestate NSW 4132, Australia
							</div>
							<div class="list-item pl-4">
								<span class="info-icon">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span> 
								Help: + 09 00 11 22 33
							</div>
							
						</div>
						<!-- end left top header -->
						<!-- start right top header -->
						<div class="col-md d-flex my-right-top-header">
							<div class="list-item pl-3">
								<a href="index.php">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</div>
							<div class="list-item pl-3">
								<a href="index.php">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</div>
							<div class="list-item pl-3">
								<a href="index.php">
									<i class="fa fa-pinterest" aria-hidden="true"></i>
								</a>
							</div>
							<div class="list-item pl-3">
								<a href="index.php">
									<i class="fa fa-google-plus-official" aria-hidden="true"></i>
								</a>
							</div>
							<div class="list-item pl-3">
								<a href="index.php">
									<i class="fa fa-dribbble" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- end right top header -->
				</div>
				</div>
				<div class="container">
				<!-- start main header -->
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg navbar-light nav-header">
						  <a class="navbar-brand" href="index.php">
						  	<img src="assets/images/brand.png" alt="this is logo">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse border-bottom border-white" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="index.php" style="color: rgb(41, 171, 226) !important;">Home</a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="contact-us.php">Contact us</a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="shop.php">Shop</a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="services.php">Laptop</a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="index.php">Projects</a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="blog.php">Blog</a>
						      </li>
							  <?php 
								if(isset($_SESSION['isLogin'])) {
									echo '<li class="nav-item nav-link dropdown">
											<a class="nav-link" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span style="color:white;">Personal</span>
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1010;">
												<a class="dropdown-item" href="logout.php"><span class="text-secondary">LogOut</span></a>
												<a class="dropdown-item" href="thanhtoan.php"><span class="text-secondary">Bill</span></a>
											</div>
										</li>';
								}else{
									echo '<li class="nav-item nav-link dropdown">
											<a class="nav-link" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span style="color:white;">Pages</span>
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1010;">
											<a class="dropdown-item" href="login.php"><span class="text-secondary">Login</span></a>
											<a class="dropdown-item" href="register.php"><span class="text-secondary">Register</span></a>
											</div>
										</li>';
								}
							  ?>
						      <li class="nav-item nav-link">
						      	<a href="index.php" class="nav-link">
						      		<i class="fa fa-search" aria-hidden="true"></i>
						      	</a>
						      </li>
						      <li class="nav-item nav-link">
						      	<a href="giohang.php" class="nav-link">
						      		<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						      	</a>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h2 class="text-center mt-5 pt-5" style="font-size: 325%;">WELCOME TO BEST COMPUTER</h2>
					</div>
				</div>
				<!-- end main header -->
				</div>
			</div>
			<!-- end header container -->

			<!-- start slider -->
				<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="assets/images/slider-1.jpg" alt="First slide" style="height: 500px;">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="assets/images/slider-2.jpg" alt="Second slide" style="height: 500px;">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="assets/images/slider-3.jpg" alt="Third slide" style="height: 500px;">
				    </div>
				  </div>
				  <div class="theme-back"></div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="z-index: 1001;">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="z-index: 1001;">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<!-- end slider -->

		</div>
	</div>
	<!-- end header -->

	<!-- start container -->
	<div class="top-section">
		<div class="container position-relative">
			<!-- start price -->
			<div class="card-deck row my-price text-center" data-aos="fade-up" data-aos-duration="1000">
			  <div class="col-12 col-sm-6 col-lg-3 mb-3">
			    <div class="deep">
			    	<img class="card-img-top pt-3" src="assets/images/price-1.png" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title text-primary">Laptop Macbook</h5>
				      <p class="text-muted">start at ...</p>
				      <p class="price-product-dolar">$20.00</p>
				      <a href="services.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
				    </div>
			    </div> 	
			  </div>

			  <div class="col-12 col-sm-6 col-lg-3 mb-3">
			    <div class="deep">
			    	<img class="card-img-top pt-3" src="assets/images/price-2.png" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title text-primary">Laptop Asus</h5>
				      <p class="text-muted">start at ...</p>
				      <p class="price-product-dolar">$25.00</p>
				      <a href="services.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
				    </div>
			    </div> 	
			  </div>

			  <div class="col-12 col-sm-6 col-lg-3 mb-3">
			    <div class="deep">
			    	<img class="card-img-top pt-3" src="assets/images/price-3.png" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title text-primary">Laptop Dell</h5>
				      <p class="text-muted">start at ...</p>
				      <p class="price-product-dolar">$110.00</p>
				      <a href="services.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
				    </div>
			    </div> 	
			  </div>

			  <div class="col-12 col-sm-6 col-lg-3 mb-3">
			    <div class="deep">
			    	<img class="card-img-top pt-3" src="assets/images/price-4.png" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title text-primary">Laptop Acer</h5>
				      <p class="text-muted">start at ...</p>
				      <p class="price-product-dolar">$15.00</p>
				      <a href="services.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
				    </div>
			    </div> 	
			  </div>

			</div>
			<!-- end price -->
		</div>

		<div class="choose-me">
			<div class="container">
				<div class="header-title">
					<h2 class="text-center" data-aos="fade-right" data-aos-duration="1000">WHY CHOOSE US</h2>
					<p class="text-center mb-5" data-aos="fade-left" data-aos-duration="1000">Some Of Our Features</p>
				</div>

				<div class="row cols-md rows-lg text-center" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-md-6">
						<div class="row cols-md rows-lg">
							
							<div class="col-sm-6">
								<div class="item">
									<div class="icon text-left d-flex justify-content-center align-items-center" style="background-image: url('assets/images/feature-icon.png'); width: 56px; height: 56px;">
										<i class="fa fa-rocket my-icon" aria-hidden="true" ></i>
									</div>
									<div class="description-icon pl-5">
										<h5 class="text-left">WE ARE FAST</h5>
										<p class="text-left text-description">Qualified Workers Lorem Ipsum is simply dummy text of the printing</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="item">
									<div class="icon text-left d-flex justify-content-center align-items-center" style="background-image: url('assets/images/feature-icon.png'); width: 56px; height: 56px;">
										<i class="fa fa-usd my-icon" aria-hidden="true"></i>
									</div>
									<div class="description-icon pl-5">
										<h5 class="text-left">NO FIX, NO FEE</h5>
										<p class="text-left text-description">Qualified Workers Lorem Ipsum is simply dummy text of the printing</p>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-md-6">
						<div class="row cols-md rows-lg">
							
							<div class="col-sm-6">
								<div class="item">
									<div class="icon text-left d-flex justify-content-center align-items-center" style="background-image: url('assets/images/feature-icon.png'); width: 56px; height: 56px;">
										<i class="fa fa-calendar-check-o my-icon" aria-hidden="true"></i>
									</div>
									<div class="description-icon pl-5">
										<h5 class="text-left">30 DAYS WARRANTY</h5>
										<p class="text-left text-description">Qualified Workers Lorem Ipsum is simply dummy text of the printing</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="item">
									<div class="icon text-left d-flex justify-content-center align-items-center" style="background-image: url('assets/images/feature-icon.png'); width: 56px; height: 56px;">
										<i class="fa fa-users my-icon" aria-hidden="true"></i>
									</div>
									<div class="description-icon pl-5">
										<h5 class="text-left">EXPERT STAFF</h5>
										<p class="text-left text-description">Qualified Workers Lorem Ipsum is simply dummy text of the printing</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- solid-div -->
		<div class="solid-div" style="z-index: 10;">
			<div class="fix-image-wra position-relative" style="background-image: url(assets/images/slider-1.jpg);">
				<div class="container pb-5 position-relative" style="z-index: 1000;">
					<h2 class="pt-5 text-center text-white" data-aos="fade-left" data-aos-duration="1000">SERVICE PROCESS</h2>
					<p class="text-center mb-3 text-white" data-aos="fade-right" data-aos-duration="1000">easy and effective way to get your device repaired</p>
					<div class="row mt-5">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row text-center" data-aos="zoom-in" data-aos-duration="1000">
								<div class="col-xl-3 col-12 step">
									<span class="mr-2">1</span>
									DAMAGE DEVICE
								</div>
								<div class="col-xl-3 col-12 step position-relative">
									<span class="mr-2">2</span>
									SEND IT TO US
								</div>
								<div class="col-xl-3 col-12 step">
									<span class="mr-2" style="color: blue;">3</span>
									FAST FIX
								</div>
								<div class="col-xl-3 col-12 step">
									<span class="mr-2">4</span>
									RETURN
								</div>
								
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="theme-back"></div>
			</div>
		</div>
		<!-- solid-div -->
	</div>

	<!-- start services -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-center" style="font-size: 230%;" data-aos="fade-left" data-aos-duration="1000">SERVICES</h2>
					<p class="text-center text-muted" data-aos="fade-right" data-aos-duration="1000">We offer a full range of repair services provided by an experienced and specialized team</p>
				</div>
			</div>

			<div class="row mx-auto mt-5">
				<div class="col-12 col-md-6 col-lg-4 mb-3">

					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-1.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">DATA BACKUP & RECOVERY</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-3">
					
					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-2.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">LAPTOP & MAC UPGRADE</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-3">
					
					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-3.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">REPAIR SMARTPHONE</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-3">
					
					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-4.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">TABLET REPAIR</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-3">
					
					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-5.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">REPAIR PC & LAPTOP HARDWARE</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-12 col-md-6 col-lg-4 mb-3">
					
					<div class="card my-card-product mx-sm-auto" data-aos="fade-up" data-aos-duration="1000">
					  <a href="read-more.html"><img class="card-img-top my-img-product" src="assets/images/product-6.jpg" alt="Card image cap"></a>
					  <div class="card-body">
					    <h6 class="card-title"><a href="read-more.html">NETWORK SOLUTION</a></h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <div class="read-more-product d-flex justify-content-end">
					    	<a href="read-more.html" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
					    </div>
					  </div>
					</div>

				</div>
			</div>

			<div class="row mt-5">
				<div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="500">
					<a href="services.php" class="btn btn-primary pt-2 pb-2 pl-5 pr-5 see-more"><i class="fa fa-th-large pr-2" aria-hidden="true"></i>READ MORE ALL</a>
				</div>
			</div>
		</div>
	</div>					
	<!-- end services -->
	<!-- start counter -->
	<div class="counter-section mt-5">
		<div class="container py-5">
			<div class="row text-white text-center">
				<div class="col-12 col-md-3">
					<div class="counter">
						<div class="counter-title text-uppercase font-weight-bold">HAPPY CLIENT</div>
						<div class="counter-value">
							<span class="count">3720</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="counter">
						<div class="counter-title text-uppercase font-weight-bold">FINISHED PROJECTS</div>
						<div class="counter-value">
							<span class="count">4170</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="counter">
						<div class="counter-title text-uppercase font-weight-bold">COMPUTER SERVICED</div>
						<div class="counter-value">
							<span class="count">2730</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="counter">
						<div class="counter-title text-uppercase font-weight-bold">MOBILE SERVICED</div>
						<div class="counter-value">
							<span class="count">1510</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end counter -->

	<!-- start feedback -->
	<div class="feedback mt-5 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">WHAT PEOPLE SAY</h2>
					<p class="text-center" data-aos="fade-left" data-aos-duration="1000">Real customers reviews</p>
				</div>
			</div>

			<div class="row">
				<div id="carouselExampleIndicators position-relative" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <div class="card-deck row" data-aos="fade-up" data-aos-duration="1000">
							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Great customer support</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Thanks John, I was really pleased with Profix’s service. Would definitely recommend you and have alredy given out some of your business cards that were left with me. All the best for future succes.</p>
							      <div class="tt-icon">
							      	<i class="fa fa-television" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Merry Smith
							      </div>
							      <p class="card-text text-muted">CFO, InfoTech</p>
							    </div>
							  </div>

							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Flexible services</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Profix did great job with fixing my laptop for a good price. I recommend any body with laptop problems, they will give you excellent service to all his customers.</p>
							      <div class="tt-icon">
							      	<i class="fa fa-mobile" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Michale John
							      </div>
							      <p class="card-text text-muted">Co-Founder, InfoLabs</p>
							    </div>
							  </div>

							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Excellent team</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Keep up the excellent work. Thank you so much for your help. This is simply unbelievable!</p>
							      <div class="tt-icon">
							      	<i class="fa fa-cog" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Merry Smith
							      </div>
							      <p class="card-text text-muted">CFO, InfoTech</p>
							    </div>
							  </div>
							</div>
				    </div>
				    <div class="carousel-item">
				      <div class="card-deck row">
							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Flexible services</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Thanks John, I was really pleased with Profix’s service. Would definitely recommend you and have alredy given out some of your business cards that were left with me. All the best for future succes.</p>
							      <div class="tt-icon">
							      	<i class="fa fa-television" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Michale John
							      </div>
							      <p class="card-text text-muted">CFO, InfoTech</p>
							    </div>
							  </div>

							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Excellent team</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Keep up the excellent work. Thank you so much for your help. This is simply unbelievable!</p>
							      <div class="tt-icon">
							      	<i class="fa fa-cog" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Merry Smith
							      </div>
							      <p class="card-text text-muted">Co-Founder, InfoLabs</p>
							    </div>
							  </div>

							  <div class="col-lg-4 col-sm-12">
							    <div class="card-body text-center">
							      <h5 class="card-title">Great customer support</h5>
							      <div class="rating mb-2">
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      	<i class="fa fa-star" aria-hidden="true"></i>
							      </div>
							      <p class="card-text text-muted">Thanks John, I was really pleased with Profix’s service. Would definitely recommend you and have alredy given out some of your business cards that were left with me. All the best for future succes.</p>
							      <div class="tt-icon">
							      	<i class="fa fa-phone" aria-hidden="true"></i>
							      </div>
							      <div class="tt-user font-weight-bold">
							      	Merry Smith
							      </div>
							      <p class="card-text text-muted">CFO, InfoTech</p>
							    </div>
							  </div>
							</div>
				    </div>
				</div>
			</div>
	
		</div>
	</div>					
	<!-- end feedback -->

	<!-- start contact -->
	<div class="contact-us" data-aos="fade-up" data-aos-duration="1000">
		<div class="container py-5 text-white">
			<div class="row">
				<div class="col-lg-10 col-sm-12 text-center">
					<div class="row">
						<div class="col-lg-1 col-12 py-2">
							<i class="fa fa-motorcycle" style="font-size: 340%;" aria-hidden="true"></i>
						</div>
						<div class="col-lg-11 col-12 pl-5 contact-info">
							<h3>Request free consultation</h3>
							<p>Get answers and advice from people you want it from.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-sm-12 py-3 text-center">
					<a href="contact-us.php" class="btn btn-lg btn-contact" role="button" aria-pressed="true">Contact us</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact -->


	<!-- start authorized -->
	<div class="authorized my-5">
		<div class="container text-center">
			<div class="row mb-5">
				<div class="col-12">
					<h2 data-aos="fade-left" data-aos-duration="1000">WE ARE AUTHORIZED</h2>
				</div>
			</div>
			<div class="row" data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="col-6 col-md-4 col-lg-3 my-author">
					<a href="index.php">
						<img src="assets/images/author-1.png" alt="author-1">
					</a>
				</div>
				<div class="col-6 col-md-4 col-lg-3 my-author">
					<a href="index.php">
						<img src="assets/images/author-2.png" alt="author-2">
					</a>
				</div>
				<div class="col-6 col-md-4 col-lg-3 d-none d-md-block my-author">
					<a href="index.php">
						<img src="assets/images/author-3.png" alt="author-3">
					</a>
				</div>
				<div class="col-6 col-md-4 col-lg-3 d-none d-lg-block my-author">
					<a href="index.php">
						<img src="assets/images/author-4.png" alt="author-4">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end authorized -->

	<!-- start map -->

	<div class="map-address" data-aos="zoom-in-down" data-aos-duration="1000">
		<div class="mapouter" style="width: 100%;">
			<div class="gmap_canvas">
				<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=TP%20HO%20CHI%20MINH&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				<a href="https://fmovies2.org"></a>
			</div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
		</div>
	</div>
	<!-- end map -->

	<!-- end container -->

	<!--start footer -->
	<div class="footer mt-5">
		<div class="container text-center">
			<div class="row pb-5">
				<div class="col-lg-3">
					<div class="footer-logo">
						<img src="assets/images/brand.png" alt="this is logo">
					</div>
					<p class="text-muted">Profix is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-8 sm-push-1">
					<div class="row pt-2 footer-center">
						<div class="col-sm-4">
							<div class="footer-title py-2">ADRESS</div>
							<p class="text-muted">Sidestate NSW 4132, Australia</p>
						</div>
						<div class="col-sm-4">
							<div class="footer-title py-2">CONTACT</div>
							<p class="text-muted">(555) 555-0312 <br> info@profix.com</p>
						</div>
						<div class="col-sm-4">
							<div class="footer-title py-2">SOCIALS</div>
							<div class="list-contact">
								<a href="index.php">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
								<a href="index.php" class="pl-1">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
								<a href="index.php" class="pl-1">
									<i class="fa fa-pinterest" aria-hidden="true"></i>
								</a>
								<a href="index.php" class="pl-1">
									<i class="fa fa-google-plus-official" aria-hidden="true"></i>
								</a>
								<a href="index.php" class="pl-1">
									<i class="fa fa-dribbble" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row text-center pb-2">
				<div class="col-12 text-muted">
					&copy 2020 <b>Best computer</b> All Rights Reserved
				</div>
			</div>
		</div>
	</div>
	<!--end footer -->
<!-- Lien ket jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!-- Lien ket popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
<!-- Lien ket bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Lien ket vue js -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<!-- Lien ket aos -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script>
<!-- Lien ket my js -->
<script src="assets/js/my-js.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>
    AOS.init();
 </script>
</body>
</html>