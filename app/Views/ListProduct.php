		<section role="main" class="content-body content-body-modern mt-0"> <br><br>
			<!-- start: page -->
			<div class="ecommerce-form-sidebar-overlay-wrapper">
				<div class="ecommerce-form-sidebar-overlay-body">
					<a href="#" class="ecommerce-form-sidebar-overlay-close"><i class="bx bx-x"></i></a>
					<div class="scrollable h-100 loading-overlay-showing" data-plugin-scrollable>
						<div class="loading-overlay">
							<div class="bounce-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
						</div>
						<div class="ecommerce-form-sidebar-overlay-content scrollable-content px-3 pb-3 pt-1"></div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center justify-content-sm-between">
				<!-- DEBUT - ADD PRODUIT -->
				<div class="col-sm-auto text-center mb-4 mb-sm-0 mt-2 mt-sm-0">
				</div>
				<!--  FIN  - ADD PRODUIT -->
				<!-- DEBUT - RECHERCHE -->
				<div class="col-sm-auto">
					<form action="ecommerce-products-list.html" class="search search-style-1 search-style-1-light mx-auto" method="GET">
						<div class="input-group">
							<input type="text" class="form-control" name="product-term" id="product-term" placeholder="Search Product">
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<!--  FIN  - RECHERCHE -->
			</div>
			<div class="row row-gutter-sm mb-5">
				<div class="col-lg-2-5 col-xl-1-5 mb-4 mb-lg-0">
					<div class="filters-sidebar-wrapper bg-light rounded">
						<div class="card card-modern">
							<div class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
								<h4 class="card-title">CATEGORIES</h4>
							</div>
							<!-- debut - LISTE CATEGORIES -->
							<div class="card-body">
								<ul class="list list-unstyled mb-0">
									<?php foreach ($Categories as $Categorie) { 	?>												
										<li><a href="<?php echo base_url('/ListProduct/index/'.$Categorie['category_id']); ?>"><?php echo $Categorie['category_name']; ?></a></li>
									<?php	}	?>
								</ul>
							</div>
							<!--  fin  - LISTE CATEGORIES -->
						</div>
						<div class="card card-modern">
							<div class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
								<h4 class="card-title">SOUS-CATEGORIES</h4>
							</div>
							<!-- debut - LISTE SOUS-CATEGORIES -->
							<div class="card-body">
								<ul class="list list-unstyled mb-0">
									<?php foreach ($SousCategories as $SousCategorie) { 	?>												
										<li><a href="<?php echo $SousCategorie['sous_categorie_id']; ?>"><?php echo $SousCategorie['sous_categorie_name']; ?></a></li>
									<?php	}	?>
								</ul>
							</div>
							<!--  fin  - LISTE SOUS-CATEGORIES -->
						</div>
						<hr class="solid opacity-7">
						<div class="card card-modern">
							<div class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
								<h4 class="card-title">PRICE</h4>
							</div>
							<div class="card-body">
								<div class="slider-range-wrapper">
									<div class="m-md slider-primary slider-modern" data-plugin-slider data-plugin-options='{ "half_values": true, "values": [ 25, 270 ], "range": true, "max": 300 }' data-plugin-slider-output="#priceRange" data-plugin-slider-link-values-to="#priceRangeValues">
										<input id="priceRange" type="hidden" value="25, 270" />
									</div>
									<form class="d-flex align-items-center justify-content-between mb-2" method="get">
										<span id="priceRangeValues" class="price-range-values">
											Price $<span class="min price-range-low">25</span> - $<span class="max price-range-high">270</span>
										</span>
										<input type="hidden" class="hidden-price-range-low" name="priceLow" value="" />
										<input type="hidden" class="hidden-price-range-high" name="priceHigh" value="" />
										<button type="submit" class="btn btn-primary btn-h-1 font-weight-semibold rounded-0 btn-px-3 btn-py-1 text-2">FILTER</button>
									</form>
								</div>
							</div>
						</div>
						<hr class="solid opacity-7">
						<div class="card card-modern">
							<div class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
								<h4 class="card-title">SIZES</h4>
							</div>
							<div class="card-body">
								<ul class="list list-inline list-filter mb-0">
									<li class="list-inline-item">
										<a href="#">S</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="active">M</a>
									</li>
									<li class="list-inline-item">
										<a href="#">L</a>
									</li>
									<li class="list-inline-item">
										<a href="#">XL</a>
									</li>
									<li class="list-inline-item">
										<a href="#">2XL</a>
									</li>
									<li class="list-inline-item">
										<a href="#">3XL</a>
									</li>
								</ul>
							</div>
						</div>
						<hr class="solid opacity-7">
						<div class="card card-modern">
							<div class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
								</div>
								<h4 class="card-title">BRANDS</h4>
							</div>
							<div class="card-body">
								<ul class="list list-unstyled mb-0">
									<li><a href="#">Adidas <span class="float-right">18</span></a></li>
									<li><a href="#">Camel <span class="float-right">22</span></a></li>
									<li><a href="#">Samsung Galaxy <span class="float-right">05</span></a></li>
									<li><a href="#">Seiko <span class="float-right">68</span></a></li>
									<li><a href="#">Sony <span class="float-right">03</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3-5 col-xl-4-5">
					<div class="row row-gutter-sm">
					<!-- Debut Produit List -->
					<?php	
					foreach ($Products as $Product) { 	?>
						<div class="col-sm-6 col-xl-3 mb-4">
							<div class="card card-modern card-modern-alt-padding">
								<div class="card-body bg-light">
									<div class="image-frame mb-2">
										<div class="image-frame-wrapper">
											<div class="image-frame-badges-wrapper">
												<span class="badge badge-ecommerce badge-danger">27% OFF</span>
											</div>
											<a href="<?php echo base_url('/ProductFull') ;?>"><img src="<?php echo base_url('app-assets/img/products/product-1.jpg') ;?>" class="img-fluid" alt="<?php echo $Product['Product_photo_name']; ?>" /></a>
										</div>
									</div>
									<small><a href="<?php echo base_url('/ProductFull') ;?>" class="ecommerce-sidebar-link text-color-grey text-color-hover-primary text-decoration-none"><?php echo $Product['Category_id']; ?></a></small>
									<h4 class="text-4 line-height-2 mt-0 mb-2"><a href="<?php echo base_url('/ProductFull') ;?>" class="ecommerce-sidebar-link text-color-dark text-color-hover-primary text-decoration-none"><?php echo $Product['Product_name']; ?></a></h4>
									<div class="stars-wrapper">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
									<div class="product-price">
										<div class="regular-price on-sale"><?php echo $Product['Regular_price']; ?></div>
										<div class="sale-price"><?php echo $Product['Price']; ?></div>
									</div>
								</div>
							</div>
						</div>
					<?php }	?>
					<!-- Fin Produit List -->
					</div>
					<!-- debut : pagination -->
					<div class="row row-gutter-sm justify-content-between">
						<div class="col-lg-auto order-2 order-lg-1">
							<p class="text-center text-lg-left mb-0">Showing 1-8 of 60 results</p>
						</div>
						<div class="col-lg-auto order-1 order-lg-2 mb-3 mb-lg-0">
						<?php 
							echo $pager->links() 
						?>
						</div>
					</div>
					<!--  fin  : pagination -->
				</div>
			</div>
			<!-- end: page -->
		</section>
	</div>
</section>