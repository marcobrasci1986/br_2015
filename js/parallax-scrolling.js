$(document).ready(function(){
	

	if (!Modernizr.touch) { 

   // cache the window object
   $window = $(window);

   $('section[data-type="background"]').each(function(){
     //Select the section that we want to handle 
     var $scroll = $(this);

     $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards    

		/**
		How many pixels we are from the top of the page
		*/
		var pixelsToTopOfPage = $window.scrollTop();
		/**
		Value specified by user in attribute data-speed. For example data-speed="2"
		*/
		var speed = $scroll.data('speed');
		

		
		var yPos = -(pixelsToTopOfPage / speed);

		
        // background position
        var coords = '50% '+ yPos + 'px';

        
        // move the background
        $scroll.css({ backgroundPosition: coords }); 


        var debug = true;
        if(debug){
        	console.log("yPos: " + yPos);
        	console.log("New coords: " + coords);
        	console.log("$window.scrollTop(): " + $window.scrollTop());
        	console.log("$scroll.data('speed'): " + $scroll.data('speed'));
        }

      }); // end window scroll
   });  // end section function

}
else { 
	
}

});


