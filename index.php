<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- =============================
	Time
	The exact time
	Give or take an hour

	What?
	http://lovenonsense.com/307

	Created once by Vasilis van Gemert
	Generated by my server
	No more human labour needed

	http://vasilis.nl/random/
	============================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Greek Time</title>
	<meta name="description" content="The Greek preception of time: current time give or take one hour. Updates every two minutes.">
	<meta name="application-name" content="Greek Time">
	<meta name="apple-mobile-web-app-title" content="Greek Time">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="refresh" content="120">
	<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-007762.css">
<style>
html {
	height: 100%;
	background:  hsl(54, 100%, 90%);
	text-rendering: optimizeLegibility;
}
body {
	color:  hsl(188, 58%, 34%);
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
	font-family: Irma, helvetica, arial, sans-serif;
	font-size: 13em;
	font-size: 30vw;
	font-weight: 800;
	line-height: .8;
	margin: 0;
	padding:0;
}
time a {
	display: block;
	font-size: .7rem;
	color: inherit;
	margin-left: .3vw;
	-webkit-transition: .3s cubic-bezier(.6,.01,.89,1);
	        transition: .3s cubic-bezier(.6,.01,.89,1);
}
.h4 a {
	margin-left: 12.2vw;
}
.h6 a {
	margin-left: 22.1vw;
}
.h7 a {
	margin-left: 20vw;
}
.h9 a {
	margin-left: 3.9vw;
}
.h0 a {
	margin-left: 23vw;
}
</style>
</head>
<body>
<?php
if(isset($_GET["loop"])) {
	echo '<video autoplay loop style="width: 1px;height:1px;position:absolute;"><source src="ding.mp4" type=video/mp4></video>';
	echo '<script>document.querySelector("title").innerHTML = "&nbsp;";</script>';
}
if( ! ini_get('date.timezone') ) {
    date_default_timezone_set('Europe/Amsterdam');
}

$plm = rand(0,1) < 1 ? -1 : 1 ;
$nextWeek = time() + ($plm * 1 * rand(0,60) * 60);
$inAnHour = date('G', $nextWeek);
$inAMinute = date('i', $nextWeek);

?>
<time class="h<?php echo $inAnHour[0]; ?>"><span><?php echo $inAnHour; ?></span>:<span><?php echo $inAMinute; ?></span> <a href="http://lovenonsense.com/307">What’s this?</a></time>
<script>

function greekHours(n) {
	var plusOrMinus = Math.random() < 0.5 ? -1 : 1;
	var hr = Math.floor(Math.random() * 3600000 + 1);
	var hr = hr * plusOrMinus;
	return ((n + hr)*1);
}

function setGreekTime(dateNow) {
	var link = ' <a href="http://lovenonsense.com/307">What’s this?</a>';
	var timeEl = document.querySelector('time');
	var hourEl = document.querySelector('time span');
	var minEl = document.querySelector('time span:last-of-type');
	var now = new Date(greekHours(dateNow));
	var hours = now.getHours();
	var minutes = now.getMinutes();
	if (minutes < 10) {
		minutes = '0' + minutes;
	}
	
	setTimeout(function(){
		hourEl.innerHTML = hours;
		timeEl.className = 'h' + hours;
		setTimeout(function(){
			minEl.innerHTML = minutes;
		},100);
	},100);

}

setGreekTime(Date.now());
document.querySelector('[name=refresh]').setAttribute('content','31536000');

setInterval(function(){
	setGreekTime(Date.now());
},120000);

</script>
</body>
</html>
