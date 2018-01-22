

<section class="udaliaContact">
	<div class="container">
		<div class="meetTeacherHeader">
            <h1>CONTACT US</h1>
            <span class="top-divider wow fadeIn" data-wow-delay="300ms">
	            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
	        </span>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. <br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse.
            </p>
            <span class="span"></span>
            
        </div>
		<div class="row contact-row">
			<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 contactLeft">

				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" id="name" class="form-control"  placeholder="Name" required="1">
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<div class="form-group">
						<label>E-mail:</label>
						<input type="email" id="to_email" class="form-control"  placeholder="E-mail address" required="1">
					</div>
				</div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="form-group">
						<label>Subject:</label>
						<input type="text" id="subject" class="form-control"  placeholder="Subject" required="1">
					</div>
				</div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="form-group">
						<label>Description:</label>
						<textarea id="description" class="form-control" placeholder="Description" rows="5" ></textarea>
					</div>
				</div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="form-group">
						<button type="submit" onclick="return contact_submit()" class="btn btn-primary btn-block">send</button>
					</div>
				</div>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<div class="form-group">
						<div id="message_send"></div>
					</div>
					
				</div>
				
			</div>

			<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 contactRight">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="contactFooter">
					<div>
						<i class="icofont icofont-location-pin"></i> Address: Mohanagar Project, Rampura, Dhaka.
					</div>
					<div>
						<i class="icofont icofont-stock-mobile"></i> Mobile number: sales@oceanarenatravels.com 
					</div>
					<div>
						<i class="icofont icofont-email"></i> E-mail: oceanarena@yahoo.com
					</div>
				</div>
			</div>
		</div>


	</div>
</section>

<section class="google_map_section">
    <div id="map"></div>
</section><!-- order_us section -->





<!-- new API -->
<script>
  function initMap() {
    var uluru = {lat: 4.1735595, lng: 73.509691};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&callback=initMap">
</script>
<!-- new api end -->


<script type="text/javascript">
function contact_submit(){
  var name = $("#name").val().trim();
  var to_email = $("#to_email").val().trim();
  var subject = $("#subject").val().trim();
  var description = $("#description").val().trim();

  if (name !== '' && to_email !== '' && subject !== '') {
  	$.ajax({
      type: 'POST',
      url:li+'home/contact_submit/',
      data:{name:name,to_email:to_email,subject:subject,description:description},
      dataType:'json',
      success: function(response){
        $("#message_send").html("<p>"+response+"</p>");
        $("#name").val('');
        $("#to_email").val('');
        $("#subject").val('');
        $("#description").val('');
      },
      error: function(){
        alert('Error sending...!');
      }
    });
  }else{
  	$("#message_send").html("<p>Information incomplete.</p>");
  }
}
</script>