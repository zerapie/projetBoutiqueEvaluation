<div role="main" class="main shop pt-4">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
					<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Home</a></li>
					<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">SHOP</a></li>
					<li><?php echo $Product['Product_name']; ?></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 mb-5 mb-md-0">
				<div class="thumb-gallery-wrapper">
					<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7.jpg');?>" 	data-zoom-image="img/products/product-grey-7.jpg">
						</div>
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-2.jpg');?>" 	data-zoom-image="img/products/product-grey-7-2.jpg">
						</div>
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-7-3.jpg');?>" 	data-zoom-image="img/products/product-grey-7-3.jpg">
						</div>
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-8.jpg');?>" 	data-zoom-image="img/products/product-grey-8.jpg">
						</div>
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-6.jpg');?>" 	data-zoom-image="img/products/product-grey-6.jpg">
						</div>
						<div>
							<img alt="" class="img-fluid" src="<?php echo base_url('app-assets/img/products/product-grey-5.jpg');?>" 	data-zoom-image="img/products/product-grey-5.jpg">
						</div>
					</div>
					<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('img/products/product-grey-7.jpg');?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('img/products/product-grey-7-2.jpg');?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('img/products/product-grey-7-3.jpg');?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('img/products/product-grey-7-4.jpg');?>">
						</div>
						<div class="cur-pointer">
							<img alt="" class="img-fluid" src="<?php echo base_url('img/products/product-grey-7-5.jpg');?>">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7">
				<div class="summary entry-summary position-relative">

					<div class="position-absolute top-0 right-0">
						<div class="products-navigation d-flex">
							<a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"  ><i class="fas fa-chevron-left" ></i></a>
							<a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
						</div>
					</div>

					<!-- NOM PRODUIT -->
					<h1 class="mb-0 font-weight-bold text-7"><?php echo $Product['Product_name']; ?></h1>

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

					<!-- PRIX PRODUIT -->
					<p class="price mb-3">
						<span class="sale text-color-dark">€15,00</span>
						<span class="amount">€22,00</span>
					</p>

					<!-- DESCRIPTION -->
					<p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>

					<ul class="list list-unstyled text-2">
						<li class="mb-0">DISPONIBILITÉ: <strong class="text-color-dark">DISPONIBLE</strong></li>
					</ul>


					<form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
						<table class="table table-borderless" style="max-width: 300px;">
							<tbody>
								<tr>
								</tr>
								<tr>
								</tr>
							</tbody>
						</table>
						<hr>
						<div class="quantity quantity-lg">
							<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
							<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
							<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
						</div>
						<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Ajouter au panier</button>
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
							<i class="far fa-heart mr-1"></i> AJOUTER À LA LISTE DE SOUHAITS
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
