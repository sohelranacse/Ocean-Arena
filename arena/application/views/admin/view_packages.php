<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Packages list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Packages Title</th>
                  <th>Image</th>
                  <th>PDF File</th>
                  <th>Update</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = $this->User_model->get_packages();
                if ($query->num_rows()>0) {
                  foreach ($query->result_array() as $data) {
                ?>
                <tr id="promotion<?php echo $data['id']; ?>">
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['title']; ?></td>
                  <td><img src="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['userfile']; ?>" style="height: 59px"></td>
                  <td><a href="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['file_name']; ?>" class="btn btn-sm btn-default"><?php echo $data['file_name']; ?></a></td>
                  <td class="taskOptions">
                    <span id="edit">
                      <a class="btn btn-primary btn-mini" data-original-title="Update" href="<?php echo base_url(); ?>admin/edit_package/<?php echo $data['id'] ?>">
                      <i class="icon-edit"></i>
                      </a>
                    </span>
                  </td>
                </tr>

                <?php }} ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>



    </div>
<!--End-Action boxes-->  
  </div>
</div>

<!--end-main-container-part-->