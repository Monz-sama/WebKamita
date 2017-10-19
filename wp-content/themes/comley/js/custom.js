(function(jQuery) {
    "use strict";
 	 var social_link = jQuery('.social-share a:not(.email-share a)');
    social_link.click(function(){
        newwindow=window.open(jQuery(this).attr('href'),'','height=450,width=700');
        if (window.focus) {newwindow.focus()}
        return false;
    });
	jQuery('.pagination .prev').parent().addClass('prev-nav');jQuery('.pagination .next').parent().addClass('next-nav');
	jQuery('.main-nav .navbar-nav i.arrow').click(function(){
	jQuery(this).parent().find('ul').toggle();
  });
})
jQuery(window).load(function() {jQuery('.flexslider').flexslider({animation: "fade"});});
jQuery(function(n){jQuery('.sub-menu').before("<i class='fa fa-sort-down arrow'></i>");});jQuery(document).ready(function(){jQuery(".scrollToTop").click(function(){return jQuery("html, body").animate({scrollTop:0},800),!1})});
jQuery(window).scroll(function(){if (jQuery(this).scrollTop() > 500) {jQuery('.scrollToTop').fadeIn();} else {jQuery('.scrollToTop').fadeOut();}});
 jQuery(document).ready(function(e) { jQuery(".navbar-nav li").click(function(e) { e.stopPropagation(); jQuery(this).children('ul').toggle(); }); });
(jQuery);
jQuery( document ).ready( function( $ ) { 
        $('.fa-spin').hide();   
	$(document).on('click', '.loadmore_post', function(e) {	
	        $('.fa-angle-double-down').hide(); 
	         $('.fa-spin').show();
		var max_page = $( this ).attr( 'max_page' );
                var start_page = $( this ).attr( 'start_page' );
		var currentpaged = parseInt( start_page )+1;	
		jQuery.ajax({
			type: 'POST',
			url: comley_wp_ajax_url,
			data: {
				action : 'comley_load_more_posts',
				paged: currentpaged,
				query: comley_wp_ajax_url.query,
			},
		})
		.done( function( response ) {
			if ( response ) {
			    $( '.loadmore_post' ).attr( 'start_page', currentpaged );
				$( '.full-section' ).append( response );
				 $('.fa-spin').hide(); 
				 $('.fa-angle-double-down').show(); 
			} 
			if(max_page==start_page)
			{
			$('.loadmore_post').hide();
			}
		} );
		e.preventDefault();
	});

});