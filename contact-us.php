 <!DOCTYPE html>
<html>
<head>
	<title>Contact.com</title>
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
  <link rel="stylesheet" href="assets/css/style-contact-us.css">
  <link rel="stylesheet" href="assets/css/style-scroll-top.css">
</head>
<?php
	session_start();
	include_once('connect.php');
?>
<body>
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

	<!-- start map -->
	<div class="position-relative">
		<div class="map-address" data-aos="zoom-in-down" data-aos-duration="1000">
			<div class="mapouter" style="width: 100%;">
				<div class="gmap_canvas">
					<iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=TP%20HO%20CHI%20MINH&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					<a href="https://fmovies2.org"></a>
				</div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
			</div>
		</div>
	<!-- end map -->
		<div class="container-fluid move-info">
		<div class="row">
			<div class="col-lg-3 col-md-0"></div>
			<div class="col-lg-6 col-md-12">
				<div class="row my-con-us pt-5 px-2">
					<div class="col-md-6 col-12 d-flex flex-column mb-3">
						<h5>CONTACT US</h5>
						<span>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							Sidestate NSW 4132, Australia
						</span>
						<span>
							<i class="fa fa-phone" aria-hidden="true"></i>
							(555) 555-0312
						</span>
						<span>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							info@profix.com
						</span>
						
					</div>
					<div class="col-md-6 col-12 mb-3">
						<h5>OPENING HOURS</h5>
						<div class="d-flex justify-content-between">
							<span>Monday-Friday</span>
							<span>10:00 - 18:00</span>
						</div>
						<div class="d-flex justify-content-between">
							<span>Saturday, Sunday</span>
							<span>Closed</span>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-0"></div>
		</div>
		</div>
	</div>
	<!-- end container -->
	<!-- form contact -->
	<div class="contact-us  py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-3">
					<h2 class="font-weight-bold text-center" data-aos="fade-left" data-aos-duration="1000">REQUEST A CALLBACK</h2>
					<p class="text-muted text-center pt-2" data-aos="fade-right" data-aos-duration="1000">
						if your need personal assistance, fill the form bellow we will reply back to your asap!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>

				<div class="col-8">
					<form data-aos="fade-down" data-aos-duration="1000">
					  <div class="form-group">
					  	<input type="text" class="form-control mb-3" placeholder="Name">
					    <input type="email" class="form-control mb-3" placeholder="Email" aria-describedby="emailHelp">
					    <input type="text" class="form-control mb-3" placeholder="Subject">
					  </div>
					  <div class="form-group mb-5">
					    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
					  </div>
					  <div class="d-flex justify-content-center">
					  	<button type="submit" class="btn btn-sent text-uppercase px-5">send message</button>
					  </div>	
					</form>
				</div> 

				<div class="col-2"></div>
			</div>		
		</div>
	</div>
	<!-- form contact -->
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
								<li><a href="service">Computer repair</a></li>
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
<script src="assets/js/contact-us.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>
    AOS.init();
 </script>
</body>
</html>