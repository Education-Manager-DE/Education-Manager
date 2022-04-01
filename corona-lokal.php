<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
include("./admin/config.php");
?>
<link href="css/corona.css" rel="stylesheet" type="text/css">
<div class="container main-container">
<h1>Corona-Ampel für den <span id="anzeigeLandkreisname"></span></h1>
	<br>
	<hr>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="container main-container">
<div class="block rand">
	7-Tage-Inzidenzwert im <span id="anzeigeLandkreisname" class="fett"></span><br/>
    <span class="kursiv kleiner">Stand: <span id="anzeigeLetztesUpdate"></span> (Robert-Koch-Institut (RKI), <a href="https://www.govdata.de/dl-de/by-2-0" target="_blank" title="Lizenz: Datenlizenz Deutschland – Namensnennung – Version 2.0" class="lizenzLink">dl-de/by-2-0</a>)</span>
	<div id="container_farbverlauf" style="display:inline-block;width:100%;text-align:center;height:110px;margin-top:10px;">
		<div id="farbverlauf" style="width:70%;height:50px;margin: 0 auto;position: relative;" class="farbverlauf">
			<div id="untererGrenzwert" style="width:33%;border-right: 2px solid; border-right-color: grey;height:70px;float:left;">
                <div style="display: flex; justify-content: flex-end;align-items: flex-end; height:100%;color:grey;font-size:smaller;">
                    <span title="unterer Grenzwert: 35">35</span> 
                </div>
			</div>
			<div id="obererGrenzwert" style="width:33%;border-right: 2px solid; border-right-color: grey; height:70px;text-align:right;float: left;">
                <div style="display: flex; justify-content: flex-end;align-items: flex-end; height:100%; color:grey;font-size:smaller;">
                    <span title="oberer Grenzwert: 50">50</span> 
                </div>
			</div>
			<div id="aktuellerWert" style="border-right: 5px solid #000000;height:80px;text-align:right;z-index: 1; position: absolute;float: left;"> 
                <span style="border: 1px solid #000000;padding:5px;background:#fff;margin-bottom: 5px;margin-right: -40px; margin-top:70px;font-weight:700;display: inline-block;text-align:center;" title="Aktueller Inzidenzwert">
                    <span id="anzeige7TageInzidenzWert"></span>
                </span>
			</div>
		</div>
	</div>
	<div style="clear:both;"></div>
</div>
<script type="text/javascript">
	var landkreisObjectId = '<?php echo $coronaid; ?>'; 
	var HttpClient = function() {
		this.get = function(request, callback) {
			var httpRequest = new XMLHttpRequest();
			httpRequest.onreadystatechange = function() { 
				if (httpRequest.readyState == 4 && httpRequest.status == 200)
					callback(httpRequest.responseText);
			}
			httpRequest.open("GET", request, true);
			httpRequest.send(null);
		}
	}
    var client = new HttpClient();
    var restServiceUrl = 'https://services7.arcgis.com/mOBPykOjAyBO2ZKk/arcgis/rest/services/RKI_Landkreisdaten/FeatureServer/0/query?where=OBJECTID%20%3E%3D%20'+landkreisObjectId+'%20AND%20OBJECTID%20%3C%3D%20'+landkreisObjectId+'&outFields=OBJECTID,death_rate,cases,deaths,cases_per_100k,cases_per_population,BL,BL_ID,county,last_update,cases7_per_100k,recovered,cases7_bl_per_100k&outSR=4326&f=json';
    client.get(restServiceUrl, function(response) {
        var jsonLandkreis = JSON.parse(response);
        jsonLandkreis = jsonLandkreis['features'][0]['attributes'];
        // Name des Landkreises
        var lk = document.querySelectorAll('[id="anzeigeLandkreisname"]');
        for(var i = 0; i < lk.length; i++) {
            lk[i].innerHTML = jsonLandkreis['county'].replace('LK', 'Landkreis');
        }
        // Name des Bundeslandes
        var bl = document.querySelectorAll('[id="anzeigeBundeslandname"]');
        for(var i = 0; i < bl.length; i++) {
            bl[i].innerHTML = jsonLandkreis['BL'];
        }
        // 7-Tages-Inzidenzwert
        var inzidenz7Tage= document.querySelectorAll('[id="anzeige7TageInzidenzWert"]');
        var inzidenz7 = Math.round((jsonLandkreis['cases7_per_100k'] * 100)) / 100;
        for(var i = 0; i < inzidenz7Tage.length; i++) {
            inzidenz7Tage[i].innerHTML = inzidenz7;
            //Auf Basis dieses Wertes wird abhaengig der Grenzwerte die Hintergrundfarbe geaendert:
            inzidenz7Tage[i].classList.remove('gruen');
            inzidenz7Tage[i].classList.remove('gelb');
            inzidenz7Tage[i].classList.remove('rot');
            if(inzidenz7 <= 35) {
                inzidenz7Tage[i].classList.add('gruen');
            } else if (inzidenz7 >35 && inzidenz7 <=50) {
                inzidenz7Tage[i].classList.add('gelb');
            } else if (inzidenz7 > 50) {
                inzidenz7Tage[i].classList.add('rot');
            }

        }
        // 7-Tages-Inzidenzwert Ampel
        var divAktuellerFarbverlauf = document.querySelectorAll('[id="farbverlauf"]');
        var divAktuellerAmpelWert = document.querySelectorAll('[id="aktuellerWert"]');
        var cssWidth = 0;
        if (inzidenz7 <=35) {
            cssWidth = (Math.round(inzidenz7) * 33) / 35 ;
        }
        if (inzidenz7 >35 && inzidenz7 <50) {
            cssWidth = (Math.round(inzidenz7) * 50) / 42;
        }
        if (inzidenz7 >=50 && inzidenz7 <=100) {
            cssWidth = ((Math.round(inzidenz7) * 66) / 100) + 33;				
        }
        for(var i = 0; i < divAktuellerFarbverlauf.length; i++) {
            if (inzidenz7 > 100) {
                cssWidth = 98;
                divAktuellerFarbverlauf[i].classList.remove('farbverlauf');
                divAktuellerFarbverlauf[i].classList.add('farbverlauf_ext');
            } else {
                divAktuellerFarbverlauf[i].classList.remove('farbverlauf_ext');
                divAktuellerFarbverlauf[i].classList.add('farbverlauf');
            }
            for(var i = 0; i < divAktuellerAmpelWert.length; i++) {
                    divAktuellerAmpelWert[i].style.setProperty('width', + cssWidth+ '%');
            }
        } 
        // 7-Tage-Inzidenzwert Bundesland
        var inzidenz7TageBL= document.querySelectorAll('[id="anzeige7TageInzidenzWertBundesland"]');
        for(var i = 0; i < inzidenz7TageBL.length; i++) {
            inzidenz7TageBL[i].innerHTML = Math.round((jsonLandkreis['cases7_bl_per_100k'] * 100)) / 100;
        }
        // Faelle pro 100k Einwohner
        var inzidenzLK= document.querySelectorAll('[id="anzeigeFaellePro100k"]');
        for(var i = 0; i < inzidenzLK.length; i++) {
            inzidenzLK[i].innerHTML = Math.round((jsonLandkreis['cases_per_100k'] * 100)) / 100;
        }
        // Letztes Update / Letzter Stand vom RKI bereitgestellt
        var letztesUpdate= document.querySelectorAll('[id="anzeigeLetztesUpdate"]');
        for(var i = 0; i < letztesUpdate.length; i++) {
            letztesUpdate[i].innerHTML = jsonLandkreis['last_update'];
        }
        // Gesamtfaelle im Landkreis
        var faelleLK = document.querySelectorAll('[id="anzeigeFaelleGesamt"]');
        for(var i = 0; i < faelleLK.length; i++) {
            faelleLK[i].innerHTML = jsonLandkreis['cases'];
        }
        // Todesfaelle im Landkreis
        var sterbefaelle = document.querySelectorAll('[id="anzeigeFaelleTod"]');
        for(var i = 0; i < sterbefaelle.length; i++) {
            sterbefaelle[i].innerHTML = jsonLandkreis['deaths'];
        }
        // Sterberate im Landkreis
        var sterberate = document.querySelectorAll('[id="anzeigeSterberate"]');
        for(var i = 0; i < sterberate.length; i++) {
            sterberate[i].innerHTML = (Math.round((jsonLandkreis['death_rate'] * 100)) / 100) + "%";
        }
        // Faelle bezogen auf Gesamtbevoelkerung 
        var betroffenenrate = document.querySelectorAll('[id="anzeigeBetroffenenrate"]');
        for(var i = 0; i < betroffenenrate.length; i++) {
            betroffenenrate[i].innerHTML = Math.round((jsonLandkreis['cases_per_population'] * 100)) / 100;	
        }
    });
</script>
<?php 
include("templates/footer.inc.php")
?>
