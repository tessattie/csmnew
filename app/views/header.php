<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CSM - Home</title>

    <!-- Fontfaces CSS-->
    <link href="/caisses/public/css/font-face.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/caisses/public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/caisses/public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/caisses/public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/caisses/public/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
<div class="page-wrapper">
<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/caisses/public/home">
                            <img src="/caisses/public/images/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="/caisses/public/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/caisses/public/home/reports">
                                <i class="fas fa-chart-bar"></i>Report</a>
                        </li>
                        <li>
                            <a href="/caisses/public/home/charts">
                                <i class="fas fa-table"></i>Chart</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/caisses/public/images/logo.png" style = "width:80%" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/caisses/public/home">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="/caisses/public/home/reports">
                                <i class="fas fa-chart-bar"></i>Reports</a>
                        </li>
                        <li>
                            <a href="/caisses/public/home/charts">
                                <i class="fas fa-table"></i>Charts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <div class="page-container">
        <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" value="004"  name="search" placeholder="Enter register number" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" id="datepicker" name="date" placeholder="Choose date" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">John Doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/caisses/public/account">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/caisses/public/login">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->