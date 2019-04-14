<header>
    <link rel="icon" href="<?= URL ?>public/image/icon.png" type="image/png">
    <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>public/css/animate.css">
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    <script src="<?= URL ?>public/js/jquery-2.1.3.min.js"></script>
    <script src="<?= URL ?>public/js/typed.min.js"></script>
    <script>
        $("#nav-right #nav-ul>li").click(function () {
            $(this).find("a").toggleClass('active');
            $(this).find("ul").fadeToggle('500');
        });

    </script>
    <script src="<?= URL ?>public/js/wow.min.js"></script>
    <script src="<?= URL ?>public/js/bootstrap.min.js"></script>
    <script src="<?= URL ?>public/js/jquery.hover3d.min.js"></script>
    <script src="<?= URL ?>public/js/all.js"></script>
    <script src="<?= URL ?>public/js/my.web.js"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: myfont;
            text-align: justify;
            overflow-x: hidden;
        }
        @font-face {
            font-family: 'myfont';
            src: url("../../fonts/IRANSans-web.ttf") format("truetype"), url("../../fonts/IRANSans-web.eot") format("eot"), url("../../fonts/IRANSans-web.woff") format("woff"), url("../../fonts/IRANSans-web.woff2") format("woff2");
            font-style: normal;
            font-weight: normal;
        }
        @font-face {
            font-family: 'myfont1';
            src: url('../../fonts/BYekan.eot') format('eot'), url('../../fonts/BYekan.ttf') format('truetype'), url('../../fonts/BYekan.woff') format('woff');
            font-style: normal;
            font-weight: normal;
        }
        @font-face {
            font-family: 'myfont2';
            src: url("../../fonts/B.Shekari.ttf") format("truetype");
        }
        .container-fluid, .container {
            padding: 0;
            direction: rtl;
            text-align: right;
        }
        /*register  &   login..............................................................*/



        #register {
            background: linear-gradient(-180deg, #FFFEFF 0%, #D7FFFE 100%) no-repeat fixed;
        }
        #register input {
            border-radius: 10px;
        }
        #register .login {
            text-decoration: none;
        }
        #register .login {
            background-image: linear-gradient(to top, #7f6917 0%, #e2c56d 100%);
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
            border-radius: 25px;
        }
        #register .login:hover {
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            transition-delay: 0.15s;
        }
        /*register   &   login..............................................................*/



        #head {
            width: 100%;
            height: 45px;
            background-image: linear-gradient(#373B44, #292C33);
            position: relative;
        }
        #head .head {
            position: absolute;
            top: 11px;
            right: 3%;
            width: 11%;
            height: 45px;
            border-radius: 5px;
            background-image: -webkit-linear-gradient(270deg, rgba(233,4,4,1.00) 0%, rgba(107,0,0,1.00) 100%);
            background-image: -moz-linear-gradient(270deg, rgba(233,4,4,1.00) 0%, rgba(107,0,0,1.00) 100%);
            background-image: -o-linear-gradient(270deg, rgba(233,4,4,1.00) 0%, rgba(107,0,0,1.00) 100%);
            background-image: linear-gradient(180deg, rgba(233,4,4,1.00) 0%, rgba(107,0,0,1.00) 100%);
            z-index: 2;
        }
        #head .head p {
            font-family: myfont2;
            font-size:2vw;
            line-height: 39px;
            color: #E7E7E7;
            text-shadow: 1px 1px 1px #000000;
            text-align: center;
        }
        #nav-right {
            padding-top: 30px;
            width: 200px;
            height: 100vh;
            background-image: -webkit-linear-gradient(2deg, rgba(36,39,45,1.00) 0%, rgba(17,18,21,1.00) 100%);
            background-image: -moz-linear-gradient(2deg, rgba(36,39,45,1.00) 0%, rgba(17,18,21,1.00) 100%);
            background-image: -o-linear-gradient(2deg, rgba(36,39,45,1.00) 0%, rgba(17,18,21,1.00) 100%);
            background-image: linear-gradient(88deg, rgba(36,39,45,1.00) 0%, rgba(17,18,21,1.00) 100%);
        }
        #nav-right #nav-ul {
            margin-right: 5%;
            width: 89%;
            border-radius: 4px;
            border: 1px solid #15161A;
            overflow: hidden;
            -webkit-box-shadow: inset 0px 0px 0px rgba(0,0,0,0.83);
            box-shadow: inset 0px 0px 0px rgba(0,0,0,0.83);
            padding: 0;
            margin-bottom: 20px;
        }
        #nav-right #nav-ul>li {
            border-bottom: 1px solid #000;
            background-image: linear-gradient(#373B44, #2C2F36);
        }
        #nav-right #nav-ul>li a {
            color: #A2A2A2;
            padding-right: 15px;
            transition: .5s;
            font-size: .7em;
        }
        #nav-right #nav-ul>li>ul {
            display: none;
            background-color: #fff;
        }
        #nav-right #nav-ul>li>ul>li a {
            background: none;
            color: #494949;
            text-decoration: none;
        }
        .active-li {
            background-image: linear-gradient(#5970A3, #394768);
            color: #F9F9F9;
        }
        #nav-right .btn-exit {
            width: 51px;
            height: 33px;
            color: #C7C7C7;
            border: 1px solid #15172B;
            text-shadow: 1px 1px 1px #000000;
            border-radius: 50%;
            background-image: -webkit-linear-gradient(180deg, rgb(22, 154, 189) 0%, rgb(16, 37, 132) 100%);
            background-image: -moz-linear-gradient(180deg, rgb(22, 154, 189) 0%, rgb(16, 37, 132) 100%);
            background-image: -o-linear-gradient(180deg, rgb(22, 154, 189) 0%, rgb(16, 37, 132) 100%);
            background-image: linear-gradient(180deg, rgb(22, 154, 189) 0%, rgb(16, 37, 132) 100%);
            line-height: 11px;
            display: block;
        }
        #content {
            margin-top: 30px;
            height: 100vh;
            overflow-y: scroll;
        }
        .eraser-css {
            color: #E78587;
        }
        .edit-css {
            color: #58CFFF;
        }
        .edit-css:hover {
            transition: .7s;
            color: #007099;
        }
        .eraser-css:hover {
            transition: .7s;
            color: #A01D1F;
        }

        @media screen and (max-width: 992px) {
            #nav-right {
                height: auto;
                padding-top: 0;
            }
            #head .head {
                width: 48%;
                right: 25%;
            }
            #head .head p {
                font-size: 5vw;
            }
        }



    </style>
</header>


    <div class="container-fluid">
       
            <div class="d-block shadow " id="head">
                <div class="head shadow">
                    <p class="">پنل مدیریت</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col " id="nav-right">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars text-secondary"></i>
                    </button>
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="nav flex-column  " id="nav-ul" >
                            <li class="nav-item ">
                                <a class="nav-link active-li" href=""><i class="fas fa-home ml-3"></i>مدیریت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-users ml-3"></i> کاربران</a>
                                <ul class="nav flex-column ">
                                    <li class="nav-item "><a href=""><i class="fas fa-users-cog ml-2"></i>لیست کاربران </a>
                                    </li>
                                    <li class="nav-item "><a href=""><i class="fas fa-comments ml-2"></i>نظرات</a>
                                    </li>
                                    <li class="nav-item "><a href=""><i class="fab fa-first-order ml-2"></i> لیست سفارشات</a>
                                    </li>
                                </ul>
                            </li>

                            <a href="?admin-logout=1" type="button" class="btn m-auto btn-exit border-0 "><i class="fas fa-sign-out-alt"></i></a>
                        </ul>
                    </div>
                </nav>

                <a class="d-none d-lg-block" href="http://www.webzad.ir/">
                    <img src="<?= URL ?>public/image/logo1.png" class="img-fluid w-50 m-auto d-block pt-5" alt="logo_rahsite">
                </a>
            </div>



