<?php
include "templates/menu.html";
?>
<div style="padding-left:16px">
	<h2>Streaming Geschwindigkeit:</h2>
<?php 
    $kb=512;
    echo "Streaming $kb Kb...<!-";
    flush();
    $time = explode(" ",microtime());
    $start = $time[0] + $time[1];
    for($x=0;$x<$kb;$x++){
        echo str_pad('', 1024, '.');
        flush();
    }
    $time = explode(" ",microtime());
    $finish = $time[0] + $time[1];
    $deltat = $finish - $start;
    echo "-> Test beendet in $deltat sekunden. Deine Geschwindigkeit ist ". round($kb / $deltat, 3)."Kb/s";
    ?>
	<h2>Arbeitsspeicher:</h2>
	
	Konnte nicht ermittelt werden
	<h2>Systeminfo:</h2>
	<?php
$version = apache_get_version();
echo "$version\n";
?>
	<h2>IP Information:</h2>
	<?php
$ip = $_SERVER["REMOTE_ADDR"];  
    $host = gethostbyaddr($ip);

    echo "IP Adresse: $ip<br>";  
    echo "Hostname: $host";  
?>
