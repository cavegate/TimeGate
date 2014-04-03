$(document).ready(function(){

    /////// Mobile Detection
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i) ? true : false;
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i) ? true : false;
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
        },
        iPhone: function() {
            return navigator.userAgent.match(/iPhone/i) ? true : false;
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) ? true : false;
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
        }
    };

    ////// Portfolio Thumb Hover
    if( ! isMobile.any() ) { 
        $('a.lrg-thumb, a.sml-thumb').hover(function(){
            $(this).find('.thumb-shade').stop('true','true').fadeTo("normal",1);
            $(this).find('.thumb-zoom').stop('true','true').delay(300).fadeTo("normal",1);
        },
        function(){
            $(this).find('.thumb-shade').stop('true','true').fadeTo("normal",0);
            $(this).find('.thumb-zoom').stop('true','true').fadeTo("normal",0);
        });
    }

    ////// Enable prettyPhoto

    // Work around for PrettyPhoto HTML Validation //
        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });
        
    if( ! isMobile.iPhone() ) {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools:false,
            deeplinking: false
        });
    }

});// End document.ready
