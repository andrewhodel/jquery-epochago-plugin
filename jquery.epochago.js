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

		alert(body);

	});
};
})(jQuery);

