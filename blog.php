<!DOCTYPE html>
<html>
<head>
	<title>Blog.com</title>
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
  <link rel="stylesheet" href="assets/css/style-blog.css">
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

	<!-- start blog -->
	<div class="container">
		<div class="row">
			<div class="col-8" id="at">
				<div v-for="i in listBlog1">
					<new-blog v-bind:obj="i" v-bind:key="i.id"></new-blog>
				</div>
				<div class="row">
					<div class="col-12">
						<nav aria-label="Page navigation example">
						  <ul class="pagination d-flex justify-content-center">
						    <li class="page-item">
						      <a class="page-link" href="blog.php" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						        <span class="sr-only">Previous</span>
						      </a>
						    </li>
						    <li class="page-item"><a class="page-link" href="blog.php">1</a></li>
						    <li class="page-item"><a class="page-link" href="blog.php">2</a></li>
						    <li class="page-item"><a class="page-link" href="blog.php">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="blog.php" aria-label="Next">
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
						<h5>Our service</h5>
					</div>
				</div>
				<div class="row" data-aos="fade-left" data-aos-duration="1000">
					<div class="col-12">
						 <ul class="list-group">
						  <a href="services.php" class="list-group-item our-ser">Data becup & recovery</a>
						  <a href="services.php" class="list-group-item our-ser">Repair smartphone</a>
						  <a href="services.php" class="list-group-item our-ser">Laptop & Mac upgrade</a>
						  <a href="services.php" class="list-group-item our-ser">Tablet repair</a>
						  <a href="services.php" class="list-group-item our-ser">Network solution</a>
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
						<h5 class="font-weight-bold">Categories</h5>
						<ul class="list-group list-group-flush">
						  <li class="list-group-item border-0 pl-0 pb-0"><a href="services.php" class="text-uppercase my-cate"><i class="fa fa-chevron-right pr-2" aria-hidden="true"></i><span>COMPUTER</span></a></li>
						  <li class="list-group-item border-0 pl-0 pb-0"><a href="services.php" class="text-uppercase my-cate"><i class="fa fa-chevron-right pr-2" aria-hidden="true"></i>MICRO CHIP REPAIR</a></li>
						  <li class="list-group-item border-0 pl-0 pb-0"><a href="services.php" class="text-uppercase my-cate"><i class="fa fa-chevron-right pr-2" aria-hidden="true"></i>TECHNOLOGY</a></li>
						  <li class="list-group-item border-0 pl-0 pb-0"><a href="services.php" class="text-uppercase my-cate"><i class="fa fa-chevron-right pr-2" aria-hidden="true"></i>IPHONE</a></li>
						  <li class="list-group-item border-0 pl-0 pb-0"><a href="services.php" class="text-uppercase my-cate"><i class="fa fa-chevron-right pr-2" aria-hidden="true"></i>REPLACE</a></li>
						</ul>
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
			</div>
		</div>
	</div>						
	<!-- end blog -->

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
<script src="assets/js/blog.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>
    AOS.init();
 </script>
</body>
</html>