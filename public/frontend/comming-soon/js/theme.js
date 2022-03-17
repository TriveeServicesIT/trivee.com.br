/*
================================================================
* Template:  	 Zoon - Coming Soon Template
* Written by: 	 Harnish Design - (http://www.harnishdesign.net)
* Description:   Main Custom Script File
================================================================
*/

(function ($) {
    "use strict";

    // Preloader
    $(window).on('load', function () {
        $('.lds-ellipsis').fadeOut();
        $('.preloader').delay(333).fadeOut('slow');
        $('body').delay(333);
        //$('.whatsapp').mask('(00) 00000-0000');
    });

})(jQuery)
