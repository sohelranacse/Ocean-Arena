<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url() ?>admin" title="Go to Home" class="tip-bottom"><i class="icon-cog"></i> <?php echo $title; ?> Information update</a></div>
  </div>
<!--End-breadcrumbs-->
<?php
  if (isset($value)) {
  foreach ($value->result_array() as $data) {

    $id = $data['id'];
    $re_id = $data['re_id'];
    $type = $data['type'];
    $hotel_type = $data['hotel_type']; //GETTED DETAILS TABLE

    $this->db->where('id',$re_id);
    if ($hotel_type == 0) {
      $table = 'resorts';
    }else{
      $table = 'hotels';
    }
    $query = $this->db->get($table);
    $host_data = $query->row();
?>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
        <h3>
          <?php if ($hotel_type == 0) { 
            echo 'Resorts'; 
          }elseif ($hotel_type == 1) {
            echo 'Hotels / Maldives'; 
          }elseif ($hotel_type == 2) {
            echo 'Hotels / Sri Lanka';          
          } 
          ?> // <?php echo $host_data->title; ?>
        </h3>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Overview</h5>
          </div>
          <div class="widget-content">
              <input type="hidden" id="details_id" value="<?php echo $data['id']; ?>">

              <div class="control-group">
                <div class="controls">
                  <textarea class="textarea_editor span11" rows="6" id="overview" required="1" <?php if($data['overview']==''){echo 'placeholder="Enter text ..."'; } ?>>
                    <?php echo $data['overview']; ?>                    
                  </textarea>
                </div>
              </div>
              <div class="control-group text-center">
                <button type="button" class="btn btn-success" onclick="return overview_submit()">Update</button>
              </div>

          </div>
        </div>
        
      </div> <!-- //LEFT SIDE -->

      <div class="span10" style="margin: 0;">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Accommodation</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="<?php echo base_url(); ?>admin/add_accommodation" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <input type="hidden" name="details_id" value="<?php echo $data['id']; ?>">
              <input type="hidden" name="re_id" value="<?php echo $data['re_id']; ?>">
              <input type="hidden" name="type" value="<?php echo $data['type']; ?>">
              <input type="hidden" name="hotel_type" value="<?php echo $data['hotel_type']; ?>">

              <div class="control-group">
                <label class="control-label">Title:</label>
                <div class="controls">
                  <input class="span8" name="title" placeholder="Accommodation Title" type="text" required="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Image:</label>
                <div class="controls">
                  <input type="file" name="userfile" required="1" accept="image/x-png,image/gif,image/jpeg" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description:</label>
                <div class="controls">
                  <textarea class="textarea_editor2 span11" name="description" rows="6" required="1" placeholder="Enter text ..."></textarea>               
                  </textarea>
                </div>
              </div>

              <div class="form-actions text-center">
                <button type="submit" class="btn btn-success">Add Accommodation</button>
              </div>

            </form>
          </div>
        </div>
        
      </div>

      <div class="span10" style="margin: 0;">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>All accommodation</h5>
          </div>
          <div class="widget-content nopadding">

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $this->db->where('details_id',$id);
                $query = $this->db->get('rooms');
                if ($query->num_rows()>0) {
                  foreach ($query->result_array() as $rooms_data) {
                ?>
                <tr id="rooms<?php echo $rooms_data['id']; ?>">
                  <td><?php echo $rooms_data['id']; ?></td>
                  <td><img src="<?php echo base_url(); ?>web_assets/img/rooms/<?php echo $rooms_data['userfile']; ?>" style="height: 59px"></td>
                  <td><?php echo $rooms_data['title']; ?></td>
                  <td><?php echo substr($rooms_data['description'], 0, 100); ?></td>
                  <td>
                    <button type="button" value="<?php echo $rooms_data['id'] ?>" onclick="delete_rooms(this)" class="btn btn-danger btn-mini" data-original-title="Delete">
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
<?php }} ?>
<!--end-main-container-part-->