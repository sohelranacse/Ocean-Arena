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
            <h5>Resorts list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Rating</th>
                  <th>Atoll</th>
                  <th>No of Villas</th>
                  <th>Duration</th>
                  <th>Airport</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = $this->User_model->get_resorts();
                if ($query->num_rows()>0) {
                  foreach ($query->result_array() as $data) {
                ?>
                <tr id="resort<?php echo $data['id']; ?>">
                  <td><?php echo $data['id']; ?></td>
                  <td><img src="<?php echo base_url(); ?>web_assets/img/resorts/<?php echo $data['userfile']; ?>" style="height: 59px"></td>
                  <td><?php echo $data['title']; ?></td>
                  <td><?php echo $data['rating']; ?></td>
                  <td><?php echo $data['atoll']; ?></td>
                  <td><?php echo $data['no_of_villas']; ?></td>
                  <td><?php echo $data['duration']; ?></td>
                  <td><?php echo $data['airport']; ?> km</td>                  
                  <td>
                    <a class="btn btn-success btn-mini" data-original-title="Add details" href="<?php echo base_url(); ?>admin/details/1/0/<?php echo $data['id'] ?>" target="_blank">
                      <i class="icon-plus"></i> Details
                    </a>
                  </td>
                  <td class="taskOptions">
                    <span id="edit">
                      <a class="btn btn-primary btn-mini" data-original-title="Update" href="<?php echo base_url(); ?>admin/edit_resorts/<?php echo $data['id'] ?>">
                      <i class="icon-edit"></i>
                      </a>
                    </span>
                  </td>
                  <td>
                    <button type="button" value="<?php echo $data['id'] ?>" onclick="delete_resort(this)" class="btn btn-danger btn-mini" data-original-title="Delete">
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



    </div>
<!--End-Action boxes-->  
  </div>
</div>

<!--end-main-container-part-->