/* basic namespace */
window.Application || ( window.Application = {} );

var Application = {
	init: function() {
		
		// run basic functions
		this.size_buckets();
		this.header_scroll();
	},
	size_buckets: function() {
		$( '.bucket' ).each( function() {
			$t = $(this);
			h = [];
			$t.find( '.tx' ).each( function() {
				h.push( $(this).height() );
			});
			h = h.sort( function( a, b ){ return a-b } );
			$t.find( '.tx' ).each( function() {
				$(this).height( h[ h.length - 1 ] );
			});
		});
	},
	header_scroll: function() {
		_t = this

		// if user scrolls down past 20px,
		// shrink the header for design.

		$(document).scroll( function() {
			window.has_scrolled = true;
		});

		_t.site_interval = setInterval( function() {
			var st = $(window).scrollTop();

			if( window.has_scrolled ) {
				window.has_scrolled = false;
				_t.scroll_check( st );
			}
		}, 250 );
	},
	scroll_check: function( st ) {

		// resize header

		if( st > 100 ) {
			$( document.body ).addClass( 'scrolling' );
		} else {
			$( document.body ).removeClass( 'scrolling' );
		}
	},
	utils: {
		bakery: {
			create: function( name, value, days ) {
				var exp = '';
				if(days) {
					var date = new Date();
					date.setTime( date.getTime() + ( days*24*60*60*1000 ) );
					var exp = '; expires=' + date.toGMTString();
				}
				document.cookie = name + '=' + value + exp + '; path=/';
			},
			read: function( name ) {
				var nameEQ = name + '=';
				var ca = document.cookie.split(';');
				for( var i = 0; i < ca.length; i++ ) {
					var c = ca[i];
					while ( c.charAt(0) == ' ' ) c = c.substring(1,c.length);
					if ( c.indexOf(nameEQ) == 0 ) return c.substring( nameEQ.length, c.length );
				}
				return null;
			},
			erase: function(name) {
				createCookie(name, '', -1);
			}
		}
	}
};