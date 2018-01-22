<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?></a></div>
  </div>
<!--End-breadcrumbs-->
<?php 
$this->db->where('id',$pack_id);
$query = $this->db->get("packages");
if ($query->num_rows()>0) {
  foreach ($query->result_array() as $data) {
?>
<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Edit Packages</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/update_packages" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="control-group">
                <label class="control-label">Title:</label>
                <div class="controls">
                  <input type="hidden" name="pack_id" value="<?php echo $data['id']; ?>">
                  <input class="span11" value="<?php echo $data['title']; ?>" name="title" placeholder="Packages Title" type="text" required="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" accept="image/x-png,image/gif,image/jpeg" />
                </div>
                <div class="controls">
                  <img src="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['userfile']; ?>" class="img-responsive" alt="Image" height="300px">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">pdf file:</label>
                <div class="controls">
                  <input type="file" name="pfile_name" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="controls">                  
                  <a href="<?php echo base_url(); ?>web_assets/img/packages/<?php echo $data['file_name']; ?>" class="btn btn-sm btn-default"><?php echo $data['file_name']; ?></a>
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