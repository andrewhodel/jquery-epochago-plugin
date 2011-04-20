<!DOCTYPE HTML>
<html>
<head>
<title>jquery.epochago.js - sample</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
<script src="https://github.com/andrewhodel/jquery-epochago-plugin/raw/master/jquery.epochago.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('.epochago').epochago();
});
setInterval("$('.epochago').epochago()", 20000);
</script>

</head>

<body>
<p class="epochago"><? print time()-((24*60)); ?></p>
<p class="epochago"><? print time()-((24*60*60)); ?></p>
<p class="epochago"><? print time()-((24*60*60)*2); ?></p>
<p class="epochago"><? print time()-((24*60*60)*15); ?></p>
<p class="epochago"><? print time()-((24*60*60)*50); ?></p>
<p class="epochago"><? print time()-((24*60*60)*380); ?></p>
</body>

</html> 
