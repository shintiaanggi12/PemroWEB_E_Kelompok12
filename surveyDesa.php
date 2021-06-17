<?php include 'koneksiDesa.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDGS Desa</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <h5>SDGS Desa</h5>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Shintia Anggi</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Shintia Anggi</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">Shintia Anggi<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="surveyDesa.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Desa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="surveyRT.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey RT</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="surveyKeluarga.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Keluarga</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="surveyIndividu.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Individu</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                  <a href="hasilSurvDesa.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Hasil Survey Desa</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                </li>
                                <li class=" ">
                                    <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class=""></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Logout</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Forms &amp; Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="surveyDesa.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Desa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="surveyRT.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey RT</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="surveyKeluarga.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Keluarga</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="surveyIndividu.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Individu</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>

                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Chart &amp; Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="chart.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Chart</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="auth-normal-sign-in.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="auth-sign-up.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Register</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="sample-page.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sample Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                            <div class="pcoded-navigation-label" data-i18n="nav.category.other">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">WELCOME</h5>
                                            <p class="m-b-0">Selamat Datang di Website SDGs Desa</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Survey Desa</a>
                                            </li>
                                            <!-- <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <!-- <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Form Inputs</h5> -->
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    <!-- </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email (exa@gmail.com)</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="password" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" value="My value">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Predefine value</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" disabled>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Disabled</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" maxlength="6">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Max length 6 char</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <textarea class="form-control" required=""></textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Text area Input</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Form Inputs With Static Label</h5>
                                                        <!-<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    <!-- </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="Enter User Name" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" placeholder="Enter Email" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email (exa@gmail.com)</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="password" name="footer-email" class="form-control" placeholder="Enter Password" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="" placeholder="Pre define value" value="My value">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Predefine value</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="" placeholder="disabled Input" disabled>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Disabled</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="" maxlength="6" placeholder="Enter only 6 char">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Max length 6 char</label>
                                                            </div>
                                                            <div class="form-group form-default form-static-label">
                                                                <textarea class="form-control" required="">Enter Text hear</textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Text area Input</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Colored Input</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-default</label>
                                                            </div>
                                                            <div class="form-group form-primary">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-primary</label>
                                                            </div>
                                                            <div class="form-group form-success">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-success</label>
                                                            </div>
                                                            <div class="form-group form-danger">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-danger</label>
                                                            </div>
                                                            <div class="form-group form-warning">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-warning</label>
                                                            </div>
                                                            <div class="form-group form-info">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-info</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Colored Input With Static Label</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-default</label>
                                                            </div>
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-primary</label>
                                                            </div>
                                                            <div class="form-group form-success form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-success</label>
                                                            </div>
                                                            <div class="form-group form-danger form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-danger</label>
                                                            </div>
                                                            <div class="form-group form-warning form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-warning</label>
                                                            </div>
                                                            <div class="form-group form-info form-static-label">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">form-info</label>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12"> -->
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Wilayah</h5>
                                                        <span>JAWA TIMUR->KABUPATEN JEMBER->AJUNG->WIROWONGSO</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Survey Desa</h4>
                                                        <form action="" method="POST">
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Foto Balai Desa</label>
                                                              <div class="col-sm-10">
                                                                  <input type="file" class="form-control">
                                                              </div>
                                                          </div>
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Simple Input</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div> -->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email Desa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="emailDesa"
                                                                    placeholder="Alamat Email Desa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Web Desa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="webDesa"
                                                                    placeholder="Alamat Web Desa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Facebook</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="facebookDesa"
                                                                    placeholder="Alamat Facebook Desa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Twitter</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="twitterDesa"
                                                                    placeholder="Alamat Twitter Desa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Instagram</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="instagramDesa"
                                                                    placeholder="Alamat Instagram Desa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Youtube</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="youtubeDesa"
                                                                    placeholder="Alamat Youtube">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Status Pemerintahan</label>
                                                                <div class="col-sm-10">
                                                                    <select name="status" class="form-control">
                                                                        <option value="Desa">Desa</option>
                                                                        <option value="Kelurahan">Kelurahan</option>
                                                                        <option value="Kampung">Kampung</option>
                                                                        <option value="Nagari">Nagari</option>
                                                                        <option value="Gampong">Gampong</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah RT</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="jmlRT"
                                                                    placeholder="Tulis Angka">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah RW</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="jmlRW"
                                                                    placeholder="Tulis Angka">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Ada SK Pendirian Desa?</label>
                                                                <div class="col-sm-10">
                                                                    <select name="SKdesa" class="form-control">
                                                                        <option value="Ya">Ya</option>
                                                                        <option value="Tidak">Tidak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">SK Pendirian Desa</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nomerSK"
                                                                    placeholder="No. SK Pendirian">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Ada Peta Desa?</label>
                                                                <div class="col-sm-10">
                                                                    <select name="peta" class="form-control">
                                                                        <option value="Ya">Ya</option>
                                                                        <option value="Tidak">Tidak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">SK Bupati/Gub Ttg Peta</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="nomerSKBUPATI"
                                                                    placeholder="No. SK Bupati">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Luas Wilayah (HA)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="luasDesa"
                                                                    placeholder="Luas Wilayah Desa (Ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lokasi Desa terletak di pulau</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" class="form-control" name="lokasiDesa"
                                                                    placeholder="Sebutkan nama pulau, pisahkan tanda koma jika banyak"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tipografi terluas wilayah</label>
                                                                <div class="col-sm-10">
                                                                    <select name="tipografi" class="form-control">
                                                                        <option value="Lerang/Puncak">Lerang/Puncak</option>
                                                                        <option value="Lembah">Lembah</option>
                                                                        <option value="Dataran">Dataran</option>
                                                                        <option value="Pesisir Pantai">Pesisir Pantai</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga di lereng/Puncak</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="jmlWARGA"
                                                                    placeholder="Jumlah warga di lereng/Puncak">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kantor Kepala Desa</label>
                                                                <div class="col-sm-10">
                                                                    <select name="kantorDesa" class="form-control">
                                                                        <option value="Ada, layak">Ada, layak</option>
                                                                        <option value="Ada, tidak layak">Ada, tidak layak</option>
                                                                        <option value="Tidak layak">Tidak layak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kepemilikan Kantor</label>
                                                                <div class="col-sm-10">
                                                                    <select name="kepemilikanKantor" class="form-control">
                                                                        <option value="Aset Desa">Aset Desa</option>
                                                                        <option value="Bukan Aset Desa">Bukan Aset Desa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lokasi Kantor</label>
                                                                <div class="col-sm-10">
                                                                    <select name="lokasiKantor" class="form-control">
                                                                        <option value="Di dalam desa">Di dalam desa</option>
                                                                        <option value="Di luar desa">Di luar desa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Penyelenggaraan pemerintahan dilaksanakan di</label>
                                                                <div class="col-sm-10">
                                                                    <select name="penyelenggaraan" class="form-control">
                                                                        <option value="Kantor Kepala Desa/Balai Desa">Kantor Kepala Desa/Balai Desa</option>
                                                                        <option value="Bukan Kantor Kepala Desa">Bukan Kantor Kepala Desa</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jam Kerja Di Kantor Desa</label>
                                                                <div class="col-sm-10">
                                                                    <select name="jamKerja" class="form-control">
                                                                        <option value="Tidak Menentu">Tidak Menentu</option>
                                                                        <option value="Ada jadwal kerja">Ada jadwal kerja</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Koordinat Lintang</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="koordinatLintang"
                                                                    placeholder="Koordinat Lintang (Latitude)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Koordinat Bujur</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="koordinatBujur"
                                                                    placeholder="Koordinat Bujur (Longitude)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lintang Utara</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="lintangUtara"
                                                                    placeholder="Lintang Utara">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lintang Selatan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="lintangSelatan"
                                                                    placeholder="Lintang Selatan">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Ketinggian Lokasi</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="ketinggian"
                                                                    placeholder="Dari permukaan laut (DPAL)">
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary waves-effect waves-light" name="simpan">SIMPAN</button>
                                                            <button class="btn btn-primary waves-effect waves-light">BARU</button>
                                                            <button class="btn btn-primary waves-effect waves-light" name="upload">UPLOAD</button>
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control"
                                                                    placeholder="Password input">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Read only</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                    placeholder="You can't change me" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Disable Input</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                    placeholder="Disabled text" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Predefine
                                                                    Input</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                        value="Enter yout content after me">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Round Input</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text"
                                                                        class="form-control form-control-round"
                                                                        placeholder=".form-control-round">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Maximum
                                                                        Length</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                            placeholder="Content must be in 6 characters"
                                                                            maxlength="6">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Disable
                                                                            Autocomplete</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="Autocomplete Off"
                                                                                autocomplete="off">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Static Text</label>
                                                                            <div class="col-sm-10">
                                                                                <div class="form-control-static">Hello !... This is
                                                                                    static text
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Color</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="color" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                    </form>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <h4 class="sub-title">Input Sizes</h4>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-lg"
                                                                                        placeholder=".form-control-lg">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control"
                                                                                        placeholder=".form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder=".form-control-sm">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-sm-6 mobile-inputs">
                                                                            <h4 class="sub-title">Color Inputs</h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                    class="form-control form-control-primary"
                                                                                    placeholder=".form-control-primary">
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-warning"
                                                                                        placeholder=".form-control-warning">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-default"
                                                                                        placeholder=".form-control-default">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-danger"
                                                                                        placeholder=".form-control-danger">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-success"
                                                                                        placeholder=".form-control-success">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-inverse"
                                                                                        placeholder=".form-control-inverse">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-info"
                                                                                        placeholder=".form-control-info">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6 mobile-inputs">
                                                                            <h4 class="sub-title">Text-color</h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                    class="form-control form-txt-primary"
                                                                                    placeholder=".form-txt-primary">
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-warning"
                                                                                        placeholder=".form-txt-warning">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-default"
                                                                                        placeholder=".form-txt-default">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-danger"
                                                                                        placeholder=".form-txt-danger">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-success"
                                                                                        placeholder=".form-txt-success">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-inverse"
                                                                                        placeholder=".form-txt-inverse">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-info"
                                                                                        placeholder=".form-txt-info">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-sm-6 mobile-inputs">
                                                                            <h4 class="sub-title">Background-color</h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                    class="form-control form-bg-primary"
                                                                                    placeholder=".form-bg-primary">
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-warning"
                                                                                        placeholder=".form-bg-warning">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-default"
                                                                                        placeholder=".form-bg-default">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-danger"
                                                                                        placeholder=".form-bg-danger">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-success"
                                                                                        placeholder=".form-bg-success">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-inverse"
                                                                                        placeholder=".form-bg-inverse">
                                                                                    </div>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-info"
                                                                                        placeholder=".form-bg-info">
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- Basic Form Inputs card end -->
                                                            <!-- Input Grid card start -->
                                                            <!-- <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Input Grid</h5>
                                                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

                                                                </div>
                                                                <div class="card-block">
                                                                    <h4 class="sub-title">Basic Inputs</h4>
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-1">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-1">
                                                                            </div>
                                                                            <div class="col-sm-11">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-11">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-2">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-2">
                                                                            </div>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-10">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-3">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-3">
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-9">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-4">
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-8">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-5">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-5">
                                                                            </div>
                                                                            <div class="col-sm-7">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-7">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-6">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-6">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-12">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-12">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <h4 class="sub-title">Flex Inputs</h4>
                                                                    <form>
                                                                        <div class="form-group row">
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-4">
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-6">
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-8">
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="col-sm-10">
                                                                            </div>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" placeholder="col">
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div> -->
                                                            <!-- Input Grid card end -->
                                                            <!-- Input Validation card start -->
                                                            <!-- <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Input Validation</h5>
                                                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                </div>
                                                                <div class="card-block">
                                                                    <h4 class="sub-title">Input Validation</h4>
                                                                    <div class="form-group has-success row">
                                                                        <div class="col-sm-2">
                                                                            <label class="col-form-label" for="inputSuccess1">Input with
                                                                                success</label>
                                                                            </div>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control form-control-success"
                                                                                id="inputSuccess1">
                                                                                <div class="col-form-label">Success! You've done it.</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group has-warning row">
                                                                            <div class="col-sm-2">
                                                                                <label class="col-form-label" for="inputWarning1">Input with
                                                                                    warning</label>
                                                                                </div>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control form-control-warning"
                                                                                    id="inputWarning1">
                                                                                    <div class="col-form-label">Shucks, check the formatting of that
                                                                                        and try again.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group has-danger row">
                                                                                <div class="col-sm-2">
                                                                                    <label class="col-form-label" for="inputDanger1">Input with
                                                                                        danger</label>
                                                                                    </div>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control form-control-danger"
                                                                                        id="inputDanger1">
                                                                                        <div class="col-form-label">Sorry, that username's taken. Try
                                                                                            another?
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                        <!-- Input Validation card end -->
                                                                        <!-- Input Alignment card start -->
                                                                        <!-- <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Input Alignment</h5>
                                                                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <form>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Normal Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-normal"
                                                                                            placeholder=".form-control-normal">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Bold Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-bold"
                                                                                            placeholder=".form-control-bold">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Capitalize Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-capitalize"
                                                                                            placeholder=".form-control-capitalize">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Uppercase Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-uppercase"
                                                                                            placeholder=".form-control-uppercase">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Lowercase Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-lowercase"
                                                                                            placeholder=".form-control-lowercase">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Varient Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-variant"
                                                                                            placeholder=".form-control-variant">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Left-Align Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-left"
                                                                                            placeholder=".form-control-left">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Center-Align Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-center"
                                                                                            placeholder=".form-control-center">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Right-Align Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-right"
                                                                                            placeholder=".form-control-right">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">RTL Text</label>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-rtl"
                                                                                            placeholder=".form-control-rtl">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div> -->
                                                                        <!-- Input Alignment card end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Page body end -->
                                                        </div>
                                                    </div>
                                                    <!-- Main-body end -->
                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Warning Section Starts -->
                            <!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>

<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Custom js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>