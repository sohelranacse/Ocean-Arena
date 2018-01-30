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
<section class="about-section">
	<div class="container">
		<div class="col-md-offset-1 col-md-10 top-header-page">
			<h1 class="text-center wow fadeIn" data-wow-delay="300ms"><?php echo $host_data->title; ?></h1>
			<a onclick="goBack()" class="go-back wow fadeIn" data-wow-delay="300ms">
	            <img src="<?php echo base_url(); ?>web_assets/img/icons/go-back-arrow.png" class="img-responsive" alt="Go back"> <strong>Go Back</strong>
	        </a>
	    </div>
	</div>
</section>
<script>
function goBack() {
    window.history.back();
}
</script>
<section class="maldives-about-section">
	<div class="container">

			

		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<ul class="nav tabs details-tabs">
		          <li class="active"><a href="#tab1" data-toggle="tab">OVERVIEW</a></li>
		          <li class=""><a href="#tab2" data-toggle="tab">ACCOMMODATION</a></li>
				</ul>				
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="tab-content" style="min-height: 500px;">

					<div class="tab-pane active text-style sidebar-content wow fadeIn" data-wow-delay="200ms" id="tab1">
						<div class="details-section-left">
							<?php echo $data['overview']; ?>
						</div>
					</div>
					<div class="tab-pane text-style sidebar-content" id="tab2">
					    <div class="details-section-right">	
							<?php
			                $this->db->where('details_id',$id);
			                $query = $this->db->get('rooms');
			                if ($query->num_rows()>0) {
			                  foreach ($query->result_array() as $rooms_data) {
			                ?>
							<div class="row" style="padding: 10px 15px">
								<div class="col-md-4 col-sm-4">
									<div class="maldives_about_visa_img_details">
										<img src="<?php echo base_url(); ?>web_assets/img/rooms/<?php echo $rooms_data['userfile']; ?>" alt="accommodation image">
						    		</div>
								</div>
								<div class="col-md-8 col-sm-8">
									<h5><?php echo $rooms_data['title']; ?></h5>
									<p>
										<?php echo $rooms_data['description']; ?>
									</p>
								</div>
							</div>
							<?php }} ?>
						</div>

					</div>

				</div>
			</div>

		</div>



	</div>
</section>

<?php }} ?>