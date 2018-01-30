

<section class="udaliaContact">
	<div class="container">
		<div class="meetTeacherHeader">
            <h1>CONTACT US</h1>
            <span class="top-divider wow fadeIn" data-wow-delay="300ms">
	            <img src="<?php echo base_url(); ?>web_assets/img/divider-2.png" class="img-responsive" alt="Image">
	        </span>
            <p>
                Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. <br> We are open from 24/7 
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
				<div class="ocean-address b-bottom">
					<h5>Malé Office:</h5>
					<ul>
						<li><span class="dp">Address: </span><span class="rp">Ma, Daisy Villa (Ground Floor) Anoana Goalhi Male, Republic of Maldives.</span></li>
						<li><span class="dp">Tel: </span><span class="rp">+960 3337799</span></li>
						<li><span class="dp">Fax: </span><span class="rp">+960 3338644</span></li>
						<li><span class="dp">Email: </span><span class="rp">sales@oceanarenatravels.com</span></li>
						<li><span class="dp">Web: </span><span class="rp">www.oceanarenatravels.com</span></li>
					</ul>
				</div>
				<div class="ocean-address b-bottom">
					<h5>Dhaka Office:</h5>
					<ul>
						<li><span class="dp">Address: </span><span class="rp">146/C West Rampura, Dhaka, Bangladesh.</span></li>
						<li><span class="dp">Phone: </span><span class="rp">+88 01758 521764</span></li>
						<li><span class="dp">Phone: </span><span class="rp">+88 01865 685555</span></li>
						<li><span class="dp">Email: </span><span class="rp">jahid@oceanarenatravels.com</span></li>
					</ul>
				</div>
				<div class="ocean-address">
					<h5>Sri Lanka Office:</h5>
					<ul>
						<li><span class="dp">Address: </span><span class="rp">54, Walukarama Road, Colombo-3, Sri Lanka.</span></li>
						<li><span class="dp">Tel: </span><span class="rp">+9411 5484848</span></li>
						<li><span class="dp">Email: </span><span class="rp">sales@oceanarenatravels.com</span></li>
					</ul>
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