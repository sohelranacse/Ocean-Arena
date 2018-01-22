
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg span3"> <a href="<?php echo base_url(); ?>admin"> <i class="icon-dashboard"></i>MY DASHBOARD </a> </li>
        <li class="bg_lg span3"> <a href="<?php echo base_url(); ?>admin/view_resorts"> <i class="icon-signal"></i><span class="label label-success"><?php $query = $this->User_model->get_resorts(); if ($query->num_rows()>0) { echo $query->num_rows(); }?></span>  RESORTS</a> </li>
        <li class="bg_lg span3"> <a href="<?php echo base_url(); ?>admin/view_hotel"> <i class="icon-th-list"></i><span class="label label-success"><?php $query = $this->User_model->get_hotels(); if ($query->num_rows()>0) { echo $query->num_rows(); }?></span>  HOTELS</a> </li>
        <li class="bg_lg span3"> <a href="<?php echo base_url(); ?>admin/view_promotion"> <i class="icon-inbox"></i><span class="label label-success"><?php $query = $this->User_model->get_promotions(); if ($query->num_rows()>0) { echo $query->num_rows(); }?></span> PROMOTIONS </a> </li>

        <li class="bg_lg span3"> <a href="<?php echo base_url(); ?>admin/view_packages"> <i class="icon-inbox"></i><span class="label label-success"><?php $query = $this->User_model->get_packages(); if ($query->num_rows()>0) { echo $query->num_rows(); }?></span> PACKAGES </a> </li>
      </ul>
    </div>
<!--End-Action boxes-->  
  </div>
</div>

<!--end-main-container-part-->