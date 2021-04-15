<section role="main" class="content-body content-body-modern mt-0">
	<!-- start: page -->
	<div class="row">
		<div class="col">
			<d class="card card-modern">
				<div class="card-body">
					<div class="datatables-header-footer-wrapper">
						<table class="table table-ecommerce-simple table-striped mb-0" style="min-width: 550px;">
							<thead>
								<tr>
									<th width="13%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
									<th width="18%">ID</th>
									<th width="50%">Name</th>
									<th width="10%">Delete</th>

								</tr>
							</thead>
							<tbody>
							<?php foreach ($modelSousCategorie as $sousCategorie) {	 ?>
								<tr>
									<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
									<td><a href="#"><strong><?php echo $sousCategorie['sous_categorie_id'] ?></strong>				</a></td>
									<td><a href="#"><strong><?php echo $sousCategorie['sous_categorie_name'] ?></strong>	</a></td>
									<td><a href="<?php echo base_url('admin/ListSousCategorie/delete/'.$sousCategorie['sous_categorie_id']); ?>"><strong><?php echo $sousCategorie['sous_categorie_id'] ?></strong></a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<hr class="solid mt-5 opacity-4">
						<!-- debut - bouton apply - pagination -->
						<div class="datatable-footer">
							<div class="row align-items-center justify-content-between mt-3">
								<div class="col-md-auto order-1 mb-3 mb-lg-0">
									<div class="d-flex align-items-stretch">
										<select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
											<option value="" selected>modifier</option>
											<option value="<?php echo base_url('admin/ListCategorie/delete/'.$sousCategorie['sous_categorie_id']); ?>" selected>Delete</option>
										</select>
										<a href="#" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
									</div>
								</div>
								<!-- debut : pagination -->
								<div class="col-lg-auto text-center order-3 order-lg-2">
									<div class="results-info-wrapper">
										<div class="col-lg-auto order-2 order-lg-1">
											<p class="text-center text-lg-left mb-0">Showing 1-8 of 60 results</p>
										</div>
									</div>
								</div>
								<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
									<div class="pagination-wrapper">
									<?php 
											echo $pager->links() 
										?>
									</div>
								</div>
								<!--  fin  : pagination -->
							</div>
						</div>
						<!--  fin  - bouton apply - pagination -->
						<hr class="solid mt-5 opacity-4">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: page -->
</section>
