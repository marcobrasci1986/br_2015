<script type="text/javascript">
$(document).ready(function () {



    if (!Modernizr.touch) {
        $.stellar({
            horizontalScrolling: false,
            verticalScrolling: true
        });
    }
    
    

    $(".various").fancybox({
        maxWidth: 800,
        maxHeight: 600,
        fitToView: true,
        width: '100%',
        height: '100%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });


    $(".location" ).hover(
      function() {
        $( this ).addClass("hoverLocation");
    }, function() {
        $( this ).removeClass( "hoverLocation" );
    }
    );


    var container = document.querySelector('#artikels');
    var msnry = new Masonry( container, {
      columnWidth: '.grid-sizer',
      "gutter": 0,
  });

});

/*
    Scroll to id and hide collapsable nav 
    */
    function animateScroll(id){
        $(id).animatescroll();
        $('#navmain').collapse('hide');
    }

    </script>
</body>
</html>