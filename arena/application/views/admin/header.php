<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?> :: Admin panel</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>web_assets/img/favicon.png">
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/matrix-media.css" />
<link href="<?php echo base_url() ?>assets/fonts/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>panel_assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/bootstrap-wysihtml5.css" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url() ?>admin">Admin Panel</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="<?php echo base_url() ?>admin/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <a href="<?php echo base_url() ?>admin" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if($title=='Dashboard'){echo'active';} ?>"><a href="<?php echo base_url() ?>admin"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu <?php if($title=='New Resorts' || $title=='View Resorts'){echo 'active open';} ?>"> <a href="#"><i class="icon icon-cog"></i> <span>Resorts</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>admin/new_resorts">New Resorts</a></li>
        <li><a href="<?php echo base_url(); ?>admin/view_resorts">View Resorts</a></li>
      </ul>
    </li>
    <li class="submenu <?php if($title=='New Hotel' || $title=='View Hotel'){echo 'active open';} ?>"> <a href="#"><i class="icon icon-cog"></i> <span>Hotel</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>admin/new_hotel">New Hotel</a></li>
        <li><a href="<?php echo base_url(); ?>admin/view_hotel">View Hotel</a></li>
      </ul>
    </li>

    <li class="submenu <?php if($title=='New Promotion' || $title=='View Promotion'){echo 'active open';} ?>"> <a href="#"><i class="icon icon-cog"></i> <span>Promotions</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>admin/new_promotion">New Promotions</a></li>
        <li><a href="<?php echo base_url(); ?>admin/view_promotion">View Promotions</a></li>
      </ul>
    </li>
    <li class="submenu <?php if($title=='New Packages' || $title=='View Packages'){echo 'active open';} ?>"> <a href="#"><i class="icon icon-cog"></i> <span>Packages</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>admin/new_packages">New Packages</a></li>
        <li><a href="<?php echo base_url(); ?>admin/view_packages">View Packages</a></li>
      </ul>
    </li>

  </ul>
</div>
<!--sidebar-menu-->