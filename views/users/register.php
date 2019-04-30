<?php require_once '../inc/config.php'; ?>
<?php if (is_login()) {	redirect('profile');} ?>

<!doctype html>

<html>

<head>
	<meta charset="utf-8" dir="rtl">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="mehrzad tajkarimi"/>
	<link rel="icon" href="img/icon.png" type="image/png">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script defer src="js/all.js"></script>
	<title>ثبت نام کاربر</title>
</head>

<body class="bg_user " id="register">

	<div class="container">
		<div class="row">

			<div class="offset-4"></div>
			<div class="col-lg-4 ">
				<div class="card border-0 shadow mt-5 ">
					<div class="card-body">
						<img class="w-50 m-auto d-block" src="../img/logo-orginal3.png" alt="logo">
						<form action="" method="post">

							<?php
							if ( $message ) {
								?>

							<div class="text-success rounded text-center p-2" style="background-color: aqua;">
								<?php echo $message ?>
							</div>
							<?php

							}
							if ( $error ) {
								?>
							<div class="bg-danger rounded text-center p-2">
								<?php echo $error ?>
							</div>
							<?php
							}
							?>

							<div class="form-group">
								<input type="name" name="display-name" class="form-control shadow-sm border-0 mt-4" placeholder="نام" autocomplete="off" autofocus required>
							</div>


							<div class="form-group">
								<input type="email" name="email" class="form-control shadow-sm border-0" aria-describedby="emailHelp" placeholder="ایمیل" autocomplete="off" required>
							</div>


							<div class="form-group">
								<input type="password" name="password" class="form-control shadow-sm border-0" placeholder="کلمه عبور" autocomplete="off" required>
							</div>


							<div class="form-group">
								<input type="password" name="password-conf" class="form-control shadow-sm border-0" placeholder="تکرار کلمه عبور" autocomplete="off" required>
							</div>

							<button type="submit" name="register" class="btn btn-primary btn-block  border-0  mt-5 mb-4 p-2 register">ثبت نام</button>

							<a class="login" href="login.php">
								<button type="submit" name="login" class="btn btn-primary btn-block border-0 w-50 m-auto  p-2 login">ورود</button>
							</a>
						</form>
					</div>

				</div>


			</div>
			<div class="offset-4"></div>


		</div>


	</div>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>
