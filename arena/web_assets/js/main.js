$(document).ready(function() {
  $("#partner").owlCarousel({
    autoPlay: 2000,
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,4],
    stopOnHover:true,
    navigation : true,
    pagination : false,
    navigationText: [ '<span class="left-array"><img src="web_assets/img/icons/play-button-left.png" /></span>', '<span class="right-array"><img src="web_assets/img/icons/play-button.png" /></span>' ]
  });
});

$('nav ul li').click(function(){
    var cname = $(this).attr('class');
    if (cname == 'dropdown') {
        $('.dropdown-menu').slideUp();
        $(this).find('.dropdown-menu').slideToggle();
    }else{
        $('.dropdown-menu').slideUp();
    }    
});
$(document).ready(function() {        
    $(window).load(function() {
    preloaderFadeOutTime = 500;
    function hidePreloader() {
    var preloader = $('.spinner-wrapper');
    preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
    });
}); //Preloader
function full_desc(value){

    var id = $(value).val().trim();
    var col = $(value).attr("cols");

    if (col == 1) {
        $('.javadesc'+id).css({
            'height': 'auto'
        });      
        $('.moreD'+id).text("Hide");
        $(value).attr("cols","2");
    }else if(col == 2){
        $('.javadesc'+id).css({
            'height': '260px'
        });
        $('.moreD'+id).text("More details");
        $(value).attr("cols","1");
    }
}