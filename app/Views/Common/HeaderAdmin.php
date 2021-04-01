<!doctype html>
<html class="modern fixed has-top-menu has-left-sidebar-half" data-style-switcher-options="{'changeLogo': false}">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" 	 content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" 	 content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" 	 content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700,800,900" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/bootstrap/css/bootstrap.css') ;?>" />
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/animate/animate.compat.css') ;?>">

		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/font-awesome/css/all.min.css') ;?>" />
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/boxicons/css/boxicons.min.css') ;?>" />
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/magnific-popup/magnific-popup.css') ;?>" />
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/bootstrap-datepicker/css/bootstrap-datepicker3.css') ;?>" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/morris/morris.css') ;?>" />
		<link rel="stylesheet" href="<?php echo base_url('app-assets/vendorAdmin/datatables/media/css/dataTables.bootstrap4.css') ;?>" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/cssAdmin/theme.css') ;?>" />


		<!-- Theme Layout -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/cssAdmin/layouts/modern.css') ;?>" />
		<!--(remove-empty-lines-end)-->



		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('app-assets/cssAdmin/custom.css') ;?>">

		<!-- Head Libs -->
		<script src="<?php echo base_url('app-assets/vendorAdmin/modernizr/modernizr.js') ;?>"></script>
		<script src="<?php echo base_url('app-assets/masterAdmin/style-switcher/style.switcher.localstorage.js') ;?>"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header header-nav-menu header-nav-links">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="<?php echo base_url('app-assets/img/logo-default.png') ;?>" class="logo-image" width="90" height="24" alt="Porto Admin" />
						<!-- <img src="<?php echo base_url('app-assets/img/logo-default.png') ;?>" class="logo-image-mobile" width="90" height="41" alt="Porto Admin" /> -->
					</a>
					<button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
						<i class="fas fa-bars"></i>
					</button>
			
					<!-- start: header nav menu -->
					<div class="header-nav collapse">
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
									<li class="">
									    <a class="nav-link" href="<?php echo base_url('admin/home') ;?>">
									        Dashboard 
									    </a>    
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- end: header nav menu -->
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
                    <!-- DEBUT LOGIN -->
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<span class="profile-picture profile-picture-as-text">JD</span>
							<div class="profile-info profile-info-no-role" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Hi, <strong class="font-weight-semibold">John Doe</strong></span>
							</div>
							
							<i class="fas fa-chevron-down text-color-dark"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock-open-alt"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-log-out"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
                    <!-- FIN LOGIN -->
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="<?php echo base_url('admin/home') ;?>">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>
				                    <li class="nav-group-label">APPs</li>
									<!-- DEBUT E-COMMERCE -->
				                    <li class="nav-parent nav-expanded nav-active">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
				                            <span>eCommerce</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li class="nav-active">
				                                <a class="nav-link" href="<?php echo base_url('admin/home') ;?>">
				                                    - Dashboard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/ListProduct') ;?>">
				                                    - Produits Liste
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/AddProduct') ;?>">
				                                    - Produits Ajouter
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/ListCategorie') ;?>">
				                                    - Categories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/ListSousCategorie') ;?>">
				                                    - SousCategories List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/Error_production') ;?>">
				                                    - Coupons List
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/Error_production') ;?>">
				                                    - Coupons Form
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/ListOrders') ;?>">
				                                    - Liste des commandes
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/DetailOrders') ;?>">
				                                    - Détail des commandes
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/ListClient') ;?>">
				                                    - Liste des clients
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="<?php echo base_url('admin/AddClient') ;?>">
				                                    - Ajouter des clients
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
									<!-- FIN E-COMMERCE -->
									<!-- DEBUT MAIL-BOX -->
				                    <li>
										<a class="nav-link" href="mailbox-folder.html">
											<i class="bx bx-envelope" aria-hidden="true"></i>
				                            <span>Mailbox</span>
				                        </a>                        
				                    </li>
									<!-- FIN MAIL-BOX -->
									
				                    <li class="nav-group-label">Content</li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-file" aria-hidden="true"></i>
				                            <span>Pages</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="pages-signup.html">
				                                    - Sign Up
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-signin.html">
				                                    - Sign In
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-recover-password.html">
				                                    - Recover Password
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-lock-screen.html">
				                                    - Locked Screen
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-user-profile.html">
				                                    - User Profile
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-session-timeout.html">
				                                    - Session Timeout
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-calendar.html">
				                                    - Calendar
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-timeline.html">
				                                    - Timeline
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-media-gallery.html">
				                                    - Media Gallery
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-invoice.html">
				                                    - Invoice
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-blank.html">
				                                    - Blank Page
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-404.html">
				                                    - 404
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-500.html">
				                                    - 500
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-log-viewer.html">
				                                    - Log Viewer
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="pages-search-results.html">
				                                    - Search Results
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-cube" aria-hidden="true"></i>
				                            <span>UI Elements</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="ui-elements-typography.html">
				                                    - Typography
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    - Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-elusive.html">
				                                            - Elusive
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-font-awesome.html">
				                                            - Font Awesome
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-line-icons.html">
				                                            - Line Icons
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-meteocons.html">
				                                            - Meteocons
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-icons-box-icons.html">
				                                            - Box Icons
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tabs.html">
				                                    - Tabs
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-cards.html">
				                                    - Cards
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-widgets.html">
				                                    - Widgets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-portlets.html">
				                                    - Portlets
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-buttons.html">
				                                    - Buttons
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-alerts.html">
				                                    - Alerts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-notifications.html">
				                                    - Notifications
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-modals.html">
				                                    - Modals
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-lightbox.html">
				                                    - Lightbox
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-progressbars.html">
				                                    - Progress Bars
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-sliders.html">
				                                    - Sliders
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-carousels.html">
				                                    - Carousels
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-accordions.html">
				                                    - Accordions
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-toggles.html">
				                                    - Toggles
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-nestable.html">
				                                    - Nestable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-tree-view.html">
				                                    - Tree View
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-scrollable.html">
				                                    - Scrollable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-grid-system.html">
				                                    - Grid System
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-charts.html">
				                                    - Charts
				                                </a>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    - Animations <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-appear.html">
				                                            - Appear
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-animations-hover.html">
				                                            - Hover
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    - Loading <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-overlay.html">
				                                            - Overlay
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a class="nav-link" href="ui-elements-loading-progress.html">
				                                            - Progress
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="ui-elements-extra.html">
				                                    - Extra
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-map" aria-hidden="true"></i>
				                            <span>Maps</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="maps-google-maps.html">
				                                    - Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-google-maps-builder.html">
				                                    - Map Builder
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="maps-vector.html">
				                                    - Vector
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li>
				                        <a class="nav-link" href="extra-ajax-made-easy.html">
				                            <i class="bx bx-loader-circle" aria-hidden="true"></i>
				                            <span>Ajax</span>
				                        </a>                        
				                    </li>
				                    <li class="nav-group-label">CRUD</li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-detail" aria-hidden="true"></i>
				                            <span>Forms</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="forms-basic.html">
				                                    - Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-advanced.html">
				                                    - Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-validation.html">
				                                    - Validation
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-layouts.html">
				                                    - Layouts
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-wizard.html">
				                                    - Wizard
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="forms-code-editor.html">
				                                    - Code Editor
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-table" aria-hidden="true"></i>
				                            <span>Tables</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="tables-basic.html">
				                                    - Basic
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-advanced.html">
				                                    - Advanced
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-responsive.html">
				                                    - Responsive
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-editable.html">
				                                    - Editable
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-ajax.html">
				                                    - Ajax
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="tables-pricing.html">
				                                    - Pricing
				                                </a>
				                            </li>
				                        </ul>
				                    </li>
				                </ul>
				            </nav>
				
				            <hr class="separator" />
				
				            <div class="sidebar-widget widget-tasks">
				                <div class="widget-header">
				                    <h6>Projects</h6>
				                </div>
				                <div class="widget-content">
				                    <ul class="list-unstyled m-0">
				                        <li><a href="#">Porto HTML5 Template</a></li>
				                        <li><a href="#">Tucson Template</a></li>
				                        <li><a href="#">Porto Admin</a></li>
				                    </ul>
				                </div>
				            </div>
				
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->
