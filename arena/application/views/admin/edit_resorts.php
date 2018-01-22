<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->
<?php 
$this->db->where('id',$pack_id);
$query = $this->db->get("resorts");
if ($query->num_rows()>0) {
  foreach ($query->result_array() as $data) {
?>
<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Edit Resorts</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/update_resorts" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="control-group">
                <label class="control-label">Resort Title:</label>
                <div class="controls">
                  <input type="hidden" name="resort_id" value="<?php echo $data['id']; ?>">
                  <input class="span11" value="<?php echo $data['title']; ?>" name="title" placeholder="Resort Title" type="text" required="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" />
                </div>                               
                <div class="controls">
                  <img src="<?php echo base_url(); ?>web_assets/img/resorts/<?php echo $data['userfile']; ?>" class="img-responsive" alt="Image" height="300px">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Rating</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['rating']; ?>" name="rating" placeholder="Rating" type="text" required="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Atoll:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['atoll']; ?>" name="atoll" placeholder="Atoll" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">No of villas:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['no_of_villas']; ?>" name="no_of_villas" placeholder="No of villas" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Duration:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['duration']; ?>" name="duration" placeholder="Duration" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Airport:</label>
                <div class="controls">
                  <input class="span11" value="<?php echo $data['airport']; ?>" name="airport" placeholder="Airport" type="text">
                </div>
              </div>

              <div class="form-actions text-right">
                <button type="submit" class="btn btn-success">Submit</button>
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