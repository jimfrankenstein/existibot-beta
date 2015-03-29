var baseScripts = {
	init: function(){
		//
	},
	cancels: function(){
		// this function cancels the click events
		// until main.js resets them.
		// this prevents users from jumping the gun
		$('.baseCancel').live( 'click', function(){ return false; });
		$('.lightBox').live( 'click', function(){ return false; });
	}
};

