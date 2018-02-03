<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?> │ Travel to Maldives And Sri Lanka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="<?php echo base_url(); ?>web_assets/site.webmanifest">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>web_assets/img/favicon.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>web_assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->
        <link href="<?php echo base_url(); ?>web_assets/css/bootstrap.min.css" rel="stylesheet"> <!-- BOOTSTRAP CSS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Satisfy|Tangerine" rel="stylesheet">
        <link href="<?php echo base_url(); ?>web_assets/css/owl.carousel.css" rel="stylesheet"> <!-- OWLCAROUSAL SLIDER CSS -->
        <link href="<?php echo base_url(); ?>web_assets/css/animate.css" rel="stylesheet"> <!-- NORMALIZE CSS -->
        <link href="<?php echo base_url(); ?>web_assets/css/normalize.css" rel="stylesheet"> <!-- NORMALIZE CSS -->
        <link href="<?php echo base_url(); ?>web_assets/css/style.css" rel="stylesheet"> <!-- CUSTOM CSS -->
        <link href="<?php echo base_url(); ?>web_assets/css/responsive.css" rel="stylesheet"> <!-- RESPONSIVE CSS -->
        <script src="<?php echo base_url(); ?>web_assets/js/jquery.min.js"></script> <!-- JQUERY JS -->
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- HEADER SECTION START -->
        <header section="header container-fluid">

            <div class="container">
                <div class="submenu">
                    <ul>
                        <li><a href="http://fis.com.mv/cgi-bin/webfids.pl?webfids_type=arrivals&webfids_domesticinternational=international&webfids_passengercargo=passenger&webfids_airline=ALL&webfids_waypoint=ALL&Submit=+UPDATE+" target="_blank">&#10687; MALDIVES FLIGHT SCHEDULE</a></li>
                        <li><a href="http://www.airport.lk/flight_info/arrival.php" target="_blank">&#10687; SRI LANKA FLIGHT SCHEDULE</a></li>
                    </ul>
                </div>
            </div>
            
            <nav class="hidden-xs navbar navbar-default" role="navigation">
                <div class="container">
                    
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar-logo" href="<?php echo base_url(); ?>home">
                            <img src="<?php echo base_url(); ?>web_assets/img/logo-banner-arena.png" class="img-responsive" alt="logo">
                        </a>

            
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse mynav-list" style="width: 100%; z-index: 9999;">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url(); ?>home" class="<?php if($title=='Ocean Arena'){echo 'active-menu';} ?>">HOME</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle <?php if($title=='Maldives || Ocean Arena' || $title=='Maldives Resorts || Ocean Arena' || $title=='Maldives Hotel || Ocean Arena'){echo 'active-menu';} ?>" data-toggle="dropdown">MALDIVES <b class="caret"></b></a>
                                    <ul class="dropdown-menu mynav-list-drop">
                                        <li><a href="<?php echo base_url(); ?>home/maldives_about">ABOUT</a></li>
                                        <li><a href="<?php echo base_url(); ?>home/maldives_resorts">RESORTS</a></li>
                                        <li><a href="<?php echo base_url(); ?>home/maldives_hotel">HOTEL</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle <?php if($title=='Sri Lanka || Ocean Arena' || $title=='Sri Lanka Hotel || Ocean Arena' || $title=='Sri Lanka Packages || Ocean Arena'){echo 'active-menu';} ?>" data-toggle="dropdown">SRI LANKA <b class="caret"></b></a>
                                    <ul class="dropdown-menu  mynav-list-drop">
                                        <li><a href="<?php echo base_url(); ?>home/srilanka_about">ABOUT</a></li>
                                        <li><a href="<?php echo base_url(); ?>home/hotel_srilanka">HOTEL</a></li>
                                        <li><a href="<?php echo base_url(); ?>home/srilanka_packages">PACKAGES</a></li>
                                    </ul>
                                </li>
                                <li><a class="<?php if($title=='About us || Ocean Arena'){echo 'active-menu';} ?>" href="<?php echo base_url(); ?>home/about">ABOUT US</a></li>
                                <li><a class="<?php if($title=='Contact us || Ocean Arena'){echo 'active-menu';} ?>" href="<?php echo base_url(); ?>home/contact">CONTACT</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                    </div>
                </div>

            </nav>


            <nav class="navbar navbar-default hidden-sm hidden-md hidden-lg" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-small">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar-logo" href="<?php echo base_url(); ?>home">
                            <img src="<?php echo base_url(); ?>web_assets/img/logo.png" class="hidden-md hidden-sm hidden-lg img-responsive" alt="logo">
                        </a>
                    </div>
            
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse for-xs-nav"  id="nav-small">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>home" class="<?php if($title=='Ocean Arena'){echo 'active-menu';} ?>">HOME</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle <?php if($title=='Maldives || Ocean Arena' || $title=='Maldives Resorts || Ocean Arena' || $title=='Maldives Hotel || Ocean Arena'){echo 'active-menu';} ?>" data-toggle="dropdown">MALDIVES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>home/maldives_about">ABOUT</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/maldives_resorts">RESORTS</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/maldives_hotel">HOTEL</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle <?php if($title=='Sri Lanka || Ocean Arena' || $title=='Sri Lanka Hotel || Ocean Arena' || $title=='Sri Lanka Packages || Ocean Arena'){echo 'active-menu';} ?>" data-toggle="dropdown">SRI LANKA <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>home/srilanka_about">ABOUT</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/hotel_srilanka">HOTEL</a></li>
                                    <li><a href="<?php echo base_url(); ?>home/srilanka_packages">PACKAGES</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php if($title=='About us || Ocean Arena'){echo 'active-menu';} ?>" href="<?php echo base_url(); ?>home/about">ABOUT US</a></li>
                            <li><a class="<?php if($title=='Contact us || Ocean Arena'){echo 'active-menu';} ?>" href="<?php echo base_url(); ?>home/contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>


        </header>
        <!-- HEADER SECTION END -->