
<section class="about-section">
	<div class="container">
		<div class="col-md-offset-1 col-md-10 top-header-page">
			<h1 class="text-center wow fadeIn" data-wow-delay="300ms">Maldives Resorts</h1>
			<span class="top-divider wow fadeIn" data-wow-delay="300ms">
	            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
	        </span>
	        <p class="wow fadeIn" data-wow-delay="500ms"">
	        	Immerse yourself in the pristine tropical islands of Maldives and experience the natural world in a luxurious resort.
	        </p>
	    </div>
	</div>
</section>
<section class="hotel-section">
	<div class="container">

	<?php
    $query = $this->User_model->get_resorts();
    if ($query->num_rows()>0) {
      foreach ($query->result_array() as $data) {
    ?>
		<div class="col-md-3 col-sm-4">
			<div class="hotel-srilanks">

				<div class="img-p"><img src="<?php echo base_url(); ?>web_assets/img/resorts/<?php echo $data['userfile']; ?>" class="img-responsive" alt="hotel"></div>
				<h4 class="h4_ti"><?php echo $data['title']; ?></h4>

				<div class="part-2">
					<h4 class="h4_ti2"><?php echo $data['title']; ?></h4>
					<img src="<?php echo base_url(); ?>web_assets/img/rating/<?php echo $data['rating']; ?>.png" class="img-responsive" alt="Ratting">
					<ul>
						<li>
							<span class="des">ATOLL</span>
							<span class="detail"><?php echo $data['atoll']; ?></span>
						</li>
						<li>
							<span class="des">NO OF VILLAS</span>
							<span class="detail"><?php echo $data['no_of_villas']; ?></span>
						</li>
						<li>
							<span class="des">DURATION</span>
							<span class="detail"><?php echo $data['duration']; ?></span>
						</li>
						<li>
							<span class="des">AIRPORT</span>
							<span class="detail"><?php echo $data['airport']; ?> km</span>
						</li>
					</ul>
					<a href="<?php echo base_url() ?>home/details_information/1/0/<?php echo $data['id'].'/'.preg_replace('/[\s%_]/', '-', trim(strtolower($data['title']))) ?>" class="btn">MORE DETAILS</a>
				</div>
			</div>
		</div>
	<?php }} ?>



	</div>
</section>