@extends('master.front')

@section('welcome')

@section('title', 'OpticalMarzouk')
	<!-- search area -->

	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							 {{-- <p class="subtitle" style="margin-left: -64px;margin-top: -91px;">bienvenue </p>  --}}
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
        <!-- For large screens, the existing grid layout -->
<div class="d-none d-lg-block">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/opt1.jpg" alt=""></a>
                </div>
                <h3>Lunettes Optique</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/sol1.jpg" alt=""></a>
                </div>
                <h3>Lunettes Solaire</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 text-center">
            <div class="single-product-item">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/montr.jpg" alt=""></a>
                </div>
                <h3>Montres</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
    </div>
</div>

<!-- For small screens, use a carousel -->
<div id="productCarousel" class="carousel slide d-lg-none" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="single-product-item text-center">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/opt1.jpg" alt=""></a>
                </div>
                <h3>Lunettes Optique</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="single-product-item text-center">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/sol1.jpg" alt=""></a>
                </div>
                <h3>Lunettes Solaire</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="single-product-item text-center">
                <div class="product-image">
                    <a href="single-product.html"><img src="assets/img/products/montr.jpg" alt=""></a>
                </div>
                <h3>Montres</h3>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Voir Plus</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

            
            
        </div>
    </div>






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

    




    
		<!-- logo carousel -->
		<div class="logo-carousel-section -mt-16 mb-12 bg-white">
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

    <!-- end cart banner section -->


	<!-- end testimonail-section -->
	
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title d-flex align-items-center justify-content-center">
                        <h2 class="orange-text  mr-3" >Nos Catégories</h2>
                        <img src="assets/img/categorie.png" style="width: 4%; height: 4%; margin-bottom: 2%"  alt="">
                    </div>
                    
				</div>
			</div>
{{-- Lunette sol Homme --}}
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center prod">
        <span class="d-flex align-items-center ">
            <h2 class="text-left small-screen-h2  mb-3  ">Lunette Solaire Homme</h2>
            {{-- <img src="assets/img/lsh.png" style="width: 3%; height: 3%; margin-bottom: 2%; margin-left:1%" alt=""> --}}
        </span>
        <button class="btn text-white mb-3 size" style="background-color: #508CA4">Afficher plus <i class="fas fa-eye"></i></button>
    </div>

    <div id="productCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($lunettesSolairesHomme->chunk(4) as $chunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row carousel-items">
                        @foreach ($chunk as $lunetteSolaire)
                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="/lunettesSolaires/{{ $lunetteSolaire->id }}">
                                        <img src="{{ asset('produit/solaires/' .$lunetteSolaire->cover) }}"alt="{{ $lunetteSolaire->reference }}" loading="lazy">

                                        <div class="card-img-overlay">
                                            <span class="fas fa-eye fa-2x"></span>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $lunetteSolaire->reference }}</h5>
                                        <p class="card-text">{{ $lunetteSolaire->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
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
    <div class="d-flex justify-content-between align-items-center prod">
        <span class="d-flex align-items-center ">
            <h2 class="text-left small-screen-h2 mb-3 ">Lunette Solaire Femme</h2>
            {{-- <img src="assets/img/lsh.png" style="width: 3%; height: 3%; margin-bottom: 2%; margin-left:1%" alt=""> --}}
        </span>
        <button class="btn text-white mb-3 size" style="background-color: #508CA4">Afficher plus <i class="fas fa-eye"></i></button>
    </div>

    <div id="productCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($lunettesSolairesFemme->chunk(4) as $chunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row carousel-items">
                        @foreach ($chunk as $lunetteSolaire)
                            <div class="col-6 col-md-3">
                                <div class="card">
                                    <a href="{{ route('products.show', ['type' => 'lunettesOptiques', 'id' => $lunetteSolaire->id]) }}">
                                        <img src="{{ asset('produit/solaires/' .$lunetteSolaire->cover) }}"alt="{{ $lunetteSolaire->reference }}" loading="lazy">

                                        <div class="card-img-overlay">
                                            <span class="fas fa-eye fa-2x"></span>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $lunetteSolaire->reference }}</h5>
                                        <p class="card-text">{{ $lunetteSolaire->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
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

            <span class="d-flex align-items-center ">
                <h2 class="text-left small-screen-h2 h2 text-sm">Lunette Optique Homme</h2>
                <img src="assets/img/loh.png" style="width: 3%; height: 3%; margin-bottom: 2%; margin-left:1%"   alt="">
        
                </span>


			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>




        <div id="productCarousel3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row carousel-items">
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
                    <div class="row carousel-items">
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

            <span class="d-flex align-items-center ">
                <h2 class="text-left small-screen-h2 ">Lunette Optique Femme</h2>
                <img src="assets/img/lof.png" style="width: 4%; height: 3%; margin-bottom: 2%; margin-left:1%"   alt="">

        
                </span>


			<button class="btn text-white mb-3 " style="background-color: #508CA4">Afficher plus</button>	 </h2> 
		</div>

        <div id="productCarousel4" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row carousel-items">
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
                    <div class="row carousel-items">
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
                    <div class="row carousel-items">
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
                    <div class="row carousel-items">
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
                    <div class="row carousel-items">
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
                    <div class="row carousel-items ">
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
        </div>
    </div>
