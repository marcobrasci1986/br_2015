$(document).ready(function () {


  // element.parallax(horizontal position, speed)
  
  $('#visie2').parallax("50%", 0.2);
  $('#visie2_1').parallax("100%", 0.5);
  $('#visie2_2').parallax("100%", 0.8);
  $('#visie2_3').parallax("20%", 0.6);

  $('#visie3').parallax("50%", 0.2);
  $('#visie3_1').parallax("0", 0.6);
  $('#visie3_2').parallax("100%", 0.7);

  $('#visie4').parallax("50%", 0.2);
  $('#visie4_1').parallax("0", 0.6);
  $('#visie4_2').parallax("0", 0.8);

  $('#visie5').parallax("50%", 0.2);
  $('#visie5_1').parallax("0", 0.7);


//You tube popup
$(".various").fancybox({
  maxWidth: 800,
  maxHeight: 600,
  fitToView: true,
  width: '100%',
  height: '100%',
  autoSize: false,
  closeClick: false,
  openEffect: 'none',
  closeEffect: 'none',
  helpers: {
    overlay: {
      locked: false
    }
  }
});

//Menu scroll
$(".location" ).hover(
  function() {
    $( this ).addClass("hoverLocation");
  }, function() {
    $( this ).removeClass( "hoverLocation" );
  }
  );

$(".event" ).hover(
  function() {
    $( this ).addClass("event-location-hover");
  }, function() {
    $( this ).removeClass( "event-location-hover" );
  }
  );



//Visie yellow overlay
$('.visie-video-block').hover(
 function () {
   $(this).find(".visie-video-overlay").show();
   $(this).find(".visie-video-play").hide();
   $(this).find(".play-video-image").hide();
 }, 
 function () {
   $(this).find(".visie-video-overlay").hide();
   $(this).find(".visie-video-play").show();
   $(this).find(".play-video-image").show();
 }
 );
});

//Masonry artikels (only on frontpage)
var container = document.querySelector('#artikels');
if(container != null){
  var msnry = new Masonry( container, {
    columnWidth: '.grid-sizer',
    "gutter": 0,
  });
}

//article popover
$(function () {
  $('[data-toggle="popover"]').popover()
})
//Hide menu when clicked
function animateScroll(id){
  $(id).animatescroll();
  $('#navmain').collapse('hide');
}
