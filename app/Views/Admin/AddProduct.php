<section role="main" class="content-body content-body-modern mt-0">
	<header class="page-header page-header-left-inline-breadcrumb">
		<h2 class="font-weight-bold text-6">Product Name</h2>
		<div class="right-wrapper">
			<ol class="breadcrumbs">
				<li><span>Home</span></li>
				<li><span>eCommerce</span></li>
				<li><span>Products</span></li>
			</ol>
			
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
			<form class="ecommerce-form action-buttons-fixed" action="<?php echo site_url('Admin/AddProduct/save') ;?>" enctype='multipart/form-data' method="post">
				<div class="row">
					<div class="col">
						<!-- debut - general info -->
						<section class="card card-modern card-big-info">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2-5 col-xl-1-5">
										<i class="card-big-info-icon bx bx-box"></i>
										<h2 class="card-big-info-title">Informations générales</h2>
										<p class="card-big-info-desc">Ajoutez ici la description du produit avec tous les détails et informations nécessaires.</p>
									</div>
									<div class="col-lg-3-5 col-xl-4-5">
										<div class="form-group row align-items-center">
											<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Nom Produit </label>
											<div class="col-lg-7 col-xl-6">
												<input type="text" class="form-control form-control-modern" name="productName" value="" required />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Description Produit </label>
											<div class="col-lg-7 col-xl-6">
												<textarea class="form-control form-control-modern" name="productDescription" rows="6"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--  fin  - general info -->
					</div>
				</div>
				<div class="row">
					<div class="col">
						<!-- debut - ajout photo -->
						<section class="card card-modern card-big-info">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2-5 col-xl-1-5">
										<i class="card-big-info-icon bx bx-camera"></i>
										<h2 class="card-big-info-title">Image du produit</h2>
										<p class="card-big-info-desc">Téléchargez votre image de produit. Vous pouvez ajouter plusieurs images</p>
									</div>
									<div class="col-lg-3-5 col-xl-4-5">
										<div class="form-group row align-items-center">
											<div class="col">
												<div id="dropzone-form-image" class="form-group row">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Photo </label>
													<input type="file" name="file" id="file">												
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!--  fin  - ajout photo -->
						
					</div>
				</div>
				<div class="row">
					<div class="col">
						<section class="card card-modern card-big-info">
							<div class="card-body">
								<div class="tabs-modern row" style="min-height: 490px;">
									<div class="col-lg-2-5 col-xl-1-5">
										<div class="nav flex-column"   id="tab" role="tablist" 	aria-orientation="vertical">
								      		<a class="nav-link active" id="price-tab" 			data-toggle="pill" href="#price" 			role="tab" 		aria-controls="price" 			aria-selected="true" >Prix</a>
								      		<a class="nav-link" 	   id="inventory-tab" 		data-toggle="pill" href="#inventory" 		role="tab" 		aria-controls="inventory" 		aria-selected="false">Inventaire</a>
								      		<a class="nav-link" 	   id="shipping-tab" 		data-toggle="pill" href="#shipping" 		role="tab" 		aria-controls="shipping" 		aria-selected="false">Expédition</a>
								      		<a class="nav-link" 	   id="linked-products-tab" data-toggle="pill" href="#linked-products" 	role="tab" 		aria-controls="linked-products" aria-selected="false">Produits liés</a>
								      		<a class="nav-link" 	   id="attributes-tab" 		data-toggle="pill" href="#attributes" 		role="tab" 		aria-controls="attributes"							 >Attributs</a>
								      		<a class="nav-link" 	   id="advanced-tab" 		data-toggle="pill" href="#advanced" 		role="tab" 		aria-controls="advanced"							 >Avancée</a>
								    	</div>
									</div>
									<div class="col-lg-3-5 col-xl-4-5">
										<div class="tab-content" id="tabContent">
											<!-- debut - prix -->
								      		<div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="price-tab">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Prix ​​habituel (€)</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="regularPrice" value="" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Prix ​​de vente (€)</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="salePrice" value="" />
													</div>
												</div>
								      		</div>
											<!--  fin  - prix -->
											<!-- debut - inventaire -->
								      		<div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Gérer le stock?</label>
													<div class="col-lg-7 col-xl-6">
														<div class="checkbox">
															<label class="my-2">
																<input type="checkbox" value="">
																Activer la gestion des stocks au niveau des produits
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Stock Status</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="stockStatus">
															<option value="in-stock" selected>En stock</option>
															<option value="out-of-stock">Rupture de stock</option>
															<option value="on-backorder">En rupture de stock</option>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Sold Individually</label>
													<div class="col-lg-7 col-xl-6">
														<div class="checkbox">
															<label class="my-2">
																<input type="checkbox" value="">
																Activez cette option pour n'autoriser qu'un seul de ces articles à être acheté en une seule commande
															</label>
														</div>
													</div>
												</div>
								      		</div>
											<!--  fin  - inventaire -->
											<!-- debut - expedition -->
								      		<div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Poids (kg)</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="weight" value="" />
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Dimensions (in)</label>
													<div class="col-lg-7 col-xl-6">
														<div class="row">
															<div class="col-xl-4 mb-3 mb-xl-0">
																<input type="text" class="form-control form-control-modern" name="dimensionsLength" value="" placeholder="Longueur" />
															</div>
															<div class="col-xl-4 mb-3 mb-xl-0">
																<input type="text" class="form-control form-control-modern" name="dimensionsWidth" value="" placeholder="Largeur" />
															</div>
															<div class="col-xl-4">
																<input type="text" class="form-control form-control-modern" name="dimensionsHeight" value="" placeholder="Hauteur" />
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Classe de la livraison</label>
													<div class="col-lg-7 col-xl-6">
														<select class="form-control form-control-modern" name="shippingclass">
															<option value="in-stock" selected>Aucune classe d'expédition</option>
															<option value="out-of-stock">International</option>
															<option value="on-backorder">National</option>
														</select>
													</div>
												</div>
								      		</div>
											<!--  fin  - expedition -->
											<!-- debut - produit liés -->
								      		<div class="tab-pane fade" id="linked-products" role="tabpanel" aria-labelledby="linked-products-tab">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Categorie</label>
													<div class="col-lg-7 col-xl-6">
														<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="Categories" 		data-plugin-options='{ "placeholder": "Search for a product..." }'>
															<option value=""></option>
															<?php foreach ($Categories as $Categorie) {  ?>
																<option value="<?php echo $Categorie['category_id']; 			?>" ><?php echo $Categorie['category_name'];			?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Sous-Categorie</label>
													<div class="col-lg-7 col-xl-6">
														<select multiple data-plugin-selectTwo class="form-control form-control-modern" name="SousCategories" 	data-plugin-options='{ "placeholder": "Search for a product..." }'>
															<option value=""></option>
															<?php foreach ($SousCategories as $SousCategorie) {  ?>
																<option value="<?php echo $SousCategorie['sous_categorie_id'];	?>" ><?php echo $SousCategorie['sous_categorie_name'];	?></option>
															<?php } ?>
														</select>
													</div>
												</div>
								      		</div>
											<!--  fin  - produit liés -->
											<!-- debut - attributs -->
											<div class="tab-pane fade" id="attributes" role="tabpanel" aria-labelledby="attributes-tab">
												<div class="ecommerce-attributes-wrapper">
													<div class="form-group row justify-content-center ecommerce-attribute-row">
														<div class="col-xl-3">
															<label class="control-label">Nom</label>
															<input type="text" class="form-control form-control-modern" name="attName" value="Size" />
															<div class="checkbox mt-3 mb-3 mb-lg-0">
																<label class="my-2">
																	<input type="checkbox" name="attVisible" value="1" checked>
																	Visible sur la page produit
																</label>
															</div>
														</div>
														<div class="col-xl-6">
															<a href="#" class="ecommerce-attribute-remove text-color-danger float-right">Supprimer</a>
															<label class="control-label">Value(s)</label>
															<textarea class="form-control form-control-modern" name="attValue" rows="4" placeholder="Enter some text, or some attributes by | separating values">Small|Medium|Big</textarea>
														</div>
													</div>
													<div class="form-group row justify-content-center ecommerce-attribute-row">
														<div class="col-xl-3">
															<label class="control-label">Nom</label>
															<input type="text" class="form-control form-control-modern" name="attName" value="Color" />
															<div class="checkbox mt-3 mb-3 mb-lg-0">
																<label class="my-2">
																	<input type="checkbox" name="attVisible" value="1" checked>
																	Visible on the product page
																</label>
															</div>
														</div>
														<div class="col-xl-6">
															<a href="#" class="ecommerce-attribute-remove text-color-danger float-right">Remove</a>
															<label class="control-label">Value(s)</label>
															<textarea class="form-control form-control-modern" name="attValue" rows="4" placeholder="Enter some text, or some attributes by | separating values">Blue|Red|Green</textarea>
														</div>
													</div>
												</div>
												<div class="row justify-content-center mt-4">
													<div class="col-xl-9 text-right">
														<a href="#" class="ecommerce-attribute-add-new btn btn-primary btn-px-4 btn-py-2">+ Add New</a>
													</div>
												</div>
								      		</div>
											<!--  fin  - attributs -->
											<!-- debut - avancée -->
											<div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
												<div class="form-group row">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Purchase Note</label>
													<div class="col-lg-7 col-xl-6">
														<textarea class="form-control form-control-modern" name="purchaseNote" rows="6"></textarea>
													</div>
												</div>
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Menu Order</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="menuOrder" value="" />
													</div>
												</div>
								      		</div>
											<!--  fin  - avancée -->
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="row action-buttons">
					<div class="col-12 col-md-auto">
						<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
							<i class="bx bx-save text-4 mr-2"></i> Save Product
						</button>
					</div>
					<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
						<a href="<?php echo base_url('/admin/ListProduct'); ?>" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
					</div>
					<div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
						<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
							<i class="bx bx-trash text-4 mr-2"></i> Delete Product
						</a>
					</div>
				</div>
			</form>
		<!-- end: page -->
	</section>
</div>
