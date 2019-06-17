<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/17/2019
 * Time: 7:19 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Green Chilli is a simple Restaurent and Cafe website">

    <title>Welcome to Hungry</title>
    <link rel="shortcut icon" type="image/ico" href="http://restaurant.bdtask.com/assets_web/images/favicon.png">

    <!--====== Plugins CSS Files =======-->
    <link href="http://restaurant.bdtask.com/assets_web/plugins/bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/animate-css/animate.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/metismenu/metisMenu.min.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/plugins/clockpicker/clockpicker.min.css" rel="stylesheet">

    <!--====== Custom CSS Files ======-->
    <link href="http://restaurant.bdtask.com/assets_web/css/style.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/css/responsive.css" rel="stylesheet">
    <link href="http://restaurant.bdtask.com/assets_web/css/custome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://restaurant.bdtask.com/assets_web/css/jquery.rateyo.min.css"/>
    <script src="http://restaurant.bdtask.com/assets_web/js/jquery-3.3.1.min.js"></script>
    <script src="http://restaurant.bdtask.com/assets/js/product.js.php" ></script>
    <script src="http://restaurant.bdtask.com/assets/js/category.js.php" ></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div class="preloader"></div>

<!--START HEADER TOP-->
<header class="header_top_area">
    <div class="header_top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="" href="http://restaurant.bdtask.com/">
                    <img src="http://restaurant.bdtask.com/assets/img/2019-05-19/b.png" alt="logo">
                </a>
                <div class="sidebar-toggle-btn">
                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="ti-menu"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://restaurant.bdtask.com/hungry/details">Details</a>
                            </div>

                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link " href="http://restaurant.bdtask.com/hungry/reservation" >Reservation</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            </div>

                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link " href="http://restaurant.bdtask.com/hungry/menu" >Menu</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            </div>

                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://restaurant.bdtask.com/hungry/about">About Us</a>
                            </div>

                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://restaurant.bdtask.com/hungry/cart">Carts</a>
                                <a class="dropdown-item" href="http://restaurant.bdtask.com/hungry/logout">Logout</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="dropdown-menu search_box" aria-labelledby="navbarDropdown2">
                                <form class="card card-sm">
                                    <div class="card-body row no-gutters align-items-center">
                                        <div class="col">
                                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                        </div>
                                        <!--end of col-->
                                        <div class="col-auto">
                                            <button class="btn btn-lg btn-success" type="submit">Search</button>
                                        </div>
                                        <!--end of col-->
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://restaurant.bdtask.com/hungry/cart" id="navbarDropdown3">
                                <i class="ti-shopping-cart"></i><span class="badge badge-notify my-cart-badge" id="itemnum">0</span>
                            </a>
                            <!--<div class="dropdown-menu cart_box" aria-labelledby="navbarDropdown3">
                                <p>Your Cart is Empty</p>
                            </div>-->
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /. Navbar -->
            <nav id="sidebar" class="sidebar-nav">
                <div id="dismiss">
                    <i class="ti-close"></i>
                </div>
                <ul class="metismenu list-unstyled" id="mobile-menu">
                    <li>
                        <a href="#" aria-expanded="false">Home <span class="fa arrow"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="http://restaurant.bdtask.com/hungry/details">Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://restaurant.bdtask.com/hungry/reservation" aria-expanded="false">Reservation </a>
                    </li>
                    <li>
                        <a href="http://restaurant.bdtask.com/hungry/menu" aria-expanded="false">Menu </a>
                    </li>
                    <li>
                        <a href="#" aria-expanded="false">Contact Us <span class="fa arrow"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="http://restaurant.bdtask.com/hungry/about">About Us</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" aria-expanded="false">Pages <span class="fa arrow"></span></a>
                        <ul aria-expanded="false">
                            <li><a href="http://restaurant.bdtask.com/hungry/cart">Carts</a></li>
                            <li><a href="http://restaurant.bdtask.com/hungry/logout">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class="overlay"></div>
        </div>
    </div>

