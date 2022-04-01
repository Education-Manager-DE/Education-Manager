<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();


?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>ARD alpha</title>
  <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
</head>
<body>
  <video id="my_video_1" class="video-js vjs-fluid vjs-default-skin" controls preload="auto"
  data-setup='{}'>
    <source src="https://brlive-lh.akamaihd.net/i/bralpha_germany@119899/master.m3u8" type="application/x-mpegURL">
  </video>
<script>
var player = videojs('my_video_1');
player.play();
</script>
  
</body>
</html>