jQuery( document ).ready( function( $ ) {
    var $playButton = $( '.angryPlay i');

    // Fullscreen Video
    $playButton.click( function (event) {
       $( '.angryVideo').css('opacity', '1'); 
       $video = $('.angryVideo video');
       vid = $video[0];
       if (vid.requestFullscreen) {
            vid.requestFullscreen();
       } else if (vid.mozRequestFullScreen) {
            vid.mozRequestFullScreen(); 
       } else if (vid.webkitRequestFullscreen) {
            vid.webkitRequestFullscreen();
       }             
       $video.trigger('play');
       $( '.angryPlay').css('display', 'none');
       $('video').on('ended',function() { 
             if (document.exitFullscreen) {
                document.exitFullscreen(); // Standard
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen(); // Blink
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen(); // Gecko
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen(); // Old IE
            }
           $(this).hide(); 
           $( '.angryPlay').css('display', 'block');
       });
    });
});
