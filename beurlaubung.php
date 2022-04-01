<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("templates/header.inc.php");
?>
<div class="container main-container">
	
	<h1>Beurlaubung</h1>
	<p>in dringenden Ausnahmefällen gemäß § 39 Abs. 3 RSO</p>		<?php 
include("templates/alert-privat.inc.php")
?>
<br>
	<h4><div id="zeit"></div>
	<p>
  <time aria-current="date" id="zeit"></time>
</p></h4>
<script language="javascript" type="text/javascript">
window.setInterval("datum()",36000);
	var datum = new Date();
document.getElementById('zeit').innerHTML = datum;
function datum() {
	var zeit = new Date ();
	var stunde = (zeit.getHours() < 10 ? '0' + zeit.getHours() : zeit.getHours());
	var minute = (zeit.getMinutes() < 10 ? '0' + zeit.getMinutes() : zeit.getMinutes());
	var sekunde = (zeit.getSeconds() < 10 ? '0' + zeit.getSeconds() : zeit.getSeconds());
	document.getElementById("zeit").innerHTML = ' '
	+ stunde + ':' + minute;
}
datum();	
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script><script type="text/javascript">
            $(document).ready(function(){ $('#inserttext').load('txt/schule.txt');            
            });
        </script>
<br>
	<h4>ID <?php echo htmlentities($user['id']); ?><br>
	<?php echo htmlentities($user['vorname']); ?>
	<?php echo htmlentities($user['nachname']); ?><br>
	<?php echo htmlentities($user['created_at']); ?><br>
	<?php echo htmlentities($user['email']); ?></h4>
	<hr>
	<br>	
	<div id="inserttext">
</div>
		<!-- Content -->
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Unterschrift <p>Erziehungsberechtigten</p></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="sig-canvas" width="325" height="160">
		 		</canvas>
		 	</div>
		</div>
</div>
<style>
#sig-canvas {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: crosshair;
}

	</style>
	
	
	</style>
	<script>(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

		})();</script> 
	<pr>Alternative: Ausdrucken und Unterschreiben</pr><br>
    <p><b>E-Signatur verfügbar auf:</b> Tablet, Computer</p>
	<br>
<label>
    Beurlaubendes Datum/Uhrzeit: 
    <input type="datetime-local" name="geburtsdatum">
</label>
<h2>Unterschrift:________________________</h2>
<br>
	<br>
	<a href="javascript:self.print()">Seite drucken</a>	
	<script>
window.onbeforeunload = confirmExit;
function confirmExit() {
return "Möchten Sie diese Seite verlassen. Wenn Sie Änderungen an " + 
 "den Feldern, ohne zu klicken auf die Schaltfläche Speichern gemacht " + 
 "haben, werden Ihre Änderungen verloren gehen. Sind Sie sicher, dass" + 
 "Sie diese Seite verlassen wollen?";
}
</script>
<?php 
include("templates/footer.inc.php")
?>
</body>
</html>