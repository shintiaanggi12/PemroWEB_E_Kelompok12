<?php include 'controller/controll.php' ?>

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
                        <a href="dashboard.php">
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
                                                <h5 class="notification-user"><?php echo $_SESSION["username"]; ?></h5>
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
                                    <span><?php echo $_SESSION["username"]; ?></span>
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
                                        <a href="logout.php">
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
                                        <span id="more-details"><?php echo $_SESSION["username"]; ?><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
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
                                    <a href="dashboard.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
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
                                    <a href="surveyKeluarga.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Keluarga</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="surveyIndividu.php" class="waves-effect waves-dark">
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
                                <li>
                                  <a href="hasilSurvIndividu.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Hasil Survey Individu</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                </li>
                                <li class=" ">
                                    <a href="logout.php" class="waves-effect waves-dark">
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
                                            <h5 class="m-b-10">Entri Survey Individu</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Survey Individu</a>
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
                                                        <h4 class="sub-title">Survey Individu</h4>
                                                        <form action="" method="POST">
                                                          <div class="form-group row">
                                                              <h5 <label class="col-sm-2 col-form-label">No. RT/RW</label> </h5>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" name="noRTRW" required="" value="<?=@$vnoRTRW?>"
                                                                  placeholder="No. RT/RW">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <h5 <label class="col-sm-2 col-form-label">No. KK</label> </h5>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" name="noKK" required="" value="<?=@$vnoKK?>"
                                                                  placeholder="No. KK">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <h5 <label class="col-sm-2 col-form-label">NIK</label> </h5>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" name="NIK" required="" value="<?=@$vNIK?>"
                                                                  placeholder="NIK">
                                                              </div>
                                                          </div>
                                                          <a href="hasilSurvIndividu.php">
                                                          <button class="btn btn-primary waves-effect waves-light" name="simpan2">SIMPAN</button>
                                                          </a>
                                                        </form>

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

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                            <!-- Basic Form Inputs card end -->
                                                            <!-- Input Grid card start -->
                                                                  <div class="card">
                                                                      <div class="card-header">
                                                                          <h5>Entri Survey Individu</h5>
                                                                          <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->

                                                                      </div>
                                                                      <div class="card-block">
                                                                        <!-- <div class="sub-title"></div> -->
                                                                        <!-- Nav tabs -->
                                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Data Individu</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Pekerjaan</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Penghasilan</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Kesehatan</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab" href="#disabilitas" role="tab">Disabilitas</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" data-toggle="tab" href="#pendidikan" role="tab">Pendidikan</a>
                                                                                <div class="slide"></div>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- Tab panes -->
                                                                        <div class="tab-content card-block">
                                                                            <div class="tab-pane active" id="home3" role="tabpanel">
                                                                                <!-- <p class="m-0">1. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p> -->
                                                                                <form>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Nama</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Nama Individu">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                                                      <div class="col-sm-10">
                                                                                          <select name="select" class="form-control">
                                                                                              <option value="opt1">Laki-laki</option>
                                                                                              <option value="opt2">Perempuan</option>
                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Tempat Lahir">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="dd/MM/yyyy">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Usia</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Jika kurang dari 1 tahun tulis 0">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Status Pernikahan</label>
                                                                                      <div class="col-sm-10">
                                                                                          <select name="select" class="form-control">
                                                                                              <option value="opt1">Belum Kawin</option>
                                                                                              <option value="opt2">Kawin</option>
                                                                                              <option value="opt2">Cerai Hidup</option>
                                                                                              <option value="opt2">Cerai Mati</option>
                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Agama</label>
                                                                                      <div class="col-sm-10">
                                                                                          <select name="select" class="form-control">
                                                                                              <option value="opt1">Islam</option>
                                                                                              <option value="opt2">Kristen</option>
                                                                                              <option value="opt2">Katolik</option>
                                                                                              <option value="opt2">Hindu</option>
                                                                                              <option value="opt2">Budha</option>
                                                                                              <option value="opt2">Khonghucu</option>
                                                                                              <option value="opt2">lainnya</option>
                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Suku Bangsa</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Tuliskan">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Warga Negara</label>
                                                                                      <div class="col-sm-10">
                                                                                          <select name="select" class="form-control">
                                                                                              <option value="opt1">WNI</option>
                                                                                              <option value="opt2">WNA</option>
                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">No. HP</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Nomor HP">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">No. WA</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Nomor Untuk Whatsapp">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Email</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Email">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Facebook</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Facebook">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Twitter</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Twitter">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Instagraam</label>
                                                                                      <div class="col-sm-10">
                                                                                          <input type="text" class="form-control"
                                                                                          placeholder="Instagram">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="form-group row">
                                                                                      <label class="col-sm-2 col-form-label">Apakah Aktif menggunakan internet sebulan terakhir?</label>
                                                                                      <div class="col-sm-10">
                                                                                          <select name="select" class="form-control">
                                                                                              <option value="opt1">Tidak</option>
                                                                                              <option value="opt2">Ya</option>
                                                                                          </select>
                                                                                      </div>
                                                                                  </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="tab-pane" id="profile3" role="tabpanel">
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Kondisi Pekerjaan</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Bekerja</option>
                                                                                          <option value="opt2">Bersekolah</option>
                                                                                          <option value="opt1">Ibu Rumah Tangga</option>
                                                                                          <option value="opt2">Tidak Bekerja</option>
                                                                                          <option value="opt1">Sedang mencari pekerjaan</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Pekerjaan Utama</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Petani pemilik lahan</option>
                                                                                          <option value="opt2">Petani penyewa</option>
                                                                                          <option value="opt1">Buruh tani</option>
                                                                                          <option value="opt2">Nelayan pemilik kapal/perahu</option>
                                                                                          <option value="opt1">Nelayan penyewa kapal/perahu</option>
                                                                                          <option value="opt1">Buruh nelayan</option>
                                                                                          <option value="opt2">Guru</option>
                                                                                          <option value="opt1">Guru agama</option>
                                                                                          <option value="opt1">Pedagang</option>
                                                                                          <option value="opt2">Pengolahan/Industri</option>
                                                                                          <option value="opt1">PNS</option>
                                                                                          <option value="opt1">Pensiunan</option>
                                                                                          <option value="opt2">Perangkat Desa</option>
                                                                                          <option value="opt1">Pegawai kantor desa</option>
                                                                                          <option value="opt1">TKI</option>
                                                                                          <option value="opt1">Lainnya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Jaminan Sosial Ketenagakerjaan</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Peserta</option>
                                                                                          <option value="opt2">Bukan Peserta</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Penghasilan stahun terakhir (Rp)</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Penghasilan stahun terakhir (Rp)">
                                                                                  </div>
                                                                              </div>
                                                                                <!-- <p class="m-0">2.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p> -->
                                                                            </div>
                                                                            <div class="tab-pane" id="messages3" role="tabpanel">
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Sumber Penghasilan</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Jumlah</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Satuan</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Penghasilan Setahun (Rp)</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Diekspor</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="">
                                                                                  </div>
                                                                              </div>
                                                                                <!-- <p class="m-0">3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p> -->
                                                                            </div>
                                                                            <div class="tab-pane" id="settings3" role="tabpanel">
                                                                              <h6> <b> Penyakit yang diderita setahun terakhir </b> </h6> <br>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Muntaber</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Demam Berdarah</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Campak</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Campak</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Malaria</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Flue Burung</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Covid-19</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Hepatitis B</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Leptospirosis</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Kolera</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Gizi buruk (termasuk stunting)</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Jantung</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">TBC paru-paru</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Kanker</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Diabetes/kencing manis/gula</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Hepatitis E</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Difteri</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Chikungunya</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Lumpuh</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Lainnya</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div> <br>
                                                                              <h6> <b> Berapa kali fasilitas kesehatan berikut didatangi setahun terakhir untuk pengobatan/perawatan </b> </h6> <br>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Rumah Sakit</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Rumah Sakit bersalin</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Puskesmas dgn rawat inap</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Puskesmas tanpa rawat inap</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Puskesmas pembantu</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Poliklinik</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Tempat Praktik dokter</label>
                                                                                  <div class="col-sm-10">
                                                                                      <input type="text" class="form-control"
                                                                                      placeholder="Jumlah">
                                                                                  </div>
                                                                              </div>
                                                                                <!-- <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p> -->
                                                                            </div>
                                                                            <div class="tab-pane" id="disabilitas" role="tabpanel">
                                                                              <h6> <b> INI DISABILITAS </b> </h6> <br>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Muntaber</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="pendidikan" role="tabpanel">
                                                                              <h6> <b> INI pendiidkan </b> </h6> <br>
                                                                              <div class="form-group row">
                                                                                  <label class="col-sm-2 col-form-label">Muntaber</label>
                                                                                  <div class="col-sm-10">
                                                                                      <select name="select" class="form-control">
                                                                                          <option value="opt1">Tidak</option>
                                                                                          <option value="opt2">Ya</option>
                                                                                      </select>
                                                                                  </div>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                          <!-- <h4 class="sub-title">Basic Inputs</h4> -->



                                                                      </div>
                                                                      <button class="btn btn-primary waves-effect waves-light" name="simpan2">SIMPAN</button>
                                                                      <button class="btn btn-primary waves-effect waves-light">BARU</button>
                                                                      <button class="btn btn-primary waves-effect waves-light">UPLOAD</button>
                                                                  </div>

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
