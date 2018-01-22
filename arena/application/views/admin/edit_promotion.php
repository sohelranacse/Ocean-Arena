<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->
<?php
$this->db->where('id',$pro_id);
$query = $this->db->get("promotions");
if ($query->num_rows()>0) {
  foreach ($query->result_array() as $data) {
?>
<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Edit Promotion</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/update_promotion" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="control-group">
                <label class="control-label">Offer Title:</label>
                <div class="controls">
                  <input type="hidden" name="pro_id" value="<?php echo $data['id']; ?>">
                  <input class="span11" value="<?php echo $data['offer_title']; ?>" name="offer_title" placeholder="Offer Title" type="text" required="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Offer Description:</label>
                <div class="controls">
                  <textarea class="span11" name="offer_des" placeholder="Offer Description"><?php echo $data['offer_des']; ?></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Resort Name:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['resort_name']; ?>" name="resort_name" placeholder="Resort Name" type="text" required="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" />
                </div>
                <div class="controls">
                  <img src="<?php echo base_url(); ?>web_assets/img/promotions/<?php echo $data['userfile']; ?>" class="img-responsive" alt="Image" height="300px">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Offer code</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['offer_code']; ?>" name="offer_code" placeholder="Offer code" type="text" required="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Stay During:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['stay_during']; ?>" name="stay_during" placeholder="Stay During" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Minumum Stay:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['minimum_stay']; ?>" name="minimum_stay" placeholder="Minumum Stay" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Validity:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['validity']; ?>" name="validity" placeholder="Validity" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Offer Expiry:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['offer_expiry']; ?>" name="offer_expiry" placeholder="Offer Expiry" type="text">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Valid Villas:</label>
                <div class="controls">
                  <textarea class="span11" name="valid_villas" placeholder="Valid Villas details"><?php echo $data['valid_villas']; ?></textarea>
                </div>
              </div>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Update</button>
              </div>

            </form>
          </div>
        </div>
        
      </div>



    </div>
<!--End-Action boxes-->  
  </div>
</div>
<?php }} ?>
<!--end-main-container-part-->