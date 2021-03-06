<div role="main" class="main shop pb-4">

<div class="container">

	<div class="row">
		<div class="col">
			<ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
				<li class="text-transform-none mr-2">
					<a href="<?php echo base_url('panier');?>" class="text-decoration-none text-color-primary">Panier</a>
				</li>
				<li class="text-transform-none text-color-grey-lighten mr-2">
					<a href="<?php echo base_url('Verifier');?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Vérifier</a>
				</li>
				<li class="text-transform-none text-color-grey-lighten">
					<a href="<?php echo base_url('OrderComplete');?>" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Commande terminée</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row pb-4 mb-5">
		<!-- DEBUT TABLEAU PANIER -->
		<div class="col-lg-8 mb-5 mb-lg-0">
			<form action="<?php echo site_url('Admin/panier/save') ;?>" enctype='multipart/form-data' method="post">
				<div class="table-responsive">
					<table class="shop_table cart">
						<thead>
							<tr class="text-color-dark">
								<th class="product-thumbnail" width="15%">
									&nbsp;
								</th>
								<th class="product-name text-uppercase" width="30%">
									Product
								</th>
								<th class="product-price text-uppercase" width="15%">
									Price
								</th>
								<th class="product-quantity text-uppercase" width="20%">
									Quantity
								</th>
								<th class="product-subtotal text-uppercase text-right" width="20%">
									Subtotal
								</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($cards as $card) { 		?>
								<!-- DEBUT - LIST PRODUIT -->
								<tr class="cart_table_item">
									<td class="product-thumbnail">
										<div class="product-thumbnail-wrapper">
											<a href="<?php echo base_url('/panier/delete/'); ?>" class="product-thumbnail-remove" title="Remove Product">
												<i class="fas fa-times"></i>
											</a>
											<a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
												<img width="90" height="90" alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/visuel-indisponible.png'); ?>">
											</a>
										</div>
									</td>
									<td class="product-name">
										<a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none"><?php echo $card['Card_produit_id']?>photo</a>
									</td>
									<td class="product-price">
										<span class="amount font-weight-medium text-color-grey"> €59</span>
									</td>
									<td class="product-quantity">
										<div class="quantity float-none m-0">
											<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
											<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
											<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
										</div>
									</td>
									<td class="product-subtotal text-right">
										<span class="amount text-color-dark font-weight-bold text-4">$59</span>
									</td>
								</tr>
								<!--  FIN  - LIST PRODUIT -->
							<?php } ?>
							</tbody>
					</table>
				</div>
			</form>
		</div>
		
		<!-- FIN TABLEAU PANIER -->
		<div class="col-lg-4">
			<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
				<!-- 
				 	/* ***************************************************************************************************** *
				 	 * *         *         *         *         *  Total du panier  *         *         *         *         * *
				 	 * ***************************************************************************************************** */
				 	 -->
					<div class="card-body">
						<h4 class="font-weight-bold text-uppercase text-4 mb-3">Total du panier</h4>
						<table class="shop_table cart-totals mb-4">
							<tbody>
								<tr class="cart-subtotal">
									<td class="border-top-0">
										<strong class="text-color-dark">Total</strong>
									</td>
									<td class="border-top-0 text-right">
										<strong><span class="amount font-weight-medium">€431</span></strong>
									</td>
								</tr>
								<tr class="shipping">
									<td colspan="2">
										<strong class="d-block text-color-dark mb-2">Shipping</strong>

										<div class="d-flex flex-column">
											<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
												<input id="shipping_method1" type="radio" class="mr-2" name="shipping_method" value="free" checked />
												Livraison gratuite
											</label>
											<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method2">
												<input id="shipping_method2" type="radio" class="mr-2" name="shipping_method" value="local-pickup" />
												Collecte locale
											</label>
											<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method3">
												<input id="shipping_method3" type="radio" class="mr-2" name="shipping_method" value="flat-rate" />
												Tarif forfaitaire: 5,00 €
											</label>
										</div>
									</td>
								</tr>
								<tr class="total">
									<td>
										<strong class="text-color-dark text-3-5">Total</strong>
									</td>
									<td class="text-right">
										<strong class="text-color-dark"><span class="amount text-color-dark text-5">€431</span></strong>
									</td>
								</tr>
							</tbody>
						</table>
						<a href="<?php echo base_url('verifier')?>" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Passer à la caisse <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
					<!-- 
					/* ***************************************************************************************************** *
					 * *         *         *         *         *  Total du panier  *         *         *         *         * *
					 * ***************************************************************************************************** */
				-->
			</div>
		</div>
	</div>

</div>

</div>
