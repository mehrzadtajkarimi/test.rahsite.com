<?php require_once '../inc/config.php';?>
<?php
if (is_login()) {
	redirect('profile');
}

 ?>

<div class="container">
    <div class="row">

        <div class="offset-4"></div>
        <div class="col-lg-4 ">
            <div class="card border-0 shadow mt-5 ">
                <div class="card-body">
                    <img class="w-50 m-auto d-block" src="../img/logo-orginal3.png" alt="logo">
                    <form action="login.php" method="post">





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



                        <div class="form-group">
                            <input type="email" name="email" class="form-control shadow-sm border-0"
                                aria-describedby="emailHelp" placeholder="ایمیل" autocomplete="off" autofocus required>
                        </div>


                        <div class="form-group">
                            <input type="password" name="password" class="form-control shadow-sm border-0"
                                placeholder="کلمه عبور" required>
                        </div>


                        <button type="submit" name="do-login"
                            class="btn btn-primary btn-block  border-0  mt-5 p-2 mb-4 login ">ورود</button>

                        <a href="register.php">
                            <button type="submit" name="register"
                                class="btn btn-primary btn-block  border-0 w-50 m-auto  mt-5 p-2 register ">ثبت نام
                            </button></a>


                    </form>
                </div>
            </div>
        </div>
        <div class="offset-4"></div>
    </div>
</div>