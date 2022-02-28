<div class="header">
		<div class="top-header bottom-separator	bg-transparent d-none d-sm-block">
			<!-- start header container -->
			<div class="top-h">
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
					<div class="col">
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
						        <a class="nav-link" href="index.php"><span class="text-dark">Home</span></a>
						      </li>
							  <li class="nav-item nav-link">
						        <a class="nav-link" href="contact-us.php"><span class="text-dark">Contact us</span></a>
						      </li>
						      
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="shop.php"><span class="text-dark">Shop</span></a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="services.php"><span class="text-dark">Laptop</span></a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="index.php"><span class="text-dark">Projects</span></a>
						      </li>
						      <li class="nav-item nav-link">
						        <a class="nav-link" href="blog.php"><span class="text-dark">Blog</span></a>
						      </li>
								<?php if(isset($_SESSION['isLogin'])){ ?>
									<li class="nav-item nav-link dropdown">
										<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="text-dark">Personal</span>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1010;">
										<a class="dropdown-item" href="logout.php"><span class="text-secondary">LogOut</span></a>
										<a class="dropdown-item" href="thanhtoan.php"><span class="text-secondary">Bill</span></a>
										</div>
									</li>
								<?php }else{ ?>
									<li class="nav-item nav-link dropdown">
										<a class="nav-link" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="text-dark">Pages</span>
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1010;">
										<a class="dropdown-item" href="login.php"><span class="text-secondary">Login</span></a>
										<a class="dropdown-item" href="register.php"><span class="text-secondary">Register</span></a>
										</div>
									</li>
								<?php } ?>
						      <li class="nav-item nav-link">
						      	<a href="index.php" class="nav-link">
						      		<i class="fa fa-search text-dark" aria-hidden="true"></i>
						      	</a>
						      </li>
						      <li class="nav-item nav-link">
						      	<a href="giohang.php" class="nav-link">
						      		<i class="fa fa-shopping-cart text-dark" aria-hidden="true"></i>
						      	</a>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>
				</div>
				<!-- end main header -->
				</div>
			</div>
			<!-- end header container -->

			<!-- start slider -->
				<div class="bg-blog position-relative mb-5">
					<div class="container" style="height: 100%;">
						<div class="row d-flex" style="height: 100%;">
							<div class="col-12 align-self-center py-5" style="z-index: 1001;">
								<!-- <h2 class="font-weight-bold text-white" data-aos="fade-down" data-aos-duration="1000">SHOP</h2> -->
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-12 position-absolute" style="z-index: 1001; bottom: 10px; width: 50%;" data-aos="fade-up" data-aos-duration="1000">
								<a href="index.php" style="text-decoration: none;">Home</a>
								<span style="color: rgb(41, 171, 226);"> <b>></b> Shop</span>
							</div> -->
						</div>
					</div>
					<div class="theme-back"></div>
				</div>	
			<!-- end slider -->

		</div>
	</div>