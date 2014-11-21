
<div class="container-fliud">
    <footer>
        <div class="centerWrapper">
            <img src="images/footerLogo.jpg" class="footerLogo"></img>
            <h6 class="footerSlogan">jongeren met een passie voor Jezus</h6>

            <ul class="socialMediaIcons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>

        </div>
        <div class="container">
            <hr />



            <ul class="footerMenuLeft">    
                <li><a href="#"><img src="images/ejv-logo.png"/></a></li>
                <li><div class="verticalLine"></div></li>
                <li><a href="#"><img src="images/vlaamse-overheid.png"/></a></li>
            </ul>



            <ul class="footerMenuRight">
                <li class="first"><a href="#">designed by Left Lane</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">item 3</a></li>
                <li><a href="#">item 4</a></li>
            </ul>
            

        </div>





    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/animatescroll.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

//Parrallax
if (!Modernizr.touch) {
    $.stellar({
      horizontalScrolling: false,
      verticalScrolling: true
  });
}

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

//Hide menu when clicked
function animateScroll(id){
    $(id).animatescroll();
    $('#navmain').collapse('hide');
}

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




</script>
</body>
</html>



