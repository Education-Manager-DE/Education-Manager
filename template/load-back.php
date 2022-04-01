		<?php
session_start();
require_once("../inc/config.inc.php");
require_once("../inc/functions.inc.php");
$user = check_user();	
?>	
<html>
	<head>
		<meta http-equiv="refresh" content="8; URL=../internal.php">
		<title>Education-Manager</title>
		<link rel="icon" type="image/png" href="../images/favicon.png" sizes="32x32">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		<link href="../css/load-back.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>	
		<center>
		<img src="../images/favicon.png" width="200" height="200" alt=""/>	
	<div id="title"></center><h1>
		<div id="title"><h1>Erfolgreich! <br> Du wirst umgeleitet</h1>
			</div>
	</body>
</html>