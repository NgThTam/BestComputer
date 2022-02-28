<!DOCTYPE html>
<html>
<head>
	<title>Shop.com</title>
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
  <link rel="stylesheet" href="assets/css/style-shop.css">
  <link rel="stylesheet" href="assets/css/style-shop-1.css">
  <link rel="stylesheet" href="assets/css/style-scroll-top.css">
</head>
<?php
	session_start();
	include_once('connect.php');


	$sql="SELECT * FROM hanghoa";
	$query = mysqli_query($conn,$sql);
	$rows=mysqli_fetch_array($query);

?>
<body style="width: 100%;">
	<div class="loader">
		<img src="assets/images/loading-2.gif" alt="Loading ..." class="img-fluid" style="width: 150px; height: 150px;">
	</div>
	<a class="scroll-top px-2 py-1" href="#">
		<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
	</a>
	<!-- start header -->
	<?php
		include_once('header.php');
	?>
	<!-- end header -->
	<!-- start container -->

	<!-- start shop -->
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div class="row mb-3">
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
				      <label for="inputState" class="text-muted font-weight-bold">SORT BY</label>
				      <select id="inputState" class="show-pro pl-3 font-weight-bold">
				        <option selected class="font-weight-bold">Name</option>
				        <option class="font-weight-bold">Newest</option>
				        <option class="font-weight-bold">Best match</option>
				      </select>
				    </div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
				      <label for="inputState" class="text-muted font-weight-bold">SHOW</label>
				      <select id="inputState" class="show-pro pl-3 font-weight-bold">
				        <option selected class="font-weight-bold">4</option>
				        <option class="font-weight-bold">8</option>
				        <option class="font-weight-bold">10</option>
				      </select>
				    </div>
					</div>
					<div class="col-sm-12 col-md-4">
						<span class="text-muted ml-auto">Showing 9 to 16 of 20 total</span>
					</div>
				</div>
				<div class="row app">
					
						<?php 
							$sql = "SELECT * FROM hanghoa;";
							$result=mysqli_query($conn,$sql);
							$str = "'";
							while ($row=mysqli_fetch_assoc($result)) {
								echo '<div class="col-12 col-lg-6 mb-4"><div class="card my-card-product mx-sm-auto px-2 position-relative" data-aos="zoom-in-up" data-aos-duration="1000">
										<a href="#"><img class="card-img-top my-img-product" src="./assets/images/'.$row['Anhmh'].'" alt="Card image cap"></a>
										<div class="card-body">
										<div class="name-price d-flex justify-content-between">
											<h6 class="card-title mb-0 py-2"><a class="name" href="#">'.$row['TenHH'].'</a></h6>
											<span class="price-by-dolar">$'.$row['Gia'].'.00</span>
										</div>
										<p class="card-text text-muted type-pro">'.$row['Ghichu'].'</p>
										<div class="view-buy d-flex justify-content-end">
											<div class="btn-view-buy mr-2">
											<a href="#" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
											</div>
											<div class="btn-view-buy">
											<a onclick="addCart('.$str.$row['MSHH'].$str.')" class="second btn btn-outline-info" role="button" aria-pressed="true">ADD TO CART</a>
											</div>
										</div>
										</div>
										<div class="countdown-timer"></div>
										</div></div>';
							}
						?>
					
				</div>	
				<div class="row my-3">
					<div class="col-12">
						<nav aria-label="Page navigation example">
						  <ul class="pagination d-flex justify-content-center">
						    <li class="page-item">
						      <a class="page-link" href="shop.php" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						        <span class="sr-only">Previous</span>
						      </a>
						    </li>
						    <li class="page-item"><a class="page-link" href="shop.php">1</a></li>
						    <li class="page-item"><a class="page-link" href="shop.php">2</a></li>
						    <li class="page-item"><a class="page-link" href="shop.php">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="shop.php" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						        <span class="sr-only">Next</span>
						      </a>
						    </li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-4 pl-5">
				<div class="row py-3" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<h5>Product Category</h5>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						 <ul class="list-group">
						  <a href="services.php" class="list-group-item our-ser">Accessories</a>
						  <a href="services.php" class="list-group-item our-ser">Components</a>
						  <a href="services.php" class="list-group-item our-ser">Storage</a>
						  <a href="services.php" class="list-group-item our-ser">Tablet</a>
						  <a href="services.php" class="list-group-item our-ser">Mouse</a>
						</ul>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<div class="border-break my-5"></div>
					</div>
				</div> 

				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						<div class="row pb-3">
							<div class="col-12">
								<h4 class="text-dark">Filter products</h4>
								<span class="text-muted">Price</span>
							</div>
						</div>
						<div class="row">
					    <div class="col-sm-12 m-auto">
					      <div id="slider-range"></div>
					    </div>
					  </div>
					  <div class="row slider-labels d-flex justify-content-around">
					    <div class="col-xs-6 caption">
					      <strong>Min:</strong> <span id="slider-range-value1"></span>
					    </div>
					    <div class="col-xs-6 text-right caption">
					      <strong>Max:</strong> <span id="slider-range-value2"></span>
					    </div>
					  </div>
					  <div class="row">
					    <div class="col-sm-12">
					      <form>
					        <input type="hidden" name="min-value" value="">
					        <input type="hidden" name="max-value" value="">
					      </form>
					    </div>
					  </div> 
					 </div>
				</div>
				<div class="row mt-5">
					<div class="col-12">
						<h6 class="text-muted">Manufacturer</h6>
						<ul class="list-group list-group-flush manufacturer">
						  <li class="list-group-item py-1">MACBOOK <span class="text-muted">(15)</span></li>
						  <li class="list-group-item py-1">ASUS <span class="text-muted">(7)</span></li>
						  <li class="list-group-item py-1">DELL <span class="text-muted">(5)</span></li>
						  <li class="list-group-item py-1">ACER <span class="text-muted">(15)</span></li>
						</ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-12">
						<h5 class="font-weight-bold mb-4">Top Rated Products</h5>
						<div class="row pb-3">
							<div class="col-4">
								<a href="shop-item.php">
									<img src="assets/images/shop-1.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="shop-item.php">GAMERS MOUSE</a></h6>
								  <p class="card-text text-muted type-pro mb-0">mouse</p>
								  <span class="price-by-dolar" style="font-size: 120%;">$45.05</span>
								</div>
							</div>
						</div>
						<div class="row pb-3">
							<div class="col-4">
								<a href="shop-item.php">
									<img src="assets/images/shop-2.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="shop-item.php">USB 3.0 HUB</a></h6>
								  <p class="card-text text-muted type-pro mb-0">accessories</p>
								  <span class="price-by-dolar" style="font-size: 120%;">$67.05</span>
								</div>
							</div>
						</div>
						<div class="row pb-3">
							<div class="col-4">
								<a href="shop-item.php">
									<img src="assets/images/shop-3.jpg" class="img-fluid" alt="Responsive image"> 
								</a> 
							</div>
							<div class="col-8">
								<div class="name-price d-flex flex-column">
							    <h6 class="card-title mb-0 py-2"><a class="name text-dark" href="shop-item.php">LAPTOP POWER ADAPTER</a></h6>
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
								<a href="contact-us.php" class="btn btn-lg btn-contact text-uppercase" role="button" aria-pressed="true">Contact us</a>
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
						<div class="card my-card-product mx-sm-auto px-2" data-aos="zoom-in-up" data-aos-duration="1000">
							<a href="shop-item.php"><img class="card-img-top my-img-product" src="assets/images/shop-5.jpg" alt="Card image cap"></a>
							<div class="card-body">
							  <div class="name-price d-flex justify-content-between">
							    <h6 class="card-title mb-0 py-2"><a class="name" href="shop-item.php">128GB SSD M.2</a></h6>
							    <span class="price-by-dolar">$45.05</span>
							  </div>
							  <p class="card-text text-muted type-pro">storage</p>
							  <div class="view-buy d-flex justify-content-end">
							    <div class="btn-view-buy mr-2">
							      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
							    </div>
							    <div class="btn-view-buy">
							      <a href="read-more.html" class="second btn btn-outline-info" role="button" aria-pressed="true">
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
								<li><a href="services.php">Data recovery</a></li>
								<li><a href="services.php">Computer repair</a></li>
								<li><a href="services.php">Mobile service</a></li>
								<li><a href="services.php">Network Solutions</a></li>
								<li><a href="services.php">Technical support</a></li>
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
<script src="assets/js/shop.js"></script>
<script src="assets/js/shop-1.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>

	function addCart(mshh) {
		
		var xhttp = new XMLHttpRequest();
		// xhttp.onreadystatechange = function() {
		// 	if (this.readyState == 4 && this.status == 200) {
		// 	}
		// };
		alert("Đã thêm vào giỏ hàng");
		xhttp.open("GET", "addcart.php?q=" + mshh, true);
		xhttp.send();
	}
    AOS.init();
 </script>
</body>
</html>