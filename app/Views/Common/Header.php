<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>4 Columns Full Width  | Porto - Responsive HTML5 Template</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('app-assets/img/favicon.ico') ;?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo base_url('app-assets/img/apple-touch-icon.png') ;?>">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/bootstrap/css/bootstrap.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/fontawesome-free/css/all.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/animate/animate.compat.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/owl.carousel/assets/owl.carousel.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/magnific-popup/magnific-popup.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/bootstrap-star-rating/css/star-rating.min.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') ;?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/css/theme.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/css/theme-elements.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/css/theme-blog.css') ;?>">
		<link rel="stylesheet" href="<?php echo base_url('app-assets/css/theme-shop.css') ;?>">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo base_url('app-assets/css/skins/default.css') ;?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/css/custom.css') ;?>">

		<!-- Head Libs -->
		<script src="<?php echo base_url('app-assets/vendor/modernizr/modernizr.min.js') ;?>"></script>
        
	</head>
	<body data-plugin-page-transition>

		<div class="body">
			<div class="notice-top-bar bg-primary" data-sticky-start-at="180">
				<button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>
			</div>
            <!-- DEBUT HEADER -->
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-container container">
						<div class="header-row py-2">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="<?php echo base_url('/home') ;?>">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url('app-assets/img/logo-default-slim.png') ;?>">
										</a>
									</div>
									<div class="header-nav-features header-nav-features-no-border col-lg-5 col-xl-6 px-0 ml-0">
										<div class="header-nav-feature pr-lg-4 pr-xl-5 mr-4">
											<form role="search" action="page-search-results.html" method="get">
												<div class="search-with-select">
													<a href="#" class="mobile-search-toggle-btn mr-2" data-porto-toggle-class="open">
														<i class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
													</a>
													<div class="search-form-wrapper input-group">
													</div>
												</div>
											</form>
										</div>
									</div>
									<!-- PHONE -->
									<ul class="header-extra-info col-lg-3 col-xl-2 pl-2 pl-xl-0 d-none d-lg-block">
										<li class="d-none d-sm-inline-flex ml-0">
											<div class="header-extra-info-icon">
												<i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
											</div>
											<div class="header-extra-info-text">
												<label class="text-1 font-weight-semibold text-color-default">APPELEZ-NOUS MAINTENANT</label>
												<strong class="text-4"><a href="tel:+1234567890" class="text-color-hover-primary text-decoration-none">+596 696 33 22 11</a></strong>

											</div>
										</li>
									</ul>
                                    <!-- USER -->
									<div class="d-flex col-auto col-lg-2 pr-0 pl-0 pl-xl-3">
										<ul class="header-extra-info">
											<li class="ml-0 ml-xl-4">
												<div class="header-extra-info-icon userbox" id="userbox">
													<a href="#" data-toggle="dropdown" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-user"></i>
													</a>
													<div class="dropdown-menu">
														<!-- DEBUT - BOUCLE CONNECTION USER -->
														<?php	if ($session->get('user_id')) { ?>
															<ul class="list-unstyled">
																<li>
																	<a role="menuitem" tabindex="-1" href="<?php echo base_url('User') ;?>"><i class="bx bx-user"></i> My Profile</a>
																</li>
																<li>
																	<a role="menuitem" tabindex="-1" href="<?php echo base_url('loginregister/logout') ;?>"><i class="bx bx-log-out"></i> Logout</a>
																</li>
															</ul>
														<?php	} else { ?>
															<ul class="list-unstyled">
																<li>
																	<a role="menuitem" tabindex="-1" href="<?php echo base_url('loginregister/') ;?>"><i class="bx bx-user"></i> Connexion / Inscription</a>
																</li>
															</ul>
														<?php	} ?>
														<!--  FIN  - BOUCLE CONNECTION USER -->
													</div>

												</div>
											</li>
                                            <!-- COEUR -->
											<li class="mr-2 ml-3">
												<div class="header-extra-info-icon">
													<a href="#" class="text-decoration-none text-color-dark text-color-hover-primary text-2">
														<i class="icons icon-heart"></i>
													</a>

												</div>
											</li>
										</ul>
                                        <!-- DEBUT - PANIER -->
										<div class="header-nav-features pl-0 ml-1">
											<div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ml-2">
												<a href="#" class="header-nav-features-toggle">
													<img src="<?php echo base_url('app-assets/img/icons/icon-cart-big.svg') ;?>" height="30" alt="" class="header-nav-top-icon-img">
													<span class="cart-info">
														<span class="cart-qty">1</span>
													</span>
												</a>
												<div class="header-nav-features-dropdown" id="headerTopCartDropdown">
													<!-- miniature - panier -->	
													<ol class="mini-products-list">
														<li class="item">
															<a href="#" title="Camera X1000" class="product-image"><img src="<?php echo base_url('app-assets/img/products/product-1.jpg') ;?>" alt="Camera X1000"></a>
															<div class="product-details">
																<p class="product-name">
																	<a href="#">Camera X1000 </a>
																</p>
																<p class="qty-price">
																	 1X <span class="price">$890</span>
																</p>
																<a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
															</div>
														</li>
													</ol>
													<!-- miniature - panier -->
													<div class="totals">
														<span class="label">Total:</span>
														<span class="price-total"><span class="price">$890</span></span>
													</div>
													<div class="actions">
														<a class="btn btn-dark" href="<?php echo base_url('panier');?>">Voir le panier</a>
														<a class="btn btn-primary" href="<?php echo base_url('Verifier')?>">Vérifier</a>
													</div>
												</div>
											</div>
										</div>
                                        <!--  FIN  - PANIER -->
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
                                    <!--  -->
								</div>
							</div>
						</div>
					</div>



<!-- 
/* ***************************************************************************************************** *
 * *         *         *         *         *  MENUE  *         *         *         *         *         * *
 * ***************************************************************************************************** */
 -->
<div class="header-nav-bar header-nav-bar-top-border bg-light">
	<div class="header-container container">
		<div class="header-row">
			<div class="header-column">
				<div class="header-row justify-content-end">
					<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '105px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
						<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
							<nav class="collapse w-100">
								<ul class="nav nav-pills w-100" id="mainNav">

									<!-- DEBUT - HOME -->
									<li class="dropdown">
										<a class="dropdown-item dropdown-toggle" href="<?php echo base_url('home')?>">
											Home
										</a>
									</li>
									<!--  FIN  - HOME -->
									<!-- DEBUT - SHOP -->
									<li class="dropdown">
										<a class="dropdown-item dropdown-toggle active" href="#">
											Shop
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="<?php echo base_url('ListProduct')?>"	>Shop</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('LoginRegister'); ?>">Login</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Panier'); ?>"		>Cart</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('verifier'); ?>"		>Checkout</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('OrderComplete'); ?>">Order Complete</a></li>
										</ul>
									</li>
									<!--  FIN  - SHOP -->
									<!-- DEBUT - PAGES -->
									<li class="dropdown">
										<a class="dropdown-item dropdown-toggle" href="#">
											Pages
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Contact Us</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Contact Us - Advanced</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Contact Us - Basic</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Contact Us - Recaptcha</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">About Us</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">About Us - Advanced</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">About Us - Basic</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">About Me</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Layouts</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left and Right Sidebars</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Sticky Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Secondary Navbar</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Extra</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">404 Error</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">500 Error</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Coming Soon</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Maintenance Mode</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Search Results</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Sitemap</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Team</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Team - Advanced</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Team - Basic</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Services</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Services - Version 1</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Services - Version 2</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Services - Version 3</a></li>
												</ul>
											</li>
											<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Custom Header</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Careers</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">FAQ</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('LoginRegister'); ?>">Login / Register</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('User'); ?>">User Profile</a></li>
										</ul>
									</li>
									<!--  FIN  - PAGES -->
									<!-- DEBUT - BLOG -->
									<li class="dropdown">
										<a class="dropdown-item dropdown-toggle" href="#">
											Blog
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Large Image</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left and Right Sidebar</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Medium Image</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Grid</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">4 Columns</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">3 Columns</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">No Margins</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">No Margins Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left and Right Sidebar</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Masonry</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">4 Columns</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">3 Columns</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">No Margins</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">No Margins Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Timeline</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Single Post</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Slider Gallery</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Image Gallery</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Embedded Video</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">HTML5 Video</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Blockquote</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Link</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Embedded Audio</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Small Image</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Left Sidebar</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Right Sidebar </a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>	">Left and Right Sidebar</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="dropdown-item" href="#">Post Comments</a>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Default</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Facebook Comments</a></li>
													<li><a class="dropdown-item" href="<?php echo base_url('Error_production'); ?>">Disqus Comments</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<!--  FIN  - BLOG -->

								</ul>
							</nav>
						</div>
						<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
							<i class="fas fa-bars"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 
/* ***************************************************************************************************** *
 * *         *         *         *         *  MENUE  *         *         *         *         *         * *
 * ***************************************************************************************************** */
 -->
	 </div>
			</header>
            <!-- FIN HEADER -->

