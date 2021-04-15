			<section role="main" class="content-body content-body-modern mt-0">
				<header class="page-header page-header-left-inline-breadcrumb">
					<h2 class="font-weight-bold text-6">liste des commandes</h2>
					<div class="right-wrapper">
						<ol class="breadcrumbs">
							<li><span>Home</span></li>
							<li><span>eCommerce</span></li>
							<li><span>liste des commandes</span></li>
						</ol>
				
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
					</div>
				</header>
				<!-- start: page -->
				<div class="row">
					<div class="col">
						<div class="card card-modern">
							<div class="card-body">


								<div class="datatables-header-footer-wrapper">
									<!-- fin - filtre -->
									<div class="datatable-header">
										<div class="row align-items-center mb-3">
											<div class="col-12 col-lg-auto mb-3 mb-lg-0">
												<a href="ecommerce-orders-detail.html" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">+ ajouter des commandes</a>
											</div>
											<div class="col-8 col-lg-auto ml-auto mb-3 mb-lg-0">
												<div class="d-flex align-items-lg-center flex-column flex-lg-row">
													<label class="ws-nowrap mr-3 mb-0">Filter By:</label>
													<select class="form-control select-style-1 filter-by" name="filter-by">
														<option value="all" selected>All</option>
														<option value="1">ID</option>
														<option value="2">Customer Name</option>
														<option value="3">Date</option>
														<option value="4">Total</option>
														<option value="5">Status</option>
													</select>
												</div>
											</div>
											<div class="col-4 col-lg-auto pl-lg-1 mb-3 mb-lg-0">
												<div class="d-flex align-items-lg-center flex-column flex-lg-row">
													<label class="ws-nowrap mr-3 mb-0">Show:</label>
													<select class="form-control select-style-1 results-per-page" name="results-per-page">
														<option value="12" selected>12</option>
														<option value="24">24</option>
														<option value="36">36</option>
														<option value="100">100</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-lg-auto pl-lg-1">
												<div class="search search-style-1 search-style-1-lg mx-lg-auto">
													<div class="input-group">
														<input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
														<span class="input-group-append">
															<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- fin - filtre -->

									<!-- 
										/* ***************************************************************************************************** *
										* *         *         *         *         * debut *  table  *         *         *         *         * *
										* ***************************************************************************************************** */
									-->
									<table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 640px;">
										<thead>
											<tr>
												<th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
												<th width="8%">ID</th>
												<th width="28%">Customer Name</th>
												<th width="18%">Date</th>
												<th width="18%">Total</th>
												<th width="15%">Status</th>
											</tr>
										</thead>
										<!-- debut - corps tableaux -->
										<tbody>
											<?php	foreach ($variable as $value) {		?>
													<tr>
														<td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
														<td><a href="ecommerce-orders-detail.html"><strong>191</strong></a></td>
														<td><a href="ecommerce-orders-detail.html"><strong>Customer Name Example</strong></a></td>
														<td>Nov 21, 2019</td>
														<td>$200</td>
														<td><span class="ecommerce-status on-hold">On Hold</span></td>
													</tr>
												<?php	};
											?>
										</tbody>
										<!-- debut - corps tableaux -->
									</table>
									<!-- 
									/* ***************************************************************************************************** *
									 * *         *         *         *         *   fin   *  table  *         *         *         *         * *
									 * ***************************************************************************************************** */
									 -->
									<hr class="solid mt-5 opacity-4">
									<!-- debut - bouton apply - pagination -->
									<div class="datatable-footer">
										<div class="row align-items-center justify-content-between mt-3">
											<div class="col-md-auto order-1 mb-3 mb-lg-0">
												<div class="d-flex align-items-stretch">
													<select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
														<option value="" selected>Bulk Actions</option>
														<option value="delete">Delete</option>
													</select>
													<a href="ecommerce-orders-detail.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
												</div>
											</div>
											<div class="col-lg-auto text-center order-3 order-lg-2">
												<div class="results-info-wrapper"></div>
											</div>
											<div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
												<div class="pagination-wrapper"></div>
											</div>
										</div>
									</div>
									<!--  fin  - bouton apply - pagination -->

								</div>


							</div>
						</div>
					</div>
				</div>
				<!-- end: page -->
			</section>
		</div>

		<aside id="sidebar-right" class="sidebar-right">
			<div class="nano">
				<div class="nano-content">
					<a href="#" class="mobile-close d-md-none">
						Collapse <i class="fas fa-chevron-right"></i>
					</a>
		
					<div class="sidebar-right-wrapper">
		
						<div class="sidebar-widget widget-calendar">
							<h6>Upcoming Tasks</h6>
							<div data-plugin-datepicker data-plugin-skin="dark"></div>
		
							<ul>
								<li>
									<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
									<span>Company Meeting</span>
								</li>
							</ul>
						</div>
		
						<div class="sidebar-widget widget-friends">
							<h6>Friends</h6>
							<ul>
								<li class="status-online">
									<figure class="profile-picture">
										<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-online">
									<figure class="profile-picture">
										<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-offline">
									<figure class="profile-picture">
										<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-offline">
									<figure class="profile-picture">
										<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
							</ul>
						</div>
		
					</div>
				</div>
			</div>
		</aside>

	</section>

