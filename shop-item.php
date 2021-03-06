<!DOCTYPE html>
<html>
<head>
	<title>ShopItem.com</title>
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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-shop-item.css">
  <link rel="stylesheet" href="assets/css/style-scroll-top.css">
</head>
<body style="width: 100%;">
	<div class="loader">
		<img src="assets/images/loading-1.gif" alt="Loading ..." class="img-fluid" style="width: 150px; height: 150px;">
	</div>
	<a class="scroll-top px-2 py-1" href="#">
		<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
	</a>
	<!-- start header -->
	<?php 
		session_start();
		include_once('header.php');
	?>
	<!-- end header -->
	<!-- start container -->

	<!-- start shop -->
	<div class="container mt-5 pt-5">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="row mb-5">
					<div class="col-lg-5">

						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-picture1" role="tabpanel" aria-labelledby="nav-picture1-tab">
						  	<img src="assets/images/shop-item-pro-0.jpg" alt="shop-item" class="img-fluid">
						  </div>
						  <div class="tab-pane fade" id="nav-picture2" role="tabpanel" aria-labelledby="nav-picture2-tab">
						  	<img src="assets/images/shop-item-pro-1.jpg" alt="shop-item" class="img-fluid">
						  </div>
						  <div class="tab-pane fade" id="nav-picture3" role="tabpanel" aria-labelledby="nav-picture3-tab">
						  	<img src="assets/images/shop-item-pro-2.jpg" alt="shop-item" class="img-fluid">
						  </div>
						</div>
						<nav>
						  <div class="nav nav-tabs row bottom-nav" id="nav-tab" role="tablist">
						    <a class="nav-item nav-link active col-4" id="nav-picture1-tab" data-toggle="tab" href="#nav-picture1" role="tab" aria-controls="nav-picture1" aria-selected="true">
						    	<img src="assets/images/shop-item-pro-0.jpg" alt="shop-item" class="img-fluid">
						    </a>
						    <a class="nav-item nav-link col-4" id="nav-picture2-tab" data-toggle="tab" href="#nav-picture2" role="tab" aria-controls="nav-picture2" aria-selected="false">
						    	<img src="assets/images/shop-item-pro-1.jpg" alt="shop-item" class="img-fluid">
						    </a>
						    <a class="nav-item nav-link col-4" id="nav-picture3-tab" data-toggle="tab" href="#nav-picture3" role="tab" aria-controls="nav-picture3" aria-selected="false">
						    	<img src="assets/images/shop-item-pro-2.jpg" alt="shop-item" class="img-fluid">
						    </a>
						  </div>
						</nav>

					</div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-12">
								<h4 class="text-uppercase">USB 3.0 HUB COMBO 3 PORTS CARD READER</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-12 d-flex review-pro py-2">
								<div class="start-pro">
									<i class="fa fa-star" aria-hidden="true"></i>
							  	<i class="fa fa-star" aria-hidden="true"></i>
							   	<i class="fa fa-star" aria-hidden="true"></i>
							   	<i class="fa fa-star" aria-hidden="true"></i>
							   	<i class="fa fa-star-half-o" aria-hidden="true"></i>
								</div>
								<span class="text-muted ml-3">2 Reviews</span>
								<span class="text-muted px-1">|</span>
								<span class="text-muted">Add your review</span>
							</div>
						</div>
						<div class="row my-2">
							<div class="col-12">
								<span class="price-pro font-weight-bold" style="font-size: 200%;">$67.05</span>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12">
								<span>Available: <span style="color: rgb(41, 171, 226);">In Stock</span></span>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12">
								<p class="text-muted" style="font-size: 90%;">13.7 inch USB extension cable extension perfect for travel USB hub / Adds 4 USB 3.0 ports to your computer / Backward compatible with USB 2.0 and 1.1 specifications Ready Out-of-Box</p>
							</div>
						</div>
						<div class="row">
							<div class="product-count col-5 px-0 d-flex justify-content-between">
								 <button class="button-count no-active font-weight-bold pl-3" disabled>-</button>
								 <input type="text" readonly class="number-product text-muted" value="1">
								 <button class="button-count pb-2 font-weight-bold mr-2">+</button>
							</div>
							<div class="col-7">
								<div class="btn-view-buy">
						      <a href="index.php" class="second btn btn-outline-info py-2 px-4 d-flex flex-grow-1 justify-content-center font-weight-bold" role="button" aria-pressed="true">+ ADD TO CART</a>
						    </div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-12">
								<div class="row py-1">
									<div class="col-12">
										<span class="text-muted font-weight-bold">SKU:</span>
										<span class="text-dark font-weight-bold">54bsd654</span>
									</div>
								</div>
								<div class="row py-1">
									<div class="col-12 d-flex">
										<span class="text-muted font-weight-bold">SHARE:</span>
										<div class="list-contact ml-2">
											<a href="index.php" class="pl-2">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
											<a href="index.php" class="pl-2">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
											<a href="index.php" class="pl-2">
												<i class="fa fa-google-plus-official" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="row py-1">
									<div class="col-12">
										<span class="text-muted font-weight-bold">CATEGORIES:</span>
										<span class="text-dark font-weight-bold categories">accessories</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<nav>
						  <div class="nav tab-head nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-item nav-link active px-0 mr-2 text-muted" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
						    <a class="nav-item nav-link px-0 mx-2 text-muted" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (2)</a>
						    <a class="nav-item nav-link px-0 mx-2 text-muted" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Additional Information</a>
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<div class="row mt-3">
						  		<div class="col-12">
						  			<h6>Micro USB Hub 2.0 Combo 3 Ports Card Reader High Speed USB Splitter All In One USB 3.0 Hub or PC Computer Accessories Notebook</h6>
						  			<h6>Specification:</h6>
						  			<ul class="list-unstyled text-muted">
						  				<li class="py-1">- Item Name: USB Hub Combo</li>
						  				<li class="py-1">- USB Ports: 3 Ports</li>
						  				<li class="py-1">- Card Reader: Support MS,M2,SD/MMC,TF card</li>
						  				<li class="py-1">- Cable: 3.0 for 20cm,2.0 for 40cm</li>
						  				<li class="py-1">- Size: 77*45*25mm</li>
						  				<li class="py-1">- Date Transfer Rate: Upto 480mbps/5Gmbps</li>
						  				<li class="py-1">- Color: White</li>
						  				<li class="py-1">- Compatible: Windows XP/2000/Vista/WIN 7/8/10,Mac OS,etc.</li>
						  			</ul>
						  		</div>
						  	</div>
						  </div>
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						  	<div class="row">
						  		<div class="col-12 d-flex mt-3">
						  			<div class="icon mr-3">
						  				<i class="fa fa-user p-3" aria-hidden="true" style="font-size: 300%;"></i>
						  			</div>
						  			<div class="content-cmt p-3">
						  				<div class="title d-flex justify-content-between">
						  					<div class="name-title">
						  						<b>Lie Stone</b> - <i class="text-muted">Web Developer</i>
						  					</div>
						  					<div class="start-pro">
													<i class="fa fa-star" aria-hidden="true"></i>
											  	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star-half-o" aria-hidden="true"></i>
												</div>
						  				</div>
						  				<div class="main-content text-muted mt-2">
						  					Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
						  				</div>
						  				<div class="day-cmt d-flex justify-content-end text-muted mt-4">
						  					Dec 15, 2020
						  				</div>
						  			</div>
						  		</div>
						  		<div class="col-12 d-flex mt-3">
						  			<div class="icon mr-3">
						  				<i class="fa fa-user p-3" aria-hidden="true" style="font-size: 300%;"></i>
						  			</div>
						  			<div class="content-cmt p-3">
						  				<div class="title d-flex justify-content-between">
						  					<div class="name-title">
						  						<b>John Bond</b>
						  					</div>
						  					<div class="start-pro">
													<i class="fa fa-star" aria-hidden="true"></i>
											  	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star" aria-hidden="true"></i>
											   	<i class="fa fa-star" aria-hidden="true"></i>
												</div>
						  				</div>
						  				<div class="main-content text-muted mt-2">
						  					Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. In euismod urna ac massa adipiscing interdum.
						  				</div>
						  				<div class="day-cmt d-flex justify-content-end text-muted mt-4">
						  					Dec 17, 2020 - 15 hours ago
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  </div>
						  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						  	<div class="row py-2 info-pro mt-3">
						  		<div class="col-3 text-muted">Brand Name</div>
						  		<div class="col-9 font-weight-bold text-dark">SHENGMEIYU</div>
						  	</div> 
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Ports</div>
						  		<div class="col-9 font-weight-bold" style="color: rgb(41, 171, 226);">3</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Model</div>
						  		<div class="col-9 font-weight-bold text-muted">USB Hub</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Funtion</div>
						  		<div class="col-9 font-weight-bold text-muted">Reader</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">System</div>
						  		<div class="col-9 font-weight-bold text-muted">Windows 7,Vista,XP,98,2000,ME and Mac OS 10.2 and Linux systems</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Size</div>
						  		<div class="col-9 font-weight-bold text-muted">77*45*25mm</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Interface Type</div>
						  		<div class="col-9 font-weight-bold text-muted">USB 2.0</div>
						  	</div>
						  	<div class="row py-2 info-pro">
						  		<div class="col-3 text-muted">Support Ports</div>
						  		<div class="col-9 font-weight-bold" style="color: rgb(41, 171, 226);">SD/MMC/M2/MS/MS Pro Duo</div>
						  	</div>
						  </div>
						</div>
					</div> 
				</div>
				<div class="row mt-5">
					<div class="col-12">
						<div class="row">
							<div class="col-12">
								<h4 class="text-uppercase mb-4">Related Products</h4>
							</div>
							<div class="row mb-5">
								<div class="col-12 col-md-6 mb-3">
									<div class="card my-card-product mx-sm-auto px-2 position-relative" data-aos="zoom-in-up" data-aos-duration="1000">
										<div class="trending position-absolute mt-3 ml-3">
											<a href="index.php" class="px-2 py-1 text-white bg-danger mr-2">sale</a>
											<a href="index.php" class="px-2 py-1 text-white bg-info">trending</a>
										</div>
										<a href="index.php"><img class="card-img-top my-img-product" src="assets/images/relate-1.jpg" alt="Card image cap"></a>
										<div class="card-body">
										  <div class="name-price d-flex flex-column align-items-center">
										    <h6 class="card-title mb-0 py-2"><a class="name" href="index.php">WI-FI ROUTER REPIETER</a></h6>
										    <div class="price mb-3">
										    	<span class="price-by-dolar mr-2">$32.15 </span>
										    	<del class="text-muted">$72.5</del>
										    </div>
										  </div>
										  <div class="view-buy d-flex justify-content-center">
										    <div class="btn-view-buy mr-2">
										      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
										    </div>
										    <div class="btn-view-buy">
										      <a href="index.php" class="second btn btn-outline-info" role="button" aria-pressed="true">
										      	<i class="fa fa-shopping-cart pr-2" aria-hidden="true"></i>
										      	ADD TO CART
										      </a>
										    </div>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-3">
									<div class="card my-card-product mx-sm-auto px-2" data-aos="zoom-in-up" data-aos-duration="1000">
										<a href="index.php"><img class="card-img-top my-img-product" src="assets/images/relate-2.jpg" alt="Card image cap"></a>
										<div class="card-body">
										  <div class="name-price d-flex flex-column align-items-center">
										    <h6 class="card-title mb-0 py-2"><a class="name" href="index.php">EXTERNAL HDD DRIVE</a></h6>
										    <div class="price mb-3">
										    	<span class="price-by-dolar mr-2">$102.05 </span>
										    </div>
										  </div>
										  <div class="view-buy d-flex justify-content-center">
										    <div class="btn-view-buy mr-2">
										      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
										    </div>
										    <div class="btn-view-buy">
										      <a href="index.php" class="second btn btn-outline-info" role="button" aria-pressed="true">
										      	<i class="fa fa-shopping-cart pr-2" aria-hidden="true"></i>
										      	ADD TO CART
										      </a>
										    </div>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 mb-3">
									<div class="card my-card-product mx-sm-auto px-2 position-relative" data-aos="zoom-in-up" data-aos-duration="1000">
										<div class="trending position-absolute mt-3 ml-3">
											<a href="index.php" class="px-2 py-1 text-white bg-success">new</a>
										</div>
										<a href="index.php"><img class="card-img-top my-img-product" src="assets/images/relate-3.jpg" alt="Card image cap"></a>
										<div class="card-body">
										  <div class="name-price d-flex flex-column align-items-center">
										    <h6 class="card-title mb-0 py-2"><a class="name" href="index.php">CABLE ORGANIZER</a></h6>
										    <div class="price mb-3">
										    	<span class="price-by-dolar mr-2">$15.25</span>
										    	<del class="text-muted">$22.5</del>
										    </div>
										  </div>
										  <div class="view-buy d-flex justify-content-center">
										    <div class="btn-view-buy mr-2">
										      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
										    </div>
										    <div class="btn-view-buy">
										      <a href="index.php" class="second btn btn-outline-info" role="button" aria-pressed="true">
										      	<i class="fa fa-shopping-cart pr-2" aria-hidden="true"></i>
										      	ADD TO CART
										      </a>
										    </div>
										  </div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-12 col-lg-4 pl-5">
				<div class="row py-3" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<h5>Product Category</h5>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						 <ul class="list-group">
						  <a href="index.php" class="list-group-item our-ser">Accessories</a>
						  <a href="index.php" class="list-group-item our-ser">Components</a>
						  <a href="index.php" class="list-group-item our-ser">Storage</a>
						  <a href="index.php" class="list-group-item our-ser">Tablet</a>
						  <a href="index.php" class="list-group-item our-ser">Mouse</a>
						</ul>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<div class="border-break my-5"></div>
					</div>
				</div> 

				<div class="row mt-5">
					<div class="col-12">
						<h5 class="font-weight-bold mb-4">Top Rated Products</h5>
						<div class="row pb-3">
							<div class="col-4">
								<a href="index.php">
									<img src="assets/images/shop-1.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="index.php">GAMERS MOUSE</a></h6>
								  <p class="card-text text-muted type-pro mb-0">mouse</p>
								  <span class="price-by-dolar" style="font-size: 120%;">$45.05</span>
								</div>
							</div>
						</div>
						<div class="row pb-3">
							<div class="col-4">
								<a href="index.php">
									<img src="assets/images/shop-2.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="index.php">USB 3.0 HUB</a></h6>
								  <p class="card-text text-muted type-pro mb-0">accessories</p>
								  <span class="price-by-dolar" style="font-size: 120%;">$67.05</span>
								</div>
							</div>
						</div>
						<div class="row pb-3">
							<div class="col-4">
								<a href="index.php">
									<img src="assets/images/shop-3.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="index.php">LAPTOP POWER ADAPTER</a></h6>
								  <p class="card-text text-muted type-pro mb-0">accessories</p>
								  <span class="price-by-dolar" style="font-size: 120%;">$55.05</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<div class="border-break my-5"></div>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12 p-4 contact-with-us">
						<h5 class="text-uppercase pt-3">FREE CONSULTATION</h5>
						<p class="text-muted">Get answers and advice from people you want it from.</p>
						<div class="d-flex justify-content-end">
							<div class="py-3 text-center">
								<a href="index.php" class="btn btn-lg btn-contact text-uppercase" role="button" aria-pressed="true">Contact us</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<div class="border-break my-5"></div>
					</div>
				</div> 
				<div class="row">
					<div class="col-12">
						<div class="card my-card-product1 mx-sm-auto px-2" data-aos="zoom-in-up" data-aos-duration="1000">
							<a href="index.php"><img class="card-img-top my-img-product" src="assets/images/shop-5.jpg" alt="Card image cap"></a>
							<div class="card-body">
							  <div class="name-price d-flex justify-content-between">
							    <h6 class="card-title mb-0 py-2"><a class="name" href="index.php">128GB SSD M.2</a></h6>
							    <span class="price-by-dolar">$45.05</span>
							  </div>
							  <p class="card-text text-muted type-pro">storage</p>
							  <div class="view-buy d-flex justify-content-end">
							    <div class="btn-view-buy mr-2">
							      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
							    </div>
							    <div class="btn-view-buy">
							      <a href="index.php" class="second btn btn-outline-info" role="button" aria-pressed="true">
							      	<i class="fa fa-shopping-cart pr-2" aria-hidden="true"></i>BUY
							      </a>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>	 	
			</div>
		</div>
	</div>						
	<!-- end shop -->

	<!-- end container -->

	<!--start footer -->
	<div class="footer">
		<div class="container text-left pt-5">
			<div class="row pb-5 top-footer">
				<div class="col-lg-3">
					<div class="footer-logo">
						<img src="assets/images/brand.png" alt="this is logo">
					</div>
					<p class="text-white pl-2">Best computer is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-8 sm-push-1">
					<div class="row pt-2 footer-center">
						<div class="col-sm-4">
							<div class="footer-title pb-3 pt-2 text-white">ADDITIONAL LINKS</div>
							<ul class="list-link">
								<li><a href="index.php">Home</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact-us.php">Contact us</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<div class="footer-title pb-3 pt-2 text-white">SERVICES</div>
							<ul class="list-link">
								<li><a href="index.php">Data recovery</a></li>
								<li><a href="index.php">Computer repair</a></li>
								<li><a href="index.php">Mobile service</a></li>
								<li><a href="index.php">Network Solutions</a></li>
								<li><a href="index.php">Technical support</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<div class="footer-title pb-3 pt-2 text-white">SOCIALS</div>
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

			<div class="row text-center py-3">
				<div class="col-12 text-white">
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
<script src="assets/js/shop-item.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>
    AOS.init();
 </script>
</body>
</html>