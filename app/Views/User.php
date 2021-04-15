<div role="main" class="main">
	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="font-weight-bold text-dark">User Profile</h1>
				</div>
				<div class="col-md-12 align-self-center order-1">
					<ul class="breadcrumb d-block text-center">
						<li><a href="#">Home</a></li>
						<li class="active">Pages</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="container pt-3 pb-2">
		<div class="row pt-2">
			<div class="col-lg-3 mt-4 mt-lg-0">
				<div class="d-flex justify-content-center mb-4">
					<div class="profile-image-outer-container">
						<div class="profile-image-inner-container bg-color-primary">
							<img src="img/avatars/avatar.jpg">
							<span class="profile-image-button bg-color-dark">
								<i class="fas fa-camera text-light"></i>
							</span>
						</div>
						<input type="file" id="file" class="profile-image-input">
					</div>
				</div>
				<aside class="sidebar mt-2" id="sidebar">
					<ul class="nav nav-list flex-column mb-5">
						<li class="nav-item"><a class="nav-link text-dark active" href="#">My Profile</a></li>
						<li class="nav-item"><a class="nav-link"                  href="#">User Preferences</a></li>
						<li class="nav-item"><a class="nav-link"                  href="#">Billing</a></li>
						<li class="nav-item"><a class="nav-link"                  href="#">Invoices</a></li>
					</ul>
				</aside>
			</div>
			<div class="col-lg-9">
				<h2 class="font-weight-bold line-height-3 text-7 mb-0">My Profile</h2>
				<p class="mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<form role="form" class="needs-validation">
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">First name</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="text" name="firstName" value="John" required>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Last name</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="text" name="lastName" value="Doe" required>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Email</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="email" name="email" value="email@gmail.com" required>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Company</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="text" name="company" value="">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Website</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="url" name="website" value="">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Address</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="text" name="address" value="" placeholder="Street">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
				        <div class="col-lg-6">
				            <input class="form-control text-3 h-auto py-2" type="text" name="city" value="" placeholder="City">
				        </div>
				        <div class="col-lg-3">
				            <input class="form-control text-3 h-auto py-2" type="text" name="state" value="" placeholder="State">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Time Zone</label>
				        <div class="col-lg-9">
				            <div class="custom-select-1">
				                <select id="user_time_zone" class="form-control text-3 h-auto py-2" name="timeZone" size="0">
				                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
				                    <option value="Alaska">(GMT-09:00) Alaska</option>
				                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
				                    <option value="Arizona">(GMT-07:00) Arizona</option>
				                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
				                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
				                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
				                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
				                </select>
				            </div>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Username</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="text" name="username" value="" required>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Password</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="password" name="password" value="" required>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Confirm password</label>
				        <div class="col-lg-9">
				            <input class="form-control text-3 h-auto py-2" type="password" name="confirmPassword" value="" required>
				        </div>
				    </div>
				    <div class="form-group row">
						<div class="form-group col-lg-9">
						</div>
						<div class="form-group col-lg-3">
							<input type="submit" value="Save" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
						</div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
