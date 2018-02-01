$(document).ready(function() {

  $("#partner").owlCarousel({
    autoPlay: 700,
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,4],
    stopOnHover:true,
    navigation : true,
    pagination : false,

    navigationText: [ '<span class="left-array"><img src="web_assets/img/icons/play-button-left.png" /></span>', '<span class="right-array"><img src="web_assets/img/icons/play-button.png" /></span>' ]
  });


});
