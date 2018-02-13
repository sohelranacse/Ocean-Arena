<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->
<?php
$this->db->where('id',$room_id);
$query = $this->db->get("rooms");
if ($query->num_rows()>0) {
  foreach ($query->result_array() as $data) {
?>
<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Edit Accommodation</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/update_accommodation" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="control-group">
                <label class="control-label">Title:</label>
                <div class="controls">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <input type="hidden" name="details_id" value="<?php echo $data['details_id']; ?>">
                  <input class="span11" value="<?php echo $data['title']; ?>" name="title" placeholder="Offer Title" type="text" required="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" />
                </div>
                <div class="controls">
                  <img src="<?php echo base_url(); ?>web_assets/img/rooms/<?php echo $data['userfile']; ?>" class="img-responsive" alt="Image" height="300px">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description:</label>
                <div class="controls">
                  <textarea class="textarea_editor2 span11" name="description" rows="6" required="1"><?php echo $data['description']; ?></textarea>               
                  </textarea>
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