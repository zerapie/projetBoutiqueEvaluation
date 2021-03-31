
			<div role="main" class="main shop py-4">

				<div class="container py-4">

					<div class="row justify-content-center">
						<!-- ********** ***** ********** -->
						<!-- ********** login ********** -->
						<!-- ********** ***** ********** -->
						<div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
							<?php if ($afLogin) { ?>
								<h2 class="font-weight-bold text-5 mb-0">Login</h2>
								<form action="/loginregister/auth" id="frmSignIn" method="post" class="needs-validation">
								<!-- EMAIL -->
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
											<input name="email" type="text" value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
								<!-- PASSWORD -->	
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Mot de passe <span class="text-color-danger">*</span></label>
											<input name="password" type="password" value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
								<!-- Souviens-toi de moi -->
									<div class="form-row justify-content-between">
										<div class="form-group col-md-auto">
											<div class="custom-control custom-checkbox">
												<input name="rememberme" type="checkbox" class="custom-control-input" id="rememberme">
												<label class="custom-control-label cur-pointer text-2" for="rememberme">Souviens-toi de moi</label>
											</div>
										</div>
								<!-- Mot de passe oublié -->
										<div class="form-group col-md-auto">
											<a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Mot de passe oublié?</a>
										</div>
									</div>
								<!-- bouton validation -->
									<div class="form-row">
										<div class="form-group col"><br><br>
											<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
										</div>
									</div>
								</form>
							<?php }	?>

						</div>
						<!-- ********** ******** ********** -->
						<!-- ********** register ********** -->
						<!-- ********** ******** ********** -->
						<div class="col-md-6 col-lg-5">
							<?php if ($afresgister) { ?>
								<h2 class="font-weight-bold text-5 mb-0">S'inscrire</h2>
								<form action="/loginregister/save" id="frmSignUp" method="post">
									<!-- PRENOM / user_first_name -->
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Prenom <span class="text-color-danger">*</span></label>
											<input name="user_first_name" 	type="text" 	value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
									<!-- NOM / user_last_name -->
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Nom <span class="text-color-danger">*</span></label>
											<input name="user_last_name" 	type="text" 	value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
								<!-- EMAIL -->
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
											<input name="user_email" 		type="text" 	value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
								<!-- PASSWORD -->	
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Mot de passe <span class="text-color-danger">*</span></label>
											<input name="user_password" 	type="password" value="" class="form-control form-control-lg text-4" required>
										</div>
									</div>
								<!-- CONF_PASSWORD -->
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark text-3">Confirmation Mot de passe <span class="text-color-danger">*</span></label>
                        					<input name="user_conf_password" type="password" 		 class="form-control" id="InputForConfPassword">
										</div>
									</div>
								<!-- INFO -->
									<div class="form-row">
										<div class="form-group col">
											<p class="text-2 mb-2">Vos données personnelles seront utilisées pour soutenir votre expérience sur ce site Web, pour gérer l'accès à votre compte et à d'autres fins décrites dans notre <a href="#" class="text-decoration-none">politique de confidentialité.</a></p>
										</div>
									</div>
								<!-- bouton validation -->
									<div class="form-row">
										<div class="form-group col">
											<button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">S'inscrire</button>
										</div>
									</div>
								</form>
							<?php }	?>
						</div>
					</div>
				</div>
			</div>


            