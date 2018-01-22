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
      <div class="span6">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Navbar list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Serial</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              
              <?php 
              $get_menubar = $this->User_model->get_menubar();
              if ($get_menubar->num_rows()>0) {
                foreach ($get_menubar->result_array() as $navbar_value) {
              ?>
                <tr id="nav<?php echo $navbar_value['id'] ?>">
                  <td class="taskDesc"><?php echo $navbar_value['title'] ?></td>
                  <td class="taskStatus"><span class="in-progress"><?php echo $navbar_value['serial'] ?></span></td>
                  <td class="taskOptions">
                    <span id="edit">
                      <a class="btn btn-sm btn-success tip-top" data-original-title="Update" data-id="<?php echo $navbar_value['id'] ?>">
                      <i class="icon-edit"></i>
                      </a>
                    </span> 
                    <button type="button" value="<?php echo $navbar_value['id'] ?>" onclick="delete_navbar(this)" class="btn btn-sm btn-danger tip-top" data-original-title="Delete">
                      <i class="icon-remove"></i>
                    </button>
                  </td>
                </tr> 
              <?php }} ?>


              </tbody>
            </table>
          </div>
        </div>
        
      </div>
      <div class="span5">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Add menu</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">

              <tbody>
                <tr>
                  <th>Title</th>
                  <td>
                    <input type="text" id="title" autofocus="1">
                  </td>
                </tr>
                <tr>
                  <th>Serial</th>
                  <td>
                    <input type="number" id="serial">
                  </td>
                </tr>
                <tr>
                  <th></th>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary tip-top" onclick="add_nav_bar()" data-original-title="Insert">
                      Add
                    </button>
                  </td>
                </tr>

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