<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!--  -->
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!--  -->
        <link rel="stylesheet" type="text/css" href="../Vidanco/css/index.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div id="Home">
    <!-- start header -->
    <div class="header">
        <div class="container">
            <div class="logo-login">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 logo">
                        <div class="logo-images">
                            <a href="#"><img src="../Vidanco/images/logo.jpg" width="100px"></a>
                        </div>
                    </div>
                    <!-- class trong -->
                    <div class="col-lg-6 col-md-6 col-sm-6 ">

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 login-resgistration">
                        <?php if(Route::has('login')): ?>
                        <div class="top-right links">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>">Home</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>">Register</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
    <!-- end header -->
    
    <div class="content">
        <!-- start option -->
        <div class="drop-option">
            <div class="container">
                <div class="select-option">
                    <div class="row option">
                        <ul>
                            <li class="option"> Tất cả </li>
                            <li class="option"> Bất động sản & nghỉ </li>
                            <li class="option"> Giáo dục & đào tạo </li>
                            <li class="option"> Sự kiện & hội thảo </li>
                            <li class="option"> Công nghệ & game </li>
                            <li class="option"> Sức khỏe & làm đẹp </li>
                            <li class="option"> Du lịch & nghỉ dưỡng </li>
                            <li class="option"> Nội thất & nhà cửa </li>
                            <li class="option"> Tài chính & bảo hiểm  </li>
                            <li class="option"> Cưới & nhiếp ảnh </li>
                            <li class="option"> Thực phẩm </li>
                            <li class="option"> Nhà hàng & quán ăn </li>
                            <li class="option"> Thời trang & phụ kiện </li>
                            <li class="option"> Giải trí & nghệ thuật </li>
                            <li class="option"> Mẹ & bé </li>
                            <li class="option"> Ô tô & xe máy  </li>
                            <li class="option"> Quà tặng, khuyến mại, cảm ơn  </li>
                            <li class="option"> Profile & CV  </li>
                            <li class="option"> Cảm ơn </li>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>

            <div class="project">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <h2> Create a New Project </h2>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 logo"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <button type="button" class="btn btn-success btn-create">
                                Create project <i class="fas fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <h3> Project name</h3>
                    <div class="row">
                        <input type="text" class="col-lg-12" name="project-name" placeholder="My new Amazing Project">
                    </div>
                    
                    <h3> Choose a Starting Template</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-enjoy-travel.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-filmmaker.jpg">
                                    <div class="card-txtselect">
                                        <p> Select </p>
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-night-city.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-night-voy.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-pers-page.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-portfolio.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-right-team.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="card-tpl">
                                <div class="card-body">
                                <div class="card-tpl-preview">
                                    <img class="images-responsive" src="../Vidanco/images/tpl-two-side.jpg">
                                    <div class="card-txtselect">
                                        Select
                                    </div>
                                </div>
                                </div>
                                <div class="card-name">
                                    Enjoy the Travel
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<?php /**PATH C:\Users\Linh\Desktop\lanpage\resources\views/welcome.blade.php ENDPATH**/ ?>