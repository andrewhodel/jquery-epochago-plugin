(function($){
$.fn.epochago = function(options) {

	var defaults = {
		length: 300,
		ellipsisText: "..."
	};
	var options = $.extend(defaults, options);

	return this.each(function() {

		obj = $(this);
		var body = obj.html();

		// get time since in seconds
		var ts = Math.round((new Date()).getTime() / 1000);
		var diff = ts - body;

		alert(diff+' sec ago');

	});
};
})(jQuery);

