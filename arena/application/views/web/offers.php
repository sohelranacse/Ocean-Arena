<?php
if (isset($id)) {
	$this->db->where('id',$id);
	$query = $this->db->get('promotions');
    if ($query->num_rows()>0) {
      foreach ($query->result_array() as $data) {
?>
<section class="promotion-offers">
	<div class="container">
		<div class="col-md-offset-2 col-md-8 promotion-column">
			<div class="promotions-offers-header">
				<h2><?php echo $data['resort_name']; ?></h2>
				<p><?php echo $data['offer_title']; ?></p>
				<a onclick="goBack()" class="go-back wow fadeIn" data-wow-delay="300ms">
		            <img src="<?php echo base_url(); ?>web_assets/img/icons/go-back-arrow.png" class="img-responsive" alt="Go back"> <strong>Go Back</strong>
		        </a>
			</div>
			<div class="promotions-offers-image">
				<img src="<?php echo base_url();?>web_assets/img/promotions/<?php echo $data['userfile']; ?>">
			</div>
			<div class="promotions-offers-details">
				<ul>
					<li>
						<span class="leftP">Offer Code</span>
						<span class="rightP"><?php echo $data['offer_code']; ?></span>
					</li>

					<li class="liA">
						<span class="leftP">Offer Title</span>
						<span class="rightP"><?php echo $data['offer_title']; ?></span>
					</li>
					<li>
						<span class="leftP">Offer Description</span>
						<span class="rightP"><?php echo $data['offer_des']; ?></span>
					</li>
					<li class="liA">
						<span class="leftP">Resort Name</span>
						<span class="rightP"><?php echo $data['resort_name']; ?></span>
					</li>
					<li>
						<span class="leftP">Stay Duration</span>
						<span class="rightP"><?php echo $data['stay_during']; ?></span>
					</li>
					<li class="liA">
						<span class="leftP">Minimum Stay</span>
						<span class="rightP"><?php echo $data['minimum_stay']; ?></span>
					</li>
					<li>
						<span class="leftP">Validity</span>
						<span class="rightP"><?php echo $data['validity']; ?></span>
					</li>
					<li class="liA">
						<span class="leftP">Offer Expiry</span>
						<span class="rightP"><?php echo $data['offer_expiry']; ?></span>
					</li>
					<li>
						<span class="leftP">Valid Villas</span>
						<span class="rightP"><?php echo $data['valid_villas']; ?></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php }}} ?>