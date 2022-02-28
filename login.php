 <!DOCTYPE html>
<html>
<head>
	<title>SignIn.com</title>
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
  <link rel="stylesheet" href="assets/css/style-signin.css">
  <link rel="stylesheet" href="assets/css/style-scroll-top.css">
</head>
<?php
	session_start();
	include_once("connect.php");

	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$re_password = md5($password);

		if($email == 'admin@gmail.com' && $password == '123'){
			header('location:admin.php');
		}else{
			 // User login
			 $sql = "SELECT * FROM Khachhang WHERE Email='$email' AND MatKhau='$re_password'";
			 $query = mysqli_query($conn, $sql);
			 $rows = mysqli_num_rows($query);
			 if ($rows > 0) {
				$row = mysqli_fetch_assoc($query);
				$_SESSION['isLogin'] = true; // da dang nhap
                $_SESSION['MSKH'] = $row['MSKH']; // mskh
				header('location: index.php');
			 } else {
				 echo "<div class='alert alert-danger notify'role='alert'>Tài khoản không tồn tại</div>";
			 }
		}
	}

?>
<body>
	<div class="loader">
		<img src="assets/images/loading-4.gif" alt="Loading...">
	</div>
	<a class="scroll-top px-2 py-1" href="#">
		<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
	</a>
	<!-- start header -->
	<?php include_once('header.php'); ?>
	<!-- end header -->
	<!-- start container -->
	<div class="contact-us  py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-3">
					<h2 class="font-weight-bold text-center" data-aos="fade-left" data-aos-duration="1000">LOG IN</h2>
					<p class="text-muted text-center pt-2" data-aos="fade-right" data-aos-duration="1000">
						Sign in to your account to discover all great features in this template.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-0 col-lg-1"></div>
				<div class="col-12 col-lg-5 mb-4" data-aos="fade-right" data-aos-duration="1000">
					<form action="#" method="POST" class="pt-1" id="form" name="submit" >
					  <div class="form-group">
					    <input type="email" name="email" class="form-control no-border" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Login or email">
					    <i class="fa fa-check-circle" aria-hidden="true"></i>
					    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
					    <small class="mess">Error message</small>
					    <small id="emailHelp" class="form-text text-muted pl-1" style="visibility: hidden;">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <input type="password" name="password" class="form-control no-border" id="exampleInputPassword1" placeholder="Password">
					    <i class="fa fa-check-circle" aria-hidden="true"></i>
					    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
					    <small class="mess">Error message</small>
					    <small id="emailHelp" class="form-text text-muted pl-1" style="visibility: hidden;">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-check d-flex justify-content-between">
					    <div>
					    	<input type="checkbox" class="form-check-input my-2" id="exampleCheck1">	
					    	<label class="form-check-label text-muted py-0" for="exampleCheck1">Keep me logged in</label>
					    </div>
					    	<a href="#">Forgot your password?</a>
					  	</div>
					  	<div class="btn-view-buy d-flex justify-content-end pt-3">
				      		<button type="submit" class="second btn-outline-info py-2 px-4" >SIGN IN</button>
				    	</div>
					</form>
				</div>
				<div class="col-12 col-lg-4" data-aos="fade-left" data-aos-duration="1000">
					<div class="row mb-3">
						<div class="col-12 d-flex justify-content-between">
							<span class="text-muted">Don't have an account?</span>
							<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span class="pl-1">Register</span></a>
						</div>
					</div>
					<div class="row">
						<div class="col-12 d-flex flex-column">
							<a href="#" class="text-center facebook mb-3"><i class="fa fa-facebook py-3" aria-hidden="true"></i><span class="pl-1">Sign In with Facebook</span></a>
							<a href="#" class="text-center twitter mb-3"><i class="fa fa-twitter py-3" aria-hidden="true"></i><span class="pl-1">Sign In with Twitter</span>
							<a href="#" class="text-center google"><i class="fa fa-google-plus py-3" aria-hidden="true"></i><span class="pl-1">Sign In with Google++</span></a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-2"></div>
			</div>		
		</div>
	</div>
	<!-- end container -->
	<!-- form contact -->
	
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
<script src="assets/js/signin.js"></script>
<script src="assets/js/scroll-top.js"></script>
<!-- Lien ket aos -->
 <script>
    AOS.init();
 </script>
</body>
</html>