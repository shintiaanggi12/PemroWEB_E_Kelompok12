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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                        <!-- logo kiri atas -->
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
                                                <h5 class="notification-user">John Doe</h5>
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
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search </label>
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
                                <!-- menu ke bawah -->
                                <li class="">
                                    <a href="surveyDesa.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Desa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="surveyRT.php" class="waves-effect waves-dark">
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
                                <li class="">
                                    <a href="surveyIndividu.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Survey Individu</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="hasilSurvDesa.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Hasil Survey Desa</span>
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

                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Entri Survey RT</h5>
                                            <!-- <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p> -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="dashboard.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Survey RT</a>
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
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>JAWA TIMUR->KABUPATEN JEMBER->AJUNG->WIROWONGSO</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material">
                                                            <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">No. RT/RW</label>
                                                            </div>
                                                            <button class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                                                            <!-- <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email (exa@gmail.com)</label>
                                                            </div> -->
                                                            <!-- <div class="form-group form-default">
                                                                <input type="password" name="footer-email" class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                            </div> -->
                                                            <!-- <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" value="My value">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Predefine value</label>
                                                            </div> -->
                                                            <!-- <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" disabled>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Disabled</label>
                                                            </div> -->
                                                            <!-- <div class="form-group form-default">
                                                                <input type="text" name="footer-email" class="form-control" required="" maxlength="6">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Max length 6 char</label>
                                                            </div> -->
                                                            <!-- <div class="form-group form-default">
                                                                <textarea class="form-control" required=""></textarea>
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Text area Input</label>
                                                            </div> -->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Material Form Inputs With Static Label</h5>
                                                        <!-<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                        </div>
                                        <!-- <div class="card-block">
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
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
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
                            </div> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Form Inputs card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Survey RT</h5>
                                            <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                        </div>
                                        <div class="card-block">
                                            <!-- <h4 class="sub-title">Basic Inputs</h4> -->
                                            <div class="card-block">
                                                <!-- <div class="sub-title"></div> -->
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#lokasi" role="tab">Lokasi</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#pengurus" role="tab">Pengurus</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#lembagaEko" role="tab">Lembaga Ekonomi</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#industri" role="tab">Industri</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#saranaEkonomi" role="tab">Sarana Ekonomi</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#fasilitasEkonomi" role="tab">Fasilitas Ekonomi</a>
                                                        <div class="slide"></div>
                                                    </li>

                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="lokasi" role="tabpanel">
                                                        <!-- <p class="m-0">1. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas Cum sociis natoque penatibus et magnis dis.....</p> -->
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Ketua RT</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Nama Ketua RT">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Alamat Ketua RT">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">HP/Telepon</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="telepon" class="form-control" placeholder="HP/Telepon" maxlength="13">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lokasi RT terletak dipulau</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Ketik nama pulau, pisahkan koma jika lebih dari satu">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tografi terluas wilayah RT</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                      <option value="opt1">Lereng/Puncak</option>
                                                                                      <option value="opt2">Lembah</option>
                                                                                      <option value="opt3">Dataran</option>
                                                                                      <option value="opt4">Pesisir</option>
                                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga di lereng / puncak</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Penanaman/pemeliharaan pepohonan di lahan kritis</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                      <option value="opt1">Ada, sebagian warga terlibat</option>
                                                                                      <option value="opt2">Ada, warga tidak terlibat</option>
                                                                                      <option value="opt3">Tdak Ada Kegiatan</option>
                                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Panjang Garis Pantai</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" name="jarak" class="form-control" placeholder="Panjang garis pantai (km)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pemanfaatan laut perikanan tangkap</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ya</option>
                                                                                  <option value="opt2">Tidak</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pemanfaatan laut perikanan budidaya</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ya</option>
                                                                                  <option value="opt2">Tidak</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pemanfaatan laut tambak garam</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ya</option>
                                                                                  <option value="opt2">Tidak</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pemanfaatan laut wisata bahari</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ya</option>
                                                                                  <option value="opt2">Tidak</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pemanfaatan laut transportasi umum</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ya</option>
                                                                                  <option value="opt2">Tidak</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kondisi Mangrove</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Seluruhnya baik</option>
                                                                                  <option value="opt2">Sebagian besar baik</option>
                                                                                  <option value="opt3">Sebagian besar buruk</option>
                                                                                  <option value="opt4">Seluruhnya Buruk</option>
                                                                                  <option value="opt5">Tidak Ada</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Penanaman Mangrove</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                      <option value="opt1">Ada, sebagian warga terlibat</option>
                                                                                      <option value="opt2">Ada, warga tidak terlibat</option>
                                                                                      <option value="opt3">Tdak Ada Kegiatan</option>
                                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga di wilayah pesisir</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga tinggal di atas air</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Wilayah Desa di dalam hutan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Wilayah desa di hutan (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Wilayah Desa di tepi hutan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Wilayah desa di tepi hutan (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Fungsi Hutan</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Konservasi (ha) </label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Konservasi (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Lindung (ha) </label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Lindung (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Produksi (ha) </label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Produksi (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Hutan Desa (ha) </label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Hutan Desa (ha)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga yang tinggal di dalam hutan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah warga yang tinggal di sekitar hutan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Ketergantungan Warga terhadap Hutan</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Tinggi</option>
                                                                                  <option value="opt2">Sedang</option>
                                                                                  <option value="opt3">Rendah</option>
                                                                                  <option value="opt4">Tidak Tergantung</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Reboisasi Hutan</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                      <option value="opt1">Ada, sebagian warga terlibat</option>
                                                                                      <option value="opt2">Ada, warga tidak terlibat</option>
                                                                                      <option value="opt3">Tdak Ada Kegiatan</option>
                                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah penduduk luar desa yang masuk dan menetap di desa, setahun terakhir</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah penduduk yang keluar dari desa setahun terakhir</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Jiwa">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <!-- panel 1 -->

                                                    <div class="tab-pane" id="pengurus" role="tabpanel">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                  <option value="opt1">Ketua RW  </option>
                                                                                  <option value="opt2">Sekretaris RW</option>
                                                                                  <option value="opt3">Bendahara RW</option>
                                                                                  <option value="opt4">Ketua RT  </option>
                                                                                  <option value="opt5">Sekretaris RT</option>
                                                                                  <option value="opt6">Bendahara RT</option>
                                                                              </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Ketik Nama">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">NIK</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Ketik NIK" maxlength="16">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">No. HP</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="telepon" class="form-control" placeholder="Ketik Nomor Handphone" maxlength="13">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Menjabat Sejak</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" name="year" class=" form-control " placeholder="Menjabat Sejak tahun ">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="lembagaEko" role="tabpanel ">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Agen pengerahan TKI ke luar negeri</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah (Perusahaan)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Perusahaan">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Tenaga Kerja</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Tenaga Kerja">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tata Ruang Industri</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Sentra Industri</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Perusahaan">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Lingkungan Industri Kecil (LIK)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah LIK">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Perkampungan Industri Kecil (PIK)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah PIK">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Keberadaan pub/diskotik/tempat karaoke </label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ada </option>
                                                                            <option value="opt2">Tidak Ada </option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jarak Terdekat</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jarak Terdekat Ke Lokasi (km)">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Pangkalan Minyak Tanah dan LPG</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Keberadaan pangkalan/agen/penjual minyak tanah</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ada </option>
                                                                            <option value="opt2">Tidak Ada </option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Keberadaan pangkalan/agen/penjual LPG</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ada </option>
                                                                            <option value="opt2">Tidak Ada </option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Keberadaan Koperasi</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah KUD</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah KUD">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah KUD yang membeli/menjual hasil/produksi pertanian</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah KUD Pertanian">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah KUD yang menyediakan kredit Usaha</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah KUD Kredit Usaha">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah KUD Kegiatan Lainnya</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah KUD Kegiatan Lainnya">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Koperasi Industri Kecil dan Kerajinan Rakyat</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Koperasi Industri Kecil dan Kerajinan Rakyat">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Koperasi Simpan Pinjam</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Koperasi Simpan Pinjam">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Koperasi Serba Usaha</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Koperasi Simpan Pinjam">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Koperasi Lainnya</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Koperasi Lainnya">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kios sarana produksi petani/nelayan</label>
                                                                <div class="col-sm-10">
                                                                    <!-- <div class="form-control-static">Hello !... This is static text
                                                                  </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Milik KUD (Unit)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Kios Milik KUD">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Milik Bumdes (Unit)</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Kios Milik Bumdes">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Milik Selain KUD dan Bumdes </label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Selain KUD dan Bumdes">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="industri" role="tabpanel ">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis Industri</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                              <option value="opt1">Industri barang dari kulit (tas,sepatu,sandal,dll)</option>
                                                                                              <option value="opt2">Industri barang dari kayu (meja,kursi,lemari,dll)</option>
                                                                                              <option value="opt3">Industri barang dari logam mulia atau bahan logam (perabot,perhiasan, dll)</option>
                                                                                              <option value="opt4">Industri logam berat</option>
                                                                                              <option value="opt5">Industri barang dari kain(tenun,konveksi,dll)</option>
                                                                                              <option value="opt6">Industri gerabah/keramik/batu (porselen,keramik,tegel,dll)</option>
                                                                                              <option value="opt7">Industri genteng dan batu bata</option>
                                                                                              <option value="opt8">Industri anyaman dari rotan/bambu/rumput/pandan dll</option>
                                                                                              <option value="opt9">Industri makanan dan minuman</option>
                                                                                              <option value="opt10">Industri  lainnya</option>
                                                                                          </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Industri Kecil dan Rumah Tangga</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Industri Kecil dan Rumah Tangga">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Industri Sedang dan Besar</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Industri Sedang dan Besar">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Manajemen</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Manajemen">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Pekerja</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Pekerja">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="saranaEkonomi" role="tabpanel ">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis Sarana Ekonomi</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                                              <option value="opt1">Kelompok pertokoan (minimal 10 toko dan mengelompokkan dalam satu lokasi)</option>
                                                                                              <option value="opt2">Pasar dengan bangunan permanen memiliki atap, lantai, dan dinding</option>
                                                                                              <option value="opt3">Pasar dengan bangunan semi permanen memiliki atap dan lantai tanpa dinding</option>
                                                                                              <option value="opt4">Jumlah minimarket/swalayan</option>
                                                                                              <option value="opt5">Toko/warung kelontong</option>
                                                                                              <option value="opt6">Toko/warung kelontong yang menjual bahan pangan</option>
                                                                                              <option value="opt7">Restoran/Rumah Makan</option>
                                                                                              <option value="opt8">Warung/kedai makanan minuman</option>
                                                                                              <option value="opt9">Hotel</option>
                                                                                              <option value="opt10">Bengkel mobil/motor</option>
                                                                                              <option value="opt11">Salon Kecantikan</option>
                                                                                          </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jumlah Sarana</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Jumlah Sarana">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kondisi</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Baik</option>
                                                                            <option value="opt2">Buruk</option>
                                                                            <option value="opt3">Tidak Berfungsi</option>
                                                                            <option value="opt4">Tidak Ada</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kemudahan Untuk Mencapai</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Sangat Mudah</option>
                                                                            <option value="opt2">Mudah</option>
                                                                            <option value="opt3">Sulit</option>
                                                                            <option value="opt4">Sangat Sulit</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="fasilitasEkonomi" role="tabpanel ">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kredit Usaha Rakyat </label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ya</option>
                                                                            <option value="opt2">Tidak</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kredit Ketahanan Pangan dan Energi</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ya</option>
                                                                            <option value="opt2">Tidak</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kredit Usaha Kecil</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ya</option>
                                                                            <option value="opt2">Tidak</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Kelompok Usaha Bersama</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                            <option value="opt1">Ya</option>
                                                                            <option value="opt2">Tidak</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- <div class="form-group row ">
                                                              <label class="col-sm-2 col-form-label ">Read only</label>
                                                              <div class="col-sm-10 ">
                                                                  <input type="text " class="form-control " placeholder="You can 't change me" readonly>
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Disable Input</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" placeholder="Disabled text" disabled>
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Predefine
                                                                              Input</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" value="Enter yout content after me">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Select Box</label>
                                                        <div class="col-sm-10">
                                                            <select name="select" class="form-control">
                                                                                      <option value="opt1">Select One Value Only</option>
                                                                                      <option value="opt2">Type 2</option>
                                                                                      <option value="opt3">Type 3</option>
                                                                                      <option value="opt4">Type 4</option>
                                                                                      <option value="opt5">Type 5</option>
                                                                                      <option value="opt6">Type 6</option>
                                                                                      <option value="opt7">Type 7</option>
                                                                                      <option value="opt8">Type 8</option>
                                                                                  </select>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Round Input</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-round" placeholder=".form-control-round">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Maximum
                                                                                  Length</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Disable
                                                                                      Autocomplete</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control" placeholder="Autocomplete Off" autocomplete="off">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Static Text</label>
                                                              <div class="col-sm-10">
                                                                  <div class="form-control-static">Hello !... This is static text
                                                                  </div>
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Color</label>
                                                              <div class="col-sm-10">
                                                                  <input type="color" class="form-control">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Upload File</label>
                                                              <div class="col-sm-10">
                                                                  <input type="file" class="form-control">
                                                              </div>
                                                          </div> -->
                                                    <!-- <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Textarea</label>
                                                              <div class="col-sm-10">
                                                                  <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                              </div>
                                                          </div> -->
                                                    <button class="btn btn-primary waves-effect waves-light">SIMPAN</button>
                                                    <button class="btn btn-primary waves-effect waves-light">BARU</button>
                                                    <button class="btn btn-primary waves-effect waves-light">UPLOAD</button>
                                                    </form>


                                                    <!-- <div class="row">
                                                <div class="col-sm-6">
                                                    <h4 class="sub-title">Input Sizes</h4>
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder=".form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <h4 class="sub-title">Color Inputs</h4>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-primary" placeholder=".form-control-primary">
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-warning" placeholder=".form-control-warning">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-default" placeholder=".form-control-default">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-danger" placeholder=".form-control-danger">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-success" placeholder=".form-control-success">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-inverse" placeholder=".form-control-inverse">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-control-info" placeholder=".form-control-info">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->
                                                    <!-- <div class="row">
                                                <div class="col-sm-6 mobile-inputs">
                                                    <h4 class="sub-title">Text-color</h4>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-txt-primary" placeholder=".form-txt-primary">
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-warning" placeholder=".form-txt-warning">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-default" placeholder=".form-txt-default">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-danger" placeholder=".form-txt-danger">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-success" placeholder=".form-txt-success">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-inverse" placeholder=".form-txt-inverse">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-txt-info" placeholder=".form-txt-info">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-6 mobile-inputs">
                                                    <h4 class="sub-title">Background-color</h4>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div> -->
                                                </div>
                                            </div>
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
                                                        <input type="text" class="form-control" placeholder="col-sm-1">
                                                    </div>
                                                    <div class="col-sm-11">
                                                        <input type="text" class="form-control" placeholder="col-sm-11">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-2">
                                                        <input type="text" class="form-control" placeholder="col-sm-2">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" placeholder="col-sm-10">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" placeholder="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" placeholder="col-sm-9">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="col-sm-4">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" placeholder="col-sm-8">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="col-sm-5">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" placeholder="col-sm-7">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" placeholder="col-sm-12">
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
                                                        <input type="text" class="form-control" placeholder="col-sm-4">
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
                                                        <input type="text" class="form-control" placeholder="col-sm-6">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="col">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" placeholder="col-sm-8">
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
                                                        <input type="text" class="form-control" placeholder="col-sm-10">
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
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                                    <div class="col-form-label">Success! You've done it.</div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-warning row">
                                                                <div class="col-sm-2">
                                                                    <label class="col-form-label" for="inputWarning1">Input with
                                                                                    warning</label>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                                                    <div class="col-form-label">Shucks, check the formatting of that and try again.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-danger row">
                                                                <div class="col-sm-2">
                                                                    <label class="col-form-label" for="inputDanger1">Input with
                                                                                        danger</label>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                                                    <div class="col-form-label">Sorry, that username's taken. Try another?
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
                                                        <input type="text" class="form-control form-control-normal" placeholder=".form-control-normal">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Bold Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-bold" placeholder=".form-control-bold">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Capitalize Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-capitalize" placeholder=".form-control-capitalize">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Uppercase Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-uppercase" placeholder=".form-control-uppercase">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Lowercase Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-lowercase" placeholder=".form-control-lowercase">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Varient Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-variant" placeholder=".form-control-variant">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Left-Align Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-left" placeholder=".form-control-left">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Center-Align Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-center" placeholder=".form-control-center">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Right-Align Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-right" placeholder=".form-control-right">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">RTL Text</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-rtl" placeholder=".form-control-rtl">
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

</html>ript src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>ript src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>