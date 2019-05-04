<link rel="stylesheet" href="<?= URL ?>public/css/animate.css">
<link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/css/style.css">
<script src="<?= URL ?>public/js/wow.min.js"></script>
<script src="<?= URL ?>public/js/jquery-2.1.3.min.js"></script>

<div class="container-fluid bg_user w-100 pt-5 ">
	<div class="row mt-5 m-2 p-4 border rounded shadow-lg h-auto bg-secondary">
		<div class="col-lg-5 mb-2">
			<p class="text-white wow fadeIn mr-2 text-center" data-wow-delay="1s"> سلام
				خوش آمدین به صفحه خودتون</p>

		</div>
		<div class="col-lg-7">
			<div class="card text-center ">
				<div class="card-header">
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">پروفایل</a>
						<a class="nav-item nav-link" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="false">سفارشها </a>
						<a class="nav-item nav-link" id="nav-edit-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-edit" aria-selected="false">ویرایش</a>

					</div>
				</div>
				<div class="card-body">
					<div class="tab-content" id="nav-tabContent">
						<div id="nav-profile" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-profile-tab">
							<h4 class="d-lg-inline"><span class="badge badge-danger ">نام کاربر</span></h4>
							<h4 class="d-lg-inline"><span class="badge badge-danger">آدرس ایمیل</span></h4>
							<h4 class="d-lg-inline"><span class="badge badge-danger">آدرس پستی</span></h4>
						</div>
						<div id="nav-product" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-product-tab">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsa sapiente aspernatur ad necessitatibus velit nobis dolorum reprehenderit, eum quibusdam at facere pariatur tenetur, debitis ducimus possimus, nulla sit, esse.
						</div>
						<div id="nav-edit" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-edit-tab">
							<div class="form-group">
								<form action="" method="post" enctype="multipart/form-data">

									<input type="text" name="display-name" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['display_name']; ?>" placeholder=" نام نمایشی شما...">
									<input type="text" name="user-address" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['user_address']; ?>" placeholder="آدرس پستی شما...">
									<input type="text" name="user-number" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['user_number']; ?>" placeholder="شماره تماس شما ...">

									<span class='badge badge-success mb-1'>تصویر حساب کاربری شما <i class="far fa-hand-point-down"></i> </span>
									<input type="file" name="new-image-profile" class="form-control-file mb-1">
									<input type="hidden" name="image-profile" value="">

									<input type="hidden" name="user-email" value="">
									<button type="submit" name="update-profile" class="btn btn-danger btn-sm btn-block">بروز رسانی پروفایل </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="?logout=1" class="btn btn-dark btn-block mt-2">خروج</a>
		</div>
	</div>
</div>