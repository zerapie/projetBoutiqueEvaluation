<section role="main" class="content-body content-body-modern mt-0">
	<!-- start: page -->
	<div class="row">
		<div class="col">
			<d class="card card-modern">
				<div class="card-body">
					<div class="datatables-header-footer-wrapper">
						<!-- debut - tableaux -->
							<table class="table table-ecommerce-simple table-striped mb-0" style="min-width: 550px;">
								<!-- debut - tete du tableaux -->								
								<thead>
									<tr>
										<th width="13%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
										<th width="18%">ID</th>
										<th width="50%">Name</th>
										<th width="10%">Delete</th>
									</tr>
								</thead>
								<!--  fin  - tete du tableaux -->
								<!-- debut - corps du tableaux -->								
									<tbody>
										<?php foreach ($modelCategorie as $categorie) {	 ?>
											<tr>
												<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
												<td><a href="#"><strong><?php echo $categorie['category_id'] ?></strong>				</a></td>
												<td><a href="#"><strong><?php echo $categorie['category_name'] ?></strong>	</a></td>
												<td><a href="<?php echo base_url('admin/ListCategorie/delete/'.$categorie['category_id']); ?>"><strong><?php echo $categorie['category_id'] ?></strong>				</a></td>
											</tr>
										<?php } ?>
									</tbody>
								<!--  fin  - corps du tableaux -->
							</table>
						<!--   fin  - tableaux -->
						<hr class="solid mt-5 opacity-4">
						<!-- debut - bouton apply - pagination -->
						<div class="datatable-footer">
							<div class="row align-items-center justify-content-between mt-3">
								<div class="col-md-auto order-1 mb-3 mb-lg-0">
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
