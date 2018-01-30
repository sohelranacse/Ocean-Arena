
<section class="about-section">
	<div class="container">
		<div class="col-md-offset-1 col-md-10 top-header-page">
			<h1 class="text-center wow fadeIn" data-wow-delay="300ms">Maldives Latest Offers</h1>
			<span class="top-divider wow fadeIn" data-wow-delay="300ms">
	            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
	        </span>
	        <p class="wow fadeIn" data-wow-delay="500ms"">
	        	Indulge a perfect holiday with the best available offers and highly personalized services.
	        </p>
	    </div>
	</div>
</section>
<section class="hotel-section">
	<div class="container">

	
        <?php 
        $query = $this->User_model->get_promotions();
        if ($query->num_rows()>0) {
          foreach ($query->result_array() as $data) {
        ?>
		<div class="col-md-3 col-sm-4">
			<div class="hotel-srilanks pack2">
				<div class="img-p promImg"><img src="<?php echo base_url(); ?>web_assets/img/promotions/<?php echo $data['userfile']; ?>" class="img-responsive" alt="hotel"></div>
				<div class="bgs"></div>
				<h4 class="h4_ti"><?php echo $data['offer_title']; ?></h4>

				<div class="part-2">
					<h4 class="h4_ti2"><?php echo $data['offer_title']; ?></h4>
					<ul class="promo">
						<li>
							Resort: <?php echo $data['resort_name']; ?>
						</li>
						<li>
							Stay Duration: <?php echo $data['stay_during']; ?>
						</li>
						<li>
							Min.Nights: <?php echo $data['minimum_stay']; ?>
						</li>
						<li>
							<?php echo $data['validity']; ?>
						</li>
					</ul>
					<a href="<?php echo base_url() ?>home/offers/<?php echo $data['id'].'/'.preg_replace('/[\s%_]/', '-', trim(strtolower($data['offer_title']))) ?>" class="btn">MORE DETAILS</a>
				</div>
			</div>
		</div>
		<?php }} ?>




	</div>
</section>