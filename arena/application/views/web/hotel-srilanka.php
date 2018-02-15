
		<section class="about-section">
			<div class="container">
				<div class="col-md-offset-1 col-md-10  top-header-page">
					<h1 class="text-center wow fadeIn" data-wow-delay="300ms">Hotels in Sri Lanka</h1>
					<span class="top-divider wow fadeIn" data-wow-delay="300ms">
			            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
			        </span>
			        <p class="wow fadeIn" data-wow-delay="500ms">
			        	Sri Lanka has a growing tourism industry. Since gaining independence from the British in 1947, Sri Lanka has continued to attract foreign investors and tourists to the island. The country's important placement also enables it to attract transit visitors into the island. <br>
			        	Over the years, many beautiful resorts, hotels and spas have opened. Incorporating the diverse culture of the country, the various Tourist Establishments here offer visitors a unique, yet memorable experience to remember with.
			        </p>
			    </div>
			</div>
		</section>
		<section class="hotel-section">
			<div class="container">


				<?php
				$this->db->where('country',2);
				$this->db->order_by('title','asc');
				$query = $this->db->get("hotels");
		        if ($query->num_rows()>0) {
		          foreach ($query->result_array() as $data) {
		        ?>
				<div class="col-md-3 col-sm-4">
					<div class="hotel-srilanks">

						<div class="img-p"><img src="<?php echo base_url(); ?>web_assets/img/hotels/<?php echo $data['userfile']; ?>" class="img-responsive" alt="hotel"></div>
						<h4 class="h4_ti"><?php echo $data['title']; ?></h4>

						<div class="part-2">
							<h4 class="h4_ti2"><?php echo $data['title']; ?></h4>
							<img src="<?php echo base_url(); ?>web_assets/img/rating/<?php echo $data['rating']; ?>.png" class="img-responsive" alt="star">
							<ul>
								<li>
									<span class="des">DISTRICT</span>
									<span class="detail"><?php echo $data['district']; ?></span>
								</li>
								<li>
									<span class="des">NO OF ROOMS</span>
									<span class="detail"><?php echo $data['no_of_rooms']; ?></span>
								</li>
								<li>
									<span class="des">DURATION</span>
									<span class="detail"><?php echo $data['duration']; ?></span>
								</li>
							</ul>
							<a href="<?php echo base_url() ?>home/details_information/2/2/<?php echo $data['id'].'/'.preg_replace('/[\s%_]/', '-', trim(strtolower($data['title']))) ?>" class="btn">MORE DETAILS</a>
						</div>
					</div>
				</div>
				<?php }} ?>




			</div>
		</section>