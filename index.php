<?php 
$testLocal = FALSE;
?>
<!doctype html>
<html lang="en">
<head>
<title>Rack City</title>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<h1>RACK CITY</h1>
<div id="soundcloud">
<form id="sc_form"  style="display:none;">
	<h3 class="title">ENTER SOUNDCLOUD LINK</h3><br/>
	<input type="text" id="sc_url" name="url" placeholder="soundcloud url" value="https://soundcloud.com/lidogotsongs/zhu-faded-lido-remix"/><br/>
	<input type="submit" value="SUBMIT"/>
</form>
</div>
<div id="loading"></div>
<div id="latlng">
	<span>LATITUDE: </span><span id="lat" class="light"></span>
	<br/>
	<span>LONGITUDE: </span><span id="lng" class="light"></span>
</div>
<div id="songinfo" style="display:none;">
	<span id="artist">FANCY</span> / <span id="songname" class="light">IGGY AZALEA</span>
	<br/>
	<span id="timestamp" class="light">02 : 32 : 02</span>
</div>
<?php 
if(!$testLocal)
	echo '<script src="//cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//connect.soundcloud.com/sdk.js"></script>
';
else
	echo '<script src="js/three.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/soundcloud.js"></script>
';
?>
<!-- <script type="text/javascript" src="js/fft.js"></script>
<script type="text/javascript" src="js/beatdetect.js"></script> -->
<script src="js/dat.gui.min.js"></script>
<script data-main="app" src="js/require.js"></script>
</body>
</html>