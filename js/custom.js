/*
 * JUNTOS
 *
 * Copyright (c) 2013 F²
 *
 * Main Javascript
 */
(function($) {
    "use strict";
    //DETECT MOBILE DEVICES TO FIX BACKGROUND COVER ISSUE
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	    $("body").addClass("mobile");
	}
	//BOOTSTRAP ALERTS FOR FORM
	$(".alert").alert();
})(jQuery);
