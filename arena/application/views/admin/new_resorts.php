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
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add Resorts</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/add_resorts" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="control-group">
                <label class="control-label">Resort Title:</label>
                <div class="controls">
                  <input class="span11" name="title" placeholder="Resort Title" type="text" required="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" required="1" />
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Rating</label>
                <div class="controls">
                  <input class="span11" name="rating" placeholder="Rating" type="text" required="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Atoll:</label>
                <div class="controls">
                  <input class="span11" name="atoll" placeholder="Atoll" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">No of villas:</label>
                <div class="controls">
                  <input class="span11" name="no_of_villas" placeholder="No of villas" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Duration:</label>
                <div class="controls">
                  <input class="span11" name="duration" placeholder="Duration" type="text">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Airport:</label>
                <div class="controls">
                  <input class="span11" name="airport" placeholder="Airport" type="text">
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

<!--end-main-container-part-->