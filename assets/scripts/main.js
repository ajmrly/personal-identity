// JavaScript Document

//Expands the header to show larger logo when scrolled to the top of the page, shrinks it on scroll down.
var stickyToggler = function
  var stickyHeader = document.querySelector(".stickyHeader");
  var header = document.querySelector(".header");
  var value = border_element.offsetTop;

window.onscroll = function() {
  if (value > 50) {
    stickyHeader.element.classList.add('header');
    header.element.classList.remove("stickyHeader");
  } else {
    header.element.classList.add("stickyHeader");
    stickyHeader.element.classList.remove("header");
  }
});

window.onload = function () {};

/*  -- Original code for reference --

var sticky_scroll = function(scroll, border, scroll_class) {
    var scroll_element = document.querySelector(scroll);
    var border_element = document.querySelector(border);
    var initial_top = border_element.offsetTop;
    
    window.onscroll = function() {
        if (window.pageYOffset > initial_top) {
            scroll_element.classList.add(scroll_class);
        } else {
            scroll_element.classList.remove(scroll_class);
        }
    };
};

window.onload = function() {
    sticky_scroll('.scroller', '.scroll-line', 'scrolled');
}

;(function( $, window, document, undefined )
{
	$.fn.doubleTapToGo = function( params )
	{
		if( !( 'ontouchstart' in window ) &&
			!navigator.msMaxTouchPoints &&
			!navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

		this.each( function()
		{
			var curItem = false;

			$( this ).on( 'click', function( e )
			{
				var item = $( this );
				if( item[ 0 ] != curItem[ 0 ] )
				{
					e.preventDefault();
					curItem = item;
				}
			});

			$( document ).on( 'click touchstart MSPointerDown', function( e )
			{
				var resetItem = true,
					parents	  = $( e.target ).parents();

				for( var i = 0; i < parents.length; i++ )
					if( parents[ i ] == curItem[ 0 ] )
						resetItem = false;

				if( resetItem )
					curItem = false;
			});
		});
		return this;
	};
})( jQuery, window, document );

$(document).ready(function () {
/*  // init Masonry
var $grid = $('.heroList').masonry({
    percentPosition: true,
    columnWidth: '.grid-sizer',
    itemSelector: '.heroItem'  
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });
  $('body').addClass('js');
  var $navMenu = $('#navMenuMain'),
    $menulink = $('.mobMenu');
  
$menulink.click(function() {
  $menulink.toggleClass('menuOpen');
  $navMenu.toggleClass('menuOpen');
  return false;
});
    
$( '#navMenuMain li:has(ul)' ).doubleTapToGo();
    
});
$(window).scroll(function() {

	var value = $(this).scrollTop();
	
    if (value > 50) {
        $(".headerExpand").addClass("header");
        $(".header").removeClass("headerExpand");
	} else {
        $(".header").addClass("headerExpand");
        $(".headerExpand").removeClass("header");
	}
});
*/