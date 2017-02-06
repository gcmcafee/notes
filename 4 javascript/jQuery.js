jQuery(function($) { 
   // in here, $ is safe
});

//is the same as:

jQuery(document).ready(function($) { 
    // in here, $ is safe
});

//****
//TIMING

jQuery(window).on('load', function() {
    // after page fully loaded 
});

jQuery(function($) { 
   setTimeout(function() {
             // Do something 2 seconds after page ready
    }, 2000);
});

jQuery(window).on('load', function() {
   setTimeout(function() {
             // Do something 2 seconds after page loaded
    }, 2000);
});

//******

(function($) {
    // here $ would be point to jQuery object
    $(document).ready(function() {
        $('#pass').keyup( ... );
    });
})(jQuery);

//*******
//EACH

$([jqId1, jqId2]).each( function(){
    $(this).show();
});