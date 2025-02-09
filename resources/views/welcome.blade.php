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
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	<!--************************************
			Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
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
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="listar-main" class="listar-main listar-haslayout">
			<!--************************************
					Explore The City Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Recent Places</h2>
								</div>
								<div class="listar-description">
									<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium, totam rem aperiam</p>
								</div>
							</div>
						</div>
						<div id="listar-threecolumnsslider" class="listar-themeposts listar-listingvtwo listar-threecolumnsslider owl-carousel">
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv1.html"><img src="{{ asset ('adm/images/post/img-13.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv1.html">Tourist Guide</a></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-nightlife"></i>
													<span>Night Life</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv2.html"><img src="{{ asset ('adm/images/post/img-14.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv2.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-tourism"></i>
													<span>Hotel</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv1.html"><img src="{{ asset ('adm/images/post/img-15.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv1.html">Tourist Guide</a></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv2.html"><img src="{{ asset ('adm/images/post/img-13.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv2.html">Tourist Guide</a></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-nightlife"></i>
													<span>Night Life</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv1.html"><img src="{{ asset ('adm/images/post/img-14.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv1.html">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-tourism"></i>
													<span>Hotel</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
							<div class="item">
								<div class="listar-themepost listar-placespost">
									<figure class="listar-featuredimg">
										<a href="detailv2.html"><img src="{{ asset ('adm/images/post/img-15.jpg') }}" alt="image description"></a>
										<div class="listar-postcontent">
											<h3><a href="detailv2.html">Tourist Guide</a></h3>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>New York</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Explore The City Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout listar-toppaddingzero">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Recent Places</h2>
								</div>
							</div>
						</div>
						<div class="listar-categories">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Food &amp; Drinks</h3>
										<span class="listar-cateicon icon-foods"></span>
									</div>
									<ul>
										<li>
											<span>Cafe</span>
											<span>12</span>
										</li>
										<li>
											<span>Pizza Place</span>
											<span>5</span>
										</li>
										<li>
											<span>Winery</span>
											<span>45</span>
										</li>
										<li>
											<span>Restaurant</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Entertainment</h3>
										<span class="listar-cateicon icon-entertainment"></span>
									</div>
									<ul>
										<li>
											<span>Movie Theater</span>
											<span>12</span>
										</li>
										<li>
											<span>Art Gallery</span>
											<span>5</span>
										</li>
										<li>
											<span>Museum</span>
											<span>45</span>
										</li>
										<li>
											<span>Stadium</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Local Services</h3>
										<span class="listar-cateicon icon-localservice"></span>
									</div>
									<ul>
										<li>
											<span>Motor Machine</span>
											<span>12</span>
										</li>
										<li>
											<span>Car Machine</span>
											<span>5</span>
										</li>
										<li>
											<span>Car Wash Station</span>
											<span>45</span>
										</li>
										<li>
											<span>Electrician Shop</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Nightlife</h3>
										<span class="listar-cateicon icon-nightlife"></span>
									</div>
									<ul>
										<li>
											<span>Dance Floor</span>
											<span>12</span>
										</li>
										<li>
											<span>Brewery</span>
											<span>5</span>
										</li>
										<li>
											<span>Bar</span>
											<span>45</span>
										</li>
										<li>
											<span>Pubs</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Educational</h3>
										<span class="listar-cateicon icon-education"></span>
									</div>
									<ul>
										<li>
											<span>College</span>
											<span>12</span>
										</li>
										<li>
											<span>School</span>
											<span>5</span>
										</li>
										<li>
											<span>Distance Learning</span>
											<span>45</span>
										</li>
										<li>
											<span>Home Tutors</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Health &amp; Fitness</h3>
										<span class="listar-cateicon icon-healthfitness"></span>
									</div>
									<ul>
										<li>
											<span>Disease</span>
											<span>12</span>
										</li>
										<li>
											<span>Drugs</span>
											<span>5</span>
										</li>
										<li>
											<span>Fitness</span>
											<span>45</span>
										</li>
										<li>
											<span>Nutrition</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Lodging</h3>
										<span class="listar-cateicon icon-tourism"></span>
									</div>
									<ul>
										<li>
											<span>Hotels</span>
											<span>12</span>
										</li>
										<li>
											<span>Apartments</span>
											<span>5</span>
										</li>
										<li>
											<span>Guest Room</span>
											<span>45</span>
										</li>
										<li>
											<span>City Tours</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
								<div class="listar-categorybox">
									<div class="listar-categorytitle">
										<h3>Shops</h3>
										<span class="listar-cateicon icon-shopping"></span>
									</div>
									<ul>
										<li>
											<span>Bank</span>
											<span>12</span>
										</li>
										<li>
											<span>Furniture</span>
											<span>5</span>
										</li>
										<li>
											<span>Boutiques</span>
											<span>45</span>
										</li>
										<li>
											<span>Sport Equipment</span>
											<span>6</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Best Theme Video Start
			*************************************-->
			<section class="listar-ourmaingoal listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 pull-right">
							<div class="listar-videobox listar-prettyPhoto">
								<h2>Our Main Goal -<span>The Best Theme for your<br>Business Agency</span></h2>
								<a id="lister-video" class="listar-btnplay" href="https://www.youtube.com/watch?v=RhprOoSs9sk">
									<i class="icon-play3"></i>
									<span>Watch intro video<br>About Theme</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Best Theme Video End
			*************************************-->
			<!--************************************
					Explore The City Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Latest Categories</h2>
								</div>
								<div class="listar-description">
									<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium <a class="listar-bluethemecolor" href="javascript:void(0);">See All Categories</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="listar-categoriespostslider" class="listar-themeposts listar-categoryposts listar-gridslider owl-carousel">
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-07.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Food &amp; Drinks</h3>
														<h4>120 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-08.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>Night Life</h3>
														<h4>03 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-09.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Hotels</h3>
														<h4>18 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-10.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Fitness</h3>
														<h4>11 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-11.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Entertainment</h3>
														<h4>03 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="{{ asset ('adm/images/post/img-12.jpg') }}" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Shops</h3>
														<h4>20 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-07.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Food &amp; Drinks</h3>
														<h4>120 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-08.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>Night Life</h3>
														<h4>03 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-09.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Hotels</h3>
														<h4>18 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-10.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Fitness</h3>
														<h4>11 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-11.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Entertainment</h3>
														<h4>03 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-12.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Shops</h3>
														<h4>20 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-07.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Food &amp; Drinks</h3>
														<h4>120 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-08.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>Night Life</h3>
														<h4>03 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-09.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Hotels</h3>
														<h4>18 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-10.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Fitness</h3>
														<h4>11 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-11.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Entertainment</h3>
														<h4>03 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="javascript:void(0);">
												<img src="images/post/img-12.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Shops</h3>
														<h4>20 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Theme Features Start
			*************************************-->
			<section class="listar-sectionspace listar-featuresarea">
				<div class="container">
					<div class="row">
						<div class="listar-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-layers"></i></span>
									<h2>01 Choose a Category</h2>
									<div class="listar-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-map3"></i></span>
									<h2>02 Find Location</h2>
									<div class="listar-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-hotairballoon"></i></span>
									<h2>03 Go have Fun</h2>
									<div class="listar-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Theme Features End
			*************************************-->
			<!--************************************
					Spanish Resturent Start
			*************************************-->
			<section class="listar-spanishresturent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-spanishresturentbox">
								<div class="listar-spanishresturentcontent">
									<h2>Spanish Restaurant</h2>
									<div class="listar-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut Aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
									</div>
									<a class="listar-btn listar-btngreen" href="javascript:void(0);">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Spanish Resturent End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>People Feedback</h2>
								</div>
								<div class="listar-description">
									<p>What our Clients Says <a class="listar-bluethemecolor" href="javascript:void(0);">View All</a></p>
								</div>
							</div>
						</div>
						<div id="listar-testimonialslidervthree" class="listar-threecolumnsslider listar-testimonials listar-testimonialsvthree owl-carousel">
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Good Design</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Excellent Support</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Good Design</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Excellent Support</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Good Design</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Excellent Support</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
							<div class="item listar-testimonial">
								<blockquote>
									<h5>Good Design</h5>
									<q>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</q>
								</blockquote>
								<figure>
									<img src="images/author/img-04.jpg" alt="image description">
									<figcaption>
										<h3>John Doe</h3>
										<h4>Manager at GreenTech</h4>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Newsletter Start
			*************************************-->
			<section class="listar-newsletterarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Newsletter</h2>
								</div>
								<div class="listar-description">
									<p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium, totam rem aperiam</p>
								</div>
							</div>
							<div class="listar-formarea">
								<form class="listar-formtheme listar-formnewsletter">
									<fieldset>
										<input type="email" name="email" class="form-control" placeholder="Your email address">
										<button class="listar-btn listar-btngreen" type="button">Submit</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Newsletter End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="listar-footer" class="listar-footer listar-footervtwo listar-haslayout">
			<div class="listar-footeraboutarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-upperbox">
								<strong class="listar-logo"><a href="javascript:void(0);"><img src="images/logov2b.png" alt="image description"></a></strong>
								<ul class="listar-socialicons">
									<li class="listar-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
									<li class="listar-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
									<li class="listar-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									<li class="listar-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
									<li class="listar-vimeo"><a href="javascript:void(0);"><i class="fa fa-vimeo"></i></a></li>
								</ul>
								<nav class="listar-navfooter">
									<ul>
										<li><a href="javascript:void(0);">Home</a></li>
										<li><a href="javascript:void(0);">how it work</a></li>
										<li><a href="javascript:void(0);">Shop</a></li>
										<li><a href="javascript:void(0);">Packages</a></li>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<div class="listar-lowerbox">
								<div class="listar-description">
									<p>Lorem ipsum dolor sit amet, eu per legimus referrentur. Ius ne viris repudiare, nominavi sententiae eos in. Et duo salutatus consequat Lorem ipsum dolor sit amet.</p>
								</div>
								<address><strong>Address:</strong> No.200 Josecph, San Francisco <span><strong>Tel:</strong> 01-987-654-3210</span></address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="listar-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="listar-copyright">Copyright &copy; 2018 Listingstar. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Theme Modal Box Start
	*************************************-->
	<div class="modal fade listar-placequickview" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-placequickview">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
							<em> + 7890 456 133</em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
						<div class="listar-description">
							<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit Nam in mauris quis libero sodales eleifend amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus</p>
						</div>
						<ul class="listar-listfeatures">
							<li>Pets allowed</li>
							<li>Kitchen</li>
							<li>Internet</li>
							<li>Suitable for events</li>
							<li>Gym</li>
							<li>Dryer</li>
							<li>Hot tub</li>
							<li>Family/kid friendly</li>
							<li>Wireless Internet</li>
						</ul>
						<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(3 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Hotel</span>
							</a>
						</div>
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Today <span class="listar-greenthemecolor">Open Now</span> 10:00 AM - 5:00 PM</em>
							</span>
							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
										<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
										<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<a class="listar-btnshare" href="javascript:void(0);">
										<i class="icon-share3"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Theme Modal Box End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	<div id="listar-loginsingup" class="listar-loginsingup">
		<button type="button" class="listar-btnclose">x</button>
		<figure class="listar-loginsingupimg" data-vide-bg="poster: images/bgjoin.jpg" data-vide-options="position: 50% 50%"></figure>
		<div class="listar-contentarea">
			<div class="listar-themescrollbar">
				<div class="listar-logincontent">
					<div class="listar-themetabs">
						<ul class="listar-tabnavloginregistered" role="tablist">
							<li role="presentation" class="active"><a href="#listar-loging" data-toggle="tab">Log in</a></li>
							<li role="presentation"><a href="#listar-register" data-toggle="tab">Register</a></li>
						</ul>
						<div class="tab-content listar-tabcontentloginregistered">
							<div role="tabpanel" class="tab-pane active fade in" id="listar-loging">
								<form class="listar-formtheme listar-formlogin">
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-profile-male"></i>
											<input type="text" name="username" class="form-control" placeholder="Username Or Email">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-icons208"></i>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<div class="listar-checkbox">
												<input type="checkbox" name="remember" id="rememberpass2">
												<label for="rememberpass2">Remember me</label>
											</div>
											<span><a href="#">Lost your Password?</a></span>
										</div>
										<button class="listar-btn listar-btngreen">Register</button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="listar-register">
								<form class="listar-formtheme listar-formlogin">
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-profile-male"></i>
											<input type="text" name="username" class="form-control" placeholder="Username">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-icons208"></i>
											<input type="email" name="emailaddress" class="form-control" placeholder="Email Address">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-lock-stripes"></i>
											<input type="password" name="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-lock-stripes"></i>
											<input type="password" name="confirmpassword" class="form-control" placeholder="Password">
										</div>
										<button class="listar-btn listar-btngreen">login</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="listar-shareor"><span>or</span></div>
					<div class="listar-signupwith">
						<h2>Sign in With...</h2>
						<ul class="listar-signinloginwithsocialaccount">
							<li class="listar-facebook"><a href="javascript:void(0);"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
							<li class="listar-twitter"><a href="javascript:void(0);"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
							<li class="listar-googleplus"><a href="javascript:void(0);"><i class="icon-google4"></i><span>Google +</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login Singup End
	*************************************-->
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