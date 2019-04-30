<?php require_once '../../inc/config.php';if (!is_login() ){redirect('../../');} ?>
<?php
$user_deta = get_userdata();

?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8" dir="rtl">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="mehrzad tajkarimi"/>
	<link rel="icon" href="../img/icon.png" type="image/png">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/animate.css">
	<script defer src="../js/all.js"></script>
	<title>پروفایل</title>
</head>

<body>
	<header id="header" class="fixed-top ">
		<div id="nav1" class="row">
			<div class="container-fluid">
				<div id="header-top" class="row">
					<div class="col-lg-6 col-md-12">
						<ul class="list-inline mt-2 mb-2 pt-25 text-muted Contact-icon ">
							<li class="list-inline-item pl-3 ">
								<i class="fas fa-phone  text-muted"></i>
								<span class="mr-1">09199696492</span>
							</li>
							<li class="list-inline-item pr-4 d-md-inline d-none">
								<i class="fas fa-envelope  text-muted"></i>
								<span class="mr-1 ">info@tasvirgaranrooz.com</span>
							</li>
						</ul>
					</div>
					<div class=" col-lg-6 d-none d-lg-inline">
						<ul class="list-inline float-lg-left float-md-left Awesome-Icons ">
							<li class="list-inline-item p-xl-2 p-lg-2 p-md-2  mt-2 m-0   ">
								<a href=""><i class="fab fa-instagram "></i></a>
							</li>
							<li class="list-inline-item p-xl-2 p-lg-2 p-md-2 mt-2 m-0  ">
								<a href=""><i class="fab fa-telegram "></i></a>
							</li>
							<li class="list-inline-item p-xl-2 p-lg-2 p-md-2 mt-2 m-0 ">
								<a href=""><i class="fab fa-youtube "></i></a>
							</li>
							<li class="list-inline-item p-xl-2 p-lg-2 p-md-2 mt-2 m-0 ">
								<a href=""><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="list-inline-item p-xl-2 p-lg-2 p-md-2 mt-2 m-0 ">
								<a href=""><i class="fab fa-facebook-square "></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav id="nav2" class="d-flex justify-content-lg-center position-relative">
			<a class="navbar-brand nav-logo" href="#">
            <img class="logo-img-black"  src="../../img/logo-orginal1.png" alt="tasvirgaran">
            <img class="logo-img-white"  src="../../img/logo-orginal2.png" alt="tasvirgaran">
            </a>
		










			<div class="navbar navbar-expand-lg navbar-dark  ">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
			










				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link " href="../../index.php">خانه <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">درباره ما</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ارتباط با مشتری</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">مشاوره مقدماتی محصولات</a>
								<a class="dropdown-item" href="#">بازاریابی</a>
								<a class="dropdown-item" href="#">پشتیبانی فنی</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">بانک اطلاعات مشتریان</a>
								<a class="dropdown-item" href="#">نظرات و پیشنهادات</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">نمونه کار (گالری )</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
								<a class="dropdown-item" href="#">صوتی</a>
								<a class="dropdown-item" href="#">ویدئویی</a>
								<a class="dropdown-item" href="#">عکس</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">....</a>
								<a class="dropdown-item" href="#">....</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مشاوره و آموزش</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
								<a class="dropdown-item disabled font-weight-bold" href="#">آموزشی</a>
								<a class="dropdown-item" href="#">آموزش فنون مذاکره و سخنوری موثر</a>
								<a class="dropdown-item" href="#">آموزش فن گویندگی و بیان خلاق</a>
								<a class="dropdown-item" href="#">آموزش فن بازیگری و ارتباطات تصویری</a>
								<a class="dropdown-item" href="#">کارگاههای یک روزه(انگیزشی-آموزشی)</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item disabled font-weight-bold" href="#">مشاوره</a>
								<a class="dropdown-item" href="#">تبلیغات تجاری </a>
								<a class="dropdown-item" href="#">رسانه و فنون و بیان</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مقالات</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
								<a class="dropdown-item" href="#">روانشناسی</a>
								<a class="dropdown-item" href="#">داستانی</a>
								<a class="dropdown-item" href="#">انگیزشی</a>
								<a class="dropdown-item" href="#">.....</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تعرفه ها</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
								<a class="dropdown-item" href="#">طراحی گرافیگی</a>
								<a class="dropdown-item" href="#">مستند سازی</a>
								<a class="dropdown-item" href="#">تبلیغات نمایشگاهی</a>
								<a class="dropdown-item" href="#">آیتم های صوتی و رادیویی</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item disabled font-weight-bold" href="#">واحد ما</a>
								<a class="dropdown-item" href="#">واحد تدوین</a>
								<a class="dropdown-item" href="#">واحد پخش و توزیع</a>
							</div>
							<li class="nav-item">
								<a class="nav-link" href="#">تماس ما</a>
							</li>
						</li>
					</ul>
				</div>
			</div>
			<div id="user-login" class="mt-3 ">
				<a href="users/register.php" class="">
                <i class="fas fa-user text-muted  "></i>
                </a>
			










			</div>
		</nav>
	</header>
	<div class="container-fluid bg_user w-100 pt-5 ">
		<div class="row mt-5 m-2 p-4 border rounded shadow-lg h-auto bg-secondary">
			<div class="col-lg-5 mb-2">
				<p class="text-white wow fadeIn mr-2 text-center" data-wow-delay="1s"> سلام
					<?php echo $user_deta['display_name']; ?> خوش آمدین به صفحه خودتون</p>

				<?php if(!$user_deta['user_image']) { ?>
				<img src="../../img/profile/profile.jpg" alt="profile" width="200" class="img-fluid rounded m-3 m-auto d-block">
				<?Php }else{ ?>
				<img src="../../img/profile/<?php echo $user_deta['user_image']; ?>" alt="<?php echo $user_deta['display_name']; ?>" width="200" class="img-fluid rounded m-3 m-auto d-block">
				<?php }?>
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
								<?php echo $user_deta['display_name']; ?><br>
								<h4 class="d-lg-inline"><span class="badge badge-danger">آدرس ایمیل</span></h4>
								<?php echo $user_deta['email']; ?><br>
								<h4 class="d-lg-inline"><span class="badge badge-danger">آدرس پستی</span></h4>
								<?php
								if ( $user_deta[ 'user_address' ] ) {
									echo $user_deta[ 'user_address' ];
								} else {
									echo "<span class='badge badge-info'> از قسمت ویرایش آدرس خود را وارد کنید ...</span>";
								}
								?><br>
								<h4 class="d-lg-inline"><span class="badge badge-danger">شماره تماس</span></h4>
								<?php
								if ( $user_deta[ 'user_number' ] ) {
									echo $user_deta[ 'user_number' ];
								} else {
									echo "<span class='badge badge-info'> از قسمت ویرایش شماره تلفن خود را وارد کنید ...</span>";
								}
								?><br>
							</div>
							<div id="nav-product" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-product-tab">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsa sapiente aspernatur ad necessitatibus velit nobis dolorum reprehenderit, eum quibusdam at facere pariatur tenetur, debitis ducimus possimus, nulla sit, esse.
							</div>
							<div id="nav-edit" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-edit-tab">
								<div class="form-group">
									<form action="" method="post" enctype="multipart/form-data">
										<?php if ( $message ) { ?>
										<div class="text-success rounded text-center p-2" style="background-color: aqua;">
											<?php echo $message ?>
										</div>
										<?php
										}
										if ( $error ) {
											?>
										<div class="bg-danger rounded text-center p-2 mb-3">
											<?php echo $error ?>
										</div>
										<?php
										}
										?>

										<input type="text" name="display-name" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['display_name']; ?>" placeholder=" نام نمایشی شما...">
										<input type="text" name="user-address" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['user_address']; ?>" placeholder="آدرس پستی شما...">
										<input type="text" name="user-number" class="form-control form-control-sm mb-1" value="<?php echo $user_deta['user_number']; ?>" placeholder="شماره تماس شما ...">

										<span class='badge badge-success mb-1'>تصویر حساب کاربری شما  <i class="far fa-hand-point-down"></i> </span>
										<input type="file" name="new-image-profile" class="form-control-file mb-1">
										<input type="hidden" name="image-profile" value="<?php echo $user_deta['user_image']; ?>">

										<input type="hidden" name="user-email" value="<?php echo $user_deta['email']; ?>">
										<button type="submit" name="update-profile" class="btn btn-danger btn-sm btn-block">بروز رسانی پروفایل </button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="?logout=1" type="button" class="btn btn-dark btn-block mt-2">خروج</a>
			</div>
			<script src="../../js/wow.min.js"></script>
			<script src="../../js/jquery-3.3.1.min.js"></script>
			<script src="../../js/bootstrap.min.js"></script>
			<script src="../../js/my.web.js"></script>
			<script src="../../js/all.js"></script>
</body>

</html>