if (time < 10) {
    greeting = "Good morning";
} else if (time < 20) {
    greeting = "Good day";
} else {
    greeting = "Good evening";
}

Good for testing
alert( "window loaded" );


// Remove title tags in header
$('header [title]').removeAttr('title');


//No Scroll Zoom til Click
<div class="overlay" onClick="style.pointerEvents='none'"></div>



 // Slideshow Videos

  var slideVids = {'akYZIBpp8mc' : '.patriot-jet-boat-thrill-ride .slide--0',  //cruise
                   '-kRvV9Fe7Hw' : '.whale-watching-san-diego .slide--4', //cruise
                   'kJ8sPm-FieU' : '.california-spirit .slide--0', //fleet
                   'Ei8btJCYv1s' : '.spirit-san-diego .slide--0', //fleet
                   'bGZYGt3Pi_c' : '.patriot-jet-boat-for-groups .slide--0', //fleet
                   'DMFOZNEB9AA' : '.silvergate .slide--0', //fleet
                   'ZIb3ucPuucE' : '.cabrillo .slide--0'} //fleet
  for (var id in slideVids) {
    var selector = slideVids[id];
    $(selector).append('<a data-target=".modal-video" data-toggle="modal" data-the-video="https://www.youtube.com/embed/' + id +'?rel=0&amp;showinfo=0&amp;wmode=opaque&amp;html5=1"><span class="link-overlay">&nbsp;</span></a><span class="play-button">&nbsp;</span>');
  }