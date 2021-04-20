<div role="main" class="main shop pt-4">
	<div class="container">
		<header class="page-header page-header-left-inline-breadcrumb">
			<h2 class="font-weight-bold text-6">Products</h2>
			<div class="right-wrapper">
				<ol class="breadcrumbs">
					<li><span>Home</span></li>
					<li><span>eCommerce</span></li>
					<li><span>Products Detail</span></li>
				</ol>
		
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
			</div>
		</header> <br>

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
			<div class="col-sm-auto text-center mb-4 mb-sm-0 mt-2 mt-sm-0">
				<a href="<?php echo base_url('admin/AddProduct/update/'.$Products['Product_id']) ;?>" class="ecommerce-sidebar-link btn btn-primary btn-md font-weight-semibold btn-py-2 px-4" data-ajax-url="ajax/ajax-products-form-empty.html">Modifier</a>
			</div>
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
		</div> <br>


		<div class="row">
			<div class="col-md-5 mb-5 mb-md-0">
				<div class="thumb-gallery-wrapper">
					<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
						<div>
							<img alt="product-grey-7" 	class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7.jpg')?>" 	data-zoom-image="img/products/product-grey-7.jpg">
						</div>
						<div>
							<img alt="product-grey-7-2" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-2.jpg')?>" 	data-zoom-image="img/products/product-grey-7-2.jpg">
						</div>
						<div>
							<img alt="product-grey-7-3" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-3.jpg')?>" 	data-zoom-image="img/products/product-grey-7-3.jpg">
						</div>
						<div>
							<img alt="product-grey-8" 	class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-8.jpg')?>" 	data-zoom-image="img/products/product-grey-8.jpg">
						</div>
						<div>
							<img alt="product-grey-6" 	class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-6.jpg')?>" 	data-zoom-image="img/products/product-grey-6.jpg">
						</div>
						<div>
							<img alt="product-grey-5" 	class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-5.jpg')?>" 	data-zoom-image="img/products/product-grey-5.jpg">
						</div>
					</div>
					<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7.jpg')?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-2.jpg')?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-3.jpg')?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-4.jpg')?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-5.jpg')?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="summary entry-summary position-relative">
					<div class="position-absolute top-0 right-0">
						<div class="products-navigation d-flex">
							<a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
							<a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
					<h1 class="mb-0 font-weight-bold text-7"><?php echo $Products['Product_name'] ?></h1>
					<div class="pb-0 clearfix d-flex align-items-center">
						<div title="Rated 3 out of 5" class="float-left">
							<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
						</div>
						<div class="review-num">
							<a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
								<span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
							</a>
						</div>
					</div>
					<div class="divider divider-small">
						<hr class="bg-color-grey-scale-4">
					</div>
					<p class="price mb-3">
						<span class="sale text-color-dark"><?php echo $Products['Price'] ?></span>
						<span class="amount"><?php echo $Products['Regular_price'] ?></span>
					</p>
					<p class="text-3-5 mb-3"><?php echo $Products['Product_description'] ?></p>
					<ul class="list list-unstyled text-2">
						<li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>
					</ul>
					<form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
						<table class="table table-borderless" style="max-width: 300px;">
							<tbody>
								<tr>
									<td class="align-middle text-2 px-0 py-2">SIZE:</td>
									<td class="px-0 py-2">
										<div class="custom-select-1">
											<select name="size" class="form-control text-1 h-auto py-2">
												<option value="">PLEASE CHOOSE</option>
												<option value="blue">Small</option>
												<option value="red">Normal</option>
												<option value="green">Big</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class="align-middle text-2 px-0 py-2">COLOR:</td>
									<td class="px-0 py-2">
										<div class="custom-select-1">
											<select name="color" class="form-control text-1 h-auto py-2">
												<option value="">PLEASE CHOOSE</option>
												<option value="blue">Blue</option>
												<option value="red">Red</option>
												<option value="green">Green</option>
											</select>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<hr>
						<div class="quantity quantity-lg">
							<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
							<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
							<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
						</div>
						<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
						<hr>
					</form>
					<div class="d-flex align-items-center">
						<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark mr-3 mb-0">
							<!-- Facebook -->
							<li class="social-icons-facebook">
								<a href="http://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<!-- Google+ -->
							<li class="social-icons-googleplus">
								<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Google+">
									<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<!-- Twitter -->
							<li class="social-icons-twitter">
								<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-toggle="tooltip" data-placement="top" title="Share On Twitter">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<!-- Email -->
							<li class="social-icons-email">
								<a href="mailto:?Subject=Share This Page&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://www.okler.net" data-toggle="tooltip" data-placement="top" title="Share By Email">
									<i class="far fa-envelope"></i>
								</a>
							</li>
						</ul>
						<a href="#" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2">
							<i class="far fa-heart mr-1"></i> SAVE TO WISHLIST
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col">
				<div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
					<ul class="nav nav-tabs justify-content-start">
						<li class="nav-item active"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-toggle="tab">Description</a></li>
						<li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-toggle="tab">Additional Information</a></li>
						<li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-toggle="tab">Reviews (2)</a></li>
					</ul>
					<div class="tab-content p-0">
						<div class="tab-pane px-0 py-3 active" id="productDescription">
							<p><?php echo $Products['Product_description'] ?></p>
							<p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
						</div>
						<div class="tab-pane px-0 py-3" id="productInfo">
							<table class="table table-striped m-0">
								<tbody>
									<tr>
										<th class="border-top-0">
											Size:
										</th>
										<td class="border-top-0">
											Unique
										</td>
									</tr>
									<tr>
										<th>
											Colors
										</th>
										<td>
											Red, Blue
										</td>
									</tr>
									<tr>
										<th>
											Material
										</th>
										<td>
											100% Leather
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane px-0 py-3" id="productReviews">
							<ul class="comments">
								<li>
									<div class="comment">
										<div class="img-thumbnail border-0 p-0 d-none d-md-block">
											<img class="avatar rounded-circle" alt="" src="img/avatars/avatar-2.jpg">
										</div>
										<div class="comment-block">
											<div class="comment-arrow"></div>
											<span class="comment-by">
												<strong>Jack Doe</strong>
												<span class="float-right">
													<div class="pb-0 clearfix">
														<div title="Rated 3 out of 5" class="float-left">
															<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
														</div>
														<div class="review-num">
															<span class="count" itemprop="ratingCount">2</span> reviews
														</div>
													</div>
												</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="comment">
										<div class="img-thumbnail border-0 p-0 d-none d-md-block">
											<img class="avatar rounded-circle" alt="" src="img/avatars/avatar.jpg">
										</div>
										<div class="comment-block">
											<div class="comment-arrow"></div>
											<span class="comment-by">
												<strong>John Doe</strong>
												<span class="float-right">
													<div class="pb-0 clearfix">
														<div title="Rated 3 out of 5" class="float-left">
															<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
														</div>
														<div class="review-num">
															<span class="count" itemprop="ratingCount">2</span> reviews
														</div>
													</div>
												</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra odio, gravida urna varius vitae, gravida pellentesque urna varius vitae.</p>
										</div>
									</div>
								</li>
							</ul>
							<hr class="solid my-5">
							<h4>Add a review</h4>
							<div class="row">
								<div class="col">
									<form action="" id="submitReview" method="post">
										<div class="form-row">
											<div class="form-group col pb-2">
												<label class="required font-weight-bold text-dark">Rating</label>
												<input type="text" class="rating-loading" value="0" title="" data-plugin-star-rating data-plugin-options="{'color': 'primary', 'size':'sm'}">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-lg-6">
												<label class="required font-weight-bold text-dark">Name</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
											</div>
											<div class="form-group col-lg-6">
												<label class="required font-weight-bold text-dark">Email Address</label>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<label class="required font-weight-bold text-dark">Review</label>
												<textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col mb-0">
												<input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h4 class="font-weight-semibold text-4 mb-3">RELATED PRODUCTS</h4>
				<hr class="mt-0">
				<div class="products row">
					<div class="col">
						<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce badge-success">NEW</span>
									</div>
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Photo Camera</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
									<span class="amount">$59,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce badge-success">NEW</span>
                                        <span class="badge badge-ecommerce badge-danger">27% OFF</span>
									</div>
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image product-thumb-info-image-effect">
											<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
												<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Porto Headphone</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
									<span class="amount">$99,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Golf Bag</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
									<span class="amount">$19,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce badge-danger">27% OFF</span>
									</div>
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<div class="countdown-offer-wrapper">
										<div class="text-color-light text-2" data-plugin-countdown data-plugin-options="{'date': '2022/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}"></div>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Workout</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
									<span class="amount">$30,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Luxury Bag</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
									<span class="amount">$79,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Styled Bag</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
									<span class="amount">$119,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Blue Hat</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
									<span class="amount">$289,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Adventurer Bag</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
									<span class="amount">$79,00</span>
								</p>
							</div>
							<div class="product mb-0">
								<div class="product-thumb-info border-0 mb-3">
									<div class="addtocart-btn-wrapper">
										<a href="shop-cart.html" class="text-decoration-none addtocart-btn" data-tooltip data-original-title="Add to Cart">
											<i class="icons icon-bag"></i>
										</a>
									</div>
									<a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
										QUICK VIEW
									</a>
									<a href="shop-product-sidebar-left.html">
										<div class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">
										</div>
									</a>
								</div>
								<div class="d-flex justify-content-between">
									<div>
										<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
										<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">Baseball Ball</a></h3>
									</div>
									<a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a>
								</div>
								<div title="Rated 5 out of 5">
									<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
								</div>
								<p class="price text-5 mb-3">
									<span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
									<span class="amount">$299,00</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="my-5">
		
		<div class="products row">
			<div class="col-md-6 col-lg-3">
				<h4 class="font-weight-semibold text-4 mb-3">FEATURED PRODUCTS</h4>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">electronics</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Photo Camera</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
							<span class="amount">$59,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image product-thumb-info-image-effect">
									<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
										<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Porto Headphone</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
							<span class="amount">$99,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Golf Bag</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
							<span class="amount">$19,00</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="font-weight-semibold text-4 mb-3">BEST SELLING PRODUCTS</h4>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Workout</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
							<span class="amount">$30,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Luxury Bag</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
							<span class="amount">$79,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-5.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Styled Bag</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
							<span class="amount">$119,00</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="font-weight-semibold text-4 mb-3">LATEST PRODUCTS</h4>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-6.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">hat</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Blue Hat</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
							<span class="amount">$289,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-8.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Adventurer Bag</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
							<span class="amount">$79,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-9.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Baseball Ball</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
							<span class="amount">$299,00</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<h4 class="font-weight-semibold text-4 mb-3">TOP RATED PRODUCTS</h4>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">electronics</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Photo Camera</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
							<span class="amount">$59,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image product-thumb-info-image-effect">
									<img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
										<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">accessories</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Porto Headphone</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
							<span class="amount">$99,00</span>
						</p>
					</div>
				</div>
				<div class="product row row-gutter-sm align-items-center mb-4">
					<div class="col-5 col-md-12 col-lg-5">
						<div class="product-thumb-info border-0">
							<a href="shop-product-sidebar-left.html">
								<div class="product-thumb-info-image">
									<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
								</div>
							</a>
						</div>
					</div>
					<div class="col-7 col-md-12 col-lg-7 ml-md-0 ml-lg-0 pl-lg-1 pt-1">
						<a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2">sports</a>
						<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary text-decoration-none">Golf Bag</a></h3>
						<div title="Rated 5 out of 5">
							<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}">
						</div>
						<p class="price text-4 mb-0">
							<span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
							<span class="amount">$19,00</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>