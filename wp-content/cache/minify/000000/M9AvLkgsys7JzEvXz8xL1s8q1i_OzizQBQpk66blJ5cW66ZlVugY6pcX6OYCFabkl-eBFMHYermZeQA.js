
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

;
/* markdown.min.js */

/* 1 */ /*! wp-markdown 1.5.1 2014-04-09 16:30 */
/* 2 */ jQuery(document).ready(function(a){var b=!1;a("#wmd-button-bar-help").hide(),a("pre").not(".wmd-help").addClass("prettyprint");var c,d=function(){a("#wmd-button-bar-help").toggle(300,"swing")};if(c=a("#bbp_reply_content").length>0?"bbp_reply_content":a("#bbp_topic_content").length>0?"bbp_topic_content":"comment",a("#wmd-button-bar"+c).length>0){var e=new Markdown.getSanitizingConverter;b=new Markdown.Editor(e,c,{handler:d})}"function"==typeof prettyPrint&&(prettyPrint(),b&&b.hooks.chain("onPreviewRefresh",function(){a(".wmd-preview pre").addClass("prettyprint"),prettyPrint()})),b&&b.run()});
