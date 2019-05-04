  <link rel="stylesheet" href="<?= URL ?>public/css/animate.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
  <script src="<?= URL ?>public/js/wow.min.js"></script>
  <script src="<?= URL ?>public/js/jquery-2.1.3.min.js"></script>

  <div class="body_user">
      <div class="bg_user" id="register">
          <div class="container mt-lg-5 mb-lg-5 ">
              <div class="row d-flex justify-content-center ">
                  <div class="col-lg-5 col-md-7 col-sm-8 col-9">
                      <div class="card border-0 shadow mt-3" style="min-height: 600px;">
                          <div class="card-body">
                              <img class=" m-auto d-block p-3" src="public\image\logo1.png" alt="logo">
                              <form action="userProfile" method="post">
                                  <nav id="nav-head" class="position-relative d-flex p-2">
                                      <span class="position-absolute d-flex justify-content-center align-items-center span ">
                                          <img src="public\image\finger-hand-right.png" alt="finger-hand-right" class="wow fadeIn">
                                      </span>
                                      <div class="secondary_user border-0 text-center btn-right w-50 active_user ">ثبت نام</div>
                                      <div class="secondary_user border-0 text-center btn-left w-50 ">ورود</div>
                                  </nav>
                                  <?php
                                    if ($this->message) {
                                        ?>
                                      <span class='btn secondary_user border-radius btn-block'><?= $this->message ?> </span>
                                  <?php
                                }
                                if ($this->error) {
                                    ?>
                                      <span class='btn active_user border-radius btn-block'><?= $this->error ?> </span>
                                  <?php
                                }
                                ?>
                                  <div id="btn-right" class="mt-3">
                                      <div class="form-group">
                                          <input type="name" name="register_name" class="form-control shadow-sm border-0 mt-4" placeholder="نام" autofocus required>
                                      </div>
                                      <div class="form-group">
                                          <input type="email" name="register_email" class="form-control shadow-sm border-0" aria-describedby="emailHelp" placeholder="ایمیل" required>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="register_password" class="form-control shadow-sm border-0" placeholder="کلمه عبور" autocomplete="off" required>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="register_password_conf" class="form-control shadow-sm border-0" placeholder="تکرار کلمه عبور" autocomplete="off" required>
                                      </div>
                                      <button type="submit" name="register" class="btn btn-primary btn-block  border-0  mt-5 mb-4 p-2 btn-user">ثبت
                                          نام</button>
                                  </div>
                              </form>
                              <form action="" method="post">
                                  <div id="btn-left" style="display: none;" class="mt-3">
                                      <div class="form-group">
                                          <input type="email" name="login_email" class="form-control shadow-sm border-0" aria-describedby="emailHelp" placeholder="ایمیل">
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="login_password" class="form-control shadow-sm border-0" placeholder="کلمه عبور">
                                      </div>

                                      <button type="submit" name="login" class="btn btn-primary btn-block border-0 mt-5 p-2 mb-4 btn-user">ورود</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script>
      $(".btn-right").click(function() {
          $(this).next().removeClass("active_user");
          $(this).addClass("active_user");
          $(".span").html('<img class="wow rotateIn shake" data-wow-duration="1s" src="public/image/finger-hand-right.png">');
          $("#btn-left").stop().fadeOut(function() {
              $("#btn-right").stop().fadeIn();
          });
      });

      $(".btn-left").click(function() {

          $(this).prev().removeClass("active_user");
          $(this).addClass("active_user");


          $(".span").html('<img class="wow rotateIn shake" data-wow-duration="1s"" src="public/image/finger-hand-left.png" >');
          $("#btn-right").stop().fadeOut(function() {
              $("#btn-left").stop().fadeIn();
          });
      });
  </script>