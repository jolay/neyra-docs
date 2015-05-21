
/* skip-link-focus-fix.js */

/* 1  */ ( function() {
/* 2  */ 	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
/* 3  */ 	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
/* 4  */ 	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;
/* 5  */ 
/* 6  */ 	if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
/* 7  */ 		var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
/* 8  */ 		window[ eventMethod ]( 'hashchange', function() {
/* 9  */ 			var element = document.getElementById( location.hash.substring( 1 ) );
/* 10 */ 
/* 11 */ 			if ( element ) {
/* 12 */ 				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
/* 13 */ 					element.tabIndex = -1;
/* 14 */ 
/* 15 */ 				element.focus();
/* 16 */ 			}
/* 17 */ 		}, false );
/* 18 */ 	}
/* 19 */ })();
/* 20 */ 
