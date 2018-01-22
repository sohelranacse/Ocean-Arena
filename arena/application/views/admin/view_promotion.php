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
            <h5>Promotion list</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Offer Code</th>
                  <th>Offer Title</th>
                  <th>Resort Name</th>
                  <th>Stay Duration</th>
                  <th>Minimum Stay</th>
                  <th>Validity</th>
                  <th>Offer Expiry</th>
                  <th>Valid Villas</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = $this->User_model->get_promotions();
                if ($query->num_rows()>0) {
                  foreach ($query->result_array() as $data) {
                ?>
                <tr id="promotion<?php echo $data['id']; ?>">
                  <td><?php echo $data['id']; ?></td>
                  <td><img src="<?php echo base_url(); ?>web_assets/img/promotions/<?php echo $data['userfile']; ?>" style="height: 59px"></td>
                  <td><?php echo $data['offer_code']; ?></td>
                  <td><?php echo $data['offer_title']; ?></td>
                  <td><?php echo $data['resort_name']; ?></td>
                  <td><?php echo $data['stay_during']; ?></td>
                  <td><?php echo $data['minimum_stay']; ?></td>
                  <td><?php echo $data['validity']; ?></td>
                  <td><?php echo $data['offer_expiry']; ?></td>
                  <td><?php echo substr($data['valid_villas'], 0, 10); ?></td>
                  <td class="taskOptions">
                    <span id="edit">
                      <a class="btn btn-primary btn-mini" data-original-title="Update" href="<?php echo base_url(); ?>admin/edit_promotion/<?php echo $data['id'] ?>">
                      <i class="icon-edit"></i>
                      </a>
                    </span>
                  </td>
                  <td>
                    <button type="button" value="<?php echo $data['id'] ?>" onclick="delete_promotion(this)" class="btn btn-danger btn-mini" data-original-title="Delete">
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