<section role="main" class="content-body content-body-modern mt-0">
	<header class="page-header page-header-left-inline-breadcrumb">
		<h2 class="font-weight-bold text-6">Nom de catégorie</h2>
		<div class="right-wrapper">
			<ol class="breadcrumbs">
				<li><span>Home</span></li>
				<li><span>eCommerce</span></li>
				<li><span>Categories</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<form class="ecommerce-form action-buttons-fixed" action="AddCategorie/save" method="post">
		<div class="row">
			<div class="col">
				<section class="card card-modern card-big-info">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-2-5 col-xl-1-5">
								<i class="card-big-info-icon bx bx-camera"></i>
								<h2 class="card-big-info-title">Image de la catégorie</h2>
								<p class="card-big-info-desc">Téléchargez l'image de votre catégorie</p>
							</div>
							<div class="col-lg-3-5 col-xl-4-5">
								<div class="form-group row align-items-center">
									<div class="col">
										<div id="dropzone-form-image" class="dropzone-modern dz-square">
											<span class="dropzone-upload-message text-center">
												<i class="bx bxs-cloud-upload"></i>
												<b class="text-color-primary">Drag/Upload</b> your image here.
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<section class="card card-modern card-big-info">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-2-5 col-xl-1-5">
								<i class="card-big-info-icon bx bx-slider"></i>
								<h2 class="card-big-info-title">Détails de la catégorie</h2>
								<p class="card-big-info-desc">Ajoutez ici la description de la catégorie avec tous les détails et informations nécessaires.</p>
							</div>
							<div class="col-lg-3-5 col-xl-4-5">
								<div class="form-group row align-items-center">
									<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Nom de catégorie</label>
									<div class="col-lg-7 col-xl-6">
										<input type="text" class="form-control form-control-modern" name="SousCategorie" value="" required />
									</div>
								</div>
								<div class="form-group row align-items-center">
									<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Catégorie Parentale</label>
									<div class="col-lg-7 col-xl-6">
										<input type="text" class="form-control form-control-modern" name="Categorie" value="" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Description</label>
									<div class="col-lg-7 col-xl-6">
										<textarea class="form-control form-control-modern" name="CategoryDescription" rows="6"></textarea>
									</div>
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
					<i class="bx bx-save text-4 mr-2"></i> Enregistrer la catégorie
				</button>
			</div>
			<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
				<a href="ecommerce-category-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Annuler</a>
			</div>
			<div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
				<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
					<i class="bx bx-trash text-4 mr-2"></i> Supprimer la catégorie
				</a>
			</div>
		</div>
	</form>
	<!-- end: page -->
</section>
