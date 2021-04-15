				<section role="main" class="content-body content-body-modern mt-0">
					<header class="page-header page-header-left-inline-breadcrumb">
						<h2 class="font-weight-bold text-6">Order #6927 Details</h2>
						<div class="right-wrapper">
							<ol class="breadcrumbs">
								<li><span>Home</span></li>
								<li><span>eCommerce</span></li>
								<li><span>Orders</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<form class="order-details action-buttons-fixed" action="<?php echo site_url('Admin/DetailOrders/save') ;?>" enctype='multipart/form-data' method="post">
						<div class="row">
							<div class="col-xl-4 mb-4 mb-xl-0">

								<!-- DEBUT - GENERAL -->
								    <div class="card card-modern">
								    	<div class="card-header">
								    		<h2 class="card-title">General</h2>
								    	</div>
								    	<div class="card-body">
								    		<div class="form-row">
								    			<div class="form-group col mb-3">
								    				<label>Status</label>
								    				<select class="form-control form-control-modern" name="orderStatus" required>
								    					<option value="on-hold" selected>On Hold</option>
								    					<option value="pending">Pending Payment</option>
								    					<option value="processing">Processing</option>
								    					<option value="completed">Completed</option>
								    					<option value="cancelled">Cancelled</option>
								    					<option value="refunded">Refunded</option>
								    					<option value="failed">Failed</option>
								    				</select>
								    			</div>
								    		</div>
								    		<div class="form-row">
								    			<div class="form-group col mb-3">
								    				<label>Date Created</label>
								    				<div class="date-time-field">
								    					<div class="date">
								    						<input type="text" class="form-control form-control-modern" name="orderDate" value="2019-11-21" required data-plugin-datepicker data-plugin-options='{"orientation": "bottom", "format": "yyyy-mm-dd"}' />
								    					</div>
								    					<div class="time">
								    						<span class="px-2">@</span>
								    						<input type="text" class="form-control form-control-modern text-center" name="orderTimeHour" value="10" required />
								    						<span class="px-2">:</span>
								    						<input type="text" class="form-control form-control-modern text-center" name="orderTimeMin" value="28" required />
								    					</div>
								    				</div>
								    			</div>
								    		</div>
								    		<div class="form-row">
								    			<div class="form-group col mb-3">
								    				<label>Customer</label>
								    				<select class="form-control form-control-modern" name="orderCustomer" required data-plugin-selectTwo>
								    					<option value="21" selected>John Doe</option>
								    					<option value="33">Monica Doe</option>
								    					<option value="55">Robert Doe</option>
								    					<option value="60">Tim Doe</option>
								    				</select>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								<!--  FIN  - GENERAL -->

							</div>
							<div class="col-xl-8">

								<!-- DEBUT - ADDRESSES -->
								    <div class="card card-modern">
								    	<div class="card-header">
								    		<h2 class="card-title">Addresses</h2>
								    	</div>
								    	<div class="card-body">
								    		<div class="row">
								    			<div class="col-xl-auto mr-xl-5 pr-xl-5 mb-4 mb-xl-0">
								    				<h3 class="text-color-dark font-weight-bold text-4 line-height-1 mt-0 mb-3">BILLING</h3>
								    				<ul class="list list-unstyled list-item-bottom-space-0">
								    					<li>Street Name Example</li>
								    					<li>1234</li>
								    					<li>Detroit</li>
								    					<li>Michigan</li>
								    					<li>93218</li>
								    					<li>USA</li>
								    				</ul>
								    				<strong class="d-block text-color-dark">Email address:</strong>
								    				<a href="mailto:johndoe@domain.com">johndoe@domain.com</a>
								    				<strong class="d-block text-color-dark mt-3">Phone:</strong>
								    				<a href="tel:+5551234" class="text-color-dark">555-1234</a>
								    			</div>
								    			<div class="col-xl-auto pl-xl-5">
								    				<h3 class="font-weight-bold text-color-dark text-4 line-height-1 mt-0 mb-3">SHIPPING</h3>
								    				<ul class="list list-unstyled list-item-bottom-space-0">
								    					<li>Street Name Example</li>
								    					<li>1234</li>
								    					<li>Detroit</li>
								    					<li>Michigan</li>
								    					<li>93218</li>
								    					<li>USA</li>
								    				</ul>
								    				<strong class="d-block text-color-dark">Email address:</strong>
								    				<a href="mailto:johndoe@domain.com">johndoe@domain.com</a>
								    				<strong class="d-block text-color-dark mt-3">Phone:</strong>
								    				<a href="tel:+5551234" class="text-color-dark">555-1234</a>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								<!--  FIN  - ADDRESSES -->

                                </div>
						</div>
						<div class="row">
							<div class="col">
                                
								<!-- DEBUT - PRODUCTS -->
								    <div class="card card-modern">
                                        <div class="card-header">
                                            <h2 class="card-title">Products</h2>
								    	</div>
								    	<div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-ecommerce-simple table-ecommerce-simple-border-bottom table-striped mb-0" style="min-width: 380px;">
								    				<thead>
                                                        <tr>
                                                            <th width="8%" class="pl-4">ID</th>
								    						<th width="65%">Name</th>
								    						<th width="5%" class="text-right">Cost</th>
								    						<th width="7%" class="text-right">Qty</th>
								    						<th width="5%" class="text-right">Total</th>
								    					</tr>
								    				</thead>
								    				<tbody>
                                                        <tr>
                                                            <td class="pl-4"><a href="ecommerce-products-form.html"><strong>191</strong></a></td>
								    						<td><a href="ecommerce-products-form.html"><strong>Product Name Example</strong></a></td>
								    						<td class="text-right">$99</td>
								    						<td class="text-right">1</td>
								    						<td class="text-right">$99</td>
								    					</tr>
								    					<tr>
                                                            <td class="pl-4"><a href="ecommerce-products-form.html"><strong>192</strong></a></td>
								    						<td><a href="ecommerce-products-form.html"><strong>Product Name Example 2</strong></a></td>
								    						<td class="text-right">$50</td>
								    						<td class="text-right">1</td>
								    						<td class="text-right">$50</td>
								    					</tr>
								    					<tr>
                                                            <td class="pl-4"><a href="ecommerce-products-form.html"><strong>193</strong></a></td>
								    						<td><a href="ecommerce-products-form.html"><strong>Product Name Example 3</strong></a></td>
								    						<td class="text-right">$132</td>
								    						<td class="text-right">1</td>
								    						<td class="text-right">$132</td>
								    					</tr>
								    				</tbody>
								    			</table>
								    		</div>

								    		<div class="row justify-content-end flex-column flex-lg-row my-3">
                                                <div class="col-auto mr-5">
                                                    <h3 class="font-weight-bold text-color-dark text-4 mb-3">Items Subtotal</h3>
								    				<span class="d-flex align-items-center">
                                                        3 Items
								    					<i class="fas fa-chevron-right text-color-primary px-3"></i>
								    					<b class="text-color-dark text-xxs">$298.00</b>
								    				</span>
								    			</div>
								    			<div class="col-auto mr-5">
                                                    <h3 class="font-weight-bold text-color-dark text-4 mb-3">Shipping</h3>
								    				<span class="d-flex align-items-center">
                                                        Flat Rate
								    					<i class="fas fa-chevron-right text-color-primary px-3"></i>
								    					<b class="text-color-dark text-xxs">$20.00</b>
								    				</span>
								    			</div>
								    			<div class="col-auto">
                                                    <h3 class="font-weight-bold text-color-dark text-4 mb-3">Order Total</h3>
								    				<span class="d-flex align-items-center justify-content-lg-end">
                                                        <strong class="text-color-dark text-5">$318.00</strong>
								    				</span>
								    			</div>
								    		</div>
								    	</div>
								    </div>
                                <!--  FIN  - PRODUCTS -->
                                
							</div>
						</div>
						<div class="row">
							<div class="col">

								<!-- DEBUT - NOTE -->
								    <div class="card card-modern">
								    	<div class="card-header">
								    		<h2 class="card-title">Order Notes</h2>
								    	</div>
								    	<div class="card-body">
								    		<div class="ecommerce-timeline mb-3">
								    			<div class="ecommerce-timeline-items-wrapper">
								    				<div class="ecommerce-timeline-item">
								    					<small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
								    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
								    				</div>
								    				<div class="ecommerce-timeline-item">
								    					<small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
								    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
								    				</div>
								    				<div class="ecommerce-timeline-item">
								    					<small>added on June 26, 2020 at 4:01 pm by admin - <a href="#" class="text-color-danger">Delete note</a></small>
								    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi</p>
								    				</div>
								    			</div>
								    		</div>
								    		<div class="form-row">
								    			<div class="form-group col pb-1 mb-3">
								    				<label>Add Note</label>
								    				<textarea class="form-control form-control-modern" name="orderAddNote" rows="6"></textarea>
								    			</div>
								    		</div>
								    		<div class="form-row">
								    			<div class="form-group col">
								    				<a href="#" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Add Note</a>
								    			</div>
								    		</div>
								    	</div>
								    </div>
                                <!--  FIN  - NOTE -->

							</div>
						</div>
						<div class="row action-buttons">
							<div class="col-12 col-md-auto">
								<button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
									<i class="bx bx-save text-4 mr-2"></i> Save Order
								</button>
							</div>
							<div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
								<a href="ecommerce-orders-list.html" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
							</div>
							<div class="col-12 col-md-auto ml-md-auto mt-3 mt-md-0">
								<a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
									<i class="bx bx-trash text-4 mr-2"></i> Delete Order
								</a>
							</div>
						</div>
					</form>
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
