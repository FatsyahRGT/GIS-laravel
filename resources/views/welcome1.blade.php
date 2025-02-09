<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Geographic Information System</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" href="{{ asset ('adm/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/bootstrap-slider.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/morris.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/YouTubePopUp.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/auto-complete.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/jquery.navhideshow.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/style.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/colorv2.css') }}">
	<link rel="stylesheet" href="{{ asset ('adm/css/responsive.css') }}">
	<script src="{{ asset ('adm/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script> 
</head>
<body class="listar-home listar-hometwo">
	
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	
	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="listar-header" class="listar-header listar-headervtwo listar-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<strong class="listar-logo"><a href="index.html"><img src="{{ asset ('adm/images/logov2.png') }}" alt="company logo here"></a></strong>
						<nav class="listar-addnav">
							<ul>
								<li>
									<a id="listar-btnsignin" class="listar-btn listar-btnblue" href="#listar-loginsingup">
										<i class="icon-smiling-face"></i>
										<span>Join Now</span>
									</a>
								</li>
								<li>
									<a class="listar-btn listar-btngreen" href="dashboardaddlisting.html">
										<i class="icon-plus"></i>
										<span>Add Listing</span>
									</a>
								</li>								<li>
									<div class="dropdown listar-themedropdown">
										<a id="listar-cartdropdown" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<em>2</em>
											<i class="icon-icons240"></i>
										</a>
										<div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
											<div class="listar-cartitem">
												<figure><a href="javascript:void(0);"><img src="{{ asset ('adm/images/cart/img-01.jpg') }}" alt="image description"></a></figure>
												<div class="listar-iteminfo">
													<span>Orange Juice</span>
													<span>2 x $15</span>
													<a class="listar-btndelate" href="javascript:void(0);">X</a>
												</div>
											</div>
											<div class="listar-cartitem">
												<figure><a href="javascript:void(0);"><img src="{{ asset ('adm/images/cart/img-01.jpg') }}" alt="image description"></a></figure>
												<div class="listar-iteminfo">
													<span>Orange Juice</span>
													<span>2 x $15</span>
													<a class="listar-btndelate" href="javascript:void(0);">X</a>
												</div>
											</div>
											<div class="listar-cartitem listar-totalarea">
												<span>Order Total:</span>
												<span>$60.00</span>
											</div>
											<a class="listar-btn listar-btngreen listar-btn-lg" href="javascript:void(0);">View Bag &amp; Checkout</a>
										</div>
									</div>
								</li>
							</ul>
						</nav>
						<nav id="listar-nav" class="listar-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
								<ul>
									<li class="menu-item-has-children current-menu-item">
										<a href="javascript:void(0);">Home</a>
										<ul class="sub-menu">
											<li><a href="index.html">Home v 1</a></li>
											<li class="current-menu-item"><a href="indexv2.html">Home v 2</a></li>
											<li><a href="indexv3.html">Home v 3</a></li>
											<li><a href="indexv4.html">Home v 4</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">Explore</a>
										<ul class="sub-menu">
											<li><a href="listingvlist.html">All Listings</a></li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Food</a>
												<ul class="sub-menu">
													<li><a href="listingv1.html">Cafe</a></li>
													<li><a href="listingv2.html">Restaurant</a></li>
													<li><a href="listingv1.html">Dinner</a></li>
													<li><a href="listingv2.html">Pizza Place</a></li>
													<li><a href="listingv1.html">Italian</a></li>
													<li><a href="listingv2.html">Bakeries</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Entertainment</a>
												<ul class="sub-menu">
													<li><a href="listingv1.html">Art &amp; Design</a></li>
													<li><a href="listingv2.html">Movie Theater</a></li>
													<li><a href="listingv1.html">Theme Parks</a></li>
													<li><a href="listingv2.html">Music Life</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Educational</a>
												<ul class="sub-menu">
													<li><a href="listingv1.html">School</a></li>
													<li><a href="listingv2.html">College</a></li>
													<li><a href="listingv1.html">University</a></li>
													<li><a href="listingv2.html">Short Courses</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Nightlife</a>
												<ul class="sub-menu">
													<li><a href="listingv1.html">Wine Bars</a></li>
													<li><a href="listingv2.html">Pubs</a></li>
													<li><a href="listingv1.html">Nightclub</a></li>
													<li><a href="listingv2.html">Lounge</a></li>
												</ul>
											</li>
											<li class="menu-item-has-children">
												<a href="javascript:void(0);">Outdoors</a>
												<ul class="sub-menu">
													<li><a href="listingv1.html">Boutiques</a></li>
													<li><a href="listingv2.html">Fashion</a></li>
													<li><a href="listingv1.html">Furniture</a></li>
													<li><a href="listingv2.html">Sport Equipment</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">Pages</a>
										<ul class="sub-menu">
											<li><a href="howitwork.html">How It Works</a></li>
											<li><a href="services.html">Services</a></li>
											<li><a href="pkgprice.html">Packages</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
											<li><a href="contactus.html">Contact Us</a></li>
											<li><a href="404error.html">404 Error</a></li>
											<li><a href="comingsoon.html">Coming Sooon</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="javascript:void(0);">News</a>
										<ul class="sub-menu">
											<li><a href="newsv1.html">Blog Standard</a></li>
											<li><a href="newsv2.html">Blog Classic</a></li>
											<li><a href="newsv3.html">Blog sidebar</a></li>
										</ul>
									</li>
									<li><a href="dashboard.html">Dasboard</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="listar-mapbanner">
			<div id="listar-listingmap" class="listar-listingmap"></div>
			<div class="listar-mapcontrols">
				<span id="doc-mapplus"><i class="fa fa-plus"></i></span>
				<span id="doc-mapminus"><i class="fa fa-minus"></i></span>
				<span id="doc-lock"><i class="fa fa-lock"></i></span>
				<span id="listar-geolocation"><i class="fa fa-crosshairs"></i></span>
			</div>
			<div class="listar-searcharea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-bannercontent">
								<form class="listar-formtheme listar-formsearchlisting">
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-layers"></i>
											<div class="listar-select">
												<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
													<option>Ex: Food, Retail, hotel, cinema</option>
													<option class="icon-entertainment">Art &amp; Entertainment</option>
													<option class="icon-spa">Beauty &amp; Health</option>
													<option class="icon-education">Education</option>
													<option class="icon-healthfitness">Fitness</option>
													<option class="icon-tourism">Hotels</option>
													<option class="icon-localservice">Motor Mechanic</option>
													<option class="icon-nightlife">Night Life</option>
													<option class="icon-foods">Restaurant</option>
													<option class="icon-museum">Real Estate</option>
													<option class="icon-shopping">Shopping</option>
												</select>
											</div>
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-global"></i>
											<div class="listar-select listar-selectlocation">
												<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
													<option>Choose a Location</option>
													<option>Lahore</option>
													<option>Bayonne</option>
													<option>Greenville</option>
													<option>Manhattan</option>
													<option>Queens</option>
													<option>The Heights</option>
												</select>
											</div>
										</div>
										<div class="form-group listar-inputwithicon">
											<i class=""><img src="{{ asset ('adm/images/icons/icon-01.png') }}" alt="image description"></i>
											<p>Price: </p>
											<input id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
										</div>
										<button type="button" class="listar-btn listar-btngreen">Search Places</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<script src="{{ asset ('adm/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset ('adm/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset ('adm/js/mapclustering/data.json') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset ('adm/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci') }}"></script>
	<script src="{{ asset ('adm/js/mapclustering/markerclusterer.min.js') }}"></script>
	<script src="{{ asset ('adm/js/mapclustering/infobox.js') }}"></script>
	<script src="{{ asset ('adm/js/mapclustering/map.js') }}"></script>
	<script src="{{ asset ('adm/js/ResizeSensor.js.js') }}"></script>
	<script src="{{ asset ('adm/js/jquery.sticky-sidebar.js') }}"></script>
	<script src="{{ asset ('adm/js/YouTubePopUp.jquery.js') }}"></script>
	<script src="{{ asset ('adm/js/jquery.navhideshow.js') }}"></script>
	<script src="{{ asset ('adm/js/backgroundstretch.js') }}"></script>
	<script src="{{ asset ('adm/js/jquery.sticky-kit.js') }}"></script>
	<script src="{{ asset ('adm/js/bootstrap-slider.js') }}"></script>
	<script src="{{ asset ('adm/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset ('adm/js/jquery.vide.min.js') }}"></script>
	<script src="{{ asset ('adm/JS/auto-complete.js') }}"></script>
	<script src="{{ asset ('adm/js/chosen.jquery.js') }}"></script>
	<script src="{{ asset ('adm/js/scrollbar.min.js') }}"></script>
	<script src="{{ asset ('adm/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset ('adm/js/jquery.steps.js') }}"></script>
	<script src="{{ asset ('adm/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset ('adm/js/raphael-min.js') }}"></script>
	<script src="{{ asset ('adm/js/parallax.js') }}"></script>
	<script src="{{ asset ('adm/js/sortable.js') }}"></script>
	<script src="{{ asset ('adm/js/countTo.js') }}"></script>
	<script src="{{ asset ('adm/js/appear.js') }}"></script>
	<script src="{{ asset ('adm/js/gmap3.js') }}"></script>
	<script src="{{ asset ('adm/js/dev_themefunction.js') }}"></script>
</body>
</html>