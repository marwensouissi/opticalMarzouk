<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<style>
	.containers {
		display: flex;
		justify-content: center;
		
	}

	.list-box {
		width: 33.33%;
	}

	@media (max-width: 767px) {
		.list-box {
			width: 100%;
		}
	}
</style>
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap ">
						<!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img id="logo-img" src="assets/img/logobl.png" style="width: 76%">
                            </a>
                        </div>
                        
                        <script>
                            function updateLogo() {
                                var logoImg = document.getElementById('logo-img');
                                var screenWidth = window.innerWidth;
                        
                                // Check if the screen width is less than or equal to a certain value (e.g., for phone resolution)
                                if (screenWidth <= 993) {
                                    logoImg.src = 'assets/img/logowhite.png';
                                } else {
                                    logoImg.src = 'assets/img/logobl.png';
                                }
                            }
                        
                            // Call the function initially and add an event listener to handle window resizing
                            updateLogo();
                            window.addEventListener('resize', updateLogo);
                        </script>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
									<ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li>
								<li><a href="news.html">News</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							 <p class="subtitle" style="margin-left: -64px;margin-top: -91px;">bienvenue </p> 
							{{-- <h1>Optical Marzouk </h1> --}}
							<div class="hero-btns">
								{{-- <a href="contact.html" class="bordered-btn">Contact Us</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	{{-- <div class="list-section pt-80 pb-80">
		<div class="container containers ml-32" style="margin-right:4% ">
			<div class="list-box d-inline">
				<div class="list-icon col-lg-4">
					<div class="mr-2"> <i class="fas fa-shipping-fast"></i> </div>
					<span class="content d-inline ">
						<h3 class="h3-con"><span class="alone">Livraison</span> à Domicile</h3>
 					</span>
				</div>
			</div>


			<div class="list-box col-lg-4">
				<div class="list-icon">
					<i class="fas fa-phone-volume"></i>
				</div>
				<div class="content">
					<h3 class="ml-2">24/7 Disponible</h3>
				</div>
			</div>
			<div class="list-box">
				<div class="list-icon">
					<i class="fas fa-handshake"></i>
				</div>
				<div class="content col-lg-4">
					<h3 class="ml-2">Confidentialité</h3>
				</div>
			</div>
	</div> --}}
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-56 mb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3 class="orange-text mt-5">Nos Produits</h3>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-center product" id="product1">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/opt1.jpg" alt=""></a>
                        </div>
                        <h3>Lunettes Optique </h3>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center product" id="product2">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/sol1.jpg" alt=""></a>
                        </div>
                        <h3>Lunettes Solaire</h3>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            
                <div class="col-lg-4 col-md-4 col-sm-4 text-center product" id="product3">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="assets/img/products/sol1.jpg" alt=""></a>
                        </div>
                        <h3>Montre</h3>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            </div> 
            

		</div>
	</div>
		<!-- logo carousel -->
		<div class="logo-carousel-section mt-12 mb-12 bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="logo-carousel-inner">
							<div class="single-logo-item">
								<img src="assets/img/company-logos/6.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/7.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/8.jpg" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/9.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/10.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/11.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/12.jpg" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/13.jpg" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/144.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/15.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/16.png" alt="">
							</div>
							<div class="single-logo-item">
								<img src="assets/img/company-logos/17.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end logo carousel -->
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	
                    	<img src="assets/img/im2.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Voyez la différence</span> </h3>
                    <h4> Personnalisez vos lunettes pour une vision parfaite </h4>
                    <div class="text">
                        
Personnalisez vos lunettes sur notre site en choisissant les verres adaptés à votre vue. Découvrez une expérience d'achat simplifiée, avec un ajustement parfait et un prix final transparent.

                    </div>
                    <!--Countdown Timer-->
                	<a href="cart.html" class="cart-btn mt-3 justify"><i class="fas fa-shopping-cart"></i> Consulter Les Lunettes </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 1999</p>
						<h2>We are <span class="orange-text">Fruitkha</span></h2>
						<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
						<a href="about.html" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Nos</span> Catégories</h3>
					</div>
				</div>
			</div>
{{-- Lunette sol Homme --}}
<div class="container mt-5">
	<div class="d-flex justify-content-between align-items-center">

		<h2 class="text-left small-screen-h2 ">Lunette Solaire Homme</h2>
		<button class="btn text-white mb-3 size" style="background-color: #508CA4">Afficher plus <i class="fas fa-tihn fa-eye"></i></button>	 </h2> 

	</div>


	<div id="productCarousel1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 1</h5>
								<p class="card-text">Description for Product 1.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 2</h5>
								<p class="card-text">Description for Product 2.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 3</h5>
								<p class="card-text">Description for Product 3.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 4</h5>
								<p class="card-text">Description for Product 4.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 5</h5>
								<p class="card-text">Description for Product 5.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 6</h5>
								<p class="card-text">Description for Product 6.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 7</h5>
								<p class="card-text">Description for Product 7.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="card">
							<a href="/here">
								<img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
								<div class="card-img-overlay">
									<span class="fas fa-eye fa-2x"></span>
								</div>
							</a>
							<div class="card-body">
								<h5 class="card-title">Product 8</h5>
								<p class="card-text">Description for Product 8.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#productCarousel1" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#productCarousel1" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
    <div class="container mt-5">


			<div class="d-flex justify-content-between align-items-center">

				<h2 class="text-left small-screen-h2 ">Lunette Solaire Femme</h2>
				<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
			</div>



        <div id="productCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 1</h5>
                                    <p class="card-text">Description for Product 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 2</h5>
                                    <p class="card-text">Description for Product 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 3</h5>
                                    <p class="card-text">Description for Product 3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 4</h5>
                                    <p class="card-text">Description for Product 4.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 5</h5>
                                    <p class="card-text">Description for Product 5.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 6</h5>
                                    <p class="card-text">Description for Product 6.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 7</h5>
                                    <p class="card-text">Description for Product 7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 8</h5>
                                    <p class="card-text">Description for Product 8.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

	<div class="container mt-5">

		<div class="d-flex justify-content-between align-items-center">

			<h2 class="text-left small-screen-h2 h2 text-sm">Lunette Optique Homme</h2>
			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>




        <div id="productCarousel3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 1</h5>
                                    <p class="card-text">Description for Product 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 2</h5>
                                    <p class="card-text">Description for Product 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 3</h5>
                                    <p class="card-text">Description for Product 3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 4</h5>
                                    <p class="card-text">Description for Product 4.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 5</h5>
                                    <p class="card-text">Description for Product 5.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 6</h5>
                                    <p class="card-text">Description for Product 6.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 7</h5>
                                    <p class="card-text">Description for Product 7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 8</h5>
                                    <p class="card-text">Description for Product 8.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>











	<div class="container mt-5">

		<div class="d-flex justify-content-between align-items-center">

			<h2 class="text-left small-screen-h2 ">Lunette Optique Femme</h2>
			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>


        <div id="productCarousel4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 1</h5>
                                    <p class="card-text">Description for Product 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 2</h5>
                                    <p class="card-text">Description for Product 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 3</h5>
                                    <p class="card-text">Description for Product 3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 4</h5>
                                    <p class="card-text">Description for Product 4.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 5</h5>
                                    <p class="card-text">Description for Product 5.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 6</h5>
                                    <p class="card-text">Description for Product 6.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 7</h5>
                                    <p class="card-text">Description for Product 7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 8</h5>
                                    <p class="card-text">Description for Product 8.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel4" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel4" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>







	<div class="container mt-5">

		<div class="d-flex justify-content-between align-items-center">

			<h2 class="text-left small-screen-h2 ">Lunette Optique Enfant</h2>
			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>



        <div id="productCarousel5" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 1</h5>
                                    <p class="card-text">Description for Product 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 2</h5>
                                    <p class="card-text">Description for Product 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 3</h5>
                                    <p class="card-text">Description for Product 3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 4</h5>
                                    <p class="card-text">Description for Product 4.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 5</h5>
                                    <p class="card-text">Description for Product 5.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 6</h5>
                                    <p class="card-text">Description for Product 6.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 7</h5>
                                    <p class="card-text">Description for Product 7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 8</h5>
                                    <p class="card-text">Description for Product 8.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel5" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel5" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>








	<div class="container mt-5">

		<div class="d-flex justify-content-between align-items-center">

			<h2 class="text-left small-screen-h2 ">Montres</h2>
			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>


        <div id="productCarousel7" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 1</h5>
                                    <p class="card-text">Description for Product 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 2</h5>
                                    <p class="card-text">Description for Product 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 3</h5>
                                    <p class="card-text">Description for Product 3.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 4</h5>
                                    <p class="card-text">Description for Product 4.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 5">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 5</h5>
                                    <p class="card-text">Description for Product 5.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 6">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 6</h5>
                                    <p class="card-text">Description for Product 6.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 7">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 7</h5>
                                    <p class="card-text">Description for Product 7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <a href="/here">
                                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 8">
                                    <div class="card-img-overlay">
                                        <span class="fas fa-eye fa-2x"></span>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Product 8</h5>
                                    <p class="card-text">Description for Product 8.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#productCarousel7" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel7" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>








		
			<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->



	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>


</body>
</html>