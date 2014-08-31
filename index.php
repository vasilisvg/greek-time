<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Greek Time</title>
	<meta name="description" content="The Greek preception of time: current time give or take one hour. Updates every two minutes.">
	<meta name="application-name" content="Greek Time">
	<meta name="apple-mobile-web-app-title" content="Greek Time">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-006956.css">
<style>
html {
	height: 100%;
	background: hsl(120,2%,89%);
}
body {
	color: hsl(224,42%,27%);
	height: 90%;
	height: 90vh;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	    -ms-flex-align: center;
	        align-items: center;
	font-family: "Fedra Sans Screen Regular", helvetica, arial, sans-serif;
	font-size: 13em;
	font-size: 30vw;
	line-height: 1;
	margin: 0;
	padding:0;
}
</style>
</head>
<body>
<?php
if(isset($_GET["loop"])) {
	echo '<video autoplay loop style="width: 1px;height:1px;position:absolute;"><source src="ding.mp4" type=video/mp4></video>';
	echo '<script>document.querySelector("title").innerHTML = "&nbsp;";</script>';
}
?>
<time lang="el" timestamp="" class="dio-lepta"></time>
<script>

function greekHours(n) {
	var hr = Math.floor(Math.random() * 3600000 + 1);
	var plusOrMinus = Math.random() < 0.5 ? -1 : 1;
	var hr = hr * plusOrMinus;
	return ((n + hr)*1);
}

function setGreekTime(dateNow) {
	var timeEl = document.querySelector('time');
	var now = new Date(greekHours(dateNow));
	var hours = now.getHours();
	var minutes = now.getMinutes();
	if (hours < 10) {
		hours = '0' + hours;
	}
	if (minutes < 10) {
		minutes = '0' + minutes;
	}
	timeEl.innerHTML = hours + ':' + minutes;
}
setGreekTime(Date.now());


setInterval(function(){
	setGreekTime(Date.now());
},120000);

</script>
</body>
</html>
