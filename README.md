# jquery.epochago.js

Epochago is a jQuery plugin that replaces unix epoch timestamps with fuzzy timestamps ('about an hour ago').

## Usage

First, load jQuery and the plugin:

	<script src="jquery.min.js" type="text/javascript"></script>
	<script src="jquery.epochago.js" type="text/javascript"></script>

Next, attach it to any elements on DOM ready:

	$(document).ready(function() {
		$('.epochago').epochago();
	});

This will replace the text in all elements with a class of 'epochago' from:

	<p class="epochago">1303294772</p>

to something like:

	<p class="epochago">about 7 hours ago</p>

## Automatically Updating Timestamps

In the Usage example above, fuzzy timestamps are generated on $(document).ready()

To have the timestamps update automatically, simply setup a setInterval timer outside $(document).ready()

	$(document).ready(function() {
		$('.epochago').epochago();
	});
	setInterval("$('.epochago').epochago()", 60000);

This will update every 60 seconds (60000ms)

## Exceptions

Make sure to not include a title attribute on the element containing the unix epoch timestamp.
